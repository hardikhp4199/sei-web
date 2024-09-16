<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="flexilecode" />
    <title>Admin Add Client</title>
    @include('Adminpanel.admin_headerlink')
</head>
<body>
    <nav class="nxl-navigation">
        @include('Adminpanel.siderbarmenu')
    </nav>
    <header class="nxl-header">
    </header>
    <main class="nxl-container">
        <div class="nxl-content">
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Master</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Add-Client</a></li>
                        <li class="breadcrumb-item"></li>
                    </ul>
                </div>
            </div>
            <div class="main-content">
                <div class="row">
                    <form action="{{ route('admin.client.store') }}" class="form-group" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <label class="form-label">First Name <span class="text-danger">*</span></label>
                                <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{ old('first_name') }}">
                                @if($errors->has('first_name'))
                                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                @endif
                            </div>

                            <div class="col-lg-4 mb-4">
                                <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{ old('last_name') }}" >
                                @if($errors->has('last_name'))
                                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                @endif
                            </div>

                            <div class="col-lg-4 mb-4">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" >
                                @if($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <label class="form-label">User name <span class="text-danger">*</span></label>
                                <input type="text" name="username" class="form-control" placeholder="User Name" value="{{ old('username') }}" >
                                @if($errors->has('username'))
                                    <span class="text-danger">{{ $errors->first('username') }}</span>
                                @endif
                            </div>

                            <div class="col-lg-4 mb-4">
                                <label class="form-label">Password <span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                @if($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="col-lg-4 mb-4">
                                <label class="form-label">Confirm Password <span class="text-danger">*</span></label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                                @if($errors->has('password_confirmation'))
                                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <label class="form-label">Phone <span class="text-danger">*</span></label>
                                <input type="text" name="phone" class="form-control" placeholder="Phone number" value="{{ old('phone') }}" >
                                @if($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>

                            <div class="col-lg-4 mb-4">
                                <label class="form-label">Company name <span class="text-danger">*</span></label>
                                <input type="text" name="company_name" class="form-control" placeholder="Company Name" value="{{ old('company_name') }}" >
                                @if($errors->has('company_name'))
                                    <span class="text-danger">{{ $errors->first('company_name') }}</span>
                                @endif
                            </div>

                            <div class="col-lg-4 mb-4">
                                <label class="form-label">Business Category <span class="text-danger">*</span></label>
                                <input type="text" name="business_category" class="form-control" placeholder="Business Category" value="{{ old('business_category') }}" >
                                @if($errors->has('business_category'))
                                    <span class="text-danger">{{ $errors->first('business_category') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-8 mb-4">
                                <label class="form-label">Address <span class="text-danger">*</span></label>
                                <input type="text" name="address" class="form-control" placeholder="Address" value="{{ old('address') }}" >
                                @if($errors->has('address'))
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                @endif
                            </div>

                            <div class="col-lg-4 mb-4">
                                <label class="form-label">Country <span class="text-danger">*</span></label>
                                <input type="text" name="country" class="form-control" placeholder="Country" value="{{ old('country') }}" >
                                @if($errors->has('country'))
                                    <span class="text-danger">{{ $errors->first('country') }}</span>
                                @endif
                            </div>

                            <div class="col-lg-4 mb-4">
                                <label class="form-label">City <span class="text-danger">*</span></label>
                                <input type="text" name="city" class="form-control" placeholder="City" value="{{ old('city') }}" >
                                @if($errors->has('city'))
                                    <span class="text-danger">{{ $errors->first('city') }}</span>
                                @endif
                            </div>

                            <div class="col-lg-4 mb-4">
                                <label class="form-label">State <span class="text-danger">*</span></label>
                                <input type="text" name="state" class="form-control" placeholder="State" value="{{ old('state') }}" >
                                @if($errors->has('state'))
                                    <span class="text-danger">{{ $errors->first('state') }}</span>
                                @endif
                            </div>

                            <div class="col-lg-4 mb-4">
                                <label class="form-label">Zip <span class="text-danger">*</span></label>
                                <input type="text" name="zip" class="form-control" placeholder="Zip" value="{{ old('zip') }}" >
                                @if($errors->has('zip'))
                                    <span class="text-danger">{{ $errors->first('zip') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <button type="submit" class="btn btn-primary successAlertMessage">
                                <i class="feather-save me-2"></i> Add Client
                            </button>
                        </div>
                    </form>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Client List</h5>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col" class="w-50">Name</th>
                                                <th scope="col" class="w-50">Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (isset($clients) && $clients->count() > 0)
                                                @foreach ($clients as $key => $client)
                                                    <tr>
                                                        <td>{{ $key }}</td>
                                                        <td>{{ $client->first_name }}</td>
                                                        <td>{{ $client->email }}</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="5" class="text-center">No client recods found.</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
@include('Adminpanel.admin_footerlink')
</html>
