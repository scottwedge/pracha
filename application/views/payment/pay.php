<!--  The entire list of Checkout fields is available at
 https://docs.razorpay.com/docs/checkout-form#checkout-fields -->
 <style>
 .razorpay-payment-button{
	 background:#192f5d;
	 color:#fff;
	 padding:9px;
	 border:none;
	 border-radius:3px;
	 margin-top:5px;
	 
 }
 </style>
<div class="container " style="margin-top:100px;">
<div class="row justify-content-md-center">
<div class=" col-md-6 card py-2">
<div >
<div class="pt-2 text-center" >
<h2>Bill Preview</h2>
</div>
<hr>
<table class="table table-bordered">
	<tr>
        <th>Name</th>
		<td>Siva Nag</td>
     </tr>
	 <tr>
        <th>Email Address</th>
		<td>sales@gmail.com</td>
     </tr>
	 <tr>
        <th>Mobile</th>
		<td>8500226782</td>
     </tr>
	<tr>
        <th>Project</th>
		<td>Knc Ecommerce</td>
     </tr>	
	 <tr>
        <th>Amount</th>
		<td>50000</td>
     </tr>
	 <tr>
        <th>Pay</th>
		<td>20000</td>
     </tr><tr>
        <th>Due</th>
		<td>30000</td>
     </tr>
	 <tr>
        <th>Payment Mode</th>
		<td>Online Payment</td>
     </tr> 
	 <tr>
        
		<td colspan="2"><strong>Address:</strong> Online Payment</td>
     </tr>
 
  </table>
  </div>

<div class="container">
<div class="row justify-content-md-center">
<div class="col-md-3">
	<button class="btn btn-warning">Edit</button>
</div>
<div class="col-md-3">
<form  id="paymentform" name="paymentform" action="<?php echo base_url('payment/success'); ?>" method="POST">
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $details['key']?>"
    data-amount="<?php echo $details['amount']?>"
    data-currency="INR"
    data-name="<?php echo $details['name']?>"
    data-image="<?php echo $details['image']?>"
    data-description="<?php echo $details['description']?>"
    data-prefill.name="<?php echo $details['prefill']['name']?>"
    data-prefill.email="<?php echo $details['prefill']['email']?>"
    data-prefill.contact="<?php echo $details['prefill']['contact']?>"
    data-notes.shopping_order_id="<?php echo $bill_details['b_id']?>"
    data-order_id="<?php echo $details['order_id']?>"
    <?php if ($details['display_currency'] !== 'INR') { ?> data-display_amount="<?php echo $details['amount']?>" <?php } ?>
    <?php if ($details['display_currency'] !== 'INR') { ?> data-display_currency="<?php echo $details['display_currency']?>" <?php } ?>
  >
  </script>
  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
  <!--<input type="hidden" name="shopping_order_id" value="3456">-->
</form>
</div>
</div>
</div>
</div>
</div>
</div>