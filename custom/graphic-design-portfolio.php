<?php 
	
$page = 'portfolio';

$pageTitle = 'Hi! I&#39;m Madeline. I am a graphic designer, web desinger, and an illustrator.';

$pageDesc = 'I have a lot of expierence in several different fields, not because I lack focus.  I love learning new things, and I love helping others do the same. Let me show you what I mean...';

$pageKeyword = 'hire a designer, i need a website, graphic designer 28205, charlotte graphic designer, charlotte designer, charlotte nc graphic design, i need a logo, graphic designer charlotte nc';

include('inc/headcode.html'); 
?>

<div class="container-fluid">
	<div class="row row-cols-1 row-cols-md-2 g-4 card-group">
		<div class="col">
			<div class="card h-100">
			  <img src="/img/pedal%20mockup.jpeg" class="card-img-top" alt="Pedal Mobile Applications">
			  <div class="card-body">
				<h5 class="card-title">Pedal App</h5>
				<i>Mobile Apps</i>
				<p class="card-text">The social media app for cyclists.</p>
			  </div>
			  <div class="card-footer">
				  <!-- Button trigger modal -->
				  <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#pedalAppModal">
					Learn More
				  </button>
			  </div>
			</div>
		</div>
		<div class="col">
			<div class="card h-100">
			  <img src="/img/hammer%20mock.v1.jpg" class="card-img-top" alt="The Hammer publication">
			  <div class="card-body">
				<h5 class="card-title">The Hammer</h5>
				<i>Publications</i>
				<p class="card-text">A literary and arts magazine for Central Piedmont Community College.</p>
			  </div>
			  <div class="card-footer">
				  
				  <!-- Button trigger modal -->
				  <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#theHammerModal">
					Learn More
				  </button>
			  </div>
			</div>
		</div>
		<div class="col">
			<div class="card h-100">
			  <img src="/img/V2_1.png" class="card-img-top" alt="Gate City Limousine">
			  <div class="card-body">
				<h5 class="card-title">Gate City Limousine</h5>
				<i>Branding</i>
				<p class="card-text">Luxury Limousine branding.</p>
			  </div>
			  <div class="card-footer">
				  <!-- Button trigger modal -->
				  <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#gateCityModal">
					Learn More
				  </button>
			  </div>
			</div>
		</div>
		<div class="col">
			<div class="card h-100">
			  <img src="/img/lllilll.logo.jpg" class="card-img-top" alt="lil stitches logo">
			  <div class="card-body">
				<h5 class="card-title">lllilll Stitches</h5>
				<p class="card-text">Creative adventures</p><!-- Button trigger modal -->
			  </div>
			  <div class="card-footer">
				  <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#lllilllStitches">
					Learn More
				  </button>
			  </div>
			</div>
		</div>
	</div>
</div>

<!-- Pedal Modal -->
<div class="modal fade" id="pedalAppModal" tabindex="-1" aria-labelledby="pedalAppModal" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<h1 class="modal-title fs-5" id="pedalModalLabel">Pedal App</h1>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	  </div>
	  <div class="modal-body">
		<div id="pedalCarousel" class="carousel slide" data-bs-ride="carousel">
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img src="/img/pedal%20mockup.jpeg" class="d-block w-100" alt="Pedal Mockup">
			</div>
			<div class="carousel-item">
			  <img src="/img/pedalmock2.jpeg" class="d-block w-100" alt="Pedal Mockup">
			</div>
			<div class="carousel-item">
			  <img src="/img/pedal-login.png" class="d-block w-100" alt="Pedal Login Screen">
			</div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#pedalCarousel" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#pedalCarousel" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		  </button>
		</div>
		<p>During the pandemic I was desperately trying to find something that would help me get out of my house, safely. I was desperate for some sunlight and exercise. I started biking around my neighborhood, and started falling in love with my city again. You see so much on a bicycle that you would never see from riding inside a car. And when riding in a car, you don’t look out for bicyclists. As my skill level grew while riding, I was putting myself in more and more dangerous situations. It became a daily occurrence almost being hit by a car, pedestrians yelling at me while using a sidewalk in a dicey stretch of road, and then pedestrians using the bike lane to walk their dogs. Inspiration struck, and I created “Pedal.” Pedal is an app for cyclists to use to navigate safely, and share adventures and precautions with each other.</p>
	  </div>
	</div>
  </div>
</div>

<!-- Hammer Modal -->
<div class="modal fade" id="theHammerModal" tabindex="-1" aria-labelledby="theHammerModal" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<h1 class="modal-title fs-5" id="pedalModalLabel">The Hammer</h1>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	  </div>
	  <div class="modal-body">
		<div id="hammerCarousel" class="carousel slide" data-bs-ride="carousel">
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img src="/img/hammer%20mock.v1.jpg" class="d-block w-100" alt="Hammer Mockup">
			</div>
			<div class="carousel-item">
			  <img src="/img/hammermockv2.jpg" class="d-block w-100" alt="Hammer Mockup">
			</div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#hammerCarousel" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#hammerCarousel" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		  </button>
		</div>
			<p>&quot;The Hammer&quot; is Central Piedmont's student arts and literature magazine. All visual, literary, and graphic arts included in the magazine are crafted, written, and designed by current Central Piedmont students. The visual art showcased in the publication's pages is taken from the college's Annual Juried Student Art Exhibit, which showcases our top student talent and highlights the variety and skill of the college's visual arts program.</p>
			<p>&quot;The Hammer&quot; was founded in 2017 and is run by the Central Piedmont English department, with support from other departments. Literary works included in past issues have been winners of the local level of a national literary competition sponsored by the League for Innovation in the Community College.</p>
	  </div>
	</div>
  </div>
</div>

<!-- Gate City Modal -->
<div class="modal fade" id="gateCityModal" tabindex="-1" aria-labelledby="gateCityModal" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<h1 class="modal-title fs-5" id="pedalModalLabel">Gate City Luxury Limo Service</h1>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	  </div>
	  <div class="modal-body">
		  
			<img src="/img/V2_1.png" class="d-block w-100" alt="Hammer Mockup">
		
		</div>
	  </div>
	</div>
  </div>
</div>

<!-- Hammer Modal -->
<div class="modal fade" id="lllilllStitches" tabindex="-1" aria-labelledby="lllilllStitches" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<h1 class="modal-title fs-5" id="pedalModalLabel">lllilll Stitches</h1>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	  </div>
	  <div class="modal-body">
		<div id="lllilllStitchesCarousel" class="carousel slide" data-bs-ride="carousel">
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img src="/img/lllilll.jpg" class="d-block w-100" alt="lllilll Stitches">
			</div>
			<div class="carousel-item">
			  <img src="/img/lllilll.logo.jpg" class="d-block w-100" alt="lllilll Stitches">
			</div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#lllilllStitchesCarousel" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#lllilllStitchesCarousel" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		  </button>
		</div>
			<p>lllilll Stitches are chain stitched goods, created on a antique chain stitching machine.</p>
	  </div>
	</div>
  </div>
</div>
<?php include('inc/footcode.html'); 