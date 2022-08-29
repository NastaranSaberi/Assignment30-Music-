<?php


include "header.php";
include "database.php";
$albums = $db->query("SELECT * FROM albums");
$artists = $db->query("SELECT * FROM artists");


?>


<?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true): ?>

    <div class="container margin_top">
        <div class="row justify-content-center ">
            <div class="col-lg-5 col-sm-12  align-self-center">
                <div class="card">
                    <div class="card-header text-black-50">
                        <img src="Images/multimedia-16-256.webp" class="rounded mx-auto d-block mt-3 mb-3 img_add" alt="...">
                        <h5>Add new album</h5>
                    </div>
                    <div class="card-body ">
                        <form method="post" action="admin_edit_albums_process.php" enctype="multipart/form-data">
                            <div class="mb-3 text-start">
                                <label class="form-label text-start fs-5">New album name</label>
                                <input type="text" class="form-control" value=""  name="name" placeholder="name">
                            </div>
                            <div class="mb-3 text-start">
                                <label  class="form-label fs-5">New album image</label>
                                <input type="file" class="form-control"  name="image" placeholder="image">
                            </div>
                            <div class="mb-3 text-start">
                                <label  class="form-label fs-5">Artist id</label>
                                <select class="form-select" aria-label="Default select example" name="artist_id">

                                    <?php foreach ($artists as $artist): ?>
                                        <option value="<?php echo $artist["id"]; ?>"> <?php echo $artist["name"]; ?></option>
                                    <?php endforeach; ?>

                                </select>
                            </div>
                            <button type="submit" class="btn btn-dark" style="width:270px" href="artists.php">submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php

else:
    header("Location: index.php");
endif;

?>

<?php include "footer.php"; ?>