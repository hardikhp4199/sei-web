<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="flexilecode" />
    <title>Admin Edit Client</title>
    @include('Adminpanel.admin_headerlink')
</head>

<body>
    <nav class="nxl-navigation">
        @include('Adminpanel.siderbarmenu')
    </nav>
    <header class="nxl-header"></header>
    <main class="nxl-container">
        <div class="nxl-content">
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Master</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Edit Client</a></li>
                    </ul>
                </div>
            </div>
            <div class="main-content">
                <!-- Client Not Found Error -->
                @if($errors->has('error'))
                <div class="alert alert-danger">
                    {{ $errors->first('error') }}
                </div>
                @endif

                <div class="row">
                    <form action="{{ route('admin.client.update', $client->Clientmaster_IDP) }}" class="form-group" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <input type="hidden" name="id" id="id" class="form-control" placeholder="ID" value="{{ $client->Clientmaster_IDP }}">
                                <label class="form-label">First Name <span class="text-danger">*</span></label>
                                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" value="{{ old('first_name', $client->first_name) }}">
                                @error('first_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-4 mb-4">
                                <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" value="{{ old('last_name', $client->last_name) }}">
                                @error('last_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-4 mb-4">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="{{ old('email', $client->email) }}">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <label class="form-label">Phone <span class="text-danger">*</span></label>
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" value="{{ old('phone', $client->phone) }}">
                                @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-4 mb-4">
                                <label class="form-label">Company Name <span class="text-danger">*</span></label>
                                <input type="text" name="company_name" id="company_name" class="form-control" placeholder="Company Name" value="{{ old('company_name', $client->company_name) }}">
                                @error('company_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-4 mb-4">
                                <label class="form-label">Business Category <span class="text-danger">*</span></label>
                                <input type="text" name="business_category" id="business_category" class="form-control" placeholder="Business Category" value="{{ old('business_category', $client->business_category) }}">
                                @error('business_category')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-8 mb-4">
                                <label class="form-label">Address <span class="text-danger">*</span></label>
                                <textarea name="address" id="address" class="form-control" placeholder="Address">{{ old('address', $client->address) }}</textarea>
                                @error('address')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-4 mb-4">
                                <label class="form-label">Country <span class="text-danger">*</span></label>
                                <input type="text" name="country" id="country" class="form-control" placeholder="Country" value="{{ old('country', $client->country) }}">
                                @error('country')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-lg-4 mb-4">
                                    <label class="form-label">City <span class="text-danger">*</span></label>
                                    <input type="text" name="city" id="city" class="form-control" placeholder="City" value="{{ old('city', $client->city) }}">
                                    @error('city')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-lg-4 mb-4">
                                    <label class="form-label">State <span class="text-danger">*</span></label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder="State" value="{{ old('state', $client->state) }}">
                                    @error('state')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-lg-4 mb-4">
                                    <label class="form-label">Zip <span class="text-danger">*</span></label>
                                    <input type="text" name="zip" id="zip" class="form-control" placeholder="Zip" value="{{ old('zip', $client->zip) }}">
                                    @error('zip')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <button type="submit" class="btn btn-primary successAlertMessage">
                                <i class="feather-save me-2"></i> Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
@include('Adminpanel.admin_footerlink')

</html>