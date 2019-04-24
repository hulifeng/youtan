<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Topic;
use App\Http\Requests\TopicRequest;
use Illuminate\Http\Request;
use Auth;
use NoisyWinds\Smartmd\Markdown;

class TopicsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index(Request $request)
    {
        $topics = Topic::withOrder($request->order)->paginate();

        return view('topics.index', compact('topics', 'categories'));
    }

    public function show(Topic $topic)
    {
        return view('topics.show', compact('topic'));
    }

    public function create(Topic $topic)
    {
        $categories = Category::all();

        return view('topics.create_and_edit', compact('categories', 'topic'));
    }

    public function store(TopicRequest $request, Topic $topic)
    {
        $parse = new Markdown();
        $content = $parse->text($request->markdown_content);

        $topic->fill($request->all());
        $topic->user_id = Auth::id();
        $topic->content = $content;
        $topic->cover = '/images/default.png';
        $topic->save();

        return redirect()->route('topics.index')->with('success', '文章创建成功！');
    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
