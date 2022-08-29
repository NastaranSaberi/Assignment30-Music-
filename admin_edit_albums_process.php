<?php

include "database.php";

$name = $_POST["name"];
$artists_id = $_POST["artists_id"];
$id = $_POST["id"];

if ($_FILES["image"]["name"] == "")
{
    $db->query("UPDATE albums SET name ='$name', artist_id = $artists_id WHERE id = $id");
    header("Location: admin_albums.php");


} else {
    if ($_FILES["image"]["size"] > 5000000)
    {
        header("Location: admin_add_album.php");
    }
    else
    {
        $image_name = "Images/artists/" . $_FILES["image"]["name"];
        $db->query("UPDATE albums SET name = '$name', image = '$image_name', artist_id = $artists_id WHERE id = $id");
        move_uploaded_file($_FILES["image"]["tmp_name"], $image_name);
        header("Location: admin_albums.php");
    }
}

?>