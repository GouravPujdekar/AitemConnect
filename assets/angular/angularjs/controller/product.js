app.controller('productCtrl', function($http, $scope, toastr,$window){
    $scope.init = function() {       
            $scope.getAllProductDetails();      
            //localStorage.clear();  
            $scope.loader=false;  
            var retrievedObjectt = window.localStorage.getItem('shopDetails');
            var parsedObjectt = JSON.parse(retrievedObjectt);
            console.log(parsedObjectt);
            $scope.detailsList=parsedObjectt;
            console.log($scope.detailsList);
        }
        
    $scope.getAllProductDetails = function() {
       
        var retrievedObjectt = window.localStorage.getItem('storeId');
        var parsedObjectt = JSON.parse(retrievedObjectt);    
        $scope.detailsList=parsedObjectt;
        $scope.storeId=$scope.detailsList;
        console.log($scope.storeId);
        $scope.loader=true; 
         var url = "http://" + $window.location.host + "index.php/Home/getAllProducts";
        $http({
            method:'get',
            url:window.url,
            dataType:"json",
            params:{"storeId": $scope.storeId},
             }).then(function(response){
                $scope.loader=false;  
                $scope.productListt = response.data;
                //console.log($scope.shopList);
                if(response.data['status']=="400"){
                    $scope.loader=false;  
                    toastr.warning("Products are not available");
                }else if(response.data==0){
                    toastr.warning("Products are not available");
                }else{           
                    $scope.loader=false; 
                     var decodedString = atob($scope.productListt[0]['pictureId']);
                    console.log(decodedString);  
                    $scope.productimg= decodedString; 
                    console.log($scope.productimg);  
                    $scope.productList = $scope.productListt;
                    console.log($scope.productList);
                }
             },function(err){
                    console.log(err);
                     $scope.init();
                     $scope.loaderr=false;
             });
           /* $http.get(window.site_url + 'Home/getAllProducts').
            then((response) => {
                $scope.loader=false;  
                $scope.productListt = response.data;
                //console.log($scope.shopList);
                if(response.data['status']=="400"){
                    $scope.loader=false;  
                    toastr.warning("Products are not available");
                }else{           
                    $scope.loader=false;        
                    $scope.productList = $scope.productListt;
                    console.log($scope.productList);
                }
               
            });*/
        }
    
    });
