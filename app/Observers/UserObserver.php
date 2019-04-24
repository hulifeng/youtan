<?php

namespace App\Observers;

use App\Models\Topic;

class UserObserver
{
    public function saving(Topic $topic)
    {
        $topic->excerpt = make_excerpt($topic->content);
    }
}
