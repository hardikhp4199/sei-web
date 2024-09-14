<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpertActivity extends Model
{
    use HasFactory;

    protected $table = 'tbl_expertactivity';
    protected $primaryKey = 'ExpertActivity_IDP';
    public $timestamps = false;

    protected $fillable = [
        'ExpertService_IDF',
        'ExpertSubService_IDF',
        'ActivityMaster_IDF',
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
    ];
}
