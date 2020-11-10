<!DOCTYPE html>
<html lang="zxx">
<!-- index.html  22 Nov 2019 04:12:25 GMT -->
<head>  
 <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <link href="<?php echo base_url('assets/login/vendor/mdi-font/css/material-design-iconic-font.min.css');?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/login/vendor/font-awesome-4.7/css/font-awesome.min.css');?>" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- Vendor CSS-->
    <link href="<?php echo base_url('assets/login/vendor/select2/select2.min.css');?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/login/vendor/datepicker/daterangepicker.css');?>" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="<?php echo base_url('assets/login/css/mainn.css');?>" rel="stylesheet" media="all">
    <script src="<?php echo base_url('assets/angular/angular.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/angular/ui-bootstrap-tpls-1.0.3.js'); ?>"></script>
    <!-- toastr -->
    <script src="<?php echo base_url('assets/angular/angular-toastr.tpls.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/angular/angular-toastr.css'); ?>" />
    
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">
     <link rel="stylesheet" href="<?php echo base_url('assets/css/all.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/flaticon.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/lightcase.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/odometer.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/swiper.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nice-select.css');?>">
      <link rel="shortcut icon" href="<?php echo base_url('assets/images/thumbnail.png');?>" type="image/x-icon">
   
</head>
  <!-- ==========privacy-section========== -->
 <body>
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
                          <?php
                                $authToken=  $this->session->userdata('username'); 
                                if(isset($authToken)){ 
                                  ?>
                            <a id="cart-button" href="#0" >
                                <i class="flaticon-shopping-cart" style="margin-top:5px;"></i>
                            </a>
                          <?php }?>
                        </li>
                          <li>
                            <?php $authToken=  $this->session->userdata('username'); 
                                if(isset($authToken)){ 
                                  ?>
                             <a href="<?php echo site_url("Logout");?>" style="margin-left:-8px;">
                            <i class="fa fa-power-off"></i>Logout
                            </a>                          
                            <?php } else {?>
                             <a href="<?php echo site_url("Home/Login");?>" style="margin-left:-8px;">
                             Login
                            </a>
                            <?php }?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo" ng-app="myApp" ng-controller="loginCtrl" ng-init="init()">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Welcome To AitemConnect</h2>
                    <form >
                        <div class="input-group">
                            <input class="input--style-2" type="text" ng-model="username" id="username" placeholder="Username" name="username">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" ng-model="password" id="password" placeholder="Password" name="password">
                        </div>
                        <div class="p-t-30">
                            <a class="btn btn--radius btn--green" ng-click="login()" style="color:white;">Login</a>
                        </div><br>
                        <div class="row row-space col-12">
                            <div class="col-6">
                                <div class="input-group">
                                <p class="mt-2 d-flex flex-wrap justify-content-between">New Member ?<a href="<?php echo site_url('Home/Register')?>"> Register Here</a></p>
                                </div>
                            </div>
                           
                        </div>
                    </form>
                    <div class="loading" ng-show="loader" id="loader">Loading&#8230;</div>
                </div>
            </div>
        </div>
    </div>
   
  
    <!-- Jquery JS-->
    <script src="<?php echo base_url('assets/login/vendor/jquery/jquery.min.js');?>"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url('assets/login/vendor/select2/select2.min.js');?>"></script>
    <script src="<?php echo base_url('assets/login/vendor/datepicker/moment.min.js');?>"></script>
    <script src="<?php echo base_url('assets/login/vendor/datepicker/daterangepicker.js');?>"></script>
    <!-- Main JS-->
    <script src="<?php echo base_url('assets/login/js/global.js');?>"></script>
    <!-- app.js -->
<script src="<?php echo base_url('assets/angular/angularjs/app.js'); ?>"></script>
<!-- app.js -->
<script src="<?php echo base_url('assets/angular/angularjs/controller/login.js'); ?>"></script>
</body>
