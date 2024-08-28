<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class IndexControllerEN extends Controller
{
    function index(): View
    {
        return view('index/index-en', ['title' => __('landing_title')]);
    }
}
