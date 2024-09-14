<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'tbservicemaster';

    protected $primaryKey = 'ServiceMasterIDP';

    public $timestamps = false; // Disable automatic timestamps

    protected $fillable = [
        'ServiceName',
        'ServiceDetails',
        'Status',
        'AdminIDF',
        // Add other fillable fields
    ];

    protected $dates = [
        'created_at',
        'ModifyDate',
        // Add other date fields if needed
    ];

    public function expertServices()
    {
        return $this->hasMany(ExpertService::class, 'ServiceMaster_IDF', 'ServiceMasterIDP');
    }

    public function subservices()
{
    return $this->hasMany(Subservice::class, 'ServiceM_IDF', 'ServiceMasterIDP');
}
}
