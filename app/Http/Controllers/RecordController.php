<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Record;
use App\Student;
use App\Adviser;
use App\Status;
use App\History;
use Session;
use App\Comment;
//to use auth::user in controllers.
use Illuminate\Support\Facades\Auth;



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
        //vars to use in alerts
        $student_id = $request->input('student_id');
        $case_title = $request->input('case_title');
        // data to add in history
        $user_id = $request->input('user_id');
        $case_title = $request->input('case_title');
        $new_record->save();
        $record_id = $new_record->id;
        // history
        $add_history = new History;
        $add_history->user_id = $user_id;
        $add_history->record_id = $record_id;
        $add_history->changes_made = "Created new record with title $case_title";
        $add_history->save();
        //save new record
       
        return redirect("/view/student/{$student_id}")->with('success', "Successfully added new record for with case title: $case_title");

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
        $histories = History::where('record_id', $id)->get();
        $comments = Comment::where('record_id', $id)->get();

        return view ('record.view', compact('record', 'histories', 'comments'));
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
        'updated_by' => 'required'
       ]);

      
    
        $record = Record::find($id);
        $record->case_title = $request->input('case_title');
        $record->grade_year = $request->input('grade_year');
        $record->complain = $request->input('complain');
        $record->complainant = $request->input('complainant');
        $record->penalty = $request->input('penalty');
        $record->user_id = $request->input('user_id');
        $record->adviser_id = $request->input('adviser_id');
        $record->student_id = $request->input('student_id');
        // vars use in alerts
        $case_name = $request->input('case_title');
        $student_name = $record->student->name;
        $record->status_id = $request->input('status_id');
        //add history
        $add_history = new History;
        $add_history->user_id = $request->input('updated_by');
        $add_history->record_id = $id;
        $add_history->changes_made = "edited the details of the case";
        $add_history->save();
        $record->save();

        return redirect()->back()->with('success', "Case title $case_name of student $student_name has been successfully edited");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Record::find($id);
        $id_del = $record->id;
        $student_id = $record->student_id;
        $record_name = $record->student->name;
        $record->delete();
        //dd($id);
        return redirect("/view/student/$student_id")->with("success", "Successfully deleted record of $record_name")
        ->with('undo_url',"/record/restore/$id");
    }

    public function allrecords($id)
    {
      // dd("allrecords");
        $records = Record::where('student_id', $id)->get();
        if($records->count() > 0){
            return view('record.allrecords')->with('records', $records);
        } else {
            // dd('test1');
            return view('record.view1');
        }
    }

    public function addrecord($id)
    {
    // dd("test");
        $student = Student::find($id);
        $advisers = Adviser::all();
        //dd($student);
        return view('record.create', compact('student', 'advisers'));
    }

    public function restore($id)
    {

        //dd($id);
        $record = Record::onlyTrashed()
        ->where('id', $id)
        ->first();
        $record_name = $record->case_title;

        // add history
        $add_history = new History;
        $add_history->user_id= Auth::user()->id;
        $add_history->record_id= $id;
        $add_history->changes_made="case title $record_name has been restored";
        $add_history->save();

        $record->restore();
        return back()->with("success", "Case title: $record_name has been restored!");


    }
}
