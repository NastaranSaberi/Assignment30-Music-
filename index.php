<?php

  include "header.php";
  include "database.php";
  $albums = $db-> query(" SELECT * FROM albums ORDER BY time DESC LIMIT 6 ");
  $artist_id = $album["artist_id"];
 

?>



<div class="container">
  <div class="row mt-5 row_col"  style="margin-left:209px; margin-right:162px;" >
    <div class="col-11 colindex bg-white d-flex justify-content-center">
      <div class="mt-2"> 
        <h3>The most popular singers</h3>
        <p class="text-secondary">Last month</p>
        <hr> 
        <div class="container1"> 
          <div class="hexagon">
            <img class="hexagon__background"  src="Images/artists/Dua Lipa/1.jpeg">
          </div>
            <div class="hexagon">
              <img class="hexagon__background" src="Images/artists/The Weeknd/2.jpeg">
            </div>
            <div class="hexagon">
              <img class="hexagon__background" src="Images/artists/3.jpeg">
            </div>
            <div class="hexagon">
              <img class="hexagon__background" src="Images/artists/24.jpeg">
            </div>
            <div class="hexagon">
              <img class="hexagon__background" src="Images/artists/27.jpeg">
            </div>
            <div class="hexagon">
              <img class="hexagon__background" src="Images/artists/25.jpeg">
            </div>
            <div class="hexagon">
              <img class="hexagon__background" src="Images/artists/22.jpeg">
            </div>
            <div class="hexagon">
              <img class="hexagon__background" src="Images/artists/20.jpeg">
            </div>
            <div class="hexagon">
              <img class="hexagon__background" src="Images/artists/9.jpeg">
            </div>
            <div class="hexagon">
              <img class="hexagon__background" src="Images/artists/10.jpeg">
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container ">
    <div class="row mt-4 im_row3"  style="margin-left:200px; margin-right:30px;" >
      <div class="col-11  bg-white" style="width:955px;">
        <div class="mt-2"> 
          <h3 class="mt-3 mb-3">New albums</h3>
          <hr>
          <div class="row m-4 mt-5 mb-5">

          <?php foreach ($albums as $album) : ?>

            <div class="col-lg-4 col-sm-12 mb-5 right_left">
              <a href="musics.php?album=<?php echo $album["id"];?>" class="text-decoration-none">
                <div class="card card_hover" >
                  <img src="<?php echo $album["image"];?>" class="card-img-top" alt="<?php echo $album["name"]; ?>" style="height:300px;">
                  <div class="card-body">
                    <h5 class=" text-center text-dark"><?php echo $album["name"]; ?></h5>
               
                  </div>
                </div>
              </a>
            </div>

        <?php endforeach; ?>

          </div>
        </div>
     </div>
   </div>
 </div>


    


  <div class="container ">
      <div class="row mt-4"  style="margin-left:204px; margin-right:30px;"  >  
        <div class="col-11  bg-white" style="width:950px;">
          <div class="mt-2"> 
            <h3>Top three songs</h3>
            <p class="text-secondary">According to people</p>
            <hr>
            <div class="row m-4 mt-5 mb-5">
              <div class="col-lg-4 right_left col-sm-12 mb-5">
                <div class="card card_hover" >
                  <img src="Images/artists/12.jpeg" class="card-img-top" alt="..." style="height:300px;">
                  <div class="card-body">
                    <h3 class="text-start">Adele </h3>
                    <p class="text-start">Hello</p>
                    <div class="text-start">
                    <i class="fa fa-star " aria-hidden="true" style="color:#ffc107;"></i>
                    <i class="fa fa-star " aria-hidden="true" style="color:#ffc107;"></i>
                    <i class="fa fa-star " aria-hidden="true" style="color:#ffc107;"></i>
                    <i class="fa fa-star " aria-hidden="true" style="color:#ffc107;"></i>
                    <i class="fa fa-star " aria-hidden="true" style="color:#ffc107;"></i>
                  </div>
                </div>
              </div>
            </div>
          <div class="col-lg-4 right_left col-sm-12 mb-5">
            <div class="card card_hover" >
              <img src="Images/artists/14.jpeg" class="card-img-top" alt="..." style="height:300px">
              <div class="card-body">
                <h3 class="text-start">Selena Gomez</h3>
                <p class="text-start">Hands to Myself</p>
                <div class="text-start">
                <i class="fa fa-star " aria-hidden="true" style="color:#ffc107;"></i>
                <i class="fa fa-star " aria-hidden="true" style="color:#ffc107;"></i>
                <i class="fa fa-star " aria-hidden="true" style="color:#ffc107;"></i>
                <i class="fa fa-star " aria-hidden="true" style="color:#ffc107;"></i>
                <i class="fa fa-star " aria-hidden="true" style="color:#adb5bd;"></i>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-4  right_left col-sm-12 mb-5">
            <div class="card card_hover" >
              <img src="Images/artists/Taylor swift/1.jpeg" class="card-img-top " alt="..." style="height:300px"> 
              <div class="card-body">
                <h3 class="text-start">Taylor Swift</h3>
                <p class="text-start">A Place in This World</p>
                <div class="text-start">
                <i class="fa fa-star " aria-hidden="true" style="color:#ffc107;"></i>
                <i class="fa fa-star " aria-hidden="true" style="color:#ffc107;"></i>
                <i class="fa fa-star " aria-hidden="true" style="color:#ffc107;"></i>
                <i class="fa fa-star " aria-hidden="true" style="color:#adb5bd;"></i>
                <i class="fa fa-star " aria-hidden="true" style="color:#adb5bd;"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
  </div>
</div>
  

   
    <p class="text-dark mt-5 ">Copyright &COPY; | 2022</p>
 
  

<?php

  include "footer.php";

?>
