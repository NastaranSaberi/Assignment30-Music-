<?php

include "database.php";

$name = $_POST["name"];
$album_id = $_POST["album_id"];

if ($_FILES["image"]["size"] > 10000000 && $_FILES["mp3"]["size"] > 10000000)
{
    echo "Sorry,your file is too large.";
    header("admin_add_music.php");
}
else
{
    // part 1: Add info to database
    $image_name = "Images/artists/" . $_FILES["image"]["name"];
    $music_name = "mp3/" . $_FILES["mp3"]["name"];

    $db->query("INSERT INTO musics(name,album_id,image,mp3) VALUES('$name','$album_id','$image_name','$music_name')");

    // part 2: Move image file to folder
    move_uploaded_file($_FILES["image"]["tmp_name"], $image_name);
    move_uploaded_file($_FILES["mp3"]["tmp_name"], $music_name);
    header("location: admin_musics.php");
}
?>
