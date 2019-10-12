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
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($records as $record)
                              <tr>
                                <th scope="row">1</th>
                                <td>{{$record->case_title}}</td>
                                <td>{{$record->grade_year}}</td>
                                <td>{{$record->penalty}}</td>
                                <td>{{$record->penalty}}</td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
            </div>
        </div>
    </div>
@endsection