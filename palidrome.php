<?php
     function check_palindrome($str) {
        $rev_str = strrev($str);
        if ($rev_str==$str) 
        {
            echo "It is palindrome!";
        }
        else
        {
            echo "It is not a palindrome!";
        }
     }
   //  check_palidrome("HELLO FOOTBALL");
?>
<html>
    <body>
        <form action="palidrome.php" method="post">
            <input type="text" name="string">
            <input type="submit" name="submit">
        </form>
        <h5>
        <?php
            if (isset($_POST["submit"]))
            {
                $str=$_POST["string"];
                check_palindrome($str);
            }
            ?>
        </h5>
    </body>
</html>