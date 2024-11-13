<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Models\Image;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
{

    public function redirect($path)
    {
        $link = Link::where('path', $path)->firstOrFail();

        // Increment click count
        $link->increment('clicks');

        // Redirect to the original URL
        return redirect()->to($link->original_url);
    }


    public function store(StoreLinkRequest $request)
    {
        try {

            $linkData = $request->only(['title', 'url', "image", "image_id"]);

            if ($request->image_id) {
                $image_id = $request->image_id;
            } else {
                // Handle Image upload if provided
                if ($request->hasFile('image')) {
                    $imagePath = $request->file('image')->store('uploads/links/images', 'public');
                    $image = Image::create(['path' => "storage/" . $imagePath]);
                    $image_id = $image->id;
                } else {
                    $image_id = null;
                }

            }

            // Create the link record, associating it with the image
            $link = Link::create([
                'title' => $request->title,
                'user_id' => auth()->id(),
                'path' => $this->generateUniqueLinkPath(),
                'original_url' => $request->url, // Replace with your actual original URL
                'image_id' => $image_id // Associate the image with the link
            ]);

            // dd(   $link  );

            return redirect()->back()->with([
                'message' => 'تم حفظ الرابط بنجاح',
                'link' => $link
            ]);

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'حدث خطأ أثناء حفظ الرابط.');
        }
    }


    private function generateUniqueLinkPath(): string
    {
        do {
            $path = Str::random(10);
        } while (Link::where('path', $path)->exists());

        return $path;
    }


    public function destroy($id)
    {
        $auth_user = Auth::user();

        $link = Link::find($id);

        if (!$link) {
            return redirect()->back()->with('error', 'Link not found');
        }

        if ($link->user_id != $auth_user->id) {
            return redirect()->back()->with('error', 'غير مسموح لك بحدف الرابط');
        }

        $link->delete();
        return redirect()->back()->with('message', 'ثم حدف الرابط بنجاح');
    }


}
