<?php 
    $id = $_GET["id"];
    $userid = $_GET['noteid'];
    $onenotes = $db->query("SELECT wishlist FROM notetable WHERE user_id = $id AND id = $noteid");
    foreach($onenotes as $one){ 
        $onenote =  $one["wishlist"];
        
         }
    
    if(isset($_POST["submit"])){
        if($_POST["edit"] != null){
            header("location: /demo/onenote?id=$id&noteid=$noteid");
            $editednote = $_POST["edit"];
            $edit = $db->query("UPDATE `myapp`.`notetable` SET `wishlist` = '$editednote' WHERE `id` = $userid;");
        };
    }
    if(isset($_POST["delete"])){
        header("location: /demo/notes");
        $delete = $db->query("DELETE FROM `myapp`.`notetable` WHERE (`id` = $userid)");
    }

    $name = "noteview page";
    include("views/onenoteview.php")
?>