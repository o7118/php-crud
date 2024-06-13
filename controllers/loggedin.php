<?php

//get input
$password = $_POST["password"];
$email = $_POST["email"];


// check if email is in db
$check = $db->query("SELECT * FROM login_details WHERE email = '$email'");


    //if yes 
    if (mysqli_num_rows($check) > 0){
        // check if password = inputed password
        foreach($check as $checks){
            $newpass = $checks["password"];
            $name = $checks["name"];
            $id = $checks["id"];
        }

            // yes then log in
        if (password_verify($password, $newpass)){
            $_SESSION["user"] = "loggedin";
            $_SESSION["name"] = $name;
            $_SESSION["id"] = $id;
            header("location:/demo/");
        }
        else{
// if no the redirect to login page then give error message that password wrong
            $_SESSION["password"] = "wrong password";
            header("location:/demo/login");
        }
            
    }

    else{
//if no redirect to login page
        $_SESSION["email"] = "wrong email";
        header("location:/demo/login");
    }

    



    
dd($_POST);

?>