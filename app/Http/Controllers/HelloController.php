<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function index()
    {
        $hello = 'hello from...';
        return view('services', compact('hello'));
    }

    public function about()
    {
        $hello = 'hello from...about';
        return view('about', compact('hello'));
    }
}
