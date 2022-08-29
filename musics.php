<?php

    include "header.php";
    include "database.php";

    $album_id = $_GET["album"];
    $album = $db->query("SELECT * FROM albums WHERE id = $album_id")->fetch_assoc();
    $artist_id = $album["artist_id"];
    $artist = $db->query("SELECT * FROM artists WHERE id = $artist_id")->fetch_assoc();
    $musics = $db->query("SELECT * FROM musics WHERE album_id = $album_id");

?>

<body style="background-color:#808080;">

    <div class="container">
        <div class="row im_row2 mt-5 " style="margin-left:184px; margin-right:10px;" >
            <div class="col-11 mt-2 margin_botton" style="background-color:#E0E0E0;">
                <div class="mt-2 bg_margin">
                    <div class="text-center mt-5 mb-5 d-flex justify-content-center">
                        <div class="card">

                            <?php if($bg_image =! 0){ ?>
                                <img src="<?php echo $artist["bg_image"];?>" class="card-img-top bg_img_music" alt="..."
                                     style="width:400px;height:400px; border:solid 5px white;">
                            <?php } ?>

                            <div class="card-body">
                                <audio id="music-player" src="" controls class="audio" loop></audio>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group m-5 ul">

                        <?php foreach ($musics as $music): ?>

                        <li class="list-group-item d-flex " onclick="play_music('<?php echo $music["mp3"]; ?>')" style="height:80px;border:solid 1px gray;">
                            <div class="row row_song">
                                <div class="col-2" style="width:60px;">
                                    <img class="mr-2 mt-2 " src="<?php echo $music["image"];?>" alt="Generic placeholder image" style="width:50px;height:50px;" >
                                    <i class="fa fa-play icon play" id="icon_play" style="margin-top:-33px;margin-left:2px;position:absolute;color: #FF2079 !important;"></i>
                                    <button class="equalizer" id="icon_equalizer" style="margin-top:-33px;margin-left:17px;position:absolute;color: #FF2079 !important;display: none">
                                        <span class="eq1"></span>
                                        <span class="eq2"></span>
                                        <span class="eq3"></span>
                                    </button>
                                </div>
                                <div class=" justify-content-start div_song" class="col-6 ms-3  mt-2 " style="width:200px;margin-left:10px;" >
                                    <p class="text-start name_singer"  style="font-weight: bold;"><?php echo $artist["name"];?></p>
                                    <p class=" text-start name_song" style="margin-top:-13px;"><?php echo $music["name"];?></p>
                                </div>
                            </div>

                            <?php endforeach; ?>

                                </div>
                            </div>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>


<?php

include "footer.php";

?>



