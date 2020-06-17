@extends('layouts.app')

@section('content')
<div class="container">
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
          </div>
        </div>
      </div>
      
      </body>
      </html>
</div>
@endsection
