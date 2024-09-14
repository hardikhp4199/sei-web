<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpertSubService extends Model
{
    use HasFactory;

    protected $table = 'tbl_expertsubservice';
    protected $primaryKey = 'ExpertSubService_IDP';
    public $timestamps = false;

    protected $fillable = [
        'ExpertService_IDF',
        'SubServiceMaster_IDF',
        'ExpertSubService_Details',
        'Expertmaster_IDF',
        'Status',
        'TimeStamp',
        'UpdateTimeStamp',
        'CreatedBy',
        'CreatedDate',
        'Modify',
        'ModifyDate',
    ];
}
