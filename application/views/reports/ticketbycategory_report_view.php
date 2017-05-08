
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

                      
                            
							<div class="row">
							</div>
							  <!-- Datepicker Block -->
                                <div class="block">
                                    <!-- Datepicker Title -->
                                    <div class="block-title">
                                        
                                        <h2>Filter</h2>
                                    </div>
                                    <!-- END Datepicker Title -->

                                    <!-- Datepicker Content -->
                                    <form action="ticketbycategory_view" method="post" class="form-horizontal form-bordered" onsubmit="return true;">
                                        <!-- Datepicker for Bootstrap (classes are initialized in js/app.js -> uiInit()), for extra usage examples you can check out http://eternicode.github.io/bootstrap-datepicker -->
                                        <div class="form-group">
										<label class="col-md-3 control-label" for="example-daterange1">Date Range</label>
                                            <div class="col-md-7">
                                                <div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
                                                    <input type="text" id="date1" name="date1" class="form-control" placeholder="From" value="<?php echo $startdate;?>">
                                                    <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                                                    <input type="text" id="date2" name="date2" class="form-control" placeholder="To" value="<?php echo $enddate;?>">
                                                </div>
                                            </div>
											<div class="row">&nbsp;</div>
											<label class="col-md-3 control-label" for="example-daterange1">Category</label>
											<div class="col-md-7">
										<select id="categoryvalue" name="categoryvalue" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
										<?php echo "<option value='$categoryvalue'>$categoryvalue</option>";?>
										<option value="All">All</option>
										
										<?php
											foreach($categorylist as $categories):
												echo "<option value='".$categories['categoryvalue']."'>".$categories['categoryvalue']."</option>";
											endforeach;
										
										?>
										
										
										</select>
											</div>
											
											
											
											
											
                                        </div>
                                        
                                        <div class="form-group form-actions">
                                            <div class="col-md-12 col-md-offset-6">
                                                <button type="submit" class="btn btn-effect-ripple btn-primary">Generate</button>
                                               
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Datepicker Content -->
                                </div>
                                <!-- END Datepicker Block -->
							
		<div class="block full">
        <div class="block-title">
			
			<h5>Purchase Requests</h5>
			<a type="button" class="pull-right btn btn-md btn-primary" href="<?=base_url()?>reports/ticketbycategorydownload/<?php echo $startdate;?>/<?php echo $enddate;?>/<?php echo $categoryvalue;?>">Export Result XLS</a>
			
			<?php //print_r($heidirectory);?>
        </div>
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover">
                <thead>
                    <tr>
						
                        <th>Date Added</th>
						<th>Ticket #</th>
                        <th>Problem</th>
                        <th>Customer</th>
                        <th>Agent</th>
                        <th>Status</th>
						<th>Category</th>
						<th>Priority</th>
                    </tr>
                </thead>
                <tbody>
				<?php
				
				foreach ($tickets as $tickets_list):
				//$heiname = strtoupper($hei['instname']);
				echo "<tr class='odd gradeX'>";
				
				
				echo "<td>".mdate('%F %d, %Y',strtotime($tickets_list['time_stamp']))."</td>";
				echo "<td> Ticket #: ".$tickets_list['ticketid']."</td>";
				echo "<td>".$tickets_list['problem']."</td>";
				echo "<td>".$tickets_list['cfname']." ".$tickets_list['clname']."</td>";
				echo "<td>".$tickets_list['name']."</td>";
				echo "<td>".$tickets_list['status']."</td>";
				echo "<td>".$tickets_list['categoryid']."</td>";
				echo "<td>".$tickets_list['priority']."</td>";
				
			
				
				echo "</tr>";
				
				endforeach;
				
				?>
				
				
				
				
                    
                </tbody>
            </table>
        </div>
    </div>
						


                        
                    </div>
                    <!-- END Page Content -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
       
