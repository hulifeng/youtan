<?php

namespace App\Observers;

use App\Models\Reply;
use App\Notifications\TopicReplied;
use App\Policies\ReplyPolicy;

class ReplyObserver
{
    public function created(Reply $reply)
    {
        $reply->topic->updateReplyCount();

        // 通知话题作者有新的评论
        $reply->topic->user->notify(new TopicReplied($reply));
    }

    public function deleted(Reply $reply)
    {
        $reply->topic->updateReplyCount();
    }
}
