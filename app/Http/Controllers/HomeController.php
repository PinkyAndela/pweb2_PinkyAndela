<?php

namespace App\Http\Controllers;

use App\Models\Alumni;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $alumni = Alumni::latest()->paginate(5);

        return view('home', compact('alumni'));
    }
}
