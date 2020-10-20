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
		<br><br><br><br><br>
		<header>
			<section>
				<div class="w-100">
					<div class="container"   style="margin-top: 2%">
						<h1>
								Formulaire de payement
						</h1>
						<div class="row">
							<div class="col-lg-6 p-4">
								<form action="">
									<div class="container">
										<input type="text" name="" placeholder="La somme à investir..." class="btn btn-light"
											style="cursor: text;text-align: left;">

										<br><br>
										<input type="text" name="" placeholder="Code de votre representant..." class="btn btn-light"
											style="cursor: text;text-align: left;">

										<br><br>
										<input type="text" name="" placeholder="Code de votre parrain." class="btn btn-light"
											style="cursor: text;text-align: left;">
										<br><br>
										<input type="text" name="" placeholder="Code de validation." class="btn btn-light"
											style="cursor: text;text-align: left;">
										<br><br>
										<input type="submit" name=""  class="btn btn-primary" value="Envoyer">
									</div>
								</form>
							</div>
							<div class="col-lg-6">
								<div class="container text-center">
										<!--consigne et demarche de l'investissement-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</header>
		<style type="text/css">
			h1{
				font-family: Gordita Bold,sans serif;
				font-size: 35px;
			}
			body{
				font-family: Gordita Light,sans serif;
				font-size: 15px;
				
			}
			input[type="text"]{
				width: 350px;
			
				font-family: Gordita Light,sans serif;
				font-size: 13px;
				background: #e9e9e9;
				cursor: text;

			}
			input[type="submit"]{
				width: 350px;
				height: 57px;
				font-size: 13px;
				

			}
			
		</style>
	</body>
</html>