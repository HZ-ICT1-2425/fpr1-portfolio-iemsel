<?php
namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class StaticPageController extends Controller
{
    /**
     * @return Factory|View|Application
     */
    public function home()
    {
        return view('welcome');
    }

    /**
     * @return Factory|View|Application
     */
    public function about()
    {
        return view('about');
    }

    /**
     * @return Factory|View|Application
     */
    public function faq()
    {
        return view('faq');
    }

    /**
     * @return Factory|View|Application
     */
    public function dashboard()
    {
        return view('dashboard');
    }

    /**
     * @return Factory|View|Application
     */
    public function blog()
    {
        return view('blogs');
    }
}
