<!DOCTYPE html>
<html lang="en">

<head>

	<title>12th Annual Alumni Meet</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include("mainStyle.php");?>
	<?php include("preloader.php");?>

	<script type="text/javascript" src="sponsor-cycle/cycle.js"></script>
	<script type="text/javascript" src="sponsor-cycle/cycle-script.js"></script>
	
</head>

<body class="container-fluid" id="page"> 

	<div id="mainpage" class="container">

		<?php include("top_home.php"); ?>

		<div class="row">
			<div class="col-md-2 " style="background:;" >

				<br/>

				&nbsp;&nbsp;<?php include("sponsorsSlider.php");?><br/>
				<a href="http://antoniobernini.com">	<img src="images/timekeeper.png" width="100%"/></a>

			</div>

			<div class="col-md-8" style="">			

				<?php include("imageSlider.php");?>

			</div>

			<div class="col-md-2" style="background:; text-align:center;">

				<?php include("socialIcons.php");?>					

			</div> 

		</div>
	</div>

</body>

<script type="text/javascript">

$(document).ready(function(){

	$('.carousel').carousel({
		interval: 2500,
		pause: "hover"
	})
});

</script>

</html>
