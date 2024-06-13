<?php include("partials/beginning.php") ?>
<?php include ("partials/nav.php")?>
<?php include ("partials/header.php") ?>
<body>
    <p>this is your <?=$name ?></p>
    <?php 
    //$id = $_GET["id"];
    //$note = $db->query("SELECT * FROM notetable WHERE user_id = $id");
    // foreach ($note as $posts){
    //     $noteid = $posts["id"];
    //     $notes = $posts["wishlist"];
    //     echo "<li>" . "<a href='/demo/onenote?id=$id&noteid=$noteid' class='text-blue 
    //     hover:underline'>" 
    //     . htmlspecialchars($notes) 
    //     . "</a>". "</li>";

        
    // }
    
    ?>

    <?php
        if($_SESSION["user"] ?? false){ 
            $id = $_SESSION["id"];
            $note = $db->query("SELECT * FROM notetable WHERE user_id = $id ");
            foreach ($note as $posts){
                     $noteid = $posts["id"];
                    $notes = $posts["wishlist"];
                    echo "<li>" . "<a href='/demo/onenote?id=$id&noteid=$noteid' class='text-blue 
                     hover:underline'>" 
                     . htmlspecialchars($notes) 
                    . "</a>". "</li>";
            }
            ?>

                <form method="post">
                    <input type="text" name="note" id="note"><br>
                    <input type="submit" name="submit" id="submit"><br>
                </form>
        <?php
            ;
        } 

        else{?>

            <a href="/demo/login">login </a> or click <a href="/demo/registration">register </a>
        <?php
            ;
        }
    ?>
    
    
    <?php
        
    ?>
</body>
<?php include ("partials/foot.php")?>