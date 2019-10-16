@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-12 mb-1">
            <form action="">
                    <div class="d-flex bd-highlight">
                        <div class="p-2 w-100 bd-highlight">
                            <input type="text" class="form-control" placeholder="Search Name">
                        </div>
                        <div class="p-2 flex-shrink-1 bd-highlight">
                            <button class="btn btn-primary">Search</button>
                        </div>

                    </div>
                <div class="form-group p-2">    
                    <a href="/add/student" class="btn btn-info"> <i class="fas fa-2 fa-user-plus"></i> Add New Student</a>
                    {{-- <button type="button" class="btn btn-warning"> <i class="fas fa-file-medical"></i> Add New Record</button> --}}
                </div>
               
            </form>
        </div>
        <div  class="col-12">

        </div>
        <div class="col-12">
            <table class="table table-responsive{-sm|-md|-lg|-xl} table-sm table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Home Address</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($students as $student)
                  <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$student->name}}</td>
                    <td>{{$student->gender}}</td>
                    <td>{{$student->home_address}}</td>
                    <td>{{$student->contact_number}}</td>
                    <td>
                        <a href="/view/student/{{$student->id}}" class="btn btn-info">View</a>
                        
                    </td>
                    {{-- <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Records
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/records/{{$student->id}}">View Records</a>
                                <a class="dropdown-item" href="/record/new/{{$student->id}}" >Add New Record</a>
                            </div>
                        </div>
                    </td> --}}
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection
