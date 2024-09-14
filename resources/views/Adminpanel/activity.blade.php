<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="flexilecode" />
    <title>Manage Activities</title>
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
                        <h5 class="m-b-10">Manage Activities</h5>
                    </div>
                </div>
            </div>
            <div class="main-content">
                <div class="row">
                    <form action="{{ route('activity.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label class="form-label">Select Service <span class="text-danger">*</span></label>
                            <select class="form-control" name="servicem_idf" id="servicem_idf" required>
                                <option value="">Select Service</option>
                                @foreach($services as $service)
                                    <option value="{{ $service->ServiceMasterIDP }}">{{ $service->ServiceName }}</option>
                                @endforeach
                            </select>
                        </div>
                       
                        <div class="mb-4">
                            <label class="form-label" for="subservice">Select Sub-Service <span class="text-danger">*</span></label>
                            <select class="form-control" name="subservice_idf" id="subservice" required>
                                <option value="">Select Sub-Service</option>
                                @foreach($subservices as $subservice)
                                    <option value="{{ $subservice->SubService_IDP }}">{{ $subservice->SubService_Name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Activity Name <span class="text-danger">*</span></label>
                            <input type="text" name="activity_name" class="form-control" placeholder="Activity Name" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Rate Type <span class="text-danger">*</span></label>
                            <select class="form-control" name="rate_type" required>
                                <option value="hourly">Hourly</option>
                                <option value="daily">Daily</option>
                                <option value="fixed">Fixed</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Rate <span class="text-danger">*</span></label>
                            <input type="number" step="0.01" name="rate" class="form-control" placeholder="Rate" required>
                        </div>
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <button type="submit" class="btn btn-primary">
                                <i class="feather-save me-2"></i> Add Activity
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-12 mt-4">
                    <div class="card stretch stretch-full">
                        <div class="card-header">
                            <h5 class="card-title">Activity List</h5>
                        </div>
                        <div class="card-body custom-card-action p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sr. No</th>
                                            <th scope="col">Activity Name</th>
                                            <th scope="col">Service</th>
                                            <th scope="col">Sub-Service</th>
                                            <th scope="col">Rate Type</th>
                                            <th scope="col">Rate</th>
                                            <th scope="col" class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($activities as $activity)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $activity->activity_name }}</td>
                                                <td>{{ $activity->service->ServiceName }}</td>
                                                <td>{{ $activity->subservice->SubService_Name }}</td>
                                                <td>{{ ucfirst($activity->rate_type) }}</td>
                                                <td>{{ $activity->rate }}</td>
                                                
                                                <td>
                                                <div class="hstack gap-2 justify-content-end">
                                                <a href="{{ route('activity.edit', $activity->id) }}" class="avatar-text avatar-md">
                                                    <i class="feather-edit"></i>
                                                </a>

                                                    <a href="{{ route('activity.delete', $activity->id) }}" class="avatar-text avatar-md" onclick="return confirm('Are you sure want to delete?')">
                                                        <i class="feather-trash-2"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('Adminpanel.admin_footerlink')
</body>
</html>



<script>
    document.getElementById('service').addEventListener('change', function() {
        var serviceId = this.value;
        var subserviceSelect = document.getElementById('subservice');

        subserviceSelect.innerHTML = '<option value="">Select Subservice</option>'; // Reset subservice options

        if (serviceId) {
            fetch('/get-subservices/' + serviceId)
                .then(response => response.json())
                .then(data => {
                    data.forEach(function(subservice) {
                        var option = document.createElement('option');
                        option.value = subservice.SubService_IDP; // Use correct field from your JSON response
                        option.textContent = subservice.SubService_Name; // Use correct field from your JSON response
                        subserviceSelect.appendChild(option);
                    });
                })
                .catch(error => console.error('Error fetching subservices:', error));
        }
    });


</script>
