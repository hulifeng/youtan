<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReplyRequest;
use App\Models\Reply;
use Auth;

class RepliesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param ReplyRequest $request
     * @param Reply $reply
     */
    public function store(ReplyRequest $request, Reply $reply)
    {
        $reply->content = $request->input('content');
        $reply->topic_id = $request->input('topic_id');
        $reply->user_id = Auth::id();
        $reply->save();

        return redirect()->route('topics.show', $reply->topic->id)->with('success', '评论创建成功！');
    }

    public function destroy(Reply $reply)
    {

        $this->authorize('destroy', $reply);

        $reply->delete();

        return redirect()->route('topics.show', $reply->topic->id)->with('success', '评论删除成功！');
    }
}
