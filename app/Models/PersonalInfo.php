<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'image',
        'cv',
        'github',
        'linkedin',
        'twitter',
        'instagram',
        'job_title',
        'job_description',
    ];
}
