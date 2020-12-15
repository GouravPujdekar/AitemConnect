<?php
class AddStore_m extends CI_Model
 {
 function addStore() {
  
    $postData = json_decode(file_get_contents('php://input'));   
    //$retailerUserId=$postData->retailerUserId;     
    $email=$postData->email; 
    $phone=$postData->phone;   
    $website=$postData->website;
    $addressName=$postData->addressName; 
    $state=$postData->state; 
    $city=$postData->city;
    $streetAddress=$postData->streetAddress; 
    $streetAddress1=$postData->streetAddress1; 
    $zip=$postData->zip;      
    $token=$this->session->userdata('api-key-token');  
    $t="fzCX5UnRIfCaOYEO6B87W4VbZKOG+hw6WmxxIvImWMGEoL21Mc7yXJTIR9EU5o88tmlRE/nR7VXuVi6awnu3+w==";
    $url = 'http://18.188.222.175:8080/stores';   
    $data = array(
     "address" => array (
             'addressName'=>$addressName,
             'city'=>$city,
             'state'=>$state, 
             'streetAddress'=>$streetAddress,
             'streetAddress1'=>$streetAddress1,
             'zip'=>$zip
     ),
     'email'=>$email,
     'phone'=>$phone,    
   //  'retailerUserId'=>$retailerUserId, 
     'website'=>$website,    
     );  
    $d=json_encode($data);
    /* Init cURL resource */
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://3.139.65.132:8080/stores');
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