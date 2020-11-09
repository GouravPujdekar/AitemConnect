
<?php
class AddItem_m extends CI_Model
 {
   function addItemIntoStore() {
  
      $postData = json_decode(file_get_contents('php://input'));   
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
      $weight=$postData->weight;      
      $token=$this->session->userdata('authToken');  
      $t="TA/0V1TNaFMo+A7vj/zUrilnItgKGt7mB/1XlZbLRuGQHdEXXYCrBtCQ6QIJySWLTs/1PVGwpPNtKTwFDuxCyQ==";
      $url = 'http://18.188.222.175:8080/items';   
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
      curl_setopt($ch, CURLOPT_URL, 'http://18.188.222.175:8080/stores/'.$storeId.'/items');
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
