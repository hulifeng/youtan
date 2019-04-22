<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicsController extends Controller
{
    public function index()
    {
        $topics = Topic::with(['category', 'user'])->paginate();

        return view('topics.index', compact('topics', 'categories'));
    }
}
