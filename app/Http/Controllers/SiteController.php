<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.home');
    }

    public function layanan()
    {
        return view('site.layanan');
    }
    
    public function kontak()
    {
        return view('site.kontak');
    }

    public function strukturOrganisasi()
    {
        return view('site.strukturOrganisasi');
    }

    public function login()
    {
        return view('site.login');
    }
}

