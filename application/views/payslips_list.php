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
		                          
<!-- Nav tabs -->
<ul class="nav nav-tabs nav-justified bg-warning">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Payrolls /Payslips</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Current Salary</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">Increment Possibility</a>
    </li>
</ul>
<!-- Tab panels -->
<div class="tab-content card">
    <!--Panel 1-->
    <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
        <div class="row mtb-30">
			<div class="col-md-4">
				<select class="mdb-select" onchange="getpayslips(this.value)" id="payslip" name="payslip">
					<option value="" disabled selected>Choose your Month</option>
					<?php foreach($payslips_details as $lis){ ?>
					<option value="<?php echo $lis['date'].'_'.$lis['emp_id']; ?>"><?php echo $lis['month']; ?></option>
					<?php } ?>
				</select>
				
			</div>
			<div class="col-md-4">
				<a id="documentfilelink" style="display:none" type="button" class="btn btn-default">Download <i class="fa fa-download ml-1"></i></a>
				
			</div>
			</div>
    </div>
    <!--/.Panel 1-->
    <!--Panel 2-->
    <div class="tab-pane fade" id="panel2" role="tabpanel">
        <br><table>
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
				<th>Mode of Payment</th>
				<td>Bank</td>
				<th>Bank Name</th>
				<td><?php echo $userdetails['bankname']; ?></td>
			  </tr>
			  <tr>
				<th>Bank Account No</th>
				<td><?php echo $userdetails['bankaccountnumber']; ?></td>
			  
			  	<td>Salary</td>
				<td><?php echo $userdetails['salary']; ?></td>
				</tr>
			</table>
    </div>
    <!--/.Panel 2-->
    <!--Panel 3-->
    <div class="tab-pane fade" id="panel3" role="tabpanel">
        <br>
        <p><?php echo isset($userdetails['salary_increment'])?$userdetails['salary_increment']:'NO data Available'; ?></p>
    </div>
    <!--/.Panel 3-->
</div>
                           
                           
			
			
		</div>
	</div>
</div>

	
<script>
	 $(document).ready(function() {
    $('.mdb-select').material_select();
  });
  
  
  function getpayslips(id){
	  $('#documentfilelink').show();
		$.ajax({
			type: "POST",
			url: "<?php echo base_url('employee/getpayslips');?>",
				data: {
				form_key : window.FORM_KEY,
				emp_id: id,
				},
				cache: false,
				success: function(data)
				{
				var parsedData = JSON.parse(data);
				var url='<?php echo base_url('assets/payslips/'); ?>'+parsedData.inovie_name;
				$('a#documentfilelink').attr({target: '_blank', href  : url});
				} 
			});
	
	  
  }
</script>