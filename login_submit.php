<?php
    session_start();
    $hostname = "localhost";
    $username = "root";
    $password = "narayan1";
    $database = "quizzer";
    
    $conn = mysqli_connect($hostname, $username, $password, $database);
    if (!$conn) {
        	die("Connection failed: " . mysqli_connect_error());
    }

    $email = $_POST["email"];
    $pass = $_POST["password"];

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        	die(mysqli_error($conn));
    }

    $flag = false;
    while ($row=mysqli_fetch_array($result)) {
	    if($email == $row["email"] && $pass == $row["password"]){
            echo "welcome ".$row['name'] ;
            $_SESSION['name']=$row['name'];
            //setcookie("name", $row['name']);
            //echo "<a href='dashboard.php'> Press to continue..</a>";
            $flag = true;
            break;
        }
        else{          
            $flag = false;          
        }
    }
    if($flag == false){
        echo "Login Unsuccessful";
    }	
    mysqli_close($conn);
?>


