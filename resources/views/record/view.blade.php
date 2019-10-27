@extends('layouts.app')
@section('content')

  <div class="container mt-3">
    <div class="row">
      <div class="col">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Case Details</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">History</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Comments
                  <span class="badge badge-primary">{{$comments->count()}}</span>
              </a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          {{-- Case Details --}}
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="container">
                  <div class="row">
                    <div class="col-5 ml-5">
                        <h3 class="mt-5">
                            Case Title: 
                            <strong>{{$record->status->status}}</strong>
                        </h3>
                        <div>
                            <h4 class="mr-auto">Student Name: {{$record->student->name}}</h4>
                            <h5 class="mr-auto">Home Address: {{$record->student->home_address}}</h5>
                            <a href="/record/edit/{{$record->id}}" class="btn btn-warning mr-2">
                              <i class="fas fa-2x fa-edit"></i>
                              Edit
                            </a>
                            {{-- Restriction the delete button to Admin only --}}
                            @if(Auth::user()->role_id == 1)
                              <button class="btn btn-danger" data-toggle="modal" data-target="#deleteRecord">
                                <i class="fas fa-2x fa-trash-alt"></i>
                                Delete
                              </button>
                            @else
                            @endif
                            <a href="/record/pdf/{{$record->id}}-pdf" class="btn btn-info">
                              <i class="fas fa-2x fa-file-pdf"></i>
                              Export to PDF
                            </a>
                        </div>
                    </div>
                    <div class="col-5 mt-5 mr-2">
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
            </div>
          {{-- Case history --}}
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="container">
                <div class="row">
                  <div class="col mt-5 ml-3">
                      <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Changes Made</th>
                              <th scope="col">By</th>
                              <th scope="col">Date</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($histories as $history)
                            <tr>
                              <th scope="row">{{$loop->iteration}}</th>
                              <td>{{$history->changes_made}}</td>
                              <td>{{$history->user->username}}</td>
                              <td>{{$history->created_at}}</td>
                            </tr>
                            @endforeach
                          </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>
            {{-- Comments --}}
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="container mt-5">
                    <div class="row">
                      <div class="col ml-5">
                          <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">Comments</th>
                                  <th scope="col">From:</th>
                                  <th scope="col">Date</th>
                                </tr>
                              </thead>
                              <tbody>
                                @if($comments->count() > 0)
                                  @foreach($comments as $comment)
                                    <tr>
                                      <td>{{$comment->comment}}</td>
                                      <td>{{$comment->user->username}}</td>
                                      <td>{{$comment->created_at}}</td>
                                    </tr>
                                  @endforeach
                                @else
                                    <tr>
                                        <td scope="col" colspan="3">
                                          <h4 class="text-center">No Comment found.</h4>
                                        </td>
                                    </tr>
                                  @endif
                                  <tr>
                                    <td scope="col" colspan="2">
                                        <form action="/record/comment/{{$record->id}}" action="get">
                                          <div class="form-group mt-3">
                                            <textarea name="comment" class="form-control" id="comment" cols="30" rows="5"></textarea>
                                          </div>
                                          <div class="form-group d-flex justify-content-center mt-3 ">
                                            <input type="hidden" value="{{Auth::user()->id}}" name="user_id" id="user_id">
                                            <input type="hidden" value="{{$record->id}}" name="record_id" id="record_id">
                                            <button type="submit" class="btn btn-warning">Add Comment</button>
                                          </div>
                                      </form>
                                      </td>
                                      <td scope="col" colspan="2"></td>
                                  </tr>  
                              </tbody>
                            </table>
                      </div>
                    </div> 
                 </div> 
            </div>
        </div>
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