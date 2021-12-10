<?php

session_start();
require_once "connect.php";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST["email"];
        $name = $_POST["name"];
        $password = $_POST["password"];
        $unq_no=$_POST["unq_no"];
        $password = md5($password);
        $rent="DUE";
        $elec="DUE";$water="DUE";
        //checking email already exists
        $checking = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
        $checkcount = mysqli_num_rows($checking);
        if($checkcount!=0){
            echo "Email Already exists, Please try another one";
        } else{
            $sql = " INSERT INTO users (name, email, password,unq_no,rent,elec,water) VALUES ('$name', '$email','$password','$unq_no','$rent','$elec','$water')";
            mysqli_query($conn,$sql);
            // getting user id 
            $userid =  mysqli_insert_id($conn);
             //creating session 
            
            $_SESSION["userid"] = $userid;
            

            header("location:dashboard.php");
        }
    }


?>
