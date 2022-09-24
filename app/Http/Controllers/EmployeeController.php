<?php

namespace App\Http\Controllers;

use App\Department;
use App\Http\Requests\StoreEmployee;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\Datatables\Datatables;

class EmployeeController extends Controller
{

    public function index()
    {
        return view('employee.index');
    }


    public function create()
    {
        $departments = Department::orderBy('title')->get();
        return view('employee.create',compact('departments'));
    }


    public function store(StoreEmployee $request)
    {
        $employee = new User();
        $employee->employee_id = $request->employee_id;
        $employee->name = $request->name;
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->password = Hash::make($request->password);
        $employee->nrc_number = $request->nrc_number;
        $employee->gender = $request->gender;
        $employee->birthday = $request->birthday;
        $employee->address = $request->address;
        $employee->department_id = $request->department_id;
        $employee->date_of_join = $request->date_of_join;
        $employee->is_present = $request->is_present;
        $employee->save();
        return redirect()->route('employee.index')->with('create','New employee successfully created');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function ssd(Request $request)
    {
        $employees = User::with('department');
        return Datatables::of($employees)
            ->addColumn('department_name', function ($each) {
                return $each->department ? $each->department->title : '-';
            })
            ->editColumn('is_present',function($each){
                if($each->is_present == 1){
                    return '<span class="badge badge-pill badge-success">Present</span>';
                }else{
                return '<span class="badge badge-pill badge-danger">Leave</span>';
                }
            })
            ->rawColumns(['is_present'])
            ->make(true);
    }
}
