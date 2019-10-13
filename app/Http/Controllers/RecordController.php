<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;
use App\Student;
use App\Adviser;
use App\Status;

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
        $this->validate($request, [
            'case_title' => 'required',
            'complainant' => 'required',
            'complain' => 'required',
            'penalty' => 'required',
            'adviser_id' => 'required',
            'grade_year' => 'required',
            'user_id' => 'required',
            'student_id' => 'required',
            'status_id' => 'required'
        ]);


        // $new_student = new Student;
        // $new_student->name = $request->input('name');

        $new_record = new Record;
        $new_record->case_title = $request->input('case_title');
        $new_record->complainant = $request->input('complainant');
        $new_record->complain = $request->input('complain'); 
        $new_record->penalty = $request->input('penalty');
        $new_record->adviser_id = $request->input('adviser_id');
        $new_record->grade_year = $request->input('grade_year');
        $new_record->user_id = $request->input('user_id');
        $new_record->student_id = $request->input('student_id');
        $new_record->status_id = $request->input('status_id');
        $id =  $request->input('student_id');
        $new_record->save();
        return redirect("/records/{$id}");
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
        $advisers = Adviser::all();
        $statuses = Status::all();
        $record = Record::find($id);
        return view ('record.edit', compact('record', 'statuses', 'advisers'));
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
       //dd("test update");
       $this->validate($request, [
        'case_title' => 'required',
        'grade_year' => 'required',  
        'complain' => 'required',
        'complainant' => 'required',
        'penalty' => 'required',
        'user_id' => 'required',
        'adviser_id' => 'required',
        'student_id' => 'required',
        'status_id' => 'required',
       ]);

      
       $student = Student::find($id);
       $student ->name = $request->input('name');
       
        $record = Record::find($id);
        // dd($record);
        $record->case_title = $request->input('case_title');
        $record->grade_year = $request->input('grade_year');
        $record->complain = $request->input('complain');
        $record->complainant = $request->input('complainant');
        $record->penalty = $request->input('penalty');
        $record->user_id = $request->input('user_id');
        $record->adviser_id = $request->input('adviser_id');
        $record->student_id = $request->input('student_id');
        $record->status_id = $request->input('status_id');
        $record->save();

        return view('/home');
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
        $advisers = Adviser::all();
        //dd($student);
        return view ('record.create', compact('student', 'advisers'));

    }

}
