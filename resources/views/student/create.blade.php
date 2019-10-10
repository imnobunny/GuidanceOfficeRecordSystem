@extends('layouts.app')
@section('content')
<h1 class="text-center">Add New Student</h1>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Student's Name">
                </div>
                <div class="form-group">
                    <label for="birthdate">Birthdate:</label>
                    <input type="text" class="form-control" id="birthdate" name="birthdate" placeholder="YYYY-MM-DD">
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Student's Home address">
                </div>
                <div class="form-group">
                    <label for="guardian">Student's Guardian Name:</label>
                    <input type="text" class="form-control" id="guardian" name="guardian" placeholder="Enter Guardian's Name">
                </div>
                <div class="form-group">
                    <label for="name_person_emergency">Contact Person in case of Emergency:</label>
                    <input type="text" class="form-control" id="name_person_emergency" name="name_person_emergency" placeholder="Name of contact person in case of emergency">
                </div>
                <div class="form-group">
                    <label for="number_person_emergency">Contact Details:</label>
                    <input type="text" class="form-control" id="contact_person_" name="number_person_emergency" placeholder="Name of contact person in case of emergency">
                </div>
            </form>    
        </div>
    </div>
</div>
@endsection