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
		<div id="res">
			<table id="ajaxresponse">
				sssssssssssss
			</table>
		</div>	
	</div>
</div>

<?php include_once 'footer.php'; ?>
<script>
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
// $("#track").prop('disabled', true);

// var povalid;
// var cidvalid;
// var result;
$(document).ready(function(){
	
      $('#cidname').on({
    		focus: function(){
    			$("#ciderror").empty();
    			$("#poerror").empty();
    			cidvalid = "";
    		},
 
		blur: function(){
			$.ajax({
				type: "POST",
				url:"cid.php",
				dataType: "json",
				data:{
					cidvalue:$('#cidname').val()
					},
				success: function(data){
					if (data.success) {
 						cidvalid = "c";
						console.log(cidvalid);
					}			
					if(data.success == false) {
						$("#ciderror").append(data.message);
						console.log("cid data is false");
					}
				},
				error:function(jqXHR, status, err){
					console.log("cid wrong");
				},
			});
		},

		change: function(){

		}
	});


    $('#ponumber').on({
    		focus: function(){
    			$("#poerror").empty();
    			povalid="";
    		},
 
		blur: function(){
			$.ajax({
				type: "POST",
				url:"po.php",
				dataType: "json",
				data:{
					povalue:$('#ponumber').val()
					},
				success: function(data){
					if (data.success) {
						povalid = "p";
						console.log(povalid);
						var result = cidvalid+povalid;
						console.log(result);
						if(result == "cp") {
							$("#track").prop('disabled', false);
						}
					}			
					if(data.success == false) {
						$("#poerror").append(data.message);
						console.log("cid data is false");
					}
				},
				error:function(jqXHR, status, err){
					console.log("po wrong");
				},
			});
		}
	});



    $("#tracking").submit(function(e) {
	    $.ajax({
	           type: "POST",
	           url: pot.php,
	           data: {
	           		ponum: $('#ponumber').val()
	           }, // serializes the form's elements.
	           success: function(data)
	           {
	              $('#ajaxresponse').append('<tr><td>AG PO#</td><td>SINOBEC PO#</td><td>Invoice #</td><td>SHIPPING REF</td><td>CONTAINER#</td><td>ETA</td></tr><tr><td>'+data.ag+'</td><td>'+data.sinobec+'</td><td>'+data.shipref+'</td><td>'+data.invoice+'</td><td>'+data.contref+'</td><td>'+data.eta+'</td></tr>');
			 }  
	           
	         });

	    e.preventDefault(); // avoid to execute the actual submit of the form.
	});
 


});



</script>

</body>
</html>
 

