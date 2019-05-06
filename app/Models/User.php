<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\MustVerifyEmail as MustVerifyEmailTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
use Auth;

class User extends Authenticatable implements MustVerifyEmailContract
{
    use MustVerifyEmailTrait;

    use Notifiable {
        notify as protected laravelNotify;
    }

    protected $fillable = [
        'name', 'email', 'password', 'introduction', 'avatar'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // 关联文章
    public function topics()
    {
        return $this->hasMany(Topic::class);
    }

    // 关联回复
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    // 通知
    public function notify($instance)
    {
        // 如果当前的人通知了，就不必通知了
        if ($this->id == Auth::id()) {
            return;
        }

        // 只有数据库类型通知才需提醒
        if (method_exists($instance, 'toDatabase')) {
            $this->increment('notification_count');
        }

        $this->laravelNotify($instance);
    }

    // 标记通知已读
    public function markAsRead()
    {
        $this->notification_count = 0;
        $this->save();
        $this->unreadNotifications->markAsRead();
    }

    // 权限
    public function isAuthOf($model)
    {
        return $this->id == $model->user_id;
    }
}