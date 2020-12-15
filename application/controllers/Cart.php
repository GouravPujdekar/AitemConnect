<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Cart_m','m');
    }
    function getAllCart(){            
      print_r($this->m->getAllCart());
   }
  function getAddressByUserId(){            
      print_r($this->m->getAddressByUserId());
   }

    function addItem(){            
      print_r($this->m->addItem());
   }
   function plusItem(){            
      print_r($this->m->plusItem());
   }
    function getAllProduct(){            
       $this->output->set_content_type('application/json')->set_output(json_encode($this->m->getAllProduct()));
    }
}

?>