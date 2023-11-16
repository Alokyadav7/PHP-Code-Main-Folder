<html>
       <body>
              <form action="max.php"  method="post">
                     Num 1 : <input type="text" name="num1"> <br>
                     Num 2 : <input type="text" name="num2"> <br>
                     Num 3 : <input type="text" name="num3"> <br>
                     <input type="submit">
              </form>
       </body>
</html>
<?php
       $num1=$_POST["num1"];
       $num2=$_POST["num2"];
       $num3=$_POST["num3"] ;

       if ($num1 > $num2 && $num1 > $num3)
       {
        echo "$num1 is bigger" ;
       }
       elseif ($num1> $num1 && $num1 > $num3)
       {
        echo "$num2 is bigger" ;
       }
       else 
       {
       echo "$num3 is bigger";
       }
?>
