
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
       <div class="col-12">
        <div class="card">
            <div class="card-header text-center text-info" ><h4>Edit Student In FollowUp</h4></div>
            <div class="card-body">
                <form action="{{route('students.update',$student->id)}}" enctype="multipart/form-data" method="post">
                  {{csrf_field()}}
                  {{method_field('PUT')}}
                      <div class="form-group">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" name="firstname" value="{{$student->firstname}}" >
                    </div>
                
                      <div class="form-group">
                          <label for="">Last Name</label>
                          <input type="text" class="form-control" name="lastname" value="{{$student->lastname}}">
                    </div>
                
                    <div class="form-group">
                      <label for="">Class</label>
                      <select  class="browser-default custom-select" name="class">
                    
                        <option value="2020A" {{($student->type =='2020A') ? 'selected' : ''}}>2020A</option>
                        <option value="2020B" {{($student->type =='2020B') ? 'selected' : ''}}>2020B</option>
                        <option value="2020C"  {{($student->type =='2020c') ? 'selected' : ''}}>2020C</option>
                        <option value="WEP-A"  {{($student->type =='WEP-A') ? 'selected' : ''}}>WEP-A</option>
                        <option value="WEP-B"  {{($student->type =='WEP-B') ? 'selected' : ''}}>WEP-B</option>
                        <option value="SNA"  {{($student->type =='SNA') ? 'selected' : ''}}>SNA</option>
                    </select>
                    </div>
                
                    <div class="form-group">
                      <label for="">Description</label>
                      <textarea name="description" class="form-control" id="" cols="10" rows="4">{{$student->description}}</textarea>
                    </div>
                    <label for="">Picture</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="form-control costom-file-input" name="picture" value="{{$student->picture}}" >
                        </div>
                    </div>
                      <br>
                    <button class="btn btn-success mt-3" type="submit">Edit Student</button>
                    <a href="{{route('admin.dashboard')}}" class="btn btn-danger float-right">Go Back</a>
                </form> 
            </div>
        </div>
       </div>
    </div>
</div>
@endsection
