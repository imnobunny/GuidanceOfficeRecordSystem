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
                    
                </div>
               
            </form>
        </div>
        <div class="col-2">
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Students</a>
                    <div class="dropdown-menu">
                            <a class="dropdown-item" href="/add/student">Add New Student</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Edit Student</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Delete Student</a>
                          </div>
                  <span class="badge badge-primary badge-pill">14</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Records
                  <span class="badge badge-primary badge-pill">2</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Reports
                  <span class="badge badge-primary badge-pill">1</span>
                </li>
            </ul>
        </div>
        <div class="col-10">
            <table class="table table-dark">
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
                    <th scope="row">1</th>
                    <td>{{$student->name}}</td>
                    <td>{{$student->gender}}</td>
                    <td>{{$student->home_address}}</td>
                    <td>{{$student->contact_number}}</td>
                    <td>
                        <a href="#" class="btn btn-info">View</a>
                        <a href="#" class="btn btn-success mr-1">Records</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection
