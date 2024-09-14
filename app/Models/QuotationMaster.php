<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotationMaster extends Model
{
    use HasFactory;

    protected $table = 'tbl_quotationmaster';

    protected $fillable = [
        'quotation_no',
        'date',
        'reference_name',
        'expert_id',
        'customer_id',
        'total_amount',
        'GST',
        'discount',
        'notes',
        'status',
        'quotation_title',
        'quotation_details',
        'customer_name',
        'time_zone',
        'commission_percentage',
        'terms_conditions',
        'valid_until',
        'customer_reference',
        'sub_total',
        'rupees_in_word'
    ];
}
