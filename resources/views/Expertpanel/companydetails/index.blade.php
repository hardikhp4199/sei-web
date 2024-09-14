<div class="container">
    <h2>Company Details</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($expert->company_name)
        <!-- Display the company details if they are set -->
        <table class="table">
            <tr>
                <th>Company Name</th>
                <td>{{ $expert->company_name }}</td>
            </tr>
            <tr>
                <th>Location of Business</th>
                <td>{{ $expert->location_of_business }}</td>
            </tr>
            <tr>
                <th>GST No.</th>
                <td>{{ $expert->gst_no }}</td>
            </tr>
            <tr>
                <th>Nature of Business</th>
                <td>{{ $expert->nature_of_business }}</td>
            </tr>
            <tr>
                <th>Type of Firm</th>
                <td>{{ $expert->types_of_firm }}</td>
            </tr>
            <tr>
                <th>Year of Incorporation</th>
                <td>{{ $expert->year_of_incorporation }}</td>
            </tr>
            <tr>
                <th>No. of Employees</th>
                <td>{{ $expert->no_of_employees }}</td>
            </tr>
            <tr>
                <th>Last 3 Years Annual Turnover</th>
                <td>{{ $expert->last_3_years_annual_turnover }}</td>
            </tr>
        </table>
        <a href="{{ route('companydetails.edit') }}" class="btn btn-secondary">Edit Company Details</a>
       
    @else
        <!-- Display the form to fill company details -->
        {{-- <h2>Fill Company Details</h2> --}}
        <form method="POST" action="{{ route('companydetails.store') }}">
            @csrf
        
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="company_name">Company Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="company_name" name="company_name" required minlength="2" maxlength="20">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="location_of_business">Location of Business<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="location_of_business" name="location_of_business" required minlength="2" maxlength="50">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="gst_no">GST No.<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="gst_no" name="gst_no" required maxlength="15" pattern="^[A-Za-z0-9]+$" title="Only letters and numbers are allowed." >
                    </div>
                </div>
            </div><br>
        
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nature_of_business">Nature of Business<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nature_of_business" name="nature_of_business" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="types_of_firm">Type of Firm<span class="text-danger">*</span></label>
                        <select class="form-control" id="types_of_firm" name="types_of_firm" required>
                            <option value="corporation">Corporation</option>
                            <option value="partnership">Partnership</option>
                            <option value="cooperative">Cooperative</option>
                            <option value="non_profit_organization">Non-profit Organization</option>
                            <option value="private_limited_company">Private Limited Company</option>
                            <option value="public_limited_company">Public Limited Company</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="year_of_incorporation">Year of Incorporation<span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="year_of_incorporation" name="year_of_incorporation" required minlength="4 " maxlength="4">
                    </div>
                </div>
            </div><br>
        
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="no_of_employees">No. of Employees<span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="no_of_employees" name="no_of_employees" required minlength="2" maxlength="15">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="last_3_years_annual_turnover">Last 3 Years Annual Turnover<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="last_3_years_annual_turnover" name="last_3_years_annual_turnover" required>
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

