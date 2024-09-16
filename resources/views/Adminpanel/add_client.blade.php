<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="flexilecode" />
    <title>Admin Add Client</title>
    @include('Adminpanel.admin_headerlink')
</head>
<body>
    <nav class="nxl-navigation">
        @include('Adminpanel.siderbarmenu')
    </nav>
    <header class="nxl-header">
    </header>
    <main class="nxl-container">
        <div class="nxl-content">
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Master</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Add-Client</a></li>
                        <li class="breadcrumb-item"></li>
                    </ul>
                </div>
            </div>
            <div class="main-content">
                <div class="row">
                    <form action="{{ route('admin.client.store') }}" class="form-group" method="post" >
                        {{csrf_field()}}
                    <div class="row">
                        <div class="col-lg-4 mb-4">
                            <label class="form-label">First Name <span class="text-danger">*</span></label>
                            <input type="text" name="first_name" id="subservice_name" class="form-control" placeholder="First Name">
                        </div>

                        <div class="col-lg-4 mb-4">
                            <label class="form-label">Last Name <span class="text-danger">*</span></label>
                            <input type="text" name="last_name" id="subservice_name" class="form-control" placeholder="Last Name" required>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <label class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="text" name="email" id="subservice_name" class="form-control" placeholder="Email" required>
                        </div>

                        

                    </div>

                    <div class="row">
                        <div class="col-lg-4 mb-4">
                            <label class="form-label">User name <span class="text-danger">*</span></label>
                            <input type="text" name="username" id="subservice_name" class="form-control" placeholder="User Name" required>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <label class="form-label">Password<span class="text-danger">*</span></label>
                            <input type="password" name="password" id="subservice_name" class="form-control" placeholder="Password" required>
                            
                        </div>
                    </div>

                    <div class="row">

                    <div class="col-lg-4 mb-4">
                            <label class="form-label">Phone <span class="text-danger">*</span></label>
                            <input type="text" name="phone" id="subservice_name" class="form-control" placeholder="Phone number" required>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <label class="form-label">Company name <span class="text-danger">*</span></label>
                            <input type="text" name="company_name" id="subservice_name" class="form-control" placeholder="Company Name" required>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <label class="form-label">Business Category<span class="text-danger">*</span></label>
                            <input type="text" name="business_category" id="subservice_name" class="form-control" placeholder="Business Category" required>
                        </div>

                    </div>

                    <div class="row">

                    <div class="col-lg-8 mb-4">
                            <label class="form-label">Address<span class="text-danger">*</span></label>
                            <input type="text" name="address" id="subservice_name" class="form-control" placeholder="Address" required>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <label class="form-label">Country <span class="text-danger">*</span></label>
                            <input type="text" name="country" id="subservice_name" class="form-control" placeholder="Country" required>
                        </div>

                       
                    <div class="row">

                        <div class="col-lg-4 mb-4">
                                <label class="form-label">City <span class="text-danger">*</span></label>
                                <input type="text" name="city" id="subservice_name" class="form-control" placeholder="City" required>
                            </div>

                            <div class="col-lg-4 mb-4">
                                <label class="form-label">State <span class="text-danger">*</span></label>
                                <input type="text" name="state" id="subservice_name" class="form-control" placeholder="States" required>
                            </div>

                            <div class="col-lg-4 mb-4">
                                <label class="form-label">Zip<span class="text-danger">*</span></label>
                                <input type="text" name="zip" id="subservice_name" class="form-control" placeholder="Zip" required>
                            </div>

                    </div>

                    </div>
                        
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <button type="submit" class="btn btn-primary successAlertMessage">
                                <i class="feather-save me-2"></i> Add Client
                            </button>
                        </div>
                    </form>
                </div>
                 <div class="col-lg-12">
                    <div class="card stretch stretch-full">
                        <div class="card-header">
                            <h5 class="card-title">Client List</h5>
                        </div>
                        <div class="card-body custom-card-action p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sr. No</th>
                                            <th scope="col" class="w-50">Sub-Service</th>
                                            <th scope="col" class="w-50">Service</th>
                                            <th scope="col" class="text-end">Status</th>
                                            <th scope="col" class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (isset($subservices) && $subservices->count() > 0)
                                            @foreach ($subservices as $subservice)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $subservice->SubService_Name }}</td>
                                                    <td>{{ $subservice->service->ServiceName }}</td>
                                                    <td>
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <span class="badge {{ $subservice->Status ? 'bg-soft-success text-success' : 'bg-soft-danger text-danger' }}">
                                                                {{ $subservice->Status ? 'Active' : 'Inactive' }}
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <a href="{{ route('subservice.edit', ['id' => $subservice->SubService_IDP]) }}" class="avatar-text avatar-md">
                                                                <i class="feather-edit"></i>
                                                            </a>
                                                            <a href="{{ route('subservice.delete', ['id' => $subservice->SubService_IDP]) }}" class="avatar-text avatar-md" onclick="return confirm('Are you sure want to delete?')">
                                                                <i class="feather-trash-2"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5" class="text-center">No sub-services found.</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
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
                                <li>
                                <a href="javascript:void(0);">3</a>
                                </li>
                                <li><a href="javascript:void(0);">4</a></li>
                                <li>
                                    <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
@include('Adminpanel.admin_footerlink')
</html>

