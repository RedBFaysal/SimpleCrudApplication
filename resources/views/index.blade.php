<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Employee</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <span style="display:flex; justify-content:center; padding:0px;">
        <img src="/image/doptor.jpg" style="width: 220px; height:150px;"> 
    </span>
    <section style="padding-top:10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <a href="/employees" class="btn btn-primary" >Employee</a>
                        <div class="card-header">Add Employee</div>
                        <div class="card-body">
                            @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                       <strong>{{ session('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif 
                            <form action="{{ route('employee.create') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="title" class="mb-1">Employee Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Employee Name">
                                </div>
                                <div class="form-group">
                                    <label for="description" class="mb-1">Employee Designation</label>
                                    <input type="text" name="designation" class="form-control mb-3" placeholder="Enter Employee Designation">
                                </div>
                                
                                <button type="submit" class="btn btn-success">Add Employee</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    
</body>
</html>