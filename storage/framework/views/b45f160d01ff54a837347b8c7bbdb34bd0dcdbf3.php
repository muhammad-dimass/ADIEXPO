<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>AdiEXPO Event</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo e(asset('frontend/assets/img/favicon.png')); ?>" rel="icon">
  <link href="<?php echo e(asset('frontend/assets/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('frontend/assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('frontend/assets/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset('frontend/assets/css/style.css')); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.12.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="<?php echo e(asset('frontend/assets/img/logo.png')); ?>" alt="Logo AdiEXPO">
        <span style="color: #fff;">AdiEXPO</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#">Home</a></li>
          <li><a class="nav-link scrollto" href="#values">Bintang Tamu</a></li>
          <li><a class="nav-link scrollto" href="#jadwal">Jadwal</a></li>
          <li><a class="nav-link scrollto" href="#lokasi-event">Venue</a></li>
          <li><a class="nav-link scrollto" href="#clients">Sponsor</a></li>
          <li style="margin-right: 100px;"><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="getstarted scrollto" href="#">Beli Tiket Disini</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Adi EXPO 2023 Event,Perlombaan,dan Cosplayers!</h1>
          <h5 data-aos="fade-up" data-aos-delay="400">Yuk guys ! Mari join bersama kami di Adi EXPO Event pada tanggal 15-17 Maret 2023 !</h5>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#values" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?php echo e(asset('frontend/assets/img/hero-img.png')); ?>" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Guest Star</h2>
          <p>Bintang Tamu AdiEXPO 2023</p>
        </header>

        <div class="row">

        <div class="col-lg-4">
            <div class="card">
            <img src="<?php echo e(asset('frontend/assets/img/bintang_tamu/waseda.jpg')); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          </div>

          <div class="col-lg-4">
            <div class="card">
            <img src="<?php echo e(asset('frontend/assets/img/bintang_tamu/newjeans.jpg')); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          </div>
                
          <div class="col-lg-4">
            <div class="card">
            <img src="<?php echo e(asset('frontend/assets/img/bintang_tamu/liucoser.jpg')); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          </div>

          <div class="button-view text-center">
            <button type="button" class="btn-red">Lihat Selengkapnya</button>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->

        <!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>OUR MC</h2>
          <p>Master Of Ceremony</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="<?php echo e(asset('frontend/assets/img/team/team-1.jpg')); ?>" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="<?php echo e(asset('frontend/assets/img/team/team-2.jpg')); ?>" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="<?php echo e(asset('frontend/assets/img/team/team-3.jpg')); ?>" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="<?php echo e(asset('frontend/assets/img/team/team-4.jpg')); ?>" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Team Section -->

    <!-- Jadwal Event Section -->
    <section id="jadwal" class="jadwal counts">
        <div class="container">
          <header class="section-header">
          <h2>Event Schedule</h2>
          <p>Kegiatan Acara</p>
        </header>

        <div class="row gy-4">
        <div class="col-lg-6 col-md-6">
            <div class="count-box" data-aos="fade-up">
            <i class="bi bi-controller"></i>              
            <div> 
                <h4>Turnamen Cerdas Cermat</h4>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="count-box" data-aos="fade-up">
            <i class="bi bi-controller"></i>              
            <div> 
                <h4>Turnamen Futsal</h4>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="count-box" data-aos="fade-up">
            <i class="bi bi-controller"></i>              
            <div> 
                <h4>Turnamen Mobile Legends</h4>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="count-box" data-aos="fade-up">
            <i class="bi bi-controller"></i>              
            <div> 
                <h4>Turnamen Mobile Legends</h4>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
              </div>
            </div>
          </div>       
        </div>

        </div>
    </section>
    
<!-- ======= Lokasi Event Section ======= -->
    <section id="lokasi-event"class="lokasi-event">
      <div class="container">

        <header class="section-header">
          <h2>EVENT LOCATION</h2>
          <p>Lokasi Acara</p>
        </header>

      <div class="row">
        <div class="col-lg-8 col-md-6 mb-3" data-aos="fade-up">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.7483739638287!2d106.72661811384364!3d-6.553418465885071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c4acdb7c8f87%3A0x896b8d47807a8489!2sSMK%20Adi%20Sanggoro!5e0!3m2!1sid!2sid!4v1676375829473!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up">
          <div class="card">
          <div class="card-body">
            <h3 class="card-title">SMK Adi Sanggoro</h3>
            <p class="card-text">Lembaga Pendidikan Menengah Kejuruan yang bertekad untuk turut serta berkontribusi membangun negeri dalam mencerdaskan kehidupan bangsa dan berakhlakul karimah.</p>
          </div>
        </div>
        </div>
      </div>
      </div>
    </section>


    <!-- ======= Sponsor Section ======= -->
    <section id="clients" class="clients">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Sponsor</h2>
          <p>Sponsor Kami</p>
        </header>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="<?php echo e(asset('assets/img/clients/client-1.png')); ?>" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo e(asset('assets/img/clients/client-2.png')); ?>" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo e(asset('assets/img/clients/client-3.png')); ?>" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo e(asset('assets/img/clients/client-4.png')); ?>" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo e(asset('assets/img/clients/client-5.png')); ?>" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo e(asset('assets/img/clients/client-6.png')); ?>" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo e(asset('assets/img/clients/client-7.png')); ?>" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo e(asset('assets/img/clients/client-8.png')); ?>" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section><!-- End Clients Section -->
    
    <!-- ======= Biaya Pendapftaran Section ======= -->
    <section id="biaya-pendaftaran" class="biaya-pendaftaran">
      <div class="container">

        <header class="section-header">
          <h2>Our Sponsor</h2>
          <p>Biaya Pendaftaran</p>
        </header>
        
        <div class="row">
          
          <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="card text-center">
            <div class="card-body">
              <h3 class="card-title">Kompetisi Coswalk</h3>
              <p class="card-text">IDR 25.000,00</p>
              <button class="btn-view">Beli Disini !</button>
            </div>
          </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="card text-center">
            <div class="card-body">
              <h3 class="card-title">Card title</h3>
              <p class="card-text">IDR 25.000,00</p>
              <button class="btn-view">Beli Disini !</button>
            </div>
          </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="card text-center">
            <div class="card-body">
              <h3 class="card-title">Card title</h3>
              <p class="card-text">IDR 25.000,00</p>
              <button class="btn-view">Beli Disini !</button>
            </div>
          </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-12 text-center">

            <div class="row gy-4">
              <div class="col-md-4">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>A108 Adam Street,<br>New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="<?php echo e(asset('frontend/assets/img/logo.png')); ?>" alt="">
              <span>AdiEXPO</span>
            </a>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Tentang</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Jadwal</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Lokasi Acara</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Sponsor</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Kontak Kami</a></li>
            </ul>
          </div>

          <div class="col-lg-5 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
             <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>AdiEXPO</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js')); ?>"></script>
  <script src="<?php echo e(asset('frontend/assets/vendor/aos/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('frontend/assets/vendor/php-email-form/validate.js')); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('frontend/assets/js/main.js')); ?>"></script>

</body>

</html>




<?php /**PATH /home/mappple/Documents/adi-expo/resources/views/welcome.blade.php ENDPATH**/ ?>