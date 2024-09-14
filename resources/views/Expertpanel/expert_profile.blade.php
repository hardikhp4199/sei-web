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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="header-title mb-0">Expert Profile</h4>
                            </div>
                            <div class="card-body">
                                <form>
                                     <div id="expertProfileWizard">
                                     <ul class="nav nav-pills nav-justified form-wizard-header mb-4">
    <li class="nav-item">
        <a href="#personalDetailsTab" data-bs-toggle="tab" class="nav-link rounded-0 py-2 active">
            <i class="ri-account-circle-line fw-normal fs-20 align-middle me-1"></i>
            <span class="d-none d-sm-inline">Personal Details</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#bankDetailsTab" data-bs-toggle="tab" class="nav-link rounded-0 py-2">
            <i class="ri-bank-line fw-normal fs-20 align-middle me-1"></i>
            <span class="d-none d-sm-inline">Bank Details</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#companyDetailsTab" data-bs-toggle="tab" class="nav-link rounded-0 py-2">
            <i class="ri-building-line fw-normal fs-20 align-middle me-1"></i>
            <span class="d-none d-sm-inline">Company Details</span>
        </a>
    </li>
</ul>


<div class="tab-content b-0 mb-0">
    <!-- Personal Details Tab -->
    <div class="tab-pane active" id="personalDetailsTab">  
        @include('expertpanel.expertpersonaldetails.index', ['expert' => $expert])
    </div>

    <div class="tab-pane" id="bankDetailsTab">
        @include('expertpanel.bankdetails.index', ['expert' => $expert])
    </div>

    <div class="tab-pane" id="companyDetailsTab">
        @include('expertpanel.companydetails.index', ['expert' => $expert])
    </div>
</div>

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
