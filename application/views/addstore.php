<link rel="stylesheet" href="<?php echo base_url('assets/css/StyleSheet1.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/c/bootstrap.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css');?>">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
<body>
    <div class="container-fluid" >
        <div class="Panel-group" ng-app="myApp" ng-controller="addstoreCtrl" ng-init="init()"> 
            <div  class="panel panel-default"> 
                  <div class="panel panel-primary">
                    <div class="panel-heading "><h4>ADD STORE</h4></div>
                   </div>
                  <div class="panel-body" >
                    <form name="store" >
                        <div class="form-group" id="addressNameDiv">
                               <label>Address Name</label>
                                <input type="text" id="addressName" ng-model="addressName" class="form-control" placeholder="Address Name"required/>
                            </div>
                         <div class="form-group" id="streetAddressDiv">
                               <label>Street Address</label>
                                <input type="text" id="streetAddress" ng-model="streetAddress" class="form-control" placeholder="Street Address"required/>
                            </div>
                            <div class="form-group" id="streetAddress1Div">
                             <label >Street Address 2</label>
                             <input type="text"id="streetAddress" ng-model="streetAddress1" class="form-control" placeholder="Street Address 2"required/>
                            </div>
                            <div class="form-group" id="emailDiv">
                             <label >Email</label>                             
                              <input type="text" class="form-control" ng-model="email" id="email" name="inputEmail"  name="email" placeholder="Email">
                              
                            </div>
                            <div class="form-group" id="cityDiv">
                               <label>City</label>
                              <input type="text" class="form-control" ng-model="city" id="city" placeholder="City"/>
                            </div>
                            <div class="form-group" id="stateDiv">
                               <label>State</label>
                               <input type="text" ng-model="state" id="state" placeholder="State" class="form-control"/>
                            </div>
                            <div class="form-group" id="zipDiv">
                                <label >Zip Code</label>
                                 <input type="text" ng-model="zip" id="zip" placeholder="Zip Code" class="form-control"/>
                            </div>
                            <div class="form-group" id="websiteDiv">
                                <label >website</label>
                                <input type="text" ng-model="website" id="website" placeholder="Website" class="form-control"/>
                            </div>
                            <div class="form-group" id="mobileDiv">
                                <label >Mobile number</label>
                                <input type="text" ng-model="mobile" id="mobile"  placeholder="Phone number"class="form-control"/> 
                            </div>                         
                        </form>
                </div>
                <div class="panel ">
                <div class="panel-footer ">
                  <a href="" class="btn btn-primary" ng-click="addRetailerStore()">Add</a> 
                </div>                
<div class="loading" ng-show="loader" id="loader">Loading&#8230;</div>
            </div>
            </div>
        </div>
    </div>
</body>
<script src="<?php echo base_url('assets/angular/angularjs/app.js'); ?>"></script>
<script src="<?php echo base_url('assets/angular/angularjs/controller/addStore.js'); ?>"></script>