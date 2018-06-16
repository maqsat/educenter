<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Subject;
use App\Models\Specialty;
use Illuminate\Http\Request;
use DB;
use Auth;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
            if(isset($request->specialty)) $list = Group::where('specialty',$request->specialty)->get();
            else  $list = Group::all();

            return view('group.index',compact('list'));
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
    public function show(Request $request,$id)
    {
        if(isset($request->specialty_id)){
            $subjects = Subject::all();
            $specialties = Specialty::find($request->specialty_id);
            $group = Group::find($id);

            return view('specialty.index', compact('subjects','specialties','id','group'));
        }
        else{
            return redirect('/user?group='.$id);
        }
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
            'user' => 'required',
            'group' => 'required',
        ]);

        $specialty_subjects = DB::table('specialty_subjects')
            ->where('subject',$request->subject)
            ->where('specialty',$request->specialty)
            ->where('user',$request->user)
            ->where('semester',$request->semester)
            ->where('group',$request->group)
            ->count();
        if($specialty_subjects > 0)  return redirect()->back();

        $input = $request->except(['_token']);

        DB::table('specialty_subjects')->insert([
            'subject'   => $request->subject,
            'specialty' => $request->specialty,
            'semester'  => $request->semester,
            'user'  => $request->user,
            'group'  => $request->group
        ]);

        return redirect()->back();
    }

    public function teachersGroup()
    {
        $list = DB::table('specialty_subjects')
            ->join('groups','specialty_subjects.group','=','groups.id')
            ->where('specialty_subjects.user',Auth::user()->id)
            ->get();

        return view('teachers.group', compact('list'));
    }
}
