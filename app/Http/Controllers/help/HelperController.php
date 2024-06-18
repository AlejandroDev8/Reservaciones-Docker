<?php

namespace App\Http\Controllers\help;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelperController extends Controller
{
    public function index()
    {
        return view('help.guest');
    }

    public function users()
    {
        return view('help.auth-user');
    }
}
