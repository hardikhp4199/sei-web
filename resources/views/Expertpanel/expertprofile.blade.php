<!DOCTYPE html>
<html lang="en">
<head>
    @include('Expertpanel.layouts.shared.title-meta', ['title' => 'Profile'])
    @include('Expertpanel.layouts.shared.head-css', ['mode' => $mode ?? '', 'demo' => $demo ?? ''])
</head>
<body class="authentication-bg position-relative">
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-lg-10">
                    <div class="card overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6 d-none d-lg-block p-2">
                                <img src="/images/auth-img.jpg" alt="" class="img-fluid rounded h-100">
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="auth-brand p-4">
                                        <a href="#" class="logo-light">
                                            <img src="/admin/images/sei_group.png" alt="logo" height="150">
                                        </a>
                                    </div>
                                    <div class="p-4 my-auto">
                                        <h4 class="fs-20">Expert Profile</h4>

                                        <form method="POST" action="{{ route('expert.updateProfile') }}">
                                            @csrf
                                            @method('PUT')

                                            <div class="mb-3">
                                                <label for="user_name" class="form-label">Username</label>
                                                <input class="form-control" type="text" name="user_name" id="user_name" value="{{ Auth::user()->user_name }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email address</label>
                                                <input class="form-control" type="email" name="email" id="email" value="{{ Auth::user()->email }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="phone_no" class="form-label">Phone Number</label>
                                                <input class="form-control" type="text" name="phone_no" id="phone_no" value="{{ Auth::user()->phone_no }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="city" class="form-label">City</label>
                                                <input class="form-control" type="text" name="city" id="city" value="{{ Auth::user()->city }}" required>
                                            </div>
                                            <!-- Add other fields as required -->

                                            <div class="mb-0 text-start">
                                                <button class="btn btn-soft-primary w-100" type="submit">
                                                    <i class="ri-login-circle-fill me-1"></i> 
                                                    <span class="fw-bold">Update Profile</span>
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer footer-alt fw-medium">
        <span class="text-dark">
            <script>
                document.write(new Date().getFullYear())
            </script>© SEI Group. 2024. All rights reserved. | Design & Developed by Adi Creations
        </span>
    </footer>

    @include('Expertpanel.layouts.shared.footer-scripts')
</body>
</html>

