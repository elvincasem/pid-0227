
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
                <div id="adddeliverymodal" class="modal bg" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                           <div class="modal-header">
								
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h3 class="modal-title"><strong>Add Item</strong></h3>
                                
                            </div> 
                            <div class="modal-body">
                                <div class="form-group">
						<label class="col-md-3 control-label text-right">Item Description</label>
                        <div class="col-md-7">
							<textarea  class="form-control" id="itemdescription"></textarea>
                        </div>
						<label class="col-md-3 control-label text-right">Unit</label>
                        <div class="col-md-7">
                           <select id="unitofmeasure"  class="form-control">
								<?php
									//foreach($unitlist as $unit_list):
									
										//echo "<option value='".$unit_list['unit_name']."'>".$unit_list['unit_name']."</option>";
									//endforeach;
								
								?>
						   </select>
                        </div>	
						<label class="col-md-3 control-label text-right">Unit Cost</label>
                        <div class="col-md-7">
                            <div class="input-group">
								<span class="input-group-addon">₱</span>
								<input type="text" id="unitcost" name="example-input1-group1" class="form-control" placeholder="0.00">
							</div>
                        </div>	
						<label class="col-md-3 control-label text-right">Category</label>
                        <div class="col-md-7">
                           <select id="category"  class="form-control">
							<option>Office Supply</option>
							<option>Office Supply (DBM)</option>
						   </select>
                        </div>	
						
						<label class="col-md-3 control-label text-right" for="example-select2">Supplier</label>
                        <div class="col-md-7">
							<select id="supplierid" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <?php
									//foreach($supplierlist as $suppliers):
									
										//echo "<option value='".$suppliers['supplierID']."'>".$suppliers['supName']."</option>";
									//endforeach;
								
								?>
                                                </select>
                          
                        </div>	
						<label class="col-md-3 control-label text-right">Brand</label>
                        <div class="col-md-7">
                            <input type="text" id="brand" name="state-normal" class="form-control" tabindex="0" value="">
                        </div>	
							
						<label class="col-md-3 control-label  text-right" for="state-normal">Warehouse</label>
                        <div class="col-md-7">
                            <select id="warehouseid" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
							
							<?php
							//foreach ($warehouselist as $warehouses):
							
								//echo "<option value='".$warehouses['warehouseid']."'>".$warehouses['warehouse_name']."</option>";
							
							//endforeach;
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
							<button type="button" id="saveitembutton" class="btn btn-effect-ripple btn-primary" onclick="saveitem();">Add Item</button>
							
                                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
		
   <div class="row">
		<div class="col-md-4 col-lg-3">
                                <!-- Menu Block -->
                                <div class="block full">
                                    <!-- Menu Title -->
                                    <div class="block-title clearfix">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                        </div>
                                        <h2>Manage Tickets</h2>
                                    </div>
                                    <!-- END Menu Title -->

<!-- Menu Content -->
<ul class="nav nav-pills nav-stacked">
	<li class="<?php echo $allclass;?>">
		<a href="<?=base_url();?>ticket">
			<span class="badge pull-right"><?php echo $totaltickets;?></span>
			<i class="fa fa-fw fa-ticket icon-push"></i> <strong>All</strong>
		</a>
	</li>
	<li class="<?php echo $pickupclass;?>">
		<a href="<?=base_url();?>ticket/pickup">
			<span class="badge pull-right"><?php echo $pickuptickets;?></span>
			<i class="fa fa-fw fa-exclamation-triangle icon-push"></i> <strong>Pickup</strong>
		</a>
	</li>
	<li class="<?php echo $openclass;?>">
		<a href="<?=base_url();?>ticket/open">
			<span class="badge pull-right"><?php echo $opentickets;?></span>
			<i class="fa fa-fw fa-folder-open-o icon-push"></i> <strong>Open</strong>
		</a>
	</li>
	<li class="<?php echo $rmaclass;?>">
		<a href="<?=base_url();?>ticket/rma">
			<span class="badge pull-right"><?php echo $rmatickets;?></span>
			<i class="fa fa-fw fa-gear icon-push"></i> <strong>RMA</strong>
		</a>
	</li>
	<li class="<?php echo $closedclass;?>">
		<a href="<?=base_url();?>ticket/closed">
			<span class="badge pull-right"><?php echo $closedtickets;?></span>
			<i class="fa fa-fw fa-folder-o icon-push"></i> <strong>Closed</strong>
		</a>
	</li>
	
</ul>
                                    <!-- END Menu Content -->
                                </div>
                                <!-- END Menu Block -->

                                <!-- Quick Month Stats Block -->
                                <div class="block hidden">
                                    <!-- Quick Month Stats Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                        </div>
                                        <h2>Quick Stats</h2>
                                    </div>
                                    <!-- END Quick Month Stats Title -->

                                    <!-- Quick Month Stats Content -->
                                    <table class="table table-striped table-borderless table-vcenter">
                                        <tbody>
                                            <tr>
                                                <td style="width: 60%;">
                                                    <strong>Total Tickets</strong>
                                                </td>
		<td><?php echo $totaltickets;?></td>
                                            </tr>
	<?php?>
                                            <tr>
                                                <td>
                                                    <strong>Total Responses</strong>
                                                </td>
                                                <td>2590</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Forum Tickets</strong>
                                                </td>
                                                <td>320</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Email Tickets</strong>
                                                </td>
                                                <td>200</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Contact Form Tickets</strong>
                                                </td>
                                                <td>70</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Avg Response Time</strong>
                                                </td>
                                                <td>2 hrs</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- END Quick Month Stats Content -->
                                </div>
                                <!-- END Quick Month Stats Block -->
                            </div>
							
							
							
							
			<div class="col-md-8 col-lg-9">
				<div class="block">
                                    <!-- Tickets Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                        </div>
                                        <ul class="nav nav-tabs" data-toggle="tabs">
                                            <li class="active"><a href="#tickets-list">Ticket List</a></li>
                                            <li class="hidden"><a href="#tickets-single">#TCK500</a></li>
                                        </ul>
                                    </div>
                                    <!-- END Tickets Title -->
									
									
									 <div class="tab-content">
                                        <!-- Tickets List -->
                                        <div class="tab-pane active" id="tickets-list">
                                            <div class="block-content-full">
                                                <div class="table-responsive remove-margin-bottom">
                                                    <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover">
                <thead>
                    <tr style="text-align:center;">
                        
                        <!-- <th style="width:100px;">Delivery ID</th>-->
                        <th>Ticket No.</th>
						<th>Title</th>
                        <th>Customer</th>
                        <th>Agent</th>
                        <th>Status</th>
                        <th>Priority</th>
						<th></th>
                    </tr>
                </thead>
                <tbody>
				<?php
				$base = base_url();
				foreach ($tickets as $ticketlist):
				
				
				//$heiname = strtoupper($hei['instname']);
				echo "<tr class='odd gradeX' >";
				
				//echo "<td><a href='receiving/details/".$rrlist['deliveryid']."'>".$rrlist['deliveryid']."</a></td>";
				echo "<td><a href='".$base."ticket/details/".$ticketlist['ticketid']."'>Ticket #".$ticketlist['ticketid']."</a></td>";
				
				echo "<td>".$ticketlist['title']."</a></td>";
				echo "<td>".$ticketlist['cfname']." ".$ticketlist['clname']."</td>";
				echo "<td>".$ticketlist['name']."</td>";
				//echo "<td>".mdate('%F %d, %Y',strtotime($items_list['dateacquired']))."</td>";
				echo "<td>";
					if($ticketlist['status']=="Open"){
						echo "<span class='label label-success'>OPEN</span>";
					}if($ticketlist['status']=="Pickup"){
						echo "<span class='label label-warning'>Pickup</span>";
					}if($ticketlist['status']=="RMA"){
						echo "<span class='label label-danger'>RMA</span>";
					}if($ticketlist['status']=="Closed"){
						echo "<span class='label label-default'>Closed</span>";
					}

				echo "</td>";
				echo "<td>".$ticketlist['priority']."</td>";
			
			
				echo "<td class='center'> 
					
										
					<button class='btn btn-danger notification' title='Delete Item' id='notification' onClick='deleteitem(".$ticketlist['ticketid'].")'><i class='fa fa-times'></i></button>
				</td>";
				echo "</tr>";
				
				endforeach;
				
				?>
				
				
				
				
                    
                </tbody>
            </table>
													
													
													
													
													
                                                </div>
                                                
							</div>
						</div>
						<!-- END Tickets List -->
						
										
										<!-- Ticket View -->
                                        <div class="tab-pane" id="tickets-single">
                                            <div class="alert alert-success animation-fadeInQuick">Current Status: <strong>OPEN</strong></div>
                                            <a href="javascript:void(0)" class="btn btn-xs btn-default pull-right"><i class="fa fa-check"></i> Flag as Closed</a>
                                            <a href="javascript:void(0)" class="btn btn-xs btn-danger"><i class="fa fa-flag"></i> Flag as Urgent</a>
                                            <a href="javascript:void(0)" class="btn btn-xs btn-warning"><i class="fa fa-flag"></i> Flag as Invalid</a>
                                            <hr>
										</div>
                                        <!-- END Ticket View -->
									</div>
                                    <!-- END Tabs Content -->
								</div>
                                <!-- END Tickets Block -->
							 </div>
                        </div>
                        <!-- END Tickets Content -->
			
			</div>			
							
							
							
							
							
   </div>
	<div class="block full hidden">
        <div class="block-title">
		<h5>Items</h5>
			<button type="button" id="adddelivery" class="hidden pull-right btn btn-effect-ripple btn-primary" href="#adddeliverymodal" data-toggle="modal" >Add Item</button>
			<?php //print_r($heidirectory);?>
        </div>
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover">
                <thead>
                    <tr style="text-align:center;">
                        
                        <!-- <th style="width:100px;">Delivery ID</th>-->
                        <th>Ticket No.</th>
						<th>Title</th>
                        <th>Customer</th>
                        <th>Agent</th>
                        <th>Status</th>
                        <th>Priority</th>
						<th></th>
                    </tr>
                </thead>
                <tbody>
				<?php
				
				foreach ($tickets as $ticketlist):
				//$heiname = strtoupper($hei['instname']);
				echo "<tr class='odd gradeX' >";
				
				//echo "<td><a href='receiving/details/".$rrlist['deliveryid']."'>".$rrlist['deliveryid']."</a></td>";
				echo "<td><a href='#'>Ticket no: ".$ticketlist['ticketid']."</a></td>";
				
				echo "<td>".$ticketlist['title']."</a></td>";
				echo "<td>".$ticketlist['cfname']." ".$ticketlist['clname']."</td>";
				echo "<td>".$ticketlist['name']."</td>";
				//echo "<td>".mdate('%F %d, %Y',strtotime($items_list['dateacquired']))."</td>";
				echo "<td>".$ticketlist['status']."</td>";
				echo "<td>".$ticketlist['priority']."</td>";
			
			
				echo "<td class='center'> 
					
										
					<button class='btn btn-danger notification' title='Delete Item' id='notification' onClick='deleteitem(".$ticketlist['ticketid'].")'><i class='fa fa-times'></i></button>
				</td>";
				echo "</tr>";
				
				endforeach;
				
				?>
				
				
				
				
                    
                </tbody>
            </table>
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


