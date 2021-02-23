<?php
    $conn = mysqli_connect('localhost','sai_priya','oizys1234','oizys');

    if(mysqli_select_db($conn, 'oizys')){  
        $username = $_POST["username"]; 
        $password = $_POST["password"]; 

        $sql = "SELECT * FROM admin_login";
        $result1 = mysqli_query($conn, $sql);
        $flag=0;
        while($row = $result1->fetch_assoc()) {
            $check_username=$row['username'];
            $check_password=$row['password'];
            if($username == $check_username && $password == $check_password){
                $flag=1;
                echo "Logged in, redirecting...";
                header("refresh:1;url=admin.php");
            }
        }
        if ($flag==0){
            echo "No match found.";
            header("refresh:1;url=admin-login.html");
        }
        
    }
    if(!$conn){
        echo 'Not connected to server';
    }
    if(!mysqli_select_db($conn, 'oizys')){
        echo 'Database not selected';
    }
    
?>