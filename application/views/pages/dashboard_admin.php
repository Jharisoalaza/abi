
<br><br>
  <body>
    <div class="container-fluid" style="float: left;">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-white sidebar shad r-p" >
          <div class="sidebar-sticky">
            <ul class="nav flex-column text-center">
              <li class="nav-item text-center">
                <a class="nav-link " href="dashboard_admin">
                  <br><br>
                  <span data-feather="home"></span>
                  <img src="svg/user.svg" width="70" class="rounded-circle" style="border:7px solid #e9e9e9;">
                 <h3>
                    Marco carlos
                 </h3>Admin
                 <br>

                </a>
                <hr>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin_clients">
                <span data-feather="file"></span>
                 <img src="svg/users.svg" width="25"><br>&nbsp clients
                </a>
                <hr>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="admin_email">
                  <span data-feather="shopping-cart"></span>
                  <img src="svg/video1.svg" width="25"><br>&nbspEmails envoyés
                </a>
                <hr>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="admin_visites">
                  <span data-feather="shopping-cart"></span>
                  <img src="svg/video2.svg" width="25"><br>visites 
                </a>
                <hr>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin_abonnes">
                  <span data-feather="users"></span>
                  <img src="svg/users.svg" width="25"><br>&nbspAbonnées
                </a>
                <hr>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin_contacts">
                  <span data-feather="bar-chart-2"></span>
                  <img src="svg/phone.svg" width="25"><br>&nbspcontacts
                </a>
                <hr>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="log/deconnexion.php">
                  <span data-feather="layers"></span>
                  <img src="svg/door.svg" width="25"><br>&nbspDéconnexion
                </a>

              </li>
            </ul>

            
          </div>
        </nav>

      
            <?php

              if (isset($_GET["q"])) {
               $q=htmlspecialchars($_GET["q"]);
              }else{
                 $q="home";
              }

               if ($q=="home") {
                require 'd/dashboard_home.php';
               }
               elseif ($q=="clients") {

                require 'd/dashboard_users.php';
               }
               elseif ($q=="email") {

                require 'd/dashboard_email.php';
               }
               elseif ($q=="visites") {

                require 'd/dashboard_visites.php';
               }
               elseif ($q=="abonnes") {

                require 'd/dashboard_abonnes.php';
               }
               elseif ($q=="contacts") {

                require 'd/dashboard_contacts.php';
               }
               elseif ($q=="tr") {
                require 'd/dashboard_video_tr.php';
               }

             ?>
          </h1>
        </main>
      </div>
    </div>

  <style type="text/css">
    @media(max-width: 770px){
    .card11{
      height: 150px;
    }
    
  }
  </style>

</body></html>