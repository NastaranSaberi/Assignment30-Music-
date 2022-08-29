<?php

    include "database.php";

    $name = $_POST["name"];
    $artist_id = $_POST["artist_id"];

    if ($_FILES["image"]["size"] > 100000000) {
        echo "Sorry,your file is too large.";
        header("admin_add_album.php");
    } else {
        // part 1: Add info to database
        $image_name = "Images/artists/" . $_FILES["image"]["name"];
        $db->query("INSERT INTO albums(name,image,artist_id) VALUES('$name','$image_name','$artist_id')");

        // part 2: Move image file to folder
        move_uploaded_file($_FILES["image"]["tmp_name"], $image_name);
        header("location: admin_albums.php");
}
?>
