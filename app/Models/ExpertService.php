<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpertService extends Model
{
    use HasFactory;

    protected $table = 'tbl_expertservice';
    protected $primaryKey = 'ExpertService_IDP';
    public $timestamps = false;

    protected $fillable = [
        'ServiceMaster_IDF',
        'ExpertService_Details',
        'Expertmaster_IDF',
        'Status',
        'TimeStamp',
        'UpdateTimeStamp',
        'CreatedBy',
        'CreatedDate',
        'Modify',
        'ModifyDate',
    ];
    public function service()
    {
        return $this->belongsTo(Service::class, 'ServiceMaster_IDF', 'ServiceMasterIDP');
    }
}
