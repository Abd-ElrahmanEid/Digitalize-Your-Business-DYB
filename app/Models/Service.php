<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table='services';
    protected $fillable =[
        'companyname',
        'service',
        'phone',
        'description',
        'annualrevenues',
        'companywebsite',
        'comments',
        'time',
        'date',
        'user_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
