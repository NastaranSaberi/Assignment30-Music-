<?php

include "database.php";

$name = $_POST["name"];
$id = $_POST["id"];

if ($_FILES["image"]["name"] == "")
{

    $db->query("UPDATE artists SET name = '$name' WHERE id = $id ");
    header("Location: admin_artists.php");

}
else //just edit name
{
    if($_FILES["image"]["size"] > 10000000)
    {
        echo "Your file is too large !!!";
        header("admin_add_artists.php");
    }
    else
    {
        // part 1: Add info to database
        $image_name = "Images/artists/" . $_FILES["image"]["name"];
        $db->query("UPDATE artists SET name = '$name', image = '$image_name' WHERE id = $id ");

        // part 2: Move image file to folder
        move_uploaded_file($_FILES["image"]["tmp_name"], $image_name);
        header("location:admin_artists.php");
    }
}


?>