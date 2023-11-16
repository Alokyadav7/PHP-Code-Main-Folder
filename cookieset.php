<?php
session_start();
if(isset($_POST["submit"]))
{
if (isset($_POST["User Name"]))
{
    if ($_POST["User Name"]== "admin" && $_POST ["password"]== "admin")
    {
        header("location:home.php");
    }
    else
    {
        echo "wrong detail";
    }
}
}
?>
<html>
    <body>
        <h2 align="center">Login</h2>
        <form action="" method="post"><fieldset>
           <center> <label>User Name:</label>
            <input type="text" name="name" required><br><br>
            <label>Password:</label>
            <input type="password" name="password" required><br><br>
            <input type="submit" name="submit">
        </center>
            </fieldset>
        </form>
    </body>
</html>