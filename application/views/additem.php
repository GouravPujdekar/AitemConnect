<head>
<link rel="stylesheet" href="<?php echo base_url('assets/css/StyleSheet1.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/c/bootstrap.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css');?>">
<script src="<?php echo base_url('assets/css/c/js/jquery-2.1.4.min.js');?>"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
-->
</head>
<body>
    <div class="container-fluid">
        <div class="Panel-group" ng-app="myApp" ng-controller="addItemCtrl" ng-init="init()"> 
            <div  class="panel panel-default"> 
                  <div class="panel panel-primary">
                    <div class="panel-heading "><h4>ADD ITEM INTO STORE</h4></div>
                   </div>
                  <div class="panel-body">
                    <form  name="store" >
                           <div class="form-group" id="nameDiv">
                              <label for="inputPassword">Name</label>
                               <input type="text" id="name" ng-model="name"  class="form-control" placeholder="Type"/>
                            </div>
                            <div class="form-group" id="typeDiv">
                              <label for="inputPassword">Type</label>
                               <input type="text" id="type" ng-model="type"  class="form-control" placeholder="Type"/>
                            </div>
                            <div class="form-group" id="priceDiv">
                               <label>Price</label>
                                <input type="text" id="price" ng-model="price" class="form-control" placeholder="Price"required/>
                            </div>
                            <div class="form-group" id="quantityDiv">
                             <label >Quantity</label>
                             <input type="text"id="quantity" ng-model="quantity" class="form-control" placeholder="Quantity"required/>
                            </div>
                            <div class="form-group" id="visibilityDiv">
                             <label >Status</label>
                              <select type="text" class="form-control" ng-model="status" id="status">
                                <option value="">Profile Type</option>
                                <option value="ACTIVE">ACTIVE</option>
                                <option value="INACTIVE">INACTIVE</option>
                                </select>                           
                            </div>
                            <div class="form-group" id="websiteDiv">
                               <label>Website</label>
                              <input type="text" class="form-control" ng-model="website" id="website" placeholder="Website"/>
                            </div>                           
                            <div class="form-group" id="descriptionDiv">
                                <label >Description</label>
                                 <input type="text" ng-model="description" id="description" placeholder="Description" class="form-control"/>
                            </div>
                            <div class="form-group" id="shortDescriptionDiv">
                                <label >Short Description</label>
                                <input type="text" ng-model="shortDescription" id="shortDescription"  placeholder="Short Description" class="form-control"/> 
                            </div>   
                            <div class="form-group" id="skuDiv">
                                    <label >SKU</label>
                                     <input type="text" ng-model="sku" id="sku" placeholder="SKU" class="form-control"/>
                            </div>
                            <div class="form-group" id="weightDiv">
                                    <label >Weight</label>
                                    <input type="text" ng-model="weight" id="weight"  placeholder="Weight" class="form-control"/> 
                            </div>  
                            <div class="form-group" id="visibilityDiv">
                                <label >Visibility</label>
                                <input type="text" ng-model="visibility" id="visibility" placeholder="Open/Closed" class="form-control"/>
                            </div>
                            <div class="form-group" id="fileDiv">
                                <label >Product Image</label>
                                <input id="files"  ng-model="DownloadFile" type="file"  class="form-control"  onchange="angular.element(this).scope().uploadedFile(this)" multiple="">
                            </div>
                                            
                    </form>
                </div>
                <div class="panel ">
                <div class="panel-footer ">
                   <a href="" class="btn btn-success" ng-click="addItemInStore()"><i class="fa fa-plus"></i> Add</a>
                </div>
            </div>
            </div>
        </div>
    </div>


<script src="<?php echo base_url('assets/angular/angularjs/app.js'); ?>"></script>
<script src="<?php echo base_url('assets/angular/angularjs/controller/additem.js'); ?>"></script>