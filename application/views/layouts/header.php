<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cardiología HU</title>
    
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/bootstrap/css/bootstrap.min.css">    
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/dist/css/AdminLTE.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/datatables.net-bs/css/dataTables.bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/template/lightbox/dist/css/lightbox.min.css">   

    <script src="<?php echo base_url();?>assets/template/jquery/jquery.min.js"></script>
    <!--Font Awesome Kit German Duci-->
    <script src="https://kit.fontawesome.com/5a64481c2e.js" crossorigin="anonymous"></script>    

    <link rel='stylesheet' id='admin-css'  href='admin.css' type='text/css' media='all' />
    
    <link rel='stylesheet' id='colors-fresh-css'  href='colors-fresh.css' type='text/css' media='all' />

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />

    <link rel="stylesheet" href="/resources/demos/style.css" /> 

    <script>
    $(function(){
        $( ".datepicker" ).datepicker();
        $("#icon").click(function() { 
            $(".datepicker").datepicker("show");            
        })
    });
    </script>   
</head>
<body class="hold-transition skin-blue sidebar-mini">
   
    <div class="wrapper">
        <header class="main-header">            
            <a href="../cestudio/index" class="logo">                
                <span class="logo-mini"><b>H</b>U</span>                
                <span class="logo-lg"><b><i>Cardiología HU</i></b></span>
            </a>            
            <nav class="navbar navbar-static-top">               
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <i class="fa-solid fa-plus"></i>                                
                               <span class="hidden-xs"><strong>Bienvenido:</strong> <?php echo $this->session->userdata('user_name')?></span>                                                          
                            </a>                            
                            <ul class="dropdown-menu">
                                <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-12 text-center">
                                            <a href="<?php echo base_url();?>clogin/clogout"> Cerrar Sesión</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>