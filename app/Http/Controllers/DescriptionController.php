<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    public function webdev()
    {
        return view('description.webdev');
    }

    public function university()
    {
        return view('description.university');
    }
}
