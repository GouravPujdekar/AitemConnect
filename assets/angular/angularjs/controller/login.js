
app.controller('loginCtrl', function($http, $scope, toastr,$window){
   
  // ************** init *************************
  $scope.init = function() {
    $scope.loader=false;  
  }
 $scope.login = function() {

        if ($scope.username && $scope.password)  { 
          $scope.loader=true;     
            var url = "http://" + $window.location.host + "/index.php/Home/loginUser";
            $http.post(url,{
               
                'username':$scope.username,
                'password':$scope.password
            }).
                then((response) => {  
                    console.log(response);
                    console.log(response.data);  
               if(response.data["profileType"]=="RETAILER"){
                    $scope.loader=false;  
                    toastr.success('Login successfully.');
                    $scope.username="";
                    $scope.password="";                                     
                    var url = 'Shop';
                    window.location = url;                                    
                }
		else if(response.data["profileType"]=="SHOPPER") {
                  $scope.loader=false;  
                  toastr.success('Login successfully.');
                  $scope.username="";
                  $scope.password="";                                     
                  var url = 'AllStores';
                  window.location = url;                                    
              }
		else if(response.data["profileType"]=="DRIVER") {
                  $scope.loader=false;  
                  toastr.success('Login successfully.');
                  $scope.username="";
                  $scope.password="";                                     
                 // var url = 'Home';
                 // window.location = url;                                    
              }

                else if (response.data == 0) {
                  $scope.loader=false;  
                    toastr.error('Failed to Login.');
                    $scope.username="";
                    $scope.password="";              
                }  
                else if (response.data == -1) {
                  $scope.loader=false;  
                    toastr.error('User Not Found Please Register.');
                    $scope.username="";
                    $scope.password="";              
                }                  
                else {
                  $scope.loader=false;  
                    toastr.error('Opps! Something went wrong!.');
                     // toastr.success('Login successfully as customer.');
                  $scope.username="";
                  $scope.password="";                                     
                //  var url = 'AllStores';
                 // window.location = url;                               
                }            
            }, (error) => {
              $scope.loader=false;               
                  toastr.error(error.statusText);
                  $scope.username="";
                  $scope.password="";             
              })
          }
        else{ 
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
                        
                                  }
                              }
        }
      }
});
