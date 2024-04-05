<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function __invoke(Request $request)
    {
        $users = User::query()
            ->latest()
            ->search($request->get('search'))
            ->select2()
            ->take(10)
            ->get();

        return response()->json($users);
    }
}
