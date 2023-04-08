<?php

	$page = 'contact';

	$pageTitle = 'graphic design contact';

	$pageDesc = 'Contact me to talk about your design needs!';

	$pageKeywords = 'Contact me, contact, for hire, freelance designer, hire a designer, talk to a designer';


	

	$msg = '';
	$msgClass = '';

	if(filter_has_var(INPUT_POST, 'submit')){

			$name = htmlspecialchars($_POST['name']);
			$email = htmlspecialchars($_POST['email']);
			$message = htmlspecialchars($_POST['message']);

			if(!empty($email) && !empty($name) && !empty($message)) {

				if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
					$msg = 'Please use a valid email';
					$msgClass = 'alert-danger';
				} else {

					$toEmail = 'contact@madelinelippert.com';
					$subject = 'Contact Request Form' .$name;
					$body = '<h2>Contact Request</h2>
							<h4>Name</h4><p>'.$name.'</p>
							<h4>Email</h4><p>'.$email.'</p>
							<h4>Message</h4><p>'.$message. ' </p>';

					$headers = "MIME-Version: 1.0" ."\r\n";
					$headers .= "Content-Type:text/html;charset=UTF-8" ."\r\n";

					$headers .= "From: ".$name. "<".$email.">". "\r\n";

					if (mail($toEmail, $subject, $body, $headers)){
						$msg = 'Your email has been sent';
						$msgClass ='alert-success';

					} else {
						$msg = 'Your email was not sent';
						$msgClass = 'alert-danger';

					}
				}
			

			} else {
				$msg = 'Please fill in all fields';
				$msgClass = 'alert-danger';


			}
		}

		include('inc/headcode.html');


?>


	<h1> Let's talk </h1>
		<p>I love talking design </p>
		<p> Need a conversation starter? <a href="index.php" title="Refresh on my work and style">Take a look at my portfolio</a>to see all my favrite works.</p>

		<?php if($msg != ''): ?>
		<div
			class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?>
		</div>

	<?php endif; ?>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
		</div>
		<div class="form-group">
			<label>Message</label>
			<textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
		</div>
		<br>
		<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	</form>


<?php

	include('inc/footcode.html');

?>		
