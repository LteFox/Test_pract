<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RoutController extends Controller
{
    public function about():View
    {
        $collections = Collection::limit(4)->get();
        return view('guest.about', ['collections' => $collections]);
    }

    public function gallery():View
    {
        $collections = Collection::limit(4)->get();
        return view('guest.gallery', ['collections' => $collections]);
    }
    public function contact_us():View
    {
        $collections = Collection::limit(4)->get();
        return view('guest.contact_us', ['collections' => $collections]);
    }
}