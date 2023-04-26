<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_user extends Model
{
    use HasFactory;

    protected $table = 'admin_users';

    protected $fillable = [

        'user_id',
        'admin_id',
    ];



}
