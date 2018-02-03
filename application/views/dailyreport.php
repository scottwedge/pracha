<?php //echo '<pre>';print_r($reportlist);exit; ?>
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
                           <textarea class="form-control heg-100" id="reprotcomment" name="reprotcomment" rows="5" id="comment" required></textarea>
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
                     <h3><span><?php echo isset($title)?$title:'';?></span>&nbsp;(Month Report)</h3>
                  </div>
                  <!--<button class="btn btn-warning down-btn">Download <i class="fa fa-download ml-1"></i></button>-->
               </div>
               <hr>
               <!--Accordion wrapper-->
               <div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                  <!-- Accordion card -->
				   <?php $cnt=1;foreach ($reportlist as $list){ ?>
                  <div class="card">
                     <!-- Card header -->
                     <div class="card-header" role="tab" id="headingOne">
                        <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne<?php echo $cnt; ?>" aria-expanded="true" aria-controls="collapseOne<?php echo $cnt; ?>">
                           <h5 class="mb-0">
                              <?php echo $list['currentday']; ?> 
                              &nbsp; 
                              <span class="text-info font-10">(Worked Hrs : <span class="text-dark"> <?php echo $list['workinghours']; ?> </span>)</span>
                              <i class="fa fa-angle-down rotate-icon"></i>
                           </h5>
                        </a>
                     </div>
                     <!-- Card body -->
                     <div id="collapseOne<?php echo $cnt; ?>" class="collapse " role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-body">
                           <p><span class="text-info font-10">( In Time : <span class="text-dark"><?php echo $list['intime']; ?>  </span>)</span>
                              <span class="text-info font-10">( Out Time : <span class="text-dark"><?php if($list['outtime']!='0000-00-00 00:00:00'){echo $list['outtime'];} ?>  </span>)</span>
                           </p>
						   <?php $i=1;foreach ($list['task'] as $lis){ ?>
                           <p><?php echo $i.' . '; ?> <?php echo $lis['comment']; ?></p>
						   <?php if($lis['reportfile']!=''){ ?>
							<p><a style="color:#0064b4" href="<?php echo base_url('assets/dailyreports/'.$lis['reportfile']); ?>"><strong>Download File</strong></a></p>
						   <?php } ?>
						   <?php $i++;} ?>
                        </div>
                     </div>
                  </div>
                  <!-- Accordion card -->
				   <?php $cnt++;} ?>
				  
               </div>
               <!--/.Accordion wrapper-->
            </div>
            <!--/.Panel 2-->
         </div>
         <div class="clearfix">&nbsp;</div>
      </div>
   </div>
</div>
