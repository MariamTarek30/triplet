<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <!--css link-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/portfolio.css">




    <title>Triple T</title>
</head>
<body>
    <!--header section starts-->
    <?php include 'navbar.php'?>
    <!--<section class="navbar">
            <nav class="navbar-default nav-light bg-light">
                <div class="nav-content">
                <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.jpeg" alt="TripleT" width="70" height="60" style="border-radius:70px;">
            </a>
        </div>

                    <div class="nav-links">
                        <ul class="main-links-list">

                            <li><a href="#home" class="nav-link active"> Home </a></li>
                            <li><a href="#about" class="nav-link nav-hover">About</a></li>
                            <li><a href="#portfolio" class="nav-link nav-hover"> Portfolio </a></li>
                            <li><a href="#services" class="nav-link nav-hover">Services</a></li>
                            <li><a href="#contact" class="nav-link nav-hover">Contact</a></li>
                            <li><a href="login.html" class="nav-link nav-hover">Login</a></li>

                        </ul>
                        
                    </div>

                    <div class="toggler">
                        <img src="images/menu.png" />
                    </div>
                </div>
            </nav>
        </section>-->
    <!--header section ends-->
    <!--home section starts-->
    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h2 class="home-h2"></h2>
                </div>
                <div class="home-layer d-flex justify-content-center align-items-center ">
                    <div class="home-content">
                        <h1 class=" home-h1 "></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--home section ends-->
    <!--about section starts-->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>About</h2>
                <p><span> Who we are?</span></p>
            </div>

            <div class="row content" data-aos="fade-up">
                <div class="col-lg-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="fa-solid fa-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                        <li><i class="fa-solid fa-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                        <li><i class="fa-solid fa-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <a href="#services" class="btnn">Learn More</a>
                </div>
            </div>

        </div>
    </section>
    <!--about section ends-->
    <!-- Portofolio section starts-->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>Our <span>Portofolio</span></h2>
            </div>
            <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-eld">Elders</li>
                <li data-filter=".filter-bab">Babies</li>
                <li data-filter=".filter-alz">Alzheimers</li>
                <li data-filter=".filter-add">Addictions</li>
                <li data-filter=".filter-dis">Disabilities</li>
            </ul>
            <div class="row portfolio-container" data-aos="fade-up">

                <div class="col-lg-4 col-md-6 portfolio-item filter-add">
                    <div class="portfolio-img"><img src="images/addiction1.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Addiction</h4>
                        <a href="images/addiction1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Addiction 1"><i class="fa-solid fa-plus"></i></a>
                        <a href="addiction.html" class="details-link" title="More Details"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-alz">
                    <div class="portfolio-img"><img src="images/alzheimers1.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Alzheimers</h4>
                        <a href="images/alzheimers1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Alzheimer 1"><i class="fa-solid fa-plus"></i></a>
                        <a href="alzheimers.html" class="details-link" title="More Details"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-bab">
                    <div class="portfolio-img"><img src="images/babysitting1.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Babysitting</h4>
                        <a href="images/babysitting1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Babysitting 1"><i class="fa-solid fa-plus"></i></a>
                        <a href="babysitting.html" class="details-link" title="More Details"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-dis">
                    <div class="portfolio-img"><img src="images/disability1.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Disability</h4>
                        <a href="images/disability1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Disability 1"><i class="fa-solid fa-plus"></i></a>
                        <a href="disability.html" class="details-link" title="More Details"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-eld">
                    <div class="portfolio-img"><img src="images/elder1.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Elder</h4>
                        <a href="images/elder1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Elder 1"><i class="fa-solid fa-plus"></i></a>
                        <a href="elder.html" class="details-link" title="More Details"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-add">
                    <div class="portfolio-img"><img src="images/addiction2.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Addiction</h4>
                        <a href="images/addiction2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Addiction 2"><i class="fa-solid fa-plus"></i></a>
                        <a href="addiction.html" class="details-link" title="More Details"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-alz">
                    <div class="portfolio-img"><img src="images/alzheimers2.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Alzheimers</h4>
                        <a href="images/alzheimers2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Alzheimer 2"><i class="fa-solid fa-plus"></i></a>
                        <a href="alzheimers.html" class="details-link" title="More Details"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-bab">
                    <div class="portfolio-img"><img src="images/babysitting2.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Babysitting</h4>
                        <a href="images/babysitting2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Babysitting 2"><i class="fa-solid fa-plus"></i></a>
                        <a href="babysitting.html" class="details-link" title="More Details"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-dis">
                    <div class="portfolio-img"><img src="images/disability2.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Disability</h4>
                        <a href="images/disability2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Disability 2"><i class="fa-solid fa-plus"></i></a>
                        <a href="disability.html" class="details-link" title="More Details"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-eld">
                    <div class="portfolio-img"><img src="images/elder2.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Elder Care</h4>
                        <a href="images/elder2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Elder 2"><i class="fa-solid fa-plus"></i></a>
                        <a href="elder.html" class="details-link" title="More Details"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Portofolio section ends-->
    <!--services section starts-->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>Our <span>Services</span></h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box" data-aos="zoom-in-left">
                        <img src="images/babysitting2.jpg" alt="" class="image">
                        <h4 class="title"><a href="babysitting.html">Babysitting</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident<br> <a href="#">Learn More</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                    <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
                        <img src="images/elder3.jpg" alt="" class="image">
                        <h4 class="title"><a href="elder.html">Elder People</a></h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata<br> <a href="#">Learn More</a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
                    <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
                        <img src="images/disability2.jpg" alt="" class="image">
                        <h4 class="title"><a href="disability.html">Disabilities</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur <br> <a href="#">Learn More</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
                        <img src="images/alzheimers1.jpg" alt="" class="image">
                        <h4 class="title"><a href="elder.html">Alzheimer</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br> <a href="#">Learn More</a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
                        <img src="images/addiction3.jpg" alt="" class="image">
                        <h4 class="title"><a href="addiction.html">Addictions</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque<br> <a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--services section ends-->
    <hr>
    <!--testimonials starts-->
    <section id="testimonials" class="testimonials">
        <div class="container">
  
          <div class="section-title" data-aos="zoom-out">
            <h2>What they are saying about us</h2>
          </div>
  
          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="images/rev1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="images/rev2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="images/rev4.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="images/rev5.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="images/v3.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                </div>
              </div><!-- End testimonial item -->
  
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
      </section><!-- End Testimonials Section -->
    <hr>
    <!--Contact section starts-->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>Contact us</h2>
            </div>

            <div class="row mt-5">

                <div class="col-lg-4" data-aos="fade-right">
                    <div class="info">
                        <div class="address">
                            <i class="fa-solid fa-location-dot"></i>
                            <h4>Location:</h4>
                            <p>Cairo, Egypt</p>
                        </div>

                        <div class="email">
                            <i class="fa-solid fa-envelope-circle-check"></i>
                            <h4>Email:</h4>
                            <p>triplet22@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="fa-solid fa-phone"></i>
                            <h4>Call:</h4>
                            <p>+201020304050</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section>
    <!--Contact section ends-->
    <!--footer section starts-->
    <footer id="footer">
        <div class="container">
            <h3>Try To Trust</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="linkedin"><i class="fa-brands fa-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Triple T</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer>
    <!--footer section ends-->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>













<script>

            /* Navbar toggler */

var toggler = document.querySelector('.toggler')
var navlinks = document.querySelector('.nav-links')

toggler.addEventListener('click', function () {
    navlinks.classList.toggle('circle-toggle')
})

/* Navbar-Scroll Behavior */

var navbarDefault = document.querySelector('.navbar-default')

window.addEventListener('scroll', function () {
    navbarDefault.classList.toggle('navbar-default', window.scrollY <= 50)
    navbarDefault.classList.toggle('navbar-scroll', window.scrollY > 50) 

})
            </script>

    <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
    <!--js file link-->
    <script src="assets/js/main.js"></script>
    <!--Popper Cdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.4/umd/popper.min.js"></script>
    <!--Bootstrap Cdn-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>