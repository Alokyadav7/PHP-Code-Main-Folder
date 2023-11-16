<html>
    <head>
        <title>Date Stored</title>
    </head>
    <body>
        <?php
        $conn = mysqli_connect("localhost","root","","user_login");

        //checking the connection
        if($conn===false) {
            die("ERROR: Could not connect. ".mysqli_connect_error());
        }

        // taking values from the data
     if(isset($_POST['submit'])) {
        $First_Name=mysqli_real_escape_string($conn,$_POST['first_name']);
        $Last_Name=mysqli_real_escape_string($conn,$_POST['last_name']);
        $Address=mysqli_real_escape_string($conn,$_POST['address']);
        $Contact_No=mysqli_real_escape_string($conn,$_POST['contact']);
        $Date_of_Birth=mysqli_real_escape_string($conn,$_POST['birth']);
        $User_Name=mysqli_real_escape_string($conn,$_POST['user_name']);
        $Email=mysqli_real_escape_string($conn,$_POST['email']);
        $Password=mysqli_real_escape_string($conn,$_POST['password']);
        $Re_Enter_Password=mysqli_real_escape_string($conn,$_POST['re-passeord']);
     }

     // insert query
     $sql = "INSERT INTO user_detail (First_Name, Last_Name, Address, Contact_No, Date_of_Birth, User_Name, Email, Password, Re_Enter_Password) 
     values('$First_Name','$Last_Name','$Address','$Contact_No',
     '$Date_of_Birth','$User_Name','$Email','$Password','$Re_Enter_Password')";

     if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data is stored in database')</script>";
     }
     else {
        echo "error".mysqli_error($conn);
     }

     // close
     mysqli_close($conn);

    
        ?>
    </body>
    
<html>