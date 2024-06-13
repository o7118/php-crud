<?php
    $name = " notes";
    //dd($_SERVER);
        //TO UPDATE THE LIST OF NAMES

        
        if (isset($_POST['submit'])){
           // header("location:/demo/name");
            $newnote = $_POST["note"];
            header("location: /demo/notes");
            $id = $_SESSION["id"];
            if ($newnote != null){
                $addnote = $db->query("INSERT INTO `notetable` (`wishlist`, `user_id`) VALUES
                ('$newnote', $id);");
            }
            else{
                echo "input to create a name";
            }
        }

    
    
    include("views/noteview.php")
?>