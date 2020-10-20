<br><br><br><br>
<body>
	<header>
		<section>
			<div class="w-100">
				<div class="container">
					<div class="row"  style="margin-top: 2%">
						<div class="col-lg-6 p-4">
							<div class="container">
								<img src="img/ill1.webp" class="r-p img-fluid">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="container text-center">
								<h1>
									S'inscrire
								</h1>
								<br>
								<form action="http://localhost/africanBusiness/index.php/investisseur/ajout" method="POST">
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
										<input type="submit" name=""  class="btn btn-primary" style="background: #000;border:2px solid #000; " value="Nous Rejoindre !">
									</form>
								<small>
									j'ai déja un compte! <a href="connexion">se connecter</a>
								</small>
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
	input[type="password"]{
		width: 350px;
	
		font-family: Gordita Light,sans serif;
		font-size: 13px;
		background: #e9e9e9;
		cursor: text;

	}
	input[type="tel"]{
		width: 350px;
	
		font-family: Gordita Light,sans serif;
		font-size: 13px;
		background: #e9e9e9;
		cursor: text;

	}
	input[type="email"]{
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

<script>
	function verifymail($data){
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if(!re.test($data)) {
        alert('Merci d\'insérer un e-mail valide');
        this.mail="";
	}
</script>