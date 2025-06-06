<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'title',
        'institution',
        'start_date',
        'end_date',
        'description',
    ];
}
