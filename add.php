<?php
$a=10;
$b=20;
$c=30;
        if ($a>$b && $a>$c)  {
            echo "$a is bigger";
        }
        elseif ($a>$c && $b>$a) {
            echo "$b is bigger";
        }
        else {
            echo "$c is bigger";
        }

?>