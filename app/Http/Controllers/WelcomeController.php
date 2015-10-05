<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    /**
     * Show the welcome page.
     *
     * @return Response
     */
    public function index()
    {
        return view('welcome');
    }
}