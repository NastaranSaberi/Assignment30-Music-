<?php
include "database.php";

$album_id = $_GET["album_id"];

$db->query("DELETE FROM musics WHERE id = $album_id");

header("location: admin_musics.php");

?>