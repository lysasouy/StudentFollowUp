@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Student Followup</h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Stduent In Followup</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Stdeunt Out Followup</a>
    </li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3>HOME</h3>
      <table class="table table-bordered">
        <tr>
            <thead class="thead-dark">
                <td>Id</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Class</td>
                <td>Description</td>
                <td>Picture</td>
                <td>ActiveFollowup</td>
            </thead>
        
        </tr>
        @foreach($student as $row)
        <tr>
        <td>{{ $row->id }}</td>
        <td>{{ $row->firstname }}</td>
        <td>{{ $row->lastname }}</td>
        <td>{{ $row->class }}</td>
        <td>{{ $row->description }}</td>
        <td>{{ $row->picture }}</td>
        <td>{{ $row->activeFollowup }}</td>
        </tr>
        @endforeach
        </table>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>

</body>
</html>

</div>
</div>
@endsection
