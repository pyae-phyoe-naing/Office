<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use App\Department;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreEmployee;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UpdateEmployee;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

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
        $profile_image_name = null;
        if($request->hasFile('profile_image')){
            $file = $request->file('profile_image');
            $profile_image_name = time()."_".uniqid().'.'.$file->getClientOriginalExtension();
            Storage::disk('public')->put('employee/'.$profile_image_name, file_get_contents($file));
            // public => storage disk (app/public)
        }
        $employee = new User();
        $employee->employee_id = $request->employee_id;
        $employee->name = $request->name;
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->password = Hash::make($request->password);
        $employee->nrc_number = $request->nrc_number;
        $employee->profile_image = $profile_image_name;
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
        $employee = User::findOrFail($id);
        return view('employee.show',compact('employee'));
    }


    public function edit($id)
    {
        $departments = Department::orderBy('title')->get();
        $employee = User::findOrFail($id);
        return view('employee.edit',compact('employee','departments'));
    }


    public function update(UpdateEmployee $request, $id)
    {
        $employee = User::findOrFail($id);
        $employee->employee_id = $request->employee_id;
        $employee->name = $request->name;
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->password = $request->password ?  Hash::make($request->password) : $employee->password;
        $employee->nrc_number = $request->nrc_number;
        $employee->gender = $request->gender;
        $employee->birthday = $request->birthday;
        $employee->address = $request->address;
        $employee->department_id = $request->department_id;
        $employee->date_of_join = $request->date_of_join;
        $employee->is_present = $request->is_present;
        $employee->update();
        // return redirect()->route('employee.index')->with('update', 'Employee successfully updated');
        return Redirect::to('/employee')->with(['update' => 'Employee successfully updated']);
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
            ->editColumn('updated_at',function($each){
            return Carbon::parse($each->updated_at)->format('Y-m-d H:i:s');
            })
            ->addColumn('plus-icon',function($each){
                return null;
            })
            ->addColumn('action',function($each){
                $edit_icon = '<a class="text-warning" href="'.route('employee.edit',$each->id).'"><i class="far fa-edit"></i></a>';
                $info_icon = '<a class="text-info" href="'.route('employee.show',$each->id).'"><i class="fas fa-info-circle"></i></a>';
                return '<div class="action-icon">'.$edit_icon.$info_icon.'</div>';
            })
            ->rawColumns(['is_present','action'])
            ->make(true);
    }
}
