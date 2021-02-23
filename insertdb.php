<?php
  $servername="localhost";
  $username = "sai_priya";
  $password = "oizys1234";
  $dbname= "oizys";
  $conn  = mysqli_connect($servername,$username,$password,$dbname);
  if($conn->connect_error)
    die("connection error" . $conn->connect_error);
  else {
    $question = $_POST['question']; //this works
    $pts_1 = $_POST['pts_1'];
    $pts_2 = $_POST['pts_2'];
    $pts_3 = $_POST['pts_3'];
    $pts_4 = $_POST['pts_4'];
    $sql= "INSERT INTO CESD VALUES (null, '$question','$pts_1','$pts_2','$pts_3','$pts_4');";
    if(mysqli_query($conn, $sql)){
      echo "Record added successfully, redirecting to admin page...";
      header("refresh:1;url=admin.php");
    }
    else{
      echo "ERROR: $sql not executed." ; 
    }
    // Close connection
    mysqli_close($conn);
  }
?>