<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller
{
    public function index()
    {
//        $topRated = DB::select('SELECT u.id, u.name, COUNT(t.assigned_to_id) as n_o_t
//                    FROM Users u
//                    LEFT JOIN tasks t
//                    ON u.id = t.assigned_to_id
//                    GROUP BY u.id,  u.name
//                    ORDER BY n_o_t desc
//                    limit 10');

        $topRated = User::select('id','name')->withCount('userTasks')
            ->orderByDesc('user_tasks_count')
            ->whereHas('userTasks')
            ->take(10)->get();
        return view('index', compact('topRated'));
    }
}
