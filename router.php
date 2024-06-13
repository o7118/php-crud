<?php
    $route = $_SERVER["REQUEST_URI"];
    if ($route != "/demo/" &&
     $route != "/demo/about" && 
     $route != "/demo/contact" && 
     $route != "/demo/notes" &&
     $route != "/demo/registration" &&
     $route != "/demo/login" &&
     $route != "/demo/logout" &&
     $route != "/demo/loggedin" &&
     $route != "/demo/registered" ?? false){
        $id=$_GET["id"];
    }
    if ($route != "/demo/" &&
    $route != "/demo/about" && 
    $route != "/demo/contact" && 
    $route != "/demo/registration" &&
    $route != "/demo/registered" &&
    $route != "/demo/login" &&
    $route != "/demo/logout" &&
    $route != "/demo/loggedin" &&
    $route != "/demo/notes" 
    ){
            $noteid = $_GET["noteid"];
        }
    if ($route === "/demo/"){
        include("controllers/home.php");
    }
    elseif($route === "/demo/about"){
        include ("controllers/about.php");
    }
    elseif($route === "/demo/contact"){
        include('controllers/contact.php');
    }
    elseif($route === "/demo/notes"){
        include('controllers/note.php');
    }
    
    elseif($route === "/demo/registered"){
        include("controllers/registered.php");
    }
    elseif($route === "/demo/loggedin"){
        include("controllers/loggedin.php");
    }
    
    elseif($route === "/demo/registration"){
        include('controllers/registration.php');
    }
    elseif($route === "/demo/login"){
        include('controllers/login.php');
    }
    elseif($route === "/demo/logout"){
        include('controllers/logout.php');
    }
    elseif($route === "/demo/notes?id=$id"){
        include("controllers/note.php");
    }
    elseif($route === "/demo/onenote?id=$id&noteid=$noteid"){
        include('controllers/onenote.php');
    }
    else{
        include("views/empty.php");
    }
?>