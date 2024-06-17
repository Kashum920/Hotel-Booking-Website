<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--- title ----->
    <title>Marian Hotel - CONTACT</title>
    <!---- link file import ------>
    <?php require "inc/link.php"; ?>
    <!---- customer css file  ------>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body class="bg-light">
    
   <?php require "inc/header.php"; ?>

    <div class="my-5 px-4">
        <h2 class="fa-bold text-center h-font">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad illum aliquid magni placeat est. Temporibus vero odit nisi neque consectetur veniam aut <br> aliquid veritatis aspernatur non. Sed quas est dolores.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3633059.9712801008!2d92.0887287!3d27.2219713!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1711090677920!5m2!1sen!2slk"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/vFWqdBcbagzjLrKp7" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                    <i class="bi bi-geo-alt-fill"></i> XYZ, Prayagaraj, Uttar Pradesh
                    </a>
                    <h5 class="mt-4">Call us</h5>
                    <a href="tel: +9177456789" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> +91777456789
                    </a>
                    <br>
                    <a href="tel: +9177456789" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> +91777456789
                    </a>
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: info@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-envelope-fill"></i> info@gmail.com
                    </a>
                    <h5 class="mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                    <i class="bi bi-twitter me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                    <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                    <i class="bi bi-instagram me-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form>
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label for="form-label" style="font-weight:500;">
                                Name
                            </label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label for="form-label" style="font-weight:500;">
                                Email 
                            </label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label for="form-label" style="font-weight:500;">
                                Subject
                            </label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label for="form-label" style="font-weight:500;">
                                Message
                            </label> <br>
                            <textarea class="form-control shadow-none" rows="5" style="resize:none;"></textarea>
                        </div>

                        <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
                    </form>
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