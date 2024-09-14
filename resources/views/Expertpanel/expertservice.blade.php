<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>{{ $title ?? 'Expert Service' }}</title>
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
                                <h4 class="header-title">Add Service</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('expert.service.store') }}" method="POST" class="needs-validation" novalidate>
                                    @csrf


                                    <!-- Service Name -->
                                    <div class="form-group">
                                        <label for="ServiceName">Service Name:<span class="text-danger">*</span></label>
                                        <select class="form-control" id="ServiceName" name="ServiceName" required>
                                            <option value="">Select Service</option>
                                            @foreach($admin_services as $service)
                                                <option value="{{ $service->ServiceMasterIDP }}" {{ old('ServiceName') == $service->ServiceMasterIDP ? 'selected' : '' }}>
                                                    {{ $service->ServiceName }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('ServiceName'))
                                            <div class="text-danger">{{ $errors->first('ServiceName') }}</div>
                                        @endif
                                    </div>

                                    <!-- Service Details -->
                                    <div class="form-group">
                                        <label for="ExpertService_Details">Service Details:</label>
                                        <textarea class="form-control" id="ExpertService_Details" name="ExpertService_Details" rows="4" required>{{ old('ExpertService_Details') }}</textarea>
                                        @if ($errors->has('ExpertService_Details'))
                                            <div class="text-danger">{{ $errors->first('ExpertService_Details') }}</div>
                                        @endif
                                    </div>

                                    <button type="submit" class="btn btn-primary">Save Service</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service List -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="header-title">Service List</h4>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Service Name</th>
                                            <th>Details</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($services as $service)
                                        <tr>
                                            <td>{{ $service->ExpertService_IDP }}</td>
                                            <td>{{ $service->ServiceName }}</td>
                                            <td>{{ $service->ExpertService_Details }}</td>
                                            <td>
                                                 <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                                <form action="#" method="POST" style="display:inline;">
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
