<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--- title ----->
    <title>Marian Hotel - HOME</title>
    <!---- link file import ------>
    <?php require "inc/link.php"; ?>
    <!---- customer css file  ------>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body class="bg-light">
    
   <?php require "inc/header.php"; ?>

    <!-- Carousel Start -->
    <div class="container-fluid carousel px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <img src="images/carousel/carousel-01.jpg" class="w-100 d-block">
                    <div class="content">
                        <h2>TOP HOTEL IN THE CITY</h2>
                        <h4>Hotel & Resourt</h4>
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/carousel/carousel-02.jpg" class="w-100 d-block">
                    <div class="content">
                        <h2>TOP HOTEL IN THE CITY</h2>
                        <h4>Hotel & Resourt</h4>
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/carousel/carousel-03.jpg" class="w-100 d-block">
                    <div class="content">
                        <h2>TOP HOTEL IN THE CITY</h2>
                        <h4>Hotel & Resourt</h4>
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/carousel/carousel-04.jpg" class="w-100 d-block">
                    <div class="content">
                        <h2>TOP HOTEL IN THE CITY</h2>
                        <h4>Hotel & Resourt</h4>
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/carousel/carousel-05.jpg" class="w-100 d-block">
                    <div class="content">
                        <h2>TOP HOTEL IN THE CITY</h2>
                        <h4>Hotel & Resourt</h4>
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/carousel/carousel-06.jpg" class="w-100 d-block">
                    <div class="content">
                        <h2>TOP HOTEL IN THE CITY</h2>
                        <h4>Hotel & Resourt</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Check Availability Form -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5>Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label">Check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label">Check-out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label">Adults</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label">Children</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                           <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>                 
                </form>
            </div>
        </div>
    </div>

    <!-- Our Rooms -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/r-1.jpg" class="card-img-top" style="height: 14rem;">
                    <div class="card-body">
                        <h5>Classic Double Bed</h5>
                        <h6 class="mb-4">$250 per night</h6>
                        <div class="features mb-3">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
                        </div>
                        <div class="features mb-3">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room heater
                            </span>
                        </div>
                        <div class="rating mb-3">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                               <i class="bi bi-star-fill text-warning"></i>
                               <i class="bi bi-star-fill text-warning"></i>
                               <i class="bi bi-star-fill text-warning"></i>
                               <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/r-2.jpg" class="card-img-top" style="height: 14rem;">
                    <div class="card-body">
                        <h5>Classic Double Bed</h5>
                        <h6 class="mb-4">$250 per night</h6>
                        <div class="features mb-3">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
                        </div>
                        <div class="features mb-3">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room heater
                            </span>
                        </div>
                        <div class="rating mb-3">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                               <i class="bi bi-star-fill text-warning"></i>
                               <i class="bi bi-star-fill text-warning"></i>
                               <i class="bi bi-star-fill text-warning"></i>
                               <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/r-3.jpg" class="card-img-top" style="height: 14rem;">
                    <div class="card-body">
                        <h5>Classic Double Bed</h5>
                        <h6 class="mb-4">$250 per night</h6>
                        <div class="features mb-3">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
                        </div>
                        <div class="features mb-3">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room heater
                            </span>
                        </div>
                        <div class="rating mb-3">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                               <i class="bi bi-star-fill text-warning"></i>
                               <i class="bi bi-star-fill text-warning"></i>
                               <i class="bi bi-star-fill text-warning"></i>
                               <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/r-4.jpg" class="card-img-top" style="height: 14rem;">
                    <div class="card-body">
                        <h5>Classic Double Bed</h5>
                        <h6 class="mb-4">$250 per night</h6>
                        <div class="features mb-3">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
                        </div>
                        <div class="features mb-3">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room heater
                            </span>
                        </div>
                        <div class="rating mb-3">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                               <i class="bi bi-star-fill text-warning"></i>
                               <i class="bi bi-star-fill text-warning"></i>
                               <i class="bi bi-star-fill text-warning"></i>
                               <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/r-5.jpg" class="card-img-top" style="height: 14rem;">
                    <div class="card-body">
                        <h5>Classic Double Bed</h5>
                        <h6 class="mb-4">$250 per night</h6>
                        <div class="features mb-3">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
                        </div>
                        <div class="features mb-3">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room heater
                            </span>
                        </div>
                        <div class="rating mb-3">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                               <i class="bi bi-star-fill text-warning"></i>
                               <i class="bi bi-star-fill text-warning"></i>
                               <i class="bi bi-star-fill text-warning"></i>
                               <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/r-6.jpg" class="card-img-top" style="height: 14rem;">
                    <div class="card-body">
                        <h5>Classic Double Bed</h5>
                        <h6 class="mb-4">$250 per night</h6>
                        <div class="features mb-3">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
                        </div>
                        <div class="features mb-3">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room heater
                            </span>
                        </div>
                        <div class="rating mb-3">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                               <i class="bi bi-star-fill text-warning"></i>
                               <i class="bi bi-star-fill text-warning"></i>
                               <i class="bi bi-star-fill text-warning"></i>
                               <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
            </div>
        </div>
    </div>

    <!---- Our Facilities ---->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow my-3 py-4">
                <img src="images/features/wifi.png" width="80px" height="80px">
                <h6 class="mt-3">Wifi</h6>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow my-3 py-4">
                <img src="images/features/star.png" width="80px" height="80px">
                <h6 class="mt-3">Star</h6>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow my-3 py-4">
                <img src="images/features/clean.png" width="80px" height="80px">
                <h6 class="mt-3">Clean</h6>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow my-3 py-4">
                <img src="images/features/internet.png" width="80px" height="80px">
                <h6 class="mt-3">Internet</h6>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow my-3 py-4">
                <img src="images/features/bed.png" width="80px" height="80px">
                <h6 class="mt-3">Bed</h6>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
            </div>
        </div>
    </div>

    <!---- Testimonials ----->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

    <div class="container testimonials mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-white p-4" style="height:17rem;">
                    <div class="profile d-flex align-items-center m-3">
                        <img src="images/testimonials/t-1.png" width="100px" height="80px">
                        <h6>Danial James</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat aut, fugit illo perferendis laboriosam accusantium atque!</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>     
                <div class="swiper-slide bg-white p-4" style="height:17rem;">
                    <div class="profile d-flex align-items-center m-3">
                        <img src="images/testimonials/t-2.png" width="100px" height="80px">
                        <h6>Danial James</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat aut, fugit illo perferendis laboriosam accusantium atque!</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>      
                <div class="swiper-slide bg-white p-4" style="height:17rem;">
                    <div class="profile d-flex align-items-center m-3">
                        <img src="images/testimonials/t-4.png" width="100px" height="80px">
                        <h6>Danial James</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat aut, fugit illo perferendis laboriosam accusantium atque!</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>              
            </div>
        </div>
        <div class="col-lg-12 text-center mt-5 mb-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
        </div>
    </div>

    <!---- Reach Us ----->
    <h2 class="mt-5 mb-5 text-center fw-bold h-font">REACH US</h2>

    <div class="container">
        <div class="row">
            <div class="mt-0 col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3633059.9712801008!2d92.0887287!3d27.2219713!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1711090677920!5m2!1sen!2slk"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-2">
                    <h5>Call us</h5>
                    <a href="tel: +91777234567" class="d-inline-block text-decoration-none text-dark mt-2"><i class="bi bi-telephone-fill"></i>+91777234567</a> <br>
                    <a href="tel: +91777234567" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+91777234567</a>
                </div>
                <div class="bg-white p-4 rounded mb-2">
                    <h5>Follow us</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-twitter me-1"></i>Twitter 
                        </span> <br>
                        <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-facebook me-1"></i>Facebook 
                        </span> <br>
                        <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-instagram me-1"></i>Instagram 
                        </span>
                    </a>
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