
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
				<input type="hidden" id="customerid">
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
							<button type="button" id="updatebutton" class="btn btn-effect-ripple btn-primary" onclick="updatecustomer();" disabled>Update</button>
							
                                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
				
				
				<!-- tickets Modal -->
                <div id="showticket" class="modal bg" role="dialog" aria-hidden="true">
				<input type="hidden" id="customerid">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                           <div class="modal-header">
								
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h3 class="modal-title"><strong>Ticket List</strong></h3>
                                
                            </div> 
                            <div class="modal-body" id="modalbody">
							
		 <div class="table-responsive remove-margin-bottom">
			<table  id="ticketbody" class="table table-striped table-bordered table-vcenter table-hover">
               <tbody>
                    
				</tbody>
			</table>
	
								
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
							
                                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
				
		
            
	<div class="block full">
        <div class="block-title">
		<h5>Customers List</h5>
			<button type="button" id="adddelivery" class="pull-right btn btn-effect-ripple btn-primary" href="#newcustomermodal" data-toggle="modal" onclick="addcustomer();">Add Customer</button>
			<?php //print_r($heidirectory);?>
        </div>
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover">
                <thead>
                    <tr style="text-align:center;">
                        
                        <!-- <th style="width:100px;">Delivery ID</th>-->
                        
						<th>Customer Name</th>
						<th>Tickets</th>
						<th>Address</th>
						<th>Mobile No</th>
						<th>Email</th>
						<th>Other No</th>
						<th>Device ID</th>
						<th>Company</th>
                        
                        
						<th></th>
                    </tr>
                </thead>
                <tbody>
				<?php
				
				foreach ($customerslist as $cust_list):
				
				echo "<tr class='odd gradeX' >";

				
				echo "<td><a href='#newcustomermodal' data-toggle='modal' onclick='editcustomer(".$cust_list['customerid'].");'>".$cust_list['cfname']." ".$cust_list['clname']."</a></td>";
				echo "<td style='text-align:center;'><a href='#showticket' data-toggle='modal' onclick='showticket(".$cust_list['customerid'].");'>".$cust_list['ticketcount']."</a></td>";
				echo "<td>".$cust_list['caddress']."</td>";
				echo "<td>".$cust_list['cmobileno']."</td>";
				echo "<td>".$cust_list['cemail']."</td>";
				echo "<td>".$cust_list['cotherno']."</td>";
				echo "<td>".$cust_list['deviceid']."</td>";
				echo "<td>".$cust_list['ccompany']."</td>";
				
				
				
			
				echo "<td class='center'> 
					
								
					<button class='btn btn-danger notification' title='Delete User' id='notification' onClick='deletecustomer(".$cust_list['customerid'].")'><i class='fa fa-times'></i></button>
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


