<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        // return view('employee');

    }

    public function storeEmployee(Request $req)
    {

            $employee = new Employee;
            $employee->name=$req->name;
            $employee->email=$req->email;
            $employee->address=$req->address;
            $employee->save();
            return redirect("employee");

    }
    public function showEmployee()
    {
        $data= Employee::paginate(5);
       return view ("employee-show",compact('data'));

    }
}
