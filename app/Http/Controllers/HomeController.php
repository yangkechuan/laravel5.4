<?php

namespace App\Http\Controllers;

use App\models\ApiLog;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $from = $request->header('referer');
        $apiLogCount = ApiLog::count();
        $success = ApiLog::where('status', 1)->count() / ($apiLogCount == 0 ? 1: $apiLogCount) * 100;
        $success = sprintf("%.2f", $success);
        return view('home', compact('success', 'from'));
    }
}
