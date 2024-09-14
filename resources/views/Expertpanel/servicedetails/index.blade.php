<div class="container">
    <h2>Service Details</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($expert->service)
        <!-- Display the service details if they are set -->
        <table class="table">
            <tr>
                <th>Service</th>
                <td>{{ $expert->service }}</td>
            </tr>
            <tr>
                <th>Subservice</th>
                <td>{{ $expert->subservice }}</td>
            </tr>
            <tr>
                <th>Activities</th>
                <td>{{ $expert->activities }}</td>
            </tr>
            <tr>
                <th>Each Activity with Qty Unit</th>
                <td>{{ $expert->each_activity_with_qty_unit }}</td>
            </tr>
            <tr>
                <th>Estimate Time</th>
                <td>{{ $expert->estimate_time }}</td>
            </tr>
            <tr>
                <th>INR Rate</th>
                <td>{{ $expert->inr_rate }}</td>
            </tr>
            <tr>
                <th>International Rate</th>
                <td>{{ $expert->international_rate }}</td>
            </tr>
            <tr>
                <th>Currency</th>
                <td>{{ $expert->currency }}</td>
            </tr>
            <tr>
                <th>Rate</th>
                <td>{{ $expert->rates }}</td>
            </tr>
            <tr>
                <th>Commission Amount</th>
                <td>{{ $expert->commission_amount }}</td>
            </tr>
            <tr>
                <th>GST/TDS</th>
                <td>{{ $expert->gst_tds }}</td>
            </tr>
            @if($expert->gst_tds == 'GST')
            <tr>
                <th>CGST</th>
                <td>{{ $expert->CGST }}</td>
            </tr>
            <tr>
                <th>SGST</th>
                <td>{{ $expert->SGST }}</td>
            </tr>
            <tr>
                <th>IGST</th>
                <td>{{ $expert->IGST }}</td>
            </tr>
            @else
            <tr>
                <th>TDS Percentage</th>
                <td>{{ $expert->TDS_percentage }}</td>
            </tr>
            <tr>
                <th>TDS Amount</th>
                <td>{{ $expert->TDS_amount }}</td>
            </tr>
            @endif
        </table>
        <a href="#" class="btn btn-secondary">Edit Service Details</a>
    @else
        <!-- Display the form to fill service details -->
        <h2>Fill Service Details</h2>
        <form method="POST" action="{{ route('expertservice.store') }}">
            @csrf
            <div class="form-group">
                <label for="service">Service</label>
                <select class="form-control" id="service" name="service" required>
                    <option value="">Select Service</option>
                    @foreach($services as $service)
                        <option value="{{ $service->ServiceMasterIDP }}">{{ $service->ServiceName }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="subservice">Subservice</label>
                <select class="form-control" id="subservice" name="subservice" required>
                    <option value="">Select Subservice</option>
                    @foreach($subservices as $subservice)
                        <option value="{{ $subservice->SubService_IDP }}">{{ $subservice->SubService_Name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="activities">Activities</label>
                <input type="text" class="form-control" id="activities" name="activities" required>
            </div>
            <div class="form-group">
                <label for="each_activity_with_qty_unit">Each Activity with Qty Unit</label>
                <input type="text" class="form-control" id="each_activity_with_qty_unit" name="each_activity_with_qty_unit" required>
            </div>
            <div class="form-group">
                <label for="estimate_time">Estimate Time (Days/Hours)</label>
                <input type="text" class="form-control" id="estimate_time" name="estimate_time" required>
            </div>
            <div class="form-group">
                <label for="inr_rate">INR Rate</label>
                <input type="number" class="form-control" id="inr_rate" name="inr_rate" required>
            </div>
            <div class="form-group">
                <label for="international_rate">International Rate</label>
                <input type="number" class="form-control" id="international_rate" name="international_rate" required>
            </div>
            <div class="form-group">
                <label for="currency">Currency</label>
                <input type="text" class="form-control" id="currency" name="currency" required>
            </div>
            <div class="form-group">
                <label for="rates">Rates</label>
                <input type="number" class="form-control" id="rates" name="rates" required>
            </div>
            <div class="form-group">
                <label for="commission_amount">Commission Amount</label>
                <input type="number" class="form-control" id="commission_amount" name="commission_amount" required>
            </div>
            <div class="form-group">
                <label for="gst_tds">GST/TDS</label>
                <select class="form-control" id="gst_tds" name="gst_tds" required>
                    <option value="">Select GST/TDS</option>
                    <option value="GST">GST</option>
                    <option value="TDS">TDS</option>
                </select>
            </div>
            <div id="gst_fields" style="display:none;">
                <div class="form-group">
                    <label for="CGST">CGST</label>
                    <input type="number" class="form-control" id="CGST" name="CGST">
                </div>
                <div class="form-group">
                    <label for="SGST">SGST</label>
                    <input type="number" class="form-control" id="SGST" name="SGST">
                </div>
                <div class="form-group">
                    <label for="IGST">IGST</label>
                    <input type="number" class="form-control" id="IGST" name="IGST">
                </div>
            </div>
            <div id="tds_fields" style="display:none;">
                <div class="form-group">
                    <label for="TDS_percentage">TDS Percentage</label>
                    <input type="number" class="form-control" id="TDS_percentage" name="TDS_percentage">
                </div>
                <div class="form-group">
                    <label for="TDS_amount">TDS Amount</label>
                    <input type="number" class="form-control" id="TDS_amount" name="TDS_amount">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endif
</div>

<script>
    document.getElementById('service').addEventListener('change', function() {
        var serviceId = this.value;
        var subserviceSelect = document.getElementById('subservice');

        subserviceSelect.innerHTML = '<option value="">Select Subservice</option>'; // Reset subservice options

        if (serviceId) {
            fetch('/get-subservices/' + serviceId)
                .then(response => response.json())
                .then(data => {
                    data.forEach(function(subservice) {
                        var option = document.createElement('option');
                        option.value = subservice.SubService_IDP; // Use correct field from your JSON response
                        option.textContent = subservice.SubService_Name; // Use correct field from your JSON response
                        subserviceSelect.appendChild(option);
                    });
                })
                .catch(error => console.error('Error fetching subservices:', error));
        }
    });

    document.getElementById('gst_tds').addEventListener('change', function() {
        var gstFields = document.getElementById('gst_fields');
        var tdsFields = document.getElementById('tds_fields');

        if (this.value === 'GST') {
            gstFields.style.display = 'block';
            tdsFields.style.display = 'none';
        } else if (this.value === 'TDS') {
            gstFields.style.display = 'none';
            tdsFields.style.display = 'block';
        } else {
            gstFields.style.display = 'none';
            tdsFields.style.display = 'none';
        }
    });
</script>
