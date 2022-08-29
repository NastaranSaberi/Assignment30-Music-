<?php

    include "header.php";
    include "database.php";


?>


<div class="container mt-5">
    <div class="row justify-content-center ">
        <div class="col-lg-3 col-sm-12 mt-5 align-self-center login">
            <div class="card">
                <div class="card-header text-black-50">
                    <img src="Images/Profile-256.webp" class="rounded mx-auto d-block " style="width:100px;height: 100px" alt="...">
                    <h5>Log in to the admin panel</h5>
                </div>
                <div class="card-body ">
                    <form method="post" action="admin_login_process.php">
                        <div class="mb-3 text-start">
<!--                            <label class="form-label text-start">Username</label>-->
                            <input type="text" class="form-control"  name="username" placeholder="username">
                        </div>
                        <div class="mb-3 text-start">
<!--                            <label  class="form-label">Password</label>-->
                            <input type="password" class="form-control" name="password" placeholder="password" >
                        </div>
                        <div class="mb-3 form-check text-start">
                            <input type="checkbox" class="form-check-input" >
                            <label class="form-check-label" >Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-dark btn-login" style="width:270px">Log in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php

include "footer.php";

?>

