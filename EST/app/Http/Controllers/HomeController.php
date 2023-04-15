<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.dashboard');
    }
    public function EmployeeInfo()
    {
        return view('frontend.profileInfo');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect("/");
    }
}