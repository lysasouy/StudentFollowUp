@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>View allUser</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <h2>All User In Application</h2>
            <br>
              <a href="{{route('students.create')}}">Add New Student</a>
                  <br>
                  <table class="table table-bordered">
                    <tr>
                        <thead class="thead-dark">
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Email</td>
                            <td>Role</td>
                            <td>Position</td>
                            <td>Action</td>
                        </thead>
                    </tr>
                    @foreach($users as $user)
                    <tr>
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->lastname }}</td>
                    <td>{{ $user->class }}</td>
                    <td>{{ $user->description }}</td>
                    <td>
                      <a href="{{route('users.destroy', $user->id)}}"><span class="material-icons text-danger">preview</span></a>&nbsp; | &nbsp;
                      <a href="{{route('users.edit', $user->id)}}"><span  class="material-icons text-success">edit </span></a>
                    </td>
                    </tr>
                    @endforeach
                    </table>
        </div>
        <div class="col-2"></div>
    </div>
</div>
</body>
</html>

@endsection
