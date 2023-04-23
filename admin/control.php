<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Sim Card | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo UAARC; ?>admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> -->
    <!-- Ionicons -->
     <!--<link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" /> -->
    <!-- DATA TABLES -->
    <link href="<?php echo UAARC; ?>admin/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo UAARC; ?>admin/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo UAARC; ?>admin/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo"><b>USA</b>Alo</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo UAARC; ?>admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">Jesus Farias</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo UAARC; ?>admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      Jesus Farias - Web Developer
                      <small>Member since Nov. 2021</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-6 text-center">
                      <a href="#">Ventas</a>
                    </div>
                    <div class="col-xs-6 text-center">
                      <a href="#">Grupo</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Perfil</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">desconectar</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo UAARC; ?>admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Jesus Farias</p>

              <a href="#"><i class="fa fa-circle text-success"></i> En línea</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" id="jesus-menu">
            <li class="header">NAVEGACIÓN</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-tasks"></i> <span>Planes</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active" id="planes"><a href="#"><i class="fa fa-circle-o"></i> Lista</a></li>
                <li id="crearplan"><a href="#"><i class="fa fa-circle-o"></i> Crear</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a>
                <i class="fa fa-user"></i> <span>Usuarios</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li id="user"><a href="#"><i class="fa fa-circle-o"></i> Lista</a></li>
                <li id="regisuser"><a href="#"><i class="fa fa-circle-o"></i> Registrar</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper" id="container">
        <?php if(isset($_POST['page'])){require_once UADOC . 'admin/pages/'.$_POST['page'];} ?>
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://github.com/jafr0691">JesusFariasdev</a> Reservados todos los derechos.</strong>
      </footer>

    </div><!-- ./wrapper -->
    <script src="<?php echo UAARC; ?>admin/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo UAARC; ?>admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    
    <script src="<?php echo UAARC; ?>admin/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="<?php echo UAARC; ?>admin/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    
    <script src="<?php echo UAARC; ?>admin/dist/js/app.min.js" type="text/javascript"></script>

    <script src="<?php echo UAARC; ?>admin/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo UAARC; ?>admin/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo UAARC; ?>admin/dist/js/demo.js" type="text/javascript"></script>

    <!-- Sparkline -->
    <script src="<?php echo UAARC; ?>admin/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="<?php echo UAARC; ?>admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="<?php echo UAARC; ?>admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="<?php echo UAARC; ?>admin/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="<?php echo UAARC; ?>admin/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?php echo UAARC; ?>admin/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="<?php echo UAARC; ?>admin/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>



    <script type="text/javascript">
      let touchEvent = 'ontouchstart' in window ? 'touchstart' : 'click';
      jQuery.post('<?php echo UAARC; ?>admin/pages/plan/planes.php', function(data, status){
        jQuery("#container").html(data);
      });
      jQuery('#planes').on(touchEvent,()=>{
        jQuery.post('<?php echo UAARC; ?>admin/pages/plan/planes.php', function(data, status){
          jQuery("#container").html(data);
        });
      });
      jQuery('#crearplan').on(touchEvent,()=>{
        jQuery.post('<?php echo UAARC; ?>admin/pages/plan/formcrear.php', function(data, status){
          jQuery("#container").html(data);
        });
      });
      jQuery('#user').on(touchEvent,()=>{
        jQuery.post('<?php echo UAARC; ?>admin/pages/user/listuser.php', function(data, status){
          jQuery("#container").html(data);
        });
      });
      jQuery('#regisuser').on(touchEvent,()=>{
        jQuery.post('<?php echo UAARC; ?>admin/pages/user/regisuser.php', function(data, status){
          jQuery("#container").html(data);
        });
      });

      jQuery('.sidebar-menu ul li').on(touchEvent,function(){
        jQuery('.sidebar-menu ul li').removeClass('active');
        jQuery(this).addClass('active');
      });
    </script>

  </body>
</html>