<nav class="navbar navbar-expand-md navbar-white fixed-top bg-white text-center shad" id="nav" id="nav1">
    <a class="navbar-brand" href="#">
     <h1>
       <img src="<?php echo images_url('logo.png');?>" alt="" srcset="" style="width: 90%">
     </h1>
    </a>
    <button class="navbar-toggler rounded-circle" type="button" data-toggle="collapse" data-target="#navbarCollapse"  aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="background: #e9e9e9;width: 60px;height: 60px;">
      <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
        <path fill="currentColor" d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z"></path>
      </svg>
    </button>
    <div class="collapse navbar-collapse text-center " id="navbarCollapse">
      <ul class="navbar-nav mr-auto p-4">
        <li class="nav-item active" id="home">
          <a class="nav-link  " href="<?php echo site_url('welcome/index');?>" style="color: #000;">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-muted" href="<?php echo site_url('welcome/index'.'#services');?>">services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-muted" href="<?php echo site_url('welcome/index'.'#tarifs');?>">Packs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-muted" href="<?php echo site_url('welcome/index'.'#contact');?>">contacts</a>
        </li>
       
      </ul>
         <form class="form-inline mt-12 mt-md-0 p-3">
              <ul class="navbar-nav">
                <li class="nav-item" id="panier">
                  <a class="nav-link text-muted" href="<?php echo site_url('panierController/index');?>">
                    <img src="<?php echo svg_url('panier');?>" width="26" />
                    <span class="sec counter counter-lg bg-success p-2 rounded text-white">
                      <?php 
                      if(isset($_SESSION["panier"])){
                        echo count($panier=$_SESSION["panier"]);
                      }else{
                        echo 0;
                      }
                      
                      ?>
                    </span>
                  </a>
              </li>
              <li class="nav-item" id="panier">
                  <a class="nav-link text-muted" href="notifications">
                    <img src="<?php echo svg_url('cloche');?>" width="26" />
                    <span class="sec counter counter-lg bg-success p-2 rounded text-white">
                     0
                    </span>
                  </a>
              </li>
              <li class="nav-item" id="panier">
                  <a class="nav-link text-muted" href="<?php echo site_url('loginController/index');?>">
                    <small>
                      <?php 
                        (isset($_SESSION['username'])? printf('Mon compte'): printf('Se connecter'));
                      ?>
                    </small>
                  </a>
              </li>
            </ul>
          </form>
    </div>
</nav>


