<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function rules()
    {
        return view('rules');
    }

    public function sertifikat()
    {
        return view('sertifikat');
    }

    public function acara()
    {
        return view('event_acara');
    }
    public function about()
    {
        return view('about');
    }
    public function faq()
    {
        return view('faq');
    }
    public function login()
    {
        return view('login');
    }
}
