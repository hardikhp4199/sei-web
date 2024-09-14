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
<div class="container">
    <div class="container-fluid">
        @include('Expertpanel.layouts.shared.page-title')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
    <h2>Edit Personal Details</h2><br>
    <form method="POST" action="{{ route('expertpersonaldetails.update', $expert->Expertmaster_IDP) }}">
        @csrf
        @method('PUT')
    
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="legal_name">Legal Name</label>
                    <input type="text" class="form-control" id="legal_name" name="legal_name" value="{{ $expert->legal_name }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="pan_no">PAN No.</label>
                    <input type="text" class="form-control" id="pan_no" name="pan_no" value="{{ $expert->pan_no }}" required>
                </div>
            </div>
        </div><br>
    
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="registered_address">Registered Address</label>
                    <input type="text" class="form-control" id="registered_address" name="registered_address" value="{{ $expert->registered_address }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="country" name="country" value="{{ $expert->country }}" required>
                </div>
            </div>
        </div><br>
    
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="licenses">Licenses</label>
                    <input type="text" class="form-control" id="licenses" name="licenses" value="{{ $expert->licenses }}" required>
                </div>
            </div>
        </div><br>
    
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
    
    
</div>
</div>
@include('Expertpanel.layouts.shared.footer')
</body>
</html>
