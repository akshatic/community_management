<?php
    session_start();
    require_once "connect.php";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $issue_text=$_POST["issue"];
        $name_unq=$_POST["name_unq"];
        if($issue_text!=NULL && $name_unq!=NULL){
            $sql = "INSERT INTO issues (name_unq, issue)
                    VALUES ('$name_unq', '$issue_text')";

            if (mysqli_query($conn, $sql)) {
                echo "Submitted";
                header("location:issuesubmit.html");

            } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }else{
        Echo "Please Enter the details.";
    }


?>