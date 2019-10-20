@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-2">
                <h3>List of Users</h3>
            </div>
            <div class="col-9">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        {{-- <th scope="col">Date Updated</th> --}}
                        <th scope="col">Created Records</th>
                        <th scope="col" colspan="1">Role Type</th>
                        <th scope="col" colspan="2">Manage</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                      <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->records->count()}}</td>
                        <td>{{$user->role->role_type}}</td>
                        <td>
                            @if(Auth::user()->username == $user->username) 
                            <button disabled="disabled" class="btn btn-warning">Change Role</button>
                            @else
                            <form action="/admin/{{$user->id}}" method="get">
                            <input type="hidden" value=" @if ($user->role_id == 1) 2 @else 1 @endif" name="role_id">
                            <button type="submit" class="btn btn-warning">Change Role</button>
                            </form>
                            @endif
                        </td>
                        <td>
                            <a href="#" class="btn btn-info">View Profile</a>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
            <div class="col-2">
                <h3>List of Relationships</h3>
            </div>
            <div class="col-5">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Relationship</th>
                        </tr>
                    </thead>
                        <tbody>
                            @foreach($relationships as $relationship)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$relationship->relationship}}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td scope="col" colspan="2"><button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Add New Relationship</button></td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>
            
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add New Relationship</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col">
                                <form action="/admin/create/relationship" action="POST">
                                    @csrf
                                    {{ @method_field('post')}}
                                    <input type="text" placeholder="Enter new Relationship" name="new_relationship" class="form-control">
                                    <button type="submit">Save</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
@endsection