
<!DOCTYPE html>
<html lang="zxx">

<head>
    <?= $this->extend('header') ?>
</head>

<body>
<!-- Navigation Start -->
<!-- Header Start --> 
<?= $this->extend('navigation') ?>
<!-- Header Close --> 
<!-- Navigation ENd -->

<!-- Banner Start -->
<?= $this->extend('banner') ?>
<!-- Banner End -->

<!-- POrtfolio start -->
<section class="portfolio ">
	<div class="container">
		<div class="row mb-5">
	      	<div class="col-10">
		        <div class="btn-group btn-group-toggle " data-toggle="buttons">
		          <label class="btn active ">
		            <input type="radio" name="shuffle-filter" value="all" checked="checked" />All Projects
		          </label>
		          <label class="btn">
		            <input type="radio" name="shuffle-filter" value="design" />UI/UX Design
		          </label>
		          <label class="btn">
		            <input type="radio" name="shuffle-filter" value="branding" />branding
		          </label>
		          <label class="btn">
		            <input type="radio" name="shuffle-filter" value="illustration" />Web Development
		          </label>
		           <label class="btn">
		            <input type="radio" name="shuffle-filter" value="photo" />Photography
		          </label>
		        </div>
	      	</div>
    	</div>	

		<div class="row shuffle-wrapper portfolio-gallery">
	      <div class="col-lg-4 col-6 mb-4 shuffle-item"  data-groups="[&quot;design&quot;,&quot;illustration&quot;]">
		      	<div class="position-relative inner-box">
		          <div class="image position-relative ">
	               <img src="<?= base_url('images/portfolio/1.jpg') ?>" alt="portfolio-image" class="img-fluid w-100 d-block">
	                <div class="overlay-box">
	                  <div class="overlay-inner">
	                    <a class="overlay-content" href="portfolio-single.html">
	                      <h5 class="mb-0">Painting</h5>
	                      <p>Design</p>
	                    </a>
	                  </div>
	                </div> 
	            </div>
		      </div>
	      </div>

	      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;branding&quot;]">
	        <div class="position-relative inner-box" >
	            <div class="image position-relative ">
	               <img src="<?= base_url('public/images/portfolio/4.jpg') ?>" alt="portfolio-image" class="img-fluid w-100 d-block">
	                <div class="overlay-box">
	                  <div class="overlay-inner">
		                    <a class="overlay-content" href="portfolio-single.html">
		                      <h5 class="mb-0">Web app</h5>
		                      <p>Development</p>
		                    </a>
	                	</div> 
		            </div>
		        </div>
		      </div>
	      </div>

	      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
	        <div class="position-relative inner-box">
	            <div class="image position-relative ">
	               <img src="<?= base_url('images/portfolio/3.jpg') ?>" alt="portfolio-image" class="img-fluid w-100 d-block">
	                <div class="overlay-box">
	                  <div class="overlay-inner">
	                    <a class="overlay-content" href="portfolio-single.html">
	                      <h5 class="mb-0">Business </h5>
	                      <p>marketing</p>
	                    </a>
	                  </div>
	                </div> 
	            </div>
	        </div>
	      </div>

	      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;branding&quot;]">
	        <div class="position-relative inner-box">
	            <div class="image position-relative ">
	               <img src="<?= base_url('images/portfolio/5.jpg') ?>" alt="portfolio-image" class="img-fluid w-100 d-block">
	                <div class="overlay-box">
	                  <div class="overlay-inner">
	                    <a class="overlay-content" href="portfolio-single.html">
	                      <h5 class="mb-0">Portfolio</h5>
	                      <p>Design</p>
	                    </a>
	                  </div>
	                </div> 
	            </div>
	        </div>
	      </div>

	      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
	        <div class="position-relative inner-box">
	            <div class="image position-relative ">
	               <img src="<?= base_url('images/portfolio/6.jpg') ?>" alt="portfolio-image" class="img-fluid w-100 d-block">
	                <div class="overlay-box">
	                  <div class="overlay-inner">
	                    <a class="overlay-content" href="portfolio-single.html">
	                       <h5 class="mb-0 ">Modern web</h5>
	                      	<p>Seo</p>
	                    </a>
	                  </div>
	                </div> 
	            </div>
	        </div>
	      </div>

	      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;photo&quot;]">
	        <div class="position-relative inner-box">
	            <div class="image position-relative ">
	               <img src="<?= base_url('images/portfolio/7.jpg') ?>" alt="portfolio-image" class="img-fluid w-100 d-block">
	                <div class="overlay-box">
	                  <div class="overlay-inner">
	                    <a class="overlay-content" href="portfolio-single.html">
	                       <h5 class="mb-0">Agency web</h5>
	                      	<p>Design</p>
	                    </a>
	                  </div>
	                </div> 
	            </div>
	        </div>
	      </div>
	    </div>
	</div>
</section>
<!-- Portfolio End -->

<!-- Service start -->
<section class="section service-home border-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h2 class="mb-2 ">Core Services.</h2>
				<p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, totam ipsa quia hic odit a sit laboriosam voluptatem in, blanditiis.</p>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-4">
				<div class="service-item mb-5" data-aos="fade-left" >
					<i class="ti-layout"></i>
					<h4 class="my-3">Web Development</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, earum.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="service-item mb-5" data-aos="fade-left"  data-aos-delay="450">
					<i class="ti-announcement"></i>
					<h4 class="my-3">Digital Marketing</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, earum.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="service-item mb-5 mb-lg-0" data-aos="fade-left"  data-aos-delay="750">
					<i class="ti-layers"></i>
					<h4 class="my-3">Graphics Design</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, earum.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="service-item" data-aos="fade-left"  data-aos-delay="750">
					<i class="ti-anchor"></i>
					<h4 class="my-3">Branding Design</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, earum.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="service-item mb-5" data-aos="fade-left"  data-aos-delay="950">
					<i class="ti-video-camera"></i>
					<h4 class="my-3">Video Marketing</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, earum.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="service-item mb-5 mb-lg-0" data-aos="fade-left"  data-aos-delay="1050">
					<i class="ti-android"></i>
					<h4 class="my-3">App Design</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, earum.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- service end -->

<!-- Footer start -->
<section class="footer">
	<div class="container">
		<div class="row ">
			<div class="col-lg-6">
				<p class="mb-0">Copyrights © 2019. Designed & Developed by <a href="themefisher.com" class="text-white">Themefisher</a></p>
			</div>
			<div class="col-lg-6">
				<div class="widget footer-widget text-lg-right mt-5 mt-lg-0">
					<ul class="list-inline mb-0">
						<li class="list-inline-item"><a href="https://www.facebook.com/themefisher" target="_blank"><i class="ti-facebook mr-3"></i></a>
						</li>
						<li class="list-inline-item"><a href="https://twitter.com/themefisher" target="_blank"><i class="ti-twitter mr-3"></i></a>
						</li>
						<li class="list-inline-item"><a href="https://github.com/themefisher/" target="_blank"><i class="ti-github mr-3"></i></a></li>
						<li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/" target="_blank"><i class="ti-pinterest mr-3"></i></a></li>
						<li class="list-inline-item"><a href="https://dribbble.com/themefisher/" target="_blank"><i class="ti-dribbble mr-3"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Footer End -->

<!-- jQuery -->
<script src="<?= base_url('plugins/jQuery/jquery.min.js') ?>"></script>
<!-- Bootstrap JS -->
<script src="<?= base_url('plugins/bootstrap/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('plugins/aos/aos.js') ?>"></script>
<script src="<?= base_url('plugins/owl-carousel/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('plugins/shuffle/shuffle.min.js') ?>"></script>
<script src="<?= base_url('plugins/magnific-popup/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?= base_url('plugins/animated-text/animated-text.js') ?>"></script>
<script src="<?= base_url('plugins/counto/apear.js') ?>"></script>
<script src="<?= base_url('plugins/counto/counTo.js') ?>"></script>

 <!-- Google Map -->
<script src="<?= base_url('plugins/google-map/map.js') ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script> 
<!-- Main Script -->
<script src="<?= base_url('js/script.js') ?>"></script>

</html>