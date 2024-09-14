<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="flexilecode" />
    <title>Edit Sub-Service</title>
    @include('Adminpanel.admin_headerlink')
</head>

<body>
    <nav class="nxl-navigation">
        @include('Adminpanel.siderbarmenu')
    </nav>

    <main class="nxl-container">
        <div class="nxl-content">
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Edit Sub-Service</h5>
                    </div>
                </div>
            </div>

            <div class="main-content">
                <div class="row">
                    <form action="{{ route('subservice.update', $subservice->SubService_IDP) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label class="form-label">Select Service <span class="text-danger">*</span></label>
                            <select class="form-control" name="service_id" id="service_id" required>
                                <option value="">Select Service</option>
                                @foreach($services as $service)
                                    <option value="{{ $service->ServiceMasterIDP }}" {{ $service->ServiceMasterIDP == $subservice->ServiceM_IDF ? 'selected' : '' }}>
                                        {{ $service->ServiceName }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Sub-Service Name <span class="text-danger">*</span></label>
                            <input type="text" name="subservice_name" id="subservice_name" class="form-control" placeholder="Sub-Service Name" value="{{ $subservice->SubService_Name }}" required>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <label class="form-label">Status</label>
                            <select class="form-control" name="status">
                                <option value="1" {{ $subservice->Status ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ !$subservice->Status ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Notes</label>
                            <textarea rows="5" class="form-control" name="notes" placeholder="Notes">{{ $subservice->Notes }}</textarea>
                        </div>
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <button type="submit" class="btn btn-primary successAlertMessage">
                                <i class="feather-save me-2"></i> Update Sub-Service
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <footer class="footer">
            @include('Adminpanel.footerarea')
        </footer>
    </main>

    @include('Adminpanel.admin_footerlink')
</body>

</html>
