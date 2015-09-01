<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
        $name = 'Bobby Li';
        return view('pages.about')->with('name', $name);
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
