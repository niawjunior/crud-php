<?php
include 'db.php';
if(isset($_POST['send'])){

$task_name = $_POST['task'];

$sql = "INSERT INTO tasks_table (name) value ('$task_name')";
$val = $db->query($sql);
if($val){
    echo "<h1>Successfuly inserted</h1>";
}
}

?>