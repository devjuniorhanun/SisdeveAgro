<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::query();

        $users->when($request->keyword, function($query, $keyword) {
            $query->where(function($q) use ($keyword) {
                $q->where('name', 'like', '%' .$keyword . '%')
                ->orWhere('email', 'like', '%' .$keyword . '%');
            });
        });

        $users = $users->paginate();

        return view('users.index', compact('users'));
    }
}
