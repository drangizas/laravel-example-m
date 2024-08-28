<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ContactsController extends Controller
{
    function index(): View
    {
        return view('contacts/index', ['title' => __('Text used as an example')]);
    }
}
