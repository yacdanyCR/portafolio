<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=1.0">
    <link rel="stylesheet" href="css/boostsrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/aos/dist/aos.css">
    <link rel="shortcut icon" href="img/logo/github_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap-icons-1.4.1/bootstrap-icons.css">

    <title>Portafolio</title>
</head>

<body class="bg-light bg-gradient">
    <!-- HEADER -->
    <header>
        <?php include_once 'layouts/header.php'
        ?>
    </header>

    <div class=" p-1 my-container active-cont">

        <nav class="navbar top-navbar navbar-light  px-5">
            <a class="btn border-0 menu-btn" id="menu-btn"><i class="bi bi-list"></i></a>
        </nav>

        <div class="container">

            <!-- HABILIDADES -->
            <?php
            include_once 'layouts/habilidades.php';
            ?>

            <!-- PROYECTOS -->
            <?php
            include_once 'layouts/proyectos.php';
            ?>
            <!-- CV  -->
            <?php
            include_once 'layouts/cv.php';
            ?>
            <!-- FOOTER -->
            <div class="row mt-3 bg-white bg-gradient">
                <?php
                include_once 'layouts/footer.php';
                ?>
            </div>
        </div>
    </div>

    <script src="css/boostsrap/js/bootstrap.bundle.js"></script>
    <script src="css/aos/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>

    <script src="js/menu_responsive.js"></script>
    <script src="js/btn_subir.js"></script>
</body>

</html>