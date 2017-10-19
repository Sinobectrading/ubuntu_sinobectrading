<?php include_once 'header.php'; ?>
<div id="fh5co-tracking" class="fh5co-bg-section">
	<div class="container">
		 <form action="tracking.php" id="tracking" method="POST">
		 	<h2>Tracking your purchase order</h2>
		 	<div>
		 		<div class="col-md-6 error">
		 			<span id="ciderror">&nbsp;</span>
		 		</div>
		 	
				<div class="col-md-6 error">
		 			<span id="poerror">&nbsp;</span>
		 		</div>
			</div>
			<div class="row form-group">


				<div class="col-md-6">
					<!-- <label for="fname">First Name</label> -->
					<input type="text" id="cidname" name="cidname" class="form-control valid" placeholder="Customer ID">
				</div>
				<div class="col-md-6">
					<!-- <label for="lname">Last Name</label> -->
					<input type="text" id="ponumber" name="ponumber" class="form-control valid" placeholder="PO number">
				</div>
			</div>
			
			<div class="form-group">
				<input type="submit" value="Track" id="track" name="track" class="btn btn-primary">
				<span>Forget customer ID? Click <a href="#">HERE</a></span>
			</div>
		</form>		
	</div>
</div>

<?php include_once 'footer.php'; ?>
<script>
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
$("#track").prop('disabled', true);


$(document).ready(function(){
    $('input.valid').on({
    	keypress: function(){
    		$(".error").empty();
    	},

    	blur: function(){
    		$.ajax({
				type: "POST",
				url:"cid.php",
				dataType: "json",
				data:{
					trackvalue:$(this).val()
 				},
				success: function(data){
					if (data.success) {
						$("#ciderror").append(data.message);
						$("#poerror").append(data.message);
						console.log("success");
						//$("#rname").addClass("warning");
					}			
					else {
						$("#ciderror").append(data.message);
						$("#poerror").append(data.message);
						console.log("false");
					}
				},
				error:function(jqXHR, status, err){
					console.log(status);
				},
			});
    	}
    });
});






 
</script>

</body>
</html>
 

