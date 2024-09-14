<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="flexilecode" />
    <title>Edit Activity</title>
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
                        <h5 class="m-b-10">Edit Activity</h5>
                    </div>
                </div>
            </div>
            <div class="main-content">
                <div class="row">
                    <form action="{{ route('activity.update', $activity->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label class="form-label">Select Service <span class="text-danger">*</span></label>
                            <select class="form-control" name="servicem_idf" id="servicem_idf" required>
                                <option value="">Select Service</option>
                                @foreach($services as $service)
                                    <option value="{{ $service->ServiceMasterIDP }}" {{ $activity->servicem_idf == $service->ServiceMasterIDP ? 'selected' : '' }}>{{ $service->ServiceName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Select Sub-Service <span class="text-danger">*</span></label>
                            <select class="form-control" name="subservice_idf" id="subservice_idf" required>
                                <option value="">Select Sub-Service</option>
                                @foreach($subservices as $subservice)
                                    <option value="{{ $subservice->SubService_IDP }}" {{ $activity->subservice_idf == $subservice->SubService_IDP ? 'selected' : '' }}>{{ $subservice->SubService_Name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Activity Name <span class="text-danger">*</span></label>
                            <input type="text" name="activity_name" class="form-control" placeholder="Activity Name" value="{{ $activity->activity_name }}" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Rate Type <span class="text-danger">*</span></label>
                            <select class="form-control" name="rate_type" required>
                                <option value="hourly" {{ $activity->rate_type == 'hourly' ? 'selected' : '' }}>Hourly</option>
                                <option value="daily" {{ $activity->rate_type == 'daily' ? 'selected' : '' }}>Daily</option>
                                <option value="fixed" {{ $activity->rate_type == 'fixed' ? 'selected' : '' }}>Fixed</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Rate <span class="text-danger">*</span></label>
                            <input type="number" step="0.01" name="rate" class="form-control" placeholder="Rate" value="{{ $activity->rate }}" required>
                        </div>
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <button type="submit" class="btn btn-primary">
                                <i class="feather-save me-2"></i> Update Activity
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    @include('Adminpanel.admin_footerlink')
</body>
</html>
