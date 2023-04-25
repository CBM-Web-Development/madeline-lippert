<?php

	$page = 'bootstrap Challenges';

	$pageTitle = 'Bootstrap Sandbox Challenges';

	$pageDesc = 'Embed a carousel of images into three modal windows.
';

	$pageKeywords = 'these are the keywords I use to show up on google more';

	include('inc/headcode.html');

?>

<h1>Bootstrap Sandbox:Challenge #3</h1>
<p>
	<strong>Goal:</strong>Embed a carousel of images into three modal windows.
</p>
 <h2>Requirements</h2>
<ol>
	<li>Use the construct of a modal window to display a carousel of images on the first three cards</li>
	<li>The carousel should show one image at a time, and present a minimum of three images in total.</li>
	<li>
		You may use images from lorem picsum as placeholders. Consider using images of varied dimensions to see what happens when your content varies in size.
	</li>
	<li>Use only Bootstrap defaults to achieve your goals.</li>
	<li>Document your process as you go using the structure illustrated on this page.</li>
	<li>Document your process as you go using the structure illustrated on this page.</li>
	<li>When you break something, try to fix it. If it is broken beyond repair, save the file as a fail and move on to a fresh attempt.</li>
</ol>
		<h2>Challenge Attempted</h2>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
		<!-- Card 1 -->
		<div class="col">
		<div class="card">
		  <img src="https://picsum.photos/200/300?random=1" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">
  			Open Modal #1
			</button>

			<!-- Modal -->
				<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal One</h1>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				      	<p>This is the body for modal 1</p>
				      	<!-- Carousel 1 -->
							<div id="carouselExample" class="carousel slide">
							  <div class="carousel-inner">
							    <div class="carousel-item active">
							      <img src="https://picsum.photos/200/300?random=25" class="d-block w-100">
							    </div>
							    <div class="carousel-item">
							   	<img src="https://picsum.photos/200/300?random=37" class="d-block w-100">
							    </div>
							    <div class="carousel-item">
							      <img src="https://picsum.photos/200/300?random=48" class="d-block w-100">
							    </div>
							  </div>
							  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="visually-hidden">Previous</span>
							  </button>
							  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="visually-hidden">Next</span>
							  </button>
							</div>
							<!-- End of Carousel 1 -->
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				      </div>
				    </div>
				  </div>
				</div>

		  </div>
		</div>
		</div>
		<!-- /Card 1 -->

		<!-- Card 2 -->
		<div class="col">
		<div class="card">
		  <img src="https://picsum.photos/200/300?random=2" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal2">
  			Open Modal #2
			</button>
		  </div>
		</div>
		</div>

		<!-- Modal -->
				<div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Two</h1>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				      	<p>This is the body to Modal 2</p>
				      	<!-- Carousel 2 -->
							<div id="carousel2" class="carousel slide">
							  <div class="carousel-inner">
							    <div class="carousel-item active">
							      <img src="https://picsum.photos/200/300?random=2" class="d-block w-100">
							    </div>
							    <div class="carousel-item">
							   	<img src="https://picsum.photos/200/300?random=1" class="d-block w-100">
							    </div>
							    <div class="carousel-item">
							      <img src="https://picsum.photos/200/300?random=7" class="d-block w-100">
							    </div>
							  </div>
							  <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="visually-hidden">Previous</span>
							  </button>
							  <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="visually-hidden">Next</span>
							  </button>
							</div>
							<!-- End of Carousel 2 -->
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				      </div>
				    </div>
				  </div>
				</div>
		<!-- /Card 2 -->

		<!-- Card 3 -->
		<div class="col">
		<div class="card">
		  <img src="https://picsum.photos/200/300?random=3" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal3">
  			Open Modal #3
			</button>
		  </div>
		</div>
		</div>

				<!-- Modal -->
				<div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Three</h1>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				      	<p>This is the body for modal 3</p>
				      	<!-- Carousel 3 -->
							<div id="carousel3" class="carousel slide">
							  <div class="carousel-inner">
							    <div class="carousel-item active">
							      <img src="https://picsum.photos/200/300?random=49" class="d-block w-100">
							    </div>
							    <div class="carousel-item">
							   	<img src="https://picsum.photos/200/300?random=69" class="d-block w-100">
							    </div>
							    <div class="carousel-item">
							      <img src="https://picsum.photos/200/300?random=40" class="d-block w-100">
							    </div>
							  </div>
							  <button class="carousel-control-prev" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="visually-hidden">Previous</span>
							  </button>
							  <button class="carousel-control-next" type="button" data-bs-target="#carousel3" data-bs-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="visually-hidden">Next</span>
							  </button>
							</div>
							<!-- End of Carousel 3 -->
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				      </div>
				    </div>
				  </div>
				</div>
		<!-- /Card 3 -->

		<!-- Card 4 -->
		<div class="col">
		<div class="card">
		  <img src="https://picsum.photos/200/300?random=4" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
		</div>
		<!-- /Card 4 -->

		<!-- Card 5 -->
		<div class="col">
		<div class="card">
		  <img src="https://picsum.photos/200/300?random=5" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
		</div>
		<!-- /Card 5 -->

		<!-- Card 6 -->
		<div class="col">
		<div class="card">
		  <img src="https://picsum.photos/200/300?random=6" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
		</div>
		<!-- /Card 6 -->

		<!-- Card 7 -->
		<div class="col">
		<div class="card">
		  <img src="https://picsum.photos/200/300?random=7" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
		</div>
		<!-- /Card 7 -->

		<!-- Card 8 -->
		<div class="col">
		<div class="card">
		  <img src="https://picsum.photos/200/300?random=8" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
		</div>
		<!-- /Card 8 -->

		<!-- Card 9 -->
		<div class="col">
		<div class="card">
		  <img src="https://picsum.photos/200/300?random=9" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
		</div>
		<!-- /Card 9 -->

		<!-- Card 10 -->
		<div class="col">
		<div class="card">
		  <img src="https://picsum.photos/200/300?random=10" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
		</div>
		<!-- /Card 10 -->

		<!-- Card 11 -->
		<div class="col">
		<div class="card">
		  <img src="https://picsum.photos/200/300?random=11" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
		</div>
		<!-- /Card 11 -->

		<!-- Card 12 -->
		<div class="col">
		<div class="card">
		  <img src="https://picsum.photos/200/300?random=12" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
		</div>
		<!-- /Card 12 -->
</div>
<!-- Closing Card Grid -->

<br>	
<h2>Failures</h2>
<ol>
<li><strong>Fail 1:</strong> When I put my images into the carousel it looked cut off but I realized I deleted the class element "d-block w-100" and when I added it back it worked</li>

 </ol>
<?php

	include('inc/footcode.html');

?>