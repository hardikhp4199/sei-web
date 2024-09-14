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

                                    <div class="form-group row mb-3">
                                        <label for="bank_name" class="col-sm-3 col-form-label">Bank Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="bank_name" class="form-control" id="bank_name" value="{{ old('bank_name', $expert->bank_name) }}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <label for="account_name" class="col-sm-3 col-form-label">Account Number</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="account_name" class="form-control" id="account_name" value="{{ old('account_name', $expert->account_name) }}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <label for="ifsc_code" class="col-sm-3 col-form-label">IFSC Code</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="ifsc_code" class="form-control" id="ifsc_code" value="{{ old('ifsc_code', $expert->ifsc_code) }}" required>
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
