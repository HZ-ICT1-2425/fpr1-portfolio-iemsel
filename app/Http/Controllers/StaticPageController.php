<?php
namespace App\Http\Controllers;

class StaticPageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function faq()
    {
        return view('faq');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function blog()
    {
        return view('blogs');
    }
}

