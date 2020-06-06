<?php 
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

  <title> - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="./../style.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          
        </div>
        <div class="sidebar-brand-text mx-3">Nuovo Piatto<sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <li class="nav-item active">
        <a class="nav-link" href="cucine.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Cucine</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <li class="nav-item active">
        <a class="nav-link" href="piatti.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Piatti</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <li class="nav-item active">
        <a class="nav-link" href="menu.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Menù</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

     

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
            <h1 class="h3 mb-0 text-gray-800">Nuovo Piatto</h1>
          </div>

          

          

          <!-- Content Row -->
          <div class="row">

            <div class="card shadow mb-4" style="height:700px; width:1120px;">
                
                  <div class="card-body">
                      <div class="col-lg-4 mb-4" style="float:left;">
                        <div class="picPiatto">
                        </div>
                      </div>

                      <div class="col-lg-8 mb-4"  style="float:right;">
                        

                        <form method="POST" action="./addPiatto.php">
                          <div class="form-group">
                            <label for="nomePiatto">Nome Piatto</label>
                            <input type="email" class="form-control" id="nomePiatto"  placeholder="Inserisci Nome">
                          </div>
                          <div class="form-group">
                            <label for="descPiatto">Descrizione Piatto</label>
                            <textarea class="form-control" id="descPiatto" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Scegli Cucina</label>
                              <select class="form-control" id="cucina">
                                        <option value="*">Tutte</option>
                                        <?php 
                                            $cucine=mysqli_query($connL, "select * from cucine");
                                            while($cucina=mysqli_fetch_array($cucine))
                                            {
                                              echo "<option value=".$cucina[0].">".$cucina[0]."</option>";
                                            }
                                        ?>
                              </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Scegli Categoria</label>
                              <select class="form-control" id="categoria">
                                        <option value="*">Tutte</option>
                                        <?php 
                                            $cucine=mysqli_query($connL, "select * from categorie");
                                            while($cucina=mysqli_fetch_array($cucine))
                                            {
                                              echo "<option value=".$cucina[0].">".$cucina[1]."</option>";
                                            }
                                        ?>
                              </select>
                          </div>
                          <div class="form-group">
                            <label for="descPiatto">Lista Ingredienti</label>
                            <textarea class="form-control" id="ingredienti" rows="3"></textarea>
                          </div>
                          <button type="submit" style="float:right;"class="btn btn-primary">Aggiungi</button>

                        </form>

                      </div>
                  </div>
            </div>
          </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; SmartMenu 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

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

