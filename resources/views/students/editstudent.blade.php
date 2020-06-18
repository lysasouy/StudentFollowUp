<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form>
                    <div class="form-group">
                      <label for="fname">FirstName</label>
                      <input type="text" class="form-control" id="fname"  placeholder="Enter firstName">
                    </div>
                    <div class="form-group">
                      <label for="lname">LastName</label>
                      <input type="text" class="form-control" id="lname" placeholder="Last name">
                    </div>
                     <div class="form-group">
                    <label for="class">Select class</label>
                        <select multiple class="form-control" id="class">
                              <option>WEB_A</option>
                              <option>WEB_B</option>
                              <option>SNA</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    
</body>
</html>