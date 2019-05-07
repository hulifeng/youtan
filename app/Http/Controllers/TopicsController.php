<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Topic;
use App\Http\Requests\TopicRequest;
use Illuminate\Http\Request;
use Auth;
use NoisyWinds\Smartmd\Markdown;
use App\Models\Tag;

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
        $recommend_article = $topic->where('category_id', $topic->category->id)->get()->random(3);

        return view('topics.show', compact('topic', 'recommend_article'));
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

        $topic->title = $request->input('title');
        $topic->excerpt = $request->input('excerpt');
        $topic->category_id = $request->input('category_id');
        $topic->markdown_content = $request->input('markdown_content');
        $topic->user_id = Auth::id();
        $topic->content = $content;
        $topic->cover = '/images/default.png';
        $topic->save();

        // 先清空文章对应的标签
        $topic->tags()->detach();
        // 遍历标签，如果标签存在则添加关联，如果标签不存在先创建再添加关联
        $tags = explode(',', $request->tags);
        for ($i = 0; $i < sizeof($tags); $i++) {
            $tag = Tag::where("name", $tags[$i])->first();
            if ($tag) {
                $topic->tags()->attach($tag->id);
            } else {
                $tag = new Tag;
                $tag->name = $tags[$i];
                $tag->save();
                $topic->tags()->attach($tag->id);
            }
        }

        return redirect()->route('topics.index')->with('success', '文章创建成功！');
    }

    public function update()
    {

    }

    public function destroy()
    {

    }

    public function uploadImage()
    {
        dd(11);
    }
}
