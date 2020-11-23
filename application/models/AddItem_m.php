
<?php
class AddItem_m extends CI_Model
 {
   function addItemIntoStore() {
  
      $adImage = "";
      $postedData = $_POST;
  
      if(isset($postedData['storeId'])){
          $storeId = $postedData['storeId']; 
      }      
      if(isset($postedData['name'])){
          $name = $postedData['name']; 
      } 
      if(isset($postedData['quantity'])){
         $quantity = $postedData['quantity']; 
     } 
      if(isset($postedData['price'])){
         $price = $postedData['price']; 
      } 
      if(isset($postedData['description'])){
         $description = $postedData['description']; 
      } 
      if(isset($postedData['shortDescription'])){
         $shortDescription = $postedData['shortDescription']; 
      } 
      if(isset($postedData['sku'])){
         $sku = $postedData['sku']; 
      } 
      if(isset($postedData['status'])){
         $status = $postedData['status']; 
      }  
      if(isset($postedData['type'])){
         $type = $postedData['type']; 
      }  
      if(isset($postedData['website'])){
         $website = $postedData['website']; 
      }  
      if(isset($postedData['visibility'])){
         $visibility = $postedData['visibility']; 
      }  
      if(isset($postedData['weight'])){
         $weight = $postedData['weight']; 
      }           
    //  $root="http://".$_SERVER['HTTP_HOST'].":8080"; 
    $root="http://".$_SERVER['HTTP_HOST'];  
      $urll ="$root"; 
    $url="http://3.139.65.132:8080"
      if (!empty($_FILES['file']['name'])) {

       $_FILES['userfile']['name'] = time() . "_" . $_FILES['file']['name'];
       $_FILES['userfile']['type'] = $_FILES['file']['type'];
       $_FILES['userfile']['tmp_name'] = $_FILES['file']['tmp_name'];
       $_FILES['userfile']['error'] = $_FILES['file']['error'];
       $_FILES['userfile']['size'] = $_FILES['file']['size'];
       $uploadPath = 'images/item_images/';
       $config['upload_path'] = $uploadPath;
       $config['allowed_types'] = '*';
       $this->load->library('upload', $config);
       $this->upload->initialize($config);
       
       if ($this->upload->do_upload('userfile')) {
          
          $fileData = $this->upload->data();
          $uploadData['file_name'] = $fileData['file_name'];
        
          $adImage = $urll."/images/item_images/".time() . "_" . $_FILES['file']['name'];
       }
    }else{
        $adImage = $urll."/images/photo1.png";
    }       
      if($adImage != ""){
          $pictureId = $adImage; 
      }          
        
      /*$postData = json_decode(file_get_contents('php://input'));   
      $storeId=$postData->storeId;     
      $pictureId=$postData->pictureId; 
      $name=$postData->name;   
      $quantity=$postData->quantity;
      $price=$postData->price; 
      $description=$postData->description; 
      $shortDescription=$postData->shortDescription;
      $sku=$postData->sku; 
      $status=$postData->status; 
      $type=$postData->type;  
      $website=$postData->website; 
      $visibility=$postData->visibility;
      $weight=$postData->weight;      */
      $token=$this->session->userdata('authToken');  
      $t="TA/0V1TNaFMo+A7vj/zUrilnItgKGt7mB/1XlZbLRuGQHdEXXYCrBtCQ6QIJySWLTs/1PVGwpPNtKTwFDuxCyQ==";
    
      $data = array(      
       'storeId'=>$storeId,
       'pictureId'=>$pictureId,    
       'name'=>$name, 
       'quantity'=>$quantity, 
       'price'=>$price, 
       'description'=>$description, 
       'shortDescription'=>$shortDescription, 
       'sku'=>$sku, 
       'status'=>$status, 
       'type'=>$type, 
       'website'=>$website, 
       'visibility'=>$visibility, 
       'weight'=>$weight    
       );  
   
      $d=json_encode($data);
      /* Init cURL resource */
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'http://3.139.65.132:8080/items');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      // curl_setopt($ch, CURLOPT_GET, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS,$d);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('api-key-token:'.$token,'Content-Type: application/json', 'Accept: application/json'));
      $out = curl_exec($ch);
         if ($out === false) {
         echo 'Curl error : ' . curl_error($ch);
         }   
      curl_close($ch);      
      return $out;    
      }   
}
?>
