<?php require('header.html'); ?>
<div class="container-fluid container-color">
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
	<div class="row" style="text-align: center; padding-top: 30px;">
		<div class="col-md-12">
			<h5 style="color: #93C23D">Based on estimated figures from <strong id="industry-id"></strong> companies, we recommend:</h5>
			<div id="div1" style="padding-top: 50px; display: block;">
				<span id="budget" style="font-size: 2rem; padding-right:50px;"></span>
				<span class="span-toggle" onclick="toggle()"><i style="padding-right: 15px;"class="fas fa-sliders-h"></i>Adjust Budget</span>
			</div>
			<div id="div2" style="padding-top: 50px; display: none;">
				<input id="toggle-input" type="number" min="1" style="font-size: 2rem; width: 150px;"/>
				<span class="span-toggle" onclick="toggle()"><i style="padding-left: 50px; padding-right: 10px;" class="fas fa-check-circle"></i>Save</span>
			</div>
			<div style="font-size: 1.9rem; padding-top: 30px;">
				<span style="dispaly: inline-block;">Monthly advertising budget</span>
				
				<span class="my-tooltip">
					<i style="background-color: white; color: blue; border: 1px solid white; border-radius: 50px;" class="fas fa-info-circle"></i>
					<span class="tooltiptext" style="font-size: .8rem; padding: 15px; text-align: left; line-height: 1.6;">Our budget recommendation is designed to optimally drive revenue from existing site traffic and attract net new visitors. You can adjust this budget slider to see how spending more (or less) than the recommendation impacts projected revenue, reach, clicks and new visitors.</span>
				</span>
				
			</div>
		</div>
	</div>
	<div class="row" style="padding-top: 30px;">
		
				<div class="col-md-12">
					<h4>Budget Breakdown</h4>
				</div>
				<div class="col-md-6">
					<h6><span id="existingCustomer"></span> spent on existing customers
						<span class="my-tooltip">
						<i style="background-color: white; color: blue; border: 1px solid white; border-radius: 50px;" class="fas fa-info-circle"></i>
						<span class="tooltiptext" style="font-size: .8rem; padding: 15px; text-align: left; line-height: 1.6;">Our budget recommendation is designed to optimally drive revenue from existing site traffic and attract net new visitors. You can adjust this budget slider to see how spending more (or less) than the recommendation impacts projected revenue, reach, clicks and new visitors.</span>
						</span>
						
						<!--i style="background-color: white; color: blue; border: 1px solid white; border-radius: 50px;" class="fas fa-info-circle"></i-->
						</span>
					</h6>
					<canvas id="myChart1" width="400" height="250"></canvas>
				</div>
				<div class="col-md-6">
					<h6><span id="newCustomer"></span> spent to bring in new customers
						<span class="my-tooltip">
						<i style="background-color: white; color: blue; border: 1px solid white; border-radius: 50px;" class="fas fa-info-circle"></i>
						<span class="tooltiptext" style="font-size: .8rem; padding: 15px; text-align: left; line-height: 1.6;">Our budget recommendation is designed to optimally drive revenue from existing site traffic and attract net new visitors. You can adjust this budget slider to see how spending more (or less) than the recommendation impacts projected revenue, reach, clicks and new visitors.</span>
						</span>
						<!--i style="background-color: white; color: blue; border: 1px solid white; border-radius: 50px;" class="fas fa-info-circle"></i-->
						</span>
					</h6>
					<canvas id="myChart2" width="400" height="250"></canvas>
				</div>
	</div>
		
	<div class="row" style="padding-top: 30px;">
		<div class="col-md-6">
			<table class="table table-dark">
			  <thead>
				<tr>
				  <th scope="col">Industry Benchmarks</th>
				  <th scope="col"></th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td>Cost per Thousand Impressions (CPM)</td>
				  <td>$1.50 - $4.00</td>
				</tr>
				<tr>
				  <td>Cost per Click (CPC)</td>
				  <td>$0.40 - $1.80</td>
				</tr>
				<tr>
				  <td>Click Thru Rate (CTR)</td>
				  <td>0.23% - 0.47%</td>
				</tr>
			  </tbody>
			</table>
		</div>
		<div class="col-md-6">
			<table class="table table-dark">
			  <thead>
				<tr>
				  <th scope="col">Industry Benchmarks</th>
				  <th scope="col"></th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td>Cost per Thousand Impressions (CPM)</td>
				  <td>$0.40 - $0.60</td>
				</tr>
				<tr>
				  <td>Cost per Click (CPC)</td>
				  <td>$0.00 - $0.10</td>
				</tr>
				<tr>
				  <td>Cost per New Visitor</td>
				  <td>$0.20 - $0.20</td>
				</tr>
			  </tbody>
			</table>
		</div>
	</div>
	<div class="row" style="color: #EDEDED; background-color: #343a40; margin: 30px 0 0;">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12" style="padding: 30px;">
					<div style="display: flex; justify-content: space-between;">
					<h5>Your Estimated Results</h3>
					<h6 style="font-size: .9rem;"><a target="_blank" href="https://help.adroll.com/hc/en-us/articles/115000353151-Ad-Campaigns-Reporting-Dashboard-Overview"><i class="fas fa-external-link-alt"></i>Learn more about result metrics</a></h6>
					
					
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div style="display: flex; justify-content: space-between;">
						<div style="text-align: center;">
							<p style="font-size: .9rem;"># of New Visitors</p>
							<p style="font-size: 2rem;">10</p>
						</div>
						<div style="text-align: center;">
							<p style="font-size: .9rem;">% Traffic Reached
								<i style="background-color: white; color: blue; border: 1px solid white; border-radius: 50px;" class="fas fa-info-circle"></i>
							</p>
							<p style="font-size: 2rem;">62%</p>
						</div>
						<div style="text-align: center;">
							<p style="font-size: .9rem;">Cost per New Visitor</p>
							<p style="font-size: 2rem;">$0.20</p>
						</div>
						<div style="text-align: center;">
							<p style="font-size: .9rem;"># of Conversions</p>
							<p style="font-size: 2rem;">1</p>
						</div>
						<div style="text-align: center;">
							<p style="font-size: .9rem;">Expected Revenue</p>
							<p style="font-size: 2rem;">$25</p>
						</div>					
					</div>	
				</div>
			</div>
		</div>
	</div>
	<div class="row" style="padding-top: 30px;">
		<div class="col-md-12">
		<div style="display: flex; justify-content: space-between;">
			<button id="recalculate-btn" style="margin-top: 50px;" class="roas-calculate-btn" onclick="">
				<a href="./index.php"><i style="padding-right: 10px;" class="fas fa-arrow-left"></i>RECALCULATE ROAS<a>
			</button>
			<button style="margin-top: 50px;" class="roas-calculate-btn"><a href="#">SEND ME THESE RESULTS<i style="padding-left: 10px;" class="fas fa-envelope"></i></a></button>
		</div>
		</div>
	</div>
	<div class="row" style="padding-top: 30px;">
	</div>
</div>
<div class="col-md-2"></div>
</div>	

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
<script src="./assets/js/grahp1.js"></script>
<script src="./assets/js/grahp2.js"></script>
<script src="./assets/js/toggle.js"></script>
<script src="./assets/js/clearLocalStorage.js"></script>
<script> 
	document.getElementById('industry-id').innerHTML = sessionStorage.getItem('industry'); 
	var budget = Math.round(sessionStorage.getItem('avgValue') * .25); 
	sessionStorage.setItem('budget', budget);
	document.getElementById('budget').innerHTML = sessionStorage.getItem('budget'); 
	document.getElementById('toggle-input').value = Math.round(sessionStorage.getItem('avgValue') * .25); 
	document.getElementById('existingCustomer').innerHTML = Math.round(sessionStorage.getItem('budget') * .6); 
	document.getElementById('newCustomer').innerHTML = Math.round(sessionStorage.getItem('budget') * .4); 
	roas();
</script>
<?php require("footer.html"); ?>
</div>
