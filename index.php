<!DOCTYPE html>
<?php include 'db.php';
      include 'config.php';
$sql = "SELECT * FROM tasks_table";
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
<div class="container" style="margin-top:10px;">
<button type="button" class="btn btn-primary btn-md pull-left" data-toggle="modal" data-target="#myModal">Add Task</button>
<button type="button" class="btn btn-info btn-md pull-right">Print</button>
<h1 align="center">Todo list</h1>
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
        <td><a href="" class="btn btn-warning btn-xs">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-xs">Delete</a></td>
        </tr>
        <?php endwhile;?>
    </tbody>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Task</h4>
                </div>
                <div class="modal-body">
                <form method="post" action="add.php">
                    <div class="form-group">
                        <label for="name">Task Name</label>
                        <input type="text" name="task" value="" placeholder="task name" class="form-control" required>
                    </div>
                    <button type="submit" name="send" class="btn btn-success btn-sm" >Add Task</button>
                </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
    </table>
</div>
</body>
</html>
