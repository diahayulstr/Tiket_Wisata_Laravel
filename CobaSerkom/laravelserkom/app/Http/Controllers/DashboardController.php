<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function rafting()
    {
        return view('pages.rafting');
    }

    public function curug()
    {
        return view('pages.curug');
    }

    public function taman()
    {
        return view('pages.taman');
    }

    public function harga()
    {
        return view('pages.harga');
    }
}
