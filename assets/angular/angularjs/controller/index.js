app.controller('shopCtrl', function($http, $scope, toastr){
$scope.init = function() {       
        $scope.getAllStoresDetails();   
        $scope.loader=false;  
        localStorage.clear();    
    }
$scope.getAllStoresDetails = function() {
    $scope.loader=true;  
        $http.get(window.site_url + 'Home/getAllStores').
        then((response) => {
            $scope.loader=false;  
            $scope.shopListt = response.data;
            //console.log($scope.shopList);
            if(response.data['status']=="400"){
                $scope.loader=false;  
                toastr.warning("No Shop Created");
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
    $scope.viewItem=function(i){
        $scope.loader=true; 
        $scope.id=i.id;
        console.log($scope.id);
        window.localStorage.setItem("storeId",JSON.stringify($scope.id));
        var url="Product";
        window.location=url;
    }

});