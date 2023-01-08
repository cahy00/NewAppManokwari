<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Kantor Regional XIV Manokwari</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    {{-- <link href="assets/img/favicon.png" rel="icon" /> --}}
		<link href="{{asset('bkn/icon-garuda.ico')}}" rel="icon">
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
				<div class="container" data-aos="fade-up">
					<div class="row g-5">
						<div class="col-lg-4">
							<div class="post-entry-1 lg">
								<a href="single-post.html"
									><img
										src="assets/img/post-landscape-1.jpg"
										alt=""
										class="img-fluid"
								/></a>
								<div class="post-meta">
									<span class="date">Culture</span>
									<span class="mx-1">&bullet;</span> <span>Jul 5th '22</span>
								</div>
								@foreach ($post as $p)
										
								<h2>
									<a href="single-post.html">{{$p->title}}</a>
								</h2>
								<p class="mb-4 d-block">
									{!! $p->excerpt !!}
								</p>
								@endforeach
				
								<div class="d-flex align-items-center author">
									<div class="photo">
										<img
											src="assets/img/person-1.jpg"
											alt=""
											class="img-fluid"
										/>
									</div>
									<div class="name">
										<h3 class="m-0 p-0">Cameron Williamson</h3>
									</div>
								</div>
							</div>
						</div>
				
						<div class="col-lg-8">
							<div class="row g-5">
								<div class="col-lg-4 border-start custom-border">
									<div class="post-entry-1">
										<a href="single-post.html"
											><img
												src="assets/img/post-landscape-2.jpg"
												alt=""
												class="img-fluid"
										/></a>
										<div class="post-meta">
											<span class="date">Sport</span>
											<span class="mx-1">&bullet;</span>
											<span>Jul 5th '22</span>
										</div>
										<h2>
											<a href="single-post.html"
												>Let’s Get Back to Work, New York</a
											>
										</h2>
									</div>
									<div class="post-entry-1">
										<a href="single-post.html"
											><img
												src="assets/img/post-landscape-5.jpg"
												alt=""
												class="img-fluid"
										/></a>
										<div class="post-meta">
											<span class="date">Food</span>
											<span class="mx-1">&bullet;</span>
											<span>Jul 17th '22</span>
										</div>
										<h2>
											<a href="single-post.html"
												>How to Avoid Distraction and Stay Focused During Video
												Calls?</a
											>
										</h2>
									</div>
									<div class="post-entry-1">
										<a href="single-post.html"
											><img
												src="assets/img/post-landscape-7.jpg"
												alt=""
												class="img-fluid"
										/></a>
										<div class="post-meta">
											<span class="date">Design</span>
											<span class="mx-1">&bullet;</span>
											<span>Mar 15th '22</span>
										</div>
										<h2>
											<a href="single-post.html"
												>Why Craigslist Tampa Is One of The Most Interesting
												Places On the Web?</a
											>
										</h2>
									</div>
								</div>
								<div class="col-lg-4 border-start custom-border">
									<div class="post-entry-1">
										<a href="single-post.html"
											><img
												src="assets/img/post-landscape-3.jpg"
												alt=""
												class="img-fluid"
										/></a>
										<div class="post-meta">
											<span class="date">Business</span>
											<span class="mx-1">&bullet;</span>
											<span>Jul 5th '22</span>
										</div>
										<h2>
											<a href="single-post.html"
												>6 Easy Steps To Create Your Own Cute Merch For
												Instagram</a
											>
										</h2>
									</div>
									<div class="post-entry-1">
										<a href="single-post.html"
											><img
												src="assets/img/post-landscape-6.jpg"
												alt=""
												class="img-fluid"
										/></a>
										<div class="post-meta">
											<span class="date">Tech</span>
											<span class="mx-1">&bullet;</span>
											<span>Mar 1st '22</span>
										</div>
										<h2>
											<a href="single-post.html"
												>10 Life-Changing Hacks Every Working Mom Should Know</a
											>
										</h2>
									</div>
									<div class="post-entry-1">
										<a href="single-post.html"
											><img
												src="assets/img/post-landscape-8.jpg"
												alt=""
												class="img-fluid"
										/></a>
										<div class="post-meta">
											<span class="date">Travel</span>
											<span class="mx-1">&bullet;</span>
											<span>Jul 5th '22</span>
										</div>
										<h2>
											<a href="single-post.html"
												>5 Great Startup Tips for Female Founders</a
											>
										</h2>
									</div>
								</div>
				
								<!-- Trending Section -->
								<div class="col-lg-4">
									<div class="trending">
										<h3>Trending</h3>
										<ul class="trending-post">
											<li>
												<a href="single-post.html">
													<span class="number">1</span>
													<h3>
														The Best Homemade Masks for Face (keep the Pimples
														Away)
													</h3>
													<span class="author">Jane Cooper</span>
												</a>
											</li>
											<li>
												<a href="single-post.html">
													<span class="number">2</span>
													<h3>
														17 Pictures of Medium Length Hair in Layers That
														Will Inspire Your New Haircut
													</h3>
													<span class="author">Wade Warren</span>
												</a>
											</li>
											<li>
												<a href="single-post.html">
													<span class="number">3</span>
													<h3>
														13 Amazing Poems from Shel Silverstein with Valuable
														Life Lessons
													</h3>
													<span class="author">Esther Howard</span>
												</a>
											</li>
											<li>
												<a href="single-post.html">
													<span class="number">4</span>
													<h3>
														9 Half-up/half-down Hairstyles for Long and Medium
														Hair
													</h3>
													<span class="author">Cameron Williamson</span>
												</a>
											</li>
											<li>
												<a href="single-post.html">
													<span class="number">5</span>
													<h3>
														Life Insurance And Pregnancy: A Working Mom’s Guide
													</h3>
													<span class="author">Jenny Wilson</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- End Trending Section -->
							</div>
						</div>
					</div>
					<!-- End .row -->
				</div>
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
