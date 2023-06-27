<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\AccountController;

class Accounts extends Model
{
    use HasFactory;
    protected $table = "accounts";
    protected $fillable = [
        'username',
        'email',
        'password'
    ];
}
