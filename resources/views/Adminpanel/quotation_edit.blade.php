<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="theme_ocean">
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>Expert || Quotation Create</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/images/favicon.ico') }}">
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap.min.css') }}">
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/tagify.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/tagify-data.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/quill.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/select2-theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/datepicker.min.css') }}">
    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/theme.min.css') }}">
    <!--! END: Custom CSS-->
    <!--! HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries !-->
    <!--! WARNING: Respond.js doesn"t work if you view the page via file: !-->
    <!--[if lt IE 9]>
			<script src="https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https:oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        @include('Adminpanel.admin_headerlink')
</head>

<body>

<nav class="nxl-navigation">
    @include('Adminpanel.siderbarmenu')
     
    </nav>
    <!--! [Start] Header !-->
    <header class="nxl-header">
        <div class="header-wrapper">
            <!--! [Start] Header Left !-->
            <div class="header-left d-flex align-items-center gap-4">
                <!--! [Start] nxl-head-mobile-toggler !-->
                <a href="javascript:void(0);" class="nxl-head-mobile-toggler" id="mobile-collapse">
                    <div class="hamburger hamburger--arrowturn">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </a>
                <!--! [Start] nxl-head-mobile-toggler !-->
                <!--! [Start] nxl-navigation-toggle !-->
                <div class="nxl-navigation-toggle">
                    <a href="javascript:void(0);" id="menu-mini-button">
                        <i class="feather-align-left"></i>
                    </a>
                    <a href="javascript:void(0);" id="menu-expend-button" style="display: none">
                        <i class="feather-arrow-right"></i>
                    </a>
                </div>
                <!--! [End] nxl-navigation-toggle !-->
                <!--! [Start] nxl-lavel-mega-menu-toggle !-->
                <div class="nxl-lavel-mega-menu-toggle d-flex d-lg-none">
                    <a href="javascript:void(0);" id="nxl-lavel-mega-menu-open">
                        <i class="feather-align-left"></i>
                    </a>
                </div>
                <!--! [End] nxl-lavel-mega-menu-toggle !-->
                <!--! [Start] nxl-lavel-mega-menu !-->
                <div class="nxl-drp-link nxl-lavel-mega-menu">
                    <div class="nxl-lavel-mega-menu-toggle d-flex d-lg-none">
                        <a href="javascript:void(0)" id="nxl-lavel-mega-menu-hide">
                            <i class="feather-arrow-left me-2"></i>
                            <span>Back</span>
                        </a>
                    </div>
                    <!--! [Start] nxl-lavel-mega-menu-wrapper !-->
                    <div class="nxl-lavel-mega-menu-wrapper d-flex gap-3">
                        <!--! [Start] nxl-lavel-menu !-->
                        <div class="dropdown nxl-h-item nxl-lavel-menu">
                            <a href="javascript:void(0);" class="avatar-text avatar-md bg-primary text-white" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <i class="feather-plus"></i>
                            </a>
                            <div class="dropdown-menu nxl-h-dropdown">
                                <div class="dropdown nxl-level-menu">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="feather-send"></i>
                                            <span>Applications</span>
                                        </span>
                                        <i class="feather-chevron-right ms-auto me-0"></i>
                                    </a>
                                    <div class="dropdown-menu nxl-h-dropdown">
                                        <a href="apps-chat.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Chat</span>
                                        </a>
                                        <a href="apps-email.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Email</span>
                                        </a>
                                        <a href="apps-tasks.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Tasks</span>
                                        </a>
                                        <a href="apps-notes.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Notes</span>
                                        </a>
                                        <a href="apps-storage.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Storage</span>
                                        </a>
                                        <a href="apps-calendar.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Calendar</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <div class="dropdown nxl-level-menu">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="feather-cast"></i>
                                            <span>Reports</span>
                                        </span>
                                        <i class="feather-chevron-right ms-auto me-0"></i>
                                    </a>
                                    <div class="dropdown-menu nxl-h-dropdown">
                                        <a href="reports-sales.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Sales Report</span>
                                        </a>
                                        <a href="reports-leads.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Leads Report</span>
                                        </a>
                                        <a href="reports-project.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Project Report</span>
                                        </a>
                                        <a href="reports-timesheets.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Timesheets Report</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown nxl-level-menu">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="feather-at-sign"></i>
                                            <span>Proposal</span>
                                        </span>
                                        <i class="feather-chevron-right ms-auto me-0"></i>
                                    </a>
                                    <div class="dropdown-menu nxl-h-dropdown">
                                        <a href="proposal.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Proposal</span>
                                        </a>
                                        <a href="proposal-view.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Proposal View</span>
                                        </a>
                                        <a href="proposal-edit.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Proposal Edit</span>
                                        </a>
                                        <a href="proposal-create.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Proposal Create</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown nxl-level-menu">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="feather-dollar-sign"></i>
                                            <span>Payment</span>
                                        </span>
                                        <i class="feather-chevron-right ms-auto me-0"></i>
                                    </a>
                                    <div class="dropdown-menu nxl-h-dropdown">
                                        <a href="payment.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Payment</span>
                                        </a>
                                        <a href="invoice-view.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Invoice View</span>
                                        </a>
                                        <a href="invoice-create.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Invoice Create</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown nxl-level-menu">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="feather-users"></i>
                                            <span>Customers</span>
                                        </span>
                                        <i class="feather-chevron-right ms-auto me-0"></i>
                                    </a>
                                    <div class="dropdown-menu nxl-h-dropdown">
                                        <a href="customers.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Customers</span>
                                        </a>
                                        <a href="customers-view.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Customers View</span>
                                        </a>
                                        <a href="customers-create.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Customers Create</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown nxl-level-menu">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="feather-alert-circle"></i>
                                            <span>Leads</span>
                                        </span>
                                        <i class="feather-chevron-right ms-auto me-0"></i>
                                    </a>
                                    <div class="dropdown-menu nxl-h-dropdown">
                                        <a href="leads.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Leads</span>
                                        </a>
                                        <a href="leads-view.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Leads View</span>
                                        </a>
                                        <a href="leads-create.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Leads Create</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown nxl-level-menu">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="feather-briefcase"></i>
                                            <span>Projects</span>
                                        </span>
                                        <i class="feather-chevron-right ms-auto me-0"></i>
                                    </a>
                                    <div class="dropdown-menu nxl-h-dropdown">
                                        <a href="projects.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Projects</span>
                                        </a>
                                        <a href="projects-view.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Projects View</span>
                                        </a>
                                        <a href="projects-create.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Projects Create</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown nxl-level-menu">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="feather-layout"></i>
                                            <span>Widgets</span>
                                        </span>
                                        <i class="feather-chevron-right ms-auto me-0"></i>
                                    </a>
                                    <div class="dropdown-menu nxl-h-dropdown">
                                        <a href="widgets-lists.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Lists</span>
                                        </a>
                                        <a href="widgets-tables.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Tables</span>
                                        </a>
                                        <a href="widgets-charts.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Charts</span>
                                        </a>
                                        <a href="widgets-statistics.html" class="dropdown-item">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Statistics</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown nxl-level-menu">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="feather-power"></i>
                                            <span>Authentication</span>
                                        </span>
                                        <i class="feather-chevron-right ms-auto me-0"></i>
                                    </a>
                                    <div class="dropdown-menu nxl-h-dropdown">
                                        <div class="dropdown nxl-level-menu">
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <span class="hstack">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Login</span>
                                                </span>
                                                <i class="feather-chevron-right ms-auto me-0"></i>
                                            </a>
                                            <div class="dropdown-menu nxl-h-dropdown">
                                                <a href="./auth-login-cover.html" class="dropdown-item">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Cover</span>
                                                </a>
                                                <a href="./auth-login-minimal.html" class="dropdown-item">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Minimal</span>
                                                </a>
                                                <a href="./auth-login-creative.html" class="dropdown-item">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Creative</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown nxl-level-menu">
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <span class="hstack">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Register</span>
                                                </span>
                                                <i class="feather-chevron-right ms-auto me-0"></i>
                                            </a>
                                            <div class="dropdown-menu nxl-h-dropdown">
                                                <a href="./auth-register-cover.html" class="dropdown-item">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Cover</span>
                                                </a>
                                                <a href="./auth-register-minimal.html" class="dropdown-item">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Minimal</span>
                                                </a>
                                                <a href="./auth-register-creative.html" class="dropdown-item">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Creative</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown nxl-level-menu">
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <span class="hstack">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Error-404</span>
                                                </span>
                                                <i class="feather-chevron-right ms-auto me-0"></i>
                                            </a>
                                            <div class="dropdown-menu nxl-h-dropdown">
                                                <a href="./auth-404-cover.html" class="dropdown-item">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Cover</span>
                                                </a>
                                                <a href="./auth-404-minimal.html" class="dropdown-item">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Minimal</span>
                                                </a>
                                                <a href="./auth-404-creative.html" class="dropdown-item">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Creative</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown nxl-level-menu">
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <span class="hstack">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Reset Pass</span>
                                                </span>
                                                <i class="feather-chevron-right ms-auto me-0"></i>
                                            </a>
                                            <div class="dropdown-menu nxl-h-dropdown">
                                                <a href="./auth-reset-cover.html" class="dropdown-item">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Cover</span>
                                                </a>
                                                <a href="./auth-reset-minimal.html" class="dropdown-item">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Minimal</span>
                                                </a>
                                                <a href="./auth-reset-creative.html" class="dropdown-item">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Creative</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown nxl-level-menu">
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <span class="hstack">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Verify OTP</span>
                                                </span>
                                                <i class="feather-chevron-right ms-auto me-0"></i>
                                            </a>
                                            <div class="dropdown-menu nxl-h-dropdown">
                                                <a href="./auth-verify-cover.html" class="dropdown-item">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Cover</span>
                                                </a>
                                                <a href="./auth-verify-minimal.html" class="dropdown-item">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Minimal</span>
                                                </a>
                                                <a href="./auth-verify-creative.html" class="dropdown-item">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Creative</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown nxl-level-menu">
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <span class="hstack">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Maintenance</span>
                                                </span>
                                                <i class="feather-chevron-right ms-auto me-0"></i>
                                            </a>
                                            <div class="dropdown-menu nxl-h-dropdown">
                                                <a href="./auth-maintenance-cover.html" class="dropdown-item">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Cover</span>
                                                </a>
                                                <a href="./auth-maintenance-minimal.html" class="dropdown-item">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Minimal</span>
                                                </a>
                                                <a href="./auth-maintenance-creative.html" class="dropdown-item">
                                                    <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                    <span>Creative</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="feather-plus"></i>
                                    <span>Add New Items</span>
                                </a>
                            </div>
                        </div>
                        <!--! [End] nxl-lavel-menu !-->
                        <!--! [Start] nxl-h-item nxl-mega-menu !-->
                        <div class="dropdown nxl-h-item nxl-mega-menu">
                            <a href="javascript:void(0);" class="btn btn-light-brand" data-bs-toggle="dropdown" data-bs-auto-close="outside"> Mega Menu </a>
                            <div class="dropdown-menu nxl-h-dropdown" id="mega-menu-dropdown">
                                <div class="d-lg-flex align-items-start">
                                    <!--! [Start] nxl-mega-menu-tabs !-->
                                    <div class="nav flex-column nxl-mega-menu-tabs" role="tablist" aria-orientation="vertical">
                                        <button class="nav-link active nxl-mega-menu-sm" data-bs-toggle="pill" data-bs-target="#v-pills-general" type="button" role="tab">
                                            <span class="menu-icon">
                                                <i class="feather-airplay"></i>
                                            </span>
                                            <span class="menu-title">General</span>
                                            <span class="menu-arrow">
                                                <i class="feather-chevron-right"></i>
                                            </span>
                                        </button>
                                        <button class="nav-link nxl-mega-menu-md" data-bs-toggle="pill" data-bs-target="#v-pills-applications" type="button" role="tab">
                                            <span class="menu-icon">
                                                <i class="feather-send"></i>
                                            </span>
                                            <span class="menu-title">Applications</span>
                                            <span class="menu-arrow">
                                                <i class="feather-chevron-right"></i>
                                            </span>
                                        </button>
                                        <button class="nav-link nxl-mega-menu-lg" data-bs-toggle="pill" data-bs-target="#v-pills-integrations" type="button" role="tab">
                                            <span class="menu-icon">
                                                <i class="feather-link-2"></i>
                                            </span>
                                            <span class="menu-title">Integrations</span>
                                            <span class="menu-arrow">
                                                <i class="feather-chevron-right"></i>
                                            </span>
                                        </button>
                                        <button class="nav-link nxl-mega-menu-xl" data-bs-toggle="pill" data-bs-target="#v-pills-components" type="button" role="tab">
                                            <span class="menu-icon">
                                                <i class="feather-layers"></i>
                                            </span>
                                            <span class="menu-title">Components</span>
                                            <span class="menu-arrow">
                                                <i class="feather-chevron-right"></i>
                                            </span>
                                        </button>
                                        <button class="nav-link nxl-mega-menu-xxl" data-bs-toggle="pill" data-bs-target="#v-pills-authentication" type="button" role="tab">
                                            <span class="menu-icon">
                                                <i class="feather-cpu"></i>
                                            </span>
                                            <span class="menu-title">Authentication</span>
                                            <span class="menu-arrow">
                                                <i class="feather-chevron-right"></i>
                                            </span>
                                        </button>
                                        <button class="nav-link nxl-mega-menu-full" data-bs-toggle="pill" data-bs-target="#v-pills-miscellaneous" type="button" role="tab">
                                            <span class="menu-icon">
                                                <i class="feather-bluetooth"></i>
                                            </span>
                                            <span class="menu-title">Miscellaneous</span>
                                            <span class="menu-arrow">
                                                <i class="feather-chevron-right"></i>
                                            </span>
                                        </button>
                                    </div>
                                    <!--! [End] nxl-mega-menu-tabs !-->
                                    <!--! [Start] nxl-mega-menu-tabs-content !-->
                                    <div class="tab-content nxl-mega-menu-tabs-content">
                                        <!--! [Start] v-pills-general !-->
                                        <div class="tab-pane fade show active" id="v-pills-general" role="tabpanel">
                                            <div class="mb-4 rounded-3 border">
                                                <img src="assets/images/banner/mockup.png" alt="" class="img-fluid rounded-3">
                                            </div>
                                            <h6 class="fw-bolder">Duralux - Admin Dashboard UiKit</h6>
                                            <p class="fs-12 fw-normal text-muted text-truncate-3-line">Get started Duralux with Duralux up and running. Duralux bootstrap template docs helps you to get started with simple html codes.</p>
                                            <a href="javascript:void(0);" class="fs-13 fw-bold text-primary">Get Started &rarr;</a>
                                        </div>
                                        <!--! [End] v-pills-general !-->
                                        <!--! [Start] v-pills-applications !-->
                                        <div class="tab-pane fade" id="v-pills-applications" role="tabpanel">
                                            <div class="row g-4">
                                                <div class="col-lg-6">
                                                    <h6 class="dropdown-item-title">Applications</h6>
                                                    <a href="apps-chat.html" class="dropdown-item">
                                                        <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                        <span>Chat</span>
                                                    </a>
                                                    <a href="apps-email.html" class="dropdown-item">
                                                        <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                        <span>Email</span>
                                                    </a>
                                                    <a href="apps-tasks.html" class="dropdown-item">
                                                        <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                        <span>Tasks</span>
                                                    </a>
                                                    <a href="apps-notes.html" class="dropdown-item">
                                                        <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                        <span>Notes</span>
                                                    </a>
                                                    <a href="apps-storage.html" class="dropdown-item">
                                                        <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                        <span>Storage</span>
                                                    </a>
                                                    <a href="apps-calendar.html" class="dropdown-item">
                                                        <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                        <span>Calendar</span>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="nxl-mega-menu-image">
                                                        <img src="assets/images/general/full-avatar.png" alt="" class="img-fluid full-user-avtar">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="border-top-dashed">
                                            <div class="d-lg-flex align-items-center justify-content-between">
                                                <div>
                                                    <h6 class="menu-item-heading text-truncate-1-line">Need more application?</h6>
                                                    <p class="fs-12 text-muted mb-0 text-truncate-3-line">We are ready to build custom applications.</p>
                                                </div>
                                                <div class="mt-2 mt-lg-0">
                                                    <a href="mailto:theme_ocean@gmail.com" class="fs-13 fw-bold text-primary">Contact Us &rarr;</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--! [End] v-pills-applications !-->
                                        <!--! [Start] v-pills-integrations !-->
                                        <div class="tab-pane fade" id="v-pills-integrations" role="tabpanel">
                                            <div class="row g-lg-4 nxl-mega-menu-integrations">
                                                <div class="col-lg-12 d-lg-flex align-items-center justify-content-between mb-4 mb-lg-0">
                                                    <div>
                                                        <h6 class="fw-bolder text-dark">Integrations</h6>
                                                        <p class="fs-12 text-muted mb-0">Connect amazing apps on your bucket.</p>
                                                    </div>
                                                    <div class="mt-2 mt-lg-0">
                                                        <a href="javascript:void(0);" class="fs-13 text-primary">Add New &rarr;</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <div class="menu-item-icon">
                                                            <img src="assets/images/brand/app-store.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="menu-item-title">App Store</div>
                                                        <div class="menu-item-arrow">
                                                            <i class="feather-arrow-right"></i>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <div class="menu-item-icon">
                                                            <img src="assets/images/brand/spotify.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="menu-item-title">Spotify</div>
                                                        <div class="menu-item-arrow">
                                                            <i class="feather-arrow-right"></i>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <div class="menu-item-icon">
                                                            <img src="assets/images/brand/figma.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="menu-item-title">Figma</div>
                                                        <div class="menu-item-arrow">
                                                            <i class="feather-arrow-right"></i>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <div class="menu-item-icon">
                                                            <img src="assets/images/brand/shopify.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="menu-item-title">Shopify</div>
                                                        <div class="menu-item-arrow">
                                                            <i class="feather-arrow-right"></i>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <div class="menu-item-icon">
                                                            <img src="assets/images/brand/paypal.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="menu-item-title">Paypal</div>
                                                        <div class="menu-item-arrow">
                                                            <i class="feather-arrow-right"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <div class="menu-item-icon">
                                                            <img src="assets/images/brand/gmail.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="menu-item-title">Gmail</div>
                                                        <div class="menu-item-arrow">
                                                            <i class="feather-arrow-right"></i>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <div class="menu-item-icon">
                                                            <img src="assets/images/brand/dropbox.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="menu-item-title">Dropbox</div>
                                                        <div class="menu-item-arrow">
                                                            <i class="feather-arrow-right"></i>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <div class="menu-item-icon">
                                                            <img src="assets/images/brand/google-drive.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="menu-item-title">Google Drive</div>
                                                        <div class="menu-item-arrow">
                                                            <i class="feather-arrow-right"></i>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <div class="menu-item-icon">
                                                            <img src="assets/images/brand/github.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="menu-item-title">Github</div>
                                                        <div class="menu-item-arrow">
                                                            <i class="feather-arrow-right"></i>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <div class="menu-item-icon">
                                                            <img src="assets/images/brand/gitlab.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="menu-item-title">Gitlab</div>
                                                        <div class="menu-item-arrow">
                                                            <i class="feather-arrow-right"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <div class="menu-item-icon">
                                                            <img src="assets/images/brand/facebook.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="menu-item-title">Facebook</div>
                                                        <div class="menu-item-arrow">
                                                            <i class="feather-arrow-right"></i>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <div class="menu-item-icon">
                                                            <img src="assets/images/brand/pinterest.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="menu-item-title">Pinterest</div>
                                                        <div class="menu-item-arrow">
                                                            <i class="feather-arrow-right"></i>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <div class="menu-item-icon">
                                                            <img src="assets/images/brand/instagram.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="menu-item-title">Instagram</div>
                                                        <div class="menu-item-arrow">
                                                            <i class="feather-arrow-right"></i>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <div class="menu-item-icon">
                                                            <img src="assets/images/brand/twitter.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="menu-item-title">Twitter</div>
                                                        <div class="menu-item-arrow">
                                                            <i class="feather-arrow-right"></i>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <div class="menu-item-icon">
                                                            <img src="assets/images/brand/youtube.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="menu-item-title">Youtube</div>
                                                        <div class="menu-item-arrow">
                                                            <i class="feather-arrow-right"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <hr class="border-top-dashed">
                                            <p class="fs-13 text-muted mb-0">Need help? Contact our <a href="javascript:void(0);" class="fst-italic">support center</a></p>
                                        </div>
                                        <!--! [End] v-pills-integrations !-->
                                        <!--! [Start] v-pills-components !-->
                                        <div class="tab-pane fade" id="v-pills-components" role="tabpanel">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-xl-8">
                                                    <div class="row g-4">
                                                        <div class="col-lg-4">
                                                            <h6 class="dropdown-item-title">Navigation</h6>
                                                            <a href="javascript:void(0);" class="dropdown-item">CRM</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Analytics</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Sales</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Leads</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Projects</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Timesheets</a>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6 class="dropdown-item-title">Pages</h6>
                                                            <a href="javascript:void(0);" class="dropdown-item">Leads </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Payments</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Projects</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Proposals</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Customers</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Documentations</a>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6 class="dropdown-item-title">Authentication</h6>
                                                            <a href="javascript:void(0);" class="dropdown-item">Login</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Regiser</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Error-404</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Reset Pass</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Verify OTP</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Maintenance</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="nxl-mega-menu-image">
                                                        <img src="assets/images/banner/1.jpg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="mt-4">
                                                        <a href="mailto:theme_ocean@gmail.com" class="fs-13 fw-bold">View all resources on Duralux &rarr;</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--! [End] v-pills-components !-->
                                        <!--! [Start] v-pills-authentication !-->
                                        <div class="tab-pane fade" id="v-pills-authentication" role="tabpanel">
                                            <div class="row g-4 align-items-center nxl-mega-menu-authentication">
                                                <div class="col-xl-8">
                                                    <div class="row g-4">
                                                        <div class="col-lg-4">
                                                            <h6 class="dropdown-item-title">Cover</h6>
                                                            <a href="./auth-login-cover.html" class="dropdown-item">
                                                                <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                                <span>Login</span>
                                                            </a>
                                                            <a href="./auth-register-cover.html" class="dropdown-item">
                                                                <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                                <span>Register</span>
                                                            </a>
                                                            <a href="./auth-404-cover.html" class="dropdown-item">
                                                                <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                                <span>Error-404</span>
                                                            </a>
                                                            <a href="./auth-reset-cover.html" class="dropdown-item">
                                                                <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                                <span>Reset Pass</span>
                                                            </a>
                                                            <a href="./auth-verify-cover.html" class="dropdown-item">
                                                                <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                                <span>Verify OTP</span>
                                                            </a>
                                                            <a href="./auth-maintenance-cover.html" class="dropdown-item">
                                                                <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                                <span>Maintenance</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6 class="dropdown-item-title">Minimal</h6>
                                                            <a href="./auth-login-minimal.html" class="dropdown-item">
                                                                <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                                <span>Login</span>
                                                            </a>
                                                            <a href="./auth-register-minimal.html" class="dropdown-item">
                                                                <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                                <span>Register</span>
                                                            </a>
                                                            <a href="./auth-404-minimal.html" class="dropdown-item">
                                                                <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                                <span>Error-404</span>
                                                            </a>
                                                            <a href="./auth-reset-minimal.html" class="dropdown-item">
                                                                <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                                <span>Reset Pass</span>
                                                            </a>
                                                            <a href="./auth-verify-minimal.html" class="dropdown-item">
                                                                <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                                <span>Verify OTP</span>
                                                            </a>
                                                            <a href="./auth-maintenance-minimal.html" class="dropdown-item">
                                                                <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                                <span>Maintenance</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <h6 class="dropdown-item-title">Creative</h6>
                                                            <a href="./auth-login-creative.html" class="dropdown-item">
                                                                <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                                <span>Login</span>
                                                            </a>
                                                            <a href="./auth-register-creative.html" class="dropdown-item">
                                                                <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                                <span>Register</span>
                                                            </a>
                                                            <a href="./auth-404-creative.html" class="dropdown-item">
                                                                <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                                <span>Error-404</span>
                                                            </a>
                                                            <a href="./auth-reset-creative.html" class="dropdown-item">
                                                                <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                                <span>Reset Pass</span>
                                                            </a>
                                                            <a href="./auth-verify-creative.html" class="dropdown-item">
                                                                <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                                <span>Verify OTP</span>
                                                            </a>
                                                            <a href="./auth-maintenance-creative.html" class="dropdown-item">
                                                                <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                                                <span>Maintenance</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div id="carouselResourcesCaptions" class="carousel slide" data-bs-ride="carousel">
                                                        <div class="carousel-indicators">
                                                            <button type="button" data-bs-target="#carouselResourcesCaptions" data-bs-slide-to="0" class="active" aria-current="true"></button>
                                                            <button type="button" data-bs-target="#carouselResourcesCaptions" data-bs-slide-to="1"></button>
                                                            <button type="button" data-bs-target="#carouselResourcesCaptions" data-bs-slide-to="2"></button>
                                                            <button type="button" data-bs-target="#carouselResourcesCaptions" data-bs-slide-to="3"></button>
                                                            <button type="button" data-bs-target="#carouselResourcesCaptions" data-bs-slide-to="4"></button>
                                                            <button type="button" data-bs-target="#carouselResourcesCaptions" data-bs-slide-to="5"></button>
                                                        </div>
                                                        <div class="carousel-inner rounded-3">
                                                            <div class="carousel-item active">
                                                                <div class="nxl-mega-menu-image">
                                                                    <img src="assets/images/banner/6.jpg" alt="" class="img-fluid d-block w-100">
                                                                </div>
                                                                <div class="carousel-caption">
                                                                    <h5 class="carousel-caption-title text-truncate-1-line">Shopify eCommerce Store</h5>
                                                                    <p class="carousel-caption-desc">Some representative placeholder content for the first slide.</p>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <div class="nxl-mega-menu-image">
                                                                    <img src="assets/images/banner/5.jpg" alt="" class="img-fluid d-block w-100">
                                                                </div>
                                                                <div class="carousel-caption">
                                                                    <h5 class="carousel-caption-title text-truncate-1-line">iOS Apps Development</h5>
                                                                    <p class="carousel-caption-desc">Some representative placeholder content for the second slide.</p>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <div class="nxl-mega-menu-image">
                                                                    <img src="assets/images/banner/4.jpg" alt="" class="img-fluid d-block w-100">
                                                                </div>
                                                                <div class="carousel-caption">
                                                                    <h5 class="carousel-caption-title text-truncate-1-line">Figma Dashboard Design</h5>
                                                                    <p class="carousel-caption-desc">Some representative placeholder content for the third slide.</p>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <div class="nxl-mega-menu-image">
                                                                    <img src="assets/images/banner/3.jpg" alt="" class="img-fluid d-block w-100">
                                                                </div>
                                                                <div class="carousel-caption">
                                                                    <h5 class="carousel-caption-title text-truncate-1-line">React Dashboard Design</h5>
                                                                    <p class="carousel-caption-desc">Some representative placeholder content for the third slide.</p>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <div class="nxl-mega-menu-image">
                                                                    <img src="assets/images/banner/2.jpg" alt="" class="img-fluid d-block w-100">
                                                                </div>
                                                                <div class="carousel-caption">
                                                                    <h5 class="carousel-caption-title text-truncate-1-line">Standup Team Meeting</h5>
                                                                    <p class="carousel-caption-desc">Some representative placeholder content for the third slide.</p>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <div class="nxl-mega-menu-image">
                                                                    <img src="assets/images/banner/1.jpg" alt="" class="img-fluid d-block w-100">
                                                                </div>
                                                                <div class="carousel-caption">
                                                                    <h5 class="carousel-caption-title text-truncate-1-line">Zoom Team Meeting</h5>
                                                                    <p class="carousel-caption-desc">Some representative placeholder content for the third slide.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselResourcesCaptions" data-bs-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="visually-hidden">Previous</span>
                                                        </button>
                                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselResourcesCaptions" data-bs-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="visually-hidden">Next</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--! [End] v-pills-authentication !-->
                                        <!--! [Start] v-pills-miscellaneous !-->
                                        <div class="tab-pane fade nxl-mega-menu-miscellaneous" id="v-pills-miscellaneous" role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs flex-column flex-lg-row nxl-mega-menu-miscellaneous-tabs" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#v-pills-projects" type="button" role="tab">
                                                        <span class="menu-icon">
                                                            <i class="feather-cast"></i>
                                                        </span>
                                                        <span class="menu-title">Projects</span>
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#v-pills-services" type="button" role="tab">
                                                        <span class="menu-icon">
                                                            <i class="feather-check-square"></i>
                                                        </span>
                                                        <span class="menu-title">Services</span>
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#v-pills-features" type="button" role="tab">
                                                        <span class="menu-icon">
                                                            <i class="feather-airplay"></i>
                                                        </span>
                                                        <span class="menu-title">Features</span>
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#v-pills-blogs" type="button" role="tab">
                                                        <span class="menu-icon">
                                                            <i class="feather-bold"></i>
                                                        </span>
                                                        <span class="menu-title">Blogs</span>
                                                    </button>
                                                </li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content nxl-mega-menu-miscellaneous-content">
                                                <div class="tab-pane fade active show" id="v-pills-projects" role="tabpanel">
                                                    <div class="row g-4">
                                                        <div class="col-xxl-2 d-lg-none d-xxl-block">
                                                            <h6 class="dropdown-item-title">Categories</h6>
                                                            <a href="javascript:void(0);" class="dropdown-item">Support</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Services</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Applicatios</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">eCommerce</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Development</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Miscellaneous</a>
                                                        </div>
                                                        <div class="col-xxl-10">
                                                            <div class="row g-4">
                                                                <div class="col-xl-6">
                                                                    <div class="d-lg-flex align-items-center gap-3">
                                                                        <div class="wd-150 rounded-3">
                                                                            <img src="assets/images/banner/1.jpg" alt="" class="img-fluid rounded-3">
                                                                        </div>
                                                                        <div class="mt-3 mt-lg-0 ms-lg-3 item-text">
                                                                            <a href="javascript:void(0);">
                                                                                <h6 class="menu-item-heading text-truncate-1-line">Shopify eCommerce Store</h6>
                                                                            </a>
                                                                            <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nam ullam iure eum sed rerum libero quis doloremque maiores veritatis?</p>
                                                                            <div class="hstack gap-2 mt-3">
                                                                                <div class="avatar-image avatar-sm">
                                                                                    <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                                                                                </div>
                                                                                <a href="javascript:void(0);" class="fs-12">Alexandra Della</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="d-lg-flex align-items-center gap-3">
                                                                        <div class="wd-150 rounded-3">
                                                                            <img src="assets/images/banner/2.jpg" alt="" class="img-fluid rounded-3">
                                                                        </div>
                                                                        <div class="mt-3 mt-lg-0 ms-lg-3 item-text">
                                                                            <a href="javascript:void(0);">
                                                                                <h6 class="menu-item-heading text-truncate-1-line">iOS Apps Development</h6>
                                                                            </a>
                                                                            <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nam ullam iure eum sed rerum libero quis doloremque maiores veritatis?</p>
                                                                            <div class="hstack gap-2 mt-3">
                                                                                <div class="avatar-image avatar-sm">
                                                                                    <img src="assets/images/avatar/2.png" alt="" class="img-fluid">
                                                                                </div>
                                                                                <a href="javascript:void(0);" class="fs-12">Green Cute</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="d-lg-flex align-items-center gap-3">
                                                                        <div class="wd-150 rounded-3">
                                                                            <img src="assets/images/banner/3.jpg" alt="" class="img-fluid rounded-3">
                                                                        </div>
                                                                        <div class="mt-3 mt-lg-0 ms-lg-3 item-text">
                                                                            <a href="javascript:void(0);">
                                                                                <h6 class="menu-item-heading text-truncate-1-line">Figma Dashboard Design</h6>
                                                                            </a>
                                                                            <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nam ullam iure eum sed rerum libero quis doloremque maiores veritatis?</p>
                                                                            <div class="hstack gap-2 mt-3">
                                                                                <div class="avatar-image avatar-sm">
                                                                                    <img src="assets/images/avatar/3.png" alt="" class="img-fluid">
                                                                                </div>
                                                                                <a href="javascript:void(0);" class="fs-12">Malanie Hanvey</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="d-lg-flex align-items-center gap-3">
                                                                        <div class="wd-150 rounded-3">
                                                                            <img src="assets/images/banner/4.jpg" alt="" class="img-fluid rounded-3">
                                                                        </div>
                                                                        <div class="mt-3 mt-lg-0 ms-lg-3 item-text">
                                                                            <a href="javascript:void(0);">
                                                                                <h6 class="menu-item-heading text-truncate-1-line">React Dashboard Design</h6>
                                                                            </a>
                                                                            <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nam ullam iure eum sed rerum libero quis doloremque maiores veritatis?</p>
                                                                            <div class="hstack gap-2 mt-3">
                                                                                <div class="avatar-image avatar-sm">
                                                                                    <img src="assets/images/avatar/4.png" alt="" class="img-fluid">
                                                                                </div>
                                                                                <a href="javascript:void(0);" class="fs-12">Kenneth Hune</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-services" role="tabpanel">
                                                    <div class="row g-4 nxl-mega-menu-miscellaneous-services">
                                                        <div class="col-xl-8">
                                                            <div class="row g-4">
                                                                <div class="col-lg-6">
                                                                    <div class="d-flex align-items-start gap-3">
                                                                        <div class="avatar-text avatar-lg rounded bg-primary text-white">
                                                                            <i class="feather-bar-chart-2 mx-auto"></i>
                                                                        </div>
                                                                        <div>
                                                                            <a href="javascript:void(0);">
                                                                                <h6 class="menu-item-heading text-truncate-1-line">Analytics Services</h6>
                                                                            </a>
                                                                            <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet consectetur adipisicing elit Unde numquam rem dignissimos. elit Unde numquam rem dignissimos.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="d-flex align-items-start gap-3">
                                                                        <div class="avatar-text avatar-lg rounded bg-danger text-white">
                                                                            <i class="feather-feather mx-auto"></i>
                                                                        </div>
                                                                        <div>
                                                                            <a href="javascript:void(0);">
                                                                                <h6 class="menu-item-heading text-truncate-1-line">Content Writing</h6>
                                                                            </a>
                                                                            <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet consectetur adipisicing elit Unde numquam rem dignissimos. elit Unde numquam rem dignissimos.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="d-flex align-items-start gap-3">
                                                                        <div class="avatar-text avatar-lg rounded bg-warning text-white">
                                                                            <i class="feather-bell mx-auto"></i>
                                                                        </div>
                                                                        <div>
                                                                            <a href="javascript:void(0);">
                                                                                <h6 class="menu-item-heading text-truncate-1-line">SEO (Search Engine Optimization)</h6>
                                                                            </a>
                                                                            <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet consectetur adipisicing elit Unde numquam rem dignissimos. elit Unde numquam rem dignissimos.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="d-flex align-items-start gap-3">
                                                                        <div class="avatar-text avatar-lg rounded bg-success text-white">
                                                                            <i class="feather-shield mx-auto"></i>
                                                                        </div>
                                                                        <div>
                                                                            <a href="javascript:void(0);">
                                                                                <h6 class="menu-item-heading text-truncate-1-line">Security Services</h6>
                                                                            </a>
                                                                            <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet consectetur adipisicing elit Unde numquam rem dignissimos. elit Unde numquam rem dignissimos.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="d-flex align-items-start gap-3">
                                                                        <div class="avatar-text avatar-lg rounded bg-teal text-white">
                                                                            <i class="feather-shopping-cart mx-auto"></i>
                                                                        </div>
                                                                        <div>
                                                                            <a href="javascript:void(0);">
                                                                                <h6 class="menu-item-heading text-truncate-1-line">eCommerce Services</h6>
                                                                            </a>
                                                                            <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet consectetur adipisicing elit Unde numquam rem dignissimos. elit Unde numquam rem dignissimos.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="d-flex align-items-start gap-3">
                                                                        <div class="avatar-text avatar-lg rounded bg-dark text-white">
                                                                            <i class="feather-life-buoy mx-auto"></i>
                                                                        </div>
                                                                        <div>
                                                                            <a href="javascript:void(0);">
                                                                                <h6 class="menu-item-heading text-truncate-1-line">Support Services</h6>
                                                                            </a>
                                                                            <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet consectetur adipisicing elit Unde numquam rem dignissimos. elit Unde numquam rem dignissimos.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="p-3 bg-soft-dark text-dark rounded d-lg-flex align-items-center justify-content-between">
                                                                        <div class="fs-13">
                                                                            <i class="feather-star me-2"></i>
                                                                            <span>View all services on Duralux.</span>
                                                                        </div>
                                                                        <div class="mt-2 mt-lg-0">
                                                                            <a href="javascript:void(0);" class="fs-13 text-primary">Learn More &rarr;</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div id="carouselServicesCaptions" class="carousel slide" data-bs-ride="carousel">
                                                                <div class="carousel-indicators">
                                                                    <button type="button" data-bs-target="#carouselServicesCaptions" data-bs-slide-to="0" class="active" aria-current="true"></button>
                                                                    <button type="button" data-bs-target="#carouselServicesCaptions" data-bs-slide-to="1"></button>
                                                                    <button type="button" data-bs-target="#carouselServicesCaptions" data-bs-slide-to="2"></button>
                                                                    <button type="button" data-bs-target="#carouselServicesCaptions" data-bs-slide-to="3"></button>
                                                                    <button type="button" data-bs-target="#carouselServicesCaptions" data-bs-slide-to="4"></button>
                                                                    <button type="button" data-bs-target="#carouselServicesCaptions" data-bs-slide-to="5"></button>
                                                                </div>
                                                                <div class="carousel-inner rounded-3">
                                                                    <div class="carousel-item active">
                                                                        <div class="nxl-mega-menu-image">
                                                                            <img src="assets/images/banner/6.jpg" alt="" class="img-fluid d-block w-100">
                                                                        </div>
                                                                        <div class="carousel-caption">
                                                                            <h5 class="carousel-caption-title text-truncate-1-line">Shopify eCommerce Store</h5>
                                                                            <p class="carousel-caption-desc">Some representative placeholder content for the first slide.</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="carousel-item">
                                                                        <div class="nxl-mega-menu-image">
                                                                            <img src="assets/images/banner/5.jpg" alt="" class="img-fluid d-block w-100">
                                                                        </div>
                                                                        <div class="carousel-caption">
                                                                            <h5 class="carousel-caption-title text-truncate-1-line">iOS Apps Development</h5>
                                                                            <p class="carousel-caption-desc">Some representative placeholder content for the second slide.</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="carousel-item">
                                                                        <div class="nxl-mega-menu-image">
                                                                            <img src="assets/images/banner/4.jpg" alt="" class="img-fluid d-block w-100">
                                                                        </div>
                                                                        <div class="carousel-caption">
                                                                            <h5 class="carousel-caption-title text-truncate-1-line">Figma Dashboard Design</h5>
                                                                            <p class="carousel-caption-desc">Some representative placeholder content for the third slide.</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="carousel-item">
                                                                        <div class="nxl-mega-menu-image">
                                                                            <img src="assets/images/banner/3.jpg" alt="" class="img-fluid d-block w-100">
                                                                        </div>
                                                                        <div class="carousel-caption">
                                                                            <h5 class="carousel-caption-title text-truncate-1-line">React Dashboard Design</h5>
                                                                            <p class="carousel-caption-desc">Some representative placeholder content for the third slide.</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="carousel-item">
                                                                        <div class="nxl-mega-menu-image">
                                                                            <img src="assets/images/banner/2.jpg" alt="" class="img-fluid d-block w-100">
                                                                        </div>
                                                                        <div class="carousel-caption">
                                                                            <h5 class="carousel-caption-title text-truncate-1-line">Standup Team Meeting</h5>
                                                                            <p class="carousel-caption-desc">Some representative placeholder content for the third slide.</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="carousel-item">
                                                                        <div class="nxl-mega-menu-image">
                                                                            <img src="assets/images/banner/1.jpg" alt="" class="img-fluid d-block w-100">
                                                                        </div>
                                                                        <div class="carousel-caption">
                                                                            <h5 class="carousel-caption-title text-truncate-1-line">Zoom Team Meeting</h5>
                                                                            <p class="carousel-caption-desc">Some representative placeholder content for the third slide.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselServicesCaptions" data-bs-slide="prev">
                                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Previous</span>
                                                                </button>
                                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselServicesCaptions" data-bs-slide="next">
                                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Next</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-features" role="tabpanel">
                                                    <div class="row g-4 nxl-mega-menu-miscellaneous-features">
                                                        <div class="col-xl-8">
                                                            <div class="row g-4">
                                                                <div class="col-lg-6">
                                                                    <div class="d-flex align-items-start gap-3">
                                                                        <div class="avatar-text avatar-lg bg-soft-primary text-primary border-soft-primary rounded">
                                                                            <i class="feather-bell mx-auto"></i>
                                                                        </div>
                                                                        <div>
                                                                            <a href="javascript:void(0);">
                                                                                <h6 class="menu-item-heading text-truncate-1-line">Notifications</h6>
                                                                            </a>
                                                                            <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet consectetur adipisicing elit Unde numquam rem dignissimos. elit Unde numquam rem dignissimos.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="d-flex align-items-start gap-3">
                                                                        <div class="avatar-text avatar-lg bg-soft-danger text-danger border-soft-danger rounded">
                                                                            <i class="feather-bar-chart-2 mx-auto"></i>
                                                                        </div>
                                                                        <div>
                                                                            <a href="javascript:void(0);">
                                                                                <h6 class="menu-item-heading text-truncate-1-line">Analytics</h6>
                                                                            </a>
                                                                            <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet consectetur adipisicing elit Unde numquam rem dignissimos. elit Unde numquam rem dignissimos.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="d-flex align-items-start gap-3">
                                                                        <div class="avatar-text avatar-lg bg-soft-success text-success border-soft-success rounded">
                                                                            <i class="feather-link-2 mx-auto"></i>
                                                                        </div>
                                                                        <div>
                                                                            <a href="javascript:void(0);">
                                                                                <h6 class="menu-item-heading text-truncate-1-line">Ingetrations</h6>
                                                                            </a>
                                                                            <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet consectetur adipisicing elit Unde numquam rem dignissimos. elit Unde numquam rem dignissimos.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="d-flex align-items-start gap-3">
                                                                        <div class="avatar-text avatar-lg bg-soft-indigo text-indigo border-soft-indigo rounded">
                                                                            <i class="feather-book mx-auto"></i>
                                                                        </div>
                                                                        <div>
                                                                            <a href="javascript:void(0);">
                                                                                <h6 class="menu-item-heading text-truncate-1-line">Documentations</h6>
                                                                            </a>
                                                                            <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet consectetur adipisicing elit Unde numquam rem dignissimos. elit Unde numquam rem dignissimos.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="d-flex align-items-start gap-3">
                                                                        <div class="avatar-text avatar-lg bg-soft-warning text-warning border-soft-warning rounded">
                                                                            <i class="feather-shield mx-auto"></i>
                                                                        </div>
                                                                        <div>
                                                                            <a href="javascript:void(0);">
                                                                                <h6 class="menu-item-heading text-truncate-1-line">Security</h6>
                                                                            </a>
                                                                            <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet consectetur adipisicing elit Unde numquam rem dignissimos. elit Unde numquam rem dignissimos.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="d-flex align-items-start gap-3">
                                                                        <div class="avatar-text avatar-lg bg-soft-teal text-teal border-soft-teal rounded">
                                                                            <i class="feather-life-buoy mx-auto"></i>
                                                                        </div>
                                                                        <div>
                                                                            <a href="javascript:void(0);">
                                                                                <h6 class="menu-item-heading text-truncate-1-line">Support</h6>
                                                                            </a>
                                                                            <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet consectetur adipisicing elit Unde numquam rem dignissimos. elit Unde numquam rem dignissimos.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-3 offset-xxl-1 col-xl-4">
                                                            <div class="nxl-mega-menu-image">
                                                                <img src="assets/images/banner/1.jpg" alt="" class="img-fluid">
                                                            </div>
                                                            <div class="mt-4">
                                                                <a href="mailto:theme_ocean@gmail.com" class="fs-13 fw-bold">View all features on Duralux &rarr;</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-blogs" role="tabpanel">
                                                    <div class="row g-4">
                                                        <div class="col-xxl-2 d-lg-none d-xxl-block">
                                                            <h6 class="dropdown-item-title">Categories</h6>
                                                            <a href="javascript:void(0);" class="dropdown-item">Support</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Services</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Applicatios</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">eCommerce</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Development</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Miscellaneous</a>
                                                        </div>
                                                        <div class="col-xxl-10">
                                                            <div class="row g-4">
                                                                <div class="col-xxl-4 col-lg-6">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <div class="wd-100 rounded-3">
                                                                            <img src="assets/images/banner/1.jpg" alt="" class="img-fluid rounded-3 border border-3">
                                                                        </div>
                                                                        <div>
                                                                            <a href="javascript:void(0);">
                                                                                <h6 class="menu-item-heading text-truncate-1-line">Lorem ipsum dolor sit</h6>
                                                                            </a>
                                                                            <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius dolor quo commodi nisi animi error minus quia aliquam.</p>
                                                                            <span class="fs-11 text-gray-500">26 March, 2023</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-4 col-lg-6">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <div class="wd-100 rounded-3">
                                                                            <img src="assets/images/banner/2.jpg" alt="" class="img-fluid rounded-3 border border-3">
                                                                        </div>
                                                                        <div>
                                                                            <a href="javascript:void(0);">
                                                                                <h6 class="menu-item-heading text-truncate-1-line">Lorem ipsum dolor sit</h6>
                                                                            </a>
                                                                            <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius dolor quo commodi nisi animi error minus quia aliquam.</p>
                                                                            <span class="fs-11 text-gray-500">26 March, 2023</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-4 col-lg-6">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <div class="wd-100 rounded-3">
                                                                            <img src="assets/images/banner/3.jpg" alt="" class="img-fluid rounded-3 border border-3">
                                                                        </div>
                                                                        <div>
                                                                            <a href="javascript:void(0);">
                                                                                <h6 class="menu-item-heading text-truncate-1-line">Lorem ipsum dolor sit</h6>
                                                                            </a>
                                                                            <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius dolor quo commodi nisi animi error minus quia aliquam.</p>
                                                                            <span class="fs-11 text-gray-500">26 March, 2023</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-4 col-lg-6">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <div class="wd-100 rounded-3">
                                                                            <img src="assets/images/banner/4.jpg" alt="" class="img-fluid rounded-3 border border-3">
                                                                        </div>
                                                                        <div>
                                                                            <a href="javascript:void(0);">
                                                                                <h6 class="menu-item-heading text-truncate-1-line">Lorem ipsum dolor sit</h6>
                                                                            </a>
                                                                            <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius dolor quo commodi nisi animi error minus quia aliquam.</p>
                                                                            <span class="fs-11 text-gray-500">26 March, 2023</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-4 col-lg-6">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <div class="wd-100 rounded-3">
                                                                            <img src="assets/images/banner/5.jpg" alt="" class="img-fluid rounded-3 border border-3">
                                                                        </div>
                                                                        <div>
                                                                            <a href="javascript:void(0);">
                                                                                <h6 class="menu-item-heading text-truncate-1-line">Lorem ipsum dolor sit</h6>
                                                                            </a>
                                                                            <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius dolor quo commodi nisi animi error minus quia aliquam.</p>
                                                                            <span class="fs-11 text-gray-500">26 March, 2023</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-4 col-lg-6">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <div class="wd-100 rounded-3">
                                                                            <img src="assets/images/banner/6.jpg" alt="" class="img-fluid rounded-3 border border-3">
                                                                        </div>
                                                                        <div>
                                                                            <a href="javascript:void(0);">
                                                                                <h6 class="menu-item-heading text-truncate-1-line">Lorem ipsum dolor sit</h6>
                                                                            </a>
                                                                            <p class="fs-12 fw-normal text-muted mb-0 text-truncate-2-line">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius dolor quo commodi nisi animi error minus quia aliquam.</p>
                                                                            <span class="fs-11 text-gray-500">26 March, 2023</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="p-3 bg-soft-dark text-dark rounded d-flex align-items-center justify-content-between gap-4">
                                                                        <div class="fs-13 text-truncate-1-line">
                                                                            <i class="feather-star me-2"></i>
                                                                            <strong>Version 2.3.2 is out!</strong>
                                                                            <span>Learn more about our news and schedule reporting.</span>
                                                                        </div>
                                                                        <div class="wd-100 text-end">
                                                                            <a href="javascript:void(0);" class="fs-13 text-primary">Learn More &rarr;</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--! [End] v-pills-miscellaneous !-->
                                    </div>
                                    <!--! [End] nxl-mega-menu-tabs-content !-->
                                </div>
                            </div>
                        </div>
                        <!--! [End] nxl-h-item nxl-mega-menu !-->
                    </div>
                    <!--! [End] nxl-lavel-mega-menu-wrapper !-->
                </div>
                <!--! [End] nxl-lavel-mega-menu !-->
            </div>
            <!--! [End] Header Left !-->
            <!--! [Start] Header Right !-->
            <div class="header-right ms-auto">
                <div class="d-flex align-items-center">
                    <div class="dropdown nxl-h-item nxl-header-search">
                        <a href="javascript:void(0);" class="nxl-head-link me-0" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <i class="feather-search"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-search-dropdown">
                            <div class="input-group search-form">
                                <span class="input-group-text">
                                    <i class="feather-search fs-6 text-muted"></i>
                                </span>
                                <input type="text" class="form-control search-input-field" placeholder="Search....">
                                <span class="input-group-text">
                                    <button type="button" class="btn-close"></button>
                                </span>
                            </div>
                            <div class="dropdown-divider mt-0"></div>
                            <div class="search-items-wrapper">
                                <div class="searching-for px-4 py-2">
                                    <p class="fs-11 fw-medium text-muted">I'm searching for...</p>
                                    <div class="d-flex flex-wrap gap-1">
                                        <a href="javascript:void(0);" class="flex-fill border rounded py-1 px-2 text-center fs-11 fw-semibold">Projects</a>
                                        <a href="javascript:void(0);" class="flex-fill border rounded py-1 px-2 text-center fs-11 fw-semibold">Leads</a>
                                        <a href="javascript:void(0);" class="flex-fill border rounded py-1 px-2 text-center fs-11 fw-semibold">Contacts</a>
                                        <a href="javascript:void(0);" class="flex-fill border rounded py-1 px-2 text-center fs-11 fw-semibold">Inbox</a>
                                        <a href="javascript:void(0);" class="flex-fill border rounded py-1 px-2 text-center fs-11 fw-semibold">Invoices</a>
                                        <a href="javascript:void(0);" class="flex-fill border rounded py-1 px-2 text-center fs-11 fw-semibold">Tasks</a>
                                        <a href="javascript:void(0);" class="flex-fill border rounded py-1 px-2 text-center fs-11 fw-semibold">Customers</a>
                                        <a href="javascript:void(0);" class="flex-fill border rounded py-1 px-2 text-center fs-11 fw-semibold">Notes</a>
                                        <a href="javascript:void(0);" class="flex-fill border rounded py-1 px-2 text-center fs-11 fw-semibold">Affiliate</a>
                                        <a href="javascript:void(0);" class="flex-fill border rounded py-1 px-2 text-center fs-11 fw-semibold">Storage</a>
                                        <a href="javascript:void(0);" class="flex-fill border rounded py-1 px-2 text-center fs-11 fw-semibold">Calendar</a>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <div class="recent-result px-4 py-2">
                                    <h4 class="fs-13 fw-normal text-gray-600 mb-3">Recnet <span class="badge small bg-gray-200 rounded ms-1 text-dark">3</span></h4>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-text rounded">
                                                <i class="feather-airplay"></i>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="font-body fw-bold d-block mb-1">CRM dashboard redesign</a>
                                                <p class="fs-11 text-muted mb-0">Home / project / crm</p>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="badge border rounded text-dark">/<i class="feather-command ms-1 fs-10"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-text rounded">
                                                <i class="feather-file-plus"></i>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="font-body fw-bold d-block mb-1">Create new document</a>
                                                <p class="fs-11 text-muted mb-0">Home / tasks / docs</p>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="badge border rounded text-dark">N /<i class="feather-command ms-1 fs-10"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-text rounded">
                                                <i class="feather-user-plus"></i>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="font-body fw-bold d-block mb-1">Invite project colleagues</a>
                                                <p class="fs-11 text-muted mb-0">Home / project / invite</p>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="badge border rounded text-dark">P /<i class="feather-command ms-1 fs-10"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-divider my-3"></div>
                                <div class="users-result px-4 py-2">
                                    <h4 class="fs-13 fw-normal text-gray-600 mb-3">Users <span class="badge small bg-gray-200 rounded ms-1 text-dark">5</span></h4>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-image rounded">
                                                <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="font-body fw-bold d-block mb-1">Alexandra Della</a>
                                                <p class="fs-11 text-muted mb-0">alex.della@outlook.com</p>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                            <i class="feather-chevron-right"></i>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-image rounded">
                                                <img src="assets/images/avatar/2.png" alt="" class="img-fluid">
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="font-body fw-bold d-block mb-1">Green Cute</a>
                                                <p class="fs-11 text-muted mb-0">green.cute@outlook.com</p>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                            <i class="feather-chevron-right"></i>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-image rounded">
                                                <img src="assets/images/avatar/3.png" alt="" class="img-fluid">
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="font-body fw-bold d-block mb-1">Malanie Hanvey</a>
                                                <p class="fs-11 text-muted mb-0">malanie.anvey@outlook.com</p>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                            <i class="feather-chevron-right"></i>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-image rounded">
                                                <img src="assets/images/avatar/4.png" alt="" class="img-fluid">
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="font-body fw-bold d-block mb-1">Kenneth Hune</a>
                                                <p class="fs-11 text-muted mb-0">kenth.hune@outlook.com</p>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                            <i class="feather-chevron-right"></i>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-0">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-image rounded">
                                                <img src="assets/images/avatar/5.png" alt="" class="img-fluid">
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="font-body fw-bold d-block mb-1">Archie Cantones</a>
                                                <p class="fs-11 text-muted mb-0">archie.cones@outlook.com</p>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                            <i class="feather-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown-divider my-3"></div>
                                <div class="file-result px-4 py-2">
                                    <h4 class="fs-13 fw-normal text-gray-600 mb-3">Files <span class="badge small bg-gray-200 rounded ms-1 text-dark">3</span></h4>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-image bg-gray-200 rounded">
                                                <img src="assets/images/file-icons/css.png" alt="" class="img-fluid">
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="font-body fw-bold d-block mb-1">Project Style CSS</a>
                                                <p class="fs-11 text-muted mb-0">05.74 MB</p>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                            <i class="feather-download"></i>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-image bg-gray-200 rounded">
                                                <img src="assets/images/file-icons/zip.png" alt="" class="img-fluid">
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="font-body fw-bold d-block mb-1">Dashboard Project Zip</a>
                                                <p class="fs-11 text-muted mb-0">46.83 MB</p>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                            <i class="feather-download"></i>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-0">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-image bg-gray-200 rounded">
                                                <img src="assets/images/file-icons/pdf.png" alt="" class="img-fluid">
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="font-body fw-bold d-block mb-1">Project Document PDF</a>
                                                <p class="fs-11 text-muted mb-0">12.85 MB</p>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                            <i class="feather-download"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown-divider mt-3 mb-0"></div>
                                <a href="javascript:void(0);" class="p-3 fs-10 fw-bold text-uppercase text-center d-block">Loar More</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown nxl-h-item nxl-header-language d-none d-sm-flex">
                        <a href="javascript:void(0);" class="nxl-head-link me-0 nxl-language-link" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <img src="assets/vendors/img/flags/4x3/us.svg" alt="" class="img-fluid wd-20">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-language-dropdown">
                            <div class="dropdown-divider mt-0"></div>
                            <div class="language-items-wrapper">
                                <div class="select-language px-4 py-2 hstack justify-content-between gap-4">
                                    <div class="lh-lg">
                                        <h6 class="mb-0">Select Language</h6>
                                        <p class="fs-11 text-muted mb-0">12 languages avaiable!</p>
                                    </div>
                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="tooltip" title="Add Language">
                                        <i class="feather-plus"></i>
                                    </a>
                                </div>
                                <div class="dropdown-divider"></div>
                                <div class="row px-4 pt-3">
                                    <div class="col-sm-4 col-6 language_select">
                                        <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                            <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/sa.svg" alt="" class="img-fluid"></div>
                                            <span>Arabic</span>
                                        </a>
                                    </div>
                                    <div class="col-sm-4 col-6 language_select">
                                        <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                            <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/bd.svg" alt="" class="img-fluid"></div>
                                            <span>Bengali</span>
                                        </a>
                                    </div>
                                    <div class="col-sm-4 col-6 language_select">
                                        <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                            <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/ch.svg" alt="" class="img-fluid"></div>
                                            <span>Chinese</span>
                                        </a>
                                    </div>
                                    <div class="col-sm-4 col-6 language_select">
                                        <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                            <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/nl.svg" alt="" class="img-fluid"></div>
                                            <span>Dutch</span>
                                        </a>
                                    </div>
                                    <div class="col-sm-4 col-6 language_select active">
                                        <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                            <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/us.svg" alt="" class="img-fluid"></div>
                                            <span>English</span>
                                        </a>
                                    </div>
                                    <div class="col-sm-4 col-6 language_select">
                                        <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                            <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/fr.svg" alt="" class="img-fluid"></div>
                                            <span>French</span>
                                        </a>
                                    </div>
                                    <div class="col-sm-4 col-6 language_select">
                                        <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                            <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/de.svg" alt="" class="img-fluid"></div>
                                            <span>German</span>
                                        </a>
                                    </div>
                                    <div class="col-sm-4 col-6 language_select">
                                        <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                            <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/in.svg" alt="" class="img-fluid"></div>
                                            <span>Hindi</span>
                                        </a>
                                    </div>
                                    <div class="col-sm-4 col-6 language_select">
                                        <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                            <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/ru.svg" alt="" class="img-fluid"></div>
                                            <span>Russian</span>
                                        </a>
                                    </div>
                                    <div class="col-sm-4 col-6 language_select">
                                        <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                            <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/es.svg" alt="" class="img-fluid"></div>
                                            <span>Spanish</span>
                                        </a>
                                    </div>
                                    <div class="col-sm-4 col-6 language_select">
                                        <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                            <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/tr.svg" alt="" class="img-fluid"></div>
                                            <span>Turkish</span>
                                        </a>
                                    </div>
                                    <div class="col-sm-4 col-6 language_select">
                                        <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                            <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/pk.svg" alt="" class="img-fluid"></div>
                                            <span>Urdo</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nxl-h-item d-none d-sm-flex">
                        <div class="full-screen-switcher">
                            <a href="javascript:void(0);" class="nxl-head-link me-0" onclick="$('body').fullScreenHelper('toggle');">
                                <i class="feather-maximize maximize"></i>
                                <i class="feather-minimize minimize"></i>
                            </a>
                        </div>
                    </div>
                    <div class="nxl-h-item dark-light-theme">
                        <a href="javascript:void(0);" class="nxl-head-link me-0 dark-button">
                            <i class="feather-moon"></i>
                        </a>
                        <a href="javascript:void(0);" class="nxl-head-link me-0 light-button" style="display: none">
                            <i class="feather-sun"></i>
                        </a>
                    </div>
                    <div class="dropdown nxl-h-item">
                        <a href="javascript:void(0);" class="nxl-head-link me-0" data-bs-toggle="dropdown" role="button" data-bs-auto-close="outside">
                            <i class="feather-clock"></i>
                            <span class="badge bg-success nxl-h-badge">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-timesheets-menu">
                            <div class="d-flex justify-content-between align-items-center timesheets-head">
                                <h6 class="fw-bold text-dark mb-0">Timesheets</h6>
                                <a href="javascript:void(0);" class="fs-11 text-success text-end ms-auto" data-bs-toggle="tooltip" title="Upcomming Timers">
                                    <i class="feather-clock"></i>
                                    <span>3 Upcomming</span>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between align-items-center flex-column timesheets-body">
                                <i class="feather-clock fs-1 mb-4"></i>
                                <p class="text-muted">No started timers found yes!</p>
                                <a href="javascript:void(0);" class="btn btn-sm btn-primary">Started Timer</a>
                            </div>
                            <div class="text-center timesheets-footer">
                                <a href="javascript:void(0);" class="fs-13 fw-semibold text-dark">Alls Timesheets</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown nxl-h-item">
                        <a class="nxl-head-link me-3" data-bs-toggle="dropdown" href="#" role="button" data-bs-auto-close="outside">
                            <i class="feather-bell"></i>
                            <span class="badge bg-danger nxl-h-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-notifications-menu">
                            <div class="d-flex justify-content-between align-items-center notifications-head">
                                <h6 class="fw-bold text-dark mb-0">Notifications</h6>
                                <a href="javascript:void(0);" class="fs-11 text-success text-end ms-auto" data-bs-toggle="tooltip" title="Make as Read">
                                    <i class="feather-check"></i>
                                    <span>Make as Read</span>
                                </a>
                            </div>
                            <div class="notifications-item">
                                <img src="assets/images/avatar/2.png" alt="" class="rounded me-3 border">
                                <div class="notifications-desc">
                                    <a href="javascript:void(0);" class="font-body text-truncate-2-line"> <span class="fw-semibold text-dark">Malanie Hanvey</span> We should talk about that at lunch!</a>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="notifications-date text-muted border-bottom border-bottom-dashed">2 minutes ago</div>
                                        <div class="d-flex align-items-center float-end gap-2">
                                            <a href="javascript:void(0);" class="d-block wd-8 ht-8 rounded-circle bg-gray-300" data-bs-toggle="tooltip" title="Make as Read"></a>
                                            <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" title="Remove">
                                                <i class="feather-x fs-12"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="notifications-item">
                                <img src="assets/images/avatar/3.png" alt="" class="rounded me-3 border">
                                <div class="notifications-desc">
                                    <a href="javascript:void(0);" class="font-body text-truncate-2-line"> <span class="fw-semibold text-dark">Valentine Maton</span> You can download the latest invoices now.</a>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="notifications-date text-muted border-bottom border-bottom-dashed">36 minutes ago</div>
                                        <div class="d-flex align-items-center float-end gap-2">
                                            <a href="javascript:void(0);" class="d-block wd-8 ht-8 rounded-circle bg-gray-300" data-bs-toggle="tooltip" title="Make as Read"></a>
                                            <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" title="Remove">
                                                <i class="feather-x fs-12"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="notifications-item">
                                <img src="assets/images/avatar/4.png" alt="" class="rounded me-3 border">
                                <div class="notifications-desc">
                                    <a href="javascript:void(0);" class="font-body text-truncate-2-line"> <span class="fw-semibold text-dark">Archie Cantones</span> Don't forget to pickup Jeremy after school!</a>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="notifications-date text-muted border-bottom border-bottom-dashed">53 minutes ago</div>
                                        <div class="d-flex align-items-center float-end gap-2">
                                            <a href="javascript:void(0);" class="d-block wd-8 ht-8 rounded-circle bg-gray-300" data-bs-toggle="tooltip" title="Make as Read"></a>
                                            <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" title="Remove">
                                                <i class="feather-x fs-12"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center notifications-footer">
                                <a href="javascript:void(0);" class="fs-13 fw-semibold text-dark">Alls Notifications</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown nxl-h-item">
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" data-bs-auto-close="outside">
                            <img src="assets/images/avatar/1.png" alt="user-image" class="img-fluid user-avtar me-0">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-user-dropdown">
                            <div class="dropdown-header">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/avatar/1.png" alt="user-image" class="img-fluid user-avtar">
                                    <div>
                                        <h6 class="text-dark mb-0">Alexandra Della <span class="badge bg-soft-success text-success ms-1">PRO</span></h6>
                                        <span class="fs-12 fw-medium text-muted">alex.della@outlook.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="dropdown">
                                    <span class="hstack">
                                        <i class="wd-10 ht-10 border border-2 border-gray-1 bg-success rounded-circle me-2"></i>
                                        <span>Active</span>
                                    </span>
                                    <i class="feather-chevron-right ms-auto me-0"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="wd-10 ht-10 border border-2 border-gray-1 bg-warning rounded-circle me-2"></i>
                                            <span>Always</span>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="wd-10 ht-10 border border-2 border-gray-1 bg-success rounded-circle me-2"></i>
                                            <span>Active</span>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="wd-10 ht-10 border border-2 border-gray-1 bg-danger rounded-circle me-2"></i>
                                            <span>Bussy</span>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="wd-10 ht-10 border border-2 border-gray-1 bg-info rounded-circle me-2"></i>
                                            <span>Inactive</span>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="wd-10 ht-10 border border-2 border-gray-1 bg-dark rounded-circle me-2"></i>
                                            <span>Disabled</span>
                                        </span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="wd-10 ht-10 border border-2 border-gray-1 bg-primary rounded-circle me-2"></i>
                                            <span>Cutomization</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="dropdown">
                                    <span class="hstack">
                                        <i class="feather-dollar-sign me-2"></i>
                                        <span>Subscriptions</span>
                                    </span>
                                    <i class="feather-chevron-right ms-auto me-0"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Plan</span>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Billings</span>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Referrals</span>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Payments</span>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Statements</span>
                                        </span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="hstack">
                                            <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                            <span>Subscriptions</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-user"></i>
                                <span>Profile Details</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-activity"></i>
                                <span>Activity Feed</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-dollar-sign"></i>
                                <span>Billing Details</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-bell"></i>
                                <span>Notifications</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-settings"></i>
                                <span>Account Settings</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="./auth-login-minimal.html" class="dropdown-item">
                                <i class="feather-log-out"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--! [End] Header Right !-->
        </div>
    </header>
    <!--! ================================================================ !-->
    <!--! [End] Header !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Proposal</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Create</li>
                    </ul>
                </div>
                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        <div class="d-flex d-md-none">
                            <a href="javascript:void(0)" class="page-header-right-close-toggle">
                                <i class="feather-arrow-left me-2"></i>
                                <span>Back</span>
                            </a>
                        </div>
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <a href="javascript:void(0);" class="btn btn-light-brand" data-bs-toggle="offcanvas" data-bs-target="#proposalSent">
                                <i class="feather-layers me-2"></i>
                                <span>Save & Send</span>
                            </a>
                            <a href="javascript:void(0);" class="btn btn-primary successAlertMessage">
                                <i class="feather-save me-2"></i>
                                <span>Save</span>
                            </a>
                        </div>
                    </div>
                    <div class="d-md-none d-flex align-items-center">
                        <a href="javascript:void(0)" class="page-header-right-open-toggle">
                            <i class="feather-align-right fs-20"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="mb-4">
                                    <label class="form-label">Quotation No. <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Quotation No">
                                </div>

                                <div class="col-lg-6 mb-4">
                                        <label class="form-label">Date <span class="text-danger">*</span></label>
                                        <input class="form-control" id="startDate" placeholder="Enter date ">
                                    </div>

                                <div class="mb-4">
                                    <label class="form-label">Expert Name <span class="text-danger">*</span></label>
                                    <select class="form-control" data-select2-selector="icon">
                                        <option value="lead" data-icon="feather-at-sign">Lead</option>
                                        <option value="coustomer" data-icon="feather-users">Coustomer</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Reference Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Quotation No">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Company Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Quotation No">
                                </div>

                                <div class="mb-4">
                                        <label class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Address">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Country <span class="text-danger">*</span></label>
                                        <select class="form-control" data-select2-selector="country">
                                            <option data-country="af">Afghanistan</option>
                                            <option data-country="ax">Åland Islands</option>
                                            <option data-country="al">Albania</option>
                                            <option data-country="dz">Algeria</option>
                                            <option data-country="as">American Samoa</option>
                                            <option data-country="ad">Andorra</option>
                                            <option data-country="ao">Angola</option>
                                            <option data-country="ai">Anguilla</option>
                                            <option data-country="aq">Antarctica</option>
                                            <option data-country="ag">Antigua & Barbuda</option>
                                            <option data-country="ar">Argentina</option>
                                            <option data-country="am">Armenia</option>
                                            <option data-country="aw">Aruba</option>
                                            <option data-country="au">Australia</option>
                                            <option data-country="at">Austria</option>
                                            <option data-country="az">Azerbaijan</option>
                                            <option data-country="bs">Bahamas</option>
                                            <option data-country="bh">Bahrain</option>
                                            <option data-country="bd">Bangladesh</option>
                                            <option data-country="bb">Barbados</option>
                                            <option data-country="by">Belarus</option>
                                            <option data-country="be">Belgium</option>
                                            <option data-country="bz">Belize</option>
                                            <option data-country="bj">Benin</option>
                                            <option data-country="bm">Bermuda</option>
                                            <option data-country="bt">Bhutan</option>
                                            <option data-country="bo">Bolivia</option>
                                            <option data-country="bq">Caribbean Netherlands</option>
                                            <option data-country="ba">Bosnia & Herzegovina</option>
                                            <option data-country="bw">Botswana</option>
                                            <option data-country="bv">Bouvet Island</option>
                                            <option data-country="br">Brazil</option>
                                            <option data-country="io">British Indian Ocean Territory</option>
                                            <option data-country="bn">Brunei</option>
                                            <option data-country="bg">Bulgaria</option>
                                            <option data-country="bf">Burkina Faso</option>
                                            <option data-country="bi">Burundi</option>
                                            <option data-country="kh">Cambodia</option>
                                            <option data-country="cm">Cameroon</option>
                                            <option data-country="ca">Canada</option>
                                            <option data-country="cv">Cape Verde</option>
                                            <option data-country="ky">Cayman Islands</option>
                                            <option data-country="cf">Central African Republic</option>
                                            <option data-country="td">Chad</option>
                                            <option data-country="cl">Chile</option>
                                            <option data-country="cn">China</option>
                                            <option data-country="cx">Christmas Island</option>
                                            <option data-country="cc">Cocos (Keeling) Islands</option>
                                            <option data-country="co">Colombia</option>
                                            <option data-country="km">Comoros</option>
                                            <option data-country="cg">Congo - Brazzaville</option>
                                            <option data-country="cd">Congo - Kinshasa</option>
                                            <option data-country="ck">Cook Islands</option>
                                            <option data-country="cr">Costa Rica</option>
                                            <option data-country="ci">Côte d'Ivoire</option>
                                            <option data-country="hr">Croatia</option>
                                            <option data-country="cu">Cuba</option>
                                            <option data-country="cu">Curaçao</option>
                                            <option data-country="cy">Cyprus</option>
                                            <option data-country="cz">Czechia</option>
                                            <option data-country="dk">Denmark</option>
                                            <option data-country="dj">Djibouti</option>
                                            <option data-country="dm">Dominica</option>
                                            <option data-country="do">Dominican Republic</option>
                                            <option data-country="ec">Ecuador</option>
                                            <option data-country="eg">Egypt</option>
                                            <option data-country="sv">El Salvador</option>
                                            <option data-country="gq">Equatorial Guinea</option>
                                            <option data-country="er">Eritrea</option>
                                            <option data-country="ee">Estonia</option>
                                            <option data-country="et">Ethiopia</option>
                                            <option data-country="fk">Falkland Islands (Islas Malvinas)</option>
                                            <option data-country="fo">Faroe Islands</option>
                                            <option data-country="fj">Fiji</option>
                                            <option data-country="fi">Finland</option>
                                            <option data-country="fr">France</option>
                                            <option data-country="gf">French Guiana</option>
                                            <option data-country="pf">French Polynesia</option>
                                            <option data-country="tf">French Southern Territories</option>
                                            <option data-country="ga">Gabon</option>
                                            <option data-country="gm">Gambia</option>
                                            <option data-country="ge">Georgia</option>
                                            <option data-country="de">Germany</option>
                                            <option data-country="gh">Ghana</option>
                                            <option data-country="gi">Gibraltar</option>
                                            <option data-country="gr">Greece</option>
                                            <option data-country="gl">Greenland</option>
                                            <option data-country="gd">Grenada</option>
                                            <option data-country="gp">Guadeloupe</option>
                                            <option data-country="gu">Guam</option>
                                            <option data-country="gt">Guatemala</option>
                                            <option data-country="gg">Guernsey</option>
                                            <option data-country="gn">Guinea</option>
                                            <option data-country="gw">Guinea-Bissau</option>
                                            <option data-country="gy">Guyana</option>
                                            <option data-country="ht">Haiti</option>
                                            <option data-country="hm">Heard & McDonald Islands</option>
                                            <option data-country="va">Vatican City</option>
                                            <option data-country="hn">Honduras</option>
                                            <option data-country="hk">Hong Kong</option>
                                            <option data-country="hu">Hungary</option>
                                            <option data-country="is">Iceland</option>
                                            <option data-country="in">India</option>
                                            <option data-country="id">Indonesia</option>
                                            <option data-country="ir">Iran</option>
                                            <option data-country="iq">Iraq</option>
                                            <option data-country="ie">Ireland</option>
                                            <option data-country="im">Isle of Man</option>
                                            <option data-country="il">Israel</option>
                                            <option data-country="it">Italy</option>
                                            <option data-country="jm">Jamaica</option>
                                            <option data-country="jp">Japan</option>
                                            <option data-country="je">Jersey</option>
                                            <option data-country="jo">Jordan</option>
                                            <option data-country="kz">Kazakhstan</option>
                                            <option data-country="ke">Kenya</option>
                                            <option data-country="ki">Kiribati</option>
                                            <option data-country="kp">North Korea</option>
                                            <option data-country="kr">South Korea</option>
                                            <option data-country="xk">Kosovo</option>
                                            <option data-country="kw">Kuwait</option>
                                            <option data-country="kg">Kyrgyzstan</option>
                                            <option data-country="la">Laos</option>
                                            <option data-country="lv">Latvia</option>
                                            <option data-country="lb">Lebanon</option>
                                            <option data-country="ls">Lesotho</option>
                                            <option data-country="lr">Liberia</option>
                                            <option data-country="ly">Libya</option>
                                            <option data-country="li">Liechtenstein</option>
                                            <option data-country="lt">Lithuania</option>
                                            <option data-country="lu">Luxembourg</option>
                                            <option data-country="mo">Macao</option>
                                            <option data-country="mk">North Macedonia</option>
                                            <option data-country="mg">Madagascar</option>
                                            <option data-country="mw">Malawi</option>
                                            <option data-country="my">Malaysia</option>
                                            <option data-country="mv">Maldives</option>
                                            <option data-country="ml">Mali</option>
                                            <option data-country="mt">Malta</option>
                                            <option data-country="mh">Marshall Islands</option>
                                            <option data-country="mq">Martinique</option>
                                            <option data-country="mr">Mauritania</option>
                                            <option data-country="mu">Mauritius</option>
                                            <option data-country="yt">Mayotte</option>
                                            <option data-country="mx">Mexico</option>
                                            <option data-country="fm">Micronesia</option>
                                            <option data-country="md">Moldova</option>
                                            <option data-country="mc">Monaco</option>
                                            <option data-country="mn">Mongolia</option>
                                            <option data-country="me">Montenegro</option>
                                            <option data-country="ms">Montserrat</option>
                                            <option data-country="ma">Morocco</option>
                                            <option data-country="mz">Mozambique</option>
                                            <option data-country="mm">Myanmar (Burma)</option>
                                            <option data-country="na">Namibia</option>
                                            <option data-country="nr">Nauru</option>
                                            <option data-country="np">Nepal</option>
                                            <option data-country="nl">Netherlands</option>
                                            <option data-country="cu">Curaçao</option>
                                            <option data-country="nc">New Caledonia</option>
                                            <option data-country="nz">New Zealand</option>
                                            <option data-country="ni">Nicaragua</option>
                                            <option data-country="ne">Niger</option>
                                            <option data-country="ng">Nigeria</option>
                                            <option data-country="nu">Niue</option>
                                            <option data-country="nf">Norfolk Island</option>
                                            <option data-country="mp">Northern Mariana Islands</option>
                                            <option data-country="no">Norway</option>
                                            <option data-country="om">Oman</option>
                                            <option data-country="pk">Pakistan</option>
                                            <option data-country="pw">Palau</option>
                                            <option data-country="ps">Palestine</option>
                                            <option data-country="pa">Panama</option>
                                            <option data-country="pg">Papua New Guinea</option>
                                            <option data-country="py">Paraguay</option>
                                            <option data-country="pe">Peru</option>
                                            <option data-country="ph">Philippines</option>
                                            <option data-country="pn">Pitcairn Islands</option>
                                            <option data-country="pl">Poland</option>
                                            <option data-country="pt">Portugal</option>
                                            <option data-country="pr">Puerto Rico</option>
                                            <option data-country="qa">Qatar</option>
                                            <option data-country="re">Réunion</option>
                                            <option data-country="ro">Romania</option>
                                            <option data-country="ru">Russia</option>
                                            <option data-country="rw">Rwanda</option>
                                            <option data-country="bl">St. Barthélemy</option>
                                            <option data-country="sh">St. Helena</option>
                                            <option data-country="kn">St. Kitts & Nevis</option>
                                            <option data-country="lc">St. Lucia</option>
                                            <option data-country="mf">St. Martin</option>
                                            <option data-country="pm">St. Pierre & Miquelon</option>
                                            <option data-country="vc">St. Vincent & Grenadines</option>
                                            <option data-country="ws">Samoa</option>
                                            <option data-country="sm">San Marino</option>
                                            <option data-country="st">São Tomé & Príncipe</option>
                                            <option data-country="sa">Saudi Arabia</option>
                                            <option data-country="sn">Senegal</option>
                                            <option data-country="rs">Serbia</option>
                                            <option data-country="sr">Serbia</option>
                                            <option data-country="sc">Seychelles</option>
                                            <option data-country="sl">Sierra Leone</option>
                                            <option data-country="sg">Singapore</option>
                                            <option data-country="sx">Sint Maarten</option>
                                            <option data-country="sk">Slovakia</option>
                                            <option data-country="si">Slovenia</option>
                                            <option data-country="sb">Solomon Islands</option>
                                            <option data-country="so">Somalia</option>
                                            <option data-country="za">South Africa</option>
                                            <option data-country="gs">South Georgia & South Sandwich Islands</option>
                                            <option data-country="ss">South Sudan</option>
                                            <option data-country="es">Spain</option>
                                            <option data-country="lk">Sri Lanka</option>
                                            <option data-country="sd">Sudan</option>
                                            <option data-country="sr">Suriname</option>
                                            <option data-country="sj">Svalbard & Jan Mayen</option>
                                            <option data-country="sz">Eswatini</option>
                                            <option data-country="se">Sweden</option>
                                            <option data-country="ch">Switzerland</option>
                                            <option data-country="sy">Syria</option>
                                            <option data-country="tw">Taiwan</option>
                                            <option data-country="tj">Tajikistan</option>
                                            <option data-country="tz">Tanzania</option>
                                            <option data-country="th">Thailand</option>
                                            <option data-country="tl">Timor-Leste</option>
                                            <option data-country="tg">Togo</option>
                                            <option data-country="tk">Tokelau</option>
                                            <option data-country="to">Tonga</option>
                                            <option data-country="tt">Trinidad & Tobago</option>
                                            <option data-country="tn">Tunisia</option>
                                            <option data-country="tr">Turkey</option>
                                            <option data-country="tm">Turkmenistan</option>
                                            <option data-country="tc">Turks & Caicos Islands</option>
                                            <option data-country="tv">Tuvalu</option>
                                            <option data-country="ug">Uganda</option>
                                            <option data-country="ua">Ukraine</option>
                                            <option data-country="ae">United Arab Emirates</option>
                                            <option data-country="gb">United Kingdom</option>
                                            <option data-country="us" selected>United States</option>
                                            <option data-country="um">U.S. Outlying Islands</option>
                                            <option data-country="uy">Uruguay</option>
                                            <option data-country="uz">Uzbekistan</option>
                                            <option data-country="vu">Vanuatu</option>
                                            <option data-country="ve">Venezuela</option>
                                            <option data-country="vn">Vietnam</option>
                                            <option data-country="vg">British Virgin Islands</option>
                                            <option data-country="vi">U.S. Virgin Islands</option>
                                            <option data-country="wf">Wallis & Futuna</option>
                                            <option data-country="eh">Western Sahara</option>
                                            <option data-country="ye">Yemen</option>
                                            <option data-country="zm">Zambia</option>
                                            <option data-country="zw">Zimbabwe</option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">State <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="State">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">City <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="City">
                                    </div>


                                <!-- <div class="mb-4">
                                    <label class="form-label">Lead <span class="text-danger">*</span></label>
                                    <select class="form-select" data-select2-selector="user">
                                        <option value="1" data-user="1">Alexandra Della - Website design and development</option>
                                        <option value="2" data-user="2">Curtis Green - User experience (UX) and user interface (UI) design</option>
                                        <option value="3" data-user="3">Marianne Audrey - Responsive and mobile design</option>
                                        <option value="4" data-user="4">Holland Scott - E-commerce website design and development</option>
                                        <option value="5" data-user="5">Olive Delarosa - Custom graphics and icon design</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Discount </label>
                                    <select class="form-select" data-select2-selector="default">
                                        <option value="">No Discount</option>
                                        <option value="">Before Tax</option>
                                        <option value="">After Tax</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Visibility:</label>
                                    <select class="form-select form-control" data-select2-selector="visibility">
                                        <option value="public" data-icon="feather-globe">Public</option>
                                        <option value="private" data-icon="feather-lock">Private</option>
                                        <option value="private" data-icon="feather-user">Personal</option>
                                        <option value="customs" data-icon="feather-settings">Customs</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <label class="form-label">Start <span class="text-danger">*</span></label>
                                        <input class="form-control" id="startDate" placeholder="Pick start date ">
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <label class="form-label">Due <span class="text-danger">*</span></label>
                                        <input class="form-control" id="dueDate" placeholder="Pick due date">
                                    </div>
                                </div> -->
                                <!-- <div class="mb-4">
                                    <label class="form-label">Tags:</label>
                                    <select class="form-select form-control" data-select2-selector="tag" multiple>
                                        <option value="primary" data-bg="bg-primary">Team</option>
                                        <option value="teal" data-bg="bg-teal">Primary</option>
                                        <option value="success" data-bg="bg-success">Updates</option>
                                        <option value="warning" data-bg="bg-warning">Personal</option>
                                        <option value="danger" data-bg="bg-danger">Promotions</option>
                                        <option value="indigo" data-bg="bg-indigo">Customs</option>
                                    </select>
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Assignee:</label>
                                    <select class="form-select form-control" data-select2-selector="user" multiple>
                                        <option value="alex@outlook.com" data-user="1">alex@outlook.com</option>
                                        <option value="john.deo@outlook.com" data-user="2">john.deo@outlook.com</option>
                                        <option value="green.cutte@outlook.com" data-user="3">green.cutte@outlook.com</option>
                                        <option value="nancy.elliot@outlook.com" data-user="4">nancy.elliot@outlook.com</option>
                                        <option value="mar.audrey@gmail.com" data-user="5">mar.audrey@gmail.com</option>
                                        <option value="erna.serpa@outlook.com" data-user="6">erna.serpa@outlook.com</option>
                                        <option value="green.cutte@outlook.com" data-user="7">green.cutte@outlook.com</option>
                                        <option value="nancy.elliot@outlook.com" data-user="8">nancy.elliot@outlook.com</option>
                                        <option value="mar.audrey@gmail.com" data-user="9">mar.audrey@gmail.com</option>
                                        <option value="erna.serpa@outlook.com" data-user="10">erna.serpa@outlook.com</option>
                                        <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                                        <option value="erna.serpa@outlook.com" data-user="12">erna.serpa@outlook.com</option>
                                    </select>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                 <div class="mb-4">
                                    <label class="form-label">Client Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Client Name">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Company Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Company Name">
                                </div>
                                <div>

                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <label class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <label class="form-label">Phone <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Phone">
                                    </div>
                                </div>
                                    <label class="form-label">Address <span class="text-danger">*</span></label>
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">
                                            <input type="text" class="form-control mb-2" placeholder="Address Line 1">
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <input type="text" class="form-control" placeholder="Address Line 2">
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <label class="form-label">Country <span class="text-danger">*</span></label>
                                        <select class="form-control" data-select2-selector="country">
                                            <option data-country="af">Afghanistan</option>
                                            <option data-country="ax">Åland Islands</option>
                                            <option data-country="al">Albania</option>
                                            <option data-country="dz">Algeria</option>
                                            <option data-country="as">American Samoa</option>
                                            <option data-country="ad">Andorra</option>
                                            <option data-country="ao">Angola</option>
                                            <option data-country="ai">Anguilla</option>
                                            <option data-country="aq">Antarctica</option>
                                            <option data-country="ag">Antigua & Barbuda</option>
                                            <option data-country="ar">Argentina</option>
                                            <option data-country="am">Armenia</option>
                                            <option data-country="aw">Aruba</option>
                                            <option data-country="au">Australia</option>
                                            <option data-country="at">Austria</option>
                                            <option data-country="az">Azerbaijan</option>
                                            <option data-country="bs">Bahamas</option>
                                            <option data-country="bh">Bahrain</option>
                                            <option data-country="bd">Bangladesh</option>
                                            <option data-country="bb">Barbados</option>
                                            <option data-country="by">Belarus</option>
                                            <option data-country="be">Belgium</option>
                                            <option data-country="bz">Belize</option>
                                            <option data-country="bj">Benin</option>
                                            <option data-country="bm">Bermuda</option>
                                            <option data-country="bt">Bhutan</option>
                                            <option data-country="bo">Bolivia</option>
                                            <option data-country="bq">Caribbean Netherlands</option>
                                            <option data-country="ba">Bosnia & Herzegovina</option>
                                            <option data-country="bw">Botswana</option>
                                            <option data-country="bv">Bouvet Island</option>
                                            <option data-country="br">Brazil</option>
                                            <option data-country="io">British Indian Ocean Territory</option>
                                            <option data-country="bn">Brunei</option>
                                            <option data-country="bg">Bulgaria</option>
                                            <option data-country="bf">Burkina Faso</option>
                                            <option data-country="bi">Burundi</option>
                                            <option data-country="kh">Cambodia</option>
                                            <option data-country="cm">Cameroon</option>
                                            <option data-country="ca">Canada</option>
                                            <option data-country="cv">Cape Verde</option>
                                            <option data-country="ky">Cayman Islands</option>
                                            <option data-country="cf">Central African Republic</option>
                                            <option data-country="td">Chad</option>
                                            <option data-country="cl">Chile</option>
                                            <option data-country="cn">China</option>
                                            <option data-country="cx">Christmas Island</option>
                                            <option data-country="cc">Cocos (Keeling) Islands</option>
                                            <option data-country="co">Colombia</option>
                                            <option data-country="km">Comoros</option>
                                            <option data-country="cg">Congo - Brazzaville</option>
                                            <option data-country="cd">Congo - Kinshasa</option>
                                            <option data-country="ck">Cook Islands</option>
                                            <option data-country="cr">Costa Rica</option>
                                            <option data-country="ci">Côte d'Ivoire</option>
                                            <option data-country="hr">Croatia</option>
                                            <option data-country="cu">Cuba</option>
                                            <option data-country="cu">Curaçao</option>
                                            <option data-country="cy">Cyprus</option>
                                            <option data-country="cz">Czechia</option>
                                            <option data-country="dk">Denmark</option>
                                            <option data-country="dj">Djibouti</option>
                                            <option data-country="dm">Dominica</option>
                                            <option data-country="do">Dominican Republic</option>
                                            <option data-country="ec">Ecuador</option>
                                            <option data-country="eg">Egypt</option>
                                            <option data-country="sv">El Salvador</option>
                                            <option data-country="gq">Equatorial Guinea</option>
                                            <option data-country="er">Eritrea</option>
                                            <option data-country="ee">Estonia</option>
                                            <option data-country="et">Ethiopia</option>
                                            <option data-country="fk">Falkland Islands (Islas Malvinas)</option>
                                            <option data-country="fo">Faroe Islands</option>
                                            <option data-country="fj">Fiji</option>
                                            <option data-country="fi">Finland</option>
                                            <option data-country="fr">France</option>
                                            <option data-country="gf">French Guiana</option>
                                            <option data-country="pf">French Polynesia</option>
                                            <option data-country="tf">French Southern Territories</option>
                                            <option data-country="ga">Gabon</option>
                                            <option data-country="gm">Gambia</option>
                                            <option data-country="ge">Georgia</option>
                                            <option data-country="de">Germany</option>
                                            <option data-country="gh">Ghana</option>
                                            <option data-country="gi">Gibraltar</option>
                                            <option data-country="gr">Greece</option>
                                            <option data-country="gl">Greenland</option>
                                            <option data-country="gd">Grenada</option>
                                            <option data-country="gp">Guadeloupe</option>
                                            <option data-country="gu">Guam</option>
                                            <option data-country="gt">Guatemala</option>
                                            <option data-country="gg">Guernsey</option>
                                            <option data-country="gn">Guinea</option>
                                            <option data-country="gw">Guinea-Bissau</option>
                                            <option data-country="gy">Guyana</option>
                                            <option data-country="ht">Haiti</option>
                                            <option data-country="hm">Heard & McDonald Islands</option>
                                            <option data-country="va">Vatican City</option>
                                            <option data-country="hn">Honduras</option>
                                            <option data-country="hk">Hong Kong</option>
                                            <option data-country="hu">Hungary</option>
                                            <option data-country="is">Iceland</option>
                                            <option data-country="in">India</option>
                                            <option data-country="id">Indonesia</option>
                                            <option data-country="ir">Iran</option>
                                            <option data-country="iq">Iraq</option>
                                            <option data-country="ie">Ireland</option>
                                            <option data-country="im">Isle of Man</option>
                                            <option data-country="il">Israel</option>
                                            <option data-country="it">Italy</option>
                                            <option data-country="jm">Jamaica</option>
                                            <option data-country="jp">Japan</option>
                                            <option data-country="je">Jersey</option>
                                            <option data-country="jo">Jordan</option>
                                            <option data-country="kz">Kazakhstan</option>
                                            <option data-country="ke">Kenya</option>
                                            <option data-country="ki">Kiribati</option>
                                            <option data-country="kp">North Korea</option>
                                            <option data-country="kr">South Korea</option>
                                            <option data-country="xk">Kosovo</option>
                                            <option data-country="kw">Kuwait</option>
                                            <option data-country="kg">Kyrgyzstan</option>
                                            <option data-country="la">Laos</option>
                                            <option data-country="lv">Latvia</option>
                                            <option data-country="lb">Lebanon</option>
                                            <option data-country="ls">Lesotho</option>
                                            <option data-country="lr">Liberia</option>
                                            <option data-country="ly">Libya</option>
                                            <option data-country="li">Liechtenstein</option>
                                            <option data-country="lt">Lithuania</option>
                                            <option data-country="lu">Luxembourg</option>
                                            <option data-country="mo">Macao</option>
                                            <option data-country="mk">North Macedonia</option>
                                            <option data-country="mg">Madagascar</option>
                                            <option data-country="mw">Malawi</option>
                                            <option data-country="my">Malaysia</option>
                                            <option data-country="mv">Maldives</option>
                                            <option data-country="ml">Mali</option>
                                            <option data-country="mt">Malta</option>
                                            <option data-country="mh">Marshall Islands</option>
                                            <option data-country="mq">Martinique</option>
                                            <option data-country="mr">Mauritania</option>
                                            <option data-country="mu">Mauritius</option>
                                            <option data-country="yt">Mayotte</option>
                                            <option data-country="mx">Mexico</option>
                                            <option data-country="fm">Micronesia</option>
                                            <option data-country="md">Moldova</option>
                                            <option data-country="mc">Monaco</option>
                                            <option data-country="mn">Mongolia</option>
                                            <option data-country="me">Montenegro</option>
                                            <option data-country="ms">Montserrat</option>
                                            <option data-country="ma">Morocco</option>
                                            <option data-country="mz">Mozambique</option>
                                            <option data-country="mm">Myanmar (Burma)</option>
                                            <option data-country="na">Namibia</option>
                                            <option data-country="nr">Nauru</option>
                                            <option data-country="np">Nepal</option>
                                            <option data-country="nl">Netherlands</option>
                                            <option data-country="cu">Curaçao</option>
                                            <option data-country="nc">New Caledonia</option>
                                            <option data-country="nz">New Zealand</option>
                                            <option data-country="ni">Nicaragua</option>
                                            <option data-country="ne">Niger</option>
                                            <option data-country="ng">Nigeria</option>
                                            <option data-country="nu">Niue</option>
                                            <option data-country="nf">Norfolk Island</option>
                                            <option data-country="mp">Northern Mariana Islands</option>
                                            <option data-country="no">Norway</option>
                                            <option data-country="om">Oman</option>
                                            <option data-country="pk">Pakistan</option>
                                            <option data-country="pw">Palau</option>
                                            <option data-country="ps">Palestine</option>
                                            <option data-country="pa">Panama</option>
                                            <option data-country="pg">Papua New Guinea</option>
                                            <option data-country="py">Paraguay</option>
                                            <option data-country="pe">Peru</option>
                                            <option data-country="ph">Philippines</option>
                                            <option data-country="pn">Pitcairn Islands</option>
                                            <option data-country="pl">Poland</option>
                                            <option data-country="pt">Portugal</option>
                                            <option data-country="pr">Puerto Rico</option>
                                            <option data-country="qa">Qatar</option>
                                            <option data-country="re">Réunion</option>
                                            <option data-country="ro">Romania</option>
                                            <option data-country="ru">Russia</option>
                                            <option data-country="rw">Rwanda</option>
                                            <option data-country="bl">St. Barthélemy</option>
                                            <option data-country="sh">St. Helena</option>
                                            <option data-country="kn">St. Kitts & Nevis</option>
                                            <option data-country="lc">St. Lucia</option>
                                            <option data-country="mf">St. Martin</option>
                                            <option data-country="pm">St. Pierre & Miquelon</option>
                                            <option data-country="vc">St. Vincent & Grenadines</option>
                                            <option data-country="ws">Samoa</option>
                                            <option data-country="sm">San Marino</option>
                                            <option data-country="st">São Tomé & Príncipe</option>
                                            <option data-country="sa">Saudi Arabia</option>
                                            <option data-country="sn">Senegal</option>
                                            <option data-country="rs">Serbia</option>
                                            <option data-country="sr">Serbia</option>
                                            <option data-country="sc">Seychelles</option>
                                            <option data-country="sl">Sierra Leone</option>
                                            <option data-country="sg">Singapore</option>
                                            <option data-country="sx">Sint Maarten</option>
                                            <option data-country="sk">Slovakia</option>
                                            <option data-country="si">Slovenia</option>
                                            <option data-country="sb">Solomon Islands</option>
                                            <option data-country="so">Somalia</option>
                                            <option data-country="za">South Africa</option>
                                            <option data-country="gs">South Georgia & South Sandwich Islands</option>
                                            <option data-country="ss">South Sudan</option>
                                            <option data-country="es">Spain</option>
                                            <option data-country="lk">Sri Lanka</option>
                                            <option data-country="sd">Sudan</option>
                                            <option data-country="sr">Suriname</option>
                                            <option data-country="sj">Svalbard & Jan Mayen</option>
                                            <option data-country="sz">Eswatini</option>
                                            <option data-country="se">Sweden</option>
                                            <option data-country="ch">Switzerland</option>
                                            <option data-country="sy">Syria</option>
                                            <option data-country="tw">Taiwan</option>
                                            <option data-country="tj">Tajikistan</option>
                                            <option data-country="tz">Tanzania</option>
                                            <option data-country="th">Thailand</option>
                                            <option data-country="tl">Timor-Leste</option>
                                            <option data-country="tg">Togo</option>
                                            <option data-country="tk">Tokelau</option>
                                            <option data-country="to">Tonga</option>
                                            <option data-country="tt">Trinidad & Tobago</option>
                                            <option data-country="tn">Tunisia</option>
                                            <option data-country="tr">Turkey</option>
                                            <option data-country="tm">Turkmenistan</option>
                                            <option data-country="tc">Turks & Caicos Islands</option>
                                            <option data-country="tv">Tuvalu</option>
                                            <option data-country="ug">Uganda</option>
                                            <option data-country="ua">Ukraine</option>
                                            <option data-country="ae">United Arab Emirates</option>
                                            <option data-country="gb">United Kingdom</option>
                                            <option data-country="us" selected>United States</option>
                                            <option data-country="um">U.S. Outlying Islands</option>
                                            <option data-country="uy">Uruguay</option>
                                            <option data-country="uz">Uzbekistan</option>
                                            <option data-country="vu">Vanuatu</option>
                                            <option data-country="ve">Venezuela</option>
                                            <option data-country="vn">Vietnam</option>
                                            <option data-country="vg">British Virgin Islands</option>
                                            <option data-country="vi">U.S. Virgin Islands</option>
                                            <option data-country="wf">Wallis & Futuna</option>
                                            <option data-country="eh">Western Sahara</option>
                                            <option data-country="ye">Yemen</option>
                                            <option data-country="zm">Zambia</option>
                                            <option data-country="zw">Zimbabwe</option>
                                        </select>
                                    </div>
    
                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <label class="form-label">State <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="State">
                                    </div>

                                    <div class="col-lg-6 mb-4">
                                        <label class="form-label">City <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="City">
                                    </div>
                                </div>

                                    <!-- <div class="col-lg-6 mb-4">
                                        <label class="form-label">Timezone </label>
                                        <select class="form-control" data-select2-selector="tzone">
                                            <option data-tzone="feather-moon">(GMT -12:00) Eniwetok, Kwajalein</option>
                                            <option data-tzone="feather-moon">(GMT -11:00) Midway Island, Samoa</option>
                                            <option data-tzone="feather-moon">(GMT -10:00) Hawaii</option>
                                            <option data-tzone="feather-moon">(GMT -9:30) Taiohae</option>
                                            <option data-tzone="feather-moon">(GMT -9:00) Alaska</option>
                                            <option data-tzone="feather-moon">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
                                            <option data-tzone="feather-moon">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
                                            <option data-tzone="feather-moon">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
                                            <option data-tzone="feather-moon">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
                                            <option data-tzone="feather-moon">(GMT -4:30) Caracas</option>
                                            <option data-tzone="feather-moon">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
                                            <option data-tzone="feather-moon">(GMT -3:30) Newfoundland</option>
                                            <option data-tzone="feather-moon">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
                                            <option data-tzone="feather-moon">(GMT -2:00) Mid-Atlantic</option>
                                            <option data-tzone="feather-moon">(GMT -1:00) Azores, Cape Verde Islands</option>
                                            <option data-tzone="feather-sunrise">(GMT) Western Europe Time</option>
                                            <option data-tzone="feather-sun">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</option>
                                            <option data-tzone="feather-sun">(GMT +2:00) Kaliningrad, South Africa</option>
                                            <option data-tzone="feather-sun">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
                                            <option data-tzone="feather-sun">(GMT +3:30) Tehran</option>
                                            <option data-tzone="feather-sun">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
                                            <option data-tzone="feather-sun">(GMT +4:30) Kabul</option>
                                            <option data-tzone="feather-sun">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
                                            <option data-tzone="feather-sun">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
                                            <option data-tzone="feather-sun">(GMT +5:30) Kolkata</option>
                                            <option data-tzone="feather-sun">(GMT +5:45) Kathmandu, Pokhara</option>
                                            <option data-tzone="feather-sun">(GMT +6:00) Almaty, Dhaka, Colombo</option>
                                            <option data-tzone="feather-sun">(GMT +6:30) Yangon, Mandalay</option>
                                            <option data-tzone="feather-sun">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
                                            <option data-tzone="feather-sun">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
                                            <option data-tzone="feather-sun">(GMT +8:45) Eucla</option>
                                            <option data-tzone="feather-sun">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
                                            <option data-tzone="feather-sun">(GMT +9:30) Adelaide, Darwin</option>
                                            <option data-tzone="feather-sun">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
                                            <option data-tzone="feather-sun">(GMT +10:30) Lord Howe Island</option>
                                            <option data-tzone="feather-sun">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
                                            <option data-tzone="feather-sun">(GMT +11:30) Norfolk Island</option>
                                            <option data-tzone="feather-sun">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
                                            <option data-tzone="feather-sun">(GMT +12:45) Chatham Islands</option>
                                            <option data-tzone="feather-sun">(GMT +13:00) Apia, Nukualofa</option>
                                            <option data-tzone="feather-sun">(GMT +14:00) Line Islands, Tokelau</option>
                                        </select>
                                    </div>
                                </div>
                                <hr class="my-5">
                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <label class="form-label">Currency</label>
                                        <select class="form-control" data-select2-selector="currency">
                                            <option data-currency="af">AFN - Afghan Afghani - ؋</option>
                                            <option data-currency="al">ALL - Albanian Lek - Lek</option>
                                            <option data-currency="dz">DZD - Algerian Dinar - دج</option>
                                            <option data-currency="ao">AOA - Angolan Kwanza - Kz</option>
                                            <option data-currency="ar">ARS - Argentine Peso - $</option>
                                            <option data-currency="am">AMD - Armenian Dram - ֏</option>
                                            <option data-currency="aw">AWG - Aruban Florin - ƒ</option>
                                            <option data-currency="au">AUD - Australian Dollar - $</option>
                                            <option data-currency="az">AZN - Azerbaijani Manat - m</option>
                                            <option data-currency="bs">BSD - Bahamian Dollar - B$</option>
                                            <option data-currency="bh">BHD - Bahraini Dinar - .د.ب</option>
                                            <option data-currency="bd">BDT - Bangladeshi Taka - ৳</option>
                                            <option data-currency="bb">BBD - Barbadian Dollar - Bds$</option>
                                            <option data-currency="by">BYR - Belarusian Ruble - Br</option>
                                            <option data-currency="be">BEF - Belgian Franc - fr</option>
                                            <option data-currency="bz">BZD - Belize Dollar - $</option>
                                            <option data-currency="bm">BMD - Bermudan Dollar - $</option>
                                            <option data-currency="bt">BTN - Bhutanese Ngultrum - Nu.</option>
                                            <option data-currency="bt">BTC - Bitcoin - ฿</option>
                                            <option data-currency="bo">BOB - Bolivian Boliviano - Bs.</option>
                                            <option data-currency="ba">BAM - Bosnia-Herzegovina Convertible Mark - KM</option>
                                            <option data-currency="bw">BWP - Botswanan Pula - P</option>
                                            <option data-currency="br">BRL - Brazilian Real - R$</option>
                                            <option data-currency="gb">GBP - British Pound Sterling - £</option>
                                            <option data-currency="bn">BND - Brunei Dollar - B$</option>
                                            <option data-currency="bg">BGN - Bulgarian Lev - Лв.</option>
                                            <option data-currency="bi">BIF - Burundian Franc - FBu</option>
                                            <option data-currency="kh">KHR - Cambodian Riel - KHR</option>
                                            <option data-currency="ca">CAD - Canadian Dollar - $</option>
                                            <option data-currency="cv">CVE - Cape Verdean Escudo - $</option>
                                            <option data-currency="ky">KYD - Cayman Islands Dollar - $</option>
                                            <option data-currency="fr">XOF - CFA Franc BCEAO - CFA</option>
                                            <option data-currency="fr">XAF - CFA Franc BEAC - FCFA</option>
                                            <option data-currency="fr">XPF - CFP Franc - ₣</option>
                                            <option data-currency="cl">CLP - Chilean Peso - $</option>
                                            <option data-currency="cn">CNY - Chinese Yuan - ¥</option>
                                            <option data-currency="co">COP - Colombian Peso - $</option>
                                            <option data-currency="km">KMF - Comorian Franc - CF</option>
                                            <option data-currency="cd">CDF - Congolese Franc - FC</option>
                                            <option data-currency="cr">CRC - Costa Rican ColÃ³n - ₡</option>
                                            <option data-currency="hr">HRK - Croatian Kuna - kn</option>
                                            <option data-currency="cu">CUC - Cuban Convertible Peso - $, CUC</option>
                                            <option data-currency="cz">CZK - Czech Republic Koruna - Kč</option>
                                            <option data-currency="dk">DKK - Danish Krone - Kr.</option>
                                            <option data-currency="dj">DJF - Djiboutian Franc - Fdj</option>
                                            <option data-currency="do">DOP - Dominican Peso - $</option>
                                            <option data-currency="bq">XCD - East Caribbean Dollar - $</option>
                                            <option data-currency="eg">EGP - Egyptian Pound - ج.م</option>
                                            <option data-currency="er">ERN - Eritrean Nakfa - Nfk</option>
                                            <option data-currency="ee">EEK - Estonian Kroon - kr</option>
                                            <option data-currency="et">ETB - Ethiopian Birr - Nkf</option>
                                            <option data-currency="eu">EUR - Euro - €</option>
                                            <option data-currency="fk">FKP - Falkland Islands Pound - £</option>
                                            <option data-currency="fj">FJD - Fijian Dollar - FJ$</option>
                                            <option data-currency="gm">GMD - Gambian Dalasi - D</option>
                                            <option data-currency="ge">GEL - Georgian Lari - ლ</option>
                                            <option data-currency="de">DEM - German Mark - DM</option>
                                            <option data-currency="gh">GHS - Ghanaian Cedi - GH₵</option>
                                            <option data-currency="gi">GIP - Gibraltar Pound - £</option>
                                            <option data-currency="gr">GRD - Greek Drachma - ₯, Δρχ, Δρ</option>
                                            <option data-currency="gt">GTQ - Guatemalan Quetzal - Q</option>
                                            <option data-currency="gn">GNF - Guinean Franc - FG</option>
                                            <option data-currency="gy">GYD - Guyanaese Dollar - $</option>
                                            <option data-currency="ht">HTG - Haitian Gourde - G</option>
                                            <option data-currency="hn">HNL - Honduran Lempira - L</option>
                                            <option data-currency="hk">HKD - Hong Kong Dollar - $</option>
                                            <option data-currency="hu">HUF - Hungarian Forint - Ft</option>
                                            <option data-currency="is">ISK - Icelandic KrÃ³na - kr</option>
                                            <option data-currency="in">INR - Indian Rupee - ₹</option>
                                            <option data-currency="id">IDR - Indonesian Rupiah - Rp</option>
                                            <option data-currency="ir">IRR - Iranian Rial - ﷼</option>
                                            <option data-currency="iq">IQD - Iraqi Dinar - د.ع</option>
                                            <option data-currency="il">ILS - Israeli New Sheqel - ₪</option>
                                            <option data-currency="it">ITL - Italian Lira - L,£</option>
                                            <option data-currency="jm">JMD - Jamaican Dollar - J$</option>
                                            <option data-currency="jp">JPY - Japanese Yen - ¥</option>
                                            <option data-currency="jo">JOD - Jordanian Dinar - ا.د</option>
                                            <option data-currency="kz">KZT - Kazakhstani Tenge - лв</option>
                                            <option data-currency="ke">KES - Kenyan Shilling - KSh</option>
                                            <option data-currency="kw">KWD - Kuwaiti Dinar - ك.د</option>
                                            <option data-currency="kg">KGS - Kyrgystani Som - лв</option>
                                            <option data-currency="la">LAK - Laotian Kip - ₭</option>
                                            <option data-currency="lv">LVL - Latvian Lats - Ls</option>
                                            <option data-currency="lb">LBP - Lebanese Pound - £</option>
                                            <option data-currency="ls">LSL - Lesotho Loti - L</option>
                                            <option data-currency="lr">LRD - Liberian Dollar - $</option>
                                            <option data-currency="ly">LYD - Libyan Dinar - د.ل</option>
                                            <option data-currency="lt">LTL - Lithuanian Litas - Lt</option>
                                            <option data-currency="mo">MOP - Macanese Pataca - $</option>
                                            <option data-currency="mk">MKD - Macedonian Denar - ден</option>
                                            <option data-currency="mg">MGA - Malagasy Ariary - Ar</option>
                                            <option data-currency="mw">MWK - Malawian Kwacha - MK</option>
                                            <option data-currency="my">MYR - Malaysian Ringgit - RM</option>
                                            <option data-currency="mv">MVR - Maldivian Rufiyaa - Rf</option>
                                            <option data-currency="mr">MRO - Mauritanian Ouguiya - MRU</option>
                                            <option data-currency="mu">MUR - Mauritian Rupee - ₨</option>
                                            <option data-currency="mx">MXN - Mexican Peso - $</option>
                                            <option data-currency="md">MDL - Moldovan Leu - L</option>
                                            <option data-currency="mn">MNT - Mongolian Tugrik - ₮</option>
                                            <option data-currency="ma">MAD - Moroccan Dirham - MAD</option>
                                            <option data-currency="mz">MZM - Mozambican Metical - MT</option>
                                            <option data-currency="mm">MMK - Myanmar Kyat - K</option>
                                            <option data-currency="na">NAD - Namibian Dollar - $</option>
                                            <option data-currency="np">NPR - Nepalese Rupee - ₨</option>
                                            <option data-currency="nl">ANG - Netherlands Antillean Guilder - ƒ</option>
                                            <option data-currency="tw">TWD - New Taiwan Dollar - $</option>
                                            <option data-currency="nz">NZD - New Zealand Dollar - $</option>
                                            <option data-currency="ni">NIO - Nicaraguan CÃ³rdoba - C$</option>
                                            <option data-currency="ng">NGN - Nigerian Naira - ₦</option>
                                            <option data-currency="kp">KPW - North Korean Won - ₩</option>
                                            <option data-currency="no">NOK - Norwegian Krone - kr</option>
                                            <option data-currency="om">OMR - Omani Rial - .ع.ر</option>
                                            <option data-currency="pk">PKR - Pakistani Rupee - ₨</option>
                                            <option data-currency="pa">PAB - Panamanian Balboa - B/.</option>
                                            <option data-currency="pg">PGK - Papua New Guinean Kina - K</option>
                                            <option data-currency="py">PYG - Paraguayan Guarani - ₲</option>
                                            <option data-currency="pe">PEN - Peruvian Nuevo Sol - S/.</option>
                                            <option data-currency="ph">PHP - Philippine Peso - ₱</option>
                                            <option data-currency="pl">PLN - Polish Zloty - zł</option>
                                            <option data-currency="qa">QAR - Qatari Rial - ق.ر</option>
                                            <option data-currency="ro">RON - Romanian Leu - lei</option>
                                            <option data-currency="ru">RUB - Russian Ruble - ₽</option>
                                            <option data-currency="rw">RWF - Rwandan Franc - FRw</option>
                                            <option data-currency="sv">SVC - Salvadoran ColÃ³n - ₡</option>
                                            <option data-currency="ws">WST - Samoan Tala - SAT</option>
                                            <option data-currency="sa">SAR - Saudi Riyal - ﷼</option>
                                            <option data-currency="sr">RSD - Serbian Dinar - din</option>
                                            <option data-currency="sc">SCR - Seychellois Rupee - SRe</option>
                                            <option data-currency="sl">SLL - Sierra Leonean Leone - Le</option>
                                            <option data-currency="sg">SGD - Singapore Dollar - $</option>
                                            <option data-currency="sk">SKK - Slovak Koruna - Sk</option>
                                            <option data-currency="sb">SBD - Solomon Islands Dollar - Si$</option>
                                            <option data-currency="so">SOS - Somali Shilling - Sh.so.</option>
                                            <option data-currency="za">ZAR - South African Rand - R</option>
                                            <option data-currency="kr">KRW - South Korean Won - ₩</option>
                                            <option data-currency="lk">LKR - Sri Lankan Rupee - Rs</option>
                                            <option data-currency="sh">SHP - St. Helena Pound - £</option>
                                            <option data-currency="sd">SDG - Sudanese Pound - .س.ج</option>
                                            <option data-currency="sr">SRD - Surinamese Dollar - $</option>
                                            <option data-currency="sz">SZL - Swazi Lilangeni - E</option>
                                            <option data-currency="se">SEK - Swedish Krona - kr</option>
                                            <option data-currency="ch">CHF - Swiss Franc - CHf</option>
                                            <option data-currency="sy">SYP - Syrian Pound - LS</option>
                                            <option data-currency="st">STD - São Tomé and Príncipe Dobra - Db</option>
                                            <option data-currency="tj">TJS - Tajikistani Somoni - SM</option>
                                            <option data-currency="tz">TZS - Tanzanian Shilling - TSh</option>
                                            <option data-currency="th">THB - Thai Baht - ฿</option>
                                            <option data-currency="to">TOP - Tongan pa'anga - $</option>
                                            <option data-currency="tt">TTD - Trinidad & Tobago Dollar - $</option>
                                            <option data-currency="tn">TND - Tunisian Dinar - ت.د</option>
                                            <option data-currency="tr">TRY - Turkish Lira - ₺</option>
                                            <option data-currency="tm">TMT - Turkmenistani Manat - T</option>
                                            <option data-currency="ug">UGX - Ugandan Shilling - USh</option>
                                            <option data-currency="ua">UAH - Ukrainian Hryvnia - ₴</option>
                                            <option data-currency="ae">AED - United Arab Emirates Dirham - إ.د</option>
                                            <option data-currency="uy">UYU - Uruguayan Peso - $</option>
                                            <option data-currency="us" selected>USD - US Dollar - $</option>
                                            <option data-currency="uz">UZS - Uzbekistan Som - лв</option>
                                            <option data-currency="vu">VUV - Vanuatu Vatu - VT</option>
                                            <option data-currency="ve">VEF - Venezuelan BolÃ­var - Bs</option>
                                            <option data-currency="vn">VND - Vietnamese Dong - ₫</option>
                                            <option data-currency="ye">YER - Yemeni Rial - ﷼</option>
                                            <option data-currency="zm">ZMK - Zambian Kwacha - ZK</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <label class="form-label">Status </label>
                                        <select class="form-control" data-select2-selector="status">
                                            <option value="teal" data-bg="bg-teal">Sent</option>
                                            <option value="secondary" data-bg="bg-secondary">Draft</option>
                                            <option value="primary" data-bg="bg-primary">Open</option>
                                            <option value="warning" data-bg="bg-warning">Revised</option>
                                            <option value="danger" data-bg="bg-danger">Declined</option>
                                            <option value="success" data-bg="bg-success">Accepted</option>
                                        </select>
                                    </div> -->
                                </div>
                                <hr class="my-5">
                                <div class="row mb-4">
                                    <div class="form-check form-switch form-switch-sm ps-5">
                                        <input class="form-check-input c-pointer" type="checkbox" id="commentSwitch">
                                        <label class="form-check-label fw-500 text-dark c-pointer" for="commentSwitch">Allow Comments</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="row">
                                    <!-- <div class="col-lg-8"> -->
                                        <div class="mb-4">
                                            <h5 class="fw-bold">Add Items:</h5>
                                            <span class="fs-12 text-muted">Add items to proposal</span>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered overflow-hidden" id="tab_logic">
                                                <thead>
                                                    <tr class="single-item">
                                                        <th class="text-center">Sr.No.</th>
                                                        <th class="text-center wd-450">Service</th>
                                                        <th class="text-center wd-150">Qty</th>
                                                        <th class="text-center wd-150">Price</th>
                                                        <th class="text-center wd-150">Hourly/Day</th>
                                                        <th class="text-center wd-150">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr id="addr0">
                                                        <td>1</td>
                                                        <td><input type="text" name="service[]" placeholder="Service Name" class="form-control"></td>
                                                        <td><input type="number" name="qty[]" placeholder="Qty" class="form-control qty" step="1" min="1"></td>
                                                        <td><input type="number" name="price[]" placeholder="Unit Price" class="form-control price" step="1.00"></td>
                                                        <td><input type="text" name="hourly[]" placeholder="Hourly/Day" class="form-control"></td>
                                                        <td><input type="number" name="total[]" placeholder="0.00" class="form-control total" readonly=""></td>
                                                    </tr>
                                                    <tr id="addr1">
                                                        <td>2</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>   
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d-flex justify-content-end gap-2 mt-3">
                                            <button id="delete_row" class="btn btn-md bg-soft-danger text-danger">Delete</button>
                                            <button id="add_row" class="btn btn-md btn-primary">Add Items</button>
                                        </div>
                                    </div>
                                
                                    <!-- <div class="col-lg-4"> -->
                                        <div class="mb-4">
                                            <div class="row">
                                            <h5 class="fw-bold">Grand Total:</h5>
                                            <span class="fs-12 text-muted">Grand total proposal</span>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="tab_logic_total">
                                                <tbody>
                                                    <tr class="single-item">
                                                        <th class="fs-10 text-dark text-uppercase">Sub Total</th>
                                                        <td class="w-25"><input type="number" name="sub_total" placeholder="0.00" class="form-control border-0 bg-transparent p-0" id="sub_total" readonly=""></td>
                                                    </tr>
                                                    <tr class="single-item">
                                                        <th class="fs-10 text-dark text-uppercase">Tax</th>
                                                        <td class="w-25">
                                                            <div class="input-group mb-2 mb-sm-0">
                                                                <input type="number" class="form-control border-0 bg-transparent p-0" id="tax" placeholder="0">
                                                                <div class="input-group-addon">%</div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr class="single-item">
                                                        <th class="fs-10 text-dark text-uppercase">Discount</th>
                                                        <td class="w-25">
                                                            <div class="input-group mb-2 mb-sm-0">
                                                                <input type="number" class="form-control border-0 bg-transparent p-0" id="discount" placeholder="0">
                                                                <div class="input-group-addon">%</div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="single-item">
                                                        <th class="fs-10 text-dark text-uppercase">Tax Amount</th>
                                                        <td class="w-25"><input type="number" name="tax_amount" id="tax_amount" placeholder="0.00" class="form-control border-0 bg-transparent p-0" readonly=""></td>
                                                    </tr>

                                                    <tr class="single-item">
                                                        <th class="fs-10 text-dark text-uppercase">Discount Amount</th>
                                                        <td class="w-25"><input type="number" name="discount_amount" id="discount_amount" placeholder="0.00" class="form-control border-0 bg-transparent p-0" readonly=""></td>
                                                    </tr>
                                                    <tr class="single-item">
                                                        <th class="fs-10 text-dark text-uppercase bg-gray-100">Grand Total</th>
                                                        <td class="bg-gray-100 w-25"><input type="number" name="total_amount" id="total_amount" placeholder="0.00" class="form-control border-0 bg-transparent p-0 fw-700 text-dark" readonly=""></td>
                                                    </tr>

                                                    <tr class="single-item">
                                                        <th class="fs-10 text-dark text-uppercase">Amount in Words</th>
                                                        <td class="w-25">
                                                            <div class="input-group mb-2 mb-sm-0">
                                                                <input type="text" class="form-control border-0 bg-transparent p-0" placeholder="Amount in Words">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr class="single-item">
                                                        <th class="fs-10 text-dark text-uppercase">Notes</th>
                                                        <td class="w-25">
                                                            <div class="input-group mb-2 mb-sm-0">
                                                                <input type="text" class="form-control border-0 bg-transparent p-0" placeholder="Notes">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr class="single-item">
                                                        <th class="fs-10 text-dark text-uppercase">Terms & Conditions</th>
                                                        <td class="w-25">
                                                            <div class="input-group mb-2 mb-sm-0">
                                                                <input type="text" class="form-control border-0 bg-transparent p-0" placeholder="Terms & Conditions">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
        <!-- [ Footer ] start -->
        <footer class="footer">
            <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">
                <span>Copyright ©</span>
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
            <div class="d-flex align-items-center gap-4">
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Help</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Terms</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Privacy</a>
            </div>
        </footer>
        <!-- [ Footer ] end -->
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Sent Proposal l !-->
    <!--! ================================================================ !-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="proposalSent">
        <div class="offcanvas-header ht-80 px-4 border-bottom border-gray-5">
            <div>
                <h2 class="fs-16 fw-bold text-truncate-1-line">Sent Proposal</h2>
                <small class="fs-12 text-muted">Sent proposal to your client's</small>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="py-3 px-4 d-flex justify-content-between align-items-center border-bottom border-bottom-dashed border-gray-5 bg-gray-100">
            <div>
                <span class="fw-bold text-dark">Date:</span>
                <span class="fs-11 fw-medium text-muted">25 MAY, 2023</span>
            </div>
            <div>
                <span class="fw-bold text-dark">Proposal No:</span>
                <span class="fs-12 fw-bold text-primary c-pointer">#NXL369852</span>
            </div>
        </div>
        <div class="offcanvas-body">
            <div class="form-group mb-4">
                <label class="form-label">From: <span class="text-danger">*</span></label>
                <input type="email" class="form-control" value="wrapcode.info@gmail.com" placeholder="Clients..." readonly="" required>
            </div>
            <div class="form-group mb-4">
                <label class="form-label">To: <span class="text-danger">*</span></label>
                <input class="form-control" name="tomailcontent" value="wrapcode.info@gmail.com" placeholder="To..." required>
            </div>
            <div class="form-group mb-4">
                <label class="form-label">Subject: <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Subject..." required>
            </div>
            <div class="form-group mb-4">
                <label class="form-label">URL: </label>
                <input type="url" class="form-control" placeholder="URL...">
            </div>
            <div class="form-group">
                <label class="form-label">Messages:</label>
                <div data-editor-target="editor" class="ht-200"></div>
            </div>
        </div>
        <div class="px-4 gap-2 d-flex align-items-center ht-80 border border-end-0 border-gray-2">
            <a href="javascript:void(0);" class="btn btn-primary w-50" data-alert-target="#alertMessage">Sent Proposal</a>
            <a href="javascript:void(0);" class="btn btn-danger w-50" data-bs-dismiss="offcanvas">Cancel</a>
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! [End] Sent Proposal !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Search Modal !-->
    <!--! ================================================================ !-->
    <div class="modal fade-scale" id="searchModal" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-top modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header search-form py-0">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="feather-search fs-4 text-muted"></i>
                        </span>
                        <input type="text" class="form-control search-input-field" placeholder="Search...">
                        <span class="input-group-text">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </span>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="searching-for mb-5">
                        <h4 class="fs-13 fw-normal text-gray-600 mb-3">I'm searching for...</h4>
                        <div class="row g-1">
                            <div class="col-md-4 col-xl-2">
                                <a href="javascript:void(0);" class="d-flex align-items-center gap-2 px-3 lh-lg border rounded-pill">
                                    <i class="feather-compass"></i>
                                    <span>Recent</span>
                                </a>
                            </div>
                            <div class="col-md-4 col-xl-2">
                                <a href="javascript:void(0);" class="d-flex align-items-center gap-2 px-3 lh-lg border rounded-pill">
                                    <i class="feather-command"></i>
                                    <span>Command</span>
                                </a>
                            </div>
                            <div class="col-md-4 col-xl-2">
                                <a href="javascript:void(0);" class="d-flex align-items-center gap-2 px-3 lh-lg border rounded-pill">
                                    <i class="feather-users"></i>
                                    <span>Peoples</span>
                                </a>
                            </div>
                            <div class="col-md-4 col-xl-2">
                                <a href="javascript:void(0);" class="d-flex align-items-center gap-2 px-3 lh-lg border rounded-pill">
                                    <i class="feather-file"></i>
                                    <span>Files</span>
                                </a>
                            </div>
                            <div class="col-md-4 col-xl-2">
                                <a href="javascript:void(0);" class="d-flex align-items-center gap-2 px-3 lh-lg border rounded-pill">
                                    <i class="feather-video"></i>
                                    <span>Medias</span>
                                </a>
                            </div>
                            <div class="col-md-4 col-xl-2">
                                <a href="javascript:void(0);" class="d-flex align-items-center gap-2 px-3 lh-lg border rounded-pill">
                                    <span>More</span>
                                    <i class="feather-chevron-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="recent-result mb-5">
                        <h4 class="fs-13 fw-normal text-gray-600 mb-3">Recnet <span class="badge small bg-gray-200 rounded ms-1 text-dark">3</span></h4>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-airplay fs-5"></i>
                                <div class="fs-13 fw-semibold">CRM dashboard redesign</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">/<i class="feather-command ms-1 fs-12"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-file-plus fs-5"></i>
                                <div class="fs-13 fw-semibold">Create new eocument</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">N /<i class="feather-command ms-1 fs-12"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-user-plus fs-5"></i>
                                <div class="fs-13 fw-semibold">Invite project colleagues</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">P /<i class="feather-command ms-1 fs-12"></i></a>
                        </div>
                    </div>
                    <div class="command-result mb-5">
                        <h4 class="fs-13 fw-normal text-gray-600 mb-3">Command <span class="badge small bg-gray-200 rounded ms-1 text-dark">5</span></h4>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-user fs-5"></i>
                                <div class="fs-13 fw-semibold">My profile</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">P /<i class="feather-command ms-1 fs-12"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-users fs-5"></i>
                                <div class="fs-13 fw-semibold">Team profile</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">T /<i class="feather-command ms-1 fs-12"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-user-plus fs-5"></i>
                                <div class="fs-13 fw-semibold">Invite colleagues</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">I /<i class="feather-command ms-1 fs-12"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-briefcase fs-5"></i>
                                <div class="fs-13 fw-semibold">Create new project</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">CP /<i class="feather-command ms-1 fs-12"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-life-buoy fs-5"></i>
                                <div class="fs-13 fw-semibold">Support center</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">SC /<i class="feather-command ms-1 fs-12"></i></a>
                        </div>
                    </div>
                    <div class="file-result mb-4">
                        <h4 class="fs-13 fw-normal text-gray-600 mb-3">Files <span class="badge small bg-gray-200 rounded ms-1 text-dark">3</span></h4>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-folder-plus fs-5"></i>
                                <div class="fs-13 fw-semibold">CRM Desing Project <span class="fs-12 fw-normal text-muted">(56.74 MB)</span></div>
                            </a>
                            <a href="javascript:void(0);" class="file-download"><i class="feather-download"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-folder-plus fs-5"></i>
                                <div class="fs-13 fw-semibold">Admin Dashboard Project <span class="fs-12 fw-normal text-muted">(46.83 MB)</span></div>
                            </a>
                            <a href="javascript:void(0);" class="file-download"><i class="feather-download"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-folder-plus fs-5"></i>
                                <div class="fs-13 fw-semibold">CRM Dashboard Project <span class="fs-12 fw-normal text-muted">(68.59 MB)</span></div>
                            </a>
                            <a href="javascript:void(0);" class="file-download"><i class="feather-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! [End] Search Modal !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Language Select !-->
    <!--! ================================================================ !-->
    <div class="modal fade-scale" id="languageSelectModal" aria-hidden="true" aria-labelledby="languageSelectModalLabel" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="languageSelectModalLabel">Select Language</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/sa.svg" alt="" class="img-fluid"></div>
                                <span>Arabic </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/bd.svg" alt="" class="img-fluid"></div>
                                <span>Bengali </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/ch.svg" alt="" class="img-fluid"></div>
                                <span>Chinese </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/hr.svg" alt="" class="img-fluid"></div>
                                <span>Croatian </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/dk.svg" alt="" class="img-fluid"></div>
                                <span>Danish </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/nl.svg" alt="" class="img-fluid"></div>
                                <span>Dutch </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select active">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/us.svg" alt="" class="img-fluid"></div>
                                <span>English </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/fi.svg" alt="" class="img-fluid"></div>
                                <span>Filipino </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/fr.svg" alt="" class="img-fluid"></div>
                                <span>French </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/de.svg" alt="" class="img-fluid"></div>
                                <span>German </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/il.svg" alt="" class="img-fluid"></div>
                                <span>Hebrew </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/in.svg" alt="" class="img-fluid"></div>
                                <span>Hindi </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/id.svg" alt="" class="img-fluid"></div>
                                <span>Indonesian </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/it.svg" alt="" class="img-fluid"></div>
                                <span>Italian </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/jp.svg" alt="" class="img-fluid"></div>
                                <span>Japanese </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/kr.svg" alt="" class="img-fluid"></div>
                                <span>Korean </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/ir.svg" alt="" class="img-fluid"></div>
                                <span>Persian </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/pt.svg" alt="" class="img-fluid"></div>
                                <span>Portuguese </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/ru.svg" alt="" class="img-fluid"></div>
                                <span>Russian </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/es.svg" alt="" class="img-fluid"></div>
                                <span>Spanish </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/sv.svg" alt="" class="img-fluid"></div>
                                <span>Swedish </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/tr.svg" alt="" class="img-fluid"></div>
                                <span>Turkish </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/pk.svg" alt="" class="img-fluid"></div>
                                <span>Urdo</span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/vi.svg" alt="" class="img-fluid"></div>
                                <span>Vietnamese</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! [End] Language Select !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! BEGIN: Downloading Toast !-->
    <!--! ================================================================ !-->
    <div class="position-fixed" style="right: 5px; bottom: 5px; z-index: 999999">
        <div id="toast" class="toast bg-black hide" data-bs-delay="3000" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header px-3 bg-transparent d-flex align-items-center justify-content-between border-bottom border-light border-opacity-10">
                <div class="text-white mb-0 mr-auto">Downloading...</div>
                <a href="javascript:void(0)" class="ms-2 mb-1 close fw-normal" data-bs-dismiss="toast" aria-label="Close">
                    <span class="text-white">&times;</span>
                </a>
            </div>
            <div class="toast-body p-3 text-white">
                <h6 class="fs-13 text-white">Project.zip</h6>
                <span class="text-light fs-11">4.2mb of 5.5mb</span>
            </div>
            <div class="toast-footer p-3 pt-0 border-top border-light border-opacity-10">
                <div class="progress mt-3" style="height: 5px">
                    <div class="progress-bar progress-bar-striped progress-bar-animated w-75 bg-dark" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! END: Downloading Toast !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! BEGIN: Theme Customizer !-->
    <!--! ================================================================ !-->
    <div class="theme-customizer">
        <div class="customizer-handle">
            <a href="javascript:void(0);" class="cutomizer-open-trigger bg-primary">
                <i class="feather-settings"></i>
            </a>
        </div>
        <div class="customizer-sidebar-wrapper">
            <div class="customizer-sidebar-header px-4 ht-80 border-bottom d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Theme Settings</h5>
                <a href="javascript:void(0);" class="cutomizer-close-trigger d-flex">
                    <i class="feather-x"></i>
                </a>
            </div>
            <div class="customizer-sidebar-body position-relative p-4" data-scrollbar-target="#psScrollbarInit">
                <!--! BEGIN: [Navigation] !-->
                <div class="position-relative px-3 pb-3 pt-4 mt-3 mb-5 border border-gray-2 theme-options-set">
                    <label class="py-1 px-2 fs-8 fw-bold text-uppercase text-muted text-spacing-2 bg-white border border-gray-2 position-absolute rounded-2 options-label" style="top: -12px">Navigation</label>
                    <div class="row g-2 theme-options-items app-navigation" id="appNavigationList">
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-navigation-light" name="app-navigation" value="1" data-app-navigation="app-navigation-light" checked>
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-navigation-light">Light</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-navigation-dark" name="app-navigation" value="2" data-app-navigation="app-navigation-dark">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-navigation-dark">Dark</label>
                        </div>
                    </div>
                </div>
                <!--! END: [Navigation] !-->
                <!--! BEGIN: [Header] !-->
                <div class="position-relative px-3 pb-3 pt-4 mt-3 mb-5 border border-gray-2 theme-options-set mt-5">
                    <label class="py-1 px-2 fs-8 fw-bold text-uppercase text-muted text-spacing-2 bg-white border border-gray-2 position-absolute rounded-2 options-label" style="top: -12px">Header</label>
                    <div class="row g-2 theme-options-items app-header" id="appHeaderList">
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-header-light" name="app-header" value="1" data-app-header="app-header-light" checked>
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-header-light">Light</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-header-dark" name="app-header" value="2" data-app-header="app-header-dark">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-header-dark">Dark</label>
                        </div>
                    </div>
                </div>
                <!--! END: [Header] !-->
                <!--! BEGIN: [Skins] !-->
                <div class="position-relative px-3 pb-3 pt-4 mt-3 mb-5 border border-gray-2 theme-options-set">
                    <label class="py-1 px-2 fs-8 fw-bold text-uppercase text-muted text-spacing-2 bg-white border border-gray-2 position-absolute rounded-2 options-label" style="top: -12px">Skins</label>
                    <div class="row g-2 theme-options-items app-skin" id="appSkinList">
                        <div class="col-6 text-center position-relative single-option light-button active">
                            <input type="radio" class="btn-check" id="app-skin-light" name="app-skin" value="1" data-app-skin="app-skin-light">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-skin-light">Light</label>
                        </div>
                        <div class="col-6 text-center position-relative single-option dark-button">
                            <input type="radio" class="btn-check" id="app-skin-dark" name="app-skin" value="2" data-app-skin="app-skin-dark">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-skin-dark">Dark</label>
                        </div>
                    </div>
                </div>
                <!--! END: [Skins] !-->
                <!--! BEGIN: [Typography] !-->
                <div class="position-relative px-3 pb-3 pt-4 mt-3 mb-0 border border-gray-2 theme-options-set">
                    <label class="py-1 px-2 fs-8 fw-bold text-uppercase text-muted text-spacing-2 bg-white border border-gray-2 position-absolute rounded-2 options-label" style="top: -12px">Typography</label>
                    <div class="row g-2 theme-options-items font-family" id="fontFamilyList">
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-lato" name="font-family" value="1" data-font-family="app-font-family-lato">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-lato">Lato</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-rubik" name="font-family" value="2" data-font-family="app-font-family-rubik">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-rubik">Rubik</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-inter" name="font-family" value="3" data-font-family="app-font-family-inter" checked>
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-inter">Inter</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-cinzel" name="font-family" value="4" data-font-family="app-font-family-cinzel">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-cinzel">Cinzel</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-nunito" name="font-family" value="6" data-font-family="app-font-family-nunito">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-nunito">Nunito</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-roboto" name="font-family" value="7" data-font-family="app-font-family-roboto">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-roboto">Roboto</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-ubuntu" name="font-family" value="8" data-font-family="app-font-family-ubuntu">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-ubuntu">Ubuntu</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-poppins" name="font-family" value="9" data-font-family="app-font-family-poppins">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-poppins">Poppins</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-raleway" name="font-family" value="10" data-font-family="app-font-family-raleway">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-raleway">Raleway</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-system-ui" name="font-family" value="11" data-font-family="app-font-family-system-ui">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-system-ui">System UI</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-noto-sans" name="font-family" value="12" data-font-family="app-font-family-noto-sans">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-noto-sans">Noto Sans</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-fira-sans" name="font-family" value="13" data-font-family="app-font-family-fira-sans">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-fira-sans">Fira Sans</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-work-sans" name="font-family" value="14" data-font-family="app-font-family-work-sans">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-work-sans">Work Sans</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-open-sans" name="font-family" value="15" data-font-family="app-font-family-open-sans">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-open-sans">Open Sans</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-maven-pro" name="font-family" value="16" data-font-family="app-font-family-maven-pro">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-maven-pro">Maven Pro</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-quicksand" name="font-family" value="17" data-font-family="app-font-family-quicksand">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-quicksand">Quicksand</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-montserrat" name="font-family" value="18" data-font-family="app-font-family-montserrat">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-montserrat">Montserrat</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-josefin-sans" name="font-family" value="19" data-font-family="app-font-family-josefin-sans">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-josefin-sans">Josefin Sans</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-ibm-plex-sans" name="font-family" value="20" data-font-family="app-font-family-ibm-plex-sans">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-ibm-plex-sans">IBM Plex Sans</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-source-sans-pro" name="font-family" value="5" data-font-family="app-font-family-source-sans-pro">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-source-sans-pro">Source Sans Pro</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-montserrat-alt" name="font-family" value="21" data-font-family="app-font-family-montserrat-alt">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-montserrat-alt">Montserrat Alt</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-roboto-slab" name="font-family" value="22" data-font-family="app-font-family-roboto-slab">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-roboto-slab">Roboto Slab</label>
                        </div>
                    </div>
                </div>
                <!--! END: [Typography] !-->
            </div>
            <div class="customizer-sidebar-footer px-4 ht-60 border-top d-flex align-items-center gap-2">
                <div class="flex-fill w-50">
                    <a href="javascript:void(0);" class="btn btn-danger" data-style="reset-all-common-style">Reset</a>
                </div>
                <div class="flex-fill w-50">
                    <a href="javascript:void(0);" class="btn btn-primary">Download</a>
                </div>
            </div>
        </div>
    </div>

    <!--! ================================================================ !-->
    <!--! [End] Theme Customizer !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! Footer Script !-->
    <!--! ================================================================ !-->
    <!--! BEGIN: Vendors JS !-->
    <script src="{{asset('admin/vendors/js/vendors.min.js') }}"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src="{{asset('admin/vendors/js/tagify.min.js') }}"></script>
    <script src="{{asset('admin/vendors/js/tagify-data.min.js') }}"></script>
    <script src="{{asset('admin/vendors/js/quill.min.js') }}"></script>
    <script src="{{asset('admin/vendors/js/select2.min.js') }}"></script>
    <script src="{{asset('admin/vendors/js/select2-active.min.js') }}"></script>
    <script src="{{asset('admin/vendors/js/datepicker.min.js') }}"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="{{asset('admin/js/common-init.min.js') }}"></script>
    <script src="{{asset('admin/js/proposal-create-init.min.js') }}"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="{{asset('admin/js/theme-customizer-init.min.js') }}"></script>
    <!--! END: Theme Customizer !-->
    <script>
        $(document).ready(function() {
            var i = 1;
            $("#add_row").click(function() {
                b = i - 1;
                $("#addr" + i)
                    .html($("#addr" + b).html())
                    .find("td:first-child")
                    .html(i + 1);
                $("#tab_logic").append('<tr id="addr' + (i + 1) + '"></tr>');
                i++;
            });
            $("#delete_row").click(function() {
                if (i > 1) {
                    $("#addr" + (i - 1)).html("");
                    i--;
                }
                calc();
            });
            $("#tab_logic tbody").on("keyup change", function() {
                calc();
            });
            $("#tax").on("keyup change", function() {
                calc_total();
            });
        });

        function calc() {
    $("#tab_logic tbody tr").each(function(i, element) {
        var html = $(this).html();
        if (html != "") {
            var qty = $(this).find(".qty").val();
            var price = $(this).find(".price").val();
            $(this)
                .find(".total")
                .val(qty * price);
            calc_total();
        }
    });
}

function calc_total() {
    var total = 0;
    $(".total").each(function() {
        total += parseFloat($(this).val());
    });
    
    $("#sub_total").val(total.toFixed(2));
    
    var tax_rate = parseFloat($("#tax").val());
    var tax_amount = (total / 100) * tax_rate;
    $("#tax_amount").val(tax_amount.toFixed(2));
    
    var discount = parseFloat($("#discount").val()) || 0; // Ensure discount is a number, default to 0 if not set
    var discount_amount = (total / 100) * discount;
    $("#discount_amount").val(discount_amount.toFixed(2));
    
    var total_amount = total + tax_amount - discount_amount;
    $("#total_amount").val(total_amount.toFixed(2));
}
    </script>
</body>

</html>