<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ClientLoginData extends Model
{
    use HasFactory;

    protected $table = 'clientlogindata'; // Specify the table name if it's not following the convention

    protected $fillable = ['email', 'username', 'password'];
}
