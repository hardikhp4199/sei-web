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
                        <li class="breadcrumb-item"><a href="#">Add-Expert</a></li>
                        <li class="breadcrumb-item"></li>
                    </ul>
                </div>
            </div>
            <div class="main-content">
            <div class="row">
                        
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Personal Details</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('expertpersonaldetails.store') }}">
                    @csrf
                    <div class="row">
                        <!-- First Column -->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="first_name" class="form-label">First Name<span class="text-danger">*</span></label>
                                <input type="text" id="first_name" class="form-control" name="first_name" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                                <input type="email" id="email" class="form-control" name="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="legal_name" class="form-label">Legal Name<span class="text-danger">*</span></label>
                                <input type="text" id="legal_name" class="form-control" name="legal_name" required>
                            </div>

                            <div class="mb-3">
                                <label for="registered_address" class="form-label">Registered Address<span class="text-danger">*</span></label>
                                <input type="text" id="registered_address" class="form-control" name="registered_address" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="registered_address" class="form-label">City<span class="text-danger">*</span></label>
                                <input type="text" id="registered_address" class="form-control" name="city" required>
                            </div>
                        </div> <!-- end col -->

                        <!-- Second Column -->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="last_name" class="form-label">Last Name<span class="text-danger">*</span></label>
                                <input type="text" id="last_name" class="form-control" name="last_name" required>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone<span class="text-danger">*</span></label>
                                <input type="text" id="phone" class="form-control" name="phone" required>
                            </div>

                            <div class="mb-3">
                                <label for="pan_no" class="form-label">PAN No<span class="text-danger">*</span></label>
                                <input type="text" id="pan_no" class="form-control" name="pan_no" required>
                            </div>

                            <div class="mb-3">
                                <label for="country" class="form-label">Country<span class="text-danger">*</span></label>
                                <input type="text" id="country" class="form-control" name="country" required>
                            </div>

                            
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    
                </form>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div> <!-- end row -->


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Bank Details</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <form method="POST" action="{{ route('bankdetails.store') }}">
                            @csrf
                        <div class="row">
                            <div class="mb-3">
                                <label for="bank_name" class="form-label">Bank Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="bank_name" name="bank_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="account_number" class="form-label">Account Number<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="account_number" name="account_number" required>
                            </div>
                        </div>
                            <div class="mb-3">
                                <label for="ifsc_code" class="form-label">IFSC Code<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="ifsc_code" name="ifsc_code" required>
                            </div>
                           
                        </form>
                    </div>
                   
                    </div>
                
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div> <!-- end row -->


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title mb-0">Company Details<span class="text-danger">*</span></h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('companydetails.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="company_name" class="form-label">Company Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="company_name" name="company_name" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="location_of_business" class="form-label">Location of Business<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="location_of_business" name="location_of_business" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="gst_no" class="form-label">GST No<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="gst_no" name="gst_no" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="nature_of_business" class="form-label">Nature of Business<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nature_of_business" name="nature_of_business" required>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="types_of_firm" class="form-label">Type of Firm<span class="text-danger">*</span></label>
                                <select class="form-control" id="types_of_firm" name="types_of_firm" required>
                                    <option value="corporation">Corporation</option>
                                    <option value="partnership">Partnership</option>
                                    <option value="cooperative">Cooperative</option>
                                    <option value="non_profit_organization">Non-profit Organization</option>
                                    <option value="private_limited_company">Private Limited Company</option>
                                    <option value="public_limited_company">Public Limited Company</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="year_of_incorporation" class="form-label">Year of Incorporation<span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="year_of_incorporation" name="year_of_incorporation" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="no_of_employees" class="form-label">No. of Employees<span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="no_of_employees" name="no_of_employees" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="last_3_years_annual_turnover" class="form-label">Last 3 Years Annual Turnover<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="last_3_years_annual_turnover" name="last_3_years_annual_turnover" required>
                            </div>

                            
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </form>
            </div> <!-- end card-body-->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div> <!-- end row -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title mb-0">Service Details</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('expert.activities.store') }}" class="needs-validation" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="Service_Name" class="form-label">Service Name:<span class="text-danger">*</span></label>
                                <select class="form-control" id="Service_Name" name="Service_Name" required>
                                   
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="SubService_Name" class="form-label">Subservice Name:<span class="text-danger">*</span></label>
                                <select class="form-control" id="SubService_Name" name="SubService_Name" required>
                                   
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="Activity_Name" class="form-label">Activity Name:<span class="text-danger">*</span></label>
                                <select class="form-control" id="Activity_Name" name="Activity_Name" required>
                                   
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="estimate_time" class="form-label">Estimate Time (Days/Hours):<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="estimate_time" name="estimate_time" required />
                            </div>

                            <div class="form-group mb-3">
                                <label for="commission_amount" class="form-label">Commission Amount:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="commission_amount" name="commission_amount" required />
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="INR_rate" class="form-label">INR Rate (Day/Hour/Fixed):<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="INR_rate" name="INR_rate" required />
                            </div>

                            <div class="form-group mb-3">
                                <label for="international_rate" class="form-label">International Rate:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="international_rate" name="international_rate" required />
                            </div>

                            <div class="form-group mb-3">
                                <label for="currency" class="form-label">Currency:<span class="text-danger">*</span></label>
                                <select class="form-control" id="currency" name="currency" required>
                                    <option value="">Select Currency</option>
                                    <option value="AUD">Australian Dollar</option>
                                    <option value="CAD">Canadian Dollar</option>
                                    <option value="USD">US Dollar</option>
                                    <!-- Add other currency options as needed -->
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="rate" class="form-label">Rate:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="rate" name="rate" required />
                            </div>

                         

                            <div class="form-group mb-3">
                                <label for="GST_TDS" class="form-label">GST/TDS:<span class="text-danger">*</span></label>
                                <select class="form-control" id="GST_TDS" name="GST_TDS" required>
                                    <option value="">Select GST/TDS</option>
                                    <option value="GST">GST</option>
                                    <option value="TDS">TDS</option>
                                </select>
                            </div>

                            <div id="gst-fields" style="display:none;">
                                <div class="form-group mb-3">
                                    <label for="CGST" class="form-label">CGST:</label>
                                    <input type="text" class="form-control" id="CGST" name="CGST" />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="SGST" class="form-label">SGST:</label>
                                    <input type="text" class="form-control" id="SGST" name="SGST" />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="IGST" class="form-label">IGST:</label>
                                    <input type="text" class="form-control" id="IGST" name="IGST" />
                                </div>
                            </div>

                            <div id="tds-fields" style="display:none;">
                                <div class="form-group mb-3">
                                    <label for="tds_percentage" class="form-label">TDS Percentage:</label>
                                    <input type="text" class="form-control" id="tds_percentage" name="tds_percentage" />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="tds_amount" class="form-label">TDS Amount:</label>
                                    <input type="text" class="form-control" id="tds_amount" name="tds_amount" />
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    
                </form>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div> <!-- end row -->

<script>
    document.getElementById('GST_TDS').addEventListener('change', function () {
        var gstFields = document.getElementById('gst-fields');
        var tdsFields = document.getElementById('tds-fields');
        if (this.value === 'GST') {
            gstFields.style.display = 'block';
            tdsFields.style.display = 'none';
        } else if (this.value === 'TDS') {
            gstFields.style.display = 'none';
            tdsFields.style.display = 'block';
        } else {
            gstFields.style.display = 'none';
            tdsFields.style.display = 'none';
        }
    });
</script>

                    </div>

                    </div>
                        
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <button type="submit" class="btn btn-primary successAlertMessage">
                                <i class="feather-save me-2"></i> Add Client
                            </button>
                        </div>
                    </form>
                </div>
                <!-- <div class="col-lg-12">
                    <div class="card stretch stretch-full">
                        <div class="card-header">
                            <h5 class="card-title">Sub-Service List</h5>
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
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
@include('Adminpanel.admin_footerlink')
</html>

