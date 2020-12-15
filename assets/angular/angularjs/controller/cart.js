app.controller('cartCtrl', function($http, $scope, toastr,$window){
    $scope.init = function() {       
            $scope.getAllCartDetails();      
            //localStorage.clear();  
            $scope.loader=false;  
	    $scope.getAddressForUser();
        }        
    $scope.getAllCartDetails = function() {
        $scope.loader=true;  
          var url = "http://" + $window.location.host + "/index.php/Cart/getAllCart";
            $http.get(url).
            then((response) => {
                $scope.cartListt = response.data;
                console.log($scope.cartList);
                console.log(response);
                $scope.loader=false;  
                if(response.data['status']=="EMPTY"){
                    $scope.loader=false;  
                    toastr.warning("Items are not in the cart");
                }
 		else if(response.data['status']=="500"){
                    $scope.loader=false;  
                    toastr.warning("Something went wrong!");
                }
                else{            
                    $scope.loader=false;       
                    $scope.cartList = $scope.cartListt;
                    console.log($scope.cartList);
                }               
            });
        }
$scope.getAddressForUser= function() {
        $scope.loader=true;  
          var url = "http://" + $window.location.host + "/index.php/Cart/getAddressByUserId";
            $http.get(url).
            then((response) => {
                $scope.addressListt = response.data;
                console.log($scope.addressListt );
                $scope.loader=false;  
                if(response.data['status']=="400"){
                    $scope.loader=false;  
                    toastr.warning("Something went wrong!");
                }
                else{            
                    $scope.loader=false;       
                    $scope.addressList = $scope.addressListt ;
                    console.log($scope.addressList);
                }               
            });
        }      
    
});
