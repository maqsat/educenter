<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = [];
        if(isset($request->group))  $list = User::where('type_id',3)->where('group_id',$request->group)->get();
        if(isset($request->cathedra)) $list = User::where('type_id',2)->where('cathedra_id',$request->cathedra)->get();
        //dd($list);
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
        if (!isset($request->cathedra_id)){
            $request->validate([
                'name' => 'required',
                'uniqid' => 'required|unique:users',
                'password' => 'required',
                'group_id' => 'required',
            ]);
        }
        else{
            $request->validate([
                'name' => 'required',
                'password' => 'required',
                'cathedra_id' => 'required',
            ]);
        }


        $input = $request->except(['_token']);

        $input['password'] = bcrypt($request->password);

        if (!isset($request->cathedra_id)){
            $input['type_id'] =  3;
        }
        else{
            $input['type_id'] =  2;
        }

        User::create($input);

        return redirect()->back();
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

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function profile()
    {
        return view('user.profile');
    }
}
