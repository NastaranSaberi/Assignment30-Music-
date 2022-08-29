<?php

    include "header.php";
    include "database.php";


    $musics_id = $_GET["musics_id"];
    $albums_id = $_GET["album_id"];

    $musics = $db->query("SELECT * FROM musics WHERE id = $musics_id")->fetch_assoc();

    $albums_selected = $db->query("SELECT * FROM albums WHERE id = $albums_id")->fetch_assoc();

    $albums = $db->query("SELECT * FROM albums");
?>


<?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true): ?>

    <div class="container margin_top">
        <div class="row justify-content-center ">
            <div class="col-lg-5 col-sm-12 align-self-center">
                <div class="card">
                    <div class="card-header text-black-50">
                        <img src="Images/Music-Note-Song-256.webp" class="rounded mx-auto d-block mt-2 mb-2" style="width:100px;height: 100px" alt="...">
                        <h5>Edit Music</h5>
                    </div>
                    <div class="card-body ">
                        <form method="post" action="admin_edit_music_process.php" enctype="multipart/form-data">
                            <div class="mb-3 text-start">
                                <label class="form-label text-start fs-5">Name</label>
                                <input type="text" value="<?php echo $musics["name"]; ?>" class="form-control"  name="name" placeholder="name">
                            </div>
                            <div class="mb-3 text-start">
                                <label  class="form-label fs-5">New song image</label>
                                <input type="file" class="form-control"  name="image" placeholder="image">
                            </div>
                            <div class="mb-3 text-start">
                                <label  class="form-label fs-5">Album id</label>
                                <select class="form-select" name="albums_id">
                                    <option value="<?php echo $albums_selected["id"] ?>"><?php echo $albums_selected["name"] ?></option>

                                    <?php foreach ($albums as $album): ?>
                                        <?php if ( $albums_selected["id"] != $album["id"]):?>

                                            <option value="<?php echo $album["id"] ?>"><?php echo $album["name"] ?></option>
                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3 text-start">
                                <label  class="form-label fs-5">Mp3</label>
                                <input type="file" class="form-control"  name="mp3" placeholder="mp3" >
                            </div>
                            <input type="hidden" value="<?php echo $musics["id"]; ?>" name="id">
                            <button type="submit" class="btn btn-dark" style="width:270px" href="artists.php">submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php else:

    header("Location:index.php");
endif;

?>

<?php