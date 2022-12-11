<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Section;
use App\Models\Department;

class StudentController extends Controller
{
    public $data;
    public function index()
    {
        return view('student.addStudent',[
            'dept' => Department::all(),
            'sec' =>Section::all(),
        ]);
    }
    public function save_student(Request $request)
    {
        $this->data = new Student();
        $this->data->name = $request->name;
        $this->data->phone = $request->phone;
        $this->data->email = $request->email;
        $this->data->dept_id = $request->dept_id;
        $this->data->sec_id = $request->sec_id;
        $this->data->address = $request->address;
        $this->data->image = $this->saveImage($request);
        $this->data->save();
        return back();
    }
    public function saveImage($request)
    {
        $image = $request->file('image');
        $imageName = rand().'.'.$image->getClientOriginalExtension();
        $directory = 'upload/student/';
        $imageUrl = $directory.$imageName;
        $image->move($directory,$imageName);
        return $imageUrl; 
    }
    public function manage_student()
    {
        return view('student.manageStudent',[
            'students' => Student::all()
        ]);
    }
    public function edit($id)
    {
        $this->data = Student::find($id);
        return view('student.editStudent',[
            'student' => $this->data
        ]);
    }
    public function update(Request $request)
    {
        $this->data = Student::find($request->student_id);
        $this->data->name = $request->name;
        $this->data->phone = $request->phone;
        $this->data->email = $request->email;
        $this->data->dept_id = $request->dept_id;
        $this->data->sec_id = $request->sec_id;
        $this->data->address = $request->address;
        if($request->file('image'))
        {
            if($this->data->image!=null)
            {
                unlink($this->data->image);
            }
            $this->data->image = $this->saveImage($request);
        }
        $this->data->save();
        return back();
    }
    public function delete_student(Request $request)
    {
        $this->data = Student::find($request->student_id);
        $this->data->delete();
        return redirect(route('manage.student'));
    }
}
