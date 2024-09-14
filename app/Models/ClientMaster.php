<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientMaster extends Model
{
    use HasFactory;

    protected $table = 'tbl_clientmaster';
    protected $primaryKey = 'Clientmaster_IDP';

    protected $fillable = [
        'first_name', 'last_name', 'username', 'email', 'password', 
        'company_name', 'business_category', 'address', 'country', 
        'city', 'state', 'zip', 'phone',
    ];

    protected $hidden = [
        'password',
    ];
}
