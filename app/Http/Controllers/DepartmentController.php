<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public $data;
    public function dept_index()
    {
        return view('department.addDepartment');
    }
    public function save_dept(Request $request){
        $this->data = new Department();
        $this->data->department_name = $request->department_name;
        $this->data->department_code = $request->department_code;
        $this->data->save();
        return back();
    }
    public function manage_dept()
    {
       $this->data =  Department::all();
       return view('department.manageDepartment',[
        'departments' => $this->data,
       ]);
    }
    public function edit_dept($id)
    {
        $this->data = Department::find($id);
        return view('department.editDepartment',[
            'dept'=> $this->data,
        ]);
    }
    public function update_dept(Request $request)
    {
        $this->data =  Department::find($request->department_id);
        $this->data->department_name = $request->department_name;
        $this->data->department_code = $request->department_code;
        $this->data->save();
        return redirect(route('manage.dept'));
    }
    public function delete_dept(Request $request)
    {
        $this->data = Department::find($request->department_id);
        $this->data->delete();
        return back();
    }
}
