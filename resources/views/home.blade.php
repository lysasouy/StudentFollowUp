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
          <div id="home" class="container tab-pane active">
            <br>
            <button type="button" class="btn btn-success">Add New Student</button>
            <br>
            <table class="table table-bordered">
              <tr>
                  <thead class="thead-dark">
                      <td>Picture</td>
                      <td>First Name</td>
                      <td>Last Name</td>
                      <td>Class</td>
                      <td>Action</td>
                  </thead>
              
              </tr>
              @foreach($student as $row)
              <tr>
              <td>{{ $row->picture }}</td>
              <td>{{ $row->firstname }}</td>
              <td>{{ $row->lastname }}</td>
              <td>{{ $row->class }}</td>
              <td>
                <a href="">out_of_followup  </a>
                <a href=""> Edit</a>
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
                      <td>Action</td>
                  </thead>
              
              </tr>
              @foreach($student as $row)
              <tr>
              <td>{{ $row->picture }}</td>
              <td>{{ $row->firstname }}</td>
              <td>{{ $row->lastname }}</td>
              <td>{{ $row->class }}</td>
              <td>
                <a href="">out_of_followup</a>
                <a href="">Edit</a>
              </td>
              </tr>
              @endforeach
              </table>
          </div>
        </div>
      </div>
      
      </body>
      </html>
</div>
@endsection
