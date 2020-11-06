<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddItem extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('AddItem_m','m');
    }   
    function addItemIntoStore(){            
      print_r($this->m->addItemIntoStore());
   }  
    function getAllProduct(){            
       $this->output->set_content_type('application/json')->set_output(json_encode($this->m->getAllProduct()));
    }
}

?>