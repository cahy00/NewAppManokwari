@extends('user-layouts.template')

@section('posts')
<section id="contact" class="contact mb-5">
	<div class="container" data-aos="fade-up">

		<div class="row">
			<div class="col-lg-12 text-center mb-5">
				<h1 class="page-title">Contact us</h1>
			</div>
		</div>

		<div class="row lg-4">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8396.576215860381!2d134.02151631207167!3d-0.9217321357651928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d53f40feef5a5a9%3A0x3a4bc53ee8d7f9de!2sKantor%20Regional%20XIV%20BKN%20Manokwari!5e0!3m2!1sid!2sid!4v1673407608611!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<br>
		<div class="row gy-4">
			<div class="col-md-4">
				<div class="info-item">
					<i class="bi bi-geo-alt"></i>
					<h3>Address</h3>
					<address>Komplek Perkantoran Gubernur Papua Barat Jalan Abraham O. Aturury, Bukit Arfai Kabupaten Manokwari</address>
				</div>
			</div><!-- End Info Item -->

			<div class="col-md-4">
				<div class="info-item info-item-borders">
					<i class="bi bi-phone"></i>
					<h3>Phone Number</h3>
					<p><a href="tel:+155895548855">(+62)986-2211-275</a></p>
				</div>
			</div><!-- End Info Item -->

			<div class="col-md-4">
				<div class="info-item">
					<i class="bi bi-envelope"></i>
					<h3>Email</h3>
					<p><a href="mailto:kanreg14bkn@gmail.com">kanreg14bkn@gmail.com</a></p>
				</div>
			</div><!-- End Info Item -->

		</div>

		<div class="form mt-5">
			<form action="forms/contact.php" method="post" role="form" class="php-email-form">
				<div class="row">
					<div class="form-group col-md-6">
						<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
					</div>
					<div class="form-group col-md-6">
						<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
					</div>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
				</div>
				<div class="form-group">
					<textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
				</div>
				<div class="my-3">
					<div class="loading">Loading</div>
					<div class="error-message"></div>
					<div class="sent-message">Your message has been sent. Thank you!</div>
				</div>
				<div class="text-center"><button type="submit">Send Message</button></div>
			</form>
		</div><!-- End Contact Form -->

	</div>
</section>
@endsection