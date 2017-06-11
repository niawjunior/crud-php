<!DOCTYPE html>
<?php include 'db.php';
      include 'config.php';
$id = $_GET['id'];
$sql = "SELECT * FROM tasks_table WHERE id = '$id'";
$rows = $db->query($sql);
$row = $rows->fetch_assoc();
if(isset($_POST['send'])){
    $task = $_POST['task'];
    $sql = "UPDATE tasks_table SET name='$task' WHERE id = '$id'";
    $db->query($sql);
    header("location:index.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
</head>
<body>
<center><h1>Todo list</h1></center>
<div class="col-md-12">
<div class="panel panel-default" style="margin-top:30px;">
<div class="panel-body" style="height:300px">
<div class="container" style="margin-top:10px;">
<a href="index.php"><button type="button" class="btn btn-warning btn-sm pull-left" data-toggle="modal" data-target="#myModal">Back <span class="glyphicon glyphicon-chevron-left"></span></button></a>
<button type="button" class="btn btn-info btn-sm pull-right">Print <span class="glyphicon glyphicon-print"></span></button>
<br><br>
    <table class="table table-hover" style="text-align:center;">
    <form class="form-horizontal" method="post">
      <div class="input-group">
  <input type="text" class="form-control" value="<?php echo $row['name'];?>" name="task" required>
    <span class="input-group-btn">
    <button class="btn btn-success"  type="submit" name="send">Save <span class="glyphicon glyphicon-ok"></span></button>
  </span>
</div>
    </form>
    </table>
</div>
</div>
</div>
</div>
</body>
</html>
