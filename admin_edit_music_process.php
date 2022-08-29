<?php

include "database.php";

$name = $_POST["name"];
$albums_id = $_POST["albums_id"];
$id = $_POST["id"];

if ($_FILES["image"]["name"] == "" && $_FILES["mp3"]["name"] == "") {

    $db->query("UPDATE musics SET name = '$name',album_id = '$albums_id' WHERE id = $id ");
    header("Location: admin_musics.php");
}
else {
    if ($_FILES["image"]["size"] > 5000000)
    {
        header("Location: admin_add_music.php");
    }
    else {
        $image_name = "Images/artists/" . $_FILES["image"]["name"];
        $mp3_name = "mp3/" . $_FILES["mp3"]["name"];

        $db->query("UPDATE musics SET name = '$name', image = '$image_name', album_id = '$albums_id', mp3 = '$mp3_name'  WHERE id = $id");

        move_uploaded_file($_FILES["image"]["tmp_name"],$image_name);
        move_uploaded_file($_FILES["mp3"]["tmp_name"],$mp3_name);

        header("Location: admin_musics.php");
    }
}

?>

