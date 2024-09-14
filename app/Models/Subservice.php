<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subservice extends Model
{
    use HasFactory;

    protected $table = 'tbl_subservice';

    protected $primaryKey = 'SubService_IDP';

    protected $fillable = [
        'ServiceM_IDF',
        'SubService_Name',
        'Details',
        'Status',
        'TimeStamp',
        'UpdateTimeStamp',
        'CreatedBy',
        'CreatedDate',
        'Modify',
        'ModifyDate',
    ];

    public $timestamps = false; // If you are manually handling timestamps

    // Define the relationship with the Service model
    public function service()
    {
        return $this->belongsTo(Service::class, 'ServiceM_IDF', 'ServiceMasterIDP');
    }

    public function activities()
{
    return $this->hasMany(Activity::class, 'subservice_idf');
}
}
