<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Group;
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

    public function estimate()
    {
        $group = Group::where('id',$_GET['group'])->get();
        return view('teachers.estimate', compact('group'));
    }

    public function estimated(Request $request)
    {
        DB::table('estimate_dates')->insert(['date'=>$request->date]);

        foreach ($request->estimate as $item){
            DB::table('dates_estimate')->insert([
                'date_id' => $request->date,
                'estimate' => $item
            ]);
        }

        return redirect()->back();


    }

    public function attestation(){
        return view('teachers.attestation');
    }

    public function student()
    {
        return view('teachers.student');
    }
}
