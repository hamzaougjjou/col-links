<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\ProfileLinks;
use Illuminate\Http\Request;

class ProfileLinksController extends Controller
{
    //

    public function index($user_url)
    {
        $profile_link = ProfileLinks::where("user_url", $user_url)->first();

        if (!$profile_link) {
            abort(404);
        }
        
        // Increment click count
        $profile_link->increment('visits');

        return view("page")->
        with("data" , $profile_link)
        ;
    }
}
