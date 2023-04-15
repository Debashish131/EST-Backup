<?php

namespace App\Http\Controllers;

use App\EmployeeInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function storeData(Request $request)
    {

        $employee = new EmployeeInfo();
        $employee->name = $request->input('name');
        $employee->age = $request->input('age');
        $employee->birthdate = $request->input('birthdate');
        $employee->email = $request->input('email');
        $employee->address = $request->input('address');
        $employee->contactNo = $request->input('contactNo');
        $employee->qualification = $request->input('qualification');
        $employee->birthdate = $request->input('birthdate');
        $employee->recentResult = $request->input('recentResult');
        $employee->designation = $request->input('designation');
        $employee->creator = Auth::user()->name;

//        $employee->jobid = $request->input('jobid');
//        $employee->deptId = $request->input('deptId');
//        $employee->designation = $request->input('designation');
//        $employee->joindate = $request->input('joindate');
//        $employee->permanentDate = $request->input('permanentDate');
//        $employee->basicSalary = $request->input('basicSalary');
//        $employee->salaryAmount = $request->input('salaryAmount');
//        $employee->promotionDate = $request->input('promotionDate');
//        $employee->save();

        $employee->save();
        return redirect('/dashboard');
    }

    public function leaveApplication()
    {
        return view('frontend.leaveApplication');
    }
}
