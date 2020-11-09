
<?php
class Register_m extends CI_Model
 {
   function getAllAvalStores() {   
      /* API URL */
      $postData = json_decode(file_get_contents('php://input'));
      //$firstName = $postData->firstName;   
      $token=$this->session->userdata('authToken');  
      $t="U9y+eHeUyL7S9hmE4OuwbDTKpkHVvvG2AK/Mt+PuPkhikK6RkwMZg0i+QlCRwJc/pYwk4nD/Xa5skCE+hTqEZg==";
      $url = 'http://18.188.222.175:8080/stores';   
      /* Init cURL resource */
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'http://18.188.222.175:8080/stores');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      // curl_setopt($ch, CURLOPT_GET, true);
      //curl_setopt($ch, CURLOPT_POSTFIELDS,$d);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('api-key-token:'.$t,'Content-Type: application/json', 'Accept: application/json'));
      $out = curl_exec($ch);
         if ($out === false) {
         echo 'Curl error : ' . curl_error($ch);
         }   
      curl_close($ch);      
      return $out;    
      }
      function getAllStoresProducts() {   
         /* API URL */
         $postData = json_decode(file_get_contents('php://input'));
         $storeId = $this->input->get("storeId");   
       
         $token=$this->session->userdata('authToken');  
         $tr="TA/0V1TNaFMo+A7vj/zUrilnItgKGt7mB/1XlZbLRuGQHdEXXYCrBtCQ6QIJySWLTs/1PVGwpPNtKTwFDuxCyQ==";
         $t="U9y+eHeUyL7S9hmE4OuwbDTKpkHVvvG2AK/Mt+PuPkhikK6RkwMZg0i+QlCRwJc/pYwk4nD/Xa5skCE+hTqEZg==";
         $url = 'http://18.188.222.175:8080/items';   
         /* Init cURL resource 
         $params = 'a0c2e01e-6940-455b-af68-b5e49dd0abb0';
         $url = $uurl . '?storeId=' . $params;
         */
      
         $ch = curl_init();
         //curl_setopt($ch, CURLOPT_URL, $url);
         curl_setopt($ch, CURLOPT_URL, 'http://18.188.222.175:8080/stores/'.$storeId.'/items');
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      // curl_setopt($ch, CURLOPT_GET, true);
         //curl_setopt($ch, CURLOPT_POSTFIELDS,$storeId);
         curl_setopt($ch, CURLOPT_HTTPHEADER, array('api-key-token:'.$t,'Content-Type: application/json', 'Accept: application/json'));
         $out = curl_exec($ch);
            if ($out === false) {
            echo 'Curl error : ' . curl_error($ch);
            }   
         curl_close($ch);  
     
      return $out;    
      }
    function loginUser() {
    
        $postData = json_decode(file_get_contents('php://input'));
        $username=$postData->username; 
        $password=$postData->password;   
        $url = 'http://18.188.222.175:8080/login';
         $data = array(
            'username'=>$username, 
            'password'=>$password
         );    
         $d=json_encode($data);
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, 'http://18.188.222.175:8080/login');
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         curl_setopt($ch, CURLOPT_POST, true);
         curl_setopt($ch, CURLOPT_POSTFIELDS,$d);
         curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Accept: application/json'));
         $out = curl_exec($ch);
            if ($out === false) {
            echo 'Curl error : ' . curl_error($ch);
            }
         curl_close($ch);
        // var_dump($out); 
         $var = json_decode($out, true);     
         $newdata = [               
            'api-key-token'=>$var['authToken'],           
            'role' =>$var['profileType'],
            'logged_in' => TRUE
         ];      
        $this->session->set_userdata($newdata);
        return $out;
    }     
    
    function registerUser() {
        
        $postData = json_decode(file_get_contents('php://input'));
        $firstName = $postData->firstName;       
        $lastName=$postData->lastName;     
        $email=$postData->email; 
        $phone=$postData->phone; 
        $state=$postData->state; 
        $city=$postData->city;
        $username=$postData->username; 
        $password=$postData->password;   
        $profileType=$postData->profileType; 
        $addressName=$postData->addressName; 
        $streetAddress=$postData->streetAddress; 
        $streetAddress1=$postData->streetAddress1; 
        $zip=$postData->zip; 
      
        $url = 'http://18.188.222.175:8080/user';
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
         'firstName'=>$firstName, 
         'lastName'=>$lastName,         
         'phone'=>$phone,         
         'password'=>$password,
         'profileType'=>$profileType,
         'username'=>$username, 
         );  
        $d=json_encode($data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://18.188.222.175:8080/user');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$d);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Accept: application/json'));
        $out = curl_exec($ch);
           if ($out === false) {
           echo 'Curl error : ' . curl_error($ch);
           }
        curl_close($ch);      
        var_dump($out);        
       print_r($out);
       return $out;
      }
            
      function getAllStores() {   
             /* API URL */
             $postData = json_decode(file_get_contents('php://input'));
             //$firstName = $postData->firstName;   
             $token=$this->session->userdata('authToken');  
             $t="TA/0V1TNaFMo+A7vj/zUrilnItgKGt7mB/1XlZbLRuGQHdEXXYCrBtCQ6QIJySWLTs/1PVGwpPNtKTwFDuxCyQ==";
        $url = 'http://18.188.222.175:8080/stores';   
        /* Init cURL resource */
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://18.188.222.175:8080/stores');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      // curl_setopt($ch, CURLOPT_GET, true);
        //curl_setopt($ch, CURLOPT_POSTFIELDS,$d);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('api-key-token:'.$t,'Content-Type: application/json', 'Accept: application/json'));
        $out = curl_exec($ch);
           if ($out === false) {
           echo 'Curl error : ' . curl_error($ch);
           }   
         curl_close($ch);      
      return $out;    
      }
      function getAllProducts() {   
         /* API URL */
         $postData = json_decode(file_get_contents('php://input'));
         $storeId = $this->input->get('storeId');   
         $token=$this->session->userdata('authToken');  
         $tr="TA/0V1TNaFMo+A7vj/zUrilnItgKGt7mB/1XlZbLRuGQHdEXXYCrBtCQ6QIJySWLTs/1PVGwpPNtKTwFDuxCyQ==";
         $t="1fa279e8-e2ee-4c83-83ef-a7f448bd788b";
         $url = 'http://18.188.222.175:8080/items';   
         /* Init cURL resource */
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, 'http://18.188.222.175:8080/stores/'.$storeId.'/items');
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      // curl_setopt($ch, CURLOPT_GET, true);
         //curl_setopt($ch, CURLOPT_POSTFIELDS,$d);
         curl_setopt($ch, CURLOPT_HTTPHEADER, array('api-key-token:'.$tr,'Content-Type: application/json', 'Accept: application/json'));
         $out = curl_exec($ch);
            if ($out === false) {
            echo 'Curl error : ' . curl_error($ch);
            }   
         curl_close($ch); 
         $var = json_decode($out, true);    
      return $out;    
      }
}
?>
