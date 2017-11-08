<footer id="fh5co-footer" role="contentinfo" style="background-image: url(/sinobectrading/images/AdobeStock_82977456.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h3>About Sinobectrading</h3>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-12 col-md-push-1 fh5co-widget">
					<h3>Useful Link</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Sinobecgroup</a></li>
						<li><a href="#">Sinometalresources Inc.</a></li>
						<li><a href="#">Sinobecresurces</a></li>
						<li><a href="#">Iconbest</a></li>
 					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-12 col-md-push-1 fh5co-widget">
					<h3>Career</h3>
					<ul class="fh5co-footer-links">
						<li><a href="career.php">Sales</a></li>
						<li><a href="career.php">Logistic</a></li>
						<li><a href="career.php">Administration</a></li>
						<li><a href="career.php">Finance</a></li>
						<li><a href="career.php">Warehouse</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-12 col-md-push-1 fh5co-widget">
					<h3>Engage us</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Marketing</a></li>
						<li><a href="#">Visual Assistant</a></li>
						<li><a href="#">System Analysis</a></li>
						<li><a href="#">Advertise</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-12 col-md-push-1 fh5co-widget">
					<h3>Legal</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2017 Sinobectrading Inc. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="#" target="_blank">Sinobectrading</a> </small>
					</p>
				</div>
			</div>

		</div>
</footer>
</div>

<div class="gototop js-top">
	<a href="#" class="/sinobectrading/js-gotop"><i class="icon-arrow-up"></i></a>
</div>
	

<!-- jQuery Easing -->
<script src="/sinobectrading/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="/sinobectrading/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="/sinobectrading/js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="/sinobectrading/js/jquery.stellar.min.js"></script>
<!-- Carousel -->
<script src="/sinobectrading/js/owl.carousel.min.js"></script>


<!-- <script src="/sinobectrading/js/jquery.slicebox.js"></script> -->

<!-- Flexslider -->
<!-- <script src="/sinobectrading/js/jquery.flexslider-min.js"></script> -->
<!-- countTo -->
<script src="/sinobectrading/js/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script src="/sinobectrading/js/jquery.magnific-popup.min.js"></script>
<script src="/sinobectrading/js/magnific-popup-options.js"></script>
<!-- Count Down -->
<script src="/sinobectrading/js/simplyCountdown.js"></script>
<!-- Main -->
<script src="/sinobectrading/js/main.js"></script>
<script src="/sinobectrading/js/classie.js"></script>
<script src="/sinobectrading/js/jquery-ui.js"></script>

<!-- <script src="/sinobectrading/js/jquery.form-validator.min.js"></script>
 -->
 <script src="/sinobectrading/js/jquery.form-validator.min.js"></script>

<!-- editable - -->
<!-- <script src="/sinobectrading/js/bootstrap-editable.min.js"></script>	  
<script src="/sinobectrading/js/wysihtml5-0.3.0.min.js"></script>  
<script src="/sinobectrading/js/bootstrap3-wysihtml5.js"></script> -->
<script>
(function( $ ) {

    //Function to animate slider captions 
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';
		
		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}
	
	//Variables on page load 
	var $myCarousel = $('#sg-carousel'),
		$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
		
	//Initialize carousel 
	$myCarousel.carousel();
	
	//Animate captions in first slide on page load 
	doAnimations($firstAnimatingElems);
	
	//Pause carousel  
	$myCarousel.carousel('pause');
	
	
	//Other slides to be animated on carousel slide event 
	$myCarousel.on('slide.bs.carousel', function (e) {
		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations($animatingElems);
	});  
});  
</script>
<script>
var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

// default example
simplyCountdown('.simply-countdown-one', {
    year: d.getFullYear(),
    month: d.getMonth() + 1,
    day: d.getDate()
});

//jQuery example
$('#simply-countdown-losange').simplyCountdown({
    year: d.getFullYear(),
    month: d.getMonth() + 1,
    day: d.getDate(),
    enableUtc: false
});
</script>

 
<script>
function init() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 300,
            header = document.querySelector("header");
        if (distanceY > shrinkOn) {
            classie.add(header,"smaller");
 

        } else {
            if (classie.has(header,"smaller")) {
                classie.remove(header,"smaller");
           
            }
        }
    });
}
window.onload = init();

</script>


