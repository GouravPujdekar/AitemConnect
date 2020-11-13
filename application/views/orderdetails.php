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
<body  ng-app="myApp" ng-controller="orderCtrl" ng-init="init()">
<div class="container">
<div class="ak col-sm-12">


<div class="tab responsive">
  <button class="tablinks" onclick="openCity(event, 'Order')">Order List</button>
  <button class="tablinks" onclick="openCity(event, 'Address')">Address</button>
 <!-- <button class="tablinks" onclick="openCity(event, 'ManagePayment')">Manage Payment</button>
  <button class="tablinks" onclick="openCity(event, 'Support')">Support</button>-->
</div>

<div id="Order" class="tabcontent active">
  <h3>Order List</h3>
  <div class="table-responsive">
      <table class="table">
      <thead>
              <tr>
                <th>#</th>               
                <th>OrderId</th>
                <th>Name</th>
                <th>Price</th>            
                <th>Qty</th>
                <th>Type</th>
                <th>Status</th>              
              </tr>
              </thead>
              <tr ng-repeat="t in orderList">
                <td>{{$index+1}}</td>
             
                <td ng-bind="t.id"></td>
                <td ng-bind="t.items[0].name"></td>
                <td ng-bind="t.items[0].price"></td>               
                <td ng-bind="t.items[0].quantity"></td>              
                <td ng-bind="t.items[0].type"></td> 
                <td ng-bind="t.orderStatus"></td>               
              </tr>
      </table>
      </div>
</div>

<div id="Address" class="tabcontent">
  <h3>Address</h3>
  <div class="address" ><a href="#" id="t3" ><b><i class="fa fa-plus"></i> Add new address</b></a></div>
</div>
<div id="ManagePayment" class="tabcontent">
       <div class="container">      
              <div class="col-md-12">                  
                      
               </div>
     
        </div>   
</div>

<div id="Support" class="tabcontent">
    <h3>Support</h3>
  
  </div>
</div>
</div> 
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";    
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
<script src="<?php echo base_url('assets/angular/angularjs/app.js'); ?>"></script>
<script src="<?php echo base_url('assets/angular/angularjs/controller/order.js'); ?>"></script>