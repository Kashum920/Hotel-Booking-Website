<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--- title ----->
    <title>Marian Hotel - ABOUT</title>
    <!---- link file import ------>
    <?php require "inc/link.php"; ?>
    <!---- customer css file  ------>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body class="bg-light">
    
   <?php require "inc/header.php"; ?>

    <div class="my-5 px-4">
        <h2 class="fa-bold text-center h-font">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad illum aliquid magni placeat est. Temporibus vero odit nisi neque consectetur veniam aut <br> aliquid veritatis aspernatur non. Sed quas est dolores.
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, commodi? Tenetur voluptatibus molestiae iste, similique facere sed autem delectus enim ea nisi repudiandae ex nostrum beatae adipisci? Odio, sequi in.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/about/about.jpg" class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 px-4 mt-5">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark text-center box">
                    <img src="images/about/room-icon.png" width="70px" height="70px">
                    <h4 class="mt-3">100+ ROOMS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 px-4 mt-5">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark text-center box">
                    <img src="images/about/customers.png" width="70px" height="70px">
                    <h4 class="mt-3">200+ CUSTOMERS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 px-4 mt-5">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark text-center box">
                    <img src="images/about/reviews.png" width="70px" height="70px">
                    <h4 class="mt-3">150+ REVIEWS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 px-4 mt-5">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark text-center box">
                    <img src="images/about/staffs.png" width="70px" height="70px">
                    <h4 class="mt-3">300+ STAFFS</h4>
                </div>
            </div>
        </div>
    </div>

    <!---- management team ----->
    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

    <div class="container">
        <div class="swiper myTeam">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/team-1.webp" class="w-100" height="270px">
                    <h5 class="mt-2">William Danial</h5>
                </div>  
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/team-2.jpg" class="w-100" height="270px">
                    <h5 class="mt-2">William Danial</h5>
                </div>  
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/team-3.jpg" class="w-100" height="270px">
                    <h5 class="mt-2">William Danial</h5>
                </div>  
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/team-4.jpg" class="w-100" height="270px">
                    <h5 class="mt-2">William Danial</h5>
                </div>  
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/team-5.jpg" class="w-100" height="270px">
                    <h5 class="mt-2">William Danial</h5>
                </div>  
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/team-6.jpg" class="w-100" height="270px">
                    <h5 class="mt-2">William Danial</h5>
                </div>  
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/team-7.jpg" class="w-100" height="270px">
                    <h5 class="mt-2">William Danial</h5>
                </div>              
            </div>
        </div>
    </div>

    <!---- Footer ----->
    <?php require "inc/footer.php"; ?>

    <!--- bootstrap js cdn ----->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!---- customer js ------>
    <script src="js/script.js"></script>
</body>
</html>