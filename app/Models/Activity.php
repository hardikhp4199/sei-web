<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'tbl_activities';

    protected $primaryKey = 'id';

    protected $fillable = [
        'servicem_idf', 'subservice_idf', 'activity_name', 'rate_type', 'rate',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'servicem_idf', 'ServiceMasterIDP');
    }

    public function subservice()
    {
        return $this->belongsTo(Subservice::class, 'subservice_idf', 'SubService_IDP');
    }

    public function activities()
    {
        return $this->hasMany(Activity::class, 'subservice_idf', 'SubService_IDP');
    }
}
