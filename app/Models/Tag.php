<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name', 'article_num', 'search_num'];

    public function topic()
    {
        return $this->belongsToMany(Topic::class);
    }
}
