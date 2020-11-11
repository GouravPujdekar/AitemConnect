<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Order_m','m');
    }  
    
    function getAllOrders(){            
       print_r($this->m->getAllOrders());
    }
}

?>