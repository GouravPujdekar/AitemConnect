<body>
  <!-- ==========privacy-section========== -->
 <body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo"  ng-app="myApp" ng-controller="registerCtrl" ng-init="init()">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form >
                        <div class="row row-space col-12">
                            <div class="col-6" id="fnameDiv">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="First Name" ng-model="fname" id="fname">
                                </div>
                            </div>
                            <div class="col-6" id="lnameDiv">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Last Name" ng-model="lname" id="lname">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space col-12">
                            <div class="col-6" id="emailDiv">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Email" ng-model="email" id="email">
                                </div>
                            </div>
                            <div class="col-6" id="mobileDiv">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" ng-model="mobile"  placeholder="Phone" id="phone">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space col-12">
                            <div class="col-6" id="usernameDiv">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Username" ng-model="username" id="username">
                                </div>
                            </div>
                            <div class="col-6" id="passwordDiv">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Password" ng-model="password" id="password">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space col-12">
                            <div class="col-6" id="addressDiv">
                                <div class="input-group">
                                     <input class="input--style-2" type="text" placeholder="Street Address" ng-model="streetAddress"  id="streetAddress">
                            <!--<label for="address">Address</label>
                                <div class="input-group">
                             
                                    <textarea class="input--style-2" type="text" placeholder="" ng-model="streetAddress"  id="streetAddress"> </textarea>
                                </div>-->
                            </div>
                             </div>
                            <div class="col-6" id="streetAddress1Div">                          
                            <div class="input-group">
                              <input class="input--style-2" type="text" placeholder="Street Address1" ng-model="streetAddress1"  id="streetAddress1">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space col-12">
                        <div class="col-4" id="addressNameDiv">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="addressName" ng-model="addressName" id="addressName">
                                </div>
                            </div>
                            <div class="col-4" id="cityDiv">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="City" ng-model="city"  id="city">
                                </div>
                            </div>
                            <div class="col-4" id="stateDiv">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="State" ng-model="state" id="state">
                                </div>
                            </div>                          
                        </div>               
                       
                          <div class="row row-space col-12">
                          <div class="col-8" id="zipDiv">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Zip" ng-model="zip" id="zip">
                                </div>
                            </div>
                               <div class="col-4">
                                <div class="input-group">
                                    <div class="">
                                       
                                    <select type="text" class="browser-default custom-select" ng-model="selectProfile">
                                    <option value="">Profile Type</option>
                                    <option value="DRIVER">DRIVER</option>
                                    <option value="RETAILER">RETAILER</option>
                                    <option value="CUSTOMER">CUSTOMER</option>
                                    <option value="NOT_DECIDED">NOT_DECIDED</option>
                                    </select>                               
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="row row-space col-12"> 
                        <div class="p-t-30 col-4">
                            <a class="btn btn--radius btn--green"  ng-click="register()" style="color:white;">Register</a>
                        </div>
                        </div><br>
                        <div class="row row-space col-12">
                            <div class="col-6">
                                <div class="input-group">
                                <p class="mt-2 d-flex flex-wrap justify-content-between">Already account ? <a href="<?php echo site_url('Home/Login')?>"> Login Here</a></p>
                                </div>
                            </div>                       
                            <div class="col-6">                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="loading" ng-show="loader" id="loader">Loading&#8230;</div>
    <!-- Jquery JS-->
    <script src="<?php echo base_url('assets/login/vendor/jquery/jquery.min.js');?>"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url('assets/login/vendor/select2/select2.min.js');?>"></script>
    <script src="<?php echo base_url('assets/login/vendor/datepicker/moment.min.js');?>"></script>
    <script src="<?php echo base_url('assets/login/vendor/datepicker/daterangepicker.js');?>"></script>
    <!-- Main JS-->
    <script src="<?php echo base_url('assets/login/js/global.js');?>"></script>
<!-- app.js -->
<script src="<?php echo base_url('assets/angular/angularjs/app.js'); ?>"></script>
<!-- app.js -->
<script src="<?php echo base_url('assets/angular/angularjs/controller/register.js'); ?>"></script>
</body>