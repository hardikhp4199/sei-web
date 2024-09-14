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
                                <h4 class="header-title mb-0">Update Bank Details</h4>
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

                                <form action="{{ route('bankdetails.update') }}" method="POST" class="form-horizontal">
                                    @csrf
                                    @method('PUT')
                                
                                    <div class="row mb-3">  
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="bank_name" class="form-label">Bank Name</label>
                                                <input type="text" name="bank_name" class="form-control" id="bank_name" value="{{ old('bank_name', $expert->bank_name) }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="account_number" class="form-label">Account Number</label>
                                                <input type="text" name="account_number" class="form-control" id="account_number" value="{{ old('account_number', $expert->account_number) }}" required>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="ifsc_code" class="form-label">IFSC Code</label>
                                                <input type="text" name="ifsc_code" class="form-control" id="ifsc_code" value="{{ old('ifsc_code', $expert->ifsc_code) }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Placeholder for any additional fields or future use -->
                                        </div>
                                    </div>
                                
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Update Bank Details</button>
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
