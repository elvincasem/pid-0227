
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
								<h3 class="modal-title"><strong>Add Asset</strong></h3>
                                
                            </div> 
                            <div class="modal-body">
                                <div class="form-group">
						<label class="col-md-3 control-label text-right">Property No.</label>
                        <div class="col-md-7">
                            <input type="text" id="suppliername" name="state-normal" class="form-control" tabindex="0" value="">
                        </div>	
						<label class="col-md-3 control-label text-right">Address</label>
                        <div class="col-md-7">
                            <input type="text" id="address" name="state-normal" class="form-control" tabindex="0" value="">
                        </div>	
						<label class="col-md-3 control-label text-right">Contact No.</label>
                        <div class="col-md-7">
                            <input type="text" id="contactno" name="state-normal" class="form-control" tabindex="0" value="">
                        </div>	
						<label class="col-md-3 control-label text-right">TIN</label>
                        <div class="col-md-7">
                            <input type="text" id="tin" name="state-normal" class="form-control col-xs-1" tabindex="0" value="">
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
							<button type="button" id="addbutton" class="btn btn-effect-ripple btn-primary" onclick="savedelivery();">Add Delivery</button>
							
                                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
		
            
	<div class="block full">
        <div class="block-title">
		<h5>Asset List</h5>
			<button type="button" id="adddelivery" class="pull-right btn btn-effect-ripple btn-primary hidden" href="#adddeliverymodal" data-toggle="modal" onclick="addasset();">Add Asset</button>
			<?php //print_r($heidirectory);?>
        </div>
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover">
                <thead>
                    <tr style="text-align:center;">
                        
                        <!-- <th style="width:100px;">Delivery ID</th>-->
                        <th>Property No.</th>
						<th>Article</th>
                        <th>Particulars</th>
                        <th>Date Acquired</th>
                        <!-- <th>Assigned to</th> -->
                        <th>Classification</th>
                        
						<th></th>
                    </tr>
                </thead>
                <tbody>
				<?php
				
				foreach ($equipments as $equipment_list):
				//$heiname = strtoupper($hei['instname']);
				echo "<tr class='odd gradeX' >";
				
				//echo "<td><a href='receiving/details/".$rrlist['deliveryid']."'>".$rrlist['deliveryid']."</a></td>";
				echo "<td><a href='#".$equipment_list['equipNo']."'>".$equipment_list['propertyNo']."</a></td>";
				
				echo "<td>".$equipment_list['article']."</td>";
				echo "<td>".$equipment_list['particulars']."</td>";
				echo "<td>".mdate('%F %d, %Y',strtotime($equipment_list['dateacquired']))."</td>";
				echo "<td>".$equipment_list['classification']."</td>";
				
				
			
				echo "<td class='center'> 
					
										
					<button class='btn btn-danger notification' title='Delete User' id='notification' onClick='deletedelivery(".$equipment_list['equipNo'].")'><i class='fa fa-times'></i></button>
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


