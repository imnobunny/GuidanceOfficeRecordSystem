@extends('layouts.app')
@section('content')

<div class="container mt-5">
  <div class="col-12">
    <div class="row">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Student Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                Records <span class="badge badge-primary">{{$records->count()}}</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Adviser</a>
            </li>
          </ul>
          <div class="tab-content col-12" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <form action="">
                    <div class="container mt-2">
                      <div class="row">
                          <div class="col-5 mt-5">
                              <img src="{{$student->student_picture}}" alt="..." class="img-thumbnail">
                          </div>
                          <div class="col-7 mt-5 mb-5">
                            <h4>Name: {{$student->name}}</h4>
                            <h5>Gender: {{$student->gender}}</h5>
                            <h5>Home Address: {{$student->home_address}}</h5>
                            <h5>Contact Number: {{$student->contact_number}}</h5>
                            <h5>Guardian Name: {{$student->guardian_name}}</h5>
                            <h5>Guardian Contact Number: {{$student->guardian_contact}}</h5>
                            <h5>Relationship to the Guardian: {{$student->relationship->relationship}}</h5>
                            <h6>Date Created: {{$student->created_at}}</h6>
                            <h6>Date Updated: {{$student->updated_at}}</h6>
                            <div>
                              <a href="/edit/student/{{$student->id}}" class="btn btn-primary">Edit</a>
                              @If(Auth::user()->role_id == '1')
                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteStudent">Delete</a>
                              @else
                              
                              @endif
                            </div>
                          </div>  
                      </div>
                    </div>
                  </form>
              
            </div>
            <div class="tab-pane fade col-12 mt-5" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            @if($records->count() > 0)
              
                  <div class="col">
                    <div class="row">
                        <table class="table table-sm table-hover">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Case_title</th>
                                <th scope="col">Year</th>
                                <th scope="col">Complain</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($records as $record)
                              <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$record->case_title}}</td>
                                <td>{{$record->grade_year}}</td>
                                <td>{{$record->penalty}}</td>
                                <td>{{$record->status->status}}</td>
                                <td>
                                   <a href="/record/view/{{$record->id}}" class="btn btn-primary btn-view-record"
                                      data-case ="{{$record->case_title}}" data-year = "{{$record->grade_year}}" data-complain = "{{$record->complain}}"
                                      data-complainant = "{{$record->complainant}}" data-penalty ="{{$record->penalty}}" data-user ="{{$record->user_id}}" 
                                      data-adviser ="{{$record->adiviser_id}}" data-student ="{{$record->student_id}}">
                                      view
                                   </a>
                                   <a href="/record/edit/{{$record->id}}" class="btn btn-primary">Edit</a>
                                </td>
                                {{-- <td>
                                    <a href="/record/view/{{$record->id}}" class="btn btn-primary btn-view-record"
                                      data-case ="{{$record->case_title}}" data-year = "{{$record->grade_year}}" data-complain = "{{$record->complain}}"
                                      data-complainant = "{{$record->complainant}}" data-penalty ="{{$record->penalty}}" data-user ="{{$record->user_id}}" 
                                      data-adviser ="{{$record->adiviser_id}}" data-student ="{{$record->student_id}}">
                                      view
                                   </a>
                                   <a href="/record/edit/{{$record->id}}" class="btn btn-warning">
                                     Edit
                                   </a>
                                    </a>
                                   <a href="" class="btn btn-danger" data-toggle="modal" data-target="#deleteRecord">
                                     Delete
                                   </a>
                                </td> --}}
                              </tr>
                              @endforeach
                              <tr>
                                <td scope="col" colspan="7">
                                  <div class="col d-flex flex-row-reverse bd-highlight">
                                      <a href="/record/new/{{$student->id}}" class="btn btn-warning mt-2 p-2 bd-highlight">Add New Record</a>
                                  </div>
                                   
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          @else 
                          <div class="col mt-5 mb-5">
                              <h3>No Records found. <a href="/record/new/{{$student->id}}">Would you like to create one?</a></h3>
                          </div>
                          @endif
                    </div>
                  </div>
                </div>
            
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
          </div>
    </div>
  </div>
</div>

{{-- <div class="container ml-3 mr-3">
    <div class="row">
        <div class="col-6  py-3">
                <div class="form-group">
                    <div class="col-12 float-right mb-2">
                        <img src="{{$student->student_picture}}" alt="..." class="img-thumbnail  float-right">
                    </div>
                </div>
                <div class="form-group mt-3 py-1 px-3">
                    <label for="name">Student Name</label>
                <input type="text" class="form-control" value="{{$student->name}}" readonly>
                </div>
                <div class="form-group py-1 px-3">
                    <label for="">Gender</label>
                    <input type="text" class="form-control" value="{{$student->gender}}" readonly>
                </div>  
                    <div class="form-group mt-3 py-1 px-3">
                        <label for="">Home Address</label>
                        <input type="text" class="form-control" value="{{$student->home_address}}" readonly>
                    </div>
                    <div class="form-group mt-3 py-1 px-3">
                        <label for="">Contact Number</label>
                        <input type="text" class="form-control" value="{{$student->contact_number}}" readonly>
                    </div>  
                    <div class="form-group mt-3 py-1 px-3">
                        <label for="">Guardian Name</label>
                        <input type="text" class="form-control" value="{{$student->guardian_name}}" readonly>
                    </div>
                    <div class="form-group mt-3 py-1 px-3">
                        <label for="">Guardian Contact</label>
                        <input type="text" class="form-control" value="{{$student->guardian_contact}}" readonly>
                    </div>
                    <div class="form-group mt-3 py-1 px-3">
                        <label for="" class="mr-2">Relationship to the Guardian</label>
                    <input type="text" class="form-control" value="{{$student->relationship->relationship}}" readonly>
                        <option value=""></option>
                            
                        </select>
                    </div>
                    <div class="form-group d-flex flex-row-reverse bd-highlight">
                        <a href="/edit/student/{{$student->id}}" class="btn btn-warning p-2 bd-highlight mr-2 ">Edit Student Info</a>
                        <a href="#" class="btn btn-danger p-2 bd-highlight mr-2" data-toggle="modal" data-target="#deleteStudent">Delete Student</a>
                        <a href="{{ URL()->previous()}}" class="btn btn-info p-2 bd-highlight mr-2">Back</a>
                    </div>
            </form>       
        </div>
    </div> --}}

<!-- Modal For Delete Student-->
 <div class="modal fade" id="deleteStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Please confirm</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure do you want to delete information of student <strong>{{$student->name}}</strong>?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
         <form action="/delete/student/{{$student->id}}" method="">
            {{ csrf_field() }}
           {{method_field('delete')}}
           <button input type="submit" name="delete" class="btn btn-warning btn-delete-student">Yes, Delete.</button>
         </form> 
          
          </form>
        </div>
      </div>
    </div>
  </div>


@endsection