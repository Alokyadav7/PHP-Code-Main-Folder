<?php
function rev_string($str){
    for ($i=strlen($str);$i>=0;$i--) {
        	echo $str[$i];
    }
    return $str;
}
?>
<html>
    <body>
        <form action="reversestring.php" method="post">
            <input type="text" name="string">
            <input type="submit" name="submit">
        </form>
        <h1>
            <?php
             if (isset($_POST["submit"])) {
                $str=$_POST["string"];
                rev_string($str);
             }
            ?>
        </h1>
   </body>
</html>