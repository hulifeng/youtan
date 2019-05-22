<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Topic;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show(Category $category, Request $request, Topic $topic)
    {
        $topics = $topic->where('category_id', $category->id)->withOrder($request->order)->paginate();

        // 推荐文章
        $recommend_article = Topic::orderBy('view_count', 'desc')->limit(5)->get();

        return view('topics.index', compact('topics', 'category', 'recommend_article'));
    }
}
