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
                    @foreach ($student->comments as $item)
                    <tbody>
                        <td>{{ $item->id }}</td>
                        <td>

                            @if ($item->user_id == 1)
                            Admin 
                            @endif
                            @if ($item->user_id == 2)
                            Normal
                            @endif
                        </td>
                        <td>{{ $item->comment}}</td>
                        <td>
                          <a href="{{route('deletecomment',$item->id)}}"><span  class="material-icons text-danger">delete </span></a>
                     {{-- Edit Comment --}}
                        <button type="button" class="btn fas fa-edit" style='font-size:15px' data-toggle="modal" data-target="#myModal{{$item->id}}"></button>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal{{$item->id}}" role="dialog">
                          <div class="modal-dialog">
                          
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header bg bg-primary">
                                  <h4 class="modal-title" style="margin-left:180px;color:white">Edit Comment</h4>
                              </div>
                              <div class="modal-body">
                                <form action="{{route('updatecomment',$item->id)}}" method="POST">
                                  @csrf
                                  @method('POST')
                                    <h5 style="color:blue"> Your comment</h5>
                                    <textarea name="comment" class="form-control">{{$item->comment}}</textarea><br>
                                    <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
                                    <button class="btn btn-success float-right" type="submit">Edit</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tbody>
                    @endforeach
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
                    <form action="{{route('addcomment', $student->id)}}" method="post">
                        @csrf

                        <textarea  name="comment" id=""  cols="150" rows="3" placeholder="Write comment"></textarea>
                        <button type="submit" class="btn btn-primary" style="width: 100%">Post Your Comment</button>
                    </form>
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
@endsection
