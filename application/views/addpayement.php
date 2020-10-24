<!DOCTYPE html>
<html>

<head>
	<title></title>
	<meta name="viewport" content="width=device-width, maximum-scale=1" />

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo css_url('bootstrap.min'); ?>">
	<!-- icones -->
	<link rel="stylesheet" type="text/css" href="<?php echo font_url(); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo css_url('theme'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo css_url('style'); ?>">
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
				<div class="container" style="margin-top: 2%">
					<?php
					if (isset($_SESSION['erreur'])) {
						# code...
						printf("<p class='alert alert-" . $_SESSION['color'] . "'>" . $_SESSION['erreur'] . "</p>");
						unset($_SESSION['erreur']);
					}
					?>
					<h1>
						Formulaire de payement
					</h1>

					<span class="text-success lead p-4 m-4">
						Achat du pack <?php ($price == 'succes') ? printf('avec succes!!! ') : printf('à ' . getPriceByKey($price) . ' €'); ?>
					</span>
					<span>
						<?php
						function getPriceByKey($price)
						{
							if ($price == 1) {
								return "10";
							} elseif ($price == 2) {
								return "50";
							} elseif ($price == 3) {
								return "100";
							} else {
								return 'effectue';
							}
						}
						?>
					</span>
					<div class="row">
						<div class="col-lg-5 p-4">
							<form action="<?=site_url('Paiement/terminer_payement'); ?>" methode="POST" >
								<div class="container">
									<select name="modePaiement" class="btn btn-light mb-4" style="text-align: left;">
										<option value="m_monney" class="item">Mobile Monney</option>
										<option value="btc">BitCoins</option>
									</select>
									<input type="text" name="idInvestisseur" placeholder="Votre code..." class="btn btn-light" style="cursor: text;text-align: left;" value="<?=$_SESSION['id'] ?>" >
									<br><br>
									<input type="text" name="idRepresentant" placeholder="Code de votre representant..." class="btn btn-light" style="cursor: text;text-align: left;">
									<br><br>
									<input type="text" name="codeValidation" placeholder="Code de validation..." class="btn btn-light" style="cursor: text;text-align: left;">
									<input type="hidden" name='pack' value='<?=getPriceByKey($price) ?>'>
									<input type="hidden" name="chiffre" value='<?=$price ?>'>
									<br><br>
									<?php 
										$submit = '<input type="submit" class="btn btn-primary" value="Payer">';
										$link = '<a href="'.site_url("investisseur/").'" name="send" class="btn btn-primary" > Mon compte </a>';
										 echo ($price == 'succes') ? $link : $submit; 
										 
									?>

								</div>
							</form>
						</div>
						<div class="col-lg">
							<div class="container text-center">
								<!--consigne et demarche de l'investissement-->
								<div class="p border-warning border-left p-4">
									<p class="lead">
										Veuillez recuperer votre <b>code de vaidation</b> aupres de votre représentant.
									</p>
								</div>
								<div>
									<img src="<?php echo svg_url('payements'); ?>" width="400" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</header>
	<style type="text/css">
		h1 {
			font-family: Gordita Bold, sans serif;
			font-size: 35px;
		}

		body {
			font-family: Gordita Light, sans serif;
			font-size: 15px;

		}

		input[type="text"],
		option {
			width: 350px;
			font-family: Gordita Light, sans serif;
			font-size: 13px;
			background: #e9e9e9;
			cursor: text;

		}

		input[type="submit"],
		select {
			width: 350px;
			height: 57px;
			font-size: 13px;
		}
	</style>
</body>

</html>