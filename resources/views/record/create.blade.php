@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-6">
                <div>
                    <h4 class="mr-auto">Student Name:
                        {{$student->name}}
                    </h4>
                    <h5 class="mr-auto">
                        Address: {{$student->home_address}}
                    </h5>
                </div>
            </div>
            <div class="col-6">
                <form action="/record/add" method="POST" id="add_new_record_form">
                    @csrf
                    <div class="form-group">
                        <label for="">Case Title</label>
                        <input type="text" class="form-control" value="" name="case_title" >
                    </div>
                    <div class="form-group">
                        <label for="">Complainant</label>
                        <input type="text" class="form-control" value="" name="complainant">
                    </div>
                    <div class="form-group">
                        <label for="">Complains</label>
                        <textarea value=""  class="form-control" name="complain"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Penalty</label>
                        <input type="text" class="form-control" value="" name="penalty">
                    </div>
                    <div class="form-group ">
                        <select name="adviser_id" id="adviser_id" class="py-2 px-2 form-control">
                                @foreach($advisers as $adviser) --}}
                        <option value="{{$adviser->id}}">{{$adviser->teacher_name}}</option>
                                @endforeach --}}
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="grade_year" id="grade_year" class="py-2 px-2 form-control">
                            <option value="Grade 7" class="form-control">Grade 7</option>
                            <option value="Grade 8" class="form-control">Grade 8</option>
                            <option value="Grade 9" class="form-control">Grade 9</option>
                            <option value="Grade 10" class="form-control">Grade 10</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-info btn_add_new_record py-2 px-2 mt-2" type="submit">Save New Record</button>
                    </div>
                    {{-- hidden inputs --}}
                    <div class="form-group">
                        {{-- created by --}}
                        <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">
                        {{-- student id --}}
                        <input type="hidden" name="student_id" id="student_id" value="{{$student->id}}">
                        {{-- status default status is 1 --}}
                        <input type="hidden" name="status_id" id="status_id" value="1">
                    </div>
                   
                </form>
            </div>
        </div>
    </div>
@endsection