<body ng-app="myApp" ng-controller="shopCtrl" ng-init="init()" >
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
  <section class=" "  style="background-image:url('<?php echo base_url('images/way3.jpg');?>');">
  <div class="container cv"><br>
    <div class="col-lg-12" >
      <div class="col-sm-6">
      <a href="<?php echo site_url('Home/AddStore');?>" class="btn btn-success"><i class="fa fa-plus"></i> Add Store</a>
      </div>    </div>
    </div><br>  
      <div class="container cv">
    <div class="row">      
         <div class="col-sm-6" ng-repeat="i in shopList">       
                     <div class="card mb-3" id="cardd">
                      <div class="row no-gutters">
                     <div class="col-md-12">
                          <div class="card-body">
                           <h5 class="card-title"> <a href="" ng-click="viewItem(i)" class="an" ng-repeat="a in i"><u ng-bind="a.addressName"></u></a>   </h5>                       
                         <p ng-repeat="a in i"> <b ng-bind="a.streetAddress"></b></p>                                          
                          </div>
                        </div>
                      </div>
                    </div>    
        </div>        
 </div>
</div>
</section>
<div class="loading" ng-show="loader" id="loader">Loading&#8230;</div>
</section>
<script src="<?php echo base_url('assets/angular/angularjs/app.js'); ?>"></script>
<script src="<?php echo base_url('assets/angular/angularjs/controller/index.js'); ?>"></script>