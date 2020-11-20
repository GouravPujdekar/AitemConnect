app.controller('orderCtrl', function($http, $scope, toastr){
    $scope.init = function() {       
            $scope.getAllOrderDetails();      
            localStorage.clear();  
            $scope.loader=false;            
        }
        
    $scope.getAllOrderDetails = function() {       
       
        $scope.loader=true; 
         var url = "http://" + $window.location.host + "index.php/Order/getAllOrders";
        $http.get(window.url).
        then((response) => {
            $scope.loader=false;  
            $scope.orderListt = response.data;
            //console.log($scope.shopList);
            if(response.data['status']=="400"){
                $scope.loader=false;  
                toastr.warning("Something went wrong!");
            }else if(response.data['status']=="500"){
                $scope.loader=false;  
                toastr.warning("Something went wrong!");
            }
            else if(response.data==0){
                toastr.warning("Orders are not available");
            }else{           
                $scope.loader=false;        
                $scope.orderList = $scope.orderListt;
                console.log($scope.orderList);
            }
        },function(err){
             console.log(err);
            // $scope.init();
             $scope.loader=false;
     });        
    }     
    });
