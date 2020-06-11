<?php 
  
  session_start();
  
  if ($_SESSION['login'] != "ok") {
    header("location: ./login.php");
  }
  

  $connL=mysqli_connect('127.0.0.1','root','','ristotemplate');

  $connR=mysqli_connect('127.0.0.1','root','','ristotemplate');

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> - Le mie Cucine</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../style.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

       <!-- Sidebar - Brand -->
       <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./dashboard.php">
        <div class="sidebar-brand-icon rotate-n-15">
          
        </div>
        <div class="sidebar-brand-text mx-3">Smart Menu<sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="./dashboard.php">
         
        <center><span>Dashboard</span></center></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <li class="nav-item active">
        <a class="nav-link" href="./creaCucina.php">
          
        <center><span>Cucine</span></center></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <li class="nav-item active">
        <a class="nav-link" href="./mieiPiatti.php">
          
        <center><span>Piatti</span></center></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <li class="nav-item active">
        <a class="nav-link" href="./mieiMenu.php">
         
        <center><span>Menù</span></center></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <li class="nav-item active">
        <a class="nav-link" href="./tavoli.php">
         
        <center><span>Tavoli</span></center></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <li class="nav-item active">
        <a class="nav-link" href="./categorie.php">
       
        <center><span>Categorie</span></center></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      
      

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Impostazioni</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="#">Modifica Profilo</a>
            <a class="collapse-item" href="logout.php">Logout</a>
          </div>
        </div>
      </li>

     

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content" style="margin-top:20px;">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Le mie Cucine</h1>
          </div>

          

          

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div>
                <div class="card shadow mb-4" style="width:1120px;">

                <!-- Card Header - Accordion -->
                <a href="#collapseNewKitchen" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseNewKitchen" style="width:1100px;">
                  <h6 class="m-0 font-weight-bold text-primary">Nuova Cucina</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse " id="collapseNewKitchen">


                 
                  <div class="card-body">
                    <form name="addCucina" method="POST" action="./addCucina.php">
                      <div class="form-group">
                        <label for="kitchenName">Nome Cucina</label>
                        <input type="text" class="form-control" id="kitchenName" name="kitchenName"  placeholder="Inserisci Nome Cucina">
                        
                      </div>
                      <div class="form-group">
                        <label for="kitchenDesc">Descrizione Cucina</label>
                        <textarea class="form-control" rows="3" id="kitchenDesc" name="kitchenDesc" placeholder="Inserisci descrizione Cucina"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary" style="margin-top:10px;">Aggiungi</button>
                    </form>
                  </div>
                </div>
            </div></div>
          </div>

          <div class="row">

            <!-- Content Column -->
            <div>
                <div class="card shadow mb-4" style="width:1120px;">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Le mie Cucine</h6>
                  </div>
                  <div class="card-body" width="100%">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" style="width:1065px;" cellspacing="0">
                        <thead>
                          <tr>
                            
                            <th style="width:300px;">Nome</th>
                            <th style="width:1100px;">Descrizione</th>
                            
                          </tr>
                        </thead>
                        
                        <tbody>
                          <?php 
                            $cucine=mysqli_query($connL, "select * from cucine");
                            while($cucina=mysqli_fetch_array($cucine))
                            {
                              echo "<tr>
                                    <th><a href='./mieiPiatti.php?cucina=".$cucina[0]."'>".$cucina[0]."</a></th>
                                    <th>".$cucina[1]."</th></tr>";
                            }
                          ?>
                        </tbody>
                    </div>
                  </div>
                </div>
            </div>
          </div>

       
      <!-- End of Main Content -->

      

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>

