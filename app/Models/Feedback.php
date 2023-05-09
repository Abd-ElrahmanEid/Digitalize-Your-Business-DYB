<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table = 'feedbacks';

    protected $fillable = [
        'tasklevel',
        'rating',
        'recommendations',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
