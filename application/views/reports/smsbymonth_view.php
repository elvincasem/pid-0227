
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
                                        
                                        <h2>SMS by Month</h2>
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
							

                    </div>
                    <!-- END Page Content -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
       
