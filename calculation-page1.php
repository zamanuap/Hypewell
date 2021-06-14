<?php require('header.html'); ?>
<?php require('industryList.php'); ?>

<div class="container-fluid container-color">
<div class="row">
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
		<!--div class="container"-->		
			<div class="row">
				<div class="col-md-12">
					<h3>Caltulating Ad Budget</h4>
					<div><progress style="width:100%; padding: 12px; margin: 20px 0;" id="file" value="20" max="100"></progress></div>
					<button class="roas-calculate-btn"><a href="roas.php"><i class="fas fa-arrow-left"></i>BACK</a></button>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="text-align: center;"><h3>What is your industry?</h3></div>
			</div>
			<div class="row">
				<?php 
					for($i=0; $i<14; $i++){ ?>
						
				<div class="col-md-4">
					<div class="industry-select-div" id="<?php echo "industry-div-". $i ?>" onclick="industryDivClick()">
						<i id="<?php echo "industry-icon-". $i ?>" class="far fa-circle"></i>
						<?php echo $list[$i]; ?>
					</div>
				</div>
				<?php } ?>
			</div>		
			<div class="row">
				<div class="col-md-12">
					<button id="industry-select-btn" class="roas-calculate-btn" onclick="isIndustrySelected()">
						<a id="industry-select-anchor" href="">NEXT<i class="fas fa-arrow-right"></i></a>
					</button>
				</div>
			</div>
	</div>
		
	<div class="col-md-2">
	</div>
</div>
<script src="./assets/js/industrySelect.js"></script>
<?php require("footer.html"); ?>
</div>



		