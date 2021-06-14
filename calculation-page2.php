<?php require('header.html'); ?>
<div class="container-fluid container-color">
<div style="height: 70vh;" class="row">
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
		<!--div class="container"-->		
			<div class="row">
				<div class="col-md-12">
					<h3>Caltulating Ad Budget</h4>
					<div><progress style="width:100%; padding: 12px; margin: 30px 0" id="file" value="40" max="100"></progress></div>
					<button class="roas-calculate-btn"><a href="calculation-page1.php"><i class="fas fa-arrow-left"></i>BACK</a></button>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<h3 style="margin-top: 40px;">How many orders* does your website get per month?</h4>
					<input id="numberInput" style="margin-top: 30px;" type="number" min="1"/>
					<p style="margin-top: 50px; font-size: .85rem; padding: 0;">*Order can mean a sale, lead, registration, etc. based on what you consider to be your most valuable conversion.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<button id="btn" style="margin-top: 50px;" class="roas-calculate-btn" onclick="noOfOrders()"><a href="calculation-page3.php">NEXT<i class="fas fa-arrow-right"></i></a></button>
				</div>					
			</div>
	</div>
</div>	
<script src="./assets/js/script.js"></script>
<script>
function noOfOrders(){
	var x = document.getElementById('numberInput').value;
	//console.log(x);
	sessionStorage.setItem('noOfOrders',x);
}

document.getElementById('btn').addEventListener('click',noOfOrders);
</script>


<?php require("footer.html"); ?>			
</div>