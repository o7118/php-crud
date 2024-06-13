<?php
    // if (isset($_POST["submit"])){
    //     header("location: /demo/registration");
    //     $password = $_POST["password"];
    //     $email = $_POST["email"];
    //     if ($email != null && $password != null){
    //         $incertpassword = $db->query("INSERT INTO `login_details` (`email`, `password`) VALUES ('$email', '$password')");
    //     }
    //     else {
    //         echo 'innput a name';
    //     }
    // }

    // else{
    //     echo"problem still dae";
    // }
    
    if ($_SESSION["user"] ?? false){
        header("location: /demo/");
    }

    else{
    $name = "registration";
    include("views/registrationview.php");
    }
    
?>