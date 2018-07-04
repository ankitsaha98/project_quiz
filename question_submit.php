<?php
  $hostname="localhost";
  $username="root";
  $password="123456";                                      
  $database="quizzit";
  $conn=mysqli_connect($hostname,$username,$password,$database);
  if (!$conn) {
    die("connection failed:".mysqli_connect_error());
  }
  $quest=$_POST['ques'];
  $opt1=$_POST['op1'];
  $opt2=$_POST['op2'];
  $opt3=$_POST['op3'];
  $opt4=$_POST['op4'];
  $optc=$_POST['cop'];

  $sql="INSERT INTO questions(question,option1,option2,option3,option4,correct) VALUES('$quest','$opt1','$opt2','$opt3','$opt4','$optc')";
    if (mysqli_query($conn,$sql)) {
      echo "Questions recorded";
    }else{
      echo "Error:".$sql."<br/>".mysqli_error($conn);
    }
    mysqli_close($conn); 
?>