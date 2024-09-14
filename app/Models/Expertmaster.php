<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Expertmaster extends Authenticatable
{
    use HasFactory;

    protected $table = 'tbl_expertmaster';

    protected $primaryKey = 'Expertmaster_IDP';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'phone',
        'city',
        'legal_name',
        'pan_no',
        'registered_address',
        'country',
        'licenses',
        'bank_name',
        'account_name',
        'ifsc_code',
        'company_name',
        'location_of_business',
        'gst_no',
        'nature_of_business',
        'types_of_firm',
        'year_of_incorporation',
        'no_of_employees',
        'last_3_years_annual_turnover',
        'service',
        'subservice',
        'activities',
        'each_activity_with_qty_unit',
        'estimate_time',
        'inr_rate',
        'international_rate',
        'currency',
        'rates',
        'commission_amount',
        'gst_tds',
        'CGST',
        'SGST',
        'IGST',
        'TDS_percentage',
        'TDS_amount',
        'status',
        'created_by',
        'created_date',
    ];

   
    protected $hidden = [
        'password',
    ];

    public function setPasswordAttribute($value)
    {
        if ($value) {
            $this->attributes['password'] = Hash::make($value);
        }
    }

    public function service()
    {
        return $this->belongsTo(ServiceMaster::class, 'service');
    }

    public function subservice()
    {
        return $this->belongsTo(SubServiceMaster::class, 'subservice');
    }
}
