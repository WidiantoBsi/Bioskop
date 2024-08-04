<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Karam Production</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap.min.css')?>">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/font-awesome.min.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/datatables.bootstrap.min.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/animate.min.css')?>">
  <link href="<?php echo base_url('asset/css/style.css')?>" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="<?php echo base_url('asset/img/logomi.png')?>">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="<?php echo site_url('Customer'); ?>" class="navbar-brand"> 
                 <b>Karam Production</b>
                </a>    

              

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span><?php echo $this->session->userdata('Username_Petugas'); ?></span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="<?php echo base_url('asset/img/avatar.jpg')?>" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                        <li><a href="<?php echo site_url('Login/Logout'); ?>"><span class="fa fa-power-off "></span> Log Out </a></li>
                  </ul>
                </li>
                <li ><a href="#" ><span class="fa fa-coffee"></span></a></li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
          <!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                    <?php  
                    $Jabatan = $this->session->userdata('Jabatan');
                    if ($Jabatan == 'Admin') 
                    {
                    echo generate_sidemenu();
                    }
                    else 
                    {
                      echo generate_sidemenu_Kasir();
                    }
                    ?>
              </div>
            </div>
          <!-- end: Left Menu -->
