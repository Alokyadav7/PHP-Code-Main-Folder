<?php 
        if (isset($_GET ["submit"])) {
            $uname=$_GET['uname'];
            $email=$_GET['email'];
            echo "Your username is $uname <br>";
            echo "Your email is $email <br>";
        }
?>