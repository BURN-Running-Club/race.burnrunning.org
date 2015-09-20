<section id="contact-us" class="container">
	<h2 class="text-center">CONTACT US</h2>
	<div class="container">
		<div class="col-xs-12 col-sm-6 col-sm-push-6">
			<p>Comments and Suggestions? </p>
			<p><strong>Leave us a message (all fields required)</strong></p>
			<form id="contact-form" class="row" action="mailer.php" method="POST">
				<div class="form-group col-xs-12 col-sm-6">
					<label for="contact-name">Name</label>
					<input type="text" class="form-control name" name="name" id="contact-name" required />
				</div>
				<div class="form-group col-xs-12 col-sm-6">
					<label for="contact-email">Email</label>
					<input type="email" class="form-control name" name="email" id="contact-email" required />
				</div>
				<div class="form-group col-xs-12">
					<label for="contact-message">Message</label>
					<textarea name="message" class="form-control message" id="contact-message" required></textarea>
				</div>
				<div class="form-group col-xs-7">
					<label for="contact-captcha">Enter the text in the image</label>
					<input type="text" class="form-control captcha-input" name="captcha" id="contact-captcha" required />
				</div>
				<div class="form-group col-xs-5">
					<img class="captcha img-responsive" alt="Coyote" src='captcha.php' />
				</div>
				<div class="col-xs-12 form-group captcha-status">&nbsp;</div>
				<div class="form-group col-xs-12">
					<button type="submit" class="submit btn btn-danger">Submit</button>
				</div>
			</form>
		</div>
		<div class="col-xs-12 col-sm-6 col-sm-pull-6">
			<p>Write us at</p>
			<h3>
				<a class="color-red" href="mailto:contact@burnrunning.org?Subject=Hello%20BURN" target="_top">
					contact@burnrunning.org
				</a>
			</h3>
			<h4>Follow us at </h4>
			<div class="row social-icons">
				<a href="https://www.facebook.com/JoinTheBURN/">
					<i class="fa fa-facebook fa-3x"></i>
				</a>
				<a href="https://www.flickr.com/photos/burnrunning/">
					<i class="fa fa-flickr fa-3x"></i>
				</a>
<!-- 				<a href="">
					<i class="fa fa-instagram fa-3x"></i>
				</a>
				<a href="">
					<i class="fa fa-twitter fa-3x"></i>
				</a> -->
			</div>
		</div>
	</div>
</section>
