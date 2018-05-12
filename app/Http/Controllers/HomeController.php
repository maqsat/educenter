<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function teachers()
    {
        return view('teachers.profile');
    }

    public function estimate()
    {
        return view('teachers.estimate');
    }

    public function attestation(){
        return view('teachers.attestation');
    }

    public function student()
    {
        return view('teachers.student');
    }
}
