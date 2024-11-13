<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Image;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ProfileController extends Controller
{

    public function index(){

        $links_click_count = Link::where("user_id" , auth()->id() )
        ->sum("clicks");

        $images  = Image::all();
        
        return view("dashboard")
        ->with( compact("links_click_count"))
        ->with( "user" , auth()->user())
        ->with( compact("images"));
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'nullable|string|max:255',
            'about' => 'nullable|string|max:1000',
        ]);

        // Update the user’s basic information
        $user->name = $request->name;
        $user->email = $request->email;
        $user->title = $request->title;
        $user->about = $request->about;


        // Handle profile image upload
        if ($request->hasFile('profile_image')) {
            if ($user->image) {
                Storage::delete($user->image); // Delete old image
            }
            $user->image = "storage/" . $request->file('profile_image')->store('uploads/profile/profiles', 'public');
        }

        // Handle cover image upload
        if ($request->hasFile('cover_image')) {
            if ($user->cover_image) {
                Storage::delete($user->cover_image); // Delete old cover image
            }
            $user->cover_image = "storage/" . $request->file('cover_image')->store('uploads/profile/covers', 'public');
        }

        // Save changes
        $user->save();

        return back()->with('success', 'Profile updated successfully.');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
