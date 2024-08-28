<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class IndexControllerLT extends Controller
{
    function index(): View
    {
        return view('index/index-lt', ['title' => __('landing_title')]);
    }
}
