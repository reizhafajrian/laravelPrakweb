
@extends('layout/template')
@section('title')
Tentang Kami
@endsection
@section('css')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans">
<link rel="stylesheet" href="/styles/tentangkami/tentangkami.css">
@endsection
@section('content')
	<section class="onboarding_tentang_kami">
		<div class="onboarding_container">
		<div class="background_image">
			<img src="image/tentangkamiAssets/background.png" alt="">
		</div>
		<div class="text_message">
			<h1>TiketIN</h1><br>
			<h2>TENTANG KAMI</h2>
		</div>
		<div class="image_icon">
			<img src="image/tentangkamiAssets/undraw_tentangkami.png" alt="">
		</div>
		</div>
	</section>
	<section class="inti">
		<div class="onboarding-menu">
		<div class="inti_image">
			<img src="image/tentangkamiAssets/background2.png" alt="">
		</div>
		<div class="text_inti">
			<h1>TiketIN</h1> <br> <br>
			<p><b>TicketIN</b> adalah tempat pembelian tiket event event yang terdapat di Jabodetabek. 
			Kami menyediakan tiket event event menarik mulai dari webinar, workshop, konser dan sebagainya yang akan menghibur dan mengedukasi anda.<br> <br> <br> <br>
			<b>Navigasi yang simple dan intuitif</b> Sistem navigasi yang terdapat pada TicketIN memastikan anda melakukan pemesanan tiket dengan cepat dan mudah.<br> <br> <br> <br>
			<b>Metode Pembayaran</b> yang tersedia yaitu :
			<br>Bank Transfer
			<br>Kartu Kredit</p>
		</div>
		</div>
	</section>
	<section class="sosmed">
		<div class="sosmed-container">
		<div class="sosmed_image">
			<a href=""><img src="image/tentangkamiAssets/instagram.svg" alt=""></a>
			<a href=""><img src="image/tentangkamiAssets/twitter.svg" alt=""></a>
			<a href=""><img src="image/tentangkamiAssets/facebook.svg" alt=""></a>
			<a href=""><img src="image/tentangkamiAssets/telephone.svg" alt=""></a>
			<a href=""><img src="image/tentangkamiAssets/email.svg" alt=""></a>
		</div>
		</div>
	</section>
	<script type="module" src="/js/tentangkami/tentangkami.js"></script>
@endsection