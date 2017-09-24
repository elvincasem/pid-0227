
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
                                    <form action="smsbymonth_view" method="post" class="form-horizontal form-bordered" onsubmit="return true;">
                                        <!-- Datepicker for Bootstrap (classes are initialized in js/app.js -> uiInit()), for extra usage examples you can check out http://eternicode.github.io/bootstrap-datepicker -->
                                        <div class="form-group">
										<label class="col-md-3 control-label" for="example-daterange1">Year</label>
                                            <div class="col-md-7">
                                               <select id="yearlist" name="yearlist" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
										
										
										<?php
											foreach($year_list as $years):
												echo "<option value='".$years['ticket_year']."'>".$years['ticket_year']."</option>";
											endforeach;
										
										?>
										
										
										</select>
                                            </div>
											<div class="row">&nbsp;</div>
											<label class="col-md-3 control-label" for="example-daterange1">Month</label>
											<div class="col-md-7">
										<select id="monthvalue" name="monthvalue" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
										<option value="All">All</option>
										
										<?php
											foreach($month_list as $months):
												echo "<option value='".$months['ticket_month']."'>".mdate('%F',strtotime($months['atime_stamp']))."</option>";
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
			
			<h5>SMS by Month</h5>
			<a type="button" class="pull-right btn btn-md btn-primary" href="<?=base_url()?>reports/smsbymonthdownload/<?php echo $smsyear_selected;?>/<?php echo $smsmonth_selected;?>">Export Result XLS</a>
			
			<?php //print_r($heidirectory);?>
        </div>
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover">
                <thead>
                    <tr>
						
                        <th>Year</th>
						<th>Month</th>
                        <th>SMS Count</th>
                       
                    </tr>
                </thead>
                <tbody>
				<?php
				$total_sms =0;
				foreach ($tickets as $tickets_list):
				//$heiname = strtoupper($hei['instname']);
				echo "<tr class='odd gradeX'>";
				echo "<td>".$tickets_list['yearly']."</td>";
				echo "<td>".mdate('%F',strtotime($tickets_list['atime_stamp']))."</td>";
				echo "<td>".$tickets_list['smssent']."</td>";
				echo "</tr>";
				$total_sms+=$tickets_list['smssent'];
				endforeach;
				
				?>
				
				
				
				
                    
                </tbody>
            </table>
        </div>
    </div>
				 <div class="row">
                            <!-- Simple Stats Widgets -->
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget">
                                    <div class="widget-content widget-content-mini themed-background-dark-social">
                                       
                                        <strong class="text-light-op">Total</strong>
                                    </div>
                                    <div class="widget-content themed-background-social clearfix">
                                        <div class="widget-icon pull-right">
                                            <i class="gi gi-envelope text-light-op"></i>
                                        </div>
                                        <h2 class="widget-heading h3 text-light"><strong><?php echo number_format($total_sms,0);?></strong></h2>
                                        <span class="text-light-op">SMS Sent</span>
                                    </div>
                                </a>
                            </div>
				</div><!-- end row -->


                        
                    </div>
                    <!-- END Page Content -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
       
