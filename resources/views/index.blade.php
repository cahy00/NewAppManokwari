<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>ZenBlog Bootstrap Template - Index</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />

    <!-- Template Main CSS Files -->
    <link href="assets/css/variables.css" rel="stylesheet" />
    <link href="assets/css/main.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: ZenBlog - v1.3.0
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
      @include('user-layouts.header')
    </header>
    <!-- End Header -->

    <main id="main">
      <!-- ======= Hero Slider Section ======= -->
      <section id="hero-slider" class="hero-slider">
        @include('user-layouts.hero')
      </section>
      <!-- End Hero Slider Section -->

      <!-- ======= Post Grid Section ======= -->
      <section id="posts" class="posts">
        @include('user-layouts.posts')
      </section>
      <!-- End Post Grid Section -->

      <!-- ======= Culture Category Section ======= -->
      {{-- <section class="category-section">
        @include('user-layouts.culture')
      </section> --}}
      <!-- End Culture Category Section -->

      <!-- ======= Business Category Section ======= -->
      {{-- <section class="category-section">
        @include('user-layouts.business')
      </section> --}}
      <!-- End Business Category Section -->

      <!-- ======= Lifestyle Category Section ======= -->
      {{-- <section class="category-section">
        @include('user-layouts.category-section')
      </section> --}}
      <!-- End Lifestyle Category Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      @include('user-layouts.footer')
    </footer>

    <a
      href="#"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
