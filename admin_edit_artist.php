<?php

include "header.php";
include "database.php";


$artist_id = $_GET["artist_id"];

$artists = $db->query("SELECT * FROM artists WHERE id = $artist_id")->fetch_assoc();

?>


<?php if ($_SESSION["login_status"] != null && $_SESSION["login_status"] == true): ?>

    <div class="container margin_top ">
        <div class="row justify-content-center ">
            <div class="col-lg-6 col-sm align-self-center">
                <div class="card">
                    <div class="card-header text-black-50">
                        <img src="Images/3775119.png" class="rounded mx-auto d-block justify-content-center" style="width:100px;height: 100px" alt="...">
                        <h5>Edit singer</h5>
                    </div>
                    <div class="card-body ">
                        <form method="post" action="admin_edit_artist_process.php" enctype="multipart/form-data">
                            <div class="mb-3 text-start">
                                <label class="form-label text-start fs-5">Singer Name</label>
                                <input type="text" value="<?php echo $artists["name"]; ?>" class="form-control"  name="name" placeholder="name">
                            </div>
                            <div class="mb-3 text-start">
                                <label  class="form-label fs-5">Singer photo</label>
                                <input type="file" class="form-control"  name="image" placeholder="image">
                            </div>
                            <input type="hidden" value="<?php echo $artists["id"]; ?>" name="id">
                            <button type="submit" class="btn btn-dark mt-1" style="width:270px" >submit</button>
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

<?php include "footer.php" ?>