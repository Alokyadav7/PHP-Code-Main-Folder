<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<center>
		<?php


		$conn = mysqli_connect("localhost", "root", "", "patient_detail");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
        if (isset($_POST['submit']))
        
        {
		$PATIENT_NAME =mysqli_real_escape_string($conn,$_POST['fname']);
		$PATIENT_ADDRESS=mysqli_real_escape_string($conn,$_POST['address']);
		$PATIENT_CONTACT= mysqli_real_escape_string($conn,$_POST['contact']);
		$PATIENT_AGE=mysqli_real_escape_string($conn,$_POST['age']);
		$PATIENT_Email=mysqli_real_escape_string($conn,$_POST['email']);
        
        }
		// Performing insert query execution
		
		$sql = "INSERT INTO  detail (PATIENT_NAME,
			PATIENT_ADDRESS,PATIENT_CONTACT,PATIENT_AGE,PATIENT_Email)values('$PATIENT_NAME','$PATIENT_ADDRESS','$PATIENT_CONTACT',
            '$PATIENT_AGE','$PATIENT_Email')";
        
		if(mysqli_query($conn, $sql)){
			echo "<script>alert('data stored in a database successfully.')</script>";

	
		} else
		{
			echo "error".mysqli_error($conn);
		}
    
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
