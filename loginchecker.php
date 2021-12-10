<?php
    session_start();
    require_once "connect.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $email = $_POST["email"];
        $password = $_POST["password"];
        $password = md5($password );
        if($email!=NULL){
            $checking =   mysqli_query($conn,"SELECT * FROM users WHERE `email`='$email' AND `password`='$password'");
              
              $userdata = mysqli_fetch_array($checking);
              $userid =  $userdata['id'];
              if($userid!=NULL)
             {
                  //creating session 
                 $_SESSION["userid"] = $userid;
                 
                 header("location:dashboard.php");
             }
             else
             {
                 header("location:login.php?error=1");
             }
             
         }else{
             echo "Please enter E-mail address";
         }

    }

?>
