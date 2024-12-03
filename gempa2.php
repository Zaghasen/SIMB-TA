
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Informasi Bencana Indonesia (DIBI)</title>
  
  <link rel="apple-touch-icon" sizes="76x76" href="https://dibi.bnpb.go.id/assets/icon2/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="https://dibi.bnpb.go.id/assets/icon2/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="https://dibi.bnpb.go.id/assets/icon2/favicon-16x16.png">
  <link rel="manifest" href="https://dibi.bnpb.go.id/assets/icon2/site.webmanifest">
  <link rel="mask-icon" href="https://dibi.bnpb.go.id/assets/icon2/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#00aba9">
  <meta name="theme-color" content="#ffffff">
  
  
	<link rel="icon" href="https://dibi.bnpb.go.id/assets/icon2/favicon.png">
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://dibi.bnpb.go.id/assets/adminlte4/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="https://dibi.bnpb.go.id/assets/adminlte4/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://dibi.bnpb.go.id/assets/adminlte4/dist/css/adminlte.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://dibi.bnpb.go.id/assets/adminlte4/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="https://dibi.bnpb.go.id/assets/adminlte4/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="https://dibi.bnpb.go.id/assets/adminlte4/plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <!--
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

   <!--baru-->
  <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap-popover.js"></script>-->

  <link rel="stylesheet" href="https://dibi.bnpb.go.id/assets/adminlte4/acc.css">
  <link rel="stylesheet" href="https://dibi.bnpb.go.id/assets/adminlte4/xdibi.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oleo+Script&display=swap" rel="stylesheet">
  <style>
  .popover{width:auto!important; max-width: none}
  .fa-camera{color:red;}
  </style>
  
  
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  <!-- ChartJS -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.1.0/dist/chartjs-plugin-datalabels.min.js"></script>
  <!-- daterangepicker -->
  <script src="https://dibi.bnpb.go.id/assets/adminlte4/plugins/moment/moment.min.js"></script>
  <script src="https://dibi.bnpb.go.id/assets/adminlte4/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 datepicker-->
  <script src="https://dibi.bnpb.go.id/assets/adminlte4/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
      $('[data-toggle="popover"]').popover({trigger:'hover',html:true});   
    });
  </script>
  <script>
  /*
  var idleTime = 0;
  $(document).ready(function () {
      // Increment the idle time counter every minute.
      var idleInterval = setInterval(timerIncrement, 60000); // 1 minute

      // Zero the idle timer on mouse movement.
      $(this).mousemove(function (e) {
          idleTime = 0;
      });
      $(this).keypress(function (e) {
        idleTime = 0;
      });
  });

  function timerIncrement() {
    $avideo = [
    'https://youtu.be/h8cEn_8RhJM',
    'https://youtu.be/w-G5Mc5iN_k',
    'https://youtu.be/T_WTPLGyatw',
    'https://youtu.be/c7uhj8FV9po',
    'https://youtu.be/77f-7ERgp2E',
    'https://youtu.be/5qn4P95QU4s',
    'https://youtu.be/OJDItWMW09s',
    'https://youtu.be/vi_13Aw2vOY',
    'https://youtu.be/0Jhb7I50OTo',
    'https://youtu.be/KETvoh3MBEA',
    'https://youtu.be/TiDF1cgQLXA'];
    idleTime = idleTime + 1;
    if (idleTime > 49) { // 20 minutes diganti menjadi 50menit
      var idx = Math.floor(Math.random()*11);
      window.open($avideo[idx],'baru','location=0,menubar=0,resizable=0,status=0,titlebar=0');
    }
  }
  */
  </script>
  <style>
  .leaflet-control-layers-toggle {
    width:200px;
  }
/*  
.navbar .dropdown-menu {
    z-index: 1050; /* Bisa disesuaikan jika perlu */
    position: absolute; /* Pastikan dropdown menu diposisikan secara absolut */
}
.content {
    position: relative;
    z-index: 1; /* Konten lainnya memiliki z-index lebih rendah */
}
*/
  </style>
</head>
<body class="hold-transition sidebar-collapse layout-fixed" style="background-color: #f8f9fa;">
<div class="wrapper" style="box-shadow:4px 4px 2px #888888;">

<!--
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">BrandName</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
-->


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color:#3C8DBC;height:40px;box-shadow: 0px 3px 3px #F28100;">
  <!--<nav class="main-header navbar navbar-expand-lg navbar-white navbar-light" style="background-color: #3C8DBC; height: 40px; box-shadow: 0px 3px 3px #F28100;">-->
  <!--<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #3C8DBC; box-shadow: 0px 3px 3px #F28100; z-index: 1000; position: fixed; width: 100%;">-->
  <!--<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color:#3C8DBC;height:40px;box-shadow: inset 0px 20px 10px -10px #F28100, inset -20px 10px -10px #F28100;">-->


    <!-- Tambahkan Tombol Menu Tiga Bar -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav2" aria-controls="navbarNav2" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- Left navbar links -->
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <img src="https://dibi.bnpb.go.id/assets/icon2/favicon.png" class="mt-2" style="width:35px;">
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="https://dibi.bnpb.go.id/home/index2" class="nav-link text-white"><i class="fa fa-home" style="color:#F28100"></i> Home</a>
      </li>

      <li class="nav-item d-none d-sm-inline-block dropdown">
        <a href="#" class="nav-link text-white dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-database" style="color:#F28100"></i> Bencana</a>
          <ul class="dropdown-menu p-2 rounded" style="box-shadow: 0px -23px 25px 0px rgba(0, 0, 0, 0.17) inset, 0px -36px 30px 0px rgba(0, 0, 0, 0.15) inset, 0px -79px 40px 0px rgba(0, 0, 0, 0.1) inset, 0px 2px 1px rgba(0, 0, 0, 0.06), 0px 4px 2px rgba(0, 0, 0, 0.09), 0px 8px 4px rgba(0, 0, 0, 0.09), 0px 16px 8px rgba(0, 0, 0, 0.09);">
            <li><a class="dropdown-item" href="https://dibi.bnpb.go.id/xdibi2">🔸 Tabular</a></li>
            <li><a class="dropdown-item" href="https://dibi.bnpb.go.id/xdibi2?tb=1">🔸 Artikel</a></li>
            <li><a class="dropdown-item" href="https://dibi.bnpb.go.id/kalen2?th=2024&bl=11">🔸 Kalender</a></li>
          </ul>
      </li>

      <li class="nav-item d-none d-sm-inline-block dropdown">
        <a href="#" class="nav-link text-white dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chart-line" style="color:#F28100"></i> Statistik</a>
          <ul class="dropdown-menu p-2 rounded" style="box-shadow: 0px -23px 25px 0px rgba(0, 0, 0, 0.17) inset, 0px -36px 30px 0px rgba(0, 0, 0, 0.15) inset, 0px -79px 40px 0px rgba(0, 0, 0, 0.1) inset, 0px 2px 1px rgba(0, 0, 0, 0.06), 0px 4px 2px rgba(0, 0, 0, 0.09), 0px 8px 4px rgba(0, 0, 0, 0.09), 0px 16px 8px rgba(0, 0, 0, 0.09);">
            <li><a class="dropdown-item" href="https://dibi.bnpb.go.id/kwilayah2">🔸 Menurut Wilayah</a></li>
            <li><a class="dropdown-item" href="https://dibi.bnpb.go.id/kwaktu2">🔸 Menurut Waktu</a></li>
            <li><a class="dropdown-item" href="https://dibi.bnpb.go.id/kbencana2">🔸 Menurut Jenis</a></li>
          </ul>
      </li>
                
      <li class="nav-item d-none d-sm-inline-block dropdown">
        <a href="#" class="nav-link text-white dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chart-bar" style="color:#F28100"></i> Grafik</a>
          <ul class="dropdown-menu p-2 rounded" style="box-shadow: 0px -23px 25px 0px rgba(0, 0, 0, 0.17) inset, 0px -36px 30px 0px rgba(0, 0, 0, 0.15) inset, 0px -79px 40px 0px rgba(0, 0, 0, 0.1) inset, 0px 2px 1px rgba(0, 0, 0, 0.06), 0px 4px 2px rgba(0, 0, 0, 0.09), 0px 8px 4px rgba(0, 0, 0, 0.09), 0px 16px 8px rgba(0, 0, 0, 0.09);">
            <li><a class="dropdown-item" href="https://dibi.bnpb.go.id/gbencana2">🔸 Korban dan Kerusakan</a></li>
            <li><a class="dropdown-item" href="https://dibi.bnpb.go.id/tpivot">🔸 Pivot Korban</a></li>
            <li><a class="dropdown-item" href="https://dibi.bnpb.go.id/tpivot/index2">🔸 Pivot Kerusakan</a></li>
          </ul>
      </li>

      <li class="nav-item d-none d-sm-inline-block dropdown">
        <a href="#" class="nav-link text-white dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-desktop" style="color:#F28100"></i> Gallery</a>
          <ul class="dropdown-menu p-2 rounded" style="box-shadow: 0px -23px 25px 0px rgba(0, 0, 0, 0.17) inset, 0px -36px 30px 0px rgba(0, 0, 0, 0.15) inset, 0px -79px 40px 0px rgba(0, 0, 0, 0.1) inset, 0px 2px 1px rgba(0, 0, 0, 0.06), 0px 4px 2px rgba(0, 0, 0, 0.09), 0px 8px 4px rgba(0, 0, 0, 0.09), 0px 16px 8px rgba(0, 0, 0, 0.09);">
            <li><a class="dropdown-item" href="https://dibi.bnpb.go.id/gallery/car2">🔸 Carousel Bencana</a></li>
            <li><a class="dropdown-item" href="https://dibi.bnpb.go.id/gallery/car1">🔸 Carousel Operator</a></li>
            <li><a class="dropdown-item" href="https://dibi.bnpb.go.id/gallery/car3">🔸 Carousel Multimedia</a></li>
            <li><a class="dropdown-item" href="https://dibi.bnpb.go.id/gallery">🔸 Foto Bencana</a></li>
            <li><a class="dropdown-item" href="https://dibi.bnpb.go.id/gallery/multimedia">🔸 Multimedia</a></li>
            <li><a class="dropdown-item" href="https://dibi.bnpb.go.id/gallery/pengguna">🔸 Operator DIBI</a></li>
            <li><a class="dropdown-item" href="https://dibi.bnpb.go.id/gallery/kontak">🔸 Kontak Person</a></li>
          </ul>
      </li>

      <li class="nav-item d-none d-sm-inline-block dropdown">
        <a href="#" class="nav-link text-white dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-rss" style="color:#F28100"></i> Rujukan</a>
          <ul class="dropdown-menu p-2 rounded" style="box-shadow: 0px -23px 25px 0px rgba(0, 0, 0, 0.17) inset, 0px -36px 30px 0px rgba(0, 0, 0, 0.15) inset, 0px -79px 40px 0px rgba(0, 0, 0, 0.1) inset, 0px 2px 1px rgba(0, 0, 0, 0.06), 0px 4px 2px rgba(0, 0, 0, 0.09), 0px 8px 4px rgba(0, 0, 0, 0.09), 0px 16px 8px rgba(0, 0, 0, 0.09);">
            <li><a class="dropdown-item" href="https://dibi.bnpb.go.id/censusdata">🔸 BPS</a></li>
            <li><a class="dropdown-item" href="https://dibi.bnpb.go.id/bpbd2/index2">🔸 BPBD</a></li>
            <li><a class="dropdown-item" href="https://dibi.bnpb.go.id/gisvisualizer">🔸 GIS Visualizer</a></li>
          </ul>
      </li>

      <!--
      <li class="nav-item d-none d-sm-inline-block dropdown">
        <a href="#" class="nav-link text-white dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe" style="color:#F28100"></i> Spasial<span class="caret"></span></a>
          <ul class="dropdown-menu p-1" style="box-shadow: 0px -23px 25px 0px rgba(0, 0, 0, 0.17) inset, 0px -36px 30px 0px rgba(0, 0, 0, 0.15) inset, 0px -79px 40px 0px rgba(0, 0, 0, 0.1) inset, 0px 2px 1px rgba(0, 0, 0, 0.06), 0px 4px 2px rgba(0, 0, 0, 0.09), 0px 8px 4px rgba(0, 0, 0, 0.09), 0px 16px 8px rgba(0, 0, 0, 0.09);">
            <li><a class="dropdown-item form-control" href="https://dibi.bnpb.go.id/gisvisualizer">GIS Visualizer</a></li>
            <li><a class="dropdown-item form-control" href="https://dibi.bnpb.go.id/route">Rute</a></li>
          </ul>
      </li>
      -->
			      <li class="nav-item d-none d-sm-inline-block dropdown">
        <a href="#" class="nav-link text-white dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-book" style="color:#F28100"></i> Dokumentasi</a>
          <ul class="dropdown-menu p-2 rounded" style="box-shadow: 0px -23px 25px 0px rgba(0, 0, 0, 0.17) inset, 0px -36px 30px 0px rgba(0, 0, 0, 0.15) inset, 0px -79px 40px 0px rgba(0, 0, 0, 0.1) inset, 0px 2px 1px rgba(0, 0, 0, 0.06), 0px 4px 2px rgba(0, 0, 0, 0.09), 0px 8px 4px rgba(0, 0, 0, 0.09), 0px 16px 8px rgba(0, 0, 0, 0.09);">
            <li><a class="dropdown-item" href="https://dibi.bnpb.go.id/flow1">Protab Lapor</a></li>
            <li><a class="dropdown-item" href="https://dibi.bnpb.go.id/flow1/index2">Konten Laporan</a></li>
          </ul>
      </li>
      <!--
      <li class="nav-item d-none d-sm-inline-block">
        <a href="https://dibi.bnpb.go.id/mytube" class="nav-link text-white"><i class="fa fa-book" style="color:#F28100"></i> Dokumentasi</a>
      </li>
      -->
    </ul>
    </div>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
                    <img src="https://dibi.bnpb.go.id/assets/foto_profil/wajahku.jpg" class="img-circle" width="20">
        </a>
				        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="border-radius:10px;box-shadow: inset 0 0 35px 5px rgba(0,0,0,0.25), inset 0 2px 1px 1px rgba(255,255,255,0.9), inset 0 -2px 1px rgba(0,0,0,0.25);">
          <div class="card" style="width:280px;"><div class="card-header d-flex justify-content-center bg-warning" style="box-shadow: inset 0 0 35px 5px rgba(0,0,0,0.25), inset 0 2px 1px 1px rgba(255,255,255,0.9), inset 0 -2px 1px rgba(0,0,0,0.25);"><b>Login</b></div>
            <form method="post" action="https://dibi.bnpb.go.id/user2/login">
              <div class="form-group form-inline p-1 mb-0 vw-90 bg-info">
                <label style="width:40%">Username</label>
                <input class="form-control" name="identity" id="identity" value="" placeholder="Username" style="width:50%;">
              </div>
              <div class="form-group form-inline mb-0 bg-info">
                <label style="width:40%">Password</label>
                <input class="form-control" name="password" type="password" value="" placeholder="Password" style="width:50%">
              </div>
              <div class="form-group form-inline bg-info mb-0">
                <label style="width:40%">Ingatkan</label>
                <input class="form-control" name="remember" type="checkbox" value="1" placeholder="Ingatkan">
              </div>
              <div class="form-group form-inline d-flex justify-content-center bg-warning mt-0 mb-0 pt-2 pb-2">
                <input type="submit" value="Login" class="form-control btn btn-danger">
              </div>
            </form>
          </div>
        </div>
        
      </li>
      <!--
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt" style="color:#F28100;"></i>
        </a>
      </li>
      -->
    </ul>
  </nav>
  

  <div class="content-wrapper">
    <!--
    <div class="content-header">
      <div class="container-fluid mb-0" style="margin-top:-10px;">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    -->



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
				
        <div class="row">
				
          <div class="container-fluid card mt-2 pl-3 pr-3" style="border:solid 1px #ccc;box-shadow:inset 1px 1px 10px #888;">
						
<link rel="stylesheet" href="https://dibi.bnpb.go.id/assets/leaflet/leaflet.css" />
<script src="https://dibi.bnpb.go.id/assets/leaflet/leaflet.js"></script>
<script src="https://dibi.bnpb.go.id/assets/leaflet/esri-leaflet.js"></script>


<link rel="stylesheet" href="https://dibi.bnpb.go.id/assets/leaflet/Leaflet.BigImage.min.css">
<script src="https://dibi.bnpb.go.id/assets/leaflet/Leaflet.BigImage.min.js"></script>

<script type="text/javascript" src="https://dibi.bnpb.go.id/assets/leaflet/leaflet-control-credits.js"></script>
<link rel="stylesheet" href="https://dibi.bnpb.go.id/assets/leaflet/leaflet-control-credits.css" />	

<script type="text/javascript" src="https://dibi.bnpb.go.id/assets/pulse/L.Icon.Pulse.js"></script>
<link rel="stylesheet" href="https://dibi.bnpb.go.id/assets/pulse/L.Icon.Pulse.css" />	


<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script>
	//$(window).load(function(){$('#spin').hide();});
</script>


	<style>
	/*
	h3 {
		margin: 20px 0;
	}

	.experience {
		border-left: 3px solid $primaryColor;
		padding: 0 3px;
		margin-left: 5px;
		@media (max-width: 767px) {
			margin-left: 0;
			padding-right: 0;
		}
		.item {
			position: relative;
			margin-bottom: 4px;
			&::before {
				@include round-btn(-43px, 0, 22px, 22px, $bgColor);
				border: 3px solid $primaryColor;
			}
			&::after {
				@include round-btn(-37px, 6px, 10px, 10px, $primaryColor);
			}
		}
		.company-name {
			color: $primaryColor;
		}
		.location {
			position: absolute;
			right: 0;
			top: 2px;
			.fa {
				margin-right: 8px;
			}
		}
		.job-info {
			position: absolute;
			left: -15px;
			top: 0;
			.title {
				color: $primaryColor;
			}
			@media (max-width: 767px) {
				position: static;
				margin-bottom: 1rem;
			}
		}
	}
	*/
	<style>
	<style>
	/*
		.blinking {
			/*animation: blink 2s steps(5, start) infinite;*/
			animation: blink 1.5s infinite alternate;
		}
		@keyframes blink {
			from, to { opacity: 1 }
			50% { opacity: 0 }
		}
		@keyframes fade1{
				0%{     color: #000;    }
				49%{    color: #000; }
				60%{    color: transparent; }
				99%{    color:transparent;  }
				100%{   color: #000;    }
		}
		.bungkus{
			width:100%;
		}
		#form {
			position: absolute;
			top: 15px;
			right: 120px;
			z-index: 400;
			background: white;
			padding: 3px;
			padding-right: 2px;
			border:solid 1px grey;
			border-radius:5px;
			box-shadow: 2px 4px 2px #888888;
		}
		#basemaps {
			margin-bottom: 5px;
		}
		#form2{
			position: absolute;
			top: 80px;
			right: 15px;
			/*margin-right:0px;*/
			/*float: right;*/
			z-index: 600;
			background: white;
			padding: 3px;
			border:solid 1px grey;
			border-radius:5px;
			box-shadow: 2px 4px 2px #888888;
		}
		*/
	</style>
	<style>
		.chart{
			width:100%;
			height: 100%;
			position: relative;
			margin: 0px;
			border: solid 5px black;
		}
		#container1 {
			width:100%;
			height: 450px;
			border: solid 1px grey;
			border-radius: 5px;
			box-shadow: 2px 2px 4px #888888;
			margin-bottom: 5px;
		}
		#container2 {
			width:100%;
			height: 450px;
			border: solid 1px grey;
			border-radius: 5px;
			box-shadow: 2px 2px 4px #888888;
			margin-bottom: 5px;
		}
		#container3 {
			width:100%;
			height: 450px;
			border: solid 1px grey;
			border-radius: 5px;
			box-shadow: 2px 2px 4px #888888;
			margin-bottom: 5px;
		}
		#container4 {
			width:100%;
			height: 450px;
			border: solid 1px grey;
			border-radius: 5px;
			box-shadow: 2px 2px 4px #888888;
			margin-bottom: 5px;
		}
		.box2{
			width: 100%;
			height: 350px;
			position: relative;
			/*left:100px;*/
			/*margin-left: 5px;*/
			/*margin-right: 5px;*/
			border: solid 1px rgba(0,0,0,0.45);
			border-radius: 10px;
			//box-shadow: rgb(96, 191, 243) 0px 1px 10px 0px;
			box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23), 0 0 5px #aad3df inset;
//			box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
			//box-shadow: inset 0 3px 6px rgba(0,0,0,0.16), 0 4px 6px rgba(0,0,0,0.45);
			//box-shadow: 2px 2px 4px #888888;
			display:block;
		}
		.panel-primary{
			box-shadow: 2px 2px 4px #888888;
		}
		
		/*
		box-shadow: inset 0 3px 6px rgba(0,0,0,0.16), 0 4px 6px rgba(0,0,0,0.45);
		box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
		*/
		.foto img {
			width:210px;
			height: auto;
		}
		
		.foto:hover img{
			position: relative;
			left: -20px;
			top: -10px;
			width: 300px;
			height: 250px;
			display: block;
			border: outset 5px 5px 5px;
			z-index: 999;
		}
	</style>
	<style>
		.aktif{
			box-shadow:2px 2px 4px red;
		}
	.leaflet-touch .leaflet-control-layers {
		/*border: solid 2px red;*/
		box-shadow: inset 0 0 35px 5px rgba(0,0,0,0.25), inset 0 2px 1px 1px rgba(255,255,255,0.9), inset 0 -2px 1px rgba(0,0,0,0.25);	
	}
	
  /*padding: 6px 10px 6px 6px;*/
	.leaflet-control-layers{
		white-space: normal;
	}
	.leaflet-control-layers-expanded {
		padding:2px;
    color: #333;
    background: #fff;
		width: 215px !important;
		text-decoration:none;
		white-space: nowrap;
		width:auto;
	}
	.leaflet-control-layers-selector {
	}
	.leaflet-control-layers-toggle{
		width:auto;
		padding:3px;
		padding-left:36px;
	}
	</style>
	
<section class='content ml-0 mr-0'>
  <div class='row mt-2'>
		<div class='col-md-12'>
			<div class='box'>
				<div class='box-header'>
				</div><!-- /.box-header -->
				<div class='box-body'>


				

				<div class="row mt-3">
					<div class="col-md-6 col-sm-6 col-6">
						<div class="info-box">
							<span class="info-box-icon bg-info" style="border-radius:10px;box-shadow:inset 4px 4px 10px #17A2B8;"><i class="fa fa-ambulance"></i></span>

							<div class="info-box-content" style="height:80px;overflow-y:hide;">
								<table class="table table-bordered table-striped table-sm table-compact mt-2" width="100%" padding="0">
									<thead>
										<tr>
											<td class="bg-danger" style="box-shadow: inset 0 0 35px 5px rgba(0,0,0,0.25), inset 0 2px 1px 1px rgba(255,255,255,0.9), inset 0 -2px 1px rgba(0,0,0,0.25);">Bencana</th>
											<td class="bg-warning" style="box-shadow: inset 0 0 35px 5px rgba(0,0,0,0.25), inset 0 2px 1px 1px rgba(255,255,255,0.9), inset 0 -2px 1px rgba(0,0,0,0.25);">Meninggal</th>
											<td class="bg-success" style="box-shadow: inset 0 0 35px 5px rgba(0,0,0,0.25), inset 0 2px 1px 1px rgba(255,255,255,0.9), inset 0 -2px 1px rgba(0,0,0,0.25);">Hilang</th>
											<td class="bg-info" style="box-shadow: inset 0 0 35px 5px rgba(0,0,0,0.25), inset 0 2px 1px 1px rgba(255,255,255,0.9), inset 0 -2px 1px rgba(0,0,0,0.25);">Terluka</th>
											<td class="bg-primary" style="box-shadow: inset 0 0 35px 5px rgba(0,0,0,0.25), inset 0 2px 1px 1px rgba(255,255,255,0.9), inset 0 -2px 1px rgba(0,0,0,0.25);">Menderita</th>
											<td class="bg-danger" style="box-shadow: inset 0 0 35px 5px rgba(0,0,0,0.25), inset 0 2px 1px 1px rgba(255,255,255,0.9), inset 0 -2px 1px rgba(0,0,0,0.25);">Mengungsi</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td align="right">99</td>
											<td align="right">124</td>
											<td align="right">17</td>
											<td align="right">78</td>
											<td align="right">26,018</td>
											<td align="right">8,466</td>
										</tr> 
									</tbody>
								</table>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->
					<div class="col-md-6 col-sm-6 col-6">
						<div class="info-box">
							<span class="info-box-icon bg-success" style="border-radius:10px;box-shadow:inset 4px 4px 10px #17A2B8;"><i class="far fa-flag"></i></span>

							<div class="info-box-content" style="height:80px;overflow-y:hide;">
							<table class="table table-bordered table-striped table-sm table-compact mt-2" width="100%" padding="0">
									<thead>
										<tr class="bg-info">
											<td class="bg-warning" style="box-shadow: inset 0 0 35px 5px rgba(0,0,0,0.25), inset 0 2px 1px 1px rgba(255,255,255,0.9), inset 0 -2px 1px rgba(0,0,0,0.25);">Rumah</th>
											<td class="bg-info" style="box-shadow: inset 0 0 35px 5px rgba(0,0,0,0.25), inset 0 2px 1px 1px rgba(255,255,255,0.9), inset 0 -2px 1px rgba(0,0,0,0.25);">Pendidikan</th>
											<td class="bg-success" style="box-shadow: inset 0 0 35px 5px rgba(0,0,0,0.25), inset 0 2px 1px 1px rgba(255,255,255,0.9), inset 0 -2px 1px rgba(0,0,0,0.25);">Kesehatan</th>
											<td class="bg-primary" style="box-shadow: inset 0 0 35px 5px rgba(0,0,0,0.25), inset 0 2px 1px 1px rgba(255,255,255,0.9), inset 0 -2px 1px rgba(0,0,0,0.25);">Peribadatan</th>
											<td class="bg-danger" style="box-shadow: inset 0 0 35px 5px rgba(0,0,0,0.25), inset 0 2px 1px 1px rgba(255,255,255,0.9), inset 0 -2px 1px rgba(0,0,0,0.25);">Fasum</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td align="right">2,105</td>
											<td align="right">24</td>
											<td align="right">5</td>
											<td align="right">9</td>
											<td align="right">0</td>
										</tr>                             
									</tbody>
								</table>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
				</div>
				

				<!--
				
        <div class="row mt-2">
          <div class="col-lg-2 col-3">
            <div class="small-box bg-danger" style="border-radius:10px 10px 0px 0px;">
              <div class="inner text-center pb-0">
                <h3><?//=number_format($r->jml)?></h3>
							</div>
              <a href="#" class="small-box-footer" data-toggle="tooltip" data-target="#myJumlah" title="Jumlah kejadian" data-content="Jumlah kejadian bencana">Kejadian <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-3">
            <div class="small-box bg-warning" style="border-radius:10px 10px 0px 0px;">
              <div class="inner text-center pb-0">
                <h3><?//=number_format($r->meninggal)?></h3>
              </div>
              <a href="#" class="small-box-footer" data-toggle="popover-x" data-target="#myMeninggal" title="Korban meninggal">Meninggal <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-3">
            <div class="small-box bg-info" style="border-radius:10px 10px 0px 0px;">
              <div class="inner text-center pb-0">
                <h3><?//=number_format($r->hilang)?></h3>
              </div>
              <a href="#" class="small-box-footer" data-toggle="popover-x" data-target="#myHilang" title="Korban hilang">Hilang <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-3">
            <div class="small-box bg-success" style="border-radius:10px 10px 0px 0px;">
              <div class="inner text-center pb-0">
                <h3><?//=number_format($r->terluka)?></h3>
              </div>
              <a href="#" class="small-box-footer" data-toggle="popover-x" data-target="#myTerluka" title="Korban terluka">Terluka <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-3">
            <div class="small-box bg-warning" style="border-radius:10px 10px 0px 0px;">
              <div class="inner text-center pb-0">
                <h3><?//=number_format($r->menderita)?></h3>
              </div>
              <a href="#" class="small-box-footer" data-toggle="popover-x" data-target="#myMenderita" title="Korban menderita">Menderita <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-3">
            <div class="small-box bg-primary" style="border-radius:10px 10px 0px 0px;">
              <div class="inner text-center pb-0">
                <h3><?//=number_format($r->mengungsi)?></h3>
              </div>
              <a href="#" class="small-box-footer" data-toggle="popover-x" data-target="#myMengungsi" title="Korban mengungsi">Mengungsi <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
					-->
				        </div>				

<div class="row">
	<div class="col-md-9">
	
		<div class="row mt-0">
		
			<div class="bungkus">
			
			<div class="ml-4 mr-3 mt-3" style="padding:10px;border-radius:10px;box-shadow:inset 1px 1px 10px #888;">
				<div id="map" class="box2" style="border-radius:10px;border:solid 3px #e0e0e0;"></div>
			</div>

			<div id="form" class="d-flex justify-content-center mt-4">
			<form method='post' class="form-inline" name="frm">
				<div class="form-group row pl-3 pr-3" style="">
					<span class="form-inline ml-2 mr-2">
						<select name='th' id='th' onChange="this.form.submit();" class='form-control form-control-sm' style='width:85px;' data-toggle='tooltip' title='Pilih Tahun' data-content='Untuk menyaring data bencana pada tahun tertentu'>
							<option value=''>Tahun</option>
							<option value='2024' selected>2024</option>
<option value='2023'>2023</option>
<option value='2022'>2022</option>
<option value='2021'>2021</option>
<option value='2020'>2020</option>
<option value='2019'>2019</option>
<option value='2018'>2018</option>
<option value='2017'>2017</option>
<option value='2016'>2016</option>
<option value='2015'>2015</option>
<option value='2014'>2014</option>
<option value='2013'>2013</option>
<option value='2012'>2012</option>
<option value='2011'>2011</option>
<option value='2010'>2010</option>
<option value='2009'>2009</option>
<option value='2008'>2008</option>
<option value='2007'>2007</option>
<option value='2006'>2006</option>
<option value='2005'>2005</option>
<option value='2004'>2004</option>
<option value='2003'>2003</option>
<option value='2002'>2002</option>
<option value='2001'>2001</option>
<option value='2000'>2000</option>
<option value='1999'>1999</option>
<option value='1998'>1998</option>
<option value='1997'>1997</option>
<option value='1996'>1996</option>
<option value='1995'>1995</option>
<option value='1994'>1994</option>
<option value='1993'>1993</option>
<option value='1992'>1992</option>
<option value='1991'>1991</option>
<option value='1990'>1990</option>
<option value='1989'>1989</option>
<option value='1988'>1988</option>
<option value='1987'>1987</option>
<option value='1986'>1986</option>
<option value='1985'>1985</option>
<option value='1984'>1984</option>
<option value='1983'>1983</option>
<option value='1982'>1982</option>
<option value='1981'>1981</option>
<option value='1980'>1980</option>
<option value='1979'>1979</option>
<option value='1978'>1978</option>
<option value='1977'>1977</option>
<option value='1976'>1976</option>
<option value='1975'>1975</option>
<option value='1974'>1974</option>
<option value='1973'>1973</option>
<option value='1972'>1972</option>
<option value='1970'>1970</option>
<option value='1969'>1969</option>
<option value='1968'>1968</option>
<option value='1967'>1967</option>
<option value='1966'>1966</option>
<option value='1965'>1965</option>
<option value='1964'>1964</option>
<option value='1963'>1963</option>
<option value='1958'>1958</option>
<option value='1955'>1955</option>
<option value='1952'>1952</option>
<option value='1951'>1951</option>
<option value='1950'>1950</option>
<option value='1943'>1943</option>
<option value='1939'>1939</option>
<option value='1938'>1938</option>
<option value='1936'>1936</option>
<option value='1934'>1934</option>
<option value='1933'>1933</option>
<option value='1932'>1932</option>
<option value='1931'>1931</option>
<option value='1930'>1930</option>
<option value='1928'>1928</option>
<option value='1927'>1927</option>
<option value='1926'>1926</option>
<option value='1925'>1925</option>
<option value='1924'>1924</option>
<option value='1923'>1923</option>
<option value='1922'>1922</option>
<option value='1921'>1921</option>
<option value='1920'>1920</option>
<option value='1919'>1919</option>
<option value='1917'>1917</option>
<option value='1916'>1916</option>
<option value='1914'>1914</option>
<option value='1910'>1910</option>
<option value='1909'>1909</option>
<option value='1908'>1908</option>
<option value='1907'>1907</option>
<option value='1904'>1904</option>
<option value='1903'>1903</option>
<option value='1902'>1902</option>
						</select>
						<select name='bl' id='bl' onChange="this.form.submit();" class="form-control form-control-sm" style='width:85px;' data-toggle='tooltip' title='Pilih Bulan'>
							<option value=''>Bulan</option>
							<option value='01'>Jan</option>
<option value='02'>Feb</option>
<option value='03'>Mar</option>
<option value='04'>Apr</option>
<option value='05'>Mei</option>
<option value='06'>Jun</option>
<option value='07'>Jul</option>
<option value='08'>Ags</option>
<option value='09'>Sep</option>
<option value='10'>Okt</option>
<option value='11'>Nov</option>
<option value='12'>Des</option>
						</select>
						<select name='pr' id='pr' onChange="this.form.submit();" class="form-control form-control-sm" style="width:135px;" data-toggle='tooltip' title='Pilih Provinsi'>
							<option value=''>00. Indonesia</option>
							<option value='11'>11. Aceh</option>
<option value='12'>12. Sumatera Utara</option>
<option value='13'>13. Sumatera Barat</option>
<option value='14'>14. Riau</option>
<option value='15'>15. Jambi</option>
<option value='16'>16. Sumatera Selatan</option>
<option value='17'>17. Bengkulu</option>
<option value='18'>18. Lampung</option>
<option value='19'>19. Bangka Belitung</option>
<option value='21'>21. Kepulauan Riau</option>
<option value='31'>31. Dki Jakarta</option>
<option value='32'>32. Jawa Barat</option>
<option value='33'>33. Jawa Tengah</option>
<option value='34'>34. Di Yogyakarta</option>
<option value='35'>35. Jawa Timur</option>
<option value='36'>36. Banten</option>
<option value='51'>51. Bali</option>
<option value='52'>52. Nusa Tenggara Barat</option>
<option value='53'>53. Nusa Tenggara Timur</option>
<option value='61'>61. Kalimantan Barat</option>
<option value='62'>62. Kalimantan Tengah</option>
<option value='63'>63. Kalimantan Selatan</option>
<option value='64'>64. Kalimantan Timur</option>
<option value='65'>65. Kalimantan Utara</option>
<option value='71'>71. Sulawesi Utara</option>
<option value='72'>72. Sulawesi Tengah</option>
<option value='73'>73. Sulawesi Selatan</option>
<option value='74'>74. Sulawesi Tenggara</option>
<option value='75'>75. Gorontalo</option>
<option value='76'>76. Sulawesi Barat</option>
<option value='81'>81. Maluku</option>
<option value='82'>82. Maluku Utara</option>
<option value='91'>91. Papua Barat</option>
<option value='94'>94. Papua</option>
						</select>
						<select name='kb' id='kb' onChange="this.form.submit();" class="form-control form-control-sm" style="width:135px;" data-toggle='tooltip' title='Pilih Kab/Kota'>
							<option value=''>Kab/Kota</option>
													</select>
						<select name='jn' id='jn' onChange="this.form.submit();" class="form-control form-control-sm" style="width:135px;" data-toggle='tooltip' title='Pilih Jenis Bencana'>
							<option value=''>Bencana</option>
							<option value='101'>101. Banjir</option>
<option value='102' selected>102. Tanah Longsor</option>
<option value='103'>103. Gelombang Pasang dan Abrasi</option>
<option value='104'>104. Cuaca Ekstrem</option>
<option value='105'>105. Kekeringan</option>
<option value='106'>106. Kebakaran Hutan dan Lahan</option>
<option value='107'>107. Gempabumi</option>
<option value='108'>108. Tsunami</option>
<option value='109'>109. Erupsi Gunung Api</option>
<option value='110'>110. Gempa Bumi dan Tsunami</option>
<option value='111'>111. Letusan Gunung Api</option>
						</select>
					</span>
				</div> <!--row-->
			</form>
			</div>

		  </div><!--bungkus-->
		</div><!--row-->
		
		
		
	<div class="row mt-3 mr-0">
		<div class="row ml-0" style="padding:0px;">

			<div class="col-md-6">
				<div class="card card-default" style="border-radius:10px;box-shadow:inset 1px 1px 10px #888;padding:10px;">
					<div class="card-header">
						<span class="btn-group btn-sm p-0">
							<label class="btn btn-danger btn-sm p-0" id="sort21"><i class="fa fa-sort-amount-asc" aria-hidden="true"></i>
							<input type="radio" class="btn-check" name="sort2" value="1" onClick="cek2()"></label>
							<label class="btn btn-success btn-sm p-0" id="sort22" class="aktif">N
							<input type="radio" class="btn-check" name="sort2" value="2" checked onClick="cek2();"></label>
							<label class="btn btn-warning btn-sm p-0" id="sort23">
							<i class="fa fa-sort-amount-desc" aria-hidden="true"></i>
							<input type="radio" class="btn-check" name="sort2" value="3" onClick="cek2()"></label>
						</span>
						<span style="font-size:13pt;" class="ml-1 p-0"><b>Waktu</b></span><span id="infoWak"></span>
					</div>
					<div class="card-body">
						<div class="row">
							<canvas id="byWak" style="height:350px;"></canvas>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="card card-default" style="border-radius:10px;box-shadow:inset 1px 1px 10px #888;padding:10px;">
					<div class="card-header">
						<span class="btn-group btn-sm p-0" id="pil_tahun">
							<label class="btn btn-danger btn-sm p-0" id="pil_tahun3">3
							<input type="radio" class="btn-check" name="seri" value="3" onClick="cek2()"></label>
							<label class="btn btn-success btn-sm p-0" id="pil_tahun5">5
							<input type="radio" class="btn-check" name="seri" value="5" checked onClick="cek2();"></label>
							<label class="btn btn-warning btn-sm p-0" id="pil_tahun10" class="aktif">10
							<input type="radio" class="btn-check" name="seri" value="10" onClick="cek2()"></label>
						</span>
						<span style="font-size:13pt;"><b>Statistik</b></span><span id="infoSta"></span>
					</div>
					<div class="card-body">
						<div class="row">
							<canvas id="bySta" style="height:350px;"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row p-0 ml-0">

			<div class="col-md-6">
				<div id="cwil" class="card card-default" style="border-radius:10px;box-shadow:inset 1px 1px 10px #888;padding:10px;">
					<div class="card-header">
						<span class="btn-group" id="sor1">
							<label class="btn btn-danger btn-sm p-0" id="sort11"><i class="fa fa-sort-amount-asc" aria-hidden="true"></i>
							<input type="radio" class="btn-check" name="sort1" value="1" onClick="cek1()"></label>
							<label class="btn btn-success btn-sm p-0" id="sort12" class="aktif">N
							<input type="radio" class="btn-check" name="sort1" value="2" checked onClick="cek1();"></label>
							<label class="btn btn-warning btn-sm p-0" id="sort13">
							<i class="fa fa-sort-amount-desc" aria-hidden="true"></i>
							<input type="radio" class="btn-check" name="sort1" value="3" onClick="cek1()"></label>
						</span>
						<span style="font-size:13pt;" class="ml-1"><b>Wilayah</b></span><span id="infoWil"></span>
					</div>
					<div class="card-body" id="dwil">
						<div class="row">
							<canvas id="byWil" style="height:350px;"></canvas>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="card card-default" style="border-radius:10px;box-shadow:inset 1px 1px 10px #888;padding:10px;">
					<div class="card-header">
						<span style="font-size:13pt;"><b>Statistik</b></span><span id="infoBcn"></span>
					</div>
					<div class="card-body">
						<div class="row">
							<canvas id="byBcn" style="height:350px;"></canvas>
						</div>
					</div>
				</div>
			</div>

		</div>
		
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="card card-default w-100" style="border-radius:10px;box-shadow:inset 1px 1px 10px #888;height:100%;">
				<div class="card-header">
					<span style="font-size:13pt;"><b>Profil Bencana Indonesia</b></span><span id="infoProfil"></span>
				</div>
				<div class="card-body">
					<div class="row pl-1 mr-1 ml-1">
						<iframe src="https://dibi.bnpb.go.id/peta2/index2" frameborder="0" scrolling="no" onload="resizeIframe(this)" width="100%" height="450px"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>

	</div><!--col-mod-9-->


	<!--kanan-->
	<div class="col-md-3 mt-3" style="padding-right:20px;padding-left:0px;padding-bottom:5px;">
		<div class='row'>
			<div class="card card-default mt-0 ml-4" style="border-radius:10px;box-shadow:inset 1px 1px 10px #888;width:90%;">
				<div class="card-body">
					<table class='table table-striped'>
						<tr>
							<td>Pengunjung hari ini</td>
							<td>1 org</td>
						</tr>
						<tr>
							<td>Total</td>
							<td>129,830 org</td>
						</tr>
						<tr>
							<td>Online</td>
							<td>1 org</td>
						</tr>
						<tr>
							<td colspan='2' align="center">
								<a target="_blank" href="https://wa.me/6285175002050?text=info" class="btn btn-xs" data-toggle="popover" data-placement="top" title="Whatsapp Bot" data-content="Layanan Informasi Melalui Whatsapp-Bot"><img src="https://dibi.bnpb.go.id/assets/mytube/images/whatsapp.png" width="20">WhatsApp Bot</a>
								<a target="_blank" href="https://t.me/xdibibaru" class="btn btn-xs" data-toggle="popover" data-placement="left" title="Telegram Bot" data-content="Layanan Informasi Melalui Telegram-Bot"><img src="https://dibi.bnpb.go.id/assets/mytube/images/telegram.png" width="20">Telegram Bot</a>
							</td>
					</table>
				</div>
			</div>
		</div>
						<div class="row">
			<div class="card card-default mt-0 ml-4" style="border-radius:10px;box-shadow:inset 1px 1px 10px #888;width:90%;">
				<div class="card-header">
					<span style="font-size:13pt;">
						<b>

							<a onclick="buka(66497);" href='#' data-toggle='tooltip' title='Klik disini untuk melihat detailnya' class='title-list2'>
								<i class="fa fa-map-marker" aria-hidden="true" style="color:red;"></i>3301102202411251 : Tanah Longsor</b></a>

					</span>
				</div>
				<div class="card-body">
					<div style="border:solid 1px #e0e0e0;overflow:auto;">
					25-11-2024, kejadian Tebing Batu Longsor menutup akses jalan Kabupaten di Desa  Bantarmangu, Kecamatan Cimanggu, Kab. Cilacap, Jawa Tengah					<img class='foto' src='https://dibi.bnpb.go.id/upload/bencana/p3301102202411251.jpeg' style='border:solid 1px #e0e0e0;border-radius:7px;width:98%;box-shadow:1px 1px 10px #888;'>Terjadi Tebing Batu Longsor menutup akses jalan Kabupaten di Desa  Bantarmangu, Kecamatan Cimanggu pada Senin, 25 November 2024 jam 08.00					</div>
				</div>
			</div>
		</div>
					<div class="row">
			<div class="card card-default mt-0 ml-4" style="border-radius:10px;box-shadow:inset 1px 1px 10px #888;width:90%;">
				<div class="card-header">
					<span style="font-size:13pt;">
						<b>

							<a onclick="buka(66495);" href='#' data-toggle='tooltip' title='Klik disini untuk melihat detailnya' class='title-list2'>
								<i class="fa fa-map-marker" aria-hidden="true" style="color:red;"></i>3301102202411241 : Tanah Longsor</b></a>

					</span>
				</div>
				<div class="card-body">
					<div style="border:solid 1px #e0e0e0;overflow:auto;">
					24-11-2024, Kejadian tanah longsor di Desa Citembong Kecamatan Bantarsari, Kab. Cilacap, Jawa Tengah					<img class='foto' src='https://dibi.bnpb.go.id/upload/bencana/p3301102202411241.jpeg' style='border:solid 1px #e0e0e0;border-radius:7px;width:98%;box-shadow:1px 1px 10px #888;'>Minggu, 24 November 2024 Pukul 17.00 wib terjadi hujan dengan intensitas tinggi mengakibatkan tanah longsor di  Dusun Karangtengah  RT 01 RW 04, Desa Citembong Kecamatan					</div>
				</div>
			</div>
		</div>
					<div class="row">
			<div class="card card-default mt-0 ml-4" style="border-radius:10px;box-shadow:inset 1px 1px 10px #888;width:90%;">
				<div class="card-header">
					<span style="font-size:13pt;">
						<b>

							<a onclick="buka(66496);" href='#' data-toggle='tooltip' title='Klik disini untuk melihat detailnya' class='title-list2'>
								<i class="fa fa-map-marker" aria-hidden="true" style="color:red;"></i>3301102202411242 : Tanah Longsor</b></a>

					</span>
				</div>
				<div class="card-body">
					<div style="border:solid 1px #e0e0e0;overflow:auto;">
					24-11-2024, Kejadian Turap penahan tebing jalan lingkungan dan halaman rumah longsor di Desa Madura, Kecamatan Wanareja, Kab. Cilacap, Jawa Tengah					<img class='foto' src='https://dibi.bnpb.go.id/upload/bencana/p3301102202411242.jpeg' style='border:solid 1px #e0e0e0;border-radius:7px;width:98%;box-shadow:1px 1px 10px #888;'>Minggu, 24 November 2024, Jam : 16.30 WIB terjadi Turap penahan tebing jalan lingkungan dan halaman rumah longsor di Desa Madura, Kecamatan Wanareja di Dusun Margasari RT 01 RW 10 Desa Madura,					</div>
				</div>
			</div>
		</div>
					<div class="row">
			<div class="card card-default mt-0 ml-4" style="border-radius:10px;box-shadow:inset 1px 1px 10px #888;width:90%;">
				<div class="card-header">
					<span style="font-size:13pt;">
						<b>

							<a onclick="buka(66498);" href='#' data-toggle='tooltip' title='Klik disini untuk melihat detailnya' class='title-list2'>
								<i class="fa fa-map-marker" aria-hidden="true" style="color:red;"></i>3301101202411241 : Banjir</b></a>

					</span>
				</div>
				<div class="card-body">
					<div style="border:solid 1px #e0e0e0;overflow:auto;">
					24-11-2024, Banjir di Desa Padangsari Kecamatan Majenang, Kab. Cilacap, Jawa Tengah					<img class='foto' src='https://dibi.bnpb.go.id/upload/bencana/p3301101202411241.jpeg' style='border:solid 1px #e0e0e0;border-radius:7px;width:98%;box-shadow:1px 1px 10px #888;'>Pada hari hujan lebat disertai angin dari pukul 14 00 WIB sampe jam 17 :30 WIB    diiwilayah  dusun Purwosari  dan luapan air  sungai Solokan satu yang menyebabkan air limpas  ke pemukiman warga ,					</div>
				</div>
			</div>
		</div>
					<div class="row">
			<div class="card card-default mt-0 ml-4" style="border-radius:10px;box-shadow:inset 1px 1px 10px #888;width:90%;">
				<div class="card-header">
					<span style="font-size:13pt;">
						<b>

							<a onclick="buka(66492);" href='#' data-toggle='tooltip' title='Klik disini untuk melihat detailnya' class='title-list2'>
								<i class="fa fa-map-marker" aria-hidden="true" style="color:red;"></i>3374999202411231 : Lainnya</b></a>

					</span>
				</div>
				<div class="card-body">
					<div style="border:solid 1px #e0e0e0;overflow:auto;">
					23-11-2024, kebakaran rumah huni, Kota Kota Semarang, Jawa Tengah					Hari        : Sabtu
Tanggal :  23 November 2024
Pukul     :    04.30 WIB

Lokasi Kejadian
Provinsi: Jawa Tengah
Kota : Semarang 
Kecamatan :  Semarang Selatan
Kelurahan :  Lamper					</div>
				</div>
			</div>
		</div>
					<div class="row">
			<div class="card card-default mt-0 ml-4" style="border-radius:10px;box-shadow:inset 1px 1px 10px #888;width:90%;">
				<div class="card-header">
					<span style="font-size:13pt;">
						<b>

							<a onclick="buka(66493);" href='#' data-toggle='tooltip' title='Klik disini untuk melihat detailnya' class='title-list2'>
								<i class="fa fa-map-marker" aria-hidden="true" style="color:red;"></i>3374999202411232 : Lainnya</b></a>

					</span>
				</div>
				<div class="card-body">
					<div style="border:solid 1px #e0e0e0;overflow:auto;">
					23-11-2024, laka air, Kota Kota Semarang, Jawa Tengah					Kepada Yth.
1. Walikota Semarang 
2. Sekda Kota Semarang 
3. Kalak BPBD Kota Semarang 
4. KALAKHAR BPBD Provinsi Jawa Tengah 
5. Kepala BNPB 
6. Deputi Bidang Penanganan Darurat BNPB 

WAKTU					</div>
				</div>
			</div>
		</div>
					<div class="row">
			<div class="card card-default mt-0 ml-4" style="border-radius:10px;box-shadow:inset 1px 1px 10px #888;width:90%;">
				<div class="card-header">
					<span style="font-size:13pt;">
						<b>

							<a onclick="buka(66490);" href='#' data-toggle='tooltip' title='Klik disini untuk melihat detailnya' class='title-list2'>
								<i class="fa fa-map-marker" aria-hidden="true" style="color:red;"></i>3301101202411221 : Banjir</b></a>

					</span>
				</div>
				<div class="card-body">
					<div style="border:solid 1px #e0e0e0;overflow:auto;">
					22-11-2024, Turap Longsor di SMP Negeri 3 Satu Atap Karangpucung Desa Gunungtelu Kecamatan Karangpucung, Kab. Cilacap, Jawa Tengah					<img class='foto' src='https://dibi.bnpb.go.id/upload/bencana/p3301101202411221.jpeg' style='border:solid 1px #e0e0e0;border-radius:7px;width:98%;box-shadow:1px 1px 10px #888;'>Hari : Jumat, 22 November 2024
Pukul : 08.00 s.d 10.30 wib
terjadi Turap Longsor di SMP Negeri 3 Satu Atap Karangpucung Desa Gunungtelu Kecamatan					</div>
				</div>
			</div>
		</div>
					<div class="row">
			<div class="card card-default mt-0 ml-4" style="border-radius:10px;box-shadow:inset 1px 1px 10px #888;width:90%;">
				<div class="card-header">
					<span style="font-size:13pt;">
						<b>

							<a onclick="buka(66494);" href='#' data-toggle='tooltip' title='Klik disini untuk melihat detailnya' class='title-list2'>
								<i class="fa fa-map-marker" aria-hidden="true" style="color:red;"></i>3374999202411221 : Lainnya</b></a>

					</span>
				</div>
				<div class="card-body">
					<div style="border:solid 1px #e0e0e0;overflow:auto;">
					22-11-2024, atap rumah roboh, Kota Kota Semarang, Jawa Tengah					Waktu Kejadian
Hari : Jumat
Tanggal : 22 November 2024
Pukul : ± 16.30 WIB 

Lokasi Kejadian
Kota : Semarang
Kecamatan : Semarang Utara
Kelurahan : Plombokan.
Jalan/gang : Jl. Satria					</div>
				</div>
			</div>
		</div>
					<div class="row">
			<div class="card card-default mt-0 ml-4" style="border-radius:10px;box-shadow:inset 1px 1px 10px #888;width:90%;">
				<div class="card-header">
					<span style="font-size:13pt;">
						<b>

							<a onclick="buka(66486);" href='#' data-toggle='tooltip' title='Klik disini untuk melihat detailnya' class='title-list2'>
								<i class="fa fa-map-marker" aria-hidden="true" style="color:red;"></i>3374999202411211 : Lainnya</b></a>

					</span>
				</div>
				<div class="card-body">
					<div style="border:solid 1px #e0e0e0;overflow:auto;">
					21-11-2024, kecelakaan transportasi, Kota Kota Semarang, Jawa Tengah					Kepada Yth.
1. Walikota Semarang 
2. Sekda Kota Semarang 
3. Kalak BPBD Kota Semarang 
4. KALAKHAR BPBD Provinsi Jawa Tengah 
5. Kepala BNPB 
6. Deputi Bidang Penanganan Darurat BNPB					</div>
				</div>
			</div>
		</div>
					<div class="row">
			<div class="card card-default mt-0 ml-4" style="border-radius:10px;box-shadow:inset 1px 1px 10px #888;width:90%;">
				<div class="card-header">
					<span style="font-size:13pt;">
						<b>

							<a onclick="buka(66487);" href='#' data-toggle='tooltip' title='Klik disini untuk melihat detailnya' class='title-list2'>
								<i class="fa fa-map-marker" aria-hidden="true" style="color:red;"></i>3374999202411212 : Lainnya</b></a>

					</span>
				</div>
				<div class="card-body">
					<div style="border:solid 1px #e0e0e0;overflow:auto;">
					21-11-2024, puting beliung, Kota Kota Semarang, Jawa Tengah					Waktu Kejadian
Hari : Kamis
Tanggal : 21 November 2024
Pukul : ± 14.15 WIB 

Lokasi Kejadian
Kota : Semarang.
Kecamatan : Pedurungan 
Kelurahan : Gemah
Jalan/gang : Jl. Pedurungan					</div>
				</div>
			</div>
		</div>
			</div>
	
	
	</div><!--row--><!--https://img.youtube.com/vi/Xt08OmYOFq8(id-youtube)/default.jpg-->
	
					
				</div><!--box-body-->	
			</div><!--box-->
		</div><!--col-xs-12-->
	</div><!--row-->
</section>


	<div class="modal" id="empModal" role="dialog">
		<div class="modal-dialog modal-lg">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Info Bencana</h4>
					<button type="button" class="close" data-dismiss="modal" onclick="tutup();">&times;</button>
				</div>
				<div class="modal-body">
				</div>
				<div class="modal-footer">
					<!--<button type="button" class="btn btn-default" onclick="cetak();">Print</button>-->
					<button type="button" class="btn btn-default" onclick="print_pdf($('#idb').val());"><i class="fa fa-print"></i></button>
					<button type="button" class="btn btn-default" data-dismiss="modal" onclick="tutup();">Close</button>
				</div>
			</div>
		</div>
	</div>


<script>
	var k101 = L.layerGroup();
	var k102 = L.layerGroup();
	var k103 = L.layerGroup();
	var k104 = L.layerGroup();
	var k105 = L.layerGroup();
	var k106 = L.layerGroup();
	var k107 = L.layerGroup();
	var k108 = L.layerGroup();
	var k109 = L.layerGroup();
	var k110 = L.layerGroup();
	var k111 = L.layerGroup();
	var k999 = L.layerGroup();
	var ikon101=new L.icon({iconUrl:'https://dibi.bnpb.go.id/assets/icons/101.png',iconSize:[16,20]});
var ikon101b=new L.icon.pulse({iconUrl:'https://dibi.bnpb.go.id/assets/icons/101.png',iconSize:[16,16],color:'red'});
var ikon102=new L.icon({iconUrl:'https://dibi.bnpb.go.id/assets/icons/102.png',iconSize:[16,20]});
var ikon102b=new L.icon.pulse({iconUrl:'https://dibi.bnpb.go.id/assets/icons/102.png',iconSize:[16,16],color:'red'});
var ikon103=new L.icon({iconUrl:'https://dibi.bnpb.go.id/assets/icons/103.png',iconSize:[16,20]});
var ikon103b=new L.icon.pulse({iconUrl:'https://dibi.bnpb.go.id/assets/icons/103.png',iconSize:[16,16],color:'red'});
var ikon104=new L.icon({iconUrl:'https://dibi.bnpb.go.id/assets/icons/104.png',iconSize:[16,20]});
var ikon104b=new L.icon.pulse({iconUrl:'https://dibi.bnpb.go.id/assets/icons/104.png',iconSize:[16,16],color:'red'});
var ikon105=new L.icon({iconUrl:'https://dibi.bnpb.go.id/assets/icons/105.png',iconSize:[16,20]});
var ikon105b=new L.icon.pulse({iconUrl:'https://dibi.bnpb.go.id/assets/icons/105.png',iconSize:[16,16],color:'red'});
var ikon106=new L.icon({iconUrl:'https://dibi.bnpb.go.id/assets/icons/106.png',iconSize:[16,20]});
var ikon106b=new L.icon.pulse({iconUrl:'https://dibi.bnpb.go.id/assets/icons/106.png',iconSize:[16,16],color:'red'});
var ikon107=new L.icon({iconUrl:'https://dibi.bnpb.go.id/assets/icons/107.png',iconSize:[16,20]});
var ikon107b=new L.icon.pulse({iconUrl:'https://dibi.bnpb.go.id/assets/icons/107.png',iconSize:[16,16],color:'red'});
var ikon108=new L.icon({iconUrl:'https://dibi.bnpb.go.id/assets/icons/108.png',iconSize:[16,20]});
var ikon108b=new L.icon.pulse({iconUrl:'https://dibi.bnpb.go.id/assets/icons/108.png',iconSize:[16,16],color:'red'});
var ikon109=new L.icon({iconUrl:'https://dibi.bnpb.go.id/assets/icons/109.png',iconSize:[16,20]});
var ikon109b=new L.icon.pulse({iconUrl:'https://dibi.bnpb.go.id/assets/icons/109.png',iconSize:[16,16],color:'red'});
var ikon110=new L.icon({iconUrl:'https://dibi.bnpb.go.id/assets/icons/110.png',iconSize:[16,20]});
var ikon110b=new L.icon.pulse({iconUrl:'https://dibi.bnpb.go.id/assets/icons/110.png',iconSize:[16,16],color:'red'});
var ikon111=new L.icon({iconUrl:'https://dibi.bnpb.go.id/assets/icons/111.png',iconSize:[16,20]});
var ikon111b=new L.icon.pulse({iconUrl:'https://dibi.bnpb.go.id/assets/icons/111.png',iconSize:[16,16],color:'red'});

  var satelite = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      id: 'mapbox/satellite-v9'
	});

	var osmLink = '<a href="https://openstreetmap.org">OpenStreetMap</a>',
			thunLink = '<a href="https://thunderforest.com/">Thunderforest</a>',
			atlasLink = '<a href="https://thunderforest.com/">Atlas</a>',
			ocycleLink = '<a href="https://thunderforest.com/">Open Cycle</a>';
	
	var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
			osmAttrib = '&copy; ' + osmLink + ' Contributors',
			landUrl = 'https://tile.thunderforest.com/landscape/{z}/{x}/{y}.png?apikey=faab8bdb32a94b4c821e188d257e31ee',
			thunAttrib = '&copy; '+osmLink+' Contributors & '+thunLink,
			atlasUrl = 'https://tile.thunderforest.com/atlas/{z}/{x}/{y}.png?apikey=faab8bdb32a94b4c821e188d257e31ee',
			atlasAttrib = '&copy; '+osmLink+' Contributors & '+atlasLink,
			ocycleUrl = 'https://tile.thunderforest.com/cycle/{z}/{x}/{y}.png?apikey=faab8bdb32a94b4c821e188d257e31ee',
			ocycleAttrib = '&copy; '+osmLink+' Contributors & '+atlasLink;

	var osmMap = L.tileLayer(osmUrl, {attribution: osmAttrib}),
			landMap = L.tileLayer(landUrl, {attribution: thunAttrib}),
			atlasMap = L.tileLayer(atlasUrl, {attribution: atlasAttrib}),
			ocycleMap = L.tileLayer(ocycleUrl, {attribution: ocycleAttrib});

	var map = L.map("map", {
			attributionControl: false,
			zoomControl: true,
			layers: [satelite],
	}).setView(new L.LatLng(-2.548926,118.0148634),4);
	L.control.bigImage({position: 'topleft'}).addTo(map);
	
	var logo = L.control({position: 'bottomleft'});
	logo.onAdd = function(map){
			var div = L.DomUtil.create('div', 'myclass');
			div.innerHTML= "<img src='https://dibi.bnpb.go.id/assets/icon2/favicon2.png'/>";
			return div;
	}
	logo.addTo(map);
	
	var baseLayers = {
		"OSM Mapnik": osmMap,
    "Satelite": satelite,
		"Landscape": landMap,
		"Atlas": atlasMap
	};
//		"OpenCycle": ocycleMap
	
	var p3301102202411251=L.marker([-7.34,108.86]
,{icon:ikon102b})
.addTo(map).bindPopup('Tanah Longsor, (2024-11-25)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66497);})
.addTo(k102);
var p3301102202411241=L.marker([-7.48834,108.942]
,{icon:ikon102b})
.addTo(map).bindPopup('Tanah Longsor, (2024-11-24)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66495);})
.addTo(k102);
var p3301102202411242=L.marker([-7.33994,108.634]
,{icon:ikon102b})
.addTo(map).bindPopup('Tanah Longsor, (2024-11-24)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66496);})
.addTo(k102);
var p3301102202411201=L.marker([-7.36726,108.859]
,{icon:ikon102b})
.addTo(map).bindPopup('Tanah Longsor, (2024-11-20)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66467);})
.addTo(k102);
var p3301102202411211=L.marker([-7.43843,108.761]
,{icon:ikon102b})
.addTo(map).bindPopup('Tanah Longsor, (2024-11-20)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66481);})
.addTo(k102);
var p1273102202411201=L.marker([1.73423,98.8034]
,{icon:ikon102b})
.addTo(map).bindPopup('Tanah Longsor, (2024-11-20)<br>Kota Sibolga')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66489);})
.addTo(k102);
var p3374102202411191=L.marker([-7.09612,110.41]
,{icon:ikon102b})
.addTo(map).bindPopup('Tanah Longsor, (2024-11-19)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66468);})
.addTo(k102);
var p3301102202411191=L.marker([-7.47883,108.909]
,{icon:ikon102b})
.addTo(map).bindPopup('Tanah Longsor, (2024-11-19)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66482);})
.addTo(k102);
var p3301102202411181=L.marker([-7.4779,108.916]
,{icon:ikon102b})
.addTo(map).bindPopup('Tanah Longsor, (2024-11-18)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66459);})
.addTo(k102);
var p1273102202411171=L.marker([1.73423,98.8034]
,{icon:ikon102b})
.addTo(map).bindPopup('Tanah Longsor, (2024-11-17)<br>Kota Sibolga')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66475);})
.addTo(k102);
var p1273102202411172=L.marker([1.73392,98.7941]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-11-17)<br>Kota Sibolga')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66484);})
.addTo(k102);
var p3374102202411091=L.marker([-6.97073,110.341]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-11-09)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66241);})
.addTo(k102);
var p1208102202410281=L.marker([2.84726,99.5341]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-10-28)<br>Asahan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66390);})
.addTo(k102);
var p1208102202410271=L.marker([2.84726,99.5341]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-10-27)<br>Asahan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66389);})
.addTo(k102);
var p1208102202410231=L.marker([2.84726,99.5341]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-10-23)<br>Asahan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66388);})
.addTo(k102);
var p1222102202410171=L.marker([1.83378,100.059]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-10-17)<br>Labuhan Batu Selatan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66456);})
.addTo(k102);
var p1205102202410161=L.marker([2.00044,99.0574]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-10-16)<br>Tapanuli Utara')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66431);})
.addTo(k102);
var p3374102202410161=L.marker([-6.98692,110.4]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-10-16)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65927);})
.addTo(k102);
var p1215102202410151=L.marker([2.24527,98.609]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-10-15)<br>Humbang Hasundutan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66384);})
.addTo(k102);
var p1217102202410151=L.marker([2.61003,98.7771]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-10-15)<br>Samosir')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66393);})
.addTo(k102);
var p1273102202410141=L.marker([1.72481,98.8001]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-10-14)<br>Kota Sibolga')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66465);})
.addTo(k102);
var p1216102202410131=L.marker([2.52434,98.2684]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-10-13)<br>Pakpak Bharat')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66413);})
.addTo(k102);
var p1202102202410131=L.marker([0.779605,99.4039]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-10-13)<br>Mandailing Natal')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66272);})
.addTo(k102);
var p1203102202410121=L.marker([1.55107,99.178]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-10-12)<br>Tapanuli Selatan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66402);})
.addTo(k102);
var p1216102202410121=L.marker([2.52434,98.2684]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-10-12)<br>Pakpak Bharat')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66415);})
.addTo(k102);
var p1217102202410111=L.marker([2.61003,98.7771]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-10-11)<br>Samosir')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66395);})
.addTo(k102);
var p1202102202410111=L.marker([0.779605,99.4039]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-10-11)<br>Mandailing Natal')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66271);})
.addTo(k102);
var p1203102202410101=L.marker([1.55107,99.178]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-10-10)<br>Tapanuli Selatan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66401);})
.addTo(k102);
var p1216102202410101=L.marker([2.52434,98.2684]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-10-10)<br>Pakpak Bharat')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66414);})
.addTo(k102);
var p1205102202410101=L.marker([2.00044,99.0574]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-10-10)<br>Tapanuli Utara')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66430);})
.addTo(k102);
var p1202102202410101=L.marker([0.779605,99.4039]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-10-10)<br>Mandailing Natal')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66270);})
.addTo(k102);
var p1204102202410061=L.marker([1.86957,98.5926]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-10-06)<br>Tapanuli Tengah')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66400);})
.addTo(k102);
var p1222102202410041=L.marker([1.83378,100.059]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-10-04)<br>Labuhan Batu Selatan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66455);})
.addTo(k102);
var p1217102202409291=L.marker([2.61003,98.7771]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-09-29)<br>Samosir')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66392);})
.addTo(k102);
var p1211102202409271=L.marker([3.09963,98.2497]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-09-27)<br>Karo')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66434);})
.addTo(k102);
var p3312102202409251=L.marker([-7.8391,110.984]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-09-25)<br>Wonogiri')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65816);})
.addTo(k102);
var p1216102202409221=L.marker([2.52434,98.2684]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-09-22)<br>Pakpak Bharat')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66412);})
.addTo(k102);
var p1212102202409131=L.marker([3.47988,98.7073]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-09-13)<br>Deli Serdang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65901);})
.addTo(k102);
var p1212102202409121=L.marker([3.47988,98.7073]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-09-12)<br>Deli Serdang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65899);})
.addTo(k102);
var p1212102202409111=L.marker([3.47988,98.7073]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-09-11)<br>Deli Serdang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65898);})
.addTo(k102);
var p1202102202409071=L.marker([0.779605,99.4039]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-09-07)<br>Mandailing Natal')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66265);})
.addTo(k102);
var p1212102202409021=L.marker([3.47988,98.7073]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-09-02)<br>Deli Serdang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65879);})
.addTo(k102);
var p1273102202408311=L.marker([1.73392,98.7941]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-08-31)<br>Kota Sibolga')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66444);})
.addTo(k102);
var p1202102202408271=L.marker([0.779605,99.4039]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-08-27)<br>Mandailing Natal')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66262);})
.addTo(k102);
var p1203102202408241=L.marker([1.55107,99.178]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-08-24)<br>Tapanuli Selatan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66229);})
.addTo(k102);
var p1273102202408201=L.marker([1.74762,98.7745]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-08-20)<br>Kota Sibolga')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66439);})
.addTo(k102);
var p1273102202408202=L.marker([1.73392,98.7941]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-08-20)<br>Kota Sibolga')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66441);})
.addTo(k102);
var p1273102202408203=L.marker([1.73423,98.8034]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-08-20)<br>Kota Sibolga')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66442);})
.addTo(k102);
var p1271102202408201=L.marker([1.73886,98.7884]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-08-20)<br>Kota Sibolga')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66261);})
.addTo(k102);
var p1273102202408181=L.marker([1.73423,98.8034]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-08-18)<br>Kota Sibolga')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66427);})
.addTo(k102);
var p1273102202408182=L.marker([1.73423,98.8034]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-08-18)<br>Kota Sibolga')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66437);})
.addTo(k102);
var p1271102202408181=L.marker([1.73886,98.7884]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-08-18)<br>Kota Sibolga')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65763);})
.addTo(k102);
var p1273102202408161=L.marker([1.73392,98.7941]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-08-16)<br>Kota Sibolga')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66426);})
.addTo(k102);
var p1273102202408151=L.marker([1.73392,98.7941]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-08-15)<br>Kota Sibolga')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66422);})
.addTo(k102);
var p1273102202408152=L.marker([1.73423,98.8034]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-08-15)<br>Kota Sibolga')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66423);})
.addTo(k102);
var p1273102202408153=L.marker([1.73737,98.8026]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-08-15)<br>Kota Sibolga')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66425);})
.addTo(k102);
var p1271102202408151=L.marker([1.73886,98.7884]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-08-15)<br>Kota Sibolga')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65747);})
.addTo(k102);
var p1278102202408111=L.marker([1.26178,97.6113]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-08-11)<br>Kota Gunungsitoli')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65723);})
.addTo(k102);
var p1211102202408061=L.marker([3.09963,98.2497]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-08-06)<br>Karo')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65709);})
.addTo(k102);
var p1212102202407301=L.marker([3.47988,98.7073]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-07-30)<br>Deli Serdang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65675);})
.addTo(k102);
var p1212102202407171=L.marker([3.47988,98.7073]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-07-17)<br>Toba')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65599);})
.addTo(k102);
var p7174102202407111=L.marker([0.727363,124.288]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-07-11)<br>Kota Kotamobagu')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65530);})
.addTo(k102);
var p1222102202407101=L.marker([1.83378,100.059]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-07-10)<br>Labuhanbatu Selatan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65538);})
.addTo(k102);
var p1273102202407061=L.marker([1.75368,98.7829]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-07-06)<br>Kota Sibolga')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66345);})
.addTo(k102);
var p1271102202407061=L.marker([1.73886,98.7884]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-07-06)<br>Kota Medan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65535);})
.addTo(k102);
var p1603102202407031=L.marker([-4.0366,103.768]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-07-03)<br>Muara Enim')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65508);})
.addTo(k102);
var p1603102202406281=L.marker([-3.6634,103.764]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-06-28)<br>Muara Enim')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65493);})
.addTo(k102);
var p1212102202406261=L.marker([3.47988,98.7073]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-06-26)<br>Toba')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65487);})
.addTo(k102);
var p1271102202406211=L.marker([1.73886,98.7884]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-06-21)<br>Kota Medan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65480);})
.addTo(k102);
var p1217102202406161=L.marker([2.61003,98.7771]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-06-16)<br>Samosir')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65437);})
.addTo(k102);
var p1603102202406151=L.marker([-4.21214,103.446]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-06-15)<br>Muara Enim')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65406);})
.addTo(k102);
var p1603102202406152=L.marker([-4.12313,103.622]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-06-15)<br>Muara Enim')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65411);})
.addTo(k102);
var p1603102202406153=L.marker([-4.18737,103.555]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-06-15)<br>Muara Enim')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65412);})
.addTo(k102);
var p1603102202406141=L.marker([-4.19085,103.548]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-06-14)<br>Muara Enim')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65413);})
.addTo(k102);
var p1611102202406141=L.marker([-3.71705,102.907]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-06-14)<br>Empat Lawang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65495);})
.addTo(k102);
var p1273102202406101=L.marker([2.95379,99.0635]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-06-10)<br>Kota Sibolga')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65433);})
.addTo(k102);
var p1216102202406091=L.marker([2.52434,98.2684]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-06-09)<br>Humbang Hasundutan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65407);})
.addTo(k102);
var p5311102202406071=L.marker([-8.69778,121.668]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-06-07)<br>Sumba Timur')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65372);})
.addTo(k102);
var p7174102202406041=L.marker([0.749211,124.305]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-06-04)<br>Kota Kotamobagu')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65355);})
.addTo(k102);
var p7210102202406041=L.marker([-1.34459,119.963]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-06-04)<br>Sigi')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65367);})
.addTo(k102);
var p1212102202405281=L.marker([3.47988,98.7073]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-28)<br>Toba')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65339);})
.addTo(k102);
var p1210102202405271=L.marker([2.83608,98.2531]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-27)<br>Labuhanbatu')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65348);})
.addTo(k102);
var p1802102202405251=L.marker([-5.35979,104.631]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-25)<br>Lampung Tengah')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65336);})
.addTo(k102);
var p1203102202405221=L.marker([1.55107,99.178]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-22)<br>Tapanuli Selatan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65323);})
.addTo(k102);
var p5311102202405221=L.marker([-8.82092,121.683]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-22)<br>Sumba Timur')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65340);})
.addTo(k102);
var p1212102202405211=L.marker([3.47988,98.7073]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-21)<br>Toba')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65318);})
.addTo(k102);
var p1220102202405201=L.marker([1.63655,99.8396]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-20)<br>Padang Lawas Utara')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65310);})
.addTo(k102);
var p1219102202405201=L.marker([3.23014,99.4801]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-20)<br>Batu Bara')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65317);})
.addTo(k102);
var p1210102202405201=L.marker([2.83608,98.2531]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-20)<br>Labuhanbatu')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65320);})
.addTo(k102);
var p1203102202405201=L.marker([1.55107,99.178]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-20)<br>Tapanuli Selatan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65322);})
.addTo(k102);
var p1203102202405191=L.marker([1.55107,99.178]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-19)<br>Tapanuli Selatan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65308);})
.addTo(k102);
var p1203102202405141=L.marker([1.55107,99.178]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-14)<br>Tapanuli Selatan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65290);})
.addTo(k102);
var p1603102202405141=L.marker([4.1416,103.345]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-14)<br>Muara Enim')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65272);})
.addTo(k102);
var p1211102202405131=L.marker([3.09963,98.2497]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-13)<br>Dairi')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65267);})
.addTo(k102);
var p1202102202405121=L.marker([0.779605,99.4039]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-12)<br>Tapanuli Utara')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65300);})
.addTo(k102);
var p1305102202405121=L.marker([-0.461421,100.545]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-12)<br>Padang Pariaman')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65225);})
.addTo(k102);
var p1203102202405121=L.marker([1.55107,99.178]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-12)<br>Tapanuli Selatan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65255);})
.addTo(k102);
var p1212102202405111=L.marker([3.47988,98.7073]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-11)<br>Toba')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65241);})
.addTo(k102);
var p1202102202405101=L.marker([0.779605,99.4039]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-10)<br>Tapanuli Utara')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65266);})
.addTo(k102);
var p1210102202405101=L.marker([2.83608,98.2531]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-10)<br>Labuhanbatu')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65268);})
.addTo(k102);
var p1205102202405091=L.marker([2.00044,99.0574]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-09)<br>Langkat')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65257);})
.addTo(k102);
var p1217102202405091=L.marker([2.61003,98.7771]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-09)<br>Samosir')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65265);})
.addTo(k102);
var p1203102202405071=L.marker([1.55107,99.178]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-07)<br>Tapanuli Selatan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65250);})
.addTo(k102);
var p1216102202405061=L.marker([2.52434,98.2684]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-06)<br>Humbang Hasundutan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65263);})
.addTo(k102);
var p1305102202405051=L.marker([-0.386235,100.653]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-05)<br>Padang Pariaman')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65196);})
.addTo(k102);
var p5311102202405041=L.marker([-8.84118,121.672]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-04)<br>Sumba Timur')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65204);})
.addTo(k102);
var p1210102202405041=L.marker([2.83608,98.2531]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-04)<br>Labuhanbatu')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65261);})
.addTo(k102);
var p1305102202405011=L.marker([-0.498498,100.453]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-05-01)<br>Padang Pariaman')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65198);})
.addTo(k102);
var p7210102202404301=L.marker([-1.38206,119.979]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-30)<br>Sigi')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65161);})
.addTo(k102);
var p1212102202404281=L.marker([3.47988,98.7073]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-28)<br>Toba')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65166);})
.addTo(k102);
var p3374102202404261=L.marker([-6.99859,110.403]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-26)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65158);})
.addTo(k102);
var p1213102202404251=L.marker([3.75991,98.2306]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-25)<br>Mandailing Natal')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65146);})
.addTo(k102);
var p1603102202404241=L.marker([-4.23575,103.516]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-24)<br>Muara Enim')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65280);})
.addTo(k102);
var p3507102202404241=L.marker([-7.88345,112.734]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-24)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66029);})
.addTo(k102);
var p1202102202404221=L.marker([0.779605,99.4039]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-22)<br>Tapanuli Utara')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65113);})
.addTo(k102);
var p1216102202404221=L.marker([2.52434,98.2684]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-22)<br>Humbang Hasundutan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65115);})
.addTo(k102);
var p3374102202404221=L.marker([-6.99527,110.356]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-22)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65127);})
.addTo(k102);
var p3374102202404211=L.marker([-7.02082,110.385]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-21)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65124);})
.addTo(k102);
var p1212102202404201=L.marker([3.47988,98.7073]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-20)<br>Toba')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65145);})
.addTo(k102);
var p3507102202404201=L.marker([-8.3261,112.914]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-20)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66027);})
.addTo(k102);
var p1212102202404191=L.marker([3.47988,98.7073]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-19)<br>Toba')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65088);})
.addTo(k102);
var p3374102202404181=L.marker([-7.09442,110.419]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-18)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65073);})
.addTo(k102);
var p3374102202404182=L.marker([-7.09221,110.419]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-18)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65075);})
.addTo(k102);
var p3374102202404183=L.marker([-7.07347,110.388]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-18)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65123);})
.addTo(k102);
var p1216102202404171=L.marker([2.52434,98.2684]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-17)<br>Humbang Hasundutan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65101);})
.addTo(k102);
var p7210102202404281=L.marker([-1.36814,120.026]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-17)<br>Sigi')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65151);})
.addTo(k102);
var p1204102202404161=L.marker([1.86957,98.5926]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-16)<br>Nias')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65093);})
.addTo(k102);
var p1210102202404161=L.marker([2.83608,98.2531]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-16)<br>Labuhanbatu')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65097);})
.addTo(k102);
var p3513102202404181=L.marker([-7.83958,113.496]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-16)<br>Probolinggo')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65427);})
.addTo(k102);
var p3374102202404151=L.marker([-6.99936,110.374]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-15)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65125);})
.addTo(k102);
var p1202102202404131=L.marker([0.779605,99.4039]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-13)<br>Tapanuli Utara')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65053);})
.addTo(k102);
var p3507102202404131=L.marker([-7.88345,112.734]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-13)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66021);})
.addTo(k102);
var p3507102202404132=L.marker([-7.88345,112.734]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-13)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66023);})
.addTo(k102);
var p3374102202404091=L.marker([-7.0273,110.421]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-09)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65060);})
.addTo(k102);
var p3301102202404081=L.marker([-7.22114,108.727]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-08)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65051);})
.addTo(k102);
var p3374102202404061=L.marker([-7.06682,110.461]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-06)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65061);})
.addTo(k102);
var p3301102202404031=L.marker([-7.27901,108.766]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-03)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65030);})
.addTo(k102);
var p3301102202404032=L.marker([-7.22853,108.646]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-03)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65035);})
.addTo(k102);
var p3301102202404033=L.marker([-7.2371,108.667]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-03)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65036);})
.addTo(k102);
var p3301102202404034=L.marker([-7.23562,108.603]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-03)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65048);})
.addTo(k102);
var p1214102202404031=L.marker([0.788994,97.7295]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-03)<br>Nias Selatan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65162);})
.addTo(k102);
var p3374102202404011=L.marker([-7.07909,110.43]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-01)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65032);})
.addTo(k102);
var p3374102202404012=L.marker([-7.02219,110.463]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-01)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65033);})
.addTo(k102);
var p3374102202404013=L.marker([-7.02525,110.439]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-04-01)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65034);})
.addTo(k102);
var p3507102202403301=L.marker([-7.93127,112.587]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-30)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66016);})
.addTo(k102);
var p1209102202403291=L.marker([2.95018,99.2778]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-29)<br>Asahan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65047);})
.addTo(k102);
var p3513102202403221=L.marker([-7.77578,113.582]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-22)<br>Probolinggo')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65444);})
.addTo(k102);
var p3301102202403221=L.marker([-7.35483,108.714]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-22)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64942);})
.addTo(k102);
var p1213102202403221=L.marker([0.779605,99.4039]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-22)<br>Tapanuli Utara')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64944);})
.addTo(k102);
var p1273102202403221=L.marker([1.73886,98.7884]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-22)<br>Kota Medan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64946);})
.addTo(k102);
var p3374102202403221=L.marker([-7.02968,110.495]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-22)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64955);})
.addTo(k102);
var p1273102202403222=L.marker([1.74762,98.7745]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-22)<br>Kota Sibolga')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66296);})
.addTo(k102);
var p7311102202403211=L.marker([-4.51596,119.72]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-21)<br>Barru')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64974);})
.addTo(k102);
var p3374102202403211=L.marker([-7.02082,110.386]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-21)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64978);})
.addTo(k102);
var p1611102202403201=L.marker([-3.71705,102.907]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-20)<br>Empat Lawang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64940);})
.addTo(k102);
var p1215102202403191=L.marker([2.52434,98.2684]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-19)<br>Humbang Hasundutan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64936);})
.addTo(k102);
var p1210102202403181=L.marker([2.83608,98.2531]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-18)<br>Labuhanbatu')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65096);})
.addTo(k102);
var p3512102202403171=L.marker([-7.77517,113.766]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-17)<br>Situbondo')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64927);})
.addTo(k102);
var p3513102202403171=L.marker([-7.77567,113.582]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-17)<br>Probolinggo')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65440);})
.addTo(k102);
var p3374102202403171=L.marker([-7.0198,110.46]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-17)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64958);})
.addTo(k102);
var p1207102202403161=L.marker([3.47988,98.7073]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-16)<br>Toba')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64872);})
.addTo(k102);
var p3374102202403144=L.marker([-6.99995,110.408]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-14)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65043);})
.addTo(k102);
var p3374102202403141=L.marker([-6.98845,110.439]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-14)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64909);})
.addTo(k102);
var p3374102202403142=L.marker([-6.9939,110.417]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-14)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64911);})
.addTo(k102);
var p3374102202403143=L.marker([-7.00549,110.401]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-14)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64954);})
.addTo(k102);
var p3374102202403135=L.marker([-7.00072,110.415]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-13)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65039);})
.addTo(k102);
var p3374102202403136=L.marker([-6.99271,110.378]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-13)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65041);})
.addTo(k102);
var p3374102202403137=L.marker([-7.02457,110.391]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-13)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65042);})
.addTo(k102);
var p3374102202403131=L.marker([-98.1992,1545.87]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-13)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64967);})
.addTo(k102);
var p3374102202403132=L.marker([-7.02491,110.43]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-13)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65010);})
.addTo(k102);
var p3374102202403133=L.marker([-7.02747,110.429]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-13)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65011);})
.addTo(k102);
var p3374102202403134=L.marker([-7.09135,110.419]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-13)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65013);})
.addTo(k102);
var p3374102202403121=L.marker([-7.0123,110.44]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-12)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64835);})
.addTo(k102);
var p3374102202403122=L.marker([-7.02542,110.429]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-12)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64951);})
.addTo(k102);
var p3374102202403101=L.marker([-7.01299,110.457]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-10)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64845);})
.addTo(k102);
var p3507102202403101=L.marker([-7.8016,112.364]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-10)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65971);})
.addTo(k102);
var p3507102202403102=L.marker([-7.83327,112.39]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-10)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65973);})
.addTo(k102);
var p3507102202403103=L.marker([-7.8016,112.364]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-10)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65974);})
.addTo(k102);
var p3507102202403104=L.marker([-7.83327,112.39]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-10)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65976);})
.addTo(k102);
var p7311102202403101=L.marker([-4.51444,119.789]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-10)<br>Barru')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64985);})
.addTo(k102);
var p3374102202403091=L.marker([-7.01963,110.431]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-09)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64846);})
.addTo(k102);
var p3374102202403092=L.marker([-7.00447,110.383]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-09)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64847);})
.addTo(k102);
var p3513102202403091=L.marker([-7.87022,113.095]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-09)<br>Probolinggo')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65402);})
.addTo(k102);
var p3513102202403092=L.marker([-7.85063,113.08]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-09)<br>Probolinggo')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65404);})
.addTo(k102);
var p3513102202403093=L.marker([-7.86277,113.286]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-09)<br>Probolinggo')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65420);})
.addTo(k102);
var p3507102202403091=L.marker([-7.81622,112.378]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-09)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65970);})
.addTo(k102);
var p3374102202403081=L.marker([-7.01742,110.451]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-08)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64848);})
.addTo(k102);
var p1201102202403071=L.marker([1.86957,98.5926]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-07)<br>Nias')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64810);})
.addTo(k102);
var p1213102202403071=L.marker([0.779605,99.4039]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-07)<br>Tapanuli Utara')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64813);})
.addTo(k102);
var p1202102202403071=L.marker([2.00044,99.0574]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-07)<br>Langkat')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64814);})
.addTo(k102);
var p1210102202403071=L.marker([2.83608,98.2531]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-07)<br>Labuhanbatu')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65095);})
.addTo(k102);
var p1273102202403061=L.marker([1.74762,98.7745]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-06)<br>Kota Sibolga')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66293);})
.addTo(k102);
var p3301102202403041=L.marker([-7.48887,108.94]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-04)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64794);})
.addTo(k102);
var p1277102202403031=L.marker([1.3869,99.2858]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-03)<br>Kota Padang Sidempuan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64787);})
.addTo(k102);
var p1215102202403031=L.marker([2.52434,98.2684]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-03)<br>Humbang Hasundutan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64788);})
.addTo(k102);
var p3301102202403031=L.marker([-7.3226,108.823]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-03)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64791);})
.addTo(k102);
var p3301102202403032=L.marker([-7.34027,108.844]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-03)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64792);})
.addTo(k102);
var p7311102202403021=L.marker([-4.18179,119.627]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-02)<br>Barru')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64796);})
.addTo(k102);
var p7311102202403022=L.marker([-4.22555,119.624]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-02)<br>Barru')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64797);})
.addTo(k102);
var p3301102202403011=L.marker([-7.46179,108.805]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-03-01)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64777);})
.addTo(k102);
var p3301102202402291=L.marker([-7.41787,108.798]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-29)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64778);})
.addTo(k102);
var p3507102202402281=L.marker([-8.09717,112.801]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-28)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65961);})
.addTo(k102);
var p3507102202402271=L.marker([-8.07297,112.807]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-27)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65957);})
.addTo(k102);
var p3507102202402272=L.marker([-7.9785,112.531]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-27)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65958);})
.addTo(k102);
var p3301102202402271=L.marker([-7.19016,108.639]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-27)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64759);})
.addTo(k102);
var p3507102202402261=L.marker([-7.94788,112.54]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-26)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65952);})
.addTo(k102);
var p3507102202402262=L.marker([-7.96294,112.519]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-26)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65953);})
.addTo(k102);
var p3507102202402263=L.marker([-7.96294,112.519]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-26)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65956);})
.addTo(k102);
var p7210102202402261=L.marker([-1.65773,120.041]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-26)<br>Sigi')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64737);})
.addTo(k102);
var p3513102202402251=L.marker([-7.92415,113.01]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-25)<br>Probolinggo')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64895);})
.addTo(k102);
var p3513102202402252=L.marker([-7.87366,113.009]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-25)<br>Probolinggo')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64905);})
.addTo(k102);
var p3513102202402253=L.marker([-7.97063,113.071]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-25)<br>Probolinggo')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64910);})
.addTo(k102);
var p3513102202402254=L.marker([-7.93,113.107]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-25)<br>Probolinggo')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64912);})
.addTo(k102);
var p3507102202402251=L.marker([-8.21153,112.468]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-25)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65942);})
.addTo(k102);
var p3507102202402252=L.marker([-8.26861,112.404]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-25)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65943);})
.addTo(k102);
var p3507102202402253=L.marker([-8.26861,112.404]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-25)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65945);})
.addTo(k102);
var p3507102202402254=L.marker([-8.26861,112.404]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-25)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65948);})
.addTo(k102);
var p1603102202402251=L.marker([-3.3022,103.474]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-25)<br>Muara Enim')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64738);})
.addTo(k102);
var p1213102202402241=L.marker([0.779605,99.4039]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-24)<br>Tapanuli Utara')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64774);})
.addTo(k102);
var p3513102202402241=L.marker([-7.92268,113.042]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-24)<br>Probolinggo')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64889);})
.addTo(k102);
var p1806102202402241=L.marker([-5.17848,104.686]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-24)<br>Lampung Tengah')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64733);})
.addTo(k102);
var p1215102202402221=L.marker([2.52434,98.2684]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-22)<br>Humbang Hasundutan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64749);})
.addTo(k102);
var p1207102202402201=L.marker([3.47988,98.7073]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-20)<br>Toba')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64744);})
.addTo(k102);
var p3301102202402191=L.marker([-7.3613,108.845]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-19)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64710);})
.addTo(k102);
var p3301102202402192=L.marker([-7.46179,108.805]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-19)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64711);})
.addTo(k102);
var p1207102202402191=L.marker([3.47988,98.7073]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-19)<br>Toba')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64741);})
.addTo(k102);
var p3374102202402181=L.marker([-6.9997,110.413]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-18)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64677);})
.addTo(k102);
var p3374102202402171=L.marker([-7.00187,110.418]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-17)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64678);})
.addTo(k102);
var p3374102202402172=L.marker([-7.00549,110.414]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-17)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64679);})
.addTo(k102);
var p3374102202402173=L.marker([-6.9985,110.417]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-17)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64680);})
.addTo(k102);
var p1207102202402161=L.marker([3.47988,98.7073]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-16)<br>Toba')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64786);})
.addTo(k102);
var p1608102202402161=L.marker([-4.56515,103.898]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-16)<br>Ogan Komering Ulu Timur')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65120);})
.addTo(k102);
var p3374102202402141=L.marker([-7.00685,110.375]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-14)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64684);})
.addTo(k102);
var p3513102202402131=L.marker([-7.82701,113.046]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-13)<br>Probolinggo')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64881);})
.addTo(k102);
var p1609102202402111=L.marker([-4.50472,103.721]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-11)<br>Ogan Komering Ulu Timur')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64771);})
.addTo(k102);
var p1809102202402111=L.marker([-5.46221,105.095]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-11)<br>Pesawaran')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64859);})
.addTo(k102);
var p1603102202402111=L.marker([4.16438,103.567]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-11)<br>Muara Enim')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64669);})
.addTo(k102);
var p1609102202402101=L.marker([-4.85358,104.031]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-10)<br>Ogan Komering Ulu Timur')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64772);})
.addTo(k102);
var p3374102202402101=L.marker([-7.01435,110.377]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-10)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64672);})
.addTo(k102);
var p3507102202402101=L.marker([-7.8016,112.364]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-10)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65972);})
.addTo(k102);
var p7311102202402071=L.marker([-4.51961,119.664]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-07)<br>Barru')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64635);})
.addTo(k102);
var p3374102202402071=L.marker([-6.99697,110.4]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-07)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64663);})
.addTo(k102);
var p3374102202402061=L.marker([-7.00907,110.391]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-06)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64618);})
.addTo(k102);
var p3374102202402062=L.marker([-7.09255,110.42]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-06)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64620);})
.addTo(k102);
var p3301102202402061=L.marker([-7.46179,108.805]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-06)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64626);})
.addTo(k102);
var p1215102202402061=L.marker([2.52434,98.2684]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-06)<br>Humbang Hasundutan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64651);})
.addTo(k102);
var p3374102202402063=L.marker([-7.0267,110.429]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-06)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64662);})
.addTo(k102);
var p3324102202402051=L.marker([-7.14581,109.942]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-05)<br>Kendal')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64602);})
.addTo(k102);
var p3301102202402051=L.marker([-7.242,108.82]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-05)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64604);})
.addTo(k102);
var p3374102202402051=L.marker([-6.99765,110.37]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-05)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64610);})
.addTo(k102);
var p3374102202402052=L.marker([-6.98573,110.393]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-05)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64621);})
.addTo(k102);
var p3374102202402053=L.marker([-7.00481,110.4]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-05)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64624);})
.addTo(k102);
var p3301102202402052=L.marker([-7.46179,108.805]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-05)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64640);})
.addTo(k102);
var p7311102202402041=L.marker([-4.54361,119.667]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-04)<br>Barru')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64583);})
.addTo(k102);
var p3374102202402041=L.marker([-7.00822,110.373]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-04)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64599);})
.addTo(k102);
var p3374102202402042=L.marker([-6.99808,110.412]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-04)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64600);})
.addTo(k102);
var p3374102202402043=L.marker([-69.0371,198.809]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-04)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64605);})
.addTo(k102);
var p3374102202402044=L.marker([-7.01316,110.451]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-04)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64607);})
.addTo(k102);
var p3374102202402045=L.marker([-7.10226,110.32]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-04)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64619);})
.addTo(k102);
var p3507102202402041=L.marker([-7.99719,112.529]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-04)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65929);})
.addTo(k102);
var p1273102202402031=L.marker([1.73886,98.7884]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-03)<br>Kota Medan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64587);})
.addTo(k102);
var p1202102202402031=L.marker([2.00044,99.0574]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-03)<br>Langkat')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64590);})
.addTo(k102);
var p1213102202402031=L.marker([0.779605,99.4039]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-03)<br>Tapanuli Utara')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64591);})
.addTo(k102);
var p3374102202402031=L.marker([-6.98521,110.398]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-03)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64597);})
.addTo(k102);
var p3374102202402032=L.marker([-7.00276,110.38]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-03)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64598);})
.addTo(k102);
var p3374102202402033=L.marker([-7.02014,110.338]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-03)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64611);})
.addTo(k102);
var p3374102202402034=L.marker([-7.01367,110.374]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-03)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64612);})
.addTo(k102);
var p3374102202402035=L.marker([-7.06205,110.414]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-03)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64660);})
.addTo(k102);
var p1273102202402032=L.marker([1.7475,98.7741]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-03)<br>Kota Sibolga')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66278);})
.addTo(k102);
var p3374102202402021=L.marker([-6.97652,110.298]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-02)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64594);})
.addTo(k102);
var p3507102202402021=L.marker([-7.83327,112.39]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-02)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66156);})
.addTo(k102);
var p3374102202402022=L.marker([-7.06989,110.418]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-02)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64659);})
.addTo(k102);
var p1207102202402011=L.marker([3.47988,98.7073]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-02-01)<br>Toba')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64589);})
.addTo(k102);
var p3301102202401311=L.marker([-7.60172,109.021]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-31)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64541);})
.addTo(k102);
var p3507102202401301=L.marker([-8.0151,112.802]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-30)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65876);})
.addTo(k102);
var p3507102202401302=L.marker([-8.01752,112.82]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-30)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65877);})
.addTo(k102);
var p3301102202401291=L.marker([-7.59534,109.02]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-29)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64504);})
.addTo(k102);
var p3301102202401292=L.marker([-7.60265,109.058]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-29)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64507);})
.addTo(k102);
var p3301102202401293=L.marker([-7.59533,109.02]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-29)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64508);})
.addTo(k102);
var p1207102202401281=L.marker([3.47988,98.7073]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-28)<br>Toba')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64534);})
.addTo(k102);
var p3507102202401281=L.marker([-8.01332,112.539]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-28)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65875);})
.addTo(k102);
var p3301102202401271=L.marker([-7.60744,109.012]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-27)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64406);})
.addTo(k102);
var p3507102202401261=L.marker([-8.2092,112.766]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-26)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65873);})
.addTo(k102);
var p3374102202401261=L.marker([-7.02789,110.423]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-26)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64418);})
.addTo(k102);
var p3374102202401262=L.marker([-7.01064,110.421]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-26)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64419);})
.addTo(k102);
var p3374102202401251=L.marker([-7.00958,110.38]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-25)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64417);})
.addTo(k102);
var p3374102202401221=L.marker([-6.98743,110.412]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-22)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64327);})
.addTo(k102);
var p3374102202401222=L.marker([-7.00276,110.386]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-22)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64329);})
.addTo(k102);
var p7311102202401201=L.marker([-4.50401,119.751]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-20)<br>Barru')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64562);})
.addTo(k102);
var p1215102202401171=L.marker([2.52434,98.2684]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-17)<br>Humbang Hasundutan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64265);})
.addTo(k102);
var p1278102202401161=L.marker([1.26178,97.6113]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-16)<br>Kota Gunungsitoli')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64268);})
.addTo(k102);
var p3301102202401161=L.marker([-7.2558,108.783]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-16)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64246);})
.addTo(k102);
var p7311102202401151=L.marker([-4.63421,119.73]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-15)<br>Barru')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64579);})
.addTo(k102);
var p7311102202401141=L.marker([-4.63315,119.729]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-14)<br>Barru')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64548);})
.addTo(k102);
var p7311102202401142=L.marker([-4.63419,119.73]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-14)<br>Barru')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64943);})
.addTo(k102);
var p6201102202401141=L.marker([-2.69026,111.637]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-14)<br>Kotawaringin Barat')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64186);})
.addTo(k102);
var p1609102202401121=L.marker([-4.54853,104.087]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-12)<br>Ogan Komering Ulu Timur')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64732);})
.addTo(k102);
var p1273102202401121=L.marker([1.74762,98.7745]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-12)<br>Kota Sibolga')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66275);})
.addTo(k102);
var p3301102202401111=L.marker([-7.32978,108.58]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-11)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64081);})
.addTo(k102);
var p3507102202401101=L.marker([-8.06825,112.737]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-10)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65838);})
.addTo(k102);
var p3374102202401091=L.marker([-7.09612,110.412]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-09)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64054);})
.addTo(k102);
var p3513102202401091=L.marker([-7.92457,113.019]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-09)<br>Probolinggo')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64876);})
.addTo(k102);
var p3507102202401081=L.marker([-8.13167,112.573]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-08)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65832);})
.addTo(k102);
var p5308102202401081=L.marker([-8.8343,121.645]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-08)<br>Sumba Timur')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64423);})
.addTo(k102);
var p3507102202401071=L.marker([-8.19406,112.835]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-07)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65831);})
.addTo(k102);
var p3507102202401061=L.marker([-8.19406,112.835]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-06)<br>Malang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(65827);})
.addTo(k102);
var p7311102202401061=L.marker([-4.22967,119.638]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-06)<br>Barru')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64566);})
.addTo(k102);
var p7301102202401061=L.marker([-6.0069,120.479]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-06)<br>Kepulauan Selayar')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64397);})
.addTo(k102);
var p1273102202401051=L.marker([1.73886,98.7884]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-05)<br>Kota Medan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64013);})
.addTo(k102);
var p1273102202401052=L.marker([1.74759,98.7745]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-05)<br>Kota Sibolga')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(66274);})
.addTo(k102);
var p3374102202401031=L.marker([-7.09834,110.416]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-03)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(63950);})
.addTo(k102);
var p3374102202401032=L.marker([-7.097,110.417]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-03)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(63951);})
.addTo(k102);
var p3374102202401033=L.marker([-6.9988,110.433]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-03)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(63952);})
.addTo(k102);
var p3374102202401034=L.marker([-6.99867,110.415]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-03)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(63954);})
.addTo(k102);
var p3374102202401035=L.marker([-7.00996,110.436]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-03)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(63956);})
.addTo(k102);
var p3374102202401036=L.marker([-7.00413,110.382]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-03)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(63957);})
.addTo(k102);
var p1203102202401031=L.marker([1.55107,99.178]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-03)<br>Tapanuli Selatan')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(63972);})
.addTo(k102);
var p3374102202401024=L.marker([-7.02593,110.376]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-02)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64016);})
.addTo(k102);
var p3374102202401025=L.marker([-7.05013,110.444]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-02)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64021);})
.addTo(k102);
var p3374102202401026=L.marker([-7.02968,110.381]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-02)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64052);})
.addTo(k102);
var p3374102202401027=L.marker([-7.03411,110.406]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-02)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64055);})
.addTo(k102);
var p3374102202401028=L.marker([-7.02968,110.381]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-02)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64065);})
.addTo(k102);
var p3301102202401021=L.marker([-7.25668,108.813]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-02)<br>Cilacap')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(63879);})
.addTo(k102);
var p3374102202401021=L.marker([-7.05268,110.464]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-02)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(63881);})
.addTo(k102);
var p3374102202401022=L.marker([-7.03803,110.465]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-02)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(63885);})
.addTo(k102);
var p3322102202401021=L.marker([-7.33693,110.401]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-02)<br>Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(63887);})
.addTo(k102);
var p3322102202401022=L.marker([-7.19832,110.477]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-02)<br>Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(63949);})
.addTo(k102);
var p3374102202401023=L.marker([-7.01052,110.425]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-02)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(63955);})
.addTo(k102);
var p1609102202401011=L.marker([-4.41145,103.803]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-01)<br>Ogan Komering Ulu Timur')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64769);})
.addTo(k102);
var p1609102202401012=L.marker([-4.54515,104.111]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-01)<br>Ogan Komering Ulu Timur')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(64770);})
.addTo(k102);
var p3374102202401011=L.marker([-7.01503,110.448]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-01)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(63888);})
.addTo(k102);
var p3374102202401012=L.marker([-7.00004,110.414]
,{icon:ikon102})
.addTo(map).bindPopup('Tanah Longsor, (2024-01-01)<br>Kota Semarang')
.on('mouseover',function(e){this.openPopup();})
.on('mouseout',function(e){this.closePopup();})
.on('click',function(e){buka(63917);})
.addTo(k102);
	
	var overlays = {
			};
	
	var layerControl = L.control.layers(baseLayers, overlays).addTo(map);

	L.tileLayer('https://{s}.tile.osm.org/{z}/{x}/{y}.png', {
			detectRetina: true,
			maxNativeZoom: 17
	}).addTo(map);

	</script>

	

<script>
	//Chart.register(chartjs-plugin-annotation);
	/**********menurut wilayah***************/
	const labelWilayah = ['1.Sumatera','3.Jawa','5.Bali, Nusa Tenggara','6.Kalimantan','7.Sulawesi'];
  const dataWilayah = {
    labels: labelWilayah,
    datasets: [{label:'Bencana',
//			backgroundColor:'rgb(255, 99, 132)',
			backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
			borderColor: 'rgb(255, 99, 132)',
//      data: [20, 10, 5, 2, 20, 30, 45],
			data: [146,177,4,1,18],
//			data: dataw,
			datalabels: {
				anchor:'end',
				align:'right',
				offset: 1,
			},
      borderRadius: 5,
		}],
  };
	
	var th = $('#th').val();
	var jn = $('#jn').val();
	var njn= (jn==''?'Semua':jn);
	const annotation1 = {
		type: 'label',
		borderColor: (ctx) => ctx.chart.data.datasets[0].backgroundColor,
		borderRadius: 6,
		borderWidth: 1,
		content: [th, jn],
		position: {
			x: 'end',
			y: 'end'
		},
	};

  const configWilayah = {type:'bar',data:dataWilayah,
		plugins: [ChartDataLabels],
		options:{
			responsive:true,
			indexAxis:'y',
			animation:{duration: 1500},
			responsive:true,
			scale: {
				yAxis: [{
					ticks : {
						autoSkip: false,
						minRotation : 45
					}
				}]
			},
			/*
			scales:{
				yAxes: [{
						ticks: {
								autoSkip: false,
								maxRotation: 90,
								minRotation: 45,
						}
				}]
			},
			*/
			plugins: {
				/*
				autocolors:false,
				annotation:{
					annotations:{
						annotation1,
					},
				},
				*/
				datalabels: {
					color: 'blue',
					labels: {
						title: {
							font: {
								weight: 'bold'
							}
						},
						value: {
							color: 'green'
						}
					},
				},
				legend:{
					display:false,
				},
			},
			onClick: function(e) {
				const points = byWilayah.getElementsAtEventForMode(e, 'nearest', { intersect: true }, true);
				if (points.length) {
					const firstPoint = points[0];
					const val = firstPoint.element.$context.raw;
					const idx = firstPoint.element.$context.index;
					const lbl = byWilayah.data.labels[idx];
					const par = lbl.split(".")[0];
					wilProp(par);
				}
			},
			/*
			onHover: function(e){
				const points = byWilayah.getElementsAtEventForMode(e, 'nearest', { intersect: true }, true);
				if (points.length) {
					const firstPoint = points[0];
					const val = firstPoint.element.$context.raw;
					const idx = firstPoint.element.$context.index;
					const lbl = byWilayah.data.labels[idx];
					const par = lbl.split(".")[0];
					alert('disini '+val+' label '+lbl);
				}
			},
			*/
		},
	};
	
	const footer = (tooltipItems) => {
		let sum = 0;
		tooltipItems.forEach(function(tooltipItem) {
			sum += tooltipItem.parsed.y;
		});
		return 'Sum: ' + sum;
	};

	var th=$('#th').val();
	var bl=$('#bl').val();
	var jn=$('#jn').val();
	var pr=$('#pr').val();
	$('#infoWil').html(', Indonesia, tahun '+th+(bl!=''?', bulan '+bl:'')+(jn!=''?', jenis: '+jn:''));
	$('#infoBcn').html(', tahun '+th+(bl!=''?', bulan '+bl:'')+(jn!=''?', jenis: '+jn:''));
	const ctx1 = document.getElementById('byWil');
  const byWilayah = new Chart(ctx1,configWilayah);
	//var imgWilayah = byWilayah.toBase64Image();console.log(imgWilayah);

	function wilProp(par=null){
		var ur1 = $("input[name='sort1']:checked").val();
		if (ur1==1){
			$('#sort11').addClass("aktif");
			$('#sort12').removeClass("aktif");
			$('#sort13').removeClass("aktif");
		} else if (ur1==2){
			$('#sort12').addClass("aktif");
			$('#sort13').removeClass("aktif");
			$('#sort11').removeClass("aktif");
		} else {
			$('#sort13').addClass("aktif");
			$('#sort12').removeClass("aktif");
			$('#sort11').removeClass("aktif");
		}
		var apl={'1':'1.Sumatera','2':'2.Kepri','3':'3.Jawa','5':'5.Bali,Nusa','6':'6.Kalimantan','7':'7.Sulawesi','8':'8.Maluku','9':'9.Papua'};
		if (par!=null){
			if (par.length==1){
				if (par>=1 && par <=9){
					/*
					var $myDiv = $("#balik");
					if ($myDiv.closest("html").length){$myDiv.remove();}
					var elm = '<div id="balik" class="btn btn-xs" style="z-index:2000;" onclick="wilProp(\'0\');">=</div>';
					$(elm).appendTo('#dwil');
					*/
					var npl=apl[par];
					var th = $('#th').val();
					var bl = $('#bl').val();
					var jn = $('#jn').val();
					$('#infoWil').html(', '+npl+', tahun '+th+(bl!=''?', bulan '+bl:'')+(jn!=''?', jenis: '+jn:''));
					$.ajax({
						type:'get',
						dataType:'json',
						url:'https://dibi.bnpb.go.id/home/get_data1?th='+th+'&bl='+bl+'&jn='+jn+'&pr='+par,
						success: function(dt){
							if ($("input[name='sort1']:checked").val()=='1'){
								dt.sort((a,b)=>Number(a.val)-Number(b.val));
							} else if ($("input[name='sort1']:checked").val()=='3'){
								dt.sort((a,b)=>Number(b.val)-Number(a.val));
							}
							var lbl=[];
							var isi=[];
							for(i in dt){
								lbl.push(dt[i]['key']);
								isi.push(dt[i]['val']);
							};
							dataWilayah.labels=lbl;
							dataWilayah.datasets[0].data=isi;
							byWilayah.update();
						},
					});
					$('#infoBcn').html(', '+npl+', tahun '+th+(bl!=''?', bulan '+bl:'')+(jn!=''?', jenis: '+jn:''));
					$.ajax({
						type:'get',
						dataType:'json',
						url:'https://dibi.bnpb.go.id/home/get_bcn1?th='+th+'&bl='+bl+'&jn='+jn+'&pr='+par,
						success: function(dt){
							if ($("input[name='sort1']:checked").val()=='1'){
								dt.sort((a,b)=>Number(a.val)-Number(b.val));
							} else if ($("input[name='sort1']:checked").val()=='3'){
								dt.sort((a,b)=>Number(b.val)-Number(a.val));
							}
							var lbl=[];
							var isi=[];
							for(i in dt){
								lbl.push(dt[i]['key']);
								isi.push(dt[i]['val']);
							};
							dataBcn.labels=lbl;
							dataBcn.datasets[0].data=isi;
							byBcn.update();
						},
					});
				} else {
					var th = $('#th').val();
					var bl = $('#bl').val();
					var jn = $('#jn').val();
					$('#infoWil').html(', Indonesia, tahun '+th+(bl!=''?', bulan '+bl:'')+(jn!=''?', jenis: '+jn:''));
					$.ajax({
						type:'get',
						dataType:'json',
						url:'https://dibi.bnpb.go.id/home/get_data0?th='+th+'&bl='+bl+'&jn='+jn,
						success: function(dt){
							if ($("input[name='sort1']:checked").val()=='1'){
								dt.sort((a,b)=>Number(a.val)-Number(b.val));
							} else if ($("input[name='sort1']:checked").val()=='3'){
								dt.sort((a,b)=>Number(b.val)-Number(a.val));
							}
							var lbl=[];
							var isi=[];
							var tmp='';
							for(i in dt){
								lbl.push(dt[i]['key']);
								isi.push(dt[i]['val']);
							};
							dataWilayah.labels=lbl;
							dataWilayah.datasets[0].data=isi;
							byWilayah.update();
						},
					});
					$('#infoBcn').html(', Indonesia, tahun '+th+(bl!=''?', bulan '+bl:'')+(jn!=''?', jenis: '+jn:''));
					$.ajax({
						type:'get',
						dataType:'json',
						url:'https://dibi.bnpb.go.id/home/get_bcn0?th='+th+'&bl='+bl+'&jn='+jn+'&pr='+par,
						success: function(dt){
							if ($("input[name='sort1']:checked").val()=='1'){
								dt.sort((a,b)=>Number(a.val)-Number(b.val));
							} else if ($("input[name='sort1']:checked").val()=='3'){
								dt.sort((a,b)=>Number(b.val)-Number(a.val));
							}
							var lbl=[];
							var isi=[];
							for(i in dt){
								lbl.push(dt[i]['key']);
								isi.push(dt[i]['val']);
							};
							dataBcn.labels=lbl;
							dataBcn.datasets[0].data=isi;
							byBcn.update();
						},
					});
				}
			}
			if (par.length==2){
				var th = $('#th').val();
				var bl = $('#bl').val();
				var jn = $('#jn').val();
				var nm ={'11':'Aceh','12':'Sumatera Utara','13':'Sumatera Barat','14':'Riau','15':'Jambi','16':'Sumatera Selatan','17':'Bengkulu','18':'Lampung','19':'Bangka Belitung','21':'Kepulauan Riau','31':'DKI Jakarta','32':'Jawa Barat','33':'Jawa Tengah','34':'DI Yogyakarta','35':'Jawa Timur','36':'Banten','51':'Bali','52':'Nusa Tenggara Barat','53':'Nusa Tenggara Timur','61':'Kalimantan Barat','62':'Kalimantan Tengah','63':'Kalimantan Selatan','64':'Kalimantan Timur','65':'Kalimantan Utara','71':'Sulawesi Utara','72':'Sulawesi Tengah','73':'Sulawesi Selatan','74':'Sulawesi Tenggara','75':'Gorontalo','76':'Sulawesi Barat','81':'Maluku','82':'Maluku Utara','91':'Papua Barat','94':'Papua'};
				
				$('#infoWil').html(', '+par+'.'+nm[par]+', tahun '+th+(bl!=''?', bulan '+bl:'')+(jn!=''?', jenis: '+jn:''));
				$.ajax({
					type:'get',
					dataType:'json',
					url:'https://dibi.bnpb.go.id/home/get_data2?th='+th+'&bl='+bl+'&jn='+jn+'&pr='+par,
					success: function(dt){
						if ($("input[name='sort1']:checked").val()=='1'){
							dt.sort((a,b)=>Number(a.val)-Number(b.val));
						} else if ($("input[name='sort1']:checked").val()=='3'){
							dt.sort((a,b)=>Number(b.val)-Number(a.val));
						}
						var lbl=[];
						var isi=[];
						for(i in dt){
							lbl.push(dt[i]['key']);
							isi.push(dt[i]['val']);
						};
						dataWilayah.labels=lbl;
						dataWilayah.datasets[0].data=isi;
						byWilayah.update();
					},
				});
				$('#infoBcn').html(', '+par+'.'+nm[par]+', tahun '+th+(bl!=''?', bulan '+bl:'')+(jn!=''?', jenis: '+jn:''));
				$.ajax({
					type:'get',
					dataType:'json',
					url:'https://dibi.bnpb.go.id/home/get_bcn2?th='+th+'&bl='+bl+'&jn='+jn+'&pr='+par,
					success: function(dt){
						if ($("input[name='sort1']:checked").val()=='1'){
							dt.sort((a,b)=>Number(a.val)-Number(b.val));
						} else if ($("input[name='sort1']:checked").val()=='3'){
							dt.sort((a,b)=>Number(b.val)-Number(a.val));
						}
						var lbl=[];
						var isi=[];
						for(i in dt){
							lbl.push(dt[i]['key']);
							isi.push(dt[i]['val']);
						};
						dataBcn.labels=lbl;
						dataBcn.datasets[0].data=isi;
						byBcn.update();
					},
				});
			}
			if (par.length==4){
				//par = par.substr(0,1);
				wilProp('0');
			}
		}
		
	}

/**********menurut waktu***************/
  const labelWaktu = ['2015.','2016.','2017.','2018.','2019.','2020.','2021.','2022.','2023.','2024.'];

  const dataWaktu = {
    labels: labelWaktu,
    datasets: [{
			label:'Bencana',
			backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
			//backgroundColor:'rgb(255, 99, 132)',
			borderColor: 'rgb(255, 99, 132)',
      data: [502,599,852,642,734,1160,1038,884,461,346],
			datalabels: {
				anchor:'end',
				align:'top',
				offset: 1,
			},
      borderRadius: 5,
		}]
  };

  const configWaktu = {
		plugins: [ChartDataLabels],
		type:'bar',
		data:dataWaktu,
		responsive:true,
		options:{
			animation:{
				duration: 1500
			},
			plugins: {
				datalabels: {
					color: 'blue',
					labels: {
						title: {
							font: {
								weight: 'bold'
							}
						},
						value: {
							color: 'green'
						},
					},
				},
				legend:{
					display:false,
				},
				tooltip:{
					callbacks:{
						label: function(ctx){
							return ctx.parsed.y + ' bencana '+ctx.label;
						}
					}
				},
			},
			onClick: function(e) {
				const points = byWaktu.getElementsAtEventForMode(e, 'nearest', { intersect: true }, true);
				if (points.length) {
					const firstPoint = points[0];
					const val = firstPoint.element.$context.raw;
					const idx = firstPoint.element.$context.index;
					const lbl = byWaktu.data.labels[idx];
					wakBulan(lbl);
				}
			},
		},
	};

	var pr=$('#pr').val();
	var kb=$('#kb').val();
	var jn=$('#jn').val();
	var th=$('#th').val();
	var bl=$('#bl').val();
	var th0=th-9;
	var pth='<span class="card-tools text-right" style="float:right;"><input type="radio" name="jth" class="cjth" id="jth1" value="5" onchange="atur(5);">5<input type="radio" name="jth" class="cjth" id="jth2" value="10" checked onchange="atur(10);">10</span>';
					
	$('#infoWak').html(' '+th0+'-'+th+(bl!=''?", bulan "+bl:"")+(pr!=''?', prop '+pr:'')+(kb!=''?', kab:'+kb:'')+(jn!=''?', jenis: '+jn:''));
	$('#infoSta').html(' '+th0+'-'+th+(bl!=''?", bulan "+bl:"")+(pr!=''?', prop '+pr:'')+(kb!=''?', kab:'+kb:'')+(jn!=''?', jenis: '+jn:''));
	const byWaktu = new Chart(document.getElementById('byWak'),configWaktu);
	//var imgWaktu = byWaktu.toBase64Image();console.log(imgWaktu);
	
	function wakBulan(par){
		var ur2 = $("input[name='sort2']:checked").val();
		if (ur2==1){
			$('#sort21').addClass("aktif");
			$('#sort22').removeClass("aktif");
			$('#sort23').removeClass("aktif");
		} else if (ur2==2){
			$('#sort22').addClass("aktif");
			$('#sort23').removeClass("aktif");
			$('#sort21').removeClass("aktif");
		} else {
			$('#sort23').addClass("aktif");
			$('#sort22').removeClass("aktif");
			$('#sort21').removeClass("aktif");
		}
		var kd = par.split(".")[0];
		if (kd.length==4){
			var jn = $('#jn').val();
			var pr = $('#pr').val();
			var kb = $('#kb').val();
			var th = par;
			var bl = '';
			
			$('#pil_tahun').hide();
			$('#infoWak').html(', tahun:'+th+(pr!=''?', prop '+pr:'')+(kb!=''?', kab:'+kb:''));
			$.ajax({
				type:'get',
				dataType:'json',
				url:'https://dibi.bnpb.go.id/home/get_waktu2?th='+th+'&bl='+bl+'&jn='+jn+'&pr='+pr+'&kb='+kb,
				success: function(dt){
					if ($("input[name='sort2']:checked").val()=='1'){
						dt.sort((a,b)=>Number(a.val)-Number(b.val));
					} else if ($("input[name='sort2']:checked").val()=='3'){
						dt.sort((a,b)=>Number(b.val)-Number(a.val));
					}
					var lbl=[];
					var isi=[];
					for(i in dt){
						lbl.push(dt[i]['key']);
						isi.push(dt[i]['val']);
					};
					dataWaktu.labels=lbl;
					dataWaktu.datasets[0].data=isi;
					byWaktu.update();
				}
			});
			$('#infoSta').html(', tahun:'+th+(pr!=''?', prop '+pr:'')+(kb!=''?', kab:'+kb:''));
			$.ajax({
				type:'get',
				dataType:'json',
				url:'https://dibi.bnpb.go.id/home/get_sta2?th='+th+'&bl='+bl+'&jn='+jn+'&pr='+pr+'&kb='+kb,
				success: function(dt){
					if ($("input[name='sort2']:checked").val()=='1'){
						dt.sort((a,b)=>Number(a.val)-Number(b.val));
					} else if ($("input[name='sort2']:checked").val()=='3'){
						dt.sort((a,b)=>Number(b.val)-Number(a.val));
					}
					var lbl=[];
					var isi=[];
					for(i in dt){
						lbl.push(dt[i]['key']);
						isi.push(dt[i]['val']);
					};
					dataSta.labels=lbl;
					dataSta.datasets[0].data=isi;
					bySta.update();
				}
			});
		} else if (kd.length==2){ /*******bulan per tanggal**********/
			var jn = $('#jn').val();
			var pr = $('#pr').val();
			var kb = $('#kb').val();
			var th = $('#infoWak').text().substr(8,4);
			var bl = kd;
			$('#pil_tahun').hide();
			$('#infoWak').html(', tahun:'+th+(bl!=''?'/'+bl:'')+(pr!=''?', prop:'+pr:'')+(kb!=''?', kab:'+kb:'')+(jn!=''?', jenis: '+jn:''));
			$.ajax({
				type:'get',
				dataType:'json',
				url:'https://dibi.bnpb.go.id/home/get_waktu3?th='+th+'&bl='+bl+'&jn='+jn+'&pr='+pr+'&kb='+kb,
				success: function(dt){
					if ($("input[name='sort2']:checked").val()=='1'){
						dt.sort((a,b)=>Number(a.val)-Number(b.val));
					} else if ($("input[name='sort2']:checked").val()=='3'){
						dt.sort((a,b)=>Number(b.val)-Number(a.val));
					}
					var lbl=[];
					var isi=[];
					for(i in dt){
						lbl.push(dt[i]['key']);
						isi.push(dt[i]['val']);
					};
					dataWaktu.labels=lbl;
					dataWaktu.datasets[0].data=isi;
					byWaktu.update();
				}
			});
			$('#infoSta').html(', tahun:'+th+(bl!=''?'/'+bl:'')+(pr!=''?', prop:'+pr:'')+(kb!=''?', kab:'+kb:'')+(jn!=''?', jenis: '+jn:''));
			$.ajax({
				type:'get',
				dataType:'json',
				url:'https://dibi.bnpb.go.id/home/get_sta3?th='+th+'&bl='+bl+'&jn='+jn+'&pr='+pr+'&kb='+kb,
				success: function(dt){
					if ($("input[name='sort2']:checked").val()=='1'){
						dt.sort((a,b)=>Number(a.val)-Number(b.val));
					} else if ($("input[name='sort2']:checked").val()=='3'){
						dt.sort((a,b)=>Number(b.val)-Number(a.val));
					}
					var lbl=[];
					var isi=[];
					for(i in dt){
						lbl.push(dt[i]['key']);
						isi.push(dt[i]['val']);
					};
					dataSta.labels=lbl;
					dataSta.datasets[0].data=isi;
					bySta.update();
				}
			});
		} else if (kd.length==3){ /********tanggal*********/
			var jn = $('#jn').val();
			var pr = $('#pr').val();
			var kb = $('#kb').val();
			var th = $('#th').val();
			var bl = '';
			var pth='<span class="card-tools text-right" style="float:right;"><input type="radio" name="jth" class="cjth" id="jth1" value="5" onchange="atur(5);">5<input type="radio" name="jth" class="cjth" id="jth2" value="10" onchange="atur(10);">10</span>';

			$('#pil_tahun').show();
			var th2 = $("input[name='seri']:checked").val();
			th0 = th-(th2-1);
			console.log('th0 '+th0);
			$('#infoWak').html(' '+th0+'-'+th+(bl!=''?", bulan "+bl:"")+(pr!=''?', prop '+pr:'')+(kb!=''?', kab:'+kb:'')+(jn!=''?', jenis: '+jn:''));
			if (th2==3){
				$('#pil_tahun3').addClass("aktif");
				$('#pil_tahun5').removeClass("aktif");
				$('#pil_tahun10').removeClass("aktif");
			} else if (th2==5){
				$('#pil_tahun5').addClass("aktif");
				$('#pil_tahun3').removeClass("aktif");
				$('#pil_tahun10').removeClass("aktif");
			} else if (th2==10){
				$('#pil_tahun10').addClass("aktif");
				$('#pil_tahun5').removeClass("aktif");
				$('#pil_tahun3').removeClass("aktif");
			}
			$.ajax({
				type:'get',
				dataType:'json',
				url:'https://dibi.bnpb.go.id/home/get_waktu1?th='+th+'&bl='+bl+'&jn='+jn+'&pr='+pr+'&kb='+kb+'&th2='+th2,
				success: function(dt){
					if ($("input[name='sort2']:checked").val()=='1'){
						dt.sort((a,b)=>Number(a.val)-Number(b.val));
					} else if ($("input[name='sort2']:checked").val()=='3'){
						dt.sort((a,b)=>Number(b.val)-Number(a.val));
					}
					var lbl=[];
					var isi=[];
					for(i in dt){
						lbl.push(dt[i]['key']);
						isi.push(dt[i]['val']);
					};
					dataWaktu.labels=lbl;
					dataWaktu.datasets[0].data=isi;
					byWaktu.update();
				},
			});
			$('#infoSta').html(' '+th0+'-'+th+(bl!=''?", bulan "+bl:"")+(pr!=''?', prop '+pr:'')+(kb!=''?', kab:'+kb:'')+(jn!=''?', jenis: '+jn:''));
			var th2 = $("input[name='seri']:checked").val();
			$.ajax({
				type:'get',
				dataType:'json',
				url:'https://dibi.bnpb.go.id/home/get_sta1?th='+th+'&bl='+bl+'&jn='+jn+'&pr='+pr+'&kb='+kb+'&th2='+th2,
				success: function(dt){
					if ($("input[name='sort2']:checked").val()=='1'){
						dt.sort((a,b)=>Number(a.val)-Number(b.val));
					} else if ($("input[name='sort2']:checked").val()=='3'){
						dt.sort((a,b)=>Number(b.val)-Number(a.val));
					}
					var lbl=[];
					var isi=[];
					for(i in dt){
						lbl.push(dt[i]['key']);
						isi.push(dt[i]['val']);
					};
					dataSta.labels=lbl;
					dataSta.datasets[0].data=isi;
					bySta.update();
				}
			});
		}
	};

/******************bencana-wilayah********************/
  const dataBcn = {
    labels: ['102.Tanah Longsor'],
    datasets: [{
			label:'Bencana',
			backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
			//backgroundColor: Object.values(Utils.CHART_COLORS),
			//backgroundColor:'rgb(255, 99, 132)',
			borderColor: 'rgb(255, 99, 132)',
      data: ['346'],
			datalabels: {
				anchor:'end',
				align:'top',
				offset: 1,
			},
      borderRadius: 5,
		}]
  };

  const configBencana = {
		plugins: [ChartDataLabels],
		type:'bar',
		data:dataBcn,
		responsive:true,
		options:{
			animation:{
				duration: 1500
			},
			plugins: {
				datalabels: {
					color: 'blue',
					labels: {
						title: {
							font: {
								weight: 'bold'
							}
						},
						value: {
							color: 'green'
						},
					},
				},
				legend:{
					display:false,
				},
			},
		},
	};
  const byBcn = new Chart(document.getElementById('byBcn'),configBencana);
	//var imgWaktu = byWaktu.toBase64Image();console.log(imgWaktu);

/******************bencana-waktu********************/
  const dataSta = {
    labels: ['102.Tanah Longsor'],
    datasets: [{
			label:'Bencana',
			backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
			//backgroundColor: Object.values(Utils.CHART_COLORS),
			//backgroundColor:'rgb(255, 99, 132)',
			borderColor: 'rgb(255, 99, 132)',
      data: ['7218'],
			datalabels: {
				anchor:'end',
				align:'top',
				offset: 1,
			},
      borderRadius: 5,
		}]
  };

  const configSta = {
		plugins: [ChartDataLabels],
		type:'bar',
		data:dataSta,
		responsive:true,
		options:{
			animation:{
				duration: 1500
			},
			plugins: {
				datalabels: {
					color: 'blue',
					labels: {
						title: {
							font: {
								weight: 'bold'
							}
						},
						value: {
							color: 'green'
						},
					},
				},
				legend:{
					display:false,
				},
			},
		},
	};
  const bySta = new Chart(document.getElementById('bySta'),configSta);
	//var imgWaktu = byWaktu.toBase64Image();console.log(imgWaktu);
</script>

<script>
	var batas='10';
	function buka(id){
		$.ajax({
			url: 'https://dibi.bnpb.go.id/xdibi2/read2/'+id,
			type: 'post',
			success: function(response){ 
				$('.modal-body').html(response); 
				$('#empModal').modal('show'); 
			}
		});
	}
	
	function tutup(){
		$('#empModal').modal('hide');
	}
	
	function cek1(){
		if ($('#infoWil').text().substr(2,1)=='I'){
			var par='1101';
			wilProp(par);
		} else if ($('#infoWil').text().substr(3,1)=='.'){
			var par = $('#infoWil').text().substr(2,1);
			wilProp(par);
		} else if ($('#infoWil').text().substr(4,1)=='.'){
			var par = $('#infoWil').text().substr(2,2);
			wilProp(par);
		}
	}
	
	function cek2(){
		if ($('#infoWak').text().substr(5,1)=='-'){
			var par='001.';
			wakBulan(par);
		} else if ($('#infoWak').text().substr(12,1)=='/'){
			var par = $('#infoWak').text().substr(13,2);
			wakBulan(par);
		} else if ($('#infoWak').text().substr(7,1)==':'){
			var par = $('#infoWak').text().substr(8,4)+'.';
			wakBulan(par);
		}
	}
	
	function cek3(){
		var nil = $("input[name='sort2']:checked").val();
		alert('nil '+nil);
		console.log(nil);
	}

	function atur(nil){
		alert(nil);
		$("input[name=jth][value=" + nil + "]").prop('checked', true);
		var par='001.';
		wakBulan(par);
	}
</script>	
<script>
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
  }
	function print_pdf(idb){
		var id = idb;
		window.open('https://dibi.bnpb.go.id/xdibi2/read_pdf/'+id,'_blank','fullscreen=0,height=100,width=100,location=0,menubar=0,status=0,titlebar=0');
	}
</script>


          </div>
				
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer bottom pt-0 pb-0">
		<div class="float-right d-none d-sm-inline">
			<b> &copy; 2022 Version</b> 2.0
		</div>
		<!-- Default to the left -->
		<strong>Bidang Pengelolaan Data dan Sistem Informasi (PDSI),<br> Pusat Data Informasi dan Komunikasi Kebencanaan (Pusdatinkom),<br>Badan Nasional Penanggulangan Bencana (BNPB).</strong><br>Jl. Pramuka kav.38, Jakarta Timur, Indonesia 13120.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
</html>
