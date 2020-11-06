<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddStore extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('AddStore_m','m');
    }
    function getAllCart(){            
      print_r($this->m->getAllCart());
   }
    function addStore(){            
      print_r($this->m->addStore());
   }
   function getAllProduct(){            
       $this->output->set_content_type('application/json')->set_output(json_encode($this->m->getAllProduct()));
    }
}

?>