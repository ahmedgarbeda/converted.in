<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserSelect2Resource;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function getUsers(Request $request)
    {
        if ($request->get('search')) {
            $users = User::where('is_admin', 0)
                ->where('name', 'like', '%' . $request->get('search') . '%')
                ->get();

            return response()->json([
                UserSelect2Resource::collection($users),
            ]);
        }
        return [];
    }
}
