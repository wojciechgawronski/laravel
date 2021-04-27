<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function index () {
        $hello = 'hello from...';
        return view('services', compact('hello'));
    }

    public function about () {
        $hello = 'hello from...about';
        return view('about', compact('hello'));
    }

    public function services () {




        $services = [
            'services' =>  ['service 1', 'service 2', 'service 3', 'service 4',]
        ];
        $hello = [
            'hello' => ['hello from... services']
        ];
        $data = array_merge($services, $hello);
        $services =  ['service 1', 'service 2', 'service 3', 'service 4',];
        $services = [];

//        dd($data);
        return view('services', compact('services'));
    }
}
