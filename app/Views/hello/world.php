<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<!-- <h1>Hello, </h1> -->
<!-- <h4>
	<?php
	echo session()->get('fullname');
	?>
	<a href="<?= site_url('user/view/' . session()->get('id')) ?>" class="btn btn-primary">View</a>
</h4> -->
<header class="masthead text-center text-white d-flex" style="margin-top:-80px; background: url(&quot;<?= base_url(); ?>/assets/img/asdasd.jpg&quot;);filter: blur(0px);font-size: 11px;font-family: 'Open Sans', sans-serif;">
	<div class="container my-auto">
		<div class="row bounce animated">
			<div class="col-lg-10 mx-auto" style="padding: -1px;">
				<h1 class="text-uppercase"><strong style="font-size: 52px;">Fulfill your&nbsp;DAily needs<br></strong></h1>
				<hr style="width: 76px;height: -16px;margin-top: 18px;">
			</div>
		</div>
		<div class="col-lg-8 mx-auto">
			<p class="text-faded mb-5" style="color: rgb(255,255,255);font-size: 16px;letter-spacing: 0px;">Kebutuhan harian anda adalah hal yang penting untuk kesiapan<br>hari-hari anda, untuk itu kami hadir untuk menyiapkan segala<br>kebutuhan harian anda dengan mudah dan cepat.</p>
		</div>
	</div>
</header>
<section id="about" class="bg-primary">
	<div class="container">
		<div class="row">
			<div class="col offset-lg-8 mx-auto text-center" data-aos="fade-up">
				<h2 class="text-white section-heading">We've got what you need!</h2>
				<hr class="light my-4">
				<p class="text-faded mb-4">Di DailyGoods kamu bisa menemukan kebutuhan pokok harian yang telah kami sediakan, kamu bisa memilih bahan pokok apa saja yang di butuhkan, juga kamu bisa memilih bahan pokok apa saja yang telah kami rekomendasikan.</p><a class="btn btn-light btn-xl js-scroll-trigger" role="button" href="#services">Get Started!</a>
			</div>
		</div>
	</div>
</section>


<section id="services">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 data-aos="fade-up" class="section-heading">At Your Service</h2>
				<hr class="my-4">
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-3 text-center">
				<div class="mx-auto service-box mt-5"><i class="fa fa-diamond fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-once="true"></i>
					<h3 class="mb-3">Good Things</h3>
					<p class="text-muted mb-0">Because DailyGoods has a Good Things</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 text-center">
				<div class="mx-auto service-box mt-5"><i class="fa fa-paper-plane fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-delay="200" data-aos-once="true"></i>
					<h3 class="mb-3">Ready to Ship</h3>
					<p class="text-muted mb-0">kami siap antar ke tujuan anda</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 text-center">
				<div class="mx-auto service-box mt-5"><i class="fa fa-newspaper-o fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-delay="400" data-aos-once="true"></i>
					<h3 class="mb-3">Up to Date</h3>
					<p class="text-muted mb-0">Bahan baku yang fresh merupakan concern kami</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 text-center">
				<div class="mx-auto service-box mt-5"><i class="fa fa-heart fa-4x text-primary mb-3 sr-icons" data-aos="fade" data-aos-duration="200" data-aos-delay="600" data-aos-once="true"></i>
					<h3 class="mb-3">Made with Love</h3>
					<p class="text-muted mb-0">Dibuat dengan sepenuh hati</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="portfolio" class="p-0">
	<div class="container-fluid p-0">
		<div class="row no-gutters popup-gallery">
			<div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="<?= base_url(); ?>/assets/img/thumbnails/daging.jpg"><img class="img-fluid" src="<?= base_url(); ?>/assets/img/thumbnails/daging.jpg">
					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<div class="project-category text-faded"><span>Category</span></div>
							<div class="project-name"><span>Meat</span></div>
						</div>
					</div>
				</a></div>
			<div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="<?= base_url(); ?>/assets/img/thumbnails/gula.jpg"><img class="img-fluid" src="<?= base_url(); ?>/assets/img/thumbnails/gula.jpg">
					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<div class="project-category text-faded"><span>Category</span></div>
							<div class="project-name"><span>Sugar</span></div>
						</div>
					</div>
				</a></div>
			<div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="<?= base_url(); ?>/assets/img/thumbnails/beas.jpg"><img class="img-fluid" src="<?= base_url(); ?>/assets/img/thumbnails/beas.jpg">
					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<div class="project-category text-faded"><span>Category</span></div>
							<div class="project-name"><span>Rice</span></div>
						</div>
					</div>
				</a></div>
			<div class="col-sm-6 col-lg-4">
				<a class="portfolio-box" href="<?= base_url(); ?>/assets/img/thumbnails/4.jpg">
					<img class="img-fluid" src="<?= base_url(); ?>/assets/img/thumbnails/4.jpg">
					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<div class="project-category text-faded"><span>Category</span></div>
							<div class="project-name"><span>Salt n Pepper/span></div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="<?= base_url(); ?>/assets/img/thumbnails/ttttt.jpg"><img class="img-fluid" src="<?= base_url(); ?>/assets/img/thumbnails/ttttt.jpg">
					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<div class="project-category text-faded"><span>Category</span></div>
							<div class="project-name"><span>Fruits n Vagetables</span></div>
						</div>
					</div>
				</a></div>
			<div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="<?= base_url(); ?>/assets/img/thumbnails/rrrrr.jpg"><img class="img-fluid" src="<?= base_url(); ?>/assets/img/thumbnails/rrrrr.jpg">
					<div class="portfolio-box-caption">
						<div class="portfolio-box-caption-content">
							<div class="project-category text-faded"><span>Category</span></div>
							<div class="project-name"><span>Chili n Seasoning</span></div>
						</div>
					</div>
				</a></div>
		</div>
	</div>
</section>




<section class="bg-dark text-white">
	<div class="container text-center">
		<h2 class="mb-4"><img data-aos="fade-up" data-aos-duration="800" src="<?= base_url(); ?>/assets/img/MECIN.png" style="width: 455px;" loading="lazy"></h2>
	</div>
</section>
<div class="map-clean" style="background: rgb(240,95,64);">
	<div class="container">
		<div class="intro">
			<h2 class="text-center" style="color: rgb(255,255,255);">Location </h2>
			<p class="text-center" style="color: rgba(255,255,255,0.7);">Anda ingin datang ketempat kami ?&nbsp;<br>Kami berada di Kota Bandung, Indonesia.</p>
		</div>
	</div><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDsCghXtfkpa4wn0LKgjdr4sa4HC_xw_M4&amp;q=Bandung%2C+Indonesia&amp;zoom=15" width="100%" height="450" style="height: 452px;margin: 0px;margin-bottom: -6px;"></iframe>
</div>
<section id="contact" style="background-color: white;">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mx-auto text-center">
				<h2 class="section-heading">Let's Get In Touch!</h2>
				<hr class="my-4">
				<p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible, or you can visit our Offical Store On Tokopedia!</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 ml-auto text-center"><i class="fa fa-phone fa-3x mb-3 sr-contact" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true"></i>
				<p>+6281312044347</p>
			</div>
			<div class="col-lg-4 ml-auto text-center"><a href="https://www.tokopedia.com/dailygoodsco-1"><img src="<?= base_url(); ?>/assets/img/tokopedia-logo.png" style="width: 49px;margin-bottom: 12px;" href="https://www.tokopedia.com/dailygoodsco-1"></a>
				<a href="https://www.tokopedia.com/dailygoodsco-1">
					<p>DailyGoodsCo</p>
				</a>
			</div>
			<div class="col-lg-4 mr-auto text-center"><i class="fa fa-envelope-o fa-3x mb-3 sr-contact" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="300" data-aos-once="true"></i>
				<p><a href="mailto:dailygoodsbro@gmail.com">dailygoodsbro@gmail.com</a></p>
			</div>
		</div>
	</div>
</section>

<script src="<?= base_url(); ?>/jquery-3.5.1.min.js"></script>
<script src="<?= base_url(); ?>/bootstrap-4.0.0/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/bs-init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/creative.js"></script>
<script src="<?= base_url(); ?>/assets/js/Loading-Page-Animation-Style.js"></script>
<?= $this->endSection() ?>