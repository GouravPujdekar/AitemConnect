app.controller('addItemCtrl', function($http, $scope, toastr){
 
    // ************** init ************************
      $scope.init = function() {
        $scope.loader=false;  
      }
  
   $scope.addItemInStore = function() {
        var retrievedObjectt = window.localStorage.getItem('shopDetails');
        var parsedObjectt = JSON.parse(retrievedObjectt);       
        $scope.detailsList=parsedObjectt;       
        $scope.storeId=$scope.detailsList[0].id;
        console.log($scope.storeId);
          if ($scope.storeId && $scope.name && $scope.quantity && $scope.price && $scope.description &&
            $scope.shortDescription && $scope.sku && $scope.status && $scope.type && $scope.visibility
            && $scope.website && $scope.weight)  { 
              $scope.loader=true;  
              console.log($scope.files);
              console.log($scope.fname);
              $http.post(site_url + 'AddItem/addItemIntoStore',{                   
                 
                'pictureId' : $scope.fname,
                'storeId' : $scope.storeId,    
                'name' : $scope.name,                             
                'quantity' : $scope.quantity,
                'price' : $scope.price,
                'description' : $scope.description,
                'shortDescription' : $scope.shortDescription,
                'sku' : $scope.sku,
                'status' : $scope.status,
                'type' : $scope.type,
                'visibility' : $scope.visibility,
                'website' : $scope.website,
                'weight' : $scope.weight,
             
            }).
                then((response) => {            
                  
                // alert(response.data);
                 console.log(response);
                 if(response.data['status']=="400"){
                  $scope.loader=false;  
                  toastr.warning("Something went wrong");
                 }else if(response.data){
                  toastr.success('Item added successfully..');                 
                  $scope.loader=false;
                  $scope.name = "";
                  $scope.quantity = "";
                  $scope.price = "";
                  $scope.description = "";
                  $scope.shortDescription = "";
                  $scope.sku = "";
                  $scope.status = "";
                  $scope.type = "";
                  $scope.visibility = "";
                  $scope.website = "";
                  $scope.weight = "";
                  $scope.file="";
                  var url="Shop";
                  window.location=url;
              }else{
                  toastr.error('Something went wrong.');
              }              
          });
            }
          else{              
            if (!$scope.name) {
              $('#nameDiv').addClass('has-error');
              toastr.error('Please enter Name.');
              $('#name').focus();
              }
              else{
                 $('#nameDiv').removeClass('has-error');
                           
                           if (!$scope.type) {
                            $('#typeDiv').addClass('has-error');
                            toastr.error('Please enter Type.');
                            $('#type').focus();
                            }
                            else{
                               $('#typeDiv').removeClass('has-error');
                              
                               if (!$scope.price) {
                                $('#priceDiv').addClass('has-error');
                                toastr.error('Please enter Price.');
                                $('#price').focus();
                                }
                                else{
                                   $('#priceDiv').removeClass('has-error'); 

                                   if (!$scope.quantity) {
                                    $('#quantityDiv').addClass('has-error');
                                    toastr.error('Please enter Quantity.');
                                    $('#quantity').focus();
                                    }
                                    else{
                                       $('#quantityDiv').removeClass('has-error');
                                                               
                                       if (!$scope.status) {
                                        $('#statusDiv').addClass('has-error');
                                        toastr.error('Please select Status.');
                                        $('#status').focus();
                                        }
                                        else{
                                           $('#statusDiv').removeClass('has-error');
  
                                           if (!$scope.description) {
                                            $('#descriptionDiv').addClass('has-error');
                                            toastr.error('Please enter Description.');
                                            $('#description').focus();
                                            }
                                            else{
                                               $('#descriptionDiv').removeClass('has-error');
                                            
                                               if (!$scope.shortDescription) {
                                                $('#shortDescriptionDiv').addClass('has-error');
                                                toastr.error('Please enter Short Description.');
                                                $('#shortDescription').focus();
                                                }
                                                else{
                                                   $('#shortDescriptionDiv').removeClass('has-error');

                                               if (!$scope.sku) {
                                                $('#skuDiv').addClass('has-error');
                                                toastr.error('Please enter SKU.');
                                                $('#sku').focus();
                                                }
                                                else{
                                                   $('#skuDiv').removeClass('has-error');
                                                }
                                                if (!$scope.weight) {
                                                  $('#weightDiv').addClass('has-error');
                                                  toastr.error('Please enter Weight.');
                                                  $('#weight').focus();
                                                  }
                                                  else{
                                                     $('#weightDiv').removeClass('has-error');
                                                 
                                                     if (!$scope.visibility) {
                                                      $('#visibilityDiv').addClass('has-error');
                                                      toastr.error('Please enter Visibility.');
                                                      $('#visibility').focus();
                                                      }
                                                      else{
                                                         $('#visibilityDiv').removeClass('has-error');
                                                      }
                                                    }
                                            }
                                          }
                                        }
                                    }
                                }
                            }                                                        
                            }
          }
        }

      $scope.uploadedFile = function(element) {       
           $scope.$apply(function($scope) {
               for (var i = 0; i < element.files.length; i++) {
                  $scope.files = element.files[i];
                  var file=$scope.files;
                  $scope.fname=file.name;
                   toastr.success(file.name);                  
               }
           });

       }


  });
  