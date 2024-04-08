<?php

namespace App\Http\Controllers\Admin\TicketMessage;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function __invoke(Request $request)
    {
        $articles = Subject::query()
            ->latest()
            ->search($request->get('search'))
            ->select2()
            ->take(10)
            ->get();

        return response()->json($articles);
    }
}
