@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div>
                <h1>Case Status: {{$record->status->status}}</h1>
                </div>
                <div>
                <h4 class="mr-auto">Student Name: {{$record->student->name}}</h4>
                <h5 class="mr-auto">Home Address: {{$record->student->home_address}}</h5>
                <a href="/record/edit/{{$record->id}}" class="btn btn-primary mr-2">Edit</a>
                <button class="btn btn-info" data-toggle="modal" data-target="#deleteRecord">Delete</button>
                </div>
            </div>
            <div class="col-6">
                <form action="">
                    <div class="form-group">
                    <label for="">Case Title</label>
                    <input type="text" class="form-control" value="{{$record->case_title}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Grade Year</label>
                        <input type="text" class="form-control" value="{{$record->grade_year}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Complainant</label>
                        <input type="text" class="form-control" value="{{$record->complainant}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Complains</label>
                        <textarea value=""  class="form-control" readonly>{{$record->complain}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Penalty</label>
                        <input type="text" class="form-control" value="{{$record->penalty}}" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">Adviser</label>
                      <input type="text" class="form-control" value="{{$record->adviser->teacher_name}}" readonly>
                  </div>
                    <div class="form-group">
                        <label for="">Date Created</label>
                        <input type="text" class="form-control" value="{{$record->created_at}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Date Updated</label>
                        <input type="text" class="form-control" value="{{$record->updated_at}}" readonly>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Modal -->
<div class="modal fade" id="deleteRecord" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Delete Record</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Do you want to delete the record with case title {{$record->case_title}} of {{$record->student->name}}?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <form action="/record/delete/{{$record->id}}" Action="GET">
            @csrf
            {{method_field('DELETE')}}
          <input type="hidden" value="{{$record->id}}">
          <button type="submit" class="btn btn-danger">Yes, Delete Record</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection