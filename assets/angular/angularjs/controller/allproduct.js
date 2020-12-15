app.controller('allproductCtrl', function($http, $scope, toastr,$window){
    $scope.init = function() {       
            $scope.getAllStoreProductDetails();      
            //localStorage.clear();  
            $scope.loader=false;  
            var retrievedObjectt = window.localStorage.getItem('shopDetails');
            var parsedObjectt = JSON.parse(retrievedObjectt);
            console.log(parsedObjectt);
            $scope.detailsList=parsedObjectt;
            console.log($scope.detailsList);
        }
        
    $scope.getAllStoreProductDetails = function() {
        $scope.loader=true;
 	var retrievedObject = window.localStorage.getItem('storeProduct');
            var parsedObject = JSON.parse(retrievedObject);
            console.log(parsedObject);
            $scope.productList=parsedObject;
            console.log($scope.productList);



       /* var url = "http://" + $window.location.host + "/index.php/Home/getAllStoresProducts";
            $http.get(url).
            then((response) => {
                $scope.loader=false;  
                $scope.productListt = response.data;
                console.log($scope.productListt);
                console.log(response);
                if(response.data['status']=="404"){
                    $scope.loader=false;  
                    toastr.warning("Items are not available");
console.log(response.data);
                }
                else{                 
                    $scope.loader=false;  
                    $scope.productList = $scope.productListt;
                    console.log($scope.productList);
                }
               
            });*/
        }
        $scope.addItemIntoCart = function(t) {
            $scope.itemId=t.id;
            $scope.quantity=1;
          
            if ($scope.itemId && $scope.quantity){  
                $scope.loader=true;        
                   var url = "http://" + $window.location.host + "/index.php/Cart/addItem";
                 $http.post(url,{
     
                     'itemId' : $scope.itemId,               
                     'quantity' : $scope.quantity                
                 }).
                     then((response) => {  
                         console.log(response);
                          console.log(response.data);
                        if(response.data) {
                            $scope.loader=false;  
                         toastr.success('Item added into cart successfully.');
                        // var url="Cart";
                       // window.location=url;
                        }
                        },
                         (error) => {
                            $scope.loader=false;  
                            toastr.error(error.statusText);
                        })                
                    }
        }
    
    });
