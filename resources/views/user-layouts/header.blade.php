<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
	<a href="/" class="logo d-flex align-items-center">
		<!-- Uncomment the line below if you also wish to use an image logo -->
		{{-- <img src="assets/img/logo.png" alt=""> --}}
		<img src="{{asset('assets/bkn/logobkn.jpeg')}}" alt=""/> 
	</a>
		{{-- <h1><a href="index.html"> </h1> --}}
	

	<nav id="navbar" class="navbar">
		<ul>
			<li><a href="/">Beranda</a></li>
			<li class="dropdown">
				<a href="#"
					><span>Profil</span>
					<i class="bi bi-chevron-down dropdown-indicator"></i
				></a>
				<ul>
					<li><a href="#">Kedudukan Tugas dan Fungsi</a></li>
					<li><a href="/visi">Visi Misi</a></li>
					<li><a href="#">Pegawai kantor</a></li>
					<li><a href="/profile">Sejarah Kantor</a></li>
					<li class="dropdown">
						<a href="#"
							><span>Struktur Organisasi</span>
							<i class="bi bi-chevron-down dropdown-indicator"></i
						></a>
						<ul>
							<li><a href="#">Kanreg XIV</a></li>
							<li><a href="#">Bidang Informasi Kepegawaian</a></li>
							<li><a href="#">Deep Drop Down 3</a></li>
							<li><a href="#">Deep Drop Down 4</a></li>
							<li><a href="#">Deep Drop Down 5</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#"
					><span>Publikasi</span>
					<i class="bi bi-chevron-down dropdown-indicator"></i
				></a>
				<ul>
					<li><a href="jdih.bkn.go.id">Peraturan</a></li>
					<li><a href="#">Galeri Kegiatan</a></li>
					<li><a href="#">Maklumat Pelayanan</a></li>
					<li><a href="#">Statistik</a></li>
					<li><a href="#">Berita Kepegawaian</a></li>
					<li><a href="#">Artikel Kepegawaian</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#"
					><span>Pelayanan</span>
					<i class="bi bi-chevron-down dropdown-indicator"></i
				></a>
				<ul>
					<li><a href="search-result.html">Standar Pelayanan Publik</a></li>
					<li><a href="#">Mutasi dan Status Kepegawaian</a></li>
					<li><a href="#">Pengangkatan dan Pensiun</a></li>
					<li><a href="#">Informasi Kepegawaian</a></li>
					<li><a href="#">Pengembangan dan Supervisi Kepegawaian</a></li>
					<li><a href="#">SSCASN(Sistem Seleksi CPNS Nasional)</a></li>
				</ul>
			</li>
			{{-- <li><a href="/services">Pelayanan</a></li> --}}
			<li><a href="/contact">Kontak</a></li>
		</ul>
	</nav>
	<!-- .navbar -->

	<div class="position-relative">
		{{-- <a href="https://www.facebook.com/kanreg14bknmanokwari" class="mx-2"><span class="bi-facebook"></span></a> --}}
		{{-- <a href="#" class="mx-2"><span class="bi-twitter"></span></a> --}}
		{{-- <a href="https://www.instagram.com/bknkanreg14/?hl=id" class="mx-2"><span class="bi-instagram"></span></a> --}}

		<a href="/" class="mx-2 js-search-open logo">
			<img src="{{asset('assets/bkn/Logo_BerAKHLAK.png')}}" alt=""> <img src="{{asset('assets/bkn/berakhlak.png')}}" alt=""> 
		</a>
		{{-- <i class="bi bi-list mobile-nav-toggle"></i> --}}

		<!-- ======= Search Form ======= -->
		<div class="search-form-wrap js-search-form-wrap">
			<form action="search-result.html" class="search-form">
				<span class="icon bi-search"></span>
				<input type="text" placeholder="Search" class="form-control" />
				<button class="btn js-search-close">
					<span class="bi-x"></span>
				</button>
			</form>
		</div>
		<!-- End Search Form -->
	</div>
</div>