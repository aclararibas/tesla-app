<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function blog()
    {
        return view('pages.blog');
    }

    function contact()
    {
        return view('pages.contact');
    }

    function gallery()
    {
        return view('pages.gallery');
    }

    function index()
    {
        return view('pages.index');
    }
}
