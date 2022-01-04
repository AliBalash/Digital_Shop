<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TestJson extends Controller
{
    public function index()
    {
        return \view('testJson');
    }
}
