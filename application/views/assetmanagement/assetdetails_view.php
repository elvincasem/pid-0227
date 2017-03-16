
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
				<!-- generate po modal -->
				<!-- Regular Modal Print PR-->
                <div id="printinspection" class="modal bg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                           <div class="modal-header">
								
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								
                                
                            </div> 
                            <div class="modal-body" id="printbody">
                                
								
								<!-- Input States Block -->
            <div class="block">
                

                <!-- Input States Content -->
              <style>

tr.noBorder td{
	border:0;
}
</style>

<div style="text-align:right;">Appendix 62</div>
<div style="text-align:center;">INSPECTION AND ACCEPTANCE REPORT</div>
<br>
<div>Entity Name:__________________________________<span style="padding-left:100px;">Fund Cluster:_________________</span></div><br>
<table border="1" style="border:solid 2px; width:800px;">

	<tr><td colspan="6"></td></tr>
	
	<tr class="noBorder">
		<td colspan="4">Supplier: <u><?php echo $deliverydetails['supName']?></u></td>
		<td colspan="2">IAR No.: ____________________</td>
		
	</tr>
	<tr  class="noBorder">
		<td colspan="4"  width="400">APR No. <u><?php echo $deliverydetails['aprno']?></u></td>
		
		<td colspan="2">Date: ____________________</td>
		
	</tr>
	<tr  class="noBorder">
		<td colspan="4"  width="400">PO No. <u><?php echo $deliverydetails['pono']?></u></td>
		
		<td colspan="2">Invoice No: <u><?php echo $deliverydetails['invoiceno']?></u></td>
		
	</tr>
	<tr  class="noBorder">
		<td colspan="4"  width="">Requisitioning Office/Dept.:<u> CHED Region 1</u></td>
		
		<td colspan="2">Date: ____________________</td>
		
	</tr>
	<tr  class="noBorder">
		<td colspan="4"  width="400">Responsibility Center Code:____________________</td>
		
		<td colspan="2"></td>
		
	</tr>
	
	
	
		
	<tr style="text-align:center;font-weight:bold;">
	<td style="width:90px;">Stock/ Property No.</td>
	<td colspan="3">Description</td>
	<td>Unit</td>
	<td>Quantity</td>
	</tr>
	<!-- items here -->
	<?php
									
				$totalamount=0;
				foreach ($dr_asset_list_items as $drlistitems):
				$amount = $drlistitems['qty'] * $drlistitems['unitprice'];
				$totalamount=$totalamount+$amount;
				echo "<tr style='text-align:center;'>";
				echo "<td>".$drlistitems['assetid']."</td>";
				echo "<td   colspan='3'>".$drlistitems['asset_particulars']."</td>";
				echo "<td>".$drlistitems['unit']."</td>";
				echo "<td>".$drlistitems['qty']."</td>";
			
				
				echo "</tr>";
				
				endforeach;
				
				?>

	
	<tr ><td colspan="3" style="text-align:center;font-weight:bold;">INSPECTION</td><td style="text-align:center;font-weight:bold;" colspan="3">ACCEPTANCE</td></tr>
	
	
	<tr ><td colspan="3" style="text-align:center;font-weight:bold;">
	Date Inspected: ______________________<br><br>
	<style>#rectangle{
    width:20;
    height:20px;
    background:white;
	border: 1px solid;
	float:left;
}</style>
	<div style="text-align:left;"><div id="rectangle"></div>Inspected, verified and found in order as to quantity and specifications</div>
	
	__________________________________________<br>
	Inspection Officer/Inspection Committee
	</td><td style="text-align:center;font-weight:bold;" colspan="3">
	Date Received: ______________________<br>
	<div style="text-align:left;"><div id="rectangle"></div> Complete</div>
	<br>
	<div style="text-align:left;"><div id="rectangle"></div> Partial (pls. specify quantity)</div>
	__________________________________________<br>
	Supply and/or Property Custodian
	
	</td></tr>
	
	
	
	
</table>



                <!-- END Input States Content -->
            </div>
            <!-- END Input States Block -->
								
								
								
                            </div>
                            <div class="modal-footer">
							
                                <button type="button" id="printpo" class="btn btn-effect-ripple btn-primary" onclick="printinspection();" ><i class="fa fa-print"></i> Print</button>
								
                                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Regular Modal -->
<!-- Regular Modal -->
                <div id="editproperty" class="modal bg" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header-tabs">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <ul class="nav nav-tabs" data-toggle="tabs">
                                                        <li class="active"><a href="#modal-tabs-home"><i class="fa fa-home"></i> Basic Info</a></li>
														<li><a href="#modal-tabs-users"><i class="fa fa-home"></i> Users</a></li>
														<li><a href="#modal-tabs-remarks"><i class="fa fa-home"></i> Remarks</a></li>
                                                        <li><a href="#modal-tabs-settings" data-toggle="tooltip" title="Settings"><i class="gi gi-settings"></i> Peripheral Details</a></li>
                                                    </ul>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="modal-tabs-home">
														<!-- basic info content -->
						<label class="col-md-2 control-label" for="state-normal">Property No</label>
                        <div class="col-md-3">
                            <input type="text" id="receivedate" class="form-control" >
                        </div>
						<label class="col-md-2 control-label" for="state-normal">Particulars</label>
                        <div class="col-md-3">
                            <input type="text" id="receivedate" class="form-control" >
                        </div>
						<div class="row"></div>
						<label class="col-md-2 control-label" for="state-normal">Date Acquired</label>
                        <div class="col-md-3">
                            <input type="text" id="receivedate" class="form-control" >
                        </div>
						<label class="col-md-2 control-label" for="state-normal">Unit Price</label>
                        <div class="col-md-3">
                            <input type="text" id="receivedate" class="form-control" >
                        </div>
						
<div class="row"></div>
						
						<label class="col-md-2 control-label" for="state-normal">Account Code</label>
                        <div class="col-md-3">
                            <input type="text" id="receivedate" class="form-control" >
                        </div>	
						<label class="col-md-2 control-label" for="state-normal">Service</label>
                        <div class="col-md-3">
                            <input type="text" id="receivedate" class="form-control" >
                        </div>						
						
							
<div class="row"></div>
						<label class="col-md-2 control-label" for="state-normal">Tag No</label>
                        <div class="col-md-3">
                            <input type="text" id="receivedate" class="form-control" >
                        </div>
						<label class="col-md-2 control-label" for="state-normal">Supplier</label>
                        <div class="col-md-3">
                            <input type="text" id="receivedate" class="form-control" >
                        </div>
<div class="row"></div>
						<label class="col-md-2 control-label" for="state-normal">Barcode</label>
                        <div class="col-md-3">
                            <input type="text" id="receivedate" class="form-control" >
                        </div>						
<div class="row">&nbsp;</div>				
<div class="row">&nbsp;</div>				
<label class="col-md-9 control-label" for="state-normal"></label>		
							 
<button type="button" class="btn btn-effect-ripple btn-primary">Save</button>
<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
							
														
														</div>
														
														
														
<div class="tab-pane" id="modal-tabs-users">
<label class="col-md-2 control-label" for="state-normal">Issued To</label>
                        <div class="col-md-3">
                            <input type="text" id="receivedate" class="form-control" >
                        </div>
						<label class="col-md-2 control-label" for="state-normal">End User</label>
                        <div class="col-md-3">
                            <input type="text" id="receivedate" class="form-control" >
                        </div>
<div class="row"></div>
						<label class="col-md-2 control-label" for="state-normal">Employee</label>
                        <div class="col-md-3">
                            <input type="text" id="receivedate" class="form-control" >
                        </div>
						
						
			<div class="row">&nbsp;</div>	
			<div class="row">&nbsp;</div>	

<table id="example-datatable" class="table table-striped table-bordered table-vcenter">
			<thead>
				<tr>
					
					<th>Property No.</th>
				</tr>
			</thead>
		<tbody></tbody>
</table>			
			<div class="row">&nbsp;</div>				
			<label class="col-md-9 control-label" for="state-normal"></label>		
										 
			<button type="button" class="btn btn-effect-ripple btn-primary">Save</button>
			<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>

</div>
<div class="tab-pane" id="modal-tabs-remarks">
<label class="col-md-2 control-label" for="state-normal">Whereabout</label>
                        <div class="col-md-3">
                            <input type="text" id="receivedate" class="form-control" >
                        </div>	
		<div class="row">&nbsp;</div>					
<label class="col-md-2 control-label" for="state-normal">Remarks</label>
                        <div class="col-md-6">
                           <textarea class="form-control"></textarea>
                        </div>	
						
			<div class="row">&nbsp;</div>	
<table id="example-datatable2" class="table table-striped table-bordered table-vcenter">
			<thead>
				<tr>
					
					<th>Log</th>
				</tr>
			</thead>
		<tbody></tbody>
</table>	
			
			<div class="row">&nbsp;</div>				
			<label class="col-md-9 control-label" for="state-normal"></label>		
										 
			<button type="button" class="btn btn-effect-ripple btn-primary">Save</button>
			<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>

</div>
<div class="tab-pane" id="modal-tabs-settings">
<!-- peripheral details -->

	<label class="col-md-2 control-label" for="state-normal">Processor</label>
                        <div class="col-md-3">
                            <input type="text" id="receivedate" class="form-control" >
                        </div>
						<label class="col-md-2 control-label" for="state-normal">RAM</label>
                        <div class="col-md-3">
                            <input type="text" id="receivedate" class="form-control" >
                        </div>
						<div class="row"></div>
						<label class="col-md-2 control-label" for="state-normal">Hard Disk</label>
                        <div class="col-md-3">
                            <input type="text" id="receivedate" class="form-control" >
                        </div>
						<label class="col-md-2 control-label" for="state-normal">Operating System</label>
                        <div class="col-md-3">
                            <input type="text" id="receivedate" class="form-control" >
                        </div>
						
<div class="row"></div>
						
						<label class="col-md-2 control-label" for="state-normal">Equipment S/N</label>
                        <div class="col-md-3">
                            <input type="text" id="receivedate" class="form-control" >
                        </div>	
						<label class="col-md-2 control-label" for="state-normal">Processor S/N</label>
                        <div class="col-md-3">
                            <input type="text" id="receivedate" class="form-control" >
                        </div>	
<div class="row"></div>
						
						<label class="col-md-2 control-label" for="state-normal">Monitor S/N</label>
                        <div class="col-md-3">
                            <input type="text" id="receivedate" class="form-control" >
                        </div>	
						<label class="col-md-2 control-label" for="state-normal">Keyboard S/N</label>
                        <div class="col-md-3">
                            <input type="text" id="receivedate" class="form-control" >
                        </div>	
<div class="row"></div>
						
						<label class="col-md-2 control-label" for="state-normal">Mouse S/N</label>
                        <div class="col-md-3">
                            <input type="text" id="receivedate" class="form-control" >
                        </div>	

						
						
						
						
						
			<div class="row">&nbsp;</div>				
			<div class="row">&nbsp;</div>				
			<label class="col-md-9 control-label" for="state-normal"></label>		
										 
			<button type="button" class="btn btn-effect-ripple btn-primary">Save</button>
			<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>

</div> <!-- end peripheral -->




                                                    </div>
                                                </div>
												
												<div class="row"></div>
                                                <div class="modal-footer">
                                                   
                                                    
                                                </div>
                                            </div>
                                        </div>
                </div>

<!--end modal-->				
				
				
			<div class="block full">
				<div class="block-title">
				
					<h5>Asset Details</h5>
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
					<input type="hidden" id="deliveryid" name="state-normal" class="form-control" value="<?php echo $assetid;?>" >
					<label class="col-md-2 control-label" for="state-normal">Particulars</label>
                        <div class="col-md-4">
                            <textarea class="form-control" disabled><?php echo $assetdetails['asset_particulars'];?></textarea>
                        </div>
						<label class="col-md-1 control-label" for="state-normal">Article</label>
                        <div class="col-md-2">
						
                            <select id="supplierid" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." disabled>
							<?php
							foreach ($article as $article_list):
								
							if($article_list['articlename']==$assetdetails['asset_article']){
									$selectedarticle = "selected='selected'";
								}else{
									$selectedarticle = "";
								}
								echo "<option value='".$article_list['articlename']."' $selectedarticle>".$article_list['articlename']."</option>";
							
							endforeach;
							?>
							</select>
                        </div>
						
						
						
						<label class="col-md-1 control-label" for="state-normal">Classification</label>
                        <div class="col-md-2">
                            <select id="aprid" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." disabled>
							
							<option value=""></option>
				<?php
							foreach ($classification as $class_list):
								
							if($class_list['classification']==$assetdetails['asset_classification']){
									$selectedclass = "selected='selected'";
								}else{
									$selectedclass = "";
								}
								echo "<option value='".$class_list['classification']."' $selectedclass>".$class_list['classification']."</option>";
							
							endforeach;
							?>
						</select>
							
                        </div>
						
						
						<div class="row"></div>
						 <div class="col-md-2 pull-right">
								<button id="savedrbutton" class='btn btn-primary' title='Save PR Details' onclick="updatedrdetails();" disabled><i class="fa fa-floppy-o"></i> Save</button>
						 </div>
						
						
						 
						   

                    </div>
				</form>
				

				<div class="row"><br></div>
				
				<div class="row" id="suppliertabs">
				
				
		<!-- Block Tabs -->
		<div class="block full">
			<!-- Block Tabs Title -->
			<div class="block-title">
				<div class="block-options pull-right">
					<a href="javascript:void(0)" class="btn btn-effect-ripple btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
				</div>
				<ul class="nav nav-tabs" data-toggle="tabs">
					<li class="active"><a href="#block-tabs-home">Delivery</a></li>
					
					<?php
					/*
					foreach ($canvasslist as $canvass_list):
		
							echo "<li><a href='#tab".$canvass_list['supplierid']."'>".$canvass_list['supName']."</a></li>";
	
					endforeach;
					*/
					?>
					
					
					
				</ul>
			</div>
			<!-- END Block Tabs Title -->

			<!-- Tabs Content -->
			<div class="tab-content">
				<div class="tab-pane active" id="block-tabs-home">
				
				<div class="table-responsive">
					 <table id="example-datatable3" class="table table-striped table-bordered table-vcenter">
                                    <thead>
                                        <tr>
                                            
                                            <th>Property No.</th>
                                            <th>Particulars</th>
                                            <th>Date Acquired</th>
                                            <th>Unit Price</th>
                                            <th>Issued To</th>
                                            <th>End User</th>
                                            <th>Service</th>
                                           
											
                                            <th style="width: 120px;">Tag</th>
											<th style="width: 120px;">Supplier</th>
											<th style="width: 120px;">Barcode</th>
                                            <th style="width: 100px;" class="text-center"><i class="fa fa-flash"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									
			
				foreach ($equipments as $equiplist):
				
				echo "<tr class='odd gradeX'>";
				echo "<td>".$equiplist['propertyNo']."</td>";
				echo "<td>".$equiplist['particulars']."</td>";
				echo "<td>".$equiplist['dateacquired']."</td>";
				echo "<td>".$equiplist['totalcost']."</td>";
				echo "<td>".$equiplist['issuedto']."</td>";
				echo "<td>".$equiplist['enduser']."</td>";
				echo "<td>".$equiplist['service']."</td>";
				//echo "<td>".$equiplist['whereabout']."</td>";
				//echo "<td>".$equiplist['remarks']."</td>";
				echo "<td>".$equiplist['inventorytag']."</td>";
				echo "<td>".$equiplist['supName']."</td>";
				echo "<td>".$equiplist['barcode']."</td>";
			
				echo "<td class='center'> 
					
					<button  class='btn btn-primary' title='Edit' href='#editproperty' data-toggle='modal' onclick='editequipment(".$equiplist['equipNo'].");'><i class='fa fa-pencil'></i></button>
					
					<button class='btn btn-danger notification' title='Delete User' id='notification' onClick='deletedritem(".$equiplist['equipNo'].");'><i class='fa fa-times'></i></button>
				</td>";
				echo "</tr>";
				
				endforeach;
				
				?>
									</tbody>
					</table>
					 </div>
				
				
					
				</div>
				
				
		<?php
		/*
		//tabs for suppliers
			foreach ($canvasslist as $canvass_list):
				$supplierid = $canvass_list['supplierid'];
				$suppliername = $canvass_list['supName'];
				
					echo "<div class='tab-pane' id='tab".$canvass_list['supplierid']."'>";
					$canvassitems = $this->purchaserequest_model->getcanvasslist_items($supplierid,$prid);
					echo "<h4>$suppliername Price List</h4>";
					echo "<button class='btn btn-danger notification pull-right' onClick='removesupplier(".$supplierid.")'><i class='fa fa-times'></i> Remove Supplier</button>";
					echo "<table id='supplier-".$canvass_list['supplierid']."' class='table table-striped table-bordered table-vcenter'>";
					echo "<thead>
                                        <tr>
                                            
                                            <th>QTY</th>
											<th style='width: 120px;'>Unit of Issue</th>
                                            <th style='width: 420px;'>DESCRIPTION</th>
											<th style='width: 120px;'>Unit Price</th>
											<th style='width: 120px;'>Total Price</th>
                                            <th style='width: 320px;' class='text-center'><i class='fa fa-flash'></i></th>
                                        </tr>
                                    </thead>";
						echo "<tbody>";	
						$totalamount2 = 0;
			foreach ($canvassitems as $canvass_items):	
				$amount2 = $canvass_items['qty'] * $canvass_items['unitprice'];	
				$totalamount2=$totalamount2+$amount2;				
									echo "<tr class='odd gradeX'>";
				echo "<td>".$canvass_items['qty']."</td>";
				echo "<td>".$canvass_items['unit']."</td>";
				echo "<td>".$canvass_items['description']."</td>";
				echo "<td style='width:210px;'><input type='text' style='width:80px;text-align:center;' value='".$canvass_items['unitprice']."' id='unitprice-".$canvass_items['aocid']."'> </td>";
				echo "<td>".number_format($amount2,2)."</td>";
				echo "<td class='center'> 
					
					<button  class='btn btn-primary' title='Save Price' onClick='updatecanvassprice(".$canvass_items['aocid'].",".$canvass_items['supplierid'].")'><i class='gi gi-floppy_saved'></i></button>
					
					
				</td>";
				endforeach;
			echo "</tbody>";
						
						
		echo "</table>";
		
		echo "<div class='row' id='totalamount".$canvass_items['supplierid']."'>
					<h4 class='sub-header'></h4>
					<div class='col-md-9'>
						<strong class='pull-right'><h2>Total Amount:";
		echo number_format($totalamount2,2);
			echo "</h2></strong></div></div>";
		
		echo "</div>";

endforeach;
			*/
		?>
				
				
				
				
			<!-- END Tabs Content -->
		</div>
		<!-- END Block Tabs -->
					 
				
				</div><!-- end row-->
				
				
				
				
			</div> <!-- end block -->
	   </div> <!-- end column -->
</div> <!-- end row -->
			
			
			

			
		</div>
		<!-- END Page Content -->
	</div>
	<!-- END Main Container -->
</div>
<!-- END Page Container -->

