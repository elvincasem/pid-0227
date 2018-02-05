
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
				<!-- Regular Modal -->
                <div id="newcustomermodal" class="modal bg" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                           <div class="modal-header">
								
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h3 class="modal-title"><strong>New Customer</strong></h3>
                                
                            </div> 
                            <div class="modal-body">
                                <div class="form-group">
						<label class="col-md-3 control-label text-right">Email Address</label>
                        <div class="col-md-7">
                            <input type="text" id="cemail" name="state-normal" class="form-control" tabindex="0" value="">
                        </div>	
						<div class="row"></div>
						<label class="col-md-3 control-label text-right">Last Name</label>
                        <div class="col-md-7">
                            <input type="text" id="clname" name="state-normal" class="form-control" tabindex="0" value="">
                        </div>	
						<label class="col-md-3 control-label text-right">First Name*</label>
                        <div class="col-md-7">
                            <input type="text" id="cfname" name="state-normal" class="form-control" tabindex="0" value="">
                        </div>	
						<label class="col-md-3 control-label text-right">Middle Name</label>
                        <div class="col-md-7">
                            <input type="text" id="cmname" name="state-normal" class="form-control col-xs-1" tabindex="0" value="">
                        </div>
						<label class="col-md-3 control-label text-right">Company</label>
                        <div class="col-md-7">
                            <input type="text" id="ccompany" name="state-normal" class="form-control col-xs-1" tabindex="0" value="">
                        </div>	
						<label class="col-md-3 control-label text-right">Address</label>
                        <div class="col-md-7">
                            <input type="text" id="caddress" name="state-normal" class="form-control col-xs-1" tabindex="0" value="">
                        </div>	
						<label class="col-md-3 control-label text-right">Mobile No.</label>
                        <div class="col-md-7">
                            <input type="text" id="cmobileno" name="state-normal" class="form-control col-xs-1" tabindex="0" value="">
                        </div>	
						<label class="col-md-3 control-label text-right">Other No.</label>
                        <div class="col-md-7">
                            <input type="text" id="cotherno" name="state-normal" class="form-control col-xs-1" tabindex="0" value="">
                        </div>	
						<label class="col-md-3 control-label text-right">Password</label>
                        <div class="col-md-7">
                            <input type="text" id="cpassword" name="state-normal" class="form-control col-xs-1" tabindex="0" value="">
                        </div>	
	
								
						<div class="row"></div>
							
					</div>
								
								<!-- Input States Block -->
            <div class="block">
                

                <!-- Input States Content -->

                <!-- END Input States Content -->
            </div>
            <!-- END Input States Block -->
								
								
								
                            </div>
                            <div class="modal-footer">
							<button type="button" id="savebutton" class="btn btn-effect-ripple btn-primary" onclick="savecustomer();">Save Customer</button>
							
                                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
	<!-- Regular Modal -->
                <div id="templatemodal" class="modal bg" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                           <div class="modal-header">
								
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h3 class="modal-title"><strong>Template Problems</strong></h3>
                                
                            </div> 
                            <div class="modal-body">
                                <div class="form-group">
						
                        <div class="col-md-12">
                             <select id="templatedescription" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." >
							 <?php
							 foreach ($template_problem as $temp_list):
								
							
								echo "<option value='".$temp_list['templatedescription']."'>".$temp_list['templatedescription']."</option>";
							
							endforeach;
							?>
							 </select>
                        </div>	
						
						<div class="row"></div>
						
							
					</div>
								
								<!-- Input States Block -->
            <div class="block">
                

                <!-- Input States Content -->

                <!-- END Input States Content -->
            </div>
            <!-- END Input States Block -->
								
								
								
                            </div>
                            <div class="modal-footer">
							<button type="button" id="savebutton" class="btn btn-effect-ripple btn-primary" onclick="insertproblem();">Insert</button>
							
                                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal" id="closebutton">Close</button>
                            </div>
                        </div>
                    </div>
                </div>		


<!-- Regular Modal -->
                <div id="templatedescriptionfield" class="modal bg" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                           <div class="modal-header">
								
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h3 class="modal-title"><strong>Template Unit Description</strong></h3>
                                
                            </div> 
                            <div class="modal-body">
                                <div class="form-group">
						
                        <div class="col-md-12">
                             <select id="templateunitdescription" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." >
							 <?php
							 foreach ($template_unitdescription as $temp_list):
								
							
								echo "<option value='".$temp_list['templatedescription']."'>".$temp_list['templatedescription']."</option>";
							
							endforeach;
							?>
							 </select>
                        </div>	
						
						<div class="row"></div>
						
							
					</div>
								
								<!-- Input States Block -->
            <div class="block">
                

                <!-- Input States Content -->

                <!-- END Input States Content -->
            </div>
            <!-- END Input States Block -->
								
								
								
                            </div>
                            <div class="modal-footer">
							<button type="button" id="savebutton" class="btn btn-effect-ripple btn-primary" onclick="insertdescription();">Insert</button>
							
                                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal" id="closebuttonunit">Close</button>
                            </div>
                        </div>
                    </div>
                </div>		
<!-- Regular Modal -->
                <div id="templatehistory" class="modal bg" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                           <div class="modal-header">
								
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h3 class="modal-title"><strong>Template History</strong></h3>
                                
                            </div> 
                            <div class="modal-body">
                                <div class="form-group">
						
                        <div class="col-md-12">
                             <select id="templatehistoryfield" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." >
							 <?php
							 foreach ($template_history as $temp_list):
								
							
								echo "<option value='".$temp_list['templatedescription']."'>".$temp_list['templatedescription']."</option>";
							
							endforeach;
							?>
							 </select>
                        </div>	
						
						<div class="row"></div>
						
							
					</div>
								
								<!-- Input States Block -->
            <div class="block">
                

                <!-- Input States Content -->

                <!-- END Input States Content -->
            </div>
            <!-- END Input States Block -->
								
								
								
                            </div>
                            <div class="modal-footer">
							<button type="button" id="savebutton" class="btn btn-effect-ripple btn-primary" onclick="inserthistory();">Insert</button>
							
                                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal" id="closebuttonhistory">Close</button>
                            </div>
                        </div>
                    </div>
                </div>		

<!-- end modal -->				
			
				
				
			<div class="block full">
				<div class="block-title">
				
					<h5>Details</h5>
					 <div class="btn-group pull-right">
							<a href="javascript:void(0)" data-toggle="dropdown" class="btn btn-primary dropdown-toggle hidden">Action <span class="caret"></span></a>
							<ul class="dropdown-menu text-left">
								<li>
									<a href="#" onclick="editrr();">
										<i class="fa fa-pencil pull-right"></i>
										Edit Delivery Details
									</a>
								</li>
								<li>
									<a href="#" onclick="updateinventory();">
										<i class="fa fa-pencil pull-right"></i>
										Update Inventory
									</a>
								</li>
								<li>
									<a href="#printinspection" data-toggle="modal">
										<i class="fa fa-cubes pull-right"></i>
										Print Inspection and Acceptance Report
									</a>
								</li>
								
								
							</ul>
						</div>
						
					 
				</div>
				<form action="#" method="post" class="form-horizontal" onsubmit="return false;">
				<div class="form-group">
				
				
					
					
					
					<label class="col-md-2 control-label" for="state-normal">Customer Name</label>
                        <div class="col-md-4">
						
                            <select id="customerid" name="example-select2" class="select-select2" style="width: 73%;" data-placeholder="Choose one.." >
							<option value=""></option>
							<?php
							//echo "<option value='".$itemsdetails['category']."'>".$itemsdetails['category']."</option>";
							
							foreach ($customers as $customer_list):
								
							
								echo "<option value='".$customer_list['customerid']."'>".$customer_list['cfname']." ".$customer_list['clname']."</option>";
							
							endforeach;
							?>
							</select>
							
							
							<a href="#newcustomermodal" class="btn btn-primary pull-right" data-toggle="modal" ><i class="fa fa-plus"></i> New</a>
                        </div>
					
					
					<div class="row"></div>
						
					
						<label class="col-md-2 control-label" for="state-normal">Category</label>
                        <div class="col-md-3">
						
                            <select id="categoryid" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." >
							
							<?php
							
							
							foreach ($category as $category_list):
								
							
								echo "<option value='".$category_list['categoryvalue']."'>".$category_list['categoryvalue']."</option>";
							
							endforeach;
							?>
							</select>
                        </div>
						
						<label class="col-md-2 control-label" for="state-normal">Status</label>
                        <div class="col-md-3">
						
                            <select id="status" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." >
							
							<option value="Open">Open</option>
							<option value="Pickup">Pickup</option>
							<option value="RMA">RMA</option>
							<option value="Closed">Closed</option>
							<option value="Ordered Parts">Ordered Parts</option>
							</select>
                        </div>
						
						
						<div class="row"></div>
						
						<label class="col-md-2 control-label" for="state-normal">Department</label>
                        <div class="col-md-3">
						
                            <select id="departmentid" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." >
							
							<?php
							
							
							foreach ($departments as $department_list):
								
							
							echo "<option value='".$department_list['departmentvalue']."'>".$department_list['departmentvalue']."</option>";
							
							endforeach;
							?>
							</select>
                        </div>
						<label class="col-md-2 control-label" for="state-normal">Priority</label>
                        <div class="col-md-3">
						
                            <select id="priority" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." >
							
							<?php
							
							
							foreach ($priority as $priority_list):
								
							
							echo "<option value='".$priority_list['priorityvalue']."'>".$priority_list['priorityvalue']."</option>";
							
							endforeach;
							?>
							
							
							</select>
                        </div>
						
						
						<div class="row"></div>
						<label class="col-md-2 control-label" for="state-normal">Created by</label>
                        <div class="col-md-3">
						
                            <select id="addedbyuid" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." disabled>
							
							<?php
							//echo "<option value='".$itemsdetails['category']."'>".$itemsdetails['category']."</option>";
							
							/*foreach ($article as $article_list):
								
							if($article_list['articlename']==$assetdetails['asset_article']){
									$selectedarticle = "selected='selected'";
								}else{
									$selectedarticle = "";
								}
								echo "<option value='".$article_list['articlename']."' $selectedarticle>".$article_list['articlename']."</option>";
							
							endforeach;*/
							?>
							</select>
                        </div>
						
						<label class="col-md-2 control-label" for="state-normal">Due Date</label>
                        <div class="col-md-3">
                             <input type="text" id="duedate" name="example-datepicker3" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="<?php echo date('Y-m-d');?>">
							
                        </div>
						
						<div class="row"></div>
						<label class="col-md-2 control-label" for="state-normal">Assign To</label>
                        <div class="col-md-3">
						
                            <select id="assignedto_uid" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
							
							<?php
							//echo "<option value='".$itemsdetails['category']."'>".$itemsdetails['category']."</option>";
							
							foreach ($agentlist as $ageent_list):
								
							
								echo "<option value='".$ageent_list['uid']."'>".$ageent_list['name']."</option>";
							
							endforeach;
							?>
							</select>
                        </div>
						
						
						
						<div class="row"></div>
						
						
						
						<h4 class="sub-header"></h4>
				<div class="col-lg-12">
						<label class="col-md-2 control-label" for="state-normal">Problem*<br><a href="#templatemodal"  data-toggle="modal" ><i class="fa fa-files-o"></i> Template</a></label>
                        <div class="col-md-3">
							<textarea class="form-control" id="problem" placeholder="Required Field" style="height:150px;"></textarea>
                            
							
                        </div>
						<label class="col-md-2 control-label" for="state-normal">Unit Description*<br><a href="#templatedescriptionfield"  data-toggle="modal" ><i class="fa fa-files-o"></i> Template</a></label>
                        <div class="col-md-3">
                             
							 <textarea class="form-control" id="description" style="height:150px;"></textarea>
							
                        </div>
						<div class="row"></div>
						<label class="col-md-2 control-label" for="state-normal">History<br><a href="#templatehistory"  data-toggle="modal" ><i class="fa fa-files-o"></i> Template</a></label>
                        <div class="col-md-3">
							<textarea class="form-control" id="history"></textarea>
                            
							
                        </div>
						
						<label class="col-md-2 control-label" for="state-normal">Serial Number</label>
                        <div class="col-md-3">
                             <input type="text" id="serialno" name="state-normal" class="form-control" tabindex="0" vtabindex="2">
							
                        </div>
				</div>
				

				<div class="col-lg-12">
						
						<div class="row"></div>
						<label class="col-md-2 control-label" for="state-normal">Special Instruction</label>
                        <div class="col-md-3">
                             <textarea id="special_instruction" class="form-control" ></textarea>
							
                        </div>
						
						<div class="row"></div>
						
				</div>
							<div class="row"></div>
						
						
						<div class="row"></div>
						 <div class="col-md-3 pull-right">
								<button id="savedrbutton" class="btn btn-primary" title="Save Ticket" onclick="saveticket();" ><i class="fa fa-floppy-o"></i> Save</button>
						 </div>
						
						
						 
						   

                    </div>
				</form>
				

				<div class="row"><br></div>
				
				
					 
				
				
				
				
				
				
			</div> <!-- end block -->
	   </div> <!-- end column -->
</div> <!-- end row -->
			
			
			

			
		</div>
		<!-- END Page Content -->
	</div>
	<!-- END Main Container -->
</div>
<!-- END Page Container -->

