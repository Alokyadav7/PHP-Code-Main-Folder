<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register-Form</title>
        <!------css file link---->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    </head>
    <body>
        <div>
            <form  action="database.php" method="post" >
                <label>First-Name:-</label>
                <input type="text" required name="first_name" id="first_name" placeholder="Enter Your First Name">

                <label>Last-Name:-</label>
                <input type="text" required name="last_name" id="last_name" placeholder="Enter Your Last Name">

                <label>Address:-</label>
                <input type="text" name="address" required placeholder="Enter Your Address">

                <label>Contact-No:-</label>
                <input type="number" required name="contact" placeholder="Enter Your Contact">

                <label>Date-Of-Birth</label>
                <input type="date" name="birth" required>

                <label>User-Name:-</label>
                <input type="number" name="user_name" placeholder="Enter Your UserName" required>

                <label>Email:-</label>
                <input type="email" name="email" placeholder="Enter Your Email" required>

                <label>Password:-</label>
                <input type="password" name="password" placeholder="Enter Your Password" required min="6" max="10">

                <label>Re-Enter Password:-</label>
                <input type="password" name="re-passeord" placeholder="Re-Enter" min="6" max="10" required>

                <input type="submit" value="Submit" name="submit"> 
            </form>
        </div>
    </body>
</html>