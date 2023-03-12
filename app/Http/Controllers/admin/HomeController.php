<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function users_list()
    {
        return view('admin.users');
    }

    public function view_user(Request $request)
    {
        $user = User::find($request->user_id);
        return view('admin.view_user',compact('user'));
    }
}
