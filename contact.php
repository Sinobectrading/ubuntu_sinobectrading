<?php session_start(); include_once 'header.php'; ?>

	
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_4.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Contact us</h1>
									<h2>Metal is our business <a href="http://freehtml5.co/" target="_blank">Sinobectrading</a></h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">4455 Cousens St-Laurent, <br> Québec, Canada H4S 1X5</li>
							<li class="phone"><a href="tel://1234567920">+ 1 (514) 339 9333</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">info@sinobectrading.com</a></li>
							<li class="url"><a href="http://freehtml5.co">Sinobectrading.com</a></li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Get In Touch</h3>
<!-- =======================FORM START===================== -->	
<!-- =======================FORM START===================== -->	
<!-- =======================FORM START===================== -->	
<!-- =======================FORM START===================== -->	
					<form action="mail.php" method="post" id="contactform" class="toggle-disabled">
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="fname" name="fname" class="form-control" placeholder="Your firstname" data-validation="alphanumeric required"  data-validation-error-msg="Input empty or invalid sympol">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="lname" name="lname" class="form-control" placeholder="Your lastname"  data-validation="alphanumeric required" data-validation-error-msg="Input empty or invalid sympol">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="email" id="email" name="email" class="form-control" placeholder="Your email address"  data-validation="email required">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" id="subject" name="subject" class="form-control" placeholder="Your subject of this message">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="message" id="message" rows="30"  cols="50" class="form-control" placeholder="Say something about us" data-validation="required"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" id="submit" value="Send Message" name="submit" class="btn btn-primary">
							<input type="reset" id="reset" value="Reset" name="reset" class="btn btn-outline-primary">
							<span id="msgsent"></span>
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>
	<div id="map" class="fh5co-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2796.4104021705375!2d-73.74077668444124!3d45.50181647910134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc93d4ab4d3502f%3A0x86c0efe103230594!2s4455+Rue+Cousens%2C+Saint-Laurent%2C+QC+H4S+1X5%2C+Canada!5e0!3m2!1sen!2s!4v1508187346150" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

<?php include_once 'footer.php'; ?>
<script>
$(document).ready(function(){

$.validate({
  form : '#contactform',
  modules : 'toggleDisabled',
  disabledFormFilter : 'form.toggle-disabled'
  // onSuccess: function($form){
  // 	$("#msgsent").html("<img src='images/l02.gif'/>");
  // }




});


$("#submit").click(function(){
	$("#contactform").submit(function(e){
		$("#msgsent").html("<img src='images/l02.gif'/>");
		var postData = $(this).serializeArray();
		var formURL = $(this).attr("action");
		$.ajax({
			url : formURL,
			type: "POST",
			data : postData,
			success:function(data, textStatus, jqXHR){
				$("#msgsent").replaceWith('Success!');

			},
			error: function(jqXHR, textStatus, errorThrown) {
				$("#msgsent").html('Failed, please try again.');
			}
		});
	    e.preventDefault();	//STOP default action
	    // e.unbind();
	});
		
	$("#contactform").submit(); //SUBMIT FORM
});

	$('#reset').click(function(){
		$('#contactform')[0].reset();
  	});

});
</script>

 
</body>
</html>
