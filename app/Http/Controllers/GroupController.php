<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Specialty;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Group::all();
        return view('form.index',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialties = Specialty::all();

        return view('form.create',compact('specialties'));
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
            'specialty' => 'required|integer',
            'date_arrival' => 'required',
            'group_number' => 'required',
            'semester' => 'required',
        ]);

        $result =  Group::where('specialty',$request->specialty)->where('date_arrival',$request->date_arrival)->where('date_arrival',$request->date_arrival)->where('semester',$request->semester)->count();
        if($result>0) return redirect()->back();

        $input = $request->except(['_token']);
        if($request->semester >= 7) $course = 4;
        elseif($request->semester >= 6) $course = 3;
        elseif($request->semester >= 4) $course = 2;
        else $course = 1;

        $input['title'] = Specialty::find($request->specialty)->title.'-'.$request->date_arrival.'-'.$request->group_number.'(курс-'.$course.')';

        Group::create($input);

        return redirect('/group');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
