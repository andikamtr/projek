<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = "Dashboard";
        $user = User::all();
        $user->countUser();
        dd($user);
        return view('dashboard.index', compact('title'));
    }
}
