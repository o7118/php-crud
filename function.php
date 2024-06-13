<?php
    function dd($value){
        var_dump($value);
        die;
    }
    $name = "myapp";
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = new mysqli($host, $username, $password, $name);
    //$namer = $_SESSION['name']
  
?>