<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;
    protected $fillable = ['mobile_no','email', 'timezoneoffset', 'message',];
    protected $casts = [
        'timezoneoffset' => 'datetime:Y-m-d'
    ];
}
