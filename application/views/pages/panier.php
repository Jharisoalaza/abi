<?php

//session_start();
?>



<br><br><br><br>
<div class="container">
	<h2>
		<center>
			<img src="svg/panier.svg" width="70"> Panier des commandes

		</center>
	</h2><br>
	<?php
	// je verifie la varriable $_session["panier"] si elle contient des elements jentres dans le if sinon j'affiche que il a aucun element dans le panier

	if (isset($_SESSION["panier"])) {
		$panier = $_SESSION["panier"];
	} else {
	?>
		<div class="text-center">
			<b>
				Panier vide !
			</b>
			<br><bR>
			<img src="svg/empty-cart.svg" width="200">
		</div>
		<?php
	}

	// je parcoure le tableau des elements dans le panier tu peu faire var_dump($_SESSION["panier"]);  pour voir ce quil contient

	if (isset($_SESSION["panier"])) {
		foreach ($panier as $key => $value) {
			// echo $key;
		?>
			<div class="container">
				<div class="row p-4 shad r-p">
					<div class="col-lg-3">
						<?php
						if ($key == 1) {
							$cover = "cover.svg";
						} elseif ($key == 2) {
							$cover = "cover1.svg";
						} elseif ($key == 3) {
							$cover = "cover2.svg";
						}
						?>
						<div class="bg-success rounded " style="background-image: url(svg/<?= $cover; ?>);">
							<br>
							<center>
								<h1 style="color: #fff;">
									pack
									<?php
									if ($key == 1) {
										echo "10€";
									} elseif ($key == 2) {
										echo "50€";
									} elseif ($key == 3) {
										echo "100€";
									}
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
							if ($key == 1) {
								echo "10€";
							} elseif ($key == 2) {
								echo "50€";
							} elseif ($key == 3) {
								echo "100€";
							}
							?>

						</h3>
						<span>
							ce pack vous permettra de gagner jusqu'a
							<?php
							if ($key == 1) {
								echo "10€";
							} elseif ($key == 2) {
								echo "50€";
							} elseif ($key == 3) {
								echo "100€";
							}
							?>
							par mois
						</span>
					</div>
					<div class="col-lg-2">
						<br>
						<?php

						if (isset($_SESSION["id"])) {
						?>
							<a href="cart-<?= $key ?>">
								<button type="button" class="btn btn-lg btn-block btn-primary btn btn-primary btn-wide transition-3d-hover">continuer </button>
							</a>
						<?php
						} else {
						?>
							<a href="connexion">
								<button type="button" class="btn btn-lg btn-block btn-primary btn btn-primary btn-wide transition-3d-hover">
									se connecter
								</button>
							</a>
						<?php
						}


						?>
					</div>
					<div class="col-lg-1">
						<br><br>
						<a href="function/let.php?id=<?= $key ?>"><img src="svg/poubelle.svg" width="25"></a>
					</div>
				</div><br><br>
			</div>
		<?php

		}
	}
	if (isset($_SESSION["panier"])) {
		if (count($_SESSION["panier"]) == 0) {
		?>
			<div class="text-center">
				<b>
					Panier vide !
				</b><br><bR>
				<img src="svg/empty-cart.svg" width="200">
			</div>
	<?php
		}
	}
	?>

</div>