<?php
    //starting session
    session_start();

    //including the database
    include("./connection.php");

    if(isset($_POST["login"])){
        //accepting user  input
        $email = $_POST["email"];
        $password = $_POST["password"];

        //checking if user logins exist
        $user_select_query = mysqli_query($connection, " SELECT * FROM `logins` WHERE email= '$email' AND `password`= '$password'");
        $user_select_row = mysqli_fetch_array($user_select_query);

        if(is_array($user_select_row)){
            $_SESSION["email"] = $user_select_row["email"];
        }

        if(isset($user_select_row["email"])){
            $response = [
                "status" => 200,
                "message" => "login successful"
            ];
        }else{
            $response = [   
                "message" => "invalid login"
            ];
        }

        header('Content-type: application/json');
        echo json_encode($response);  
    }
?>