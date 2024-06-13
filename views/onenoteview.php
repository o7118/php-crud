<?php include("partials/beginning.php") ?>
<?php include ("partials/nav.php")?>
<?php include ("partials/header.php") ?>
<body>
    <h1>edit note</h1>

    <form method="post">
    <?php
        echo $onenote
        ?><br>
        <input type="text" id="edit" name="edit" placeholder="<?=$onenote?>"><br>
        <input type="submit" id="submit" name="submit"><br>
        click <input type="submit" id="delete" name="delete"> to delete note
    </form>

    <?php
        if(isset($_POST["delete"])){
            header("location: /demo/notes?id=$id");
            $delete = $db->query("DELETE FROM `myapp`.`notetable` WHERE (`id` = $userid)");
        }
    ?>
        
    <a href= "/demo/notes">back to notes</a>
</body>
<?php include ("partials/foot.php")?>