<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index() {
        return view('user.index');
    }

    public function profile() {
        return view('user.pages.profile');
    }

    public function edit_profile() {
        return view('user.pages.edit_profile');
    }
}
