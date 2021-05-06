<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 *
 * composer require laravel/ui // laravel auth ettication package
 * php artisan make:auth
 * npm install
 * npm run dev
 * php artisan ui bootstrap
 * npm install
 * npm run dev
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $questionnaires = auth()->user()->questionnaires;
        return view('home', compact('questionnaires'));
    }
}
