<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="<?php echo base_url('assets/css/StyleSheet1.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/bootstrap-theme.min.css');?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/c/bootstrap.min.css');?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="<?php echo base_url('assets/css/c/js/jquery-2.1.4.min.js');?>"></script>
    <script src="<?php echo base_url('assets/css/c/js/bootstrap.min.js');?>"></script>  
    <title>HopTo | <?php if(isset($title)) echo $title; ?></title>  
</head><br>
<body ng-app="myApp" ng-controller="cartCtrl" ng-init="init()">
<div class="container-fluid">
            <div class="col-sm-12">
            <div class="container">
                <div class="col-sm-5">
                    <div  id="t2">
                        <div>
                      <h4><b><i class="fa fa-home"></i> Add delivery address</b></h4>
			<hr>
              	<table>
			<tr>
				<td><b><u>Adress Name</u>:</b> </td>
				<td ng-bind="addressList.address.addressName"></td>
			</tr>
			<tr>
				<td><b><u>Street Address</u>:</b> </td>
				<td ng-bind="addressList.address.streetAddress"></td>
			</tr>
			<tr>
				<td><b><u>Street Address1</u>:</b> </td>
				<td ng-bind="addressList.address.streetAddress1"></td>
			</tr>
			<tr>
				<td><b><u>City</u>:</b> </td>
				<td ng-bind="addressList.address.city"></td>
			</tr>
			<tr>
				<td><b><u>State</u>:</b> </td>
				<td ng-bind="addressList.address.state"></td>
			</tr>
			<tr>
				<td><b><u>Zip</u>:</b> </td>
				<td ng-bind="addressList.address.zip"></td>
			</tr>
		   </table>
                    </div>                   
                 	
                    </div>  		
                    <br />                
                </div>
                <div class="col-sm-4" >
                    <div id="t4">
                        <h4><b>Your Cart</b>
			<hr>               
			<table ng-repeat="c in cartList">
			<tr ng-repeat="cc in c">							
				<td ng-bind="cc.name"></td>
				<td style="padding-left:40px;" ng-bind="cc.quantity">
 				</td>                              
			</tr>			
		   </table>                       
                    </div>
                    <br />
                    <div id="t5" class="col-sm-12"><i class="fa fa-pencil" style="font-size: 17px;">  Any instruction for the delivery pattern?  </i></div>
                    <br /><br>
                    <div >
                    <div id="t6" class="col-sm-12">
                        <h3><b>Invoice</b></h3>
                        <h4>item Total </h4>
                        <hr />
                        <div>Partner Delivery Fee    <i class="	fa fa-info-circle"></i> <b>Free</b></div>
                        <hr />                        
                        <p ><b>To Pay -</b>    $<b ng-bind="cartList.total"></b></p>
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-3">
                        <a id="btncheckout" href="<?php echo site_url("CheckOut");?>" class="btn btn-primary ">Checkout</a>                       
                        </div>
                      <br>                    
                    </div>
                    </div>
                </div>
            </div>  
            </div>     
    </div>
    <div class="loading" ng-show="loader" id="loader">Loading&#8230;</div>
</body>
<script src="<?php echo base_url('assets/angular/angularjs/app.js'); ?>"></script>
    <script src="<?php echo base_url('assets/angular/angularjs/controller/cart.js'); ?>"></script>
</html>