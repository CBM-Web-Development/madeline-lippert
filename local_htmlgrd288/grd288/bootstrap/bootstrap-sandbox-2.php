<?php 
	
	$page = 'bootstrap1';

	$pageTitle = 'Bootstrap Sandbox: Challenge1';

	$pageDesc = 'Update three cards to launch a modal window when the "Go Somewhere" button is clicked';

	$pageKeyword = 'these are the keywords I use to show up on google more';

	include('inc/headcode.html'); 

?>

<h1>Bootstrap Sandbox:Challenge #2</h1>
	<p>
		<strong>Goal:</strong>Update three cards to lanuch a modal window when the "Go Somewhere" button is clicked
	</p>
<h2>Requirements</h2>
	<ol>
		<li>Make a copy of a successful attempt attempt of challenge 1 or create a new file for this purpose that shows several cards on the page. </li>
		<li>For the first three cards that include the "Go Somewhere" button, attach a modal launch to that button, so that when the button is clicked, a modal window launches. </li>
		<li>Use only bootrstrap defaults to achieve your goals</li>
		<li>Document your process as you go using the structure illustrated on this page.</li>
		<li>When you break something, try to fix it.  If it is broken beyond repair, save the file as a fail and move on to a fresh attempt.</li>
	</ol>

	<h2> Challenge Attempted</h2>
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
		<!-- Card 1 -->
		<div class="col">
		<div class="card">
		  <img src="https://picsum.photos/200/300?random=1" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  			Open Modal #1
			</button>

			<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				        ...
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Save changes</button>
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
		    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  			Open Modal #2
			</button>
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
		    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  			Open Modal #3
			</button>
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
	<li>It was very easy so I dont know what to put here.</li>


 </ol>
<?php

	include('inc/footcode.html');

?>