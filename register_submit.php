<?php
	$hostname="localhost";
	$username="root";
	$password="narayan1";                                      
	$database="quizzer";
	$conn=mysqli_connect($hostname,$username,$password,$database);
	if (!$conn) {
		die("connection failed:".mysqli_connect_error());
	}

	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$gender = $_POST['gender'];
	$phone = $_POST['phone'];
	
	$sql="INSERT INTO users(name,email,password,gender,phone) VALUES('$name','$email','$pass','$gender','$phone')";
    if (mysqli_query($conn,$sql)) {
    	echo "Registration successful";
    }else{
    	echo "Error:".$sql."<br/>".mysqli_error($conn);
    }
    mysqli_close($conn); 
?>
