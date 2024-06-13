<?php
    $_SESSION["user"] = null;
    $_SESSION["name"] = null;
    $_SESSION["id"] = null;
    $_SESSION = [];
    
    session_destroy();
    header("location: /demo/");
?>