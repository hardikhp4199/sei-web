<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>{{ $title ?? 'Expert Activity' }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="" name="description" />
<meta content="" name="author" />

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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="header-title">Activities</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('expert.activities.store') }}" method="POST" class="needs-validation" novalidate>
                                @csrf
                                <div class="form-group">
                                    <label for="Service_Name">Service Name:<span class="text-danger">*</span></label>
                                    <select class="form-control" id="Service_Name" name="Service_Name" required>
                                        <option value="">Select Service</option>
                                        @foreach($expert_services as $service)
                                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="SubService_Name">Subservice Name:<span class="text-danger">*</span></label>
                                    <select class="form-control" id="SubService_Name" name="SubService_Name" required>
                                        <option value="">Select Subservice</option>
                                        @foreach($expert_subservices as $subservice)
                                            <option value="{{ $subservice->id }}">{{ $subservice->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Activity_Name">Activity Name:<span class="text-danger">*</span></label>
                                    <select class="form-control" id="Activity_Name" name="Activity_Name" required>
                                        <option value="">Select Activity</option>
                                        @foreach($admin_activities as $activity)
                                            <option value="{{ $activity->id }}">{{ $activity->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="each_activity_with_qty_unit">Activity Details:</label>
                                    <textarea class="form-control" id="each_activity_with_qty_unit" name="each_activity_with_qty_unit" rows="4" maxlength="500" required></textarea>
                                </div>
                                <div class="form-group">
    <label for="estimate_time">Estimate Time Type:<span class="text-danger">*</span></label>
    <select class="form-control" id="estimate_time" name="estimate_time" required>
        <option value="">Select Time Type</option>
        <option value="Day">Day</option>
        <option value="Hour">Hour</option>
    </select>
</div>

                                <div class="form-group">
    <label for="INR_rate">INR Rate Type:<span class="text-danger">*</span></label>
    <select class="form-control" id="INR_rate" name="INR_rate" required>
        <option value="">Select Rate Type</option>
        <option value="Day">Day</option>
        <option value="Hour">Hour</option>
        <option value="Fixed">Fixed</option>
    </select>
</div>

                                <div class="form-group">
                                    <label for="international_rate">International Rate:<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="international_rate" name="international_rate" maxlength="10" pattern="^\d+(\.\d{1,2})?$" required />
                                </div>
                                <div class="form-group">
                                    <label for="currency">Currency:<span class="text-danger">*</span></label>
                                    <select class="form-control" id="currency" name="currency" required>
                                        <option value="AUD">Australian Dollar</option>
                                        <option value="CAD">Canadian Dollar</option>
                                        <option value="USD">US Dollar</option>
                                        <option value="ARS">Argentine Peso</option>
                                        <option value="BHD">Bahraini Dinar</option>
                                        <option value="BBD">Barbadian Dollar</option>
                                        <option value="CHF">Swiss Franc</option>
                                        <option value="EUR">Euro</option>
                                        <option value="GBP">GBP</option>
                                        <option value="BSD">Bahamian Dollar</option>
                                        <option value="BND">Brunei Dollar</option>
                                        <option value="KYD">Cayman Islands Dollar</option>
                                        <option value="ALL">Lek</option>
                                        <option value="LKR">Sri Lankan Rupee</option>
                                        <option value="INR">Indian Rupee</option>
                                        <option value="OMR">Omani Rial</option>
                                        <option value="MMK">Burmese Rupee</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="rate">Rate:<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="rate" name="rate" required />
                                </div>
                                <div class="form-group">
                                    <label for="commission_amount">Commission Amount:<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="commission_amount" name="commission_amount" maxlength="10" pattern="^\d+(\.\d{1,2})?$" required />
                                </div>
                                <div class="form-group">
                                    <label for="GST_TDS">GST/TDS:<span class="text-danger">*</span></label>
                                    <select class="form-control" id="GST_TDS" name="GST_TDS" required>
                                        <option value="">Select GST/TDS</option>
                                        <option value="GST">GST</option>
                                        <option value="TDS">TDS</option>
                                    </select>
                                </div>
                                <div id="gst-fields" style="display:none;">
                                    <div class="form-group">
                                        <label for="CGST">CGST:</label>
                                        <input type="text" class="form-control" id="CGST" name="CGST" />
                                    </div>
                                    <div class="form-group">
                                        <label for="SGST">SGST:</label>
                                        <input type="text" class="form-control" id="SGST" name="SGST" />
                                    </div>
                                    <div class="form-group">
                                        <label for="IGST">IGST:</label>
                                        <input type="text" class="form-control" id="IGST" name="IGST" />
                                    </div>
                                </div>
                                <div id="tds-fields" style="display:none;">
                                    <div class="form-group">
                                        <label for="tds_percentage">TDS Percentage:</label>
                                        <input type="text" class="form-control" id="tds_percentage" name="tds_percentage" />
                                    </div>
                                    <div class="form-group">
                                        <label for="tds_amount">TDS Amount:</label>
                                        <input type="text" class="form-control" id="tds_amount" name="tds_amount" />
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Activity</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Display the list of activities -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="header-title">Activity List</h4>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Service Name</th>
                                        <th>Subservice Name</th>
                                        <th>Activity Name</th>
                                        <th>Details</th>
                                        <th>Estimate Time</th>
                                        <th>INR Rate</th>
                                        <th>International Rate</th>
                                        <th>Currency</th>
                                        <th>Rate</th>
                                        <th>Commission Amount</th>
                                        <th>GST/TDS</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($activities as $activity)
                                    <tr>
                                        <td>{{ $activity->id }}</td>
                                        <td>{{ $activity->service->name }}</td>
                                        <td>{{ $activity->subservice->name }}</td>
                                        <td>{{ $activity->activity->name }}</td>
                                        <td>{{ $activity->each_activity_with_qty_unit }}</td>
                                        <td>{{ $activity->estimate_time }}</td>
                                        <td>{{ $activity->INR_rate }}</td>
                                        <td>{{ $activity->international_rate }}</td>
                                        <td>{{ $activity->currency }}</td>
                                        <td>{{ $activity->rate }}</td>
                                        <td>{{ $activity->commission_amount }}</td>
                                        <td>{{ $activity->GST_TDS }}</td>
                                        <td>
                                            <a href="{{ route('expert.activity.edit', $activity->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('expert.activity.destroy', $activity->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('Expertpanel.layouts.shared.footer')
</div>
</div>

<script>
    document.getElementById('GST_TDS').addEventListener('change', function () {
        var gstFields = document.getElementById('gst-fields');
        var tdsFields = document.getElementById('tds-fields');
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
</body>
</html>
