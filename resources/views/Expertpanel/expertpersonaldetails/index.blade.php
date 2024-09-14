<div class="container">
    <h2>Personal Details</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($expert->legal_name)
        <!-- Display the personal details if they are set -->
        <table class="table">
            <tr>
                <th>First Name</th>
                <td>{{ $expert->first_name }}</td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td>{{ $expert->last_name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $expert->email }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ $expert->phone }}</td>
            </tr>
            <tr>
                <th>City</th>
                <td>{{ $expert->city }}</td>
            </tr>
            <tr>
                <th>Legal Name</th>
                <td>{{ $expert->legal_name }}</td>
            </tr>
            <tr>
                <th>PAN No.</th>
                <td>{{ $expert->pan_no }}</td>
            </tr>
            <tr>
                <th>Registered Address</th>
                <td>{{ $expert->registered_address }}</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>{{ $expert->country }}</td>
            </tr>
            <tr>
                <th>Licenses</th>
                <td>{{ $expert->licenses }}</td>
            </tr>
        </table>
        <a href="{{ route('expertpersonaldetails.edit') }}" class="btn btn-secondary">Edit Personal Details</a>
    @else
        <!-- Display the form to fill personal details -->
        {{-- <h2>Update Personal Details</h2> --}}
        <form method="POST" action="{{ route('expertpersonaldetails.store') }}">
    @csrf

    <!-- First Row -->
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="first_name">First Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $expert->first_name }}" required minlength="2" maxlength="50" pattern="[A-Za-z\s]+">
                
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="last_name">Last Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $expert->last_name }}" required minlength="2" maxlength="50" pattern="[A-Za-z\s]+">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="email">Email<span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $expert->email }}" required>
            </div>
        </div>
    </div><br>

    <!-- Second Row -->
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="phone">Phone<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $expert->phone }}" required pattern="\d{10}" maxlength="10" minlength="10">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="city">City<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="city" name="city" value="{{ $expert->city }}" required minlength="2" maxlength="50">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="legal_name">Legal Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="legal_name" name="legal_name" required minlength="2" maxlength="100">
            </div>
        </div>
    </div><br>

    <!-- Third Row -->
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="pan_no">PAN No.<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="pan_no" name="pan_no" required minlength="10" maxlength="10" >
                <!-- pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}" -->
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="registered_address">Registered Address<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="registered_address" name="registered_address" required minlength="5" maxlength="255">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="country">Country<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="country" name="country" required minlength="2" maxlength="50" pattern="[A-Za-z\s]+">
            </div>
        </div>
    </div><br>

    <!-- Fourth Row -->
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="licenses">Licenses<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="licenses" name="licenses" required minlength="5" maxlength="100">
            </div>
        </div>
    </div><br>

    <!-- Submit Button Row -->
    <div class="row">
        <div class="col-md-6">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>

        
    @endif
</div>
