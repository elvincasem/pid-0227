<!-- Main Sidebar -->
                <div id="sidebar">
                    <!-- Sidebar Brand -->
                    <div id="sidebar-brand" class="themed-background">
                        <a href="<?=base_url()?>home" class="sidebar-title sidebar-nav-mini-hide">
						<i class="gi gi-group"></i>
						<strong>PC4Me Helpdesk</strong>
                            
                        </a>
                    </div>
                    <!-- END Sidebar Brand -->

                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            <!-- Sidebar Navigation -->
                            <ul class="sidebar-nav">
								<li>
                                    <a href="<?=base_url()?>home"><i class="gi gi-compass sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span></a>
                                </li>
                                <li class="sidebar-separator">
                                    <i class="fa fa-ellipsis-h"></i>
                                </li>
								<!-- Purchases -->
                                <li class="<?php echo $ticketsclass;?>">
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-ruble sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Tickets</span></a>
                                    <ul>
										
                                        <li>
                                            <a href="<?=base_url()?>ticket/add" class="<?php echo $ticketsaddclass;?>">New Ticket</a>
                                        </li>
                                        
                                        <li>
                                            <a href="<?=base_url()?>ticket" class="<?php echo $ticketlistclass;?>">Ticket List</a>
                                        </li>
										<li>
                                            <a href="<?=base_url()?>customers" class="<?php echo $customersclass;?>">Customers</a>
                                        </li>
                                  
										
										
										
									</ul>
								</li>
                               
								<!-- Reports -->
								<li class="<?php echo $reportsclass;?>">
                                    <a href="#" class="sidebar-nav-menu "><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-table sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Reports</span></a>
                                    <ul>
										<li class="<?php //echo $userssubclass;?>">
                                            <a href="<?=base_url()?>reports/ticketbycategory" ><i class="gi gi-user sidebar-nav-icon"></i>Ticket by Category</a>
                                        </li>
										<li class="<?php //echo $userssubclass;?>">
                                            <a href="<?=base_url()?>reports/ticketbyagent" ><i class="gi gi-user sidebar-nav-icon"></i>Ticket by Agent</a>
                                        </li>
										
										
										
									</ul>
								</li>
								<!-- Settings-->
								<li class="<?php echo $settingsclass;?>">
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-gear sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Settings</span></a>
                                    <ul>
										
									
										
										<li>
                                            <a  class="<?php echo $userssubclass;?>" href="<?=base_url()?>users" ><i class="gi gi-user sidebar-nav-icon"></i>Users</a>
                                        </li>
										<li >
                                            <a class="<?php echo $departmentsclass;?>" href="<?=base_url()?>departments" ><i class="gi gi-settings sidebar-nav-icon"></i>Departments</a>
                                        </li>
										
										<li>
                                            <a  class="<?php echo $categoryclass;?>" href="<?=base_url()?>category" ><i class="gi gi-group sidebar-nav-icon"></i>Category</a>
                                        </li>
										<li>
                                            <a  class="<?php echo $priorityclass;?>" href="<?=base_url()?>priority" ><i class="gi gi-sort-by-attributes"></i> Priority</a>
                                        </li>
										<li>
                                            <a  class="<?php echo $templateclass;?>" href="<?=base_url()?>template" ><i class="fa fa-files-o sidebar-nav-icon"></i>Template</a>
                                        </li>
										
										
										
									</ul>
								</li>
								
															
										
                            </ul>
							
							
							
                            <!-- END Sidebar Navigation -->

                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->

                    <!-- Sidebar Extra Info -->
                    <div id="sidebar-extra-info" class="sidebar-content sidebar-nav-mini-hide">
                        
                        <div class="text-center">
                            
                            <small> &copy; <a href="http://evenlyten.com" target="_blank">Helpdesk System</a></small>
                        </div>
                    </div>
                    <!-- END Sidebar Extra Info -->
                </div>
                <!-- END Main Sidebar -->