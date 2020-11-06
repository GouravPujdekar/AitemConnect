<body ng-app="myApp" ng-controller="avalStoresCtrl" ng-init="init()">
    <section class="shop call-in-action padding-bottom padding-top theme-overlay style-two " >
    <div class="container">
    <div class="row">
         <div class="col-sm-4 sh">                       
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="<?php echo base_url('assets/images/shop/delivery.PNG');?>"  class="card-img order"  alt="Groceries & Essential">
                        </div>
                        <div class="col-md-8">                        
                            <h5 class="card-title" >Order Daily Groceries</h5>
                            <h7 class="card-title">{{shopCount}} Stores</h8>                        
                        </div>                    
                    </div>    
        </div>  
        </div>
    </div>
</section><br>
 <section class=" "  >
      <div class="container cv">
    <div class="row">  
         <div class="col-sm-6" ng-repeat="i in shopList">       
                     <div class="card mb-3" >
                      <div class="row no-gutters">
                        <div class="col-md-3">
                          <img src="<?php echo base_url('assets/images/shop/wood.PNG');?>" class="card-imgg"  alt="Groceries & Essential">
                        </div>
                        <div class="col-md-9">
                          <div class="card-body">
                         
                            <a href="<?php echo site_url('Home/AllStoreProduct');?>" ><h5 class="card-title">Whole Foods Market</h5></a>                          
                         <p ng-repeat="a in i">{{a.addressName}}         {{a.streetAddress}}</p>
                         <p><i class="fa fa-clock"></i> 35 mins </p>                           
                          </div>
                        </div>
                      </div>
                    </div>    
        </div>  
       <!--  ng-click="getAllItem(i)" -->
 </div>
</div>
<div class="loading" ng-show="loader" id="loader">Loading&#8230;</div>
</section>
<script src="<?php echo base_url('assets/angular/angularjs/app.js'); ?>"></script>
<script src="<?php echo base_url('assets/angular/angularjs/controller/allstores.js'); ?>"></script>