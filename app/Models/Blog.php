<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'content', 'status', 'image', 'url', 'github', 'tags'];


    public function scopeDraft($query)
    {
        return $query->where('status', '=', 'draft');
    }

    public function scopePublished($query)
    {
        return $query->where('status', '=', 'published');
    }
}
