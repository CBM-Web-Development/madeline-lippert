<?php 
	
$page = 'portfolio';

$pageTitle = 'Hi! I&#39;m Madeline. I am a graphic designer, web desinger, and an illustrator.';

$pageDesc = 'I have a lot of expierence in several different fields, not because I lack focus.  I love learning new things, and I love helping others do the same. Let me show you what I mean...';

$pageKeyword = 'hire a designer, i need a website, graphic designer 28205, charlotte graphic designer, charlotte designer, charlotte nc graphic design, i need a logo, graphic designer charlotte nc';

include('inc/headcode.html'); 
?>

<div class="container-fluid">
	<div class="row row-cols-1 row-cols-md-2 g-4">
		<div class="col">
			<div class="card">
			  <img src="/madeline-lippert/img/pedal.png" class="card-img-top" alt="Pedal Mobile Applications">
			  <div class="card-body">
				<h5 class="card-title">Pedal App</h5>
				<i>Mobile Apps</i>
				<p class="card-text">The social media app for cyclists.</p>
			  </div>
			</div>
		</div>
		<div class="col">
			<div class="card">
			  <img src="/madeline-lippert/img/the-hammer.png" class="card-img-top" alt="The Hammer publication">
			  <div class="card-body">
				<h5 class="card-title">The Hammer</h5>
				<i>Publications</i>
				<p class="card-text">A literary and arts magazine for Central Piedmont Community College.</p>
			  </div>
			</div>
		</div>
		<div class="col">
			<div class="card">
			  <img src="..." class="card-img-top" alt="...">
			  <div class="card-body">
				<h5 class="card-title">[Title]</h5>
				<p class="card-text">[Text]</p>
			  </div>
			</div>
		</div>
		<div class="col">
			<div class="card">
			  <img src="..." class="card-img-top" alt="...">
			  <div class="card-body">
				<h5 class="card-title">[Title]</h5>
				<p class="card-text">[Text]</p>
			  </div>
			</div>
		</div>
	</div>
</div>
<?php include('inc/footcode.html'); 