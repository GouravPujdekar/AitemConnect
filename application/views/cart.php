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
  
</head><br>

<body ng-app="myApp" ng-controller="cartCtrl" ng-init="init()">
<div class="container-fluid">
            <div class="col-sm-12">
            <div class="container">
                <div class="col-sm-5">
                    <div  id="t2">
                        <div>
                      <h4><b><i class="fa fa-home"></i> Add delivery address</b></h4>
                      <p>choose your delivery address from address book or add new</p>
                    </div>                   
                    <div class="address" ><a href="#"id="t3" ><b><i class="fa fa-plus"></i> Add new address</b></a></div>
                    </div>
                    <br />
                   <!-- <div id="t7">
                        <h4><b>Select Payment Method</b></h4>
                        <a href="#">Select your payment method from the existing one or add new one</a>
                    </div>-->
                </div>
                <div class="col-sm-4" >
                    <div id="t4">
                        <div><h4><b>Your Cart</b>  (<b ng-bind="cartList.items[0].quantity"></b>)</h4> </div>
                        <div>From <a href="#">Whole Foods Market</a></div>
                       
                        <hr />
                        <div><i class="	fa fa-circle" style="color: blue;">  </i><b ng-bind="cartList.items[0].name"></b>
                            <div class="number-input">
                                <button  class="minus" ng-click="plusQty(cartList)"><i class="fa fa-minus" ></i></button>
                                <input class="quantity" min="0" ng-bind="cartList.items[0].quantity" name="quantity" value="1" type="number">
                                <button  class="plus" ng-click="plusQty(cartList)"><i class="fa fa-plus"></i></button>
                            </div>                      
                        </div>
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
                        <p><b>To Pay -</b>    $<b ng-bind="cartList.items[0].price"></b></p>
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-3">
                        <a id="btncheckout" href="<?php echo site_url("Welcome");?>" class="btn btn-primary ">Checkout</a>
                       
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
