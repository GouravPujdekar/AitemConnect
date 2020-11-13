
app.controller('stripeCtrl', function($http, $scope, toastr){
  
    $scope.init = function() {       
            $scope.getAllCartDetails();      
            //localStorage.clear();  
            $scope.loader=false; 
         
        }
        
    $scope.getAllCartDetails = function() {
        $scope.loader=true;  
            $http.get(window.site_url + 'Cart/getAllCart').
            then((response) => {
                $scope.cartListt = response.data;
                console.log($scope.cartListt);
                console.log(response);
                $scope.loader=false;  
                if(response.data['status']=="400"){
                    $scope.loader=false;  
                    toastr.warning("Items are not in the cart");
                }
                else{            
                    $scope.loader=false;       
                    $scope.amount = response.data["items"][0]["price"];
                    $scope.id = response.data["items"][0]["id"];
                    $scope.quantity = response.data["items"][0]["quantity"];
                    console.log($scope.amount);
                    console.log($scope.id);
                    console.log($scope.quantity);
                }
               
            });
        }
       
});