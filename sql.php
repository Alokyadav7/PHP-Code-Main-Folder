<?php
    $a= mysqli_connect('localhost','root','');
    $b= mysqli_select_db($a,'demo');
    $c= "SELECT * FROM `product_detail`";
    $d= mysqli_query($a,$c);
    $e= mysqli_fetch_assoc($d);
    echo "<pre>";
    print_r($e); 





?>