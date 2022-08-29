<?php

    include "database.php";

    $genre_id = $_POST=["genre_id"];
    $genres_id = $db->query("INSERT INTO genres(id) VALUES('$id')");


    if ($genre_id == $genres_id)
    {
        header("genre_musics.php");
    }
    else
    {
        echo "Cant find";
    }

?>
