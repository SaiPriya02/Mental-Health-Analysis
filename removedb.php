<?php
    $servername="localhost";
    $username = "sai_priya";
    $password = "oizys1234";
    $dbname= "oizys";
    $conn  = mysqli_connect($servername,$username,$password,$dbname);
    if($conn->connect_error)
        die("connection error" . $conn->connect_error);
    $del_id= $_POST['id'];
    $sql = "DELETE FROM CESD WHERE id='$del_id';"; //delete here

    if(mysqli_query($conn, $sql)){
        echo "Record deleted successfully, redirecting to admin page...";
        header("refresh:1;url=admin.php");
    }
    else{
        echo "ERROR: $sql not executed.";
    }
    mysqli_close($conn);
?>