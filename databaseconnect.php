<?php
$conn=mysqli_connect("localhost","root","","");
echo "Connected";

$sql="create table emp (id int(10), name varchar(20))";
?>