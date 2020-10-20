<?php



?>




<body>
	<header>
		<div class="w-100" id="banniere">
			<div class="container-fluid" >
				<!-- ici c'est la banniere  -->
			</div>
		</div>
		<section>
			<div class="w-100 text-center">
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<!-- debut image de profile -->
							<img src="img/pro1.jpg" class="rounded-circle  img-fluid" width="55">
							<!-- fin image de profile -->
						</div>
						<div class="col-lg-3">
							<h3>
								Marco carlos
								<img src="img/good.png" width="17">
							</h3>
							<span class="text-muted">
								<small>cameroun <!-- pays de l'utilisateur --> </small>
							</span>	
						</div>
						<div class="col-lg-3">
							<div class="container">
								<div class="bg-light p-2 text-center r-p col " >
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
								1
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
								16
							</h3>
							<span class="text-muted" style="font-size: 13px;">
								<small>Nombre de compte affiliés</small>
							</span>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section>
			<div class="w-100">
				<div class="container-fluid text-center">
					&nbsp
					<div>
						<a href="dashboard_admin">
						<button class="btn btn-primary p-4 r-p shad">
							<small>ceci s'affiche si vous étes admin</small>
						</button>
						</a>
					</div>
				</div>
			</div>
		</section>
		<br>
		<section>
			<div class="bg-light r-p p-3">
				<div class="container text-center">
					<div class="row">
						<a href="affil">
							<div class="col text-center">
								<div class="container bg-white r-p shad p-3">
									
									<span class="text-dark">Mes affiliés</span>
								</div>
								
							</div>
						</a>
						<a href="parametres">
							<div class="col text-center">
								<div class="container bg-white r-p shad p-3">
									
									<span class="text-dark">paramètres du compte</span>
								</div>
								
							</div>
						</a>
						<a href="notifications">
							<div class="col text-center">
								<div class="container bg-white r-p shad p-3">
								
									<span class="text-dark">notifications</span>
								</div>
								
							</div>
						</a>
						<a href="payement">
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
					<div class="row bg-white shad r-p p-5">
						<div class="col-lg-6">
							<div class="r-p bg-success w-15 p-3 text-center text-white">
								<img src="svg/panier.svg" width="23">
							</div>
							<img src="img/money.png" width="200">
						</div>
						<div class="col-lg-6">
							<h3>
								Vous ,Marco carlos 
								<!-- le nom doit etre tirée de la base de donne pour étre affichee -->
							</h3>
							avez souscrit au pack d'investissement de 200$<br>
							le 02/09/20 vôtre pack s'epuisera le 02/09/21
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			
		</section>
	</header>
	
</body>
<style type="text/css">
	#banniere{
	background-image: url(img/2.jpg);
	background-size: cover;
	height: 200px;
	}
</style>



























<style type="text/css">
	#petit_menu{
		box-shadow: 1px 2px 3px #e9e9e9;
	}
	#lg{
		list-style: none;
		display: table;
		line-height: 70px;
	}
	#lg li{
		display: table-cell;
		width: 350px;
		text-align: center;
	}
	#lg li a{
		text-decoration: none;
		color: #111;
	}
</style>
</body>
</html>