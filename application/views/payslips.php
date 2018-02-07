<style>
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}
</style>
<div class="container-sty-adm ">
	<div class=" row justify-content-md-end" >
		<div class="col-md-9  " style="margin-top:60px">
			<div class="row mtb-30">
			<div class="col-md-4">
				<select class="mdb-select">
					<option value="" disabled selected>Choose your Month</option>
					<option value="1">January</option>
					<option value="2">February</option>
					<option value="3">March</option>
					<option value="3">April</option>
					<option value="3">May</option>
					<option value="3">June</option>
					<option value="3">July</option>
					<option value="3">August</option>
					<option value="3">September</option>
					<option value="3">October</option>
					<option value="3">November</option>
					<option value="3">December</option>
				</select>
				
			</div>
			<div class="col-md-4">
				<button class="btn btn-default">Download <i class="fa fa-download ml-1"></i></button>
				
			</div>
			</div>
		</div>
	</div>
	<div class=" row justify-content-md-end" >
		<div class="col-md-9  " style="margin-top:60px">
		<img style="width:100%;" src="<?php echo base_url(); ?>assets/vendor/img/paysliphead.png" alt="payslipheader">
			<table>
			  <tr>
				<th style="text-align:center" colspan="4"><h3>Pay slip for the month of November 2017</h3></th>
				
			  </tr> 
			  <tr>
				<th >Name</th>
				<td>Shiv Nagender Koyalkar</td>
				<th>Employee No</th>
				<td>PT0005</td>
			  </tr>
			  <tr>
				<th >Department</th>
				<td>IT</td>
				<th>Designation</th>
				<td>IOS Developer</td>
			  </tr>
			  <tr>
				<th >Date of joining</th>
				<td>20/06/2017</td>
				<th>PF Number</th>
				<td>NIL</td>
			  </tr>
			  <tr>
				<th >Days worked</th>
				<td>24</td>
				<th>Mode of Payment</th>
				<td>Bank</td>
			  </tr>
			  <tr>
				<th >Working Days</th>
				<td>24</td>
				<th>Bank Name</th>
				<td>Axis bank</td>
			  </tr>
			  <tr>
				<th >LOP</th>
				<td>0</td>
				<th>Bank Account No</th>
				<td>916010005782210</td>
			  </tr>
			</table>
			<br>
			<table>
			  <tr>
				<th><strong>Earnings</strong></th>
				<th><strong>Amount(Rs)</strong></th>
				<th><strong>Deductions</strong></th>
				<th><strong>Amount(Rs)</strong></th>
				
			  </tr>
			  <tr>
				<th >Basic Salary</th>
				<td>Rs. 9000</td>
				<td>PF</td>
				<td>0</td>
			  </tr>
			  <tr>
				<th >HRA</th>
				<td>Rs. 3600</td>
				<td>PT</td>
				<td>0</td>
			  </tr>
			  <tr>
				<th >Special Allowance</th>
				<td>Rs. 4550</td>
				<td>ESI</td>
				<td>0</td>
			  </tr>
			  <tr>
				<th >Conveyance</th>
				<td>Rs. 1600</td>
				<td>Others</td>
				<td>0</td>
			  </tr>
			  <tr>
				<th >Medical Reimbursement</th>
				<td>Rs. 1250</td>
				<td>Advance</td>
				<td>0</td>
			  </tr>
			   <tr>
				<th  style="border-right:none;"><strong>Gross Earnings(A)</strong></th>
				<th  style="border-left:none;"><strong>Rs.20000</strong></th>
				<th  style="border-right:none;"><strong>Gross Deductions(B):</strong></th>
				<th  style="border-left:none;"><strong>Rs.0</strong></th>
			  </tr> 
			  <tr>
				<th  style="border-right:none;"><strong>Net Salary(A-B)</strong></th>
				<th colspan="3" style="border-left:none;"><strong>Rs.20000</strong></th>
				
			  </tr> 
			  <tr>
				<th style="text-align:left" colspan="4"><i>Net Salary(in words):   Rupees Twenty ThousandOnly</i></th>
				
			  </tr> 
			</table>
			<p style="text-align:center;margin-top:50px;"> Note : This is a system generated pay slip and does not require signature</p>
		</div>
	</div>
</div>

	
<script>
	 $(document).ready(function() {
    $('.mdb-select').material_select();
  });
</script>