<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Dashboard;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        if(Auth::user()->fk_user_type_id == 1){
            return view('admin.dashboard.index');

        } else if(Auth::user()->fk_user_type_id == 2){
            return view('dashboard.index');

        } else {
            return view('dashboard.index');
        }

    }
}