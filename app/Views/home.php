<?= $this->extend('header') ?>

<?= $this->extend('navigation') ?>

<?= $this->extend('banner') ?>

<?= $this->section('content') ?>

<?= $this->section('portfolio') ?>
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
<?= $this->endSection() ?>

<?= $this->section('service') ?>
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
<?= $this->endSection() ?>

<?= $this->extend('footer') ?>