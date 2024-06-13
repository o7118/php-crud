<?php 
    $email = $_POST["email"];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $names = $_SESSION["name"] = $_POST["name"];
    $name = "registered";
    echo $email . "<br>";
    //validate form input

    //check if user alreadfy exist
        $check = $db->query("SELECT * FROM login_details WHERE email = '$email'");
        foreach($check as $checks){
            $one = $checks["email"];
            echo $one . "<br>";
        }
        //if yes redirect to a login page
        if(mysqli_num_rows($check) > 0){
            $_SESSION["message"] = "gmail already exist";
            header("location: /demo/registration");
        }

        // if no dsave to the database and redirect
        else{
            $store = $db->query("INSERT INTO `login_details` (`email`, `password`, `name`) VALUES
            ('$email', '$password', '$names');");
            header("location: /demo/login");
            exit();
        }
        

?>