<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container" style="margin-top:10px;">
<button type="button" class="btn btn-primary btn-md pull-left">Add Task</button>
<button type="button" class="btn btn-info btn-md pull-right">Print</button>
<center>
<h1>Todo list</h1>
 <table class="table table-hover" style="text-align:center;">
    <thead>
      <tr>
        <th style="text-align:center" width="50%">No.</th>
        <th style="text-align:center" width="40%">Task</th>
        <th style="text-align:center" width="5px">Edit</th>
        <th style="text-align:center" width="5px">Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Job1</td>
        <td><a href="" class="btn btn-warning btn-xs">Edit</a></td>
        <td><a href="" class="btn btn-danger btn-xs">Delete</a></td>
      </tr>
    </tbody>
  </table>
</center>
 
</div>
</body>
</html>