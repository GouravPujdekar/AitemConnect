<!DOCTYPE html>
<html lang="zxx">
<!-- index.html  22 Nov 2019 04:12:25 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/all.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/flaticon.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/lightcase.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/odometer.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/swiper.min.css');?>">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png');?>" type="image/x-icon">
 

    <script src="<?php echo base_url('assets/angular/angular.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/angular/ui-bootstrap-tpls-1.0.3.js'); ?>"></script>
    <!-- toastr -->
    <script src="<?php echo base_url('assets/angular/angular-toastr.tpls.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/angular/angular-toastr.css'); ?>" />
    <title>AitemConnect</title>
</head>
<body>   
    <!-- ==========header-section========== -->
    <header class="header-section">
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="<?php echo site_url("Home");?>" class="logo">
                         <img src="<?php echo base_url('assets/images/thumbnail.png');?>" style="height:60px;width:80px;"><b></b>
                        </a>
                    </div>
                      <ul class="menu ml-auto">                       
                       
                    </ul>
                   
                    <ul class="search-area">
                        <li>
                            <a id="cart-button" href="<?php echo site_url("Home/Cart");?>" >
                                <i class="flaticon-shopping-cart" style="margin-top:5px;"></i>
                            </a>
                        </li>
                          <li >
                              <?php
                                $authToken=  $this->session->userdata('authToken'); 
                                if(isset($authToken)){ 
                                  ?>
                            <a href="<?php echo site_url("Logout");?>" style="margin-left:-8px;">
                            <i class="fa fa-power-off"></i>Logout
                            </a>
                             <?php } else {?>
                              <a href="<?php echo site_url("Home/Login");?>" style="margin-left:-8px;">
                            Login
                            </a>
                              <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>