<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>{{ $title ?? 'Expert Subservice' }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="" name="description" />
<meta content="" name="author" />

@include('Expertpanel.layouts.shared.head-css')
</head>
<body>
<div class="wrapper">
@include('Expertpanel.layouts.shared.topbar')
@include('Expertpanel.layouts.shared.left-sidebar')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            @include('Expertpanel.layouts.shared.page-title')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="header-title">Subservices</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('expert.subservice.store') }}" method="POST" class="needs-validation" novalidate>
                                @csrf
                                <div class="form-group">
                                    <label for="Service_Name">Service Name:<span class="text-danger">*</span></label>
                                    <select class="form-control" id="Service_Name" name="ServiceName" required>
                                        <option value="">Select Service</option>
                                        @foreach($expert_services as $service)
                                        <option value="{{ $service->ServiceMasterIDP}}">{{ $service->ServiceName }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="SubService_Name">Subservice Name:<span class="text-danger">*</span></label>
                                    <select class="form-control" id="SubService_Name" name="SubService_Name" required>
                                        <option value="">Select Subservice</option>
                                        @foreach($admin_subservices as $subservice)
                                            <option value="{{ $subservice->id }}">{{ $subservice->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ExpertSubService_Details">Subservice Details:</label>
                                    <textarea class="form-control" id="ExpertSubService_Details" name="ExpertSubService_Details" rows="4" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Subservice</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Display the list of subservices -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="header-title">Subservice List</h4>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Service Name</th>
                                        <th>Subservice Name</th>
                                        <th>Details</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($subservices as $subservice)
                                    <tr>
                                        <td>{{ $subservice->id }}</td>
                                        <td>{{ $subservice->service->name }}</td>
                                        <td>{{ $subservice->subservice->name }}</td>
                                        <td>{{ $subservice->ExpertSubService_Details }}</td>
                                        <td>
                                            <a href="{{ route('expert.subservice.edit', $subservice->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('expert.subservice.destroy', $subservice->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
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
</div>
@include('Expertpanel.layouts.shared.footer')
</div>
</div>

</body>
</html>
