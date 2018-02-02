<div class="container-sty-adm ">
	<div class=" row justify-content-md-end">
		<div class="col-md-9    ">
			
			                           
			<!-- Nav tabs -->
			<ul class="nav nav-tabs nav-justified bg-dark mtb-25">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Today Task</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#panel2" role="tab">View Tasks</a>
				</li>
			   
			</ul>
			<!-- Tab panels -->
			<div class="tab-content card ">
				<!--Panel 1-->
				<div class="tab-pane fade in show active" id="panel1" role="tabpanel">
		<form action="<?php echo base_url('employee/dailyreportpost');?>" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group ">
								<label for="telephone">Task Done</label>
								<textarea class="form-control heg-100" id="reprotcomment" name="reprotcomment" rows="5" id="comment"></textarea>
							</div>
							<label for="telephone">Task upload</label>
								<div class="file-field">
								
									<div class="btn btn-warning btn-sm">
										<span>Choose file</span>
										<input type="file" name="reportfile" id="reportfile">
									</div>
									<div class="file-path-wrapper">
									   <input class="file-path validate" type="text" placeholder="Upload your file">
									</div>
								</div>
						</div>
						<!--<div class="col-md-6">
							<label for="telephone"> Image Privew</label>
							<div class=" card img-privew text-center">
							<div class="avatar " >
									<img src="http://www.nextflowers.co.uk/assets/images/md/no-image.png">
							</div>
							</div>
						</div>-->
						</div>
						
						<div class="clearfix">&nbsp;</div>
						<div class="row justify-content-md-center">
						<div class="">
							<button type="submit" class="btn btn-default btn-rounded">Submit</button>
						</div>
						</div>
						</form>
				</div>
				<!--/.Panel 1-->
				<!--Panel 2-->
				<div class="tab-pane fade" id="panel2" role="tabpanel">
					
					        <div > 
								<div class="text-center h3-rep"> 
									<h3><span>February </span>- 2018 (Month Report)</h3>
								</div>  
								<button class="btn btn-warning down-btn">Download <i class="fa fa-download ml-1"></i></button>
							</div>  
							
<hr>							
					<!--Accordion wrapper-->
					<div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

						<!-- Accordion card -->
						<div class="card">

							<!-- Card header -->
							<div class="card-header" role="tab" id="headingOne">
								<a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<h5 class="mb-0">
										Feb-01 
										&nbsp; 
										<span class="text-info font-10">(Worked Hrs : <span class="text-dark">9 hrs - 22 min -12 Sec </span>)</span>
										
										<i class="fa fa-angle-down rotate-icon"></i>
									</h5>
								</a>
							</div>

							<!-- Card body -->
							<div id="collapseOne" class="collapse " role="tabpanel" aria-labelledby="headingOne">
								<div class="card-body">
								
										<p><span class="text-info font-10">( In Time : <span class="text-dark">2018-01-28 09:48:09 </span>)</span>
										<span class="text-info font-10">( Out Time : <span class="text-dark">2018-01-28 09:48:09 </span>)</span></p>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
									non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
									3 wolf moon tempor</p>
									<p> labore wes anderson cred nesciunt
									sapiente ea proident. Ad vegan excepteur butcher vice lomo.</p>
								</div>
							</div>
						</div>
						<!-- Accordion card -->

						<!-- Accordion card -->
						<div class="card">

							<!-- Card header -->
							<div class="card-header" role="tab" id="headingTwo">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<h5 class="mb-0">
										Feb-02 &nbsp;  
										<span class="text-info font-10">(Worked Hrs : <span class="text-dark">9 hrs - 22 min -12 Sec </span>)</span>
										<i class="fa fa-angle-down rotate-icon"></i>
									</h5>
								</a>
							</div>

							<!-- Card body -->
							<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="card-body">
								<p><span class="text-info font-10">( In Time : <span class="text-dark">2018-01-28 09:48:09 </span>)</span>
										<span class="text-info font-10">( Out Time : <span class="text-dark">2018-01-28 09:48:09 </span>)</span></p>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
									non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
									3 wolf moon tempor</p>
									<p> labore wes anderson cred nesciunt
									sapiente ea proident. Ad vegan excepteur butcher vice lomo.</p>
								</div>
							</div>
						</div>
						<!-- Accordion card -->
						
						
					</div>
					<!--/.Accordion wrapper-->
                
				</div>
				<!--/.Panel 2-->
				
			</div>
             <div class="clearfix">&nbsp;</div>
		</div>
	</div>
</div>
	
	
