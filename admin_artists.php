<?php

    include "header.php";
    include "database.php";
    session_start();
    $artists = $db->query("SELECT * FROM artists");

?>

<div class="container" >
    <div class="row im_row mt-5 mb-5"  style="margin-left:209px; margin-right:128px;" >
        <div class="col-11  bg-white" >
            <div class="mt-2 mb-5">
                <h4 class="text-black-50">Singers management</h4>
                <hr class="mb-5">
                <a href="admin_add_artists.php" class="btn am btn-success align-items-end">
                    <i class="fas fa-plus"></i>
                    Add artist
                </a>
                <div class=" margins">
                    <table class="table">
                        <thead class="thead-dark bg-dark text-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody >
                            <?php foreach ($artists as $artist): ?>
                                <tr>
                                    <th scope="row">
                                        <div style="margin-top: 20px;">
                                            <?php echo $artist["id"];?>
                                       </div>
                                    </th>
                                    <td>
                                        <img src="<?php echo $artist["image"];?>" class="img-fluid img_style">
                                    </td>
                                    <td>
                                        <div style="margin-top: 20px;font-weight: bolder">
                                        <?php echo $artist["name"];?>
                                        </div>
                                    </td>
                                    <td>
                                        <div  style="margin-top: 20px;">
                                            <a class="btn btn-sm " style="background-color: #008CBA" href="admin_edit_artist.php?artist_id=<?php echo $artist["id"];?>">
                                                <i class="fas fa-edit text-light"></i>
                                            </a>
                                            <a class="btn btn-sm btn-danger" href="admin_remove_artist.php?artist_id=<?php echo $artist["id"];?>">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<?php

include "footer.php";

?>
