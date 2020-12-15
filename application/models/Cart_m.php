
<?php
class Cart_m extends CI_Model
 {
 function getAllCart() {
    $postData = json_decode(file_get_contents('php://input'));   
    $token=$this->session->userdata('api-key-token');  
    $t="U9y+eHeUyL7S9hmE4OuwbDTKpkHVvvG2AK/Mt+PuPkhikK6RkwMZg0i+QlCRwJc/pYwk4nD/Xa5skCE+hTqEZg==";
   
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://3.139.65.132:8080/carts');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($ch, CURLOPT_GET, true);
    //curl_setopt($ch, CURLOPT_POSTFIELDS,$d);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('api-key-token:'.$token,'Content-Type: application/json', 'Accept: application/json'));
    $out = curl_exec($ch);
       if ($out === false) {
       echo 'Curl error : ' . curl_error($ch);
       }   
    curl_close($ch);      
    return $out;    
    }
function getAddressByUserId() {
    $postData = json_decode(file_get_contents('php://input'));   
    $token=$this->session->userdata('api-key-token');     
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://3.139.65.132:8080/users/profiles');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($ch, CURLOPT_GET, true);
    //curl_setopt($ch, CURLOPT_POSTFIELDS,$d);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('api-key-token:'.$token,'Content-Type: application/json', 'Accept: application/json'));
    $out = curl_exec($ch);
       if ($out === false) {
       echo 'Curl error : ' . curl_error($ch);
       }   
    curl_close($ch);      
    return $out;    
    }

    function addItem() {
      $postData = json_decode(file_get_contents('php://input'));
      $itemId = $postData->itemId;  
      $quantity = $postData->quantity;   
      $token=$this->session->userdata('api-key-token');  
      $t="U9y+eHeUyL7S9hmE4OuwbDTKpkHVvvG2AK/Mt+PuPkhikK6RkwMZg0i+QlCRwJc/pYwk4nD/Xa5skCE+hTqEZg==";
      
      $data = array(
         'itemId'=>$itemId, 
         'quantity'=>$quantity
      );    
      $d=json_encode($data);
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'http://3.139.65.132:8080/carts');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
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
