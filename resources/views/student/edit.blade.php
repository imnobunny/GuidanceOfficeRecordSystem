@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 mt-3">
            <h4 class="text-right">Edit Form</h4>
            
        </div>
        <div class="col-6 border py-3">
            <form action="/update/student/{{$student->id}}" method="GET" enctype='multipart/form-data' id="edit_student_form">
                @csrf
                {{ method_field('GET') }}
                <img src="{{$student->student_picture}}" alt="..." class="img-thumbnail  float-center">
                <div class="form-group mt-3 py-1 px-3">
                    <label for="name">Student Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$student->name}}">
                </div>
                <div class="form-group py-1 px-3">
                    <label for="">Gender</label>
                    <select class="btn border ml-2" name="gender">
                        <option value="Female" {{$student->gender == "Female"? "selected" : ""}}>Female</option>
                        <option value="Male" {{$student->gender == "Male"? "selected" : ""}}>Male</option>
                    </select>
                </div>  
                    <div class="form-group mt-3 py-1 px-3">
                        <label for="">Home Address</label>
                        <input type="tel" class="form-control" name="home_address" value="{{$student->home_address}}">
                    </div>
                    <div class="form-group mt-3 py-1 px-3">
                        <label for="">Contact Number</label>
                        <input type="tel" class="form-control input-phone" name="student_contact" value="{{$student->contact_number}}"  pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="000-00-000" required>
                    </div>  
                    <div class="form-group mt-3 py-1 px-3">
                        <label for="">Guardian Name</label>
                        <input type="text" class="form-control" name="guardian_name" value="{{$student->guardian_name}}">
                    </div>
                    <div class="form-group mt-3 py-1 px-3">
                        <label for="">Guardian Contact</label>
                        <input type="tel" class="form-control" name="guardian_contact" value="{{$student->guardian_contact}}" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="000-00-000" required>
                    </div>
                    <div class="form-group mt-3 py-1 px-3">
                        <label for="" class="mr-2">Relationship to the Guardian</label>
                        <select class="btn border" name="relationship">
                            @foreach($relationships as $relationship)
                        <option value="{{$relationship->id}}">{{$relationship->relationship}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3 py-1 px-3">
                            <label for="">Student's Picture</label>
                            <input type="file" name="student_picture"class="form-control">
                    </div>
                        <div class="form-group d-flex flex-row-reverse bd-highlight">
                        <input type="hidden" id="student_id" value="{{$student->id}}">
                        <button class="btn btn-warning p-2 bd-highlight btn-block btn-update-student-info" type="submit">Update</button>
                    </div>
            </form>       
        </div>
    </div>
</div>
@endsection