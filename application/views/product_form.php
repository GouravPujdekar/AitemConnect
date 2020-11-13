<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Stripe Gateway Integration | Codeigniter</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css" />    
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/loader.css" /> 
    <!-- jQuery is used only for this example; it isn't required to use Stripe -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" />
    
    <script src="<?php echo base_url('assets/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/Jquery/jquery-ui.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/angular/angular.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/angular/ui-bootstrap-tpls-1.0.3.js'); ?>"></script>
    <!-- toastr -->
    <script src="<?php echo base_url('assets/angular/angular-toastr.tpls.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/angular/angular-toastr.css'); ?>" />
    <!-- Stripe JavaScript library -->
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>    
  
    <script type="text/javascript">
        //set your publishable key
        Stripe.setPublishableKey('pk_test_51H9gu9Fcsm2Bi9S2VwgA4PKSAUUwA65wxto7takSJEhTYrIR3B7jmgvCCwsyWpjOpVFADhRlfN9wISZaAC7AfeuW00jjrDrfGw');
        
        //callback to handle the response from stripe
        function stripeResponseHandler(status, response) {
            if (response.error) {
                //enable the submit button
                $('#payBtn').removeAttr("disabled");
                //display the errors on the form
                // $('#payment-errors').attr('hidden', 'false');
                $('#payment-errors').addClass('alert alert-danger');
                $("#payment-errors").html(response.error.message);
            } else {
                var form$ = $("#paymentFrm");
                //get token id
                var token = response['id'];
                //insert the token into the form
                form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
                //submit form to the server
                form$.get(0).submit();
            }
        }
        $(document).ready(function() {
            //on form submit
            $("#paymentFrm").submit(function(event) {
                //disable the submit button to prevent repeated clicks
                $('#payBtn').attr("disabled", "disabled");
                
                //create single-use token to charge the user
                Stripe.createToken({
                    number: $('#card_num').val(),
                    cvc: $('#card-cvc').val(),
                    exp_month: $('#card-expiry-month').val(),
                    exp_year: $('#card-expiry-year').val()
                }, stripeResponseHandler);
                
                //submit from callback
                return false;
            });
        });
    </script>


	
</head>
<body >

<!-- Bootstrap 4 Navbar  -->

<!-- End Bootstrap 4 Navbar -->

	
<div class="container-fluid">
    <div class="row">
		
    </div>
</div>

<div class="container" >
	<div class="row" ng-app="myApp" ng-controller="stripeCtrl" ng-init="init()">	

        <div class="col-md-6" >
            
            <div class="card">
                <div class="card-header bg-success text-white">Product Information</div>
                <div class="card-body bg-light">
                  
                    <div id="payment-errors"></div>  
                     <form method="post" id="paymentFrm" enctype="multipart/form-data" action="<?php echo site_url(); ?>/Welcome/check">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name"  required>
                        </div>  

                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="email@you.com"  required />
                        </div>

                         <div class="form-group">
                            <input type="number" name="card_num" id="card_num" class="form-control" placeholder="Card Number" autocomplete="off"  required>
                        </div>
                       
                        
                        <div class="row">

                            <div class="col-sm-8">
                                 <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="exp_month" maxlength="2" class="form-control" id="card-expiry-month" placeholder="MM"  required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="exp_year" class="form-control" maxlength="4" id="card-expiry-year" placeholder="YYYY" required="" >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" name="cvc" id="card-cvc" maxlength="3" class="form-control" autocomplete="off" placeholder="CVC"  required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="amount"  id="amount"  ng-model="amount" class="form-control" readonly autocomplete="off"  required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="id" style="display:none" id="id" ng-model="id" class="form-control" readonly autocomplete="off"  required>
                        </div>
                        <div class="form-group">
                            <input type="text" style="display:none" name="quantity" id="quantity" ng-model="quantity" class="form-control" readonly autocomplete="off"  required>
                        </div>

                        <div class="form-group text-right">
                        
                          <button type="submit" id="payBtn" class="btn btn-success">Submit Payment</button>
                        </div>
                        <div class="loading" ng-show="loader" id="loader">Loading&#8230;</div>
                    </form>     
                </div>
            </div>                 
        </div> 
    </div>
</div>   

<!-- Footer -->
<!-- <footer class="footer">
  <div class="container">
    Copyright &copy; <?php //echo date('Y'); ?>  
        <span class="float-right">Coded with Love &hearts;  : <a href="https://facebook.com/anburocky3" target="_blank">Anbuselvan Rocky</a></span>
  </div>
</footer> -->

</body>
<script src="<?php echo base_url('assets/angular/angularjs/app.js'); ?>"></script>
<script src="<?php echo base_url('assets/angular/angularjs/controller/stripe.js'); ?>"></script>
</html>
