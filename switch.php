<?php
$a=mysqli_connect("localhost","root","");
$b=mysqli_select_db($a,"ecommerce");
$c="SELECT * FROM `registraion`";
$d=mysqli_query($a,$c);
$e=mysqli_fetch_assoc($d);
print_r($e);

?>