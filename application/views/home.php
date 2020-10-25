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
    <br>
    <br><br><br><br>
	<header>
		<div class="" id="banniere">
			<div class="w-100" id="banniere-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6" id="banniere1">
							<div class="container">
								<img src="<?php echo images_url('iphone.png');?>" class="" width="500" height="650">
							</div>
						</div>
						<div class="col-lg-6">
							<br><br>
							<div class="container">
								<div class="row">
									<div class="col" style="margin-top: 10%">
										<h1 class="">
											Investissez une fois <br> Recevez chaque mois
										</h1>
										<p style="margin-top: 5%">
											<span>
												Grâce à ABI vous pouvez participer à l'investissement des Projets prometteurs et gagner le montant investi chaque 30 jours
											</span>
										</p>
										<a href="#wersind">
											<button class="w-50 p-3 btn btn-primary" style="margin-top: 5%">
												En savoir plus
											</button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		  <svg viewBox="0 0 1440 319">
	        <path fill="#f8f9fa" fill-opacity="1" d="M0,32L48,80C96,128,192,224,288,224C384,224,480,128,576,90.7C672,53,768,75,864,96C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
	      </svg>
		</div>
	
		<div class="w-100 bg-light p-3" id="wersind" >
			<br>
			<h2 class="text-center">
				ABI?
			</h2>
			<br>

			<div class="container">
				<div class="row text-center" style="margin-bottom: 5%">
					<div class="col-sm-1"></div>
					<div class="col-sm-10 text-center">
						<p>
							Africa bussiness International mêt à vôtre disposition.un contenu facile à gérer et à manipuler .Tout grâce à sa simplicité, vôtre inscription sur la platefoemr se fera en un clic.Vous allez récevoir des notifications instantanement aussitôt que vous dévriez étre payé
						</p>
					</div>
					<div class="col-sm-1"></div>
				</div>
			</div>
		</div>
		

		<div class="w-100 p-6" style="margin-bottom: 5%" id="services">
			<div class="container">
				<h2 class="text-center">
					Pourquoi investir chez ABI ?
				</h2>
				<br>
				<div class="row">
					<div class="col-lg-4 card12">
						<div class="card shad p-3" style="height: 98%;margin-top: 5%;text-align: center">
							<div class="card-title"  style="padding: 5%">
								 <h4>ABI est benefique</h4>
							</div>
							<div class="w-100 r-p text-center" id="card1">
								<img src="<?php echo svg_url('check');?>" width="100">
							</div>
							<div class="card-body">
								Plusieurs fois? Non! Investissez une seule fois chez ABI et vous recevrez 100% de la somme que vous avez investi à chaque 30 jour, et plein de bonus si vous avez des affiliés
							</div>
						</div>
					</div>
					<div class="col-lg-4 card12">
						<div class="card shad p-3" style="height: 98%;margin-top: 5%;text-align: center">
							<div class="card-title"  style="padding: 5%">
								 <h4>ABI est sécurisé</h4>
							</div>
							<div class="w-100 r-p text-center" id="card2">
								<img src="<?php echo svg_url('lock');?>" width="100">
							</div>
							<div class="card-body">
								Information ou transactions, tout ce que vous faites sur notre plateforme reste confidentiel et securisé (Inscription, achat des pack,affiliation, etc...)
							</div>
						</div>
					</div>
					<div class="col-lg-4 card12">
						<div class="card shad p-3" style="height: 98%;margin-top: 5%;text-align: center">
							<div class="card-title"  style="padding: 5%">
								 <h4>ABI est fiable</h4>
							</div>
							<div class="w-100 r-p text-center" id="card3">
								<img src="<?php echo svg_url('handshake');?>" width="100">
							</div>
							<div class="card-body">
								Apart le fait d'avoir un support à votre compte, ABI est une plateforme qui accomplir ses promesses .Plus de 100 Personnes nous font confiance à cause de nôtre fiabilité
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="w-100 bg-light p-10" id="tarifs">
			<h2 class="text-center">
				Profiter au maximum des packs d'investissemnts
			</h2>
			<br><br>
			<div class="container">
				<div class="row" >
					<div class="col-lg-4 div-prices" style="margin-bottom: 13%;">
	   					<div class="card shad r-p">
	   						<div class="card-title  text-center">
	   							<img src="<?php echo images_url('money.png');?>" width="240" class="im-card-top">
	   						</div>
	   						<div class="card-body">
	   							<h2>
	   								<b>
	   									10$ - 40$
	   								</b>
	   							</h2>
			   					<ul class="list-unstyled mt-3 mb-4 text-dark">
				                  <table>
				                    <tr>
				                      <td>
                                          <img src="<?php echo svg_url('check');?>" width="20">
				                      </td>
				                      <td>
				                          <li>Gagner 10$ chaque mois  </li>
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
                                          <img src="<?php echo svg_url('check');?>" width="20">
				                      </td>
				                      <td>
				                           <li>Notifications avant chaque paiement </li>
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
                                          <img src="<?php echo svg_url('check');?>" width="20">
				                      </td>
				                      <td>
				                           <li>inscription Gratuite</li>
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
                                          <img src="<?php echo svg_url('check');?>" width="20">
				                      </td>
				                      <td>
				                           <li>support email </li>
				                      </td>
				                    </tr>
				                  </table>
				                </ul>
								<a href="<?php echo site_url('panierController/addPanier/'.$id=1);?>">
				    				<button class="btn btn-success w-100 r-p ">
				    					Souscrire au pack
				    				</button>
				    			</a>
	   						</div>
	   					</div>
	   				</div>

	   				<div class="col-lg-4 div-prices" style="margin-bottom: 14%;">
	   					<div class="card shad r-p">
	   						<div class="card-title  text-center">
	   							<img src="<?php echo images_url('money.png');?>" width="240" class="im-card-top">
	   						</div>
	   						<div class="card-body">
	   							<h2>
	   								<b>
	   									50$ - 90$
	   								</b>
	   							</h2>
			   					<ul class="list-unstyled mt-3 mb-4 text-dark">
				                  <table>
				                    <tr>
				                      <td>
                                          <img src="<?php echo svg_url('check');?>" width="20">
				                      </td>
				                      <td>
				                          <li>Gagner 50$ chaque mois  </li>
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>				                        *
                                          <img src="<?php echo svg_url('check');?>" width="20">
				                      </td>
				                      <td>
				                           <li>Notifications avant chaque paiement </li>
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
                                          <img src="<?php echo svg_url('check');?>" width="20">
				                      </td>
				                      <td>
				                           <li>inscription Gratuite</li>
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
				                        <img src="<?php echo svg_url('check');?>" width="20">
				                      </td>
				                      <td>
				                           <li>support email et téléphone </li>
				                      </td>
				                    </tr>
				                  </table>
				                </ul>
				                 <a href="<?php echo site_url('panierController/addPanier/'.$id=2);?>">
				    				<button class="btn btn-success w-100 r-p ">
				    					Souscrire au pack
				    				</button>
				    				</a>
	   						</div>
	   					</div>
	   				</div>

	   				<div class="col-lg-4 div-prices" style="margin-bottom: 13%;">
	   					<div class="card shad r-p">
	   						<div class="card-title  text-center">
                                <img src="<?php echo images_url('money.png');?>" width="240" class="im-card-top">
	   						</div>
	   						<div class="card-body">
	   							<h2>
	   								<b>
	   									100$ - 200$
	   								</b>
	   							</h2>
			   					<ul class="list-unstyled mt-3 mb-4 text-dark">
				                  <table>
				                    <tr>
				                      <td>
                                          <img src="<?php echo svg_url('check');?>" width="20">
				                      </td>
				                      <td>
				                          <li>Gagner 100$ chaque mois </li>
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
                                          <img src="<?php echo svg_url('check');?>" width="20">
				                      </td>
				                      <td>
				                           <li>Notifications avant chaque paiement </li>
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
                                          <img src="<?php echo svg_url('check');?>" width="20">
				                      </td>
				                      <td>
				                           <li>inscription Gratuite</li>
				                      </td>
				                    </tr>
				                    <tr>
				                      <td>
                                          <img src="<?php echo svg_url('check');?>" width="20">
				                      </td>
				                      <td>
				                           <li>support email et téléphone </li>
				                      </td>
				                    </tr>
				                  </table>
				                </ul>
				                 <a href="<?php echo site_url('panierController/addPanier/'.$id=3);?>">
				    				<button class="btn btn-success w-100 r-p shad ">
				    					Souscrire au pack
				    				</button>
				    			</a>
	   						</div>
	   					</div>
	   				</div>
				</div>
			</div>
		</div>
		<br><br id="inscription">
		<div class="w-100">
			<h2 class="text-center" >
				S'inscrire
			</h2>
			<br>
			<div class="container">
				<div class="w-100">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 p-4">
								<div class="container">
				                    <img src="<?php echo images_url('ill1.webp');?>" width="100%">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="container text-center w-100">
									<form action="<?=site_url('/investisseur/ajout') ?>" method="POST" >
										<input type="text" name='parrain' placeholder="votre parrain ..."  class="btn btn-secondary mb-4" style="cursor: text;text-align: left;"/>

										<input type="text" name="nom" placeholder="name..." class="btn btn-light"
										style="cursor: text;text-align: left;">

										<br><br>

										<input type="text" name="pays" placeholder="votre pays..." class="btn btn-light"
										style="cursor: text;text-align: left;">										
										<br><br>

										<input type="tel" name="tel" placeholder="contact..." class="btn btn-light"
										style="cursor: text;text-align: left;">
										<br><br>

										<input type="email" name="mail" placeholder="email..." class="btn btn-light"
										style="cursor: text;text-align: left;">
										<br><br>

										<input type="password" name="mdp" placeholder="votre mot de passe..." class="btn btn-light"
										style="cursor: text;text-align: left;">
										<br><br>
										<input type="submit"  class="btn btn-primary" style="background: #000;border:2px solid #000; " value="Nous Rejoindre !">
									</form>
									<br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
	</header>

	<footer class="bg-dark text-white" id="contact">
	  <div class="row p-3 ">
	  	<div class="col-sm-4" style="padding: 2%">
		  <div  style="float: left;">
			  <img src="<?php echo images_url('logo.png');?>" style="width:30%;margin-top: 6px; margin-right:2%; float:left">
		  		<h1 style="margin-bottom: -3px;margin-top: -9px; "><a href="#" style="font-family: Trebuchet MS"> ABI</a></h1>
				<small><a href="">African Business International</a></small><br>
				<ul class="list-unstyled">
					<li><small><a class="text-muted" href="#">59000 Lille, France</a></small></li>
				</ul>
		  </div>
		</div>
      <!--div class="col-lg-3 ">
       <h3 class="text-white">
         ABI
       </h3>
        <small>
         ABi est une plateforme d'investissement dans laquelle vous investiser sur des startups prométeusse et entant que actionnaire vous gagnerai une part des profils réalisées par ces startups
        </small>
      </div-->
	  <div class="col-sm-3" style="padding: 2%">
		<h5 style="color: #fff;">Liens utiles</h5>
			<ul class="list-unstyled text-small">
			<li><a class="text-muted" href="<?php echo site_url('welcome/index'.'#inscription');?>">Inscription</a></li>
			<li><a class="text-muted" href="<?php echo site_url('loginController/index');?>">connexion</a></li>
			<li><a class="text-muted" href="<?php echo site_url('welcome/index'.'#tarifs');?>">Packs</a></li>
			<li><a class="text-muted" href="<?php echo site_url('welcome/index'.'#services');?>">Services</a></li>
			</ul>
		</div>
      <!--div class="col-lg-3 ">
        <br><br>
        <h5 style="color: #fff;">Liens utiles</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="inscription">Inscription</a></li>
          <li><a class="text-muted" href="connexion">connexion</a></li>
          <li><a class="text-muted" href="home#tarifs">Tarifs</a></li>
        </ul>
      </div-->
		<div class="col-sm-3" style="padding: 2%">
			<h5 style="color: #fff;">contact</h5>
			<ul class="list-unstyled text-small">
				<li><a class="text-muted" href="#">Tél : 06 95 52 62 89</a></li>
				<li><a class="text-muted" href="#">Notre compte facebook</a></li>
				<li><a class="text-muted" href="mailto:africanbusinessinternational1@gmail.com">africanbusinessinternational1@gmail.com</a></li>
			</ul>
		</div>
      <!--div class="col-lg-3 ">
        <br><br>
        <h5 style="color: #fff;">contact</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="mailto:carlitanalyse@gmail.com"><small>marcocarlos@gmail.com</small></a></li>
          <li><a class="text-muted" href="#">Tél : 06 95 52 62 89</a></li>
           <li><a class="text-muted" href="#">59000 Lille, France</a></li>
          
        </ul>
      </div-->
	</footer>
</body>
<style type="text/css">
	#pbtn{
		background:#727cf5;
		border:2px solid #727cf5;
	}
	#carde{
		width: 700px;
	}
	.text-gold{
		color: #DBAE00;
	}
	#circle{
		width: 70px;
		height: 70px;
	}
	#moveup{
		position: relative;top: -120px;
		left: 40px;
	}
	#card1{
		background-image: url(img/cover.svg);
	}
	/*.input-field input[type="text"]{
		border-bottom: 2px solid #727cf5;
	}*/
	@media(max-width: 770px){
		#banniere1{
			display: none;
		}
		#meinung{
			position: relative;top: -110px;
		}
		.div-prices{
			height: 530px;
		}
		.card12{
			height: 450px;
		}
		
	}
	
	@media(max-width: 400px){
		.div-prices{
			height: 530px;
		}
	}
</style>