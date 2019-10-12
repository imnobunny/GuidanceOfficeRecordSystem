@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <img src="{{$student->student_picture}}" alt="..." class="img-thumbnail  float-right">
        </div>
        <div class="col-6 border py-3">
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
    </div>

<!-- Modal -->
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
           <input type="submit" name="Test" id="" class="btn btn-warning btn-delete-student">
            {{-- <a href="/delete/student/{{$student->id}}" class="btn btn-warning btn-delete-student">Delete test</a> --}}
         </form>
          
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection