
app.controller('loginCtrl', function($http, $scope, toastr,$location){
   
  // ************** init *************************
  $scope.init = function() {
    $scope.loader=false;  
  }
 $scope.login = function() {

        if ($scope.username && $scope.password)  { 
          $scope.loader=true;           // toastr.success('Login successfully.');
            $http.post(site_url + 'Home/loginUser',{
               
                'username':$scope.username,
                'password':$scope.password
            }).
                then((response) => {  
                    console.log(response);
                    console.log(response.data);
              if (response) {
                $scope.loader=false;  
                    toastr.success('Login successfully.');
                    $scope.username="";
                    $scope.password="";
                    $scope.loader = false; 
                    var url = 'Shop';
                    window.location = url;
                                    
                }
                else if (response.data == 0) {
                  $scope.loader=false;  
                    toastr.error('Failed to Login.');
                    $scope.username="";
                  $scope.password="";
              
                   // $scope.loader = false;
                }                
                else {
                  $scope.loader=false;  
                    toastr.error('Opps! Something went wrong.');
                    $scope.username="";
                  $scope.password="";
                  //  $scope.loader = false;
                }            
            }, (error) => {
              $scope.loader=false;  
                  toastr.error(error.statusText);
                  $scope.username="";
                  $scope.password="";
                // $scope.loader = false;
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