<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    protected $table = 'quotation_master'; 

    protected $fillable = [
        'quotation_number',
        'quotation_date',
        'expert_name',
        'reference_name',
        'company_name',
        'email',
        'address',
        'country',
        // add other fields as needed
    ];
}
