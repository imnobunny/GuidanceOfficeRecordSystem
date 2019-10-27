<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <table>
                    <thead></thead>
                    <tbody>
                        <tr>
                            <td>
                                <span>Student Name: <strong> {{$record->student->name}}</strong></span>
                            </td>
                            <td>
                                <span>Gender: <strong> {{$record->student->gender}}</strong></span>
                            </td>
                        </tr>
                        <tr>
                             <td>
                                <span>Grade Year: <strong> {{$record->grade_year}}</strong></span>
                            </td>
                            <td>
                                <span>Guardian Contact: <strong> {{$record->student->guardian_contact}}</strong></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Home Address: <strong> {{$record->student->home_address}}</strong></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Contact Number: <strong> {{$record->student->contact_number}}</strong></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Guardian Name: <strong> {{$record->student->guardian_name}}</strong></span>
                            </td>
                        </tr>
                        <tr>
                           <td scope="col" colspan="2"><h4 class="text-center mt-3">Case Details<h4></td> 
                        </tr>
                        <tr>
                            <td>
                                <span>Case Title: <strong>{{$record->case_title}}</strong></span>
                            </td>
                            <td>
                                <span>Case Status: <strong>{{$record->status->status}}</strong></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Complainant: <strong>{{$record->complainant}}</strong></span>
                            </td>
                            <td>
                                <span>Adviser: <strong>{{$record->adviser->teacher_name}}</strong></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Penalty: <strong>{{$record->penalty}}</strong></span>
                            </td>
                        </tr>
                        <tr>
                            <td scope="col" colspan="2">
                                <span>Complain:</span><br />
                                <p class="text-justify mt-2">{{$record->complain}}</p>
                            </td>
                        </tr>
                        <tr>
                        <td><span>Guidance Counselor:</span><strong>{{$record->user->username}}</strong></td>
                        </tr>
                    </tbody>
                </table>
              
            </div>
        </div>
    </div>

    {{-- Bootstrap --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>