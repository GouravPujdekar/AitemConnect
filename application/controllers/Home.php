<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

 function _construct()
      {
        parent::_construct();
        $this->load->model('Register_m');
      }
      function index()
	    {     
        $this->load->view('comman/header');    
        $this->load->view('index');           
      }        
      function AllStores()
      { 
        $this->load->view('comman/header');    
        $this->load->view('allstores');    
      }      
      function AddStore()
      { 
        $this->load->view('comman/header');    
        $this->load->view('addstore');    
      } 
      function AddItem()
      { 
        $this->load->view('comman/header');    
        $this->load->view('additem');    
      }   
      function Shop()
	    {     
        $this->load->view('comman/header');    
        $this->load->view('shop');        
      } 
      function Cart()
	    {     
        $this->load->view('comman/hed');    
        $this->load->view('cart');        
      } 
      function AllStoreProduct() {        
        $this->load->view('comman/header');    
        $this->load->view('allproduct');   
      }
      function Login() {         
        $this->load->view('login');   
      }
      function Product() {        
        $this->load->view('comman/header');    
        $this->load->view('product');   
      }
      function Register() {
     
        $this->load->view('comman/link');  
        $this->load->view('register');   
      }
      public function registerUser() {
        $this->load->model('Register_m');
        // $this->output->set_content_type('application/json')->set_output(json_encode($this->Register_m->registerUser()));
        $re=$this->Register_m->registerUser();
        echo $re;
      }
      public function getAllAvalStores() {
        $this->load->model('Register_m');
        print_r($this->Register_m->getAllAvalStores());          
      }
      public function getAllStoresProducts() {
        $this->load->model('Register_m');
        print_r($this->Register_m->getAllStoresProducts());              
      }
      public function loginUser() {
        $this->load->model('Register_m');           
        $this->output->set_content_type('application/json')->set_output(json_encode($this->Register_m->loginUser()));
      }
      public function getAllStores() {
        $this->load->model('Register_m');
        print_r($this->Register_m->getAllStores());       
      }
      public function getAllProducts() {
        $this->load->model('Register_m');
        print_r($this->Register_m->getAllProducts());              
      }
}