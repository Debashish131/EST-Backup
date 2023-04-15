<?php

namespace App\Http\Controllers;

use App\Leave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaveController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function storeLeave(Request $request)
    {

        $employee = new Leave();
        $employee->name = $request->input('name');
        $employee->dept = $request->input('dept');
        $employee->reason = $request->input('reason');
        $employee->leave = $request->input('leave');
        $employee->creator = Auth::user()->name;
        $employee->save();
        return view('/home');
    }


    public function showLeave()
    {
        $val = Leave::all();
        return view('frontend.showLeave', compact('val'));
    }
}
