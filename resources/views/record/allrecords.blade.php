@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                    <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Case_title</th>
                                <th scope="col">Year</th>
                                <th scope="col">Penalty</th>
                                <th scope="col">Adviser</th>
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
                                <td>
                                    <a href="#">{{$record->adviser->teacher_name}}</a>
                                </td>
                                <td>
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
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL -->
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
            Do you want to delete record with case title: <strong>{{$record->case_title}}</strong>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <form method="POST" action="/record/delete/{{$record->id}}">
              @csrf
              {{ method_field('delete')}}
            <input type="Hidden" value="{{$record->id}}" name="record_id">
            <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection