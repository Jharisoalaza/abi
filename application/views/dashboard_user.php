<!DOCTYPE html>
<html>

<head>
	<title></title>
	<meta name="viewport" content="width=device-width, maximum-scale=1" />

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo css_url('position'); ?>">
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

	function getPriceByKey($key)
	{
		if ($key == 1) {
			return "10€";
		} elseif ($key == 2) {
			return "50€";
		} elseif ($key == 3) {
			return "100€";
		} else {
			return 'effectue';
		}
	}
	?>
	<br>
	<header>
		<div class="w-100" id="banniere">
			<div class="container-fluid">
				<!-- ici c'est la banniere  -->
			</div>
		</div>
		<section>
			<div class="w-100 text-center">
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<!-- debut image de profile -->
							<img src="<?php echo images_url('pro1.jpg'); ?>" class="rounded-circle  img-fluid" width="55">
							<!-- fin image de profile -->
						</div>
						<div class="col-lg-3">
							<h3>
								<?php printf($_SESSION['user']); ?>
								<img src="<?php echo images_url('good.png'); ?>" width="17">
							</h3>
							<span class="text-muted">
								<small><?= $_SESSION['pays'] ?>
									<!-- pays de l'utilisateur --> </small>
							</span>
						</div>
						<div class="col-lg-3">
							<div class="container">
								<div class="bg-light p-2 text-center r-p col ">
									<small>Compte Premuim</small>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<!-- Ne rien écrire ici -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<br><br>
		<section>
			<div class="w-100 r-p bg-white">
				<div class="container-fluid">
					<div class="row text-center">
						<div class="col s3">
							<h3>
								<?= $nbPack ?>
							</h3>
							<span class="text-muted" style="font-size: 13px;">
								<small>packs d'abonement</small>
							</span>
						</div>
						<div class="col s3">
							<h3>
								2
							</h3>
							<span class="text-muted" style="font-size: 13px;">
								<small> paiement réçus</small>
							</span>
						</div>
						<div class="col s3">
							<h3>
								0
							</h3>
							<span class="text-muted" style="font-size: 13px;">
								<small>Echec</small>
							</span>
						</div>
						<div class="col s3">
							<h3>
								<?php
								echo $affil;
								?>
							</h3>
							<span class="text-muted" style="font-size: 13px;">
								<small>Nombre de compte affiliés</small>
							</span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<br>
		<section>
			<div class="bg-light r-p p-3">
				<div class="container text-center">
					<div class="row">
						<a href="<?php echo site_url('investisseur/affil'); ?>">
							<div class="col text-center">
								<div class="container bg-white r-p shad p-3">

									<span class="text-dark">Mes affiliés</span>
								</div>

							</div>
						</a>
						<a href="<?php echo site_url('investisseur/param'); ?>">
							<div class="col text-center">
								<div class="container bg-white r-p shad p-3">

									<span class="text-dark">paramètres du compte</span>
								</div>

							</div>
						</a>
						<a href="<?php echo site_url('investisseur/notif'); ?>">
							<div class="col text-center">
								<div class="container bg-white r-p shad p-3">

									<span class="text-dark">notifications</span>
								</div>

							</div>
						</a>
						<a href="<?php echo site_url('investisseur/payement'); ?>">
							<div class="col ">
								<div class="container bg-white r-p shad p-3 text-dark">
									paiements éffectues
								</div>

							</div>
						</a>
					</div>
				</div>
				<br>
				<div class="container">
					<?php
					if (isset($_SESSION["panier"])) {
						foreach ($panier as $key => $value) {
							// echo $key;
							$cover = null;
					?>
							<div class="container">
								<div class="row p-4 shad r-p">
									<div class="col-lg-3">
										<?php
										if ($key == 1) {
											$cover = "cover";
										} elseif ($key == 2) {
											$cover = "cover1";
										} elseif ($key == 3) {
											$cover = "cover2";
										}
										?>
										<div class="bg-success rounded " style="background-image: url(<?php echo svg_url($cover); ?>);">
											<br>
											<center>
												<h1 style="color: #fff;">
													pack
													<?php
													echo getPriceByKey($key);
													?>
												</h1>
											</center>
											<br>
										</div>
									</div>
									<div class="col-lg-6">
										<h3 style="text-transform: lowercase;">
											Pack de
											<?php
											echo getPriceByKey($key);

											?>

										</h3>
										<span>
											ce pack vous permettra de gagner jusqu'a
											<?php
											echo getPriceByKey($key);

											?>
											par mois
										</span>
									</div>
									<div class="col-lg-2">
										<br>
										<?php
										if (isset($_SESSION["user"])) {
										?>
											<!--a href="cart-<--?= $key ?>"-->
											<a href="<?php echo site_url('Paiement/payer/' . $key) ?>">
												<button type="button" class="btn btn-lg btn-block btn-primary btn btn-primary btn-wide transition-3d-hover">continuer </button>
											</a>
										<?php
										} else {
										?>
											<a href="connexion">
												<button type="button" class="btn btn-lg btn-block btn-primary btn btn-primary btn-wide transition-3d-hover">se connecter </button>
											</a>
										<?php
										}
										?>
									</div>
									<div class="col-lg-1">
										<br><br>
										<a href="<?php echo site_url('panierController/annuler/' . $key); ?>"><img src="<?php echo svg_url('poubelle'); ?>" width="25"></a>
									</div>
								</div>
								<br><br>
							</div>
						<?php

						}
					}
					if (isset($_SESSION["panier"])) {
						if (count($_SESSION["panier"]) == 0) {
						?>
							<div class="row bg-white shad r-p p-5">
								<div class="col-lg-6">
									<div class="r-p bg-success w-15 p-3 text-center text-white">
										<img src="<?php echo svg_url('panier'); ?>" width="23">
									</div>
									<img src="<?php echo images_url('money.png'); ?>" width="200">
								</div>
								<div class="col-lg-6">
									<h3>
										Pack 0$
									</h3>
									Acheter un pack et recevez la totalite à chaque mois. Obtenez egalement plein de bonus dans notre plateforme <br><br>
									<a href="<?php echo site_url('welcome/index' . '#tarifs'); ?>">
										<button type="button" class="btn btn-lg btn-block btn-primary btn btn-primary btn-wide transition-3d-hover">Acheter un pack</button>
									</a>
								</div>
								<!--<div class="col-lg-6">
												<h3>
													Vous ,Marco carlos 
													
												</h3>
												avez souscrit au pack d'investissement de 200$<br>
												le 02/09/20 vôtre pack s'epuisera le 02/09/21
											</div>-->
							</div>
					<?php
						}
					}
					?>
				</div>
			</div>
		</section>
	</header>

</body>

</html>
<style type="text/css">
	#banniere {
		background-image: url(img/2.jpg);
		background-size: cover;
		height: 200px;
	}

	#petit_menu {
		box-shadow: 1px 2px 3px #e9e9e9;
	}

	#lg {
		list-style: none;
		display: table;
		line-height: 70px;
	}

	#lg li {
		display: table-cell;
		width: 350px;
		text-align: center;
	}

	#lg li a {
		text-decoration: none;
		color: #111;
	}
</style>
</body>

</html>