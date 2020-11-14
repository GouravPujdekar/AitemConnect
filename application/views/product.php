<body ng-app="myApp" ng-controller="productCtrl" ng-init="init()">
    <section class="shop call-in-action padding-bottom padding-top theme-overlay style-two " >
    <div class="container">
    <div class="row">
         <div class="col-sm-4 sh">                       
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="<?php echo base_url('assets/images/shop/wood.PNG');?>" class="card-img orderr"  alt="Groceries & Essential">
                        </div>
                        <div class="col-md-8">                        
                            <h5 class="card-title" >Whole Foods Market</h5>
                            <h7 class="card-title" ng-bind="detailsList[0].address.addressName"></h7>  <br>
                           <!--  <h7 class="card-title" ><i class="fa fa-clock"></i> 35 mins</h7>-->                       
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
               <!-- <th>Picture</th>-->
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
              <!--  <td ><img src="{{productimg}}" style="height:70px;width:70px;"></td>
                --><td ng-bind="t.name"></td>
                <td ng-bind="t.type"></td>
                <td ng-bind="t.price"></td>
                <td ng-bind="t.weight"></td>
                <td ng-bind="t.quantity"></td>
                <td ng-bind="t.website"></td>
                <td ng-bind="t.shortDescription"></td>               
              </tr>
      </table>

<!--Table-->
         <!--<div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Sr no</th>
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
                <td ><img src="{{t.pictureId}}" style="height:70px;width:70px;"></td>
                <td ng-bind="t.name"></td>
                <td ng-bind="t.type"></td>
                <td ng-bind="t.price"></td>
                <td ng-bind="t.weight"></td>
                <td ng-bind="t.quantity"></td>
                <td ng-bind="t.website"></td>
                <td ng-bind="t.shortDescription"></td>               
              </tr>
            </table>
            <div class="col-sm-12" ng-repeat="t in productList">            
            <div class="card-header" ng-bind="t.type">
             </div>            
                      <div class="card mb-4" >
                      <div class="row no-gutters">
                        <div class="col-md-3">
                          <img src="<?php echo base_url('assets/images/shop/pinapple.PNG');?>" class="card-imgg"  alt="Groceries & Essential">
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
                           <a class="btn btn-success" style="color:white;"><i class="fa fa-plus"></i>Add</a>                         
                          </div>
                        </div>                         
                      </div>
                       </div>                    
           </div>  
        <div class="col-sm-12">       
                      <div class="card mb-4" >
                      <div class="row no-gutters">
                        <div class="col-md-3">
                          <img src="<?php echo base_url('assets/images/shop/pinapple.PNG');?>" class="card-imgg"  alt="Groceries & Essential">
                        </div>
                        <div class="col-md-6">
                          <div class="card-body">
                            <h5 class="card-title" >Pineapple</h5>                          
                             <p>$0.80
                             <p>1 Pc </p>    
                                                         
                          </div>
                        </div>
                         <div class="col-md-3">
                          <div class="card-body">
                          <br>
                           <a class="btn btn-success" style="color:white;"><i class="fa fa-plus"></i>Add</a>                         
                          </div>
                        </div>
                         
                      </div>
                       </div>
           </div>  
         <div class="col-sm-12">       
                      <div class="card mb-4" >
                      <div class="row no-gutters">
                        <div class="col-md-3">
                          <img src="<?php echo base_url('assets/images/shop/pinapple.PNG');?>" class="card-imgg"  alt="Groceries & Essential">
                        </div>
                        <div class="col-md-6">
                          <div class="card-body">
                            <h5 class="card-title" >Pineapple</h5>                          
                             <p>$0.80
                             <p>1 Pc </p>    
                                                         
                          </div>
                        </div>
                         <div class="col-md-3">
                          <div class="card-body">
                          <br>
                           <a class="btn btn-success" style="color:white;"><i class="fa fa-plus"></i>Add</a>                         
                          </div>
                        </div>
                         
                      </div>
                       </div>
           </div>  
         <div class="col-sm-12">       
                      <div class="card mb-4" >
                      <div class="row no-gutters">
                        <div class="col-md-3">
                          <img src="<?php echo base_url('assets/images/shop/pinapple.PNG');?>" class="card-imgg"  alt="Groceries & Essential">
                        </div>
                        <div class="col-md-6">
                          <div class="card-body">
                            <h5 class="card-title" >Pineapple</h5>                          
                             <p>$0.80
                             <p>1 Pc </p>    
                                                         
                          </div>
                        </div>
                         <div class="col-md-3">
                          <div class="card-body">
                          <br>
                           <a class="btn btn-success" style="color:white;"><i class="fa fa-plus"></i>Add</a>                         
                          </div>
                        </div>
                         
                      </div>
                       </div>
           </div>  
        <div class="col-sm-12">       
                      <div class="card mb-4" >
                      <div class="row no-gutters">
                        <div class="col-md-3">
                          <img src="<?php echo base_url('assets/images/shop/pinapple.PNG');?>" class="card-imgg"  alt="Groceries & Essential">
                        </div>
                        <div class="col-md-6">
                          <div class="card-body">
                            <h5 class="card-title" >Pineapple</h5>                          
                             <p>$0.80
                             <p>1 Pc </p>    
                                                         
                          </div>
                        </div>
                         <div class="col-md-3">
                          <div class="card-body">
                          <br>
                           <a class="btn btn-success" style="color:white;"><i class="fa fa-plus"></i>Add</a>                         
                          </div>
                        </div>
                         
                      </div>
                       </div>
           </div>  
        <div class="col-sm-12">       
                      <div class="card mb-4" >
                      <div class="row no-gutters">
                        <div class="col-md-3">
                          <img src="<?php echo base_url('assets/images/shop/pinapple.PNG');?>" class="card-imgg"  alt="Groceries & Essential">
                        </div>
                        <div class="col-md-6">
                          <div class="card-body">
                            <h5 class="card-title" >Pineapple</h5>                          
                             <p>$0.80
                             <p>1 Pc </p>    
                                                         
                          </div>
                        </div>
                         <div class="col-md-3">
                          <div class="card-body">
                          <br>
                           <a class="btn btn-success" style="color:white;"><i class="fa fa-plus"></i>Add</a>                         
                          </div>
                        </div>
                         
                      </div>
                       </div>
           </div>  
        <div class="col-sm-12">       
                      <div class="card mb-4" >
                      <div class="row no-gutters">
                        <div class="col-md-3">
                          <img src="<?php echo base_url('assets/images/shop/pinapple2.PNG');?>" class="card-imgg"  alt="Groceries & Essential">
                        </div>
                        <div class="col-md-6">
                          <div class="card-body">
                            <h5 class="card-title" >Pineapple</h5>                          
                             <p>$0.80
                             <p>1 Pc </p>    
                                                         
                          </div>
                        </div>
                         <div class="col-md-3">
                          <div class="card-body">
                          <br>
                           <a class="btn btn-success" style="color:white;"><i class="fa fa-plus"></i>Add</a>                         
                          </div>
                        </div>
                         
                      </div>
                       </div>
           </div>  
        <div class="col-sm-12">       
                      <div class="card mb-4" >
                      <div class="row no-gutters">
                        <div class="col-md-3">
                          <img src="<?php echo base_url('assets/images/shop/pinapple2.PNG');?>" class="card-imgg"  alt="Groceries & Essential">
                        </div>
                        <div class="col-md-6">
                          <div class="card-body">
                            <h5 class="card-title" >Pineapple</h5>                          
                             <p>$0.80
                             <p>1 Pc </p>    
                                                         
                          </div>
                        </div>
                         <div class="col-md-3">
                          <div class="card-body">
                          <br>
                           <a class="btn btn-success" style="color:white;"><i class="fa fa-plus"></i>Add</a>                         
                          </div>
                        </div>
                         
                      </div>
                       </div>
           </div>  
        <div class="col-sm-12">       
                      <div class="card mb-4" >
                      <div class="row no-gutters">
                        <div class="col-md-3">
                          <img src="<?php echo base_url('assets/images/shop/pinapple2.PNG');?>" class="card-imgg"  alt="Groceries & Essential">
                        </div>
                        <div class="col-md-6">
                          <div class="card-body">
                            <h5 class="card-title" >Pineapple</h5>                          
                             <p>$0.80
                             <p>1 Pc </p>    
                                                         
                          </div>
                        </div>
                         <div class="col-md-3">
                          <div class="card-body">
                          <br>
                           <a class="btn btn-success" style="color:white;"><i class="fa fa-plus"></i>Add</a>                         
                          </div>
                        </div>
                         
                      </div>
                       </div>
           </div>  
        <div class="col-sm-12">       
                      <div class="card mb-4" >
                      <div class="row no-gutters">
                        <div class="col-md-3">
                          <img src="<?php echo base_url('assets/images/shop/pinapple2.PNG');?>" class="card-imgg"  alt="Groceries & Essential">
                        </div>
                        <div class="col-md-6">
                          <div class="card-body">
                            <h5 class="card-title" >Pineapple</h5>                          
                             <p>$0.80
                             <p>1 Pc </p>                                                             
                          </div>
                        </div>
                         <div class="col-md-3">
                          <div class="card-body">
                          <br>
                           <a class="btn btn-success" style="color:white;"><i class="fa fa-plus"></i>Add</a>                         
                          </div>
                        </div>                         
                      </div>
                       </div>
           </div>  -->
 </div>
 </div>
</div>
<div class="loading" ng-show="loader" id="loader">Loading&#8230;</div>
</section>
<script src="<?php echo base_url('assets/angular/angularjs/app.js'); ?>"></script>
<script src="<?php echo base_url('assets/angular/angularjs/controller/product.js'); ?>"></script>
