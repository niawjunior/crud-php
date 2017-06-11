<!DOCTYPE html>
<?php include 'db.php';
      include 'config.php';

$page = (isset($_GET['page']) ? $_GET['page'] : 1);
$perPage = (isset($_GET['per-page']) && ($_GET['per-page']) <=50 ? $_GET['per-page'] : 2);
$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

$sql = "SELECT * FROM tasks_table LIMIT ".$start.",".$perPage." ";
$total = $db->query("SELECT * FROM tasks_table ")->num_rows;
$pages = ceil($total / $perPage);
$rows = $db->query($sql);

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
<button type="button" class="btn btn-primary btn-sm pull-left" data-toggle="modal" data-target="#myModal">Add Task <span class="glyphicon glyphicon-plus"></span></button>
<button type="button" class="btn btn-info btn-sm pull-right">Print <span class="glyphicon glyphicon-print"></span></button>
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
        <?php while($row = $rows->fetch_assoc()):?>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-warning btn-xs">Edit <span class="glyphicon glyphicon-pencil"></span></a></td>
        <td><a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-xs">Delete <span class="glyphicon glyphicon-trash
glyphicon "></span></a></td>
        </tr>
        <?php endwhile;?>
    </tbody>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Task </h4>
                    </div>
                    <div class="modal-body">
                    <form method="post" action="add.php">
                        <div class="form-group">
                            <label for="name">Task Name</label>
                            <input type="text" name="task" value="" placeholder="task name" class="form-control" required>
                        </div>
                        <button type="submit" name="send" class="btn btn-success btn-sm" >Add Task <span class="glyphicon glyphicon-plus"></span></button>
                    </form>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </table>
    <center>
    <ul class="pagination">
        <?php for($i = 1 ; $i <= $pages; $i++): ?>
        <li>
        <a href="?page=<?php echo $i;?>"><?php echo $i;?></a>
        </li>
        <?php endfor;?>
    </ul>
    </center>
</div>
</div>
</div>
</div>
</body>
</html>
