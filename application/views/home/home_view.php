
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
                        <!-- First Row -->
                        <div class="row">
                            <!-- Simple Stats Widgets -->
                            <div class="col-sm-6 col-lg-3">
                                <a href="#" class="widget">
                                    <div class="widget-content widget-content-mini text-right clearfix">
                                        <div class="widget-icon pull-left themed-background">
                                            <i class="gi gi-group text-light-op"></i>
                                        </div>
                                        <h2 class="widget-heading h3">
                                            <strong><span data-toggle="counter" data-to=""><?php 
										echo $customerscount['totalcustomers'];
										?></span></strong>
                                        </h2>
                                        <span class="text-muted">Customers </span>
                                    </div>
                                </a>
								
								
                            </div>
							
							
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget">
                                    <div class="widget-content widget-content-mini text-right clearfix">
                                        <div class="widget-icon pull-left themed-background-success">
                                            <i class="gi gi-folder_open text-light-op"></i>
                                        </div>
                                        <h2 class="widget-heading h3 text-success">
                                            <strong><span data-toggle="counter" data-to=""><?php 
										echo $openticket['totalopen'];
										?></span></strong>
                                        </h2>
                                        <span class="text-muted">Open Tickets</span>
                                    </div>
                                </a>
                            </div>
							
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget">
                                    <div class="widget-content widget-content-mini text-right clearfix">
                                        <div class="widget-icon pull-left themed-background-danger">
                                            <i class="gi gi-warning_sign text-light-op"></i>
                                        </div>
                                        <h2 class="widget-heading h3 text-warning">
                                            <strong><span data-toggle="counter" data-to="<?php 
										//echo $totalprograms->programtotal;
										?>">0</span></strong>
                                        </h2>
                                        <span class="text-muted">Overdue Tickets</span>
                                    </div>
                                </a>
                            </div>
							
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget">
                                    <div class="widget-content widget-content-mini text-right clearfix">
                                        <div class="widget-icon pull-left themed-background-warning">
                                            <i class="gi gi-file text-light-op"></i>
                                        </div>
                                        <h2 class="widget-heading h3 text-danger">
                                            <strong><span data-toggle="counter" data-to=""><?php 
										echo $rmaticket['totalrma'];
										?></span></strong>
                                        </h2>
                                        <span class="text-muted">RMA Tickets</span>
                                    </div>
                                </a>
                            </div>
							
							<div class="row"></div>
							<div class="col-sm-6">
								<div class="widget" >
									<div class="widget-content themed-background-success text-light-op">
										<i class="gi gi-folder_open fa-chevron-right"></i> <strong> Open Tickets</strong>
									</div>
									
									
					<div class="widget-content widget-content-full">
						<table class="table table-striped table-borderless remove-margin">
						<thead>
							<th>Title</th>
							<th class="text-center">Ticket #</th>
						</thead>
							<tbody>
								<tr>
									<td><a href="javascript:void(0)" class="text-black">No LCD Display</a></td>
									<td class="text-center" ><span class="text-muted">Ticket#: 1</span></td>
								</tr>
								<tr>
									<td><a href="javascript:void(0)" class="text-black">Ink waste pad cleaning</a></td>
									<td class="text-center"><span class="text-muted">Ticket#: 2</span></td>
								</tr>
								<tr>
									<td><a href="javascript:void(0)" class="text-black">Blue Screen while working on a Document file</a></td>
									<td class="text-center"><span class="text-muted">Ticket #: 3</span></td>
								</tr>
								
							</tbody>
						</table>
					</div>
								</div>
							</div>
	
			<div class="col-sm-6">
					<div class="widget" >
						<div class="widget-content themed-background-danger text-light-op">
							<i class="gi gi-warning_sign fa-chevron-right"></i> <strong> Overdue Tickets</strong>
						</div>
									
									
					<div class="widget-content widget-content-full">
						<table class="table table-striped table-borderless remove-margin">
						<thead>
							<th>Title</th>
							<th class="text-center">Ticket</th>
							<th class="text-center">Due Date</th>
						</thead>
							<tbody>
								<tr>
									<td><a href="javascript:void(0)" class="text-black">No LCD Display</a></td>
									<td class="text-center" style="width: 80px;"><span class="text-muted">Ticket#: 1</span></td>
									<td class="text-center"><span class="text-muted">March 1, 2017</span></td>
								</tr>
								<tr>
									<td><a href="javascript:void(0)" class="text-black">Ink waste pad cleaning</a></td>
									<td class="text-center" style="width: 80px;"><span class="text-muted">Ticket#: 2</span></td>
									<td class="text-center"><span class="text-muted">March 1, 2017</span></td>
								</tr>
								<tr>
									<td><a href="javascript:void(0)" class="text-black">Blue Screen while working on a Document file</a></td>
									<td class="text-center" style="width: 80px;"><span class="text-muted">Ticket #: 3</span></td>
									<td class="text-center"><span class="text-muted">March 1, 2017</span></td>
								</tr>
								
							</tbody>
						</table>
					</div>
								</div>
							</div>
							
				<div class="col-sm-6">
					<div class="widget" >
						<div class="widget-content themed-background-warning text-light-op">
							<i class="gi gi-file fa-chevron-right"></i> <strong> RMA Tickets</strong>
						</div>
									
									
					<div class="widget-content widget-content-full">
						<table class="table table-striped table-borderless remove-margin">
							<tbody>
								<tr>
									<td><a href="javascript:void(0)" class="text-black">No LCD Display</a></td>
									<td class="text-center" style="width: 80px;"><span class="text-muted">Ticket#: 1</span></td>
									<td class="text-center"><span class="text-muted">John Doe</span></td>
								</tr>
								
								
							</tbody>
						</table>
					</div>
								</div>
							</div>
							
							
							<!--<div class="col-sm-6">
                                        <a href="javascript:void(0)" class="widget">
                                            <div class="widget-content themed-background-info text-light-op">
                                                <i class="fa fa-fw fa-chevron-right"></i> <strong>Satisfied with the Service Received</strong>
                                            </div>
                                            <div class="widget-content themed-background-muted text-center">
                                                <i class="fa fa-thumbs-o-up fa-3x text-info"></i>
												<h3>Strongly Agree</h3>
                                            </div>
                                            <div class="widget-content text-center">
                                                <strong><h2><span data-toggle="counter" data-to="<?php 
										//echo $totalstrongly->totalstrong;
										?>"></span> / <?php 
										//echo $totalsatisfied->totalsatisfied;
										?></strong></h2>
                                            </div>
                                        </a>
							</div> -->
							
							<div class="row">
							</div>
							 
                        </div>
                        <!-- END First Row -->

						


                        
                    </div>
                    <!-- END Page Content -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
       
