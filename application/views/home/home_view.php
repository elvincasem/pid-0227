
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
										<h2 class="widget-heading h3 text-danger">
                                            <strong><span data-toggle="counter" data-to=""><?php 
										echo $orverdueticketcount['totaloverdue'];
										?></span></strong>
                                        </h2>
                                        <span class="text-muted">Overdue Tickets</span>
                                    </div>
                                </a>
                            </div>
							
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget">
                                    <div class="widget-content widget-content-mini text-right clearfix">
                                        <div class="widget-icon pull-left themed-background-danger">
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
						<table id="example-datatable" class="table table-striped table-borderless remove-margin">
						<thead>
							<th>Customer</th>
							<th class="text-center">Ticket #</th>
						</thead>
							<tbody>
							<?php
							
								foreach($opentickets as $open_ticket):
								
								echo "<tr>";
								echo "<td><a href='ticket/details/".$open_ticket['ticketid']."' class='text-black'>".$open_ticket['cfname']." ".$open_ticket['clname']."</a></td>";
								echo "<td class='text-center' ><a href='ticket/details/".$open_ticket['ticketid']."' class='text-black'><span class='text-muted'>Ticket#:".$open_ticket['ticketid']."</span></td>";
								echo "</a></tr>";
								
								endforeach;
							
							?>
							
								
								
							</tbody>
						</table>
					</div>
								</div>
							</div>
	
			<div class="col-sm-6 hidden">
					<div class="widget" >
						<div class="widget-content themed-background-danger text-light-op">
							<i class="gi gi-warning_sign fa-chevron-right"></i> <strong> Overdue Tickets</strong>
						</div>
									
									
					<div class="widget-content widget-content-full">
						<table id="example-datatable2" class="table table-striped table-borderless remove-margin">
						<thead>
							<th>Customer</th>
							<th class="text-center">Ticket</th>
							<!-- <th class="text-center">Due Date</th> -->
						</thead>
							<tbody>
								
								
							</tbody>
						</table>
					</div>
								</div>
							</div>
							
				<div class="col-sm-6">
					<div class="widget" >
						<div class="widget-content themed-background-danger text-light-op">
							<i class="gi gi-file fa-chevron-right"></i> <strong> RMA Tickets</strong>
						</div>
									
									
					<div class="widget-content widget-content-full">
						<table id="example-datatable4" class="table table-striped table-borderless remove-margin">
						<thead>
							<th>Customer</th>
							<th class="text-center">Ticket</th>
							
						</thead>
							<tbody>
								<?php
								foreach($rmatickets as $rma_ticket):
								
								echo "<tr>";
								echo "<td><a href='ticket/details/".$rma_ticket['ticketid']."' class='text-black'>".$rma_ticket['cfname']." ".$rma_ticket['clname']."</a></td>";
								echo "<td class='text-center' ><a href='ticket/details/".$rma_ticket['ticketid']."' class='text-black'><span class='text-muted'>Ticket#:".$rma_ticket['ticketid']."</span></td>";
								echo "</a></tr>";
								
								endforeach;
							
							?>
								
								
							</tbody>
						</table>
					</div>
								</div>
				</div>
				<div class="col-sm-6">
					<div class="widget" >
						<div class="widget-content themed-background-warning text-light-op">
							<i class="gi gi-file fa-chevron-right"></i> <strong> Pickup Tickets</strong>
						</div>
									
									
					<div class="widget-content widget-content-full">
						<table id="example-datatable5" class="table table-striped table-borderless remove-margin">
						<thead>
							<th>Customer</th>
							<th class="text-center">Ticket</th>
							
						</thead>
							<tbody>
								<?php
								foreach($pickuptickets as $pickup_ticket):
								
								echo "<tr>";
								echo "<td><a href='ticket/details/".$pickup_ticket['ticketid']."' class='text-black'>".$pickup_ticket['cfname']." ".$pickup_ticket['clname']."</a></td>";
								echo "<td class='text-center' ><a href='ticket/details/".$pickup_ticket['ticketid']."' class='text-black'><span class='text-muted'>Ticket#:".$pickup_ticket['ticketid']."</span></td>";
								echo "</a></tr>";
								
								endforeach;
							
							?>
								
								
							</tbody>
						</table>
					</div>
								</div>
				</div>
							
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
       
