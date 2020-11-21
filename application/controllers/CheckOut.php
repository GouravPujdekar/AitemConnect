<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CheckOut extends CI_Controller {

	public function index()
	{
		$this->load->view('product_form');		
	}
	public function check()
	{
		//check whether stripe token is not empty
		if(!empty($_POST['stripeToken']))
		{
			//get token, card and user info from the form
			$token  = $_POST['stripeToken'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$card_num = $_POST['card_num'];
			$card_cvc = $_POST['cvc'];
			$card_exp_month = $_POST['exp_month'];
			$card_exp_year = $_POST['exp_year'];
			$amount=$_POST['amount'];
			$itemId=$_POST['id'];
			$quantity=$_POST['quantity'];
			//include Stripe PHP library
			require_once APPPATH."third_party/stripe/init.php";
			
			//set api key
			$stripe = array(
			  "secret_key"      => "rk_test_51H9gu9Fcsm2Bi9S27WSfXw2q6kRbz3u344qs0CVCLWYVbLsTDt58h6vRWmSyLgQkapXisyVUI8KSYzu8szTTPiGt007Ob33avs",
			  "publishable_key" => "pk_test_51H9gu9Fcsm2Bi9S2VwgA4PKSAUUwA65wxto7takSJEhTYrIR3B7jmgvCCwsyWpjOpVFADhRlfN9wISZaAC7AfeuW00jjrDrfGw"
			);
			
			\Stripe\Stripe::setApiKey($stripe['secret_key']);
			
			//add customer to stripe
			$customer = \Stripe\Customer::create(array(
				'email' => $email,
				'source'  => $token
			));
			
			//item information
			$itemName = "Stripe Donation";
			$itemNumber = $itemId;
			$itemPrice = $amount;
			$currency = "usd";
			$orderID = "SKA92712382139";
			
			//charge a credit or a debit card
			$charge = \Stripe\Charge::create(array(
				'customer' => $customer->id,
				'amount'   => $itemPrice,
				'currency' => $currency,
				'description' => $itemNumber,
				'metadata' => array(
				'item_id' => $itemNumber
				)
			));
			
			//retrieve charge details
			$chargeJson = $charge->jsonSerialize();
			
			//check whether the charge is successful
			if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1)
			{
				//order details 
				$amount = $chargeJson['amount'];
				$balance_transaction = $chargeJson['balance_transaction'];
				$currency = $chargeJson['currency'];
				$status = $chargeJson['status'];
				$date = date("Y-m-d H:i:s");
			
				$d =array(
				'billingName'=>$name,											
				'itemDetails' => array(
					'itemId'=>$itemId,
					'quantity'=>$quantity,						 
				));								
			
				//insert tansaction data into the database
				/*$dataDB = array(
					'name' => $name,
					'email' => $email, 
					'card_num' => $card_num, 
					'card_cvc' => $card_cvc, 
					'card_exp_month' => $card_exp_month, 
					'card_exp_year' => $card_exp_year, 
					'item_name' => $itemName, 
					'item_number' => $itemNumber, 
					'item_price' => $itemPrice, 
					'item_price_currency' => $currency, 
					'paid_amount' => $amount, 
					'paid_amount_currency' => $currency, 
					'txn_id' => $balance_transaction, 
					'payment_status' => $status,
					'created' => $date,
					'modified' => $date
				);*/
				$token=$this->session->userdata('authToken');  
				$t="K5WkApK4pGBazFpXZSz8HrcCNcjPXU8rvURxqCbr3Vj7TcCOY8r6xt5NCzmV+HT1lio/BKKzHLVH3f3LgsrVDg==";
				$root="http://".$_SERVER['HTTP_HOST'].":8080";     
				      $urll ="$root"; 
				$url="http://3.139.65.132:8080/";
				$dd=json_encode($d);
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url.'/orders');
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
				curl_setopt($ch, CURLOPT_POSTFIELDS,$dd);
				curl_setopt($ch, CURLOPT_HTTPHEADER, array('api-key-token:'.$token,'Content-Type: application/json', 'Accept: application/json'));
				$out = curl_exec($ch);
				   if ($out === false) {
				   echo 'Curl error : ' . curl_error($ch);
				   }   
				curl_close($ch);  
				$this->load->view('payment_success', $dd);
				return $out;
			}else{
				echo "Transaction has been failed";
				$this->load->view('payment_error');
			}    
		}				
			else
			{
				echo "Invalid Token";
				$statusMsg = "";
			}
	}


	public function payment_success()
	{
		$this->load->view('payment_success');
	}

	public function payment_error()
	{
		$this->load->view('payment_error');
	}

	public function help()
	{
		$this->load->view('help');
	}
}
