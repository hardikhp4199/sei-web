<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="flexilecode" />
    <title>Admin Subservices</title>
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
                        <li class="breadcrumb-item"><a href="#">Sub-Service</a></li>
                        <li class="breadcrumb-item">Create</li>
                    </ul>
                </div>
            </div>
            <div class="main-content">
                <div class="row">
                    <form action="{{ route('subservice.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label class="form-label">Select Service <span class="text-danger">*</span></label>
                            <select class="form-control" name="service_id" id="service_id" required>
                                <option value="">Select Service</option>
                                @foreach($services as $service)
                                    <option value="{{ $service->ServiceMasterIDP }}">{{ $service->ServiceName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Sub-Service Name <span class="text-danger">*</span></label>
                            <input type="text" name="subservice_name" id="subservice_name" class="form-control" placeholder="Sub-Service Name" required>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <label class="form-label">Status</label>
                            <select class="form-control" name="status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Notes</label>
                            <textarea rows="5" class="form-control" name="notes" placeholder="Notes"></textarea>
                        </div>
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <button type="submit" class="btn btn-primary successAlertMessage">
                                <i class="feather-save me-2"></i> Add Sub-Service
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-12">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
@include('Adminpanel.admin_footerlink')
</html>

