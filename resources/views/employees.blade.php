<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Employee</title>
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
                <div class="col-md-10 offset-md-1 ">
                    <div class="card">
                        <a href="/index" class="btn btn-primary" >Add Employee</a>
                        <div class="card-header">All Employee</div>
                        
                        <div class="card-body">
                            @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                       <strong>{{ session('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif 
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Employee Name</th>
                                    <th>Employee Designation</th>
                                    <th>Action</th>
                                   </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employee)
                                    <tr>
                                        <td>{{$employee->id}}</td>
                                        <td>{{$employee->name}}</td>
                                        <td>{{$employee->designation}}</td>
                                        <td>
                                            <a href="/edit/{{$employee->id}}" class="btn btn-info">Edit</a>
                                            <a href="/delete-employee/{{$employee->id}}" class="btn btn-danger">Delete</a>
                                            </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    
</body>
</html>