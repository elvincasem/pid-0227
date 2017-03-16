
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
                <div id="addusermodal" class="modal" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
								
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h3 class="modal-title"><strong>Purchase Request</strong></h3>
                            </div>
                            <div class="modal-body">
                                
								
								<!-- Input States Block -->
            <div class="block">
                

                <!-- Input States Content -->
                <form action="#" method="post" class="form-horizontal" onsubmit="return false;">
				
                    <div class="form-group">
					<input type="hidden" id="prid" name="state-normal" class="form-control" >
                        <label class="col-md-3 control-label" for="state-normal">PR Date</label>
                        <div class="col-md-7">
                            <input type="text" id="prdate" name="example-datepicker3" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="<?php echo date("Y-m-d");?>">
                        </div>
						
						<label class="col-md-3 control-label" for="state-normal">APR No.</label>
                        <div class="col-md-7">
                            
						<select id="aprno" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
							<option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
							<!-- display APR No. -->
				<?php
							foreach ($apr_list as $apurchaserequest):
				
									echo "<option value='".$apurchaserequest['aprno']."'>".$apurchaserequest['aprno']."</option>";
			
							endforeach;
				
				?>
						</select>
								
							
                        </div>

						<label class="col-md-3 control-label" for="state-normal">PR No.:</label>
                        <div class="col-md-7">
                            <input type="text" id="prno" name="state-normal" class="form-control" tabindex="0" value="<?php echo date("Y-");?>">
                        </div>
						<label class="col-md-3 control-label" for="state-normal">Department</label>
                        <div class="col-md-7">
                            <input type="text" id="department" name="state-normal" class="form-control" tabindex="0" value="">
                        </div>
						<label class="col-md-3 control-label" for="state-normal">Section</label>
                        <div class="col-md-7">
                            <input type="text" id="section" name="state-normal" class="form-control" tabindex="0" value="">
                        </div>
						<label class="col-md-3 control-label" for="state-normal">Purpose</label>
                        <div class="col-md-7">
                            <textarea id="purpose" class="form-control"></textarea>
                        </div>
						<label class="col-md-3 control-label" for="state-normal">Mode of Procurement</label>
                        <div class="col-md-7">
                            
						<select id="modeofprocurement" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
							<option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
							<!-- display APR No. -->
						<option value="DIRECT CONTRACTING">DIRECT CONTRACTING</option>
						<option value="DIRECT CONTRACTING (LIMITED TIME OF COMPLETION)
">DIRECT CONTRACTING (LIMITED TIME OF COMPLETION)
</option>
						<option value="EMERGENCY PURCHASE">EMERGENCY PURCHASE</option>
						<option value="LIMITED SOURCE BIDDING">LIMITED SOURCE BIDDING</option>
						<option value="NEGOTIATED PROCUREMENT">NEGOTIATED PROCUREMENT</option>
						<option value="REPEAT ORDER">REPEAT ORDER</option>
						<option value="SELECTIVE BIDDING">SELECTIVE BIDDING</option>
						<option value="SHOPPING">SHOPPING</option>
						<option value="SHOPPING (SMALL VALUE EQUIPMENT)">SHOPPING (SMALL VALUE EQUIPMENT)</option>
						<option value="SMALL VALUE PROCUREMENT">SMALL VALUE PROCUREMENT</option>
						</select>
								
							
                        </div>
						

                    </div>
                    
                </form>
                <!-- END Input States Content -->
            </div>
            <!-- END Input States Block -->
								
								
								
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="savepr" class="btn btn-effect-ripple btn-primary" onclick="savepr();">Save</button>
								<button type="button" id="updatepr" class="btn btn-effect-ripple btn-primary" onclick="updatepr();">Update</button>
                                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Regular Modal -->
		
            
	<div class="block full">
        <div class="block-title">
		<h5>PR List</h5>
			<button type="button" id="addapr" class="pull-right btn btn-effect-ripple btn-primary" href="#addusermodal" data-toggle="modal" onclick="addpr();">Add APR</button>
			<?php //print_r($heidirectory);?>
        </div>
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover">
                <thead>
                    <tr>
                        <th>PR No.</th>
                        <th>APR No.</th>
                        <th>PO No.</th>
                        <th>Department</th>
                        <th>Section</th>
						<th>PR Date</th>
						<th></th>
                    </tr>
                </thead>
                <tbody>
				<?php
				
				foreach ($pr_list as $purchaserequest):
				//$heiname = strtoupper($hei['instname']);
				echo "<tr class='odd gradeX'>";
				
				echo "<td><a href='purchaserequest/details/".$purchaserequest['prid']."'>".$purchaserequest['prno']."</a></td>";
				echo "<td>".$purchaserequest['aprno']."</td>";
				echo "<td>".$purchaserequest['pono']."</td>";
				echo "<td>".$purchaserequest['department']."</td>";
				echo "<td>".$purchaserequest['section']."</td>";
				echo "<td>".mdate('%F %d, %Y',strtotime($purchaserequest['prdate']))."</td>";
				
			
				echo "<td class='center'> 
					
					<button class='hidden btn btn-primary' title='Edit APR'  onClick='editpr(".$purchaserequest['prid'].")'  data-toggle='modal' data-target='#addusermodal'><i class='fa fa-edit'></i></button>
					
					<button class='btn btn-danger notification' title='Delete User' id='notification' onClick='deletepr(".$purchaserequest['prid'].")'><i class='fa fa-times'></i></button>
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


