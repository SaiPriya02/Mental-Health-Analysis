<?php
    $conn = mysqli_connect('localhost','sai_priya','oizys1234','oizys');

    if(mysqli_select_db($conn, 'oizys')){
        $name=$_POST['fullName'];
        $age=$_POST['Age'];
        $sex=$_POST['Sex'];
        $email=$_POST['emailID'];
        $phone=$_POST['Phone'];
        $country=$_POST['Country'];
        $profession=$_POST['Profession'];
        $sql = "INSERT INTO user_details VALUES (null, '$name',$age,'$sex','$email',$phone,'$country','$profession');";
        if(mysqli_query($conn, $sql)){
            echo 'Query executed, redirecting...';
            // header("refresh:1;url=cesd.html");
            header("refresh:1;url=cesd.php");
        }
        else{
            echo 'Not executed';
        }
    }
    if(!$conn){
        echo 'Not connected to server';
    }
    if(!mysqli_select_db($conn, 'oizys')){
        echo 'Database not selected';
    }
?>