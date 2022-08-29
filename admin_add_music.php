<?php

    include "header.php";
    include "database.php";


    $musics = $db->query("SELECT * FROM musics");
    $albums = $db->query("SELECT * FROM albums");

?>


<?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true): ?>

    <div class="container margin_top">
        <div class="row justify-content-center ">
            <div class="col-lg-5 col-sm-12 mt-5 align-self-center">
                <div class="card">
                    <div class="card-header text-black-50">
                        <img src="Images/Music-Note-Song-256.webp" class="rounded mx-auto d-block mt-2 mb-2" style="width:100px;height: 100px" alt="...">
                        <h5>Add new album</h5>
                    </div>
                    <div class="card-body ">
                        <form method="post" action="admin_add_music_process.php" enctype="multipart/form-data">
                            <div class="mb-3 text-start">
                                <label class="form-label text-start fs-5">New song name</label>
                                <input type="text" class="form-control"  name="name" placeholder="name">
                            </div>
                            <div class="mb-3 text-start">
                                <label  class="form-label fs-5">New song image</label>
                                <input type="file" class="form-control"  name="image" placeholder="image">
                            </div>
                            <div class="mb-3 text-start">
                                <label  class="form-label fs-5">Album id</label>
                                <select class="form-select" name="albums_id">
                                    <?php foreach ($albums as $album): ?>
                                        <option value="<?php echo $album["id"] ?>"><?php echo $album["name"] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3 text-start">
                                <label  class="form-label fs-5">Mp3</label>
                                <input type="file" class="form-control"  name="mp3" placeholder="mp3" >
                            </div>
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

<?php include "footer.php"; ?>