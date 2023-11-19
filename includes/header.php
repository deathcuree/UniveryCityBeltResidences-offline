<?php 
    session_start();
    // echo json_encode($_SESSION['user']['fullname']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ================ ICO IMAGE ================ -->
    <link rel="icon" type="image/x-icon" href="assets/img/white_logo.ico" />
    <!--=============== BOXICONS ===============-->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js@1.9.3/toastify.min.css" />
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="./assets/css/styles.css" />

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <title>UniverCity Belt Residences</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="index.php" class="nav__logo">
                UCBR
                <img src="assets/img/white_logo.png" class="nav__img" alt="logo" />
            </a>

            <div class="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                            <i class="bx bx-home-alt-2"></i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#popular" class="nav__link">
                            <i class="bx bx-award"></i>
                            <span>Rooms</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#services" class="nav__link">
                            <i class="bx bx-award"></i>
                            <span>Services</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class="bx bx-phone"></i>
                            <span>Contact</span>
                        </a>
                    </li>

                </ul>
            </div>

            <!-- Theme change button -->
            <i class="bx bx-moon change-theme" id="theme-button"></i>

            <?php if (isset($_SESSION['user'])&&!isset($_SESSION['user']["type"])) { ?>  
                <a href="tenant" class="button nav__button"><?php echo $_SESSION['user']['fullname'] ?>! </a>
            <?php  }else{ ?>
                <a href="login.php" class="button nav__button"> Login </a>
            <?php  } ?>
            
            <style>.nav__button{display: block; padding: 10px 20px;}</style>
        </nav>
    </header>
    <!--==================== END OF HEADER ====================-->