<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $title ?? 'Expert Dashboard' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description">
    <meta content="" name="author">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    @include('Expertpanel.layouts.shared.head-css') <!-- Include CSS from expert_profile -->
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="header-title mb-0">Update Company Details</h4>
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('companydetails.update', $expert->Expertmaster_IDP) }}" method="POST" class="form-horizontal">
                                    @csrf
                                    @method('PUT')

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="company_name" class="form-label">Company Name</label>
                                                <input type="text" name="company_name" class="form-control" id="company_name" value="{{ $expert->company_name }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="location_of_business" class="form-label">Location of Business</label>
                                                <input type="text" name="location_of_business" class="form-control" id="location_of_business" value="{{ $expert->location_of_business }}" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="gst_no" class="form-label">GST No.</label>
                                                <input type="text" name="gst_no" class="form-control" id="gst_no" value="{{ $expert->gst_no }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nature_of_business" class="form-label">Nature of Business</label>
                                                <input type="text" name="nature_of_business" class="form-control" id="nature_of_business" value="{{ $expert->nature_of_business }}" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="types_of_firm" class="form-label">Types of Firm</label>
                                                <input type="text" name="types_of_firm" class="form-control" id="types_of_firm" value="{{ $expert->types_of_firm }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="year_of_incorporation" class="form-label">Year of Incorporation</label>
                                                <input type="text" name="year_of_incorporation" class="form-control" id="year_of_incorporation" value="{{ $expert->year_of_incorporation }}" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="no_of_employees" class="form-label">No of Employees</label>
                                                <input type="text" name="no_of_employees" class="form-control" id="no_of_employees" value="{{ $expert->no_of_employees }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="last_3_years_annual_turnover" class="form-label">Last 3 years Annual turnover</label>
                                                <input type="text" name="last_3_years_annual_turnover" class="form-control" id="last_3_years_annual_turnover" value="{{ $expert->last_3_years_annual_turnover }}" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-start">
                                        <button type="submit" class="btn btn-primary">Update Company Details</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </div> <!-- end content -->
    </div> <!-- end content-page -->
</div> <!-- end wrapper -->

@include('Expertpanel.layouts.shared.footer')

</body>
</html>
