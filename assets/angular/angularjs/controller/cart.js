app.controller('cartCtrl', function($http, $scope, toastr){
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
                console.log($scope.cartList);
                console.log(response);
                $scope.loader=false;  
                if(response.data['status']=="400"){
                    $scope.loader=false;  
                    toastr.warning("Items are not in the cart");
                }
                else{            
                    $scope.loader=false;       
                    $scope.cartList = $scope.cartListt;
                    console.log($scope.cartList);
                }
               
            });
        }
        $scope.plusQty = function(cartList) {
            $scope.itemId=cartList.items[0].id;
            $scope.n=1;
            $scope.quantity=parseInt(cartList.items[0].quantity) + parseInt($scope.n);
            console.log($scope.quantity);
           /* if ($scope.itemId && $scope.quantity){ 
                $scope.loader=true;          
                 $http.post(site_url + 'Cart/plusItem',{
     
                     'itemId' : $scope.itemId,               
                     'quantity' : $scope.quantity                
                 }).
                     then((response) => {  
                         console.log(response);
                          console.log(response.data);
                        if(response.data) {
                            $scope.loader=false;  
                         toastr.success('Item add successfully.');
                         var url="Cart";
                        window.location=url;
                        }
                        },
                         (error) => {
                            toastr.error(error.statusText);
                        })                
                    } */       
        }
        $scope.minusQty = function(cartList) {
            $scope.itemId=cartList.items[0].id;
            $scope.n=1;
            $scope.quantity=parseInt(cartList.items[0].quantity) - parseInt($scope.n);
            console.log($scope.quantity);
            /*if ($scope.itemId && $scope.quantity){    
                $scope.loader=true;     
                 $http.post(site_url + 'Cart/minusItem',{
     
                     'itemId' : $scope.itemId,               
                     'quantity' : $scope.quantity                
                 }).
                     then((response) => {  
                         console.log(response);
                          console.log(response.data);
                        if(response.data) {
                            $scope.loader=false;  
                        // toastr.success('Item add successfully.');
                         var url="Cart";
                        window.location=url;
                        }
                        },
                         (error) => {
                            $scope.loader=false;  
                            toastr.error(error.statusText);
                        })                
                    }*/
        
        }
    
});