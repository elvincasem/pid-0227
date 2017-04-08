
<div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
	
	
	<!--rightsidebar here-->
	<?php //$this->load->view('rightsidebar_view'); ?>
	
	<!--main sidebar here -->
	<?php $this->load->view('leftsidebar_view'); ?>

	<!-- Main Container -->
	<div id="main-container">
		  <?php $this->load->view('subheader_view'); ?>

		<!-- Page content -->
		<div id="page-content">
			<?php $this->load->view('inc/subnav_view'); ?>
<!-- Tables Row -->
<div class="row">
   <div class="col-lg-12">
            <!-- Partial Responsive Block -->
			
			
   <div class="row">
		<div class="col-md-4 col-lg-4">
<!-- Menu Block -->
<div class="block full">
	<!-- Menu Title -->
	<div class="block-title clearfix">
		
		<h2>Tickets Details</h2>
		<div class="pull-right"><button id="editbutton" type="submit" class="btn btn-sm btn-primary" onclick="editticket();"><i class="fa fa-edit"></i> Edit</button>&nbsp;&nbsp;<button type="submit" class="btn btn-sm btn-primary" onclick="updatedetails();" id="savebutton" disabled><i class="fa fa-save"></i> Save</button></div>
	</div>
	<!-- END Menu Title -->

		<!-- Menu Content -->
		<input type="hidden" id="ticketid" value="<?php echo $ticketid;?>">
		<input type="hidden" id="cemail" value="<?php echo $ticketdetails['cemail'];?>">
		<input type="hidden" id="cmobileno" value="<?php echo $ticketdetails['cmobileno'];?>">
		<ul class="nav nav-pills nav-stacked">
			<li class="active">
				<label class="control-label" for="state-normal">Customer Name</label>
                       
		
			<select id="customerid" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." disabled>
			<option></option>
			<?php
			
			
			foreach ($customers as $customer_list):
				
				if($customer_list['customerid']==$ticketdetails['customerid']){
					$selected = "selected='selected'";
				}else{
					$selected="";
				}
			
			echo "<option value='".$customer_list['customerid']."' $selected>".$customer_list['cfname']." ".$customer_list['clname']."</option>";
			
			endforeach;
			?>
			</select>

                      
			</li>
			<li>
				<label class="control-label" for="state-normal">Department</label>
                       
						
					<select id="departmentid" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." disabled>
					
					<?php
					
					
					foreach ($departments as $department_list):
						if($department_list['departmentid']==$ticketdetails['departmentid']){
							$selected = "selected='selected'";
						}else{
							$selected="";
						}	
					
					echo "<option value='".$department_list['departmentid']."' $selected>".$department_list['departmentvalue']."</option>";
					
					endforeach;
					?>
					</select>
			</li>
			<li>
				<label class="control-label" for="state-normal">Category</label>
                        
						
                            <select id="categoryid" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." disabled>
							
							<?php
							
							
							foreach ($category as $category_list):
								if($category_list['categoryid']==$ticketdetails['categoryid']){
									$selected = "selected='selected'";
								}else{
									$selected="";
								}	
							
								echo "<option value='".$category_list['categoryid']."' $selected>".$category_list['categoryvalue']."</option>";
							
							endforeach;
							?>
							</select>
			</li>
			<li>
				<label class="control-label" for="state-normal">Status</label>
                        
						
                            <select id="status" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." disabled>
							<?php
								echo "<option value='".$ticketdetails['status']."'>".$ticketdetails['status']."</option>";
							?>
							<option value="Open">Open</option>
							<option value="Pickup">Pickup</option>
							<option value="RMA">RMA</option>
							<option value="Closed">Closed</option>
							</select>
			</li>
			
			<li>
				<label class="control-label" for="state-normal">Priority</label>
                        
						
                            <select id="priority" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." disabled>
							<?php
								echo "<option value='".$ticketdetails['priority']."'>".$ticketdetails['priority']."</option>";
							?>
							<option value="Under Warranty - PC4ME">Under Warranty - PC4ME</option>
							<option value="Under Warranty - c/o">Under Warranty - c/o</option>
							<option value="Out of Warranty - PC4ME">Out of Warranty - PC4ME</option>
							<option value="Out of Warranty - Walk-In">Out of Warranty - Walk-In</option>
							</select>
			</li>
			
			<li>
				<label class=" control-label" for="state-normal">Due Date</label>
                        
                             <input type="text" id="duedate" name="example-datepicker3" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="<?php echo date($ticketdetails['due_date']);?>" disabled>
			</li>
			<li>
				<label class="control-label" for="state-normal">Assign To</label>
                       
						
                            <select id="assignedto_uid" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." disabled>
							
							<?php
							//echo "<option value='".$itemsdetails['category']."'>".$itemsdetails['category']."</option>";
							
							foreach ($agentlist as $ageent_list):
								if($ageent_list['uid']==$ticketdetails['assignedto_uid']){
									$selected = "selected='selected'";
								}else{
									$selected="";
								}	
							
								echo "<option value='".$ageent_list['uid']."' $selected>".$ageent_list['name']."</option>";
							
							endforeach;
							?>
							</select>
			</li>
			<li>
				<label class="control-label" for="state-normal">Created by</label>
                    
						
                            <select id="addedbyuid" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." disabled>
							
							<?php
							
							foreach ($agentlist as $agent_list):
								
							if($agent_list['uid']==$ticketdetails['addedbyuid']){
									$selectedarticle = "selected='selected'";
								}else{
									$selectedarticle = "";
								}
								echo "<option value='".$agent_list['uid']."' $selectedarticle>".$agent_list['name']."</option>";
							
							endforeach;
							?>
							</select>
			</li>
			<li>
				<label class=" control-label" for="state-normal">Date Created</label>
                        <br>
                             <?php 
							 
							echo  mdate('%F %d, %Y at %h:%i %a',strtotime($ticketdetails['time_stamp']));
							 ?>
							 
			</li>
			<li>
				<div class="pull-right"></div>
			</li>
		</ul>
		<!-- END Menu Content -->
                                </div>
                                <!-- END Menu Block -->

                                <!-- Quick Month Stats Block -->
                                
                                <!-- END Quick Month Stats Block -->
                            </div>
							
							
							
							
			<div class="col-md-8 col-lg-8">
				<div class="block">
                                    <!-- Tickets Title -->
                                    <div class="block-title">
                                        
                                        <ul class="nav nav-tabs" data-toggle="tabs">
                                            <li class="active"><a href="#tickets-list">Timeline</a>
											
											
											</li>
                                            <li class="hidden"><a href="#tickets-single">#TCK500</a></li>
                                        </ul>
										
                                    </div>
                                    <!-- END Tickets Title -->
									
									
 <div class="tab-content" >
                                        <!-- Tickets List -->
										<div class="pull-right"><button id="editbutton2" type="submit" class="btn btn-sm btn-primary" onclick="editdescription();"><i class="fa fa-edit"></i> Edit</button>&nbsp;&nbsp;<button type="submit" class="btn btn-sm btn-primary" onclick="updatedescription();" id="savebutton2" disabled><i class="fa fa-save"></i> Save</button></div>
	
			<p>
				<label>Problem</label><textarea class="form-control" id="problem" disabled><?php echo $ticketdetails['problem'];?></textarea> 
				<label>Description</label>
				<textarea class="form-control"  disabled id="ticketdescription"><?php echo $ticketdetails['description'];?></textarea>
				<label>Serial No</label>
				<input type="text" class="form-control"   disabled id="serialno" value="<?php echo $ticketdetails['serialno']?>">
				<label>History</label>
				<textarea class="form-control"   disabled id="history"><?php echo $ticketdetails['history'];?></textarea>
				<label>Special Instruction</label>
				<textarea class="form-control" disabled id="special_instruction"><?php echo $ticketdetails['special_instruction'];?></textarea>
			</p>
		   <?php
			if($ticketdetails['status']=="Open"){
				echo "<div class='alert alert-success animation-fadeInQuick'>Current Status: <strong>OPEN</strong></div>";
			}
			if($ticketdetails['status']=="Pickup"){
				echo "<div class='alert alert-warning animation-fadeInQuick'>Current Status: <strong>Pickup</strong></div>";
			}
			if($ticketdetails['status']=="RMA"){
				echo "<div class='alert alert-danger animation-fadeInQuick'>Current Status: <strong>RMA</strong></div>";
			}
			if($ticketdetails['status']=="Closed"){
				echo "<div class='alert label-default animation-fadeInQuick'>Current Status: <strong>Closed</strong></div>";
			}
		   
		   ?>
		   
                                           
<ul class="media-list media-feed push" id="ticket_timeline">
	<!-- Ticket -->
	
	
	<?php 
	$base = base_url();
		foreach ($ticketlog as $ticket_log):
		
			
		
			echo "<li class='media'>";
		echo "<a href='page_ready_user_profile.html' class='pull-left'>";
			if($ticket_log['userreplied']=="Agent"){
				echo "<img src='".$base."public/img/agent_icon.png' alt='Avatar' class='img-circle' style='width:100%;'>";
			}if($ticket_log['userreplied']=="System"){
				echo "<img src='".$base."public/img/system_icon.png' alt='Avatar' class='img-circle' style='width:100%;'>";
			}if($ticket_log['userreplied']=="Customer"){
				echo "<img src='".$base."public/img/customer_icon.png' alt='Avatar' class='img-circle' style='width:100%;'>";
			}
		echo "</a>";
		echo "<div class='media-body'>";
		echo "<p class=''>
				<span class='text-muted pull-right'>
					<small>".$ticket_log['time_stamp']."</small>
				</span>
				<small><a href='#'>".$ticket_log['user_name']."</a></small>
			</p>";
		
		
		
		if($ticket_log['replytype']=="TEXT"){
			echo "<p>".$ticket_log['remarks_info']."</p>";
		}
		if(substr($ticket_log['replytype'], 0, strpos($ticket_log['replytype'], '/'))=="image"){
			$base = base_url();
				echo "<a href='".$base."uploads/".$ticket_log['remarks_info']."' data-toggle='lightbox-image'><img src='".$base."uploads/".$ticket_log['remarks_info']."' alt='image'></a>";
		}
		if(substr($ticket_log['replytype'], 0, strpos($ticket_log['replytype'], '/'))=="video"){
				echo "<video width='320' height='240' controls>
  <source src='".$base."uploads/".$ticket_log['remarks_info']."' type='".$ticket_log['replytype']."'>

</video>";
		}
		
			
			
		echo "</div>";
	echo "</li>";
		
		
		endforeach;
	
	?>
	

	<!-- END Ticket -->

	
	
	
	
	
	
	
	
	
</ul>
<!-- reply section -->
<ul>
<!-- Replies -->

	<li class="media">
	<!-- reply tabs -->
	
		<div class="block full">
			<!-- Block Tabs Title -->
			<div class="block-title">
				
				<ul class="nav nav-tabs" data-toggle="tabs">
					<li class="active"><a href="#block-tabs-home">Text</a></li>
					<li><a href="#block-tabs-profile">Image/Video</a></li>
					
				</ul>
			</div>
			<!-- END Block Tabs Title -->

			<!-- Tabs Content -->
			<div class="tab-content">
				<div class="tab-pane active" id="block-tabs-home">
				<!-- first tab -->
				
				<a href="#" class="pull-left">
					<img src="<?php echo base_url();?>public/img/placeholders/avatars/avatar.jpg" alt="Avatar" class="img-circle">
				</a>
				<div class="media-body">
					
						<textarea id="ticket-reply" name="tickets-reply" class="form-control" rows="5" placeholder="Enter your reply"></textarea>
						<i>Notify Customer: </i><br><input type="checkbox" id="email_notif"> Email <input type="checkbox" id="sms_notif"> SMS <input type="checkbox" id="mobile_notif"> Mobile App<br>
						<button type="submit" class="btn btn-sm btn-primary" onclick="savereply();"><i class="fa fa-reply"></i> Save Reply</button>
					
				</div>
				
				
				
				<!-- end first tab -->
				
				
				
				</div>
				<div class="tab-pane" id="block-tabs-profile">
				
			
	<?php echo form_open_multipart('ticket/do_upload');?> 
					   <form action = "" method = "">
						 <input type="hidden" id="ticketfileid" name="ticketfileid" value="<?php echo $ticketid;?>">
						 <?php
							if($status=="yes"){
								echo "<img style='width:100%; float:left;' src='$fileurl'>";
							}
						 ?>
						 
						 
						 <input class=""  type = "file" name = "assetimage" id = "assetimage" size = "20" /> 
						
						 <input class="btn btn-primary" type = "submit" value = "Upload"/>
							
					  </form> 
					
				
				</div>
				<div class="tab-pane" id="block-tabs-settings">Settings..</div>
			</div>
			<!-- END Tabs Content -->
		</div>
		<!-- END Block Tabs -->
		<!-- end tabs -->
		
	</li>
	<!-- END Replies -->
</ul>
                                        </div>
                                        <!-- END Ticket View -->   
                                                
							</div>
						</div>
						<!-- END Tickets List -->
						
										
										
			
			</div>			
							
							
							
							
							
   </div>
	
   </div> <!-- end column -->
</div> <!-- end row -->
			
			
			

			
		</div>
		<!-- END Page Content -->
	</div>
	<!-- END Main Container -->
</div>
<!-- END Page Container -->


