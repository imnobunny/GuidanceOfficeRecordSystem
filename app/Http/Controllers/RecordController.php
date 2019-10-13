<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;
use App\Student;
use App\Adviser;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd("create");
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
        $record = Record::find($id);
        return view ('record.view')->with('record', $record);
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

    public function allrecords($id)
    {
      // dd("allrecords");
        $records = Record::where('student_id', $id)->get();
        if($records->count() > 0){
            return view('record.allrecords')->with('records', $records);
        } else {
            return view('record.view1');
        }
    }

    public function addrecord($id)
    {
    // dd("test");
        $student = Student::find($id);
        //dd($student);
        return view ('record.create')->with('student', $student);

        
    }

}
