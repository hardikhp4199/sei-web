<div class="navbar-wrapper">
            <div class="m-header">
                <a href="#" class="b-brand">
                    <!-- ========   change your logo hear   ============ -->
                    <img src="admin/images/sei_group.png" alt="" class="logo logo-lg" height="80" />
                    <img src="admin/images/sei_group.png" alt="" class="logo logo-sm" />
                </a>
            </div>
            <div class="navbar-content">
                <ul class="nxl-navbar">
                    <li class="nxl-item nxl-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="{{ url('/dashboard') }}" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-airplay"></i></span>
                            <span class="nxl-mtext">Dashboards</span>
                        </a>
                      
                    </li>

                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-layout"></i></span>
                            <span class="nxl-mtext">Masters</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu" style="">
                            <li class="nxl-item"><a class="nxl-link" href="{{ url('/service') }}">Service Category</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ url('/subservice') }}">Sub Services</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ url('/activities') }}">Activities</a></li>
                        </ul>
                    </li>



                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-users"></i></span>
                            <span class="nxl-mtext">Client</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="/client-list">Client List</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="/add_client">Add Customers</a></li>
                            
                        </ul>
                    </li>
                   
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-briefcase"></i></span>
                            <span class="nxl-mtext">Expert</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="venderlist">Expert List</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="/add_expert">New  Vendor</a></li>
                        </ul>
                    </li>

                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-at-sign"></i></span>
                            <span class="nxl-mtext">Offer/Quote</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="{{ url('/quotation') }}">Quotation</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ url('/quotations/create') }}">Quotation Create</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ url('/quotationview') }}">Quotation View</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ url('/quotationedit') }}">Quotation Edit</a></li>

                        </ul>
                    </li>


                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-cast"></i></span>
                            <span class="nxl-mtext">Reports</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <!-- <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="#">Client List</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="#">Service List</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="#">Project List</a></li>
                            
                        </ul> -->
                    </li>
                   
                    
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-dollar-sign"></i></span>
                            <span class="nxl-mtext">Payment</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <!-- <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="#">Payment</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="#">Invoice View</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="#">Invoice Create</a></li>
                        </ul> -->
                    </li>
                    
                    
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-settings"></i></span>
                            <span class="nxl-mtext">Settings</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <!-- <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="#">General</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="#">Notification</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="#">Miscellaneous</a></li>
                        </ul> -->
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-power"></i></span>
                            <span class="nxl-mtext">Authentication</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <!-- <ul class="nxl-submenu">
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Login</span>
                                </a>
                             
                            </li>
                           
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Reset Pass</span>
                                </a>
                             
                            </li>
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Verify OTP</span>
                                </a>
                             
                            </li>
                      
                        </ul> -->
                    </li>
                  
                </ul>
                
            </div>
        </div>