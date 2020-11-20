app.controller('registerCtrl', function($http, $scope, toastr,$location,$window){
 
  // ************** init ************************
    $scope.init = function() {
      $scope.loader=false;  
    }

 $scope.register = function() {

        if ($scope.fname && $scope.lname && $scope.email && $scope.mobile && $scope.username && $scope.password &&  $scope.streetAddress && $scope.streetAddress1 &&
           $scope.addressName &&  $scope.state && $scope.city &&  $scope.zip  && $scope.selectProfile)  { 
            $scope.loader=true;  
         var url = "http://" + $window.location.host + "/index.php/Home/registerUser";
            $http.post(url,{

                'firstName' : $scope.fname,
                'lastName' : $scope.lname,
                'email' : $scope.email,
                'phone' : $scope.mobile,
                'state' : $scope.state,
                'city' :  $scope.city,                
                'streetAddress' :  $scope.streetAddress,
                'streetAddress1' :  $scope.streetAddress1,
                'zip' :  $scope.zip,
                'profileType' :  $scope.selectProfile,
                'addressName' :  $scope.addressName,
                'username' :  $scope.username,
                'password' :  $scope.password
            }).
                then((response) => {  
                    console.log(response);
                     console.log(response.data);
              if (response.data) {
                $scope.loader=false;  
                    toastr.success('Registration successfully.');
                    $scope.fname="";
                    $scope.lname="";
                    $scope.email="";
                    $scope.mobile="";
                    $scope.state="";
                    $scope.city="";
                    $scope.streetAddress="";
                    $scope.streetAddress1="";
                    $scope.zip="";
                    $scope.selectProfile="";
                    $scope.addressName="";
                    $scope.username="";
                    $scope.password="";
                    var url = 'Login';
                    window.location = url;
                  //  $scope.loader = false;
                  
                }
                else if (response.data == 0) {
                  $scope.loader=false;  
                    toastr.error('Failed to Register.');
                    $scope.fname="";
                    $scope.lname="";
                    $scope.email="";
                    $scope.mobile="";
                    $scope.state="";
                    $scope.city="";
                    $scope.streetAddress="";
                    $scope.streetAddress1="";
                    $scope.zip="";
                    $scope.selectProfile="";
                    $scope.addressName="";
                    $scope.username="";
                    $scope.password="";
                   // $scope.loader = false;
                }                
                else {
                  $scope.loader=false;  
                    toastr.error('Opps! Something went wrong.');
                    $scope.fname="";
                    $scope.lname="";
                    $scope.email="";
                    $scope.mobile="";
                    $scope.state="";
                    $scope.city="";
                    $scope.streetAddress="";
                    $scope.streetAddress1="";
                    $scope.zip="";
                    $scope.selectProfile="";
                    $scope.addressName="";
                    $scope.username="";
                    $scope.password="";
                  //  $scope.loader = false;
                }
            
            }, (error) => {
              $scope.loader=false;  
                  toastr.error(error.statusText);
                  $scope.fname="";
                  $scope.lname="";
                  $scope.email="";
                  $scope.mobile="";
                  $scope.state="";
                  $scope.city="";
                  $scope.streetAddress="";
                  $scope.streetAddress1="";
                  $scope.zip="";
                  $scope.selectProfile="";
                  $scope.addressName="";
                  $scope.username="";
                  $scope.password="";
                // $scope.loader = false;
              })
          }
        else{ 
            if (!$scope.fname) {
              $('#nameDiv').addClass('has-error');
              toastr.error('Please enter First Name.');
              $('#fname').focus();
              }
              else{
                 $('#nameDiv').removeClass('has-error');
                 
                if (!$scope.lname) {
                  $('#lnameDiv').addClass('has-error');
                  toastr.error('Please enter Last Name.');
                  $('#lname').focus();
                  }
                  else{
                     $('#lnameDiv').removeClass('has-error');
                    
                    if (!$scope.email) {
                      $('#emailDiv').addClass('has-error');
                      toastr.error('Please enter Email.');
                      $('#email').focus();
                      }
                      else{
                         $('#emailDiv').removeClass('has-error');
                         
                         if (!$scope.mobile) {
                          $('#mobileDiv').addClass('has-error');
                          toastr.error('Please enter Mobile Number.');
                          $('#mobile').focus();
                          }
                          else{
                             $('#mobileDiv').removeClass('has-error');
                            
                            if (!$scope.username) {
                              $('#usernameDiv').addClass('has-error');
                              toastr.error('Please enter Username.');
                              $('#username').focus();
                              }
                              else{
                                 $('#usernameDiv').removeClass('has-error');
                                
                                if (!$scope.password) {
                                  $('#passwordDiv').addClass('has-error');
                                  toastr.error('Please enter Password.');
                                  $('#password').focus();
                                  }
                                  else{
                                     $('#passwordDiv').removeClass('has-error');                                    
                                      
                                     if (!$scope.streetAddress) {
                                      $('#streetAddressDiv').addClass('has-error');
                                      toastr.error('Please enter Street Address.');
                                      $('#streetAddress').focus();
                                      }
                                      else{
                                         $('#streetAddressDiv').removeClass('has-error');

                                    if (!$scope.state) {
                                      $('#stateDiv').addClass('has-error');
                                      toastr.error('Please enter State.');
                                      $('#state').focus();
                                      }
                                      else{
                                         $('#stateDiv').removeClass('has-error');
                                         
                                         if (!$scope.city) {
                                          $('#cityDiv').addClass('has-error');
                                          toastr.error('Please enter City.');
                                          $('#city').focus();
                                          }
                                          else{
                                             $('#cityDiv').removeClass('has-error');
                                            
                                                 
                                                  if (!$scope.selectProfile) {
                                                      $('#profileDiv').addClass('has-error');
                                                      toastr.error('Please select profile.');
                                                      $('#selectProfile').focus();
                                                      }
                                                     else{
                                                        $('#profileDiv').removeClass('has-error');
                                                      } 
                                          } 
                                  } 
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
