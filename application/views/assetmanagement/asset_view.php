
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
						<label class="col-md-3 control-label text-right">Particulars</label>
                        <div class="col-md-7">
                            <textarea class="form-control" id="particulars"></textarea>
                        </div>	
						<label class="col-md-3 control-label text-right">Article</label>
                        <div class="col-md-7">
                           <select id="article" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." >
							<option value="Laptop">Laptop</option>
							<option value="Desktop">Desktop</option>
							<option value="Printer">Printer</option>
							<option value="Appliance">Appliance</option>
							<option value="Chairs">Chairs</option>
							<option value="Tables">Tables</option>
							<option value="Cabinet">Cabinet</option>
							<option value="Others">Others</option>
							
							</select>
                        </div>	
						
						<label class="col-md-3 control-label text-right">Classification</label>
                        <div class="col-md-7">
                            <select id="classification" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." >
							<option value="Books">Books</option>
							<option value="Semi-Expendable">Semi-Expendable</option>
							<option value="Communication Equipment">Communication Equipment</option>
							<option value="Firefighting Equipment">Firefighting Equipment</option>
							<option value="Furniture and Fixtures">Furniture and Fixtures</option>
							<option value="IT Equipment and Softwares">IT Equipment and Softwares</option>
							<option value="Medical and Dental Laboratory">Medical and Dental Laboratory</option>
							<option value="Motor Vehicle">Motor Vehicle</option>
							<option value="Office Equipment">Office Equipment</option>
							<option value="Other Machineries and Equipment">Other Machineries and Equipment</option>
							<option value="Office Building">Office Building</option>
							
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
							<button type="button" id="savebutton" class="btn btn-effect-ripple btn-primary" onclick="saveasset();">Add Asset</button>
							
                                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
		
            
	<div class="block full">
        <div class="block-title">
		<h5>Asset List</h5>
			<button type="button" id="adddelivery" class="pull-right btn btn-effect-ripple btn-primary" href="#adddeliverymodal" data-toggle="modal">Add Asset</button>
			<?php //print_r($heidirectory);?>
        </div>
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover">
                <thead>
                    <tr style="text-align:center;">
                        
                        <!-- <th style="width:100px;">Delivery ID</th>-->
                       <th>Particulars/Description</th>
					   <th>Article</th>
                        <th>Classifications</th>
                        <!-- <th>Date Acquired</th>
                        <th>Assigned to</th> -->
                       
                        
						<th></th>
                    </tr>
                </thead>
                <tbody>
				<?php
				
				foreach ($assetlist as $asset_list):
				//$heiname = strtoupper($hei['instname']);
				echo "<tr class='odd gradeX' >";
				
				//echo "<td><a href='receiving/details/".$rrlist['deliveryid']."'>".$rrlist['deliveryid']."</a></td>";
				echo "<td><a href='asset/details/".$asset_list['assetid']."'>".$asset_list['asset_particulars']."</a></td>";
				
				//echo "<td>".$asset_list['asset_classificatin']."</td>";
				echo "<td>".$asset_list['asset_article']."</td>";
				//echo "<td>".mdate('%F %d, %Y',strtotime($asset_list['dateacquired']))."</td>";
				echo "<td>".$asset_list['asset_classification']."</td>";
				
				
			
				echo "<td class='center'> 
					
										
					<button class='btn btn-danger notification' title='Delete User' id='notification' onClick='deleteasset(".$asset_list['assetid'].")'><i class='fa fa-times'></i></button>
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


