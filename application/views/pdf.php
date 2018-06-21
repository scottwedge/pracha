
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
		<img style="width:100%;" src="<?php echo base_url(); ?>assets/vendor/img/paysliphead.png" alt="payslipheader">
			<table>
			  <tr>
				<th style="text-align:center" colspan="4"><h3>Pay slip for the Month of <?php echo $heading; ?></h3></th>
				
			  </tr> 
			  <tr>
				<th >Name</th>
				<td><?php echo $userdetails['emp_name']; ?></td>
				<th>Employee No</th>
				<td><?php echo $userdetails['emp_office_id']; ?></td>
			  </tr>
			  <tr>
				<th >Department</th>
				<td><?php echo $userdetails['department']; ?></td>
				<th>Designation</th>
				<td><?php echo $userdetails['emp_role']; ?></td>
			  </tr>
			  <tr>
				<th >Date of joining</th>
				<td><?php echo $userdetails['emp_doj']; ?></td>
				<th>PF Number</th>
				<td><?php if($userdetails['pfnumber']!=''){ echo $userdetails['pfnumber'];}else{ "NILL"; } ?></td>
			  </tr>
			  <tr>
				<th >Company Worked Days</th>
				<td><?php echo $workeddays; ?></td>
				<th>Mode of Payment</th>
				<td>Bank</td>
			  </tr>
			  <tr>
				<th >Employee Worked Days</th>
				<td><?php echo $workingdays; ?></td>
				<th>Bank Name</th>
				<td><?php echo $userdetails['bankname']; ?></td>
			  </tr>
			  <tr>
				<th >LOP</th>
				<td><?php echo $lop; ?></td>
				<th>Bank Account No</th>
				<td><?php echo $userdetails['bankaccountnumber']; ?></td>
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
				<td><?php echo $userdetails['basicsalary']; ?></td>
				<td>PF</td>
				<td><?php echo $userdetails['pfamount']; ?></td>
			  </tr>
			  <tr>
				<th >HRA</th>
				<td><?php echo $userdetails['hra']; ?></td>
				<td>PT</td>
				<td><?php echo $userdetails['pt']; ?></td>
			  </tr>
			  <tr>
				<th >Special Allowance</th>
				<td><?php echo $userdetails['specialallowance']; ?></td>
				<td>ESI</td>
				<td><?php echo $userdetails['esi']; ?></td>
			  </tr>
			  <tr>
				<th >Conveyance</th>
				<td><?php echo $userdetails['conveyance']; ?></td>
				<td>Others</td>
				<td><?php echo $userdetails['others']; ?></td>
			  </tr>
			  <tr>
				<th >Medical Reimbursement</th>
				<td><?php echo $userdetails['medicalreimbursement']; ?></td>
				<td>Advance</td>
				<td><?php echo $userdetails['advance']; ?></td>
			  </tr>
			   <tr>
				<th  style="border-right:none;"><strong>Gross Earnings(A)</strong></th>
				<th  style="border-left:none;"><strong><?php echo $grossearning; ?></strong></th>
				<th  style="border-right:none;"><strong>Gross Deductions(B):</strong></th>
				<th  style="border-left:none;"><strong><?php echo $grossdeduction; ?></strong></th>
			  </tr> 
			  <tr>
				<th  style="border-right:none;"><strong>Net Salary(A-B)</strong></th>
				<th colspan="3" style="border-left:none;"><strong><?php echo $grossearning_lop; ?></strong></th>
				
			  </tr> 
			  <tr>
				<th style="text-align:left" colspan="4"><i>Net Salary(in words):   <?php echo $grossearning_lop_inwords; ?></i></th>
				
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