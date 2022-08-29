<?php

    include "header.php";
    include "database.php";


    $albums = $db->query("SELECT * FROM albums");

?>

<body>

<div class="container" >
    <div class="row im_row mt-5 mb-5"  style="margin-left:209px; margin-right:128px;" >
        <div class="col-11  bg-white" >
            <div class="mt-2 mb-5">
                <h4 class="text-black-50">Albums management</h4>
                <hr class="mb-5">
                <a href="admin_add_albums.php" class="btn btn-success am" >
                    <i class="fas fa-plus"></i>
                    Add album
                </a>
                <div class="margins" >
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
                        <?php foreach ($albums as $album): ?>
                            <tr>
                                <th scope="row">
                                    <div style="margin-top: 20px;font-weight: bolder">
                                        <?php echo $album["id"];?>
                                    </div>
                                </th>
                                <td>
                                    <img src="<?php echo  $album["image"];?>"  class="img-fluid img_style" >
                                </td>
                                <td>
                                    <div style="margin-top: 20px;font-weight: bolder">
                                        <?php echo  $album["name"];?>
                                    </div>
                                </td>
                                <td>
                                    <div style="margin-top: 20px;font-weight: bolder">
                                        <a class="btn btn-sm edit" style="background-color: #008CBA" href="admin_edit_album.php?albums_id=<?php echo $album["id"];?>&&artist_id=<?php echo $album["artist_id"];?>">
                                            <i class="fas fa-edit text-light"></i>
                                        </a>
                                        <a class="btn btn-sm btn-danger trash" href="admin_remove_album.php?album-id=<?php echo $album["id"]; ?>" >
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
