<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
          <div class="col-sm-2 col-md-2"></div>
          <div class="col-sm-8 col-md-8">
            <h4 class="page-title text-center">Add New Student</h4>
            <form action="{{route('students.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>First name </label>
                        <input type="text" class="form-control" name="firstname" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label>Last name</label>
                        <input type="text" class="form-control" name="lastname" required>
                      </div>
                    </div>
                    <div class="form-group">
                        <label>Class</label>
                        <select class="browser-default custom-select" name="class">
                          <option selected>Open this select menu</option>
                          <option value="2020A">2020a</option>
                          <option value="2020B">2020B</option>
                          <option value="2020C">2020C</option>
                          <option value="WEP-A">WEP-A</option>
                          <option value="WEP-B">WEP-B</option>
                          <option value="SNA">SNA</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="description">Tutor</label>
                      <input name="tutor" class="form-control" id="" cols="10" rows="2">
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea name="description" class="form-control" id="" cols="10" rows="2"></textarea>
                    </div>
                    <div class="input-group">
                      <div class="custom-file">
                          <input type="file" class="form-control" name="picture" >
                      </div>
                  </div>
                    <button type="submit" class="btn btn-primary">Add New</button>
                    <a href="{{route('admin.dashboard')}}" class="btn btn-danger float-right">Go Back</a>
                  </form>
            </form>
          </div>
          <div class="col-sm-2 col-md-2"></div>
        </div>
      </div>
</body>
</html>
