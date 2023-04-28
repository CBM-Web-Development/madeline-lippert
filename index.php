<?php 
	
	$page = 'template';

	$pageTitle = 'Hi! I&#39;m Madeline. I am a graphic designer, web desinger, and an illustrator.';

	$pageDesc = 'I have a lot of expierence in several different fields, not because I lack focus.  I love learning new things, and I love helping others do the same. Let me show you what I mean...';

	$pageKeyword = 'hire a designer, i need a website, graphic designer 28205, charlotte graphic designer, charlotte designer, charlotte nc graphic design, i need a logo, graphic designer charlotte nc';

	include('inc/headcode.html'); 

?>
<div class="row">
	<div class="col mx-auto d-flex justify-content-center flex-lg-row flex-column align-items-center main-body">
		<img class="headshot" src="img/headshot2.jpeg">
		<div class="d-flex flex-column justify-content-center align-items-center callout-section">
			<p>graphic design</p>
			<p>print media</p>
			<p>digital creative</p>
			<p>mobile design</p>
		</div>
	</div>
</div>
<div class="row grey-section">
	<div class="col-10 mx-auto">
		<div class="row" data-masonry='{"percentPosition": true }'>
			<a class="col-lg-6 mx-auto project" href="#" data-bs-target="#pedalAppModal" data-bs-toggle="modal" >
				<img class="home-project" src="img/pedal%20mockup.jpeg"/>
				<h4 class="overlay-text">Pedal</h4>
				<div class="mask"></div>
			</a>
			<a class="col-lg-6 mx-auto project" href="#"  data-bs-target="#theHammerModal" data-bs-toggle="modal">
				<img class="home-project" src="img/hammer%20mock.V1.jpg"/>
				<h4 class="overlay-text">hammer</h4>
				<div class="mask"></div>
			</a>
			<a class="col-lg-6 mx-auto project" href="#"  data-bs-target="#lllilllStitches" data-bs-toggle="modal">
				<img class="home-project" src="img/lllilll.logo.jpeg"/>
				<h4 class="overlay-text">lllilll Stitches</h4>
				<div class="mask"></div>
			</a>
			<a class="col-lg-6 mx-auto project" href="#"  data-bs-target="#gateCityModal" data-bs-toggle="modal">
				<img class="home-project" src="img/V2_1.png"/>
				<h4 class="overlay-text">Gate City Luxury Limo Service</h4>
				<div class="mask"></div>
			</a>
		</div>
		<div class="row">
			<div class="col mx-auto d-flex justify-content-center">
				<a role="button" class="btn btn-outline-secondary btn-lg text-center" href="graphic-design-portfolio.php">My Portfolio</a>
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-lg-8 col-12 mx-auto">
		
		<p class="text-center text-lg">I am a designer from Charlotte, NC.  I grew up loving illustration, and have turned that passion into a career. I have expierence in a number of design fields, including graphc design and web design.  <a href="graphic-design-portfolio.php">Let me show you some of my work so that you can learn more about how I solve problems with a balance of creativity and pragmatism.</a></p>
	</div>
</div>

				

			
<?php 
include('inc/modals.php');
include('inc/footcode.html'); 


