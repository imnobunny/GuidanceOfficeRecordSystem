@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 mt-3">
            <h4 class="text-right">Add New Student</h4>
        </div>
        <div class="col-6 border py-3">
            <form action="" method="POST" enctype='multipart/form-data' id="add_new_student_form">
                @csrf
                {{ method_field('POST') }}
                <div class="form-group mt-3 py-1 px-3">
                    <label for="name">Student Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group py-1 px-3">
                    <label for="">Gender</label>
                    <div class="ml-5 mb-2">
                        <input type="radio" name="gender" value="Female" checked> Female
                    </div>
                    <div class="ml-5">
                        <input type="radio" name="gender" value="Male" active> Male
                    </div>
                </div>  
                    <div class="form-group mt-3 py-1 px-3">
                        <label for="">Home Address</label>
                        <input type="text" class="form-control" name="home_address">
                    </div>
                    <div class="form-group mt-3 py-1 px-3">
                        <label for="">Contact Number</label>
                        <input type="text" class="form-control" name="student_contact">
                    </div>  
                    <div class="form-group mt-3 py-1 px-3">
                        <label for="">Guardian Name</label>
                        <input type="text" class="form-control" name="guardian_name">
                    </div>
                    <div class="form-group mt-3 py-1 px-3">
                        <label for="">Guardian Contact</label>
                        <input type="text" class="form-control" name="guardian_contact">
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
                        <button class="btn btn-warning p-2 bd-highlight btn_save_new_student" type="button">Save New Student</button>
                    </div>
            </form>       
        </div>
    </div>
</div>
@endsection