<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function hello()
    {
        echo 'This is a hello from WelcomeController!'; // is going to print a message @ screen in the specific path/page
        return view('welcome', ['name' => 'Ana Clara']); // return is going to return something - in that case it'll be a view (path/page) called "welcome" and a variable
    }
}
