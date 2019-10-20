<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Relationship;
use App\Record;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    public function index()
    {
        $users = User::all();
        $relationships = Relationship::all();
        //return view('record.create', compact('student', 'advisers'));
        return view('admin.home', compact('users', 'relationships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function destroy()
    {
        //
    }

    public function changerole(Request $request, $id)
    {
    
    $this->validate($request, [
        'role_id' => 'required'
    ]);
    
    $user_id = User::find($id);
    $user_id->role_id = $request->input('role_id');
    $user_id->save();
    return redirect()->back()->with('success', "Successfully updated role to User");
    }


    public function addRelationship(Request $request)
    {
        // dd('addRelationship');
        $this->validate($request, [
            'new_relationship' => 'required'
        ]);

        $new_relationship = new Relationship;
        $new_relationship->relationship = $request->input('new_relationship');
        $new_relationship->save();
        
        return redirect()->back()->with('success', "Successfully add new relationship");
        
    }
}
