<?php

include "header.php";
include "database.php";

$musics = $db->query("SELECT * FROM musics");
?>

<body>

<div class="container" >
    <div class="row im_row mt-5 mb-5"  style="margin-left:209px; margin-right:128px;" >
        <div class="col-11  bg-white" >
            <div class="mt-2 mb-5">
                <h4 class="text-black-50">Musics management</h4>
                <hr class="mb-5">
                <a href="admin_add_music.php" class="btn btn-success am">
                    <i class="fas fa-plus"></i>
                    Add music
                </a>
                <div class="margins"  >
                    <table class="table">
                        <thead class="thead-dark bg-dark text-light ">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody >
                        <?php foreach ($musics as $music): ?>
                            <tr>
                                <th scope="row">
                                    <div style="margin-top: 20px;font-weight: bolder">
                                        <?php echo $music["id"];?>
                                    </div>
                                </th>
                                <td>
                                    <img src="<?php echo  $music["image"];?>"  class="img-fluid img_style">
                                </td>
                                <td>
                                    <div style="margin-top: 20px;font-weight: bolder">
                                        <?php echo  $music["name"];?>
                                    </div>
                                </td>
                                <td>
                                    <div style="margin-top: 20px;font-weight: bolder">
                                        <a class="btn btn-sm edit" style="background-color: #008CBA" href="admin_edit_music.php?musics_id=<?php echo $music["id"];?>&&album_id=<?php echo $music["album_id"];?>">
                                            <i class="fas fa-edit text-light"></i>
                                        </a>
                                        <a class="btn btn-sm btn-danger trash"  href="admin_remove_music.php?albumd=<?php echo $music["id"];?>"?>
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
