<?php

    include "header.php";
    include "database.php";

    $genre_id = $_GET["genre_id"];

    if((isset($_GET["genre_id"]))) {
        $musics= $db->query("SELECT * FROM musics WHERE genre_id = $genre_id ");
    }
    else {
        $musics= $db->query("SELECT * FROM musics");
    };

    $genres = $db->query("SELECT * FROM genres");


?>



    <div class="container">
        <div class="row im_row mt-5 mb-5"  style="margin-left:209px; margin-right:128px;" >
            <div class="col-11  bg-white">
                <div class="mt-2 mb-5">
                    <h3 class="text-black-50" >Musics</h3>
                    <hr>
                    <div class="row mb-5 mx-5 mx_im">
                        <div class="card-body">
                            <audio id="music-player" src="" controls class="audio1" loop ></audio>
                        </div>

                        <?php foreach ($musics as $music):?>

                            <div class="col-lg-3 col-sm-12 mb-5 mt-5 bottom ">
                                <a onclick="play_music('<?php echo $music["mp3"]; ?>')"  class="text-decoration-none "  >
                                    <div class="card card_hover scale" style="border:none;" >
                                        <img src="<?php echo $music["image"]; ?>" class="card-img-top " alt="..." style="height:300px;border: solid 2px deeppink">
                                        <div class="card-body">
                                            <h5 class="card-title text-dark"><?php echo $music["name"]; ?></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        <?php endforeach;?>

                    </div>
                </div>
            </div>
        </div>
    </div>



<?php

include "footer.php";

?>