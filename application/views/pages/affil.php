<?php
0
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
								<img src="img/good.png" width="17"> - Affiliation
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
						<form action="http://localhost/africanBusiness/index.php/investisseur/getAffilie" method="GET"></form>
							<table class="table col-sm-11" style="margin-left: 5%; margin-right:2%">
								<thead class="bg-light">
									<td>Nom</td>
									<td>Prenom</td>
									<td>Mail</td>
									<td>Pays</td>
									<td>Representant</td>
								</thead>
								<?php
                                foreach ($investisseur as $affil){
                            	?>
									<tbody>
										<td><?php echo $affil->nomInvestisseur;?></td>
										<td><?php echo $affil->prenomInvestisseur;?></td>
										<td><?php echo $affil->mailInvestisseur;?></td>
										<td><?php echo $affil->paysInvestisseur;?></td>
										<td><?php echo $affil->codeRepresentant;?></td>
									</tbody>
								<?php
                                }
                            	?>
							</table>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="w-100 r-p bg-white">
				<div class="container-fluid">

				</div>
			</div>
		</section>
	</header>
	
</body>
<style type="text/css">
	#banniere{
	background-image: url(img/2.jpg);
	background-size: cover;
	height: 200px;
	}

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