<body ng-app="myApp" ng-controller="avalStoresCtrl" ng-init="init()">
    <section class="shop call-in-action padding-bottom padding-top theme-overlay style-two " >
    <div class="container">
    <div class="row">
         <div class="col-sm-4 sh">                       
                      <div class="row no-gutters">                      
                        <div class="col-md-8">        
                            <h7 class="card-title"><u>{{shopCount}} Stores</u></h8>                        
                        </div>                    
                    </div>    
        </div>  
        </div>
    </div>
</section>
 <section class=" " style="background-image:url('<?php echo base_url('images/way3.jpg');?>');" >
      <div class="container cv">
    <div class="row">  
         <div class="col-sm-6" ng-repeat="i in shopList">   <br>     
                     <div class="card mb-3" id="cardd">
                      <div class="row no-gutters">
                       <!-- <div class="col-md-3">
                          <img src="<?php echo base_url('assets/images/shop/wood.PNG');?>" class="card-imgg"  alt="Groceries & Essential">
                        </div>-->
                        <div class="col-md-12 active">
                          <div class="card-body">
                          <h5 class="card-title"> <a href="" ng-click="getAllItem(i)" class="an"  ng-repeat="a in i"><u ng-bind="a.addressName"></u></a>   </h5>                       
                         <p ng-repeat="a in i"> <b ng-bind="a.streetAddress"></b></p>                        
                          </div>
                        </div>
                      </div>
                    </div>    
        </div>    
 </div>
</div>
<div class="loading" ng-show="loader" id="loader">Loading&#8230;</div>
</section>
<script src="<?php echo base_url('assets/angular/angularjs/app.js'); ?>"></script>
<script src="<?php echo base_url('assets/angular/angularjs/controller/allstores.js'); ?>"></script>