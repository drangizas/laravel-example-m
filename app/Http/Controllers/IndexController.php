<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class IndexController extends Controller
{
    function index(): View
    {
        return view('index/index', ['title' => __('landing_title')]);
    }
}
