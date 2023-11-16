<?php
function sum_of_digits($num){
    $sum=0;
    for ($i=0;$i<strlen($num);$i++) {
        $sum += $num[$i];
    }
    return $sum;
}
?>
<html>
    <body>
        <form action="sumofdigit.php" method="post">
            <input type="text" name="number">
            <input type="submit" name="submit">
        </form>
        <h1>
            <?php
             if (isset($_POST["submit"])) {
                $num=$_POST["number"];
                echo "sum of each digit of ".$num." is ". sum_of_digits($num);
             }
            ?>
        </h1>
    </body>
</html>
