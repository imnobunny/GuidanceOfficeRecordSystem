@extends('layouts.app')
@section('content')
    <div class="container">
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
                <form action="">
                    <div class="form-group">
                        <label for="">Case Title</label>
                        <input type="text" class="form-control" value="" >
                    </div>
                    <div class="form-group">
                        <label for="">Grade Year</label>
                        <input type="text" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Complainant</label>
                        <input type="text" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Complains</label>
                        <textarea value=""  class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Penalty</label>
                        <input type="text" class="form-control" value="" >
                    </div>
                    <div class="form-group">
                       <select name="adviser_id" id="adviser_id">
                           {{-- @foreach($advisers as $adviser) --}}
                                {{-- <option value="{{$adviser->id}}" class="form-control">Volvo</option> --}}
                            {{-- @endforeach --}}
                       </select>
                    </div>
                    {{-- hidden inputs --}}
                    <div class="form-group">
                        {{-- created by --}}
                        <input type="text" name="user_id" id="user_id" value="{{Auth::user()->id}}">
                        {{-- Adviser of the student--}}
                        <input type="text" name="adviser_id" id="adviser_id" value="">
                        {{-- student id --}}
                        <input type="text" name="student_id" id="student_id" value="{{$student->id}}">
                        {{-- status default status is 1 --}}
                        <input type="text" name="status_id" id="status_id" value="1"> 
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection