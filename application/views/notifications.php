<!DOCTYPE html>
<html>

	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, maximum-scale=1"/>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo css_url('position');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo css_url('bootstrap.min');?>">
		<!-- icones -->
		<link rel="stylesheet" type="text/css" href="<?php echo font_url();?>">
		<link rel="stylesheet" type="text/css" href="<?php echo css_url('theme');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo css_url('style');?>">
		<!-- font -->
		
		
		<meta charset="utf-8">
	</head>
	<body>
		<?php
		require 'templates/navbar.php';
		?>
		<br><br><br><br><br><br>
		<header>
			
			<div class="container-fluid text-center" id="Notifications">
				<div class="row">
					<div class="col">
						<img src="<?php echo images_url('pro1.jpg');?>" class="rounded-circle" width="70">
						<h1>
							<span class="text-muted">
								Hello
							</span>,
							<span>
								Marco carlos
							</span>
						</h1>
						<h3>
							<img src="<?php echo svg_url('cloche');?>" width="30"> Notifications.
						</h3>
					</div>
				</div>
			
			</div>
			
		</header>
	</body>
</html>
<style type="text/css">
	.r-p{
		border-radius: 25px;
	}
	.shad{
		box-shadow: rgba(0, 0, 0, 0.08) 0px -2px 20px 0px;
	}
	#notificaion-div{
		height: 70px;
	}
	.text-black{
		color: #000;
	}
</style>