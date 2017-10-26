<?php include_once 'header.php'; ?>

 
	<div id="fh5co-contact">
  				<div class="headquater"><h1 class="center">Headquater</h1></div>
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">198 West 21th Street, <br> Suite 721 New York NY 10016</li>
							<li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li class="url"><a href="http://freehtml5.co">freeHTML5.co</a></li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Get In Touch</h3>




					<form action="#" method="post" class="toggle-disabled" id="contactform">
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="fname" class="form-control" placeholder="Your firstname" data-validation="alphanumeric required">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="lname" class="form-control" placeholder="Your lastname" data-validation="alphanumeric required">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="email" class="form-control" placeholder="Your email address" data-validation="email required">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us" data-validation="alphanumeric required"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary">
						</div>

					</form>		
				</div>
 			
 	</div>
	<div id="map" class="fh5co-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2796.4104021705375!2d-73.74077668444124!3d45.50181647910134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc93d4ab4d3502f%3A0x86c0efe103230594!2s4455+Rue+Cousens%2C+Saint-Laurent%2C+QC+H4S+1X5%2C+Canada!5e0!3m2!1sen!2s!4v1508187346150" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

<?php include_once 'footer.php'; ?>

<script>
$.validate({
	form : '#contactform',
  	modules : 'toggleDisabled',
  	disabledFormFilter : 'form.toggle-disabled'
});
</script>
</body></html>