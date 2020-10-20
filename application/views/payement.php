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
								<img src="<?php echo images_url('pro1.jpg');?>" class="rounded-circle  img-fluid" width="55">
								<!-- fin image de profile -->
							</div>
							<div class="col-lg-3">
								<h3>
									Marco carlos
									<img src="<?php echo images_url('good.png');?>" width="17">
								</h3>
								<span class="text-muted">
									<small>cameroun <!-- pays de l'utilisateur --> </small>
								</span>	
							</div>
                            <div class="col-lg-3">
                                <a href="home#tarifs">
                                    <div class="container">
                                        <div class="bg-light p-2 text-center r-p col " >
                                            <small>Acheter un pack</small>
                                        </div>
                                    </div>
                                </a>
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
                <div class="w-100 r-p bg-white  text-center">
                    <div class="container-fluid">
                        <div class="row">
                            <?php 
                                // je parcoure le tableau des elements dans le panier tu peu faire var_dump($_SESSION["panier"]);  pour voir ce quil contient

                                if (isset($_SESSION["panier"])) {
                                    foreach ($panier as $key => $value) {
                                    // echo $key;
                                    ?>
                                        <div class="container">
                                            <div class="row p-4 shad r-p" >
                                            <div class="col-lg-3">
                                                <?php 
                                                    if ($key==1) {
                                                        $cover="cover";
                                                    }elseif ($key==2) {
                                                        $cover="cover1";
                                                    }elseif ($key==3) {
                                                        $cover="cover2";
                                                    }
                                                ?>
                                                <div class="bg-success rounded " style="background-image: url(<?php echo svg_url($cover);?>);">
                                                    <br>
                                                    <center>
                                                        <h1 style="color: #fff;">
                                                            pack 
                                                            <?php 
                                                                if ($key==1) {
                                                                    echo "10€";
                                                                }elseif ($key==2) {
                                                                    echo "50€";
                                                                }elseif ($key==3) {
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
                                                        if ($key==1) {
                                                                    echo "10€";
                                                                }elseif ($key==2) {
                                                                    echo "50€";
                                                                }elseif ($key==3) {
                                                                    echo "100€";
                                                                }
                                                    ?> 
                                                    
                                                </h3>
                                                <span>
                                                    ce pack vous permettra de gagner jusqu'a 
                                                    <?php 
                                                        if ($key==1) {
                                                                    echo "10€";
                                                                }elseif ($key==2) {
                                                                    echo "50€";
                                                                }elseif ($key==3) {
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
                                                            <a href="cart-<?=$key?>">
                                                            <button type="button" class="btn btn-lg btn-block btn-primary btn btn-primary btn-wide transition-3d-hover">continuer </button>
                                                        </a>
                                                        <?php
                                                    }else{
                                                        ?>
                                                            <a href="<?php echo site_url('paiement/payer');?>">
                                                            <button type="button" class="btn btn-lg btn-block btn-primary btn btn-primary btn-wide transition-3d-hover">Payer</button>
                                                        </a>
                                                        <?php
                                                    }
                                                ?>
                                            </div>
                                            <div class="col-lg-1">
                                                <br><br>
                                                <a href="<?php echo site_url('panierController/annuler/'.$key);?>"><img src="<?php echo svg_url('poubelle');?>" width="25"></a>
                                            </div>
                                        </div><br>
                                        </div>
                                    <?php
                                    
                                    }
                                }
                                if (isset($_SESSION["panier"])) {
                                    if (count($_SESSION["panier"])==0) {
                                    ?>
                                    <div class="text-center">
                                        <b>
                                            Panier vide !
                                        </b>
                                        <br><br>
                                        <img src="<?php echo svg_url('empty-cart');?>" width="200">
                                    </div>
                                    <?php
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        </header>
    </body>
</hmtl>


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