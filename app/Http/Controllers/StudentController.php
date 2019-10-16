<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Relationship;
use App\Student;
use App\Record;

class StudentController extends Controller
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
        $relationships = Relationship::all();
        return view('student.create')->with('relationships', $relationships);
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
            'name' => 'required',
            'gender' => 'required',
            'home_address' => 'required',
            'student_contact' => 'required',
            'guardian_name' => 'required',
            'guardian_contact' => 'required',
            //'student_picture' => 'required',
            'relationship' => 'required'
        ]);
    //    dd("tokwa");
        $new_student = new Student;
        $new_student->name = $request->input('name');
        $new_student->gender = $request->input('gender');
        $new_student->home_address = $request->input('home_address');
        $new_student->contact_number = $request->input('student_contact');
        $new_student->guardian_name = $request->input('guardian_name');
        $new_student->guardian_contact = $request->input('guardian_contact');
        //$new_student->student_picture = $request->input('student_picture');
        $new_student->relationship_id = $request->input('relationship');
        $name = $request->input('name');
        $new_student->save();
        
        return redirect()->action('HomeController@index')->with('success', '$name was successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        $records = Record::where('student_id', $id)->get();
        //dd($records);
        return view('student.view', compact('student', 'records'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     
    public function edit($id)
    {   
        $student = Student::find($id);
        $relationships = Relationship::all();
        return view('student.edit', compact('student', 'relationships'));
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
            'name' => 'required',
            'gender' => 'required',
            'home_address' => 'required',
            'student_contact' => 'required',
            'guardian_name' => 'required',
            'guardian_contact' => 'required',
            //'student_picture' => 'required',
            'relationship' => 'required'
        ]);

        $student = Student::find($id);
        $student ->name = $request->input('name');
        $student ->gender = $request->input('gender');
        $student ->home_address = $request->input('home_address');
        $student ->contact_number = $request->input('student_contact');
        $student ->guardian_name = $request->input('guardian_name');
        $student ->guardian_contact = $request->input('guardian_contact');
        $student ->relationship_id = $request->input('relationship');
        $student->save();

        return redirect("/view/student/$id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->action('HomeController@index');
    }
}
