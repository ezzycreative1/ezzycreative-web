
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Thomson-Minimal Portfolio Temaplate</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
  <link rel="stylesheet" href="plugins/counto/animate.css">
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="plugins/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
  <link rel="stylesheet" href="plugins/animated-text/animated-text.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
  
<!-- Header Start --> 

<nav class="navbar navbar-expand-lg  main-nav " id="navbar">
	<div class="container">
	  <a class="navbar-brand" href="index.html">
	  	<img src="images/logo.png" alt="" class="img-fluid">
	  </a>

	  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
		<span class="ti-align-justify"></span>
	  </button>
  
		  <div class="collapse navbar-collapse" id="navbarsExample09">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item  active"><a class="nav-link" href="index.html">Home</a></li>

			  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
					<ul class="dropdown-menu" aria-labelledby="dropdown01">
						<li><a class="dropdown-item" href="about.html">About Me</a></li>
						<li><a class="dropdown-item" href="about-us.html">About Us</a></li>
					</ul>
			  </li>

			  <li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portfolio</a>
					<ul class="dropdown-menu" aria-labelledby="dropdown02">
						<li><a class="dropdown-item" href="portfolio-1.html">Portfolio Masonary</a></li>
						<li><a class="dropdown-item" href="portfolio-2.html">Portfolio lightbox</a></li>
						<li><a class="dropdown-item" href="portfolio-3.html">Portfolio 2 column</a></li>
						<li><a class="dropdown-item" href="portfolio-single.html">Portfolio Details</a></li>
					</ul>
			  </li>
			   <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
					<ul class="dropdown-menu" aria-labelledby="dropdown05">
						<li><a class="dropdown-item" href="blog-grid.html">Blog Grid</a></li>
						<li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>

						<li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
					</ul>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
			</ul>
		</div>
	</div>
</nav>

<!-- Header Close --> 



<section class="section banner pb-0">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<h2>I provide <span class="text-color">Design Solutions.</span> <br>My work is presented here, check them below.</h2>
			</div>
		</div>
	</div>
</section>

<section class=" portfolio ">
	<div class="container">
		<div class="row mb-5 justify-content-center">
	      	<div class="col-10 text-center">
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
	      <div class="col-lg-6 col-6 mb-4 shuffle-item"  data-groups="[&quot;design&quot;,&quot;illustration&quot;]">
		      	<div class="position-relative inner-box">
		          <div class="image position-relative ">
	               <img src="images/portfolio/1.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
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

	      <div class="col-lg-6 col-6 mb-4 shuffle-item" data-groups="[&quot;branding&quot;]">
	        <div class="position-relative inner-box" >
	            <div class="image position-relative ">
	               <img src="images/portfolio/4.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
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

	      <div class="col-lg-46 col-6 mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
	        <div class="position-relative inner-box">
	            <div class="image position-relative ">
	               <img src="images/portfolio/3.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
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

	      <div class="col-lg-6 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;branding&quot;]">
	        <div class="position-relative inner-box">
	            <div class="image position-relative ">
	               <img src="images/portfolio/5.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
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

	      <div class="col-lg-6 col-6 mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
	        <div class="position-relative inner-box">
	            <div class="image position-relative ">
	               <img src="images/portfolio/7.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
	                <div class="overlay-box">
	                  <div class="overlay-inner">
	                    <a class="overlay-content" href="portfolio-single.html">
	                       <h5 class="mb-0">Modern web</h5>
	                      	<p>Seo</p>
	                    </a>
	                  </div>
	                </div> 
	            </div>
	        </div>
	      </div>

	      <div class="col-lg-6 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;photo&quot;]">
	        <div class="position-relative inner-box">
	            <div class="image position-relative ">
	               <img src="images/portfolio/6.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
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
<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/aos/aos.js"></script>
<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="plugins/shuffle/shuffle.min.js"></script>
<script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="plugins/animated-text/animated-text.js"></script>
<script src="plugins/counto/apear.js"></script>
<script src="plugins/counto/counTo.js"></script>

 <!-- Google Map -->
<script src="plugins/google-map/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script> 
<!-- Main Script -->
<script src="js/script.js"></script>

</html>