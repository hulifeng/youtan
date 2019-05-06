<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['title', 'content', 'markdown_content', 'user_id', 'category_id', 'reply_count', 'view_count', 'last_reply_user_id', 'order', 'excerpt', 'slug'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeWithOrder($query, $order)
    {
        switch ($order) {
            case 'recent':
                $query->recent();
                break;

            default :
                $query->recentReplied();
                break;
        }

        // 预防 N + 1 问题
        return $query->with('user', 'category', 'tags');
    }

    public function scopeRecent($query)
    {
        // 按照创建时间顺序排序
        return $query->orderBy('created_at', 'desc');
    }

    public function scopeRecentReplied($query)
    {
        return $query->orderBy('updated_at', 'desc');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
