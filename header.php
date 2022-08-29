<?php

    session_start();

    include "database.php";
    $genres = $db->query("SELECT * FROM genres");

?>

<!DOCTYPE html>
    <html lang="en" >

        <head>

            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="The best music">
            <meta name="keywords" content="The best music,music,php">
            <meta name="author" content="Nastaran Saberi">
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/style.css">
            <link rel="icon" href="Images/5000128.png">
            <title>The best music</title>
            
        </head>

        <body>
            
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark " >
                <div class="container-fluid">
                    <a class="navbar-brand fs-1 " style="margin-left:90px;" href="#">The <span style="color:#FF2079;">best</span> music</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse menu_center" style="margin-left:170px;" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active hover_menu" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active hover_menu" href="artists.php">singers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active hover_menu" href="admin_login.php">Admin panel</a>
                            </li>

                            <?php if($_SESSION["login_status"] != null && $_SESSION["login_status"] == true): ?>
                                <li class="nav-item">
                                    <a class="nav-link active hover_menu"  href="admin_logout.php">Log out</a>
                                </li>
                            <?php endif; ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Genre
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" name="genre_id">
                                    <form method="post" action="genre_musics_process.php" >
                                        <?php foreach ($genres as $genre): ?>
                                            <li><a class="dropdown-item" href="genre_musics.php?genre_id=<?php echo $genre["id"]; ?>" ><?php echo $genre["name"]; ?></a></li>
                                        <?php endforeach; ?>
                                    </form>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex search" style="margin-right:80px;" >
                            <input class="form-control me-2"  type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-light" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>

        </body>
    </html>
