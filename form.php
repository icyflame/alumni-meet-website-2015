<html>

<head>

	<?php include("style.php"); ?>
	
	<script src="registration_form/script.js"></script>

	<style>

	input{
		border-radius: 6px;
		width:15em;
	}

	.browse{
		border:none;
	}


	.rb{
		height:1em;
		width:1em;
	}

	</style>

</head>

<body class="container">
	<div id="topbar" class="navbar">
		
		<?php include("menubar.php"); ?>

	</div>

	<br/>
	<br/>

	<div class="container">

		<div class="col-md-2"><p></p></div>

		<div class="col-md-8 " style="background-color:white;">

			<?php include("form_input.php"); ?>

		</div>

		<div class="col-md-2" style="text-align:center">
		<?php include("socialIcons.php");?>
		</div>

	</div>


</body>

</html>