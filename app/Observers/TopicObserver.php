<?php

namespace App\Observers;

use App\Models\Topic;

class TopicObserver
{
    public function saving(Topic $topic)
    {
        // 过滤 XSS
        $topic->markdown_content = clean($topic->markdown_content, 'user_topic_body');

        // 摘要信息
        $topic->excerpt = make_excerpt($topic->content);
    }

    public function deleted(Topic $topic)
    {
        \DB::table('replies')->where('topic_id', $topic->id)->delete();
    }
}
