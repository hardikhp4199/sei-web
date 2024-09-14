<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="flexilecode" />
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>Admin Service</title>
    <!--! END:  Apps Title-->
   


    @include('Adminpanel.admin_headerlink')
</head>

<body>
    <!--! ================================================================ !-->
    <!--! [Start] Navigation Manu !-->
    <!--! ================================================================ !-->
    <nav class="nxl-navigation">
    @include('Adminpanel.siderbarmenu')
     
    </nav>
    <!--! ================================================================ !-->
    <!--! [End]  Navigation Manu !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Header !-->
    <!--! ================================================================ !-->
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
                                <input type="text" class="form-control search-input-field" placeholder="Search...." />
                                <span class="input-group-text">
                                    <button type="button" class="btn-close"></button>
                                </span>
                            </div>
                            <div class="dropdown-divider mt-0"></div>
                            
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
                                <img src="{{ asset('admin/images/avatar/2.png') }}" alt="" class="rounded me-3 border" />
                                <div class="notifications-desc">
                                    <a href="javascript:void(0);" class="font-body text-truncate-2-line"> <span class="fw-semibold text-dark">Malanie Hanvey</span> We should talk about that at lunch!</a>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="notifications-date text-muted border-bottom border-bottom-dashed">2 minutes ago</div>
                                        <div class="d-flex align-items-center float-end gap-2">
                                            <a href="javascript:void(0);" class="d-block wd-8 ht-8 rounded-circle bg-gray-300" data-bs-toggle="tooltip" title="Make as Read"></a>
                      d                   <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" title="Remove">
                                                <i class="feather-x fs-12"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="notifications-item">
                                <img src="{{ asset('admin/images/avatar/3.png') }}" alt="" class="rounded me-3 border" />
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
                                <img src="{{ asset('admin/images/avatar/4.png') }}" alt="" class="rounded me-3 border" />
                                <div class="notifications-desc">
                                    <a href="javascript:void(0);" class="font-body text-truncate-2-line"> <span class="fw-semibold text-dark">Archie Cantones</span> Don't forget to pickup Jeremy after school!</a>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="notifications-date text-muted border-bottom border-bottom-dashed">53 minutes ago</div>
                              d       <div class="d-flex align-items-center float-end gap-2">
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
                            <img src="{{ asset('admin/images/avatar/1.png') }}" alt="user-image" class="img-fluid user-avtar me-0" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-user-dropdown">
                            <div class="dropdown-header">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('admin/images/avatar/1.png') }}" alt="user-image" class="img-fluid user-avtar" />
                                    <div>
                                        <h6 class="text-dark mb-0">SEI <span class="badge bg-soft-success text-success ms-1">PRO</span></h6>
                                        <span class="fs-12 fw-medium text-muted">seigroup@outlook.com</span>
                                    </div>
                                </div>
                            </div>
                        
                           
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-user"></i>
                                <span>Profile Details</span>
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
                            <a href="{{ route('logout') }}" class="dropdown-item">
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
                     <h5 class="m-b-10">Master</h5>
                  </div>
                  <ul class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">Service</a></li>
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
               <form action="{{ route('add.service') }}" method="POST">
    @csrf
    <div class="col-xl-12">
        <div class="card stretch stretch-full">
            <div class="card-body">
                <div class="mb-4">
                    <label class="form-label">Service <span class="text-danger">*</span></label>
                    <input type="text" name="Servicename" id="Servicename" class="form-control" placeholder="Service" required>
                </div>
                <div class="col-lg-4 mb-4">
                    <label class="form-label">Status</label>
                    <select class="form-control" data-select2-selector="status" name="status">
                        <option value="1" data-bg="bg-success">Active</option>
                        <option value="0" data-bg="bg-danger">In Active</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="form-label">Notes</label>
                    <textarea rows="5" class="form-control" id="notes" placeholder="Notes" name="servicedetails"></textarea>
                </div>
                <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                    <button type="submit" class="btn btn-primary successAlertMessage">
                        <i class="feather-save me-2"></i> Add Service
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
                  </div>


                  <div class="col-lg-12">
                <div class="card stretch stretch-full">
                    <div class="card-header">
                        <h5 class="card-title">Service List</h5>
                        <div class="card-header-action">
                            <!-- Card header actions -->
                        </div>
                    </div>
                    <div class="card-body custom-card-action p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Sr. No</th>
                                        <th scope="col" class="w-50">Service</th>
                                        <th scope="col" class="text-end">Status</th>
                                        <th scope="col" class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if (isset($services) && $services->count() > 0)
                                @foreach ($services as $service)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $service->ServiceName }}</td>
                                            <td>
                                                <div class="hstack gap-2 justify-content-end">
                                                    <span class="badge {{ $service->Status ? 'bg-soft-success text-success' : 'bg-soft-danger text-danger' }}">
                                                        {{ $service->Status ? 'Active' : 'Inactive' }}
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="hstack gap-2 justify-content-end">
                                                <a href="{{ route('edit.service', ['id' => $service->ServiceMasterIDP]) }}" class="avatar-text avatar-md">
                                                    <i class="feather-edit"></i>
                                                </a>

                                                    <a href="{{ route('delete.service',['id' => $service->ServiceMasterIDP]) }}" class="avatar-text avatar-md" onclick="return confirm('Are you sure want to delete?')">
                                                        <i class="feather-trash-2"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                    <p>No services found.</p>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                            <div class="card-footer">
                                <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);" class="active">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);">8</a></li>
                                    <li><a href="javascript:void(0);">9</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
            <!-- [ Main Content ] end -->
         </div>
        <!-- [ Footer ] start -->
        <footer class="footer">
         
        @include('Adminpanel.footerarea')
        
        </footer>
        <!-- [ Footer ] end -->
    </main>




    @include('Adminpanel.admin_footerlink')
</body>

</html> 