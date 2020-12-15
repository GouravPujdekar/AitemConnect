app.controller('avalStoresCtrl', function($http, $scope, toastr,$window){
    $scope.init = function() {       
            $scope.getAllAvalStoresDetails();   
            //localStorage.clear();  
            $scope.loader=false;     
        }
    $scope.getAllAvalStoresDetails = function() {
        $scope.loader=true;  
        var url = "http://" + $window.location.host + "/index.php/Home/getAllAvalStores";
            $http.get(url).
            then((response) => {
                $scope.loader=false;  
                $scope.shopListt = response.data;
                //console.log($scope.shopList);
                if(response.data['status']=="400"){
                    $scope.loader=false;  
                    toastr.warning("There have no any shop");
                }else{           
                    $scope.loader=false;    
                    $scope.shopList = $scope.shopListt;
                    $scope.shopCount = $scope.shopList.length;
                    console.log($scope.shopList);
                    console.log( $scope.shopCount);
                    window.localStorage.setItem("shopDetails",JSON.stringify($scope.shopList));
                }
               
            });
        }
        $scope.getAllItem=function(i){
            $scope.storeId=i.id;
            console.log($scope.storeId);
              var urll = "http://" + $window.location.host + "/index.php/Home/getAllStoresProducts";
            $http({
              method:'get',
              url:urll,
              dataType:"json",
              params:{"storeId": $scope.storeId},
               }).then(function(response){
                  $scope.loader=false;  
                  $scope.productListt = response.data;
               
                  if(response.data['status']=="400"){
                      $scope.loader=false;  
                      toastr.warning("Something went wrong");
                  }else if(response.data==0){
                      toastr.warning("Products are not available");
                  }else{           
                      $scope.loader=false;        
                      localStorage.setItem("storeProduct",JSON.stringify($scope.productListt));
			var u="AllStoreProduct"; 
			window.location=u;
                      console.log($scope.productList);
                  }
               },function(err){
                      console.log(err);
                       $scope.init();
                       $scope.loaderr=false;
               });
          }
    
    });
