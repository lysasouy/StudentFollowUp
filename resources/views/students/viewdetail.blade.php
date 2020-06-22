{{-- @extends('layouts.app')

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
    <div class="container">
        <div class="row justify-content-center">
            <h3>View Detail Student </h3>
            <table class="table table-bordered">
                <tr>
                    <thead class="thead-dark">
                        <td>Picture</td>
                        <td>ID</td>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Class</td>
                        <td>Tutor</td>
                        <td>Description</td>
                        <td>Action</td>
    
                    </thead>
                    <tbody>
                        <td>
                           <img class="mx-auto d-block" src="{{asset('image/'.$student->picture)}}" style="width: 100px;, height:100px;">
                        </td>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->firstname }}</td>
                        <td>{{ $student->lastname }}</td>
                        <td>{{ $student->class }}</td>
                        <td>{{ $student->tutor }}</td>
                        <td>{{ $student->description }}</td>
                        <td>
                          <a href="#"><span  class="material-icons text-success">edit </span></a>
                        </td>
                    </tbody>
                </table>
        </div>
    </div>
    
    
    <div class="container">
        <div class="row justify-content-center">
            <h3>View All Comment For Student </h3>
            <table class="table table-bordered">
                <tr>
                    <thead class="thead-dark">
                        <td>ID</td>
                        <td>Username</td>
                        <td>Comments</td>
                        <td>action</td>
                    </thead>
                    <tbody>
                        <th>1</th>
                        <th>Admin</th>
                        <th>You should try your best for your English subject to make your English level more improve</th>
                        <th></th>
                    </tbody>
                </table>
        </div>
    </div>
    <br>
    <br>
    <br><br>
    <h2 class="text-center text-success">Create Your Comment On this Student</h2>
    <div class="container">
        <div class="row">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <label for="comment">Comment</label>
                        <textarea name="comment" id="comment" cols="150" rows="3"></textarea>
                    </div>
                    <div class="card-footer">
                       <button class="btn btn-success text-center" style="width: 100%">Post Comment</button>
                    </div>
                  </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
</body>
</html>

@endsection --}}
