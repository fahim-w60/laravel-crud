<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;

class SectionController extends Controller
{
    public $data;
    public function index_section(){
        return view('section.addSection');
    }
    public function save_section(Request $request)
    {
        $this->data = new Section();
        $this->data->section_name = $request->section_name;
        $this->data->save();
        return back();
    }
    public function manage_section()
    {
        $this->data = Section::all();
        return view('section.manageSection',[
            'sections' => $this->data,
        ]);
    }
    public function edit_section($id)
    {
        $this->data = Section::find($id);
        return view('section.editSection',[
            'section' => $this->data,
        ]);
    }
    public function update_sec(Request $request)
    {
        $this->data = Section::find($request->section_id);
        $this->data->section_name = $request->section_name;
        $this->data->save();
        return redirect(route('manage.section'));
    }
    public function delete_sec(Request $request)
    {
        $this->data = Section::find($request->section_id);
        
        $this->data->delete();
        return back();
    }
}
