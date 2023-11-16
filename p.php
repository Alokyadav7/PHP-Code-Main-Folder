<html>
<head><title></title></head>
<body>
<form action="palindrome.php" method="POST">
Enter the value : <input type="number" name="number"><br>
<input type="submit" value="submit">
</form>


<?php
$a=$_POST["number"];
$b=$a;
$sum = 0;
while(($a>0))
{
$sum=($sum*10)+$a%10;
$a=$a/10;
}


if($b==$sum){
echo"Palindrome";
}
else{
echo"Notpalindrome";
}
?>
</form>
</body>
</html>