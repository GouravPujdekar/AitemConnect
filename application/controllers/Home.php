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
        $data['title'] = 'Home';     
        $this->load->view('comman/header',$data);    
        $this->load->view('index');   
	$this->load->view('comman/footer');        
      }        
       function OrderDetails() {   
	$username = $this->session->userdata('username');
        if (!empty($username)) {
     	  $data['title'] = 'Order Details';     
        $this->load->view('comman/header',$data);          
        $this->load->view('orderdetails');   
      }
	else{	
	 redirect(base_url(), 'refresh');
	}
}
      function AllStores()
      { 
	$username = $this->session->userdata('username');
        if (!empty($username)) {
        $data['title'] = 'All Stores';     
        $this->load->view('comman/header',$data);     
        $this->load->view('allstores'); 
	$this->load->view('comman/footer');      
	}else{
		 $this->load->view('login');	
	}
      }      
      function AddStore()
      { 
	$username = $this->session->userdata('username');
        if (!empty($username)) {
         $data['title'] = 'Add Store';     
        $this->load->view('comman/header',$data);      
        $this->load->view('addstore'); 
	$this->load->view('comman/footer');     
	}else{		   
	redirect(base_url(), 'refresh');
	}
      } 
      function AddItem()
      { 
	$username = $this->session->userdata('username');
        if (!empty($username)) {
          $data['title'] = 'Add Item';     
        $this->load->view('comman/header',$data);      
        $this->load->view('additem'); 
	$this->load->view('comman/footer');
	}else{
	 redirect(base_url(), 'refresh');
	}
      }   
      function Shop()
	{
	$username = $this->session->userdata('username');
        if (!empty($username)) {
          $data['title'] = 'Your Stores';     
        $this->load->view('comman/header',$data);     
        $this->load->view('shop');
	$this->load->view('comman/footer');   
	 }else{
		$this->load->view('login'); 	
	}
      } 
      function Cart()
	{
	$username = $this->session->userdata('username');
        if (!empty($username)) {
         $data['title'] = 'Cart';     
        $this->load->view('comman/header',$data);      
        $this->load->view('cart');
	$this->load->view('comman/footer');
	 }else{
	 redirect(base_url(), 'refresh');
	}
      } 
      function AllStoreProduct() {
	 $username = $this->session->userdata('username');
        if (!empty($username)) {
         $data['title'] = 'All Products';     
        $this->load->view('comman/header',$data);      
        $this->load->view('allproduct');
	$this->load->view('comman/footer');
	 }else{
	 redirect(base_url(), 'refresh');
	}
      }
      function Login() {         
        $this->load->view('login');   
      }
      function Product() {
	$username = $this->session->userdata('username');
        if (!empty($username)) {
         $data['title'] = 'Your Products';     
        $this->load->view('comman/header',$data);     
        $this->load->view('product');
	$this->load->view('comman/footer');
	}else{
	 redirect(base_url(), 'refresh');
	}
      }
      function Register() {
     
        $this->load->view('comman/link');  
        $this->load->view('register');   
      }
      public function registerUser() {
        $this->load->model('Register_m');     
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
        print_r($this->Register_m->loginUser());
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
