<?php

namespace App\Http\Controllers\Admin\Articles;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleFeedController extends Controller
{
    public function __invoke(Request $request)
    {
        $articles = Article::query()
            ->latest()
            ->search($request->get('search'))
            ->select2()
            ->take(10)
            ->get();

        return response()->json($articles);
    }
}
