<?php
include 'scripts/conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $quest=$_POST['ques'];
  $opt1=$_POST['op1'];
  $opt2=$_POST['op2'];
  $opt3=$_POST['op3'];
  $opt4=$_POST['op4'];
  $optc=$_POST['cop'];
  $cat=$_POST['category'];

  $sql="INSERT INTO questions(question,option1,option2,option3,option4,correct,category) VALUES('$quest','$opt1','$opt2','$opt3','$opt4','$optc','$cat')";
  if (mysqli_query($link,$sql)) {
    $msg='<div class="alert alert-primary" role="alert">Your Question has been recorded. Add more questions to support us.</div>';
  }else{
    $msg='';
    echo "Error:".$sql."<br/>".mysqli_error($link);
  }
  mysqli_close($link);
} 
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <title>Quiz It!!</title>
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="mx-auto order-0">
        <a class="navbar-brand" href="#"><h1>Questions</h1></a>
      </div>
    </nav>  
    <?php
    echo $msg;
    ?>
    <div class="container m-1 shadow p-3 mb-5 bg-white rounded">
      <form method="POST" action="questions.php">
        <div class="row justify-content-sm-center">
          <div class="col-sm-8">
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Your Question ?</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ques"></textarea>
            </div>
          </div>
        </div>
        <div class="row justify-content-sm-center">
          <div class="col-sm-4">
            <div class="form-group">
              <label for="exampleFormControlInput1">Option 1?</label>
              <input type="text" name="op1" placeholder="Enter one Option" required="required" class="form-control" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label for="exampleFormControlInput1">Option 2?</label>
              <input type="text" name="op2" placeholder="Enter one Option" required="required" class="form-control" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="w-100"></div>
          <div class="col-sm-4">
            <div class="form-group">
              <label for="exampleFormControlInput1">Option 3?</label>
              <input type="text" name="op3" placeholder="Enter one Option" required="required" class="form-control" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label for="exampleFormControlInput1">Option 4?</label>
              <input type="text" name="op4" placeholder="Enter one Option" required="required" class="form-control" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="w-100"></div>
          <div class="col-sm-4">
            <div class="form-group">
              <label for="exampleFormControlInput1">Correct Answer?</label>
              <input type="text" name="cop" placeholder="Enter one Option" required="required" class="form-control" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label for="exampleFormControlInput1">Category?</label>
              <select class="form-control" name="category">
                <option>Literature</option>
                <option>Movies</option>
                <option>Tech</option>
                <option>Politics</option>
                <option>History</option>
                <option>Art</option>
                <option>Music</option>
                <option>Science and Nature</option>
                <option>Sports</option>
                <option>TV and Web Series</option>
                <option>Geography</option>
                <option>General Knowledge</option>
              </select>
            </div>
          </div>
          <div class="w-100"></div>
          <input class="btn btn-primary m-2 justify-content-sm-center" type="submit" name="submit" value="Submit">
        </div>
      </form>
    </div>
    <footer class="blockquote-footer float-right">Developed by Ankit Saha & Siddharth Agarwal</footer>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
