<?php

    include "header.php";
    include "database.php";

    $artist_id = $_GET["artist"];
    $albums = $db->query("SELECT * FROM albums WHERE artist_id = $artist_id");
    $name_artist = $db->query("SELECT name FROM artist")

?>




<div class="container margin_left">
    <div class="row mt-5" style="margin-left:209px; margin-right:128px;">
        <div class="col-11  bg-white">
            <div class="mt-2"> 
                <h4>Albums</h4>
                <hr> 

                <?php if($albums->num_rows == 0): ?>

                <div class="alert alert-primary" role="alert">
                    Unfortunately, no album of this singer has been included in the site.
                </div>
               
                 <?php else: ?>

                <div class="row mb-5 mx-5">

                    <?php foreach ($albums as $album): ?>

                        <div class="col-lg-3 col-sm-12 right_left" >
                            <div class="card card_hover mt-4 scale" >
                                <a href="musics.php?album=<?php echo $album["id"];?>" class="text-decoration-none">
                                    <img style="width:192px;height:187px;" src="<?php echo $album["image"];?>" class="card-img-top img_album"alt="<?php echo $album["name"]; ?>">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-center text-dark"><?php echo $album["name"]; ?></h5>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>

       
<?php

  include "footer.php";

?>
