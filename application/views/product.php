<body ng-app="myApp" ng-controller="productCtrl" ng-init="init()">
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
<section class=" ">
  <div class="container cv">
    <div class="col-lg-12" >
      <div class="col-sm-6">
      <a href="<?php echo site_url('Home/AddItem');?>" class="btn btn-success"><i class="fa fa-plus"></i> Add Item</a>
      </div>
      

    </div>
    </div>
  </section><br>
 <section class=" "  >
  <div class="container cv">          
    <div class="row">
      <!--Table-->
      <div class="table-responsive">
      <table class="table">
      <thead>
              <tr>
                <th>#</th>
                <th>Picture</th>
                <th>Name</th>
                <th>Type</th>
                <th>Price</th>
                <th>Weight</th>
                <th>Qty</th>
                <th>Website</th>
                <th>Description</th>
              </tr>
              </thead>
              <tr ng-repeat="t in productList">
                <td>{{$index+1}}</td>
               <td ><img src={{t.pictureUrl}} style="height:70px;width:70px;"></td>
                <td ng-bind="t.name"></td>
                <td ng-bind="t.type"></td>
                <td ng-bind="t.price"></td>
                <td ng-bind="t.weight"></td>
                <td ng-bind="t.quantity"></td>
                <td ng-bind="t.website"></td>
                <td ng-bind="t.shortDescription"></td>               
              </tr>
      </table>

<!--Table-->
         
 </div>
 </div>
</div>
<div class="loading" ng-show="loader" id="loader">Loading&#8230;</div>
</section>
<script src="<?php echo base_url('assets/angular/angularjs/app.js'); ?>"></script>
<script src="<?php echo base_url('assets/angular/angularjs/controller/product.js'); ?>"></script>
