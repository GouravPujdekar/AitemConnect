
<?php
class AddItem_m extends CI_Model
 {
   function addItemIntoStore() {
  
      $adImage = "";
      $postedData = $_POST;
  
      if(isset($postedData['storeId'])){
          $storeId = $postedData['storeId']; 
      } 
      if(isset($postedData['id'])){
          $Id = $postedData['id']; 
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
       
      $file = $_FILES['file']['name'];
     
	
     $tokenn=$this->session->userdata('api-key-token'); 
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'http://3.139.65.132:8080/pictures');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
      curl_setopt($ch, CURLOPT_POSTFIELDS,$file);     
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('api-key-token:'.$tokenn,'Content-Type: multipart/form-data; boundary=<calculated when request is sent>', 'Accept: application/json'));
      $out = curl_exec($ch);
         if ($out === false) {
         echo 'Curl error : ' . curl_error($ch);
         }   
      curl_close($ch);
      //var_dump($out);
      $var = json_decode($out, true); 
      print_r($var);	
      if(!isset($var['id'])){
          return -1;
      } 
     else{
     
         $pictureId  = $var['id']; 
         $pictureUrl  = $var['url'];
     	 $token=$this->session->userdata('api-key-token');    
      $data = array(      
       'storeId'=>$storeId,
       'id'=>$Id,
       'pictureId'=>$pictureId,
       'pictureUrl'=>$pictureUrl,    
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
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'http://3.139.65.132:8080/stores/'.$storeId.'/items');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   
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

}
?>
