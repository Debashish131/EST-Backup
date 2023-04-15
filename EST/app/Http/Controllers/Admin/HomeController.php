<?php

namespace App\Http\Controllers\Admin;

use App\EmployeeInfo;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.admindashboard');
    }

    public function EmployeeInfo()
    {
        return view('backend.addEmployeeInfo');
    }

    public function showInfo()
    {
        $val = EmployeeInfo::all();
        return view('backend.employeeinfo', compact('val'));
    }
}
