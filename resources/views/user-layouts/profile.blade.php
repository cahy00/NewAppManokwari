@extends('user-layouts.template')

@section('posts')
<section>
	<div class="container" data-aos="fade-up">
		<div class="row">
			<div class="col-lg-12 text-center mb-5">
				<h1 class="page-title">Profile Kantor</h1>
			</div>
		</div>

		<div class="row mb-5">

			<div class="d-md-flex post-entry-2 half">
				<a href="#" class="me-4 thumbnail">
					<img src="{{asset('assets/bkn/bknmkwlama.jpg')}}" alt="" class="img-fluid">
				</a>
				<div class="ps-md-5 mt-4 mt-md-0">
					<h4 class="mb-4 display-4">Company History</h4>
					<p style="text-align: justify">
						Berdirinya Kantor Regional XIV BKN Manokwari 
						dilatar belakangi oleh faktor geografis dimana jarak daerah-daerah tertentu 
						khususnya di Papua Barat dengan Kantor Regional IX BKN Jayapura terbilang jauh 
						dengan akses tranportasi yang minim. Hal ini tentu menjadi hambatan bagi instansi-
						instansi di daerah untuk mengurus hal-hal yang berkaitan dengan kepegawaian. Belum 
						lagi di Papua, untuk bepergian dari satu daerah ke daerah lain kebanyakan harus menggunakan 
						pesawat termasuk dari daerah-daerah di Papua Barat menuju Jayapura. Tentunya hal ini tidak efisien 
						terutama dalam hal anggaran dan juga tidak efisien dalam hal tenaga, waktu, dan resiko yang bisa timbul. 
						Oleh karena itu pada Tanggal 22 Januari 2014 Unit Percepatan Pembangunan Provinsi Papua dan Provinsi Papua 
						Barat (UP4B) bersurat kepada Menpan RB agar mendirikan satu Kantor Regional Badan Kepegawaian Negara di 
						Provinsi Papua Barat.
					</p>
				</div>
			</div>
			<div class="d-md-flex post-entry-2 half mt-5">
				<a href="#" class="me-4 thumbnail order-2">
					<img src="{{asset('assets/bkn/bkn_mkw.png')}}" alt="" class="img-fluid">
				</a>
				<div class="pe-md-5 mt-4 mt-md-0">
					<h2 class="mb-4 display-4">Mission &amp; Vision</h2>
					<p style="text-align: justify">
						Pada tanggal 28 April 2014 Menpan RB dalam suratnya Nomor : B/1575/M.PANRB/4/2014 
						menyetujui pembentukan dua Kantor Regional BKN yang baru 
						termasuk Kantor Regional Badan Kepegawaian Negara yang akan 
						didirikan di Provinsi Papua Barat. Surat Menpan RB tersebut ditindaklanjuti 
						secara teknis oleh internal Badan Kepegawaian Negara dengan bersurat kepada Gubernur 
						Papua Barat yang isinya antara lain agar Gubernur menunjuk satu daerah di Papua Barat yang 
						dirasa tepat sebagai tempat untuk mendirikan Kantor Regional BKN di Papua Barat. Usul tersebut 
						disambut baik oleh Gubernur dan menunjuk Kota Sorong Sebagai lokasi yang tepat untuk mendirikan 
						Kantor Regional BKN. Kemudian ada pertimbangan bahwa lokasi tersebut ternyata tidak mendukung 
						efiseinsi sehingga lokasi pendirian dipindahkan ke Manokwari yang merupakan 
						Ibu Kota Papua Barat.
					</p>
				</div>
			</div>

		</div>

	</div>
</section>

<section class="mb-5 bg-light py-5">
	<div class="container" data-aos="fade-up">
		<div class="row justify-content-between align-items-lg-center">
			<div class="col-lg-5 mb-4 mb-lg-0">
				<h2 class="display-4 mb-4">Latest News</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, rem eaque vel est asperiores iste pariatur placeat molestias, rerum provident ea maiores debitis eum earum esse quas architecto! Minima, voluptatum! Minus tempora distinctio quo sint est blanditiis voluptate eos. Commodi dolore nesciunt culpa adipisci nemo expedita suscipit autem dolorum rerum?</p>
				<p>At magni dolore ullam odio sapiente ipsam, numquam eius minus animi inventore alias quam fugit corrupti error iste laboriosam dolorum culpa doloremque eligendi repellat iusto vel impedit odit cum. Sequi atque molestias nesciunt rem eum pariatur quibusdam deleniti saepe eius maiores porro quam, praesentium ipsa deserunt laboriosam adipisci. Optio, animi!</p>
				<p><a href="#" class="more">View All Blog Posts</a></p>
			</div>
			<div class="col-lg-6">
				<div class="row">
					<div class="col-6">
						<img src="assets/img/post-portrait-3.jpg" alt="" class="img-fluid mb-4">
					</div>
					<div class="col-6 mt-4">
						<img src="assets/img/post-portrait-4.jpg" alt="" class="img-fluid mb-4">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection