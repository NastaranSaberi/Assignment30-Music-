<?php

    include "header.php";

?>

<?php if($_SESSION["login_status"] != null && $_SESSION["login_status"] == true): ?>

<body style="background-color:#808080;">

    <div class="container dash"  >
        <div class="row mt-4"  style="margin-left:204px; margin-right:30px;"  >
            <div class="col-11 " style="width:950px;background-color:#E0E0E0;" >
                <div class="mt-2">
                    <h3 class="mt-3 mb-3 text-black-50">Welcome to the admin panel</h3>
                    <hr>
                    <div class="row row-im mt-5 mb-5 m-4">
                        <div class="col-lg-4 col-sm-12 " >
                            <a href="admin_artists.php" class="text-decoration-none text-black management">
                                <div class="card card_hover" style="border-radius: 15px;border: solid 1px lightgray;">
                                    <div class="card-body">
                                        <a class="text-decoration-none text-black" href="admin_artists.php">
                                            <h4 class="card-title"><span class="font_management" >Singers</span> management</h4>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-sm-12 " >
                            <div class="card card_hover" style="border-radius: 15px;border: solid 1px lightgray">
                                <div class="card-body">
                                    <a class="text-decoration-none text-black" href="admin_albums.php">
                                        <h4 class="card-title"><span class="font_management" >Albums</span> management</h4>
                                    </a>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-4 col-sm-12" >
                            <div class="card card_hover" style="border-radius: 15px;border: solid 1px lightgray">
                                <div class="card-body">
                                    <a class="text-decoration-none text-black management" href="admin_musics.php" >
                                        <h4 class="card-title"><span class="font_management">Musics</span> management</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>



<?php 

    else:
        header("Location: index.php");
    endif;

?>

<?php

include "footer.php";

?>



