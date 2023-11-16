<html>
    <body>
        <form action="form.php" method="get">
            <label>Username:</label>
            <input type="text" name="uname" placeholder="Enter Your Name"> <br>
            <label>Email:</label>
            <input type="email" name="email"> <br>
            <input type="submit" value="submit" name="submit">
        </form>
        <?php 
        if (isset($_GET ["submit"])) {
            $uname=$_GET['uname'];
            $email=$_GET['email'];
            echo "Your username is $uname <br>";
            echo "Your email is $email <br>";
        }
?>
    </body>
</html>