<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicsController extends Controller
{
    public function index(Request $request)
    {
        $topics = Topic::withOrder($request->order)->paginate();

        return view('topics.index', compact('topics', 'categories'));
    }
}
