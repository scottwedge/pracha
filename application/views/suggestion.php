
<div class="container-sty-adm ">
	<div class=" row justify-content-md-center">
		<div class="col-md-6  " style="">
			
			 <!-- DIRECT CHAT -->
              <div class="box box-warning direct-chat direct-chat-primary card">
                <div class="box-header with-border bg-warning text-white">
                  <h3 class="box-title">Direct Chat</h3>

                 
                </div>
				
                <div class="box-body">
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages">
				  
				  <?php foreach ($suggestion_list as $list){ ?>
                  
						<?php if($list['type']=='Replay'){ ?>
						
							<div class="direct-chat-msg right">
									  <div class="direct-chat-info clearfix">
										<span class="direct-chat-name pull-right"><?php echo $list['emp_name']; ?></span>
										<span class="direct-chat-timestamp pull-left"><?php echo $list['create']; ?></span>
									  </div>
						  
										<?php if($list['emp_profilepic']!=''){ ?>
											   <img class="direct-chat-img" src="<?php echo base_url('assets/emp_pics/'.$list['emp_profilepic']); ?>" alt="<?php echo $list['emp_profilepic']; ?>">
										<?php }else{ ?>
										<img class="direct-chat-img" src="<?php echo base_url('assets/emp_pics/default.jpg'); ?>" alt="Image">
										<?php }?>										
										<div class="direct-chat-text">
										<?php echo $list['comment']; ?>
									  </div>
										</div>
							
						<?php }else{ ?>
						
								 <div class="direct-chat-msg">
								  <div class="direct-chat-info clearfix">
									<span class="direct-chat-name pull-left"><?php echo $list['empreplyname']; ?> </span>
									<span class="direct-chat-timestamp pull-right"><?php echo $list['create']; ?></span>
								  </div>
								<?php if($list['empreplyimage']!=''){ ?>
									   <img class="direct-chat-img" src="<?php echo base_url('assets/emp_pics/'.$list['empreplyimage']); ?>" alt="<?php echo $list['empreplyimage']; ?>">
								<?php }else{ ?>
								<img class="direct-chat-img" src="<?php echo base_url('assets/emp_pics/default.jpg'); ?>" alt="Image">
								<?php }?>
								  
								  <div class="direct-chat-text">
									<?php echo $list['comment']; ?>
								  </div>
								</div>
								
						<?php } ?>
					
					
				  <?php } ?>
					
					
					
					
                    
                    <!-- /.direct-chat-msg -->

                  </div>
                  <!--/.direct-chat-messages-->

                 
                </div>
                <!-- /.box-body -->
              
			<form action="<?php echo base_url('employee/suggestionpost');?>" method="post">
			<div class="box-footer">			
				<div class="row">
                      <div class="col-md-6">
						<input type="text"  id="message" name="message" placeholder="Message ..." class="form-control" required>
					  </div>
                       <?php if($userdetails['role']!=3){?>   
                      <div class="col-md-3">
					  <select class="mdb-select" name="emp_id" required>
                    <option value="" selected>Select Employee</option>
					<?php foreach($emp_list as $li){ ?>
						<?php if($li['emp_id']!=1){ ?>
						<option value="<?php  echo $li['emp_id']; ?>"><?php  echo $li['emp_name']; ?></option>
						<?php } ?>
					<?php } ?>
						</select>
					  </div>
					  <?Php } ?>
					  <div class="col-md-2"> <button type="submit" class="btn btn-dark ">Send</button>
					  </div>
				 </div>
				
                
                </div>
				 </form>
                <!-- /.box-footer-->
              </div>
        

		</div>
	</div>
</div>

	<script>
     $(document).ready(function() {
   $('.mdb-select').material_select();
 });
</script>
