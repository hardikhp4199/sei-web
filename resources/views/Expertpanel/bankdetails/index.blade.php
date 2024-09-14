
<div class="container mt-5">
    <h2>Bank Details</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($expert->bank_name)
        <!-- Display the bank details if they are set -->
        <table class="table">
        <tr>
                <th>USer ID</th>
                <td>{{ $expert->Expertmaster_IDP }}</td>
            </tr>
            <tr>
                <th>Bank Name</th>
                <td>{{ $expert->bank_name }}</td>
            </tr>
            <tr>
                <th>Account Number</th>
                <td>{{ $expert->account_name }}</td>
            </tr>
            <tr>
                <th>IFSC Code</th>
                <td>{{ $expert->ifsc_code }}</td>
            </tr>
        </table>
        <a href="{{ route('bankdetails.edit') }}" class="btn btn-secondary">Edit Bank Details</a>
    @else
        <!-- Display the form to fill bank details -->
        {{-- <h2>Add Bank Details</h2> --}}
        <form method="POST" action="{{ route('bankdetails.store') }}">
            @csrf
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="bank_name">Bank Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="bank_name" name="bank_name" required minlength="2" maxlength="50">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="account_number">Account Number<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="account_number" name="account_number" required minlength="2" maxlength="50">
                    </div>
                </div>
            </div><br>
            
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="ifsc_code">IFSC Code<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="ifsc_code" name="ifsc_code" required minlength="2" maxlength="15" pattern="^[A-Za-z0-9]+$" title="Only letters and numbers are allowed.">
                    </div>
                </div>
            </div><br>
            
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
        
    @endif
</div>

