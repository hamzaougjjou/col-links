<?php
namespace App\Http\Controllers;

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


    public function store(Request $request){

    }

    
}
