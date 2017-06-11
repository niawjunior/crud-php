<?php
$db = new Mysqli;
$db->connect('localhost','root','niaw2362537','tasks');
if(!$db){
    echo "fail";
}
?>