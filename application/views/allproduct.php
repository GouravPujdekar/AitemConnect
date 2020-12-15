<body ng-app="myApp" ng-controller="allproductCtrl" ng-init="init()">
    <section class="shop call-in-action padding-bottom padding-top theme-overlay style-two " >
    <div class="container">
    <div class="row">
         <div class="col-sm-4 sh">                       
                      <div class="row no-gutters">
                       
                        <div class="col-md-8">                        
                            <u><h5 class="card-title" ng-bind="detailsList[0].address.addressName"></h5></u>
                            <h7 class="card-title" ng-bind="detailsList[0].address.streetAddress" ></h7>  <br>
                                              
                        </div>                    
                    </div>    
        </div>  
        </div>
    </div>
</section><br>
 <section class=" "  >
      <div class="container cv">
    <div class="row">  
            <div class="col-sm-12" ng-repeat="t in productList">            
            <div class="card-header" ng-bind="t.type">
             </div>            
                      <div class="card mb-4" >
                      <div class="row no-gutters">
                        <div class="col-md-3">
                          <img src="{{t.pictureUrl}}" class="card-imgg"  alt="Groceries & Essential">
                        </div>
                        <div class="col-md-6">
                          <div class="card-body">
                            <h5 class="card-title" ng-bind="t.name"></h5>                          
                             <p>Price: <span ng-bind="t.price"></span></p>
                             <p> <i class="fa fa-shopping-cart"></i>  <span ng-bind="t.quantity"></span>| Weight: <span ng-bind="t.weight"></span> </p>
                             <p ng-bind="t.shortDescription"> </p>  
                             <p >website:  <span ng-bind="t.website"></span></p>                                                        
                          </div>
                        </div>
                         <div class="col-md-3">
                          <div class="card-body">
                          <br>
                           <a class="btn btn-success" style="color:white;"  ng-click="addItemIntoCart(t)"><i class="fa fa-plus"></i>Add</a>                         
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
    <script src="<?php echo base_url('assets/angular/angularjs/controller/allproduct.js'); ?>"></script>