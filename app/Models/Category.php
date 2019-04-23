<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description'];

    public function categories()
    {
        if (is_null(cache('categories'))) {
            cache(['categories' => $this->all()], Carbon::now()->addMinutes(10));
        }

        return cache('categories');
    }
}
