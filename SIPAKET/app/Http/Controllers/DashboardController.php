<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $user = DB::table('users')->count();
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'user' => $user
        ]);
    }
}
