<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="adminlte/#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="home.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="adminlte/#" class="nav-link">Contact</a>
      </li>
    </ul>


      <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="adminlte/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="adminlte/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="adminlte/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
       <li class="nav-item d-none d-sm-inline-block" >
        <a href="logout.php" class="nav-link" >Log Out</a></font>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home.php" class="brand-link">
      <img src="adminlte/dist/img/kemensos.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">KEMENSOS RI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="adminlte/dist/img/NP.png"  alt="User Image">
        </div>
        <div class="info">
          <a class="d-block">SI - UNIV. NUSAPUTRA</a>
        </div>
      </div>
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-item has-treeview">
            <a href="input.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Input Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
           </li>
          <li class="nav-item has-treeview">
            <a href="view.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Output Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="normalisasi.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Normalization
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="rangking.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Rank
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-2">
            <div style='text-align:center;'>
            <img src="images/kemensos.png" alt="Flowers in Chania" width="100" height="100"></div>
          </div><!-- /.col -->
          <div class="col-sm-10">
            <div style='text-align:justify;'><strong>
            <h1 class="m-0 text-dark">OPTIMIZATION OF MODELING TECHNIQUES FOR ECONOMIC RECOVERY INFORMATION SYSTEMS AFTER THE COVID-19 PANDEMIC WITH SIMPLE ADDITIVE WEIGHTING</strong></h1></div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

       <section class="content">        
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">RANK DATA</h3>
            </div>

 <?php
  //Gunakan Koneksi
  include("koneksi.php");
  //Buat array bobot { C1 = 40%; C2 = 25%; C3 = 30%;}
  $bobot = array(0.30,0.20,0.10,0.15,0.25);

  //Lakukan Normalisasi dengan rumus pada langkah 2
  //Cari Max atau min dari tiap kolom Matrik
  // $crMax = mysql_query("SELECT min(kriteria1) as minK1, 
  //           max(kriteria2) as maxK2,
  //           max(kriteria3) as maxK3,
  //            min(kriteria4) as minK4,
  //           min(kriteria5) as minK5
  //           FROM tbl_matrik");
  // $max = mysql_fetch_array($crMax);
  $crMax = mysql_query("SELECT max(kriteria1) as maxK1, 
                        max(kriteria2) as maxK2,
                        max(kriteria3) as maxK3,
                        max(kriteria4) as maxK4,
                        max(kriteria5) as maxK5
                        FROM `tbl_matrik`");
  $max = mysql_fetch_array($crMax);

   $crMin = mysql_query("SELECT min(kriteria1) as maxK1, 
                        min(kriteria2) as maxK2,
                        min(kriteria3) as maxK3,
                        min(kriteria4) as maxK4,
                        min(kriteria5) as maxK5
                        FROM `tbl_matrik`");
  $min = mysql_fetch_array($crMin);


  //Buat fungsi tampilkan nama
  function getNama($id){
    $q =mysql_query("SELECT * FROm tbl_warga where nik = '$id'");
    $d = mysql_fetch_array($q);
    return $d['nama'];
  }

?>
                  <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Names</th>
                  <th>Rank</th>
                  <th>Status</th>
                  
                </tr>
                </thead>
                <?php
                  $sql3 = mysql_query("SELECT * FROM tbl_matrik");
  // // //Buat tabel untuk menampilkan hasil
  // // echo "
  // // <table id='example' class='display' cellspacing='0' width='100%'>
  // //   <thead>
  // //   <tr align='center'>
  // //     <td>No</td>
  // //     <td>Names</td>
  // //     <td>Rank</td>
  // //     <td>Status</td>
  // //   </tr>
  // //   </thead>
  //   ";
  $no = 1;
  //Kita gunakan rumus (Normalisasi x bobot)
  while ($dt3 = mysql_fetch_array($sql3)) {
    $rangking = round((($min['maxK1']/$dt3['kriteria1'])*$bobot[0])+
      (($dt3['kriteria2']/$max['maxK2'])*$bobot[1])+
      (($dt3['kriteria3']/$max['maxK3'])*$bobot[2])+
      (($min['maxK4']/$dt3['kriteria4'])*$bobot[3])+
      (($min['maxK5']/$dt3['kriteria5'])*$bobot[4]),2);
    $_kriteria1=$dt3['kriteria1'];
    $_kriteria2=$dt3['kriteria2'];
    $status = $rangking;
      if ($_kriteria1 == 90 and $_kriteria2 == 80){
        $status = 'Unworthy kriteria1 == 90 and kriteria2 == 80 ';
      }
      elseif ($_kriteria1 == 90 ){
        $status = 'Unworthy kriteria1 == 90';
      }
      elseif ($_kriteria2 == 80 ){
        $status = 'Unworthy kriteria2 == 80 ';
      }
      elseif ($status >= 0.99){
        $status = 'Worthy';
      } else {
        $status = 'Unworthy';
      }
      
    echo "<tr>
      <td align='center'>$no</td>
      <td>".getNama($dt3['nik'])."</td>
      <td align='center'>$rangking</td>
      <td align='center'>$status</td>
    </tr>";
  $no++;
  }
  
  echo "</table>";

?>
              
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
  <!--   <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.4
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved. -->
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="adminlte/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
