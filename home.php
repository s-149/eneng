<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>SISTEM BANTUAN UMKM</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
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
        <a class="nav-link" data-toggle="dropdown" href="adminlte/#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="adminlte/#" class="dropdown-item">
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
          <a href="adminlte/#" class="dropdown-item">
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
          <a href="adminlte/#" class="dropdown-item">
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
          <a href="adminlte/#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="adminlte/#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="adminlte/#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="adminlte/#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="adminlte/#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="adminlte/#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="adminlte/#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block" >
        <a href="logout.php" class="nav-link" >Log Out</a></font>
      </li>
      </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
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
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">CPU Traffic</span>
                <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sales</span>
                <span class="info-box-number">760</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">2,000</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

             <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title"><strong>SMensos Dorong Pilar-Pilar Sosial dalam Gerakan Pencegahan COVID-19</strong></h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div class="btn-group">
                                        <!-- <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button> -->
                   <!--  <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="adminlte/#" class="dropdown-item">Action</a>
                      <a href="adminlte/#" class="dropdown-item">Another action</a>
                      <a href="adminlte/#" class="dropdown-item">Something else here</a>
                      <a class="dropdown-divider"></a>
                      <a href="adminlte/#" class="dropdown-item">Separated link</a>
                    </div> -->
                  </div>
                  <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button> -->
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                   <!--  <p class="text-center">
                      <strong>SMensos Dorong Pilar-Pilar Sosial dalam Gerakan Pencegahan COVID-19</strong>
                    </p> -->

                     <style type="text/css">
  body{
   margin: unset;
/*   overflow: hidden;*/
  }
  .utama{
   width: 100%;
   overflow: hidden;
  }.isi{
   width: 50%;
   height: 100%;
   margin: auto;
   overflow: hidden;
  }.isi_gambar{
   width: 25%; 
   float: left;  
  }.isi10{
   width: 400%;
   
  }
  .utama img{
   width: 100%;
   float: left;
  }
 </style>
</head>
<body>
 <div class="utama">
  <div class="isi">
   <div class="isi10" id="slide">
    <div class="isi_gambar" >
     <img id="slide" src="images/1.jpg">
    </div>
    <div class="isi_gambar">
     <img id="slide" src="images/2.jpg">
    </div>
    <div class="isi_gambar">
     <img id="slide" src="images/3.jpg">
    </div>
    <div class="isi_gambar">
     <img id="slide" src="images/4.jpg">
    </div>
    <!--  <div class="isi_gambar" >
     <img id="slide" src="images/5.jpg">
    </div>
     <div class="isi_gambar">
     <img id="slide" src="images/6.jpg">
    </div>
     <div class="isi_gambar">
     <img id="slide" src="images/7.jpg">
    </div>
     <div class="isi_gambar">
     <img id="slide" src="images/8.jpg">
    </div>
     <div class="isi_gambar">
     <img id="slide" src="images/9.jpg">
    </div>
     <div class="isi_gambar">
     <img id="slide" src="images/10.jpg">
    </div>
     <div class="isi_gambar">
     <img id="slide" src="images/11.jpg">
    </div>
     <div class="isi_gambar">
     <img id="slide" src="images/12.jpg">
    </div>
     <div class="isi_gambar">
     <img id="slide" src="images/13.jpg">
    </div> -->
   </div>
   
  </div>
  
 </div>
 <script type="text/javascript">
  var a=-100;
  setInterval(function(){
   if (a!=0) {
    slide = document.getElementById('slide');
    slide.style="margin-left:"+a+"%;transition: 1s ease-in;";
    if (a== -400) {
     a=0;
    }else{
     a=a+-100;
    }
    return a;

   }else{
    slide = document.getElementById('slide');
    slide.style="margin-left:"+a+"%;";
    if (a== -400) {
     a=0;
    }else{
     a=a+-100;
    }
    return a;
   }

  }, 2000);
</script>


<div style='text-align:justify;'>
  <a><p><strong>JAKARTA (20 Maret 2020) </strong>- Menteri Sosial Juliari P. Batubara mendorong kepada pilar-pilar sosial agar tampil menjadi pelopor gerakan pencegahan penyebaran virus korona di tempat tugas masing-masing. Mereka bisa bersinergi dengan pemerintah daerah atau dengan potensi sosial lainnya.</p>

 <p>

“Saya minta pilar-pilar sosial menjadi motor dan pelopor dari gerakan pencegahan penyebaran virus korona. Dalam tugasnya kan mereka bersentuhan langsung dengan masyarakat. Jadi mereka adalah garda depan Kementerian Sosial,” kata Mensos di Jakarta, Jumat (20/03/2020).</p>

 

 <p>Pilar sosial merupakan relawan berbasis masyarakat yang bermitra dengan Kementerian Sosial dalam mengimplementasikan berbagai agenda pembangunan kesejahteraan sosial. Mereka adalah Pekerja Sosial Masyarakat (PSM), Tenaga Kesejahteraan Sosial Kecamatan (TKSK), Karang Taruna (KT), Taruna Siaga Bencana (Tagana), dan Lembaga Kesejahteraan Sosial (LKS) yang tersebar di seluruh penjuru Tanah Air.</p>

 

 <p>Menurut Mensos, peran mereka dalam penanganan masalah sosial selama ini, sudah teruji. Dengan bersinergi dengan pemerintah daerah dan instansi terkait dimana mereka bertugas, pilar sosial berhasil mencari alternatif solusi terhadap berbagai tantangan yang dihadapi bangsa.</p>

 

 <p>“Selama ini mereka bisa memberikan kontribusinya dalam berbagai upaya mengelola dan menangani masalah sosial seperti bencana alam, bencana sosial, dan berbagai dinamika baik lokal maupun nasional. Saya yakin mereka sudah teruji dengan berbagai situasi dan tantangan. Jadi dalam menghadapi pandemi virus korona, saya juga yakin mereka pun bisa mengambil peran positif,” kata Mensos.</p>

 

 <p>Mensos yakin, dengan pengalaman yang cukup panjang, pilar sosial juga bisa mengambil peran berarti. Pilar sosial dianggap mengenal daerah masing-masing. Di lain pihak, sebagian dari mereka merupakan pendamping untuk penerima manfaat.</p>

 

 <p>“Mereka bisa menyosialisasikan berbagai kebijakan pemerintah, baik di pusat maupun di daerah, terkait percepatan pemberantasan virus korona masyarakat atau penerima manfaat yang mereka dampingi. Mereka juga bisa menggugah kesadaran masyarakat agar, misalnya, taat pada anjuran pemerintah untuk tetap tinggal di rumah,” kata Mensos.</p>

 

 <p>Tentu saja, dalam melaksanakan himbuan tersebut, perlu kehati-hatian, dan memperhatikan keselamatan dan kesehatan diri dan lingkungan. “Untuk sosialisasi langkah-langkah pencegahan penyebaran virus, jangan lupakan ketentuan yang sudah digariskan. Misalnya, dengan memperhatikan social distancing . Memakai pelindung diri, seperti masker, dan sebagainya,” kata mantan Ketua Ikatan Motor Indonesia (IMI) Pusat ini.</p>

 

 <p>Selain itu, kata Mensos, pilar sosial juga bisa bersinergi dengan pemerintah daerah, tokoh masyarakat, dan potensi sosial setempat, dengan jalan mendorong berbagai program atau gerakan yang mempercepat pemberantasan virus korona.</p></p>

 

 <p>“Bisa bersama-sama melakukan penyemprotan disinfektan untuk fasilitas umum, rumah ibadah, atau hal-hal lain yang dirasakan membantu. Intinya saya ingin pilar sosial tidak absen di tengah negera dan bangsa kita yang tengah mengalami tantangan ini,” kata ayah dua anak ini.</p>

 

 

 <p>Biro Hubungan Masyarakat
 <br>Kementerian Sosial RI


 <p>Penulis :Koesworo Setiawan, Nia Annisa
 <br>Penerjemah :Nia Annisa 
 <br>Sumber : kemensos.go.id</p></a></div>
                    
              
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
           

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title"><strong>SMensos Dorong Pilar-Pilar Sosial dalam Gerakan Pencegahan COVID-19</strong></h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <!-- <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button> -->
                   <!--  <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="adminlte/#" class="dropdown-item">Action</a>
                      <a href="adminlte/#" class="dropdown-item">Another action</a>
                      <a href="adminlte/#" class="dropdown-item">Something else here</a>
                      <a class="dropdown-divider"></a>
                      <a href="adminlte/#" class="dropdown-item">Separated link</a>
                    </div> -->
                  </div>
                  <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button> -->
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                   <!--  <p class="text-center">
                      <strong>SMensos Dorong Pilar-Pilar Sosial dalam Gerakan Pencegahan COVID-19</strong>
                    </p> -->

                     <style type="text/css">
  body{
   margin: unset;
/*   overflow: hidden;*/
  }
  .utama{
   width: 100%;
   overflow: hidden;
  }.isi{
   width: 50%;
   height: 100%;
   margin: auto;
   overflow: hidden;
  }.isi_gambar{
   width: 25%; 
   float: left;  
  }.isi10{
   width: 400%;
   
  }
  .utama img{
   width: 100%;
   float: left;
  }
 </style>
</head>
<body>
 <div class="utama">
  <div class="isi">
   <div class="isi10" id="slide">
    <div class="isi_gambar" >
     <img id="slide" src="images/1.jpg">
    </div>
    <div class="isi_gambar">
     <img id="slide" src="images/2.jpg">
    </div>
    <div class="isi_gambar">
     <img id="slide" src="images/3.jpg">
    </div>
    <div class="isi_gambar">
     <img id="slide" src="images/4.jpg">
    </div>
    <!--  <div class="isi_gambar" >
     <img id="slide" src="images/5.jpg">
    </div>
     <div class="isi_gambar">
     <img id="slide" src="images/6.jpg">
    </div>
     <div class="isi_gambar">
     <img id="slide" src="images/7.jpg">
    </div>
     <div class="isi_gambar">
     <img id="slide" src="images/8.jpg">
    </div>
     <div class="isi_gambar">
     <img id="slide" src="images/9.jpg">
    </div>
     <div class="isi_gambar">
     <img id="slide" src="images/10.jpg">
    </div>
     <div class="isi_gambar">
     <img id="slide" src="images/11.jpg">
    </div>
     <div class="isi_gambar">
     <img id="slide" src="images/12.jpg">
    </div>
     <div class="isi_gambar">
     <img id="slide" src="images/13.jpg">
    </div> -->
   </div>
   
  </div>
  
 </div>
 <script type="text/javascript">
  var a=-100;
  setInterval(function(){
   if (a!=0) {
    slide = document.getElementById('slide');
    slide.style="margin-left:"+a+"%;transition: 1s ease-in;";
    if (a== -400) {
     a=0;
    }else{
     a=a+-100;
    }
    return a;

   }else{
    slide = document.getElementById('slide');
    slide.style="margin-left:"+a+"%;";
    if (a== -400) {
     a=0;
    }else{
     a=a+-100;
    }
    return a;
   }

  }, 2000);
</script>


<div style='text-align:justify;'>
  <a><p><strong>JAKARTA (20 Maret 2020) </strong>- Menteri Sosial Juliari P. Batubara mendorong kepada pilar-pilar sosial agar tampil menjadi pelopor gerakan pencegahan penyebaran virus korona di tempat tugas masing-masing. Mereka bisa bersinergi dengan pemerintah daerah atau dengan potensi sosial lainnya.</p>

 <p>

“Saya minta pilar-pilar sosial menjadi motor dan pelopor dari gerakan pencegahan penyebaran virus korona. Dalam tugasnya kan mereka bersentuhan langsung dengan masyarakat. Jadi mereka adalah garda depan Kementerian Sosial,” kata Mensos di Jakarta, Jumat (20/03/2020).</p>

 

 <p>Pilar sosial merupakan relawan berbasis masyarakat yang bermitra dengan Kementerian Sosial dalam mengimplementasikan berbagai agenda pembangunan kesejahteraan sosial. Mereka adalah Pekerja Sosial Masyarakat (PSM), Tenaga Kesejahteraan Sosial Kecamatan (TKSK), Karang Taruna (KT), Taruna Siaga Bencana (Tagana), dan Lembaga Kesejahteraan Sosial (LKS) yang tersebar di seluruh penjuru Tanah Air.</p>

 

 <p>Menurut Mensos, peran mereka dalam penanganan masalah sosial selama ini, sudah teruji. Dengan bersinergi dengan pemerintah daerah dan instansi terkait dimana mereka bertugas, pilar sosial berhasil mencari alternatif solusi terhadap berbagai tantangan yang dihadapi bangsa.</p>

 

 <p>“Selama ini mereka bisa memberikan kontribusinya dalam berbagai upaya mengelola dan menangani masalah sosial seperti bencana alam, bencana sosial, dan berbagai dinamika baik lokal maupun nasional. Saya yakin mereka sudah teruji dengan berbagai situasi dan tantangan. Jadi dalam menghadapi pandemi virus korona, saya juga yakin mereka pun bisa mengambil peran positif,” kata Mensos.</p>

 

 <p>Mensos yakin, dengan pengalaman yang cukup panjang, pilar sosial juga bisa mengambil peran berarti. Pilar sosial dianggap mengenal daerah masing-masing. Di lain pihak, sebagian dari mereka merupakan pendamping untuk penerima manfaat.</p>

 

 <p>“Mereka bisa menyosialisasikan berbagai kebijakan pemerintah, baik di pusat maupun di daerah, terkait percepatan pemberantasan virus korona masyarakat atau penerima manfaat yang mereka dampingi. Mereka juga bisa menggugah kesadaran masyarakat agar, misalnya, taat pada anjuran pemerintah untuk tetap tinggal di rumah,” kata Mensos.</p>

 

 <p>Tentu saja, dalam melaksanakan himbuan tersebut, perlu kehati-hatian, dan memperhatikan keselamatan dan kesehatan diri dan lingkungan. “Untuk sosialisasi langkah-langkah pencegahan penyebaran virus, jangan lupakan ketentuan yang sudah digariskan. Misalnya, dengan memperhatikan social distancing . Memakai pelindung diri, seperti masker, dan sebagainya,” kata mantan Ketua Ikatan Motor Indonesia (IMI) Pusat ini.</p>

 

 <p>Selain itu, kata Mensos, pilar sosial juga bisa bersinergi dengan pemerintah daerah, tokoh masyarakat, dan potensi sosial setempat, dengan jalan mendorong berbagai program atau gerakan yang mempercepat pemberantasan virus korona.</p></p>

 

 <p>“Bisa bersama-sama melakukan penyemprotan disinfektan untuk fasilitas umum, rumah ibadah, atau hal-hal lain yang dirasakan membantu. Intinya saya ingin pilar sosial tidak absen di tengah negera dan bangsa kita yang tengah mengalami tantangan ini,” kata ayah dua anak ini.</p>

 

 

 <p>Biro Hubungan Masyarakat
 <br>Kementerian Sosial RI


 <p>Penulis :Koesworo Setiawan, Nia Annisa
 <br>Penerjemah :Nia Annisa 
 <br>Sumber : kemensos.go.id</p></a></div>
                    
              
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

          <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title"><strong>SMensos Dorong Pilar-Pilar Sosial dalam Gerakan Pencegahan COVID-19</strong></h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div class="btn-group">
                                        <!-- <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button> -->
                   <!--  <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="adminlte/#" class="dropdown-item">Action</a>
                      <a href="adminlte/#" class="dropdown-item">Another action</a>
                      <a href="adminlte/#" class="dropdown-item">Something else here</a>
                      <a class="dropdown-divider"></a>
                      <a href="adminlte/#" class="dropdown-item">Separated link</a>
                    </div> -->
                  </div>
                  <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button> -->
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                   <!--  <p class="text-center">
                      <strong>SMensos Dorong Pilar-Pilar Sosial dalam Gerakan Pencegahan COVID-19</strong>
                    </p> -->

                     <style type="text/css">
  body{
   margin: unset;
/*   overflow: hidden;*/
  }
  .utama{
   width: 100%;
   overflow: hidden;
  }.isi{
   width: 50%;
   height: 100%;
   margin: auto;
   overflow: hidden;
  }.isi_gambar{
   width: 25%; 
   float: left;  
  }.isi10{
   width: 400%;
   
  }
  .utama img{
   width: 100%;
   float: left;
  }
 </style>
</head>
<body>
 <div class="utama">
  <div class="isi">
   <div class="isi10" id="slide">
    <div class="isi_gambar" >
     <img id="slide" src="images/1.jpg">
    </div>
    <div class="isi_gambar">
     <img id="slide" src="images/2.jpg">
    </div>
    <div class="isi_gambar">
     <img id="slide" src="images/3.jpg">
    </div>
    <div class="isi_gambar">
     <img id="slide" src="images/4.jpg">
    </div>
    <!--  <div class="isi_gambar" >
     <img id="slide" src="images/5.jpg">
    </div>
     <div class="isi_gambar">
     <img id="slide" src="images/6.jpg">
    </div>
     <div class="isi_gambar">
     <img id="slide" src="images/7.jpg">
    </div>
     <div class="isi_gambar">
     <img id="slide" src="images/8.jpg">
    </div>
     <div class="isi_gambar">
     <img id="slide" src="images/9.jpg">
    </div>
     <div class="isi_gambar">
     <img id="slide" src="images/10.jpg">
    </div>
     <div class="isi_gambar">
     <img id="slide" src="images/11.jpg">
    </div>
     <div class="isi_gambar">
     <img id="slide" src="images/12.jpg">
    </div>
     <div class="isi_gambar">
     <img id="slide" src="images/13.jpg">
    </div> -->
   </div>
   
  </div>
  
 </div>
 <script type="text/javascript">
  var a=-100;
  setInterval(function(){
   if (a!=0) {
    slide = document.getElementById('slide');
    slide.style="margin-left:"+a+"%;transition: 1s ease-in;";
    if (a== -400) {
     a=0;
    }else{
     a=a+-100;
    }
    return a;

   }else{
    slide = document.getElementById('slide');
    slide.style="margin-left:"+a+"%;";
    if (a== -400) {
     a=0;
    }else{
     a=a+-100;
    }
    return a;
   }

  }, 2000);
</script>


<div style='text-align:justify;'>
  <a><p><strong>JAKARTA (20 Maret 2020) </strong>- Menteri Sosial Juliari P. Batubara mendorong kepada pilar-pilar sosial agar tampil menjadi pelopor gerakan pencegahan penyebaran virus korona di tempat tugas masing-masing. Mereka bisa bersinergi dengan pemerintah daerah atau dengan potensi sosial lainnya.</p>

 <p>

“Saya minta pilar-pilar sosial menjadi motor dan pelopor dari gerakan pencegahan penyebaran virus korona. Dalam tugasnya kan mereka bersentuhan langsung dengan masyarakat. Jadi mereka adalah garda depan Kementerian Sosial,” kata Mensos di Jakarta, Jumat (20/03/2020).</p>

 

 <p>Pilar sosial merupakan relawan berbasis masyarakat yang bermitra dengan Kementerian Sosial dalam mengimplementasikan berbagai agenda pembangunan kesejahteraan sosial. Mereka adalah Pekerja Sosial Masyarakat (PSM), Tenaga Kesejahteraan Sosial Kecamatan (TKSK), Karang Taruna (KT), Taruna Siaga Bencana (Tagana), dan Lembaga Kesejahteraan Sosial (LKS) yang tersebar di seluruh penjuru Tanah Air.</p>

 

 <p>Menurut Mensos, peran mereka dalam penanganan masalah sosial selama ini, sudah teruji. Dengan bersinergi dengan pemerintah daerah dan instansi terkait dimana mereka bertugas, pilar sosial berhasil mencari alternatif solusi terhadap berbagai tantangan yang dihadapi bangsa.</p>

 

 <p>“Selama ini mereka bisa memberikan kontribusinya dalam berbagai upaya mengelola dan menangani masalah sosial seperti bencana alam, bencana sosial, dan berbagai dinamika baik lokal maupun nasional. Saya yakin mereka sudah teruji dengan berbagai situasi dan tantangan. Jadi dalam menghadapi pandemi virus korona, saya juga yakin mereka pun bisa mengambil peran positif,” kata Mensos.</p>

 

 <p>Mensos yakin, dengan pengalaman yang cukup panjang, pilar sosial juga bisa mengambil peran berarti. Pilar sosial dianggap mengenal daerah masing-masing. Di lain pihak, sebagian dari mereka merupakan pendamping untuk penerima manfaat.</p>

 

 <p>“Mereka bisa menyosialisasikan berbagai kebijakan pemerintah, baik di pusat maupun di daerah, terkait percepatan pemberantasan virus korona masyarakat atau penerima manfaat yang mereka dampingi. Mereka juga bisa menggugah kesadaran masyarakat agar, misalnya, taat pada anjuran pemerintah untuk tetap tinggal di rumah,” kata Mensos.</p>

 

 <p>Tentu saja, dalam melaksanakan himbuan tersebut, perlu kehati-hatian, dan memperhatikan keselamatan dan kesehatan diri dan lingkungan. “Untuk sosialisasi langkah-langkah pencegahan penyebaran virus, jangan lupakan ketentuan yang sudah digariskan. Misalnya, dengan memperhatikan social distancing . Memakai pelindung diri, seperti masker, dan sebagainya,” kata mantan Ketua Ikatan Motor Indonesia (IMI) Pusat ini.</p>

 

 <p>Selain itu, kata Mensos, pilar sosial juga bisa bersinergi dengan pemerintah daerah, tokoh masyarakat, dan potensi sosial setempat, dengan jalan mendorong berbagai program atau gerakan yang mempercepat pemberantasan virus korona.</p></p>

 

 <p>“Bisa bersama-sama melakukan penyemprotan disinfektan untuk fasilitas umum, rumah ibadah, atau hal-hal lain yang dirasakan membantu. Intinya saya ingin pilar sosial tidak absen di tengah negera dan bangsa kita yang tengah mengalami tantangan ini,” kata ayah dua anak ini.</p>

 

 

 <p>Biro Hubungan Masyarakat
 <br>Kementerian Sosial RI


 <p>Penulis :Koesworo Setiawan, Nia Annisa
 <br>Penerjemah :Nia Annisa 
 <br>Sumber : kemensos.go.id</p></a></div>
                    
              
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
           

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="adminlte/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="adminlte/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="adminlte/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="adminlte/plugins/raphael/raphael.min.js"></script>
<script src="adminlte/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="adminlte/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="adminlte/plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="adminlte/dist/js/pages/dashboard2.js"></script>
</body>
</html>
