@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Followup</title>
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
<div class="container mt-3">
  <h2>Student Follow Up</h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Followup</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Out Followup</a>
    </li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
    <a href="{{route('students.create')}}" class="btn btn-primary" >Add New Student</a>
        <br>
        <table class="table table-bordered">
          <tr>
              <thead class="thead-dark">
                  <td>Picture</td>
                  <td>First Name</td>
                  <td>Last Name</td>
                  <td>Class</td>
                  <td>Description</td>
                  <td>Action</td>
              </thead>
          </tr>
          @foreach($student as $row)
          <tr>
            <td>
              <img class="mx-auto d-block" src="{{asset('image/'.$row->picture)}}" style="width: 100px;, height:100px;">
              </td>
          <td>{{ $row->firstname }}</td>
          <td>{{ $row->lastname }}</td>
          <td>{{ $row->class }}</td>
          <td>{{ $row->description }}</td>
          <td>
            <a href="{{route('students.destroy', $row->id)}}"><span class="material-icons text-danger">preview</span></a>&nbsp; | &nbsp;
            <a href="{{route('students.edit', $row->id)}}"><span  class="material-icons text-success">edit </span></a>
          </td>
          </tr>
          @endforeach
          </table>
      </div>
      <div id="menu1" class="container tab-pane fade"><br>
        <table class="table table-bordered">
          <tr>
              <thead class="thead-dark">
                  <td>Picture</td>
                  <td>First Name</td>
                  <td>Last Name</td>
                  <td>Class</td>
                  <td>Description</td>
                  <td>Action</td>
              </thead>
          </tr>
          @foreach($student as $row)
          <tr>
         <td>
          <img class="mx-auto d-block" src="{{asset('image/'.$row->picture)}}" style="width: 100px;, height:100px;">
          </td>
          <td>{{ $row->firstname }}</td>
          <td>{{ $row->lastname }}</td>
          <td>{{ $row->class }}</td>
          <td>{{ $row->description }}</td>
          <td>
            <a href="{{route('students.show', $row->id)}}"><span class="material-icons text-danger">preview</span></a>&nbsp; | &nbsp;
            <a href="{{route('students.edit', $row->id)}}"><span  class="material-icons text-success">edit </span></a>
          </td>
          </tr>
          @endforeach
          </table>
      </div>
    </div>
  </div>
</div>
</body>
</html>
@endsection
