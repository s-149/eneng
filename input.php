<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Validation Form</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
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

          <!-- Sidebar Menu -->
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
  <!-- Content Wrapper. Contains page content -->
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

  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                 <h3 class="card-title" >Input Data<!--  <small>jQuery Validation</small> --></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="input-proses.php">
                <div class="card-body">
                 <tr>
   <div class="form-group">
    <td>NIK</td>
    <td>:</td>
    <td><input name="nik" class="form-control" type="text" size="25" maxlength="150" required></td>
  </div>
  </tr>
                 <tr>
   <div class="form-group">
    <td>Name</td>
    <td>:</td>
    <td><input name="nama1" class="form-control"  type="text" size="25" maxlength="50" required></td>
  </div>
  </tr>
 <tr>
   <div class="form-group">
    <td>Address</td>
    <td>:</td>
    <td><input name="alamat1" class="form-control" type="text" size="25" maxlength="50" required></td>
  </div>
  </tr>
  <tr>
   <div class="form-group">
    <td>Nationality</td>
    <td>:</td>
    <td><input name="kewarganegaraan" class="form-control" type="text" size="25" maxlength="50" required></td>
  </div>
  </tr>
 <tr>
   <div class="form-group">
    <td>Business Fields</td>
    <td>:</td>
    <td><input name="bidangusaha" class="form-control" type="text" size="25" maxlength="50" required></td>
  </div>
  </tr>
  <tr>
   <div class="form-group">
    <td>Receive Kredit Usaha Rakyat ( KUR )</td>
    <td>:</td>
    <td><select class="form-control" name="kriteria1" required>
    <option value="">Option</option>
    <option value="90">Yes</option>
    <option value="10">No</option>
    </td>
    </select>
  </div> 
    </tr>
 <tr>
   <div class="form-group">
    <td>Receive Surat Keterangan Usaha ( SKU )</td>
    <td>:</td>
    <td><select class="form-control" name="kriteria2" required>
  <option value="">Option</option>
  <option value="80">Yes</option>
  <option value="10">No</option>
  </select>
  </td>
</div>
  </tr>
  <tr>
   <div class="form-group">
    <td>Revenue</td>
    <td>:</td>
    <td><select class="form-control" name="kriteria3" required>
    <option value="">Option</option>
    <option value="70">< Rp. 5.000.000</option>
    <option value="10">>Rp. 5.000.000</option>
      </select>
    </td>
  </div>
    </tr>
    <tr>
   <div class="form-group">
    <td>Expenditure</td>
    <td>:</td>
    <td><select class="form-control" name="kriteria4" required>
    <option value="">Option</option>
    <option value="10">< Rp. 5.000.000</option>
    <option value="70">>Rp. 5.000.000</option>
      </select>
    </td>
  </div>
    </tr>
   <tr>
   <div class="form-group">
    <td>Civil Serpant</td>
    <td>:</td>
    <td><select class="form-control" name="kriteria5" required>
  <option value="">Option</option>
  <option value="60">Yes</option>
  <option value="10">No</option>

  </select>
 
 </td>
</div>
  </tr>
                 <td>&nbsp;</td>
    <td>&nbsp;</td>
    <div class="card-footer">
    <td><input class="btn btn-primary" name="Submit" type="submit" value="Submit"></td>
  </div>
    </tr>
</td></div>
</table>
</hr>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <!-- <div class="float-right d-none d-sm-block"> -->
    <!--   <b>Version</b> 3.0.4
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
<!-- jquery-validation -->
<script src="adminlte/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="adminlte/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="adminlte/dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>
