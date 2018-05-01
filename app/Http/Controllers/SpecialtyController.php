<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use App\Models\Subject;
use Illuminate\Http\Request;
use DB;

class SpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Specialty::all();
        return view('form.index',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:specialties',
        ]);

        $input = $request->except(['_token']);

        Specialty::create($input);

        return redirect('/specialty');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subjects = Subject::all();
        $specialties = Specialty::find($id);
        $specialty_subjects = DB::table('specialty_subjects')
            ->join('subjects','specialty_subjects.subject','=','subjects.id')
            ->where('specialty',$id)
            ->get();
        return view('specialty', compact('subjects','specialties','specialty_subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function subjects(Request $request)
    {
        $request->validate([
            'subject' => 'required|integer',
            'specialty' => 'required',
        ]);

        $specialty_subjects = DB::table('specialty_subjects')
            ->where('subject',$request->subject)
            ->where('specialty',$request->specialty)
            ->count();
        if($specialty_subjects > 0)  return redirect()->back();

        $input = $request->except(['_token']);

        DB::table('specialty_subjects')->insert([
            'subject' => $request->subject,
            'specialty' => $request->specialty,
        ]);

        return redirect()->back();
    }
}
