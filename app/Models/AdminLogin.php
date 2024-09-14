<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminLogin extends Authenticatable
{
    use HasFactory;

    protected $table = 'tb_adminlogin';

    protected $primaryKey = 'Admin_IDP';

    protected $fillable = [
        'Username', 'Password', 'Status',
    ];

    protected $hidden = [
        'Password', 'remember_token',
    ];
}

