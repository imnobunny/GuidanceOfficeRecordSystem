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
                              <tr>
                                <th scope="row"></th>
                                <td scope="col" colspan="6">
                                    <p class="text-center mt-3">No Records Founds</p>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection