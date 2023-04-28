<?php 
	
$page = 'portfolio';

$pageTitle = 'Hi! I&#39;m Madeline. I am a graphic designer, web desinger, and an illustrator.';

$pageDesc = 'I have a lot of expierence in several different fields, not because I lack focus.  I love learning new things, and I love helping others do the same. Let me show you what I mean...';

$pageKeyword = 'hire a designer, i need a website, graphic designer 28205, charlotte graphic designer, charlotte designer, charlotte nc graphic design, i need a logo, graphic designer charlotte nc';

include('inc/headcode.html'); 
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-10 col-12 mx-auto">
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
	</div>
</div>

<!-- Pedal Modal -->
<?php
include('inc/modals.php');
include('inc/footcode.html'); 