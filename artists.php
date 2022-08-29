<?php

  include "header.php";
  include "database.php";

  $artists= $db->query("SELECT * FROM artists")

?>



<div class="container">
  <div class="row im_row mt-5 mb-5"  style="margin-left:209px; margin-right:128px;" >
    <div class="col-11  bg-white">
      <div class="mt-2 mb-5"> 
        <h4>singers</h4>
        <hr> 
        <div class="row mb-5 mx-5 mx_im">

          <?php foreach ($artists as $artist):?>

            <div class="col-lg-3 col-sm-12 mb-5 mt-5 bottom ">
              <a href="albums.php?artist=<?php echo $artist["id"]; ?> " class="text-decoration-none ">
                <div class="card card_hover scale" style="border:none;" >
                  <img src="<?php echo $artist["image"]; ?>" class="card-img-top " alt="..." style="height:300px;">
                  <div class="card-body">
                    <h5 class="card-title text-dark"><?php echo $artist["name"]; ?></h5>
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
