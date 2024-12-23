<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <header class="col-sm-12 col-md-12 col-lg-12">

        </header>
    </div>
    <div class="row">
        <nav class="col-sm-12 col-md-12 col-lg-12">
            <?php
            include_once('pages/menu.php');
            include_once('pages/functions.php');
            ?>
        </nav>

    </div>
    <div class="row">
        <section class="col-sm-12 col-md-12 col-lg-12">
            <?php
            if(isset($_GET['page'])){
                $page = $_GET['page'];
                if($page == 1){include_once ("pages/home.php");}
                if($page == 2){include_once ("pages/upload.php");}
                if($page == 3){include_once ("pages/gallery.php");}
                if($page == 4){include_once ("pages/registration.php");}
                if($page == 5){include_once ("pages/login.php");}
            }
            ?>
        </section>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>