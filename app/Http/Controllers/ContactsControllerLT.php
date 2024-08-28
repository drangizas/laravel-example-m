<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ContactsControllerLT extends Controller
{
    function index(): View
    {
        return view('contacts/index-en', ['title' => __('Text used as an example')]);
    }
}
