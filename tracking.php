<?php include_once 'header.php'; ?>
<div id="fh5co-tracking" class="fh5co-bg-section">
	<div class="container">
		  
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
				<button id="track" name="track" class="btn btn-primary">Track</button>
				<span>Forget your customer ID? Click <a href="#">HERE</a></span>
			</div>
		 
		<div id="res">
			<table id="ajaxresponse">
				 
			</table>
		</div>	
	</div>
</div>

<?php include_once 'footer.php'; ?>
<script>
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
$("#track").prop('disabled', true);

// var povalid;
// var cidvalid;
// var result;
$(document).ready(function(){
$('#cidname').on({
		focus: function(){
			$("#ciderror").empty();
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
					$("#track").prop('disabled', false);
					console.log('cidvalid');
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

});

$('#ponumber').on({
	focus: function(){
		$("#poerror").empty();
	},
});
 
$('#track').on({ 
	click: function(){
		var ponumber = $('#ponumber').val();
		$.ajax({
			type: "POST",
			url:"po.php",
			dataType: "json",
			data:{
				povalue:ponumber
				},
			success: function(datat){
				if (datat.success) {
 					console.log('povalid');
 					$('#ajaxresponse').replaceWith('<table class="table table-hover" id="restable"><tr><td>AG PO#</td><td>SINOBEC PO#</td><td>Invoice #</td><td>SHIPPING REF</td><td>CONTAINER#</td><td>ETA</td></tr><tr><td>'+datat.result.ag+'</td><td>'+datat.result.sinobec+'</td><td>'+datat.result.invoice+'</td><td>'+datat.result.shipref+'</td><td>'+datat.result.contref+'</td><td>'+datat.result.eta+'</td></tr></table>');

	 
					// if(result == "cp") {
					// 	$("#track").prop('disabled', false);
					// }
				}			
				else {
					$("#poerror").replaceWith(datat.message);
					console.log("po number is false");
				}
			},
			error:function(jqXHR, status, err){
				console.log("po wrong: "+status);
			},
		});
	},
});
});
</script>

</body>
</html>
 

