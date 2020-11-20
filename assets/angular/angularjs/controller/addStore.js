app.controller('addstoreCtrl', function($http, $scope, toastr){
 
    // ************** init ************************
      $scope.init = function() {
        $scope.loader=false;  
      }
  
   $scope.addRetailerStore = function() {
       // var retrievedObjectt = window.localStorage.getItem('shopDetails');
       // var parsedObjectt = JSON.parse(retrievedObjectt);       
       // $scope.detailsList=parsedObjectt;       
       // $scope.id=$scope.detailsList[0].id;
      //  console.log($scope.id);
          if ($scope.addressName && $scope.streetAddress && $scope.zip && $scope.email && $scope.city && $scope.state && $scope.mobile)  { 
              $scope.loader=true;  
            var url = "http://" + $window.location.host + "/index.php/AddStore/addStore";
              $http.post(url,{                   
                 
                  'addressName' : $scope.addressName,
                  'city' : $scope.city,    
                  'state' : $scope.state,                             
                  'streetAddress' : $scope.streetAddress,
                  'streetAddress1' : $scope.streetAddress1,
                  'zip' : $scope.zip,
                  'email' : $scope.email,
                  'phone' : $scope.mobile,
                 // 'retailerUserId' : $scope.id,
                  'website' : $scope.website,
              }).
                  then((response) => {  
                      console.log(response);
                       console.log(response.data);
                if (response.data) {
                  $scope.loader=false;  
                      toastr.success('Store added successfully.');                     
                      $scope.email="";
                      $scope.mobile="";
                      $scope.addressName="";
                      $scope.state="";
                      $scope.city="";
                      $scope.streetAddress="";
                      $scope.streetAddress1="";
                      $scope.zip="";
                      $scope.website="";   
                      $scope.loader = false;   

                      var url = 'Shop';
                      window.location = url;                    
                    
                  }
                  else if (response.data == 0) {
                    $scope.loader=false;  
                      toastr.error('Failed to Add Store.');
                      $scope.email="";
                      $scope.mobile="";
                      $scope.addressName="";
                      $scope.state="";
                      $scope.city="";
                      $scope.streetAddress="";
                      $scope.streetAddress1="";
                      $scope.zip="";
                      $scope.website="";       
                      $scope.loader = false;
                  }                
                  else {
                    $scope.loader=false;  
                      toastr.error('Opps! Something went wrong.');
                      $scope.email="";
                      $scope.mobile="";
                      $scope.addressName="";
                      $scope.state="";
                      $scope.city="";
                      $scope.streetAddress="";
                      $scope.streetAddress1="";
                      $scope.zip="";
                      $scope.website="";       
                      $scope.loader = false;
                  }
              
              }, (error) => {
                $scope.loader=false;  
                    toastr.error(error.statusText);
                    $scope.email="";
                    $scope.mobile="";
                    $scope.addressName="";
                    $scope.state="";
                    $scope.city="";
                    $scope.streetAddress="";
                    $scope.streetAddress1="";
                    $scope.zip="";
                    $scope.website="";       
                   $scope.loader = false;
                })
            }
          else{              
            if (!$scope.addressName) {
                $('#addressNameDiv').addClass('has-error');
                toastr.error('Please enter AddressName.');
                $('#addressName').focus();
                }
                else{
                   $('#addressNameDiv').removeClass('has-error');

                   if (!$scope.streetAddress) {
                    $('#streetAddressDiv').addClass('has-error');
                    toastr.error('Please enter Street Address.');
                    $('#streetAddress').focus();
                    }
                    else{
                       $('#streetAddressDiv').removeClass('has-error');

                      if (!$scope.email) {
                        $('#emailDiv').addClass('has-error');
                        toastr.error('Please enter Email.');
                        $('#email').focus();
                        }
                        else{
                           $('#emailDiv').removeClass('has-error');                   
                        
                               if (!$scope.city) {
                                $('#cityDiv').addClass('has-error');
                                toastr.error('Please enter City.');
                                $('#city').focus();
                                }
                                else{
                                   $('#cityDiv').removeClass('has-error'); 

                                   if (!$scope.state) {
                                    $('#stateDiv').addClass('has-error');
                                    toastr.error('Please enter State.');
                                    $('#state').focus();
                                    }
                                    else{
                                       $('#stateDiv').removeClass('has-error');                                                              
                                       
                                            
                                               if (!$scope.zip) {
                                                $('#zipDiv').addClass('has-error');
                                                toastr.error('Please enter zip.');
                                                $('#zip').focus();
                                                }
                                                else{
                                                   $('#zipDiv').removeClass('has-error');

                                                   if (!$scope.mobile) {
                                                    $('#mobileDiv').addClass('has-error');
                                                    toastr.error('Please enter Mobile Number.');
                                                    $('#mobile').focus();
                                                    }
                                                    else{
                                                       $('#mobileDiv').removeClass('has-error');
                                                }
                                            }
                                        }
                                    }
                                }
                            }                                                        
                             }
                            
          }
        }
       
  });
  
