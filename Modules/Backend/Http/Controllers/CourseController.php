<?php

namespace Modules\Backend\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Backend\Entities\Course;

class CourseController extends BaseController
{
    public function course()
    {

        $data = Course::all();
        return view('backend::course', compact('data'));
    }
    public function create(Request $request)
    {
        if ($request->hasfile('material')) {
            foreach ($request->file('material') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path() . '/event', $name);
                $data[] = $name;
            }
        }
        $file = new Course();
        $file->material = json_encode($data);
        $file->course_name = $request->course_name;
        $file->course_details = $request->course_details;
        $file->price = $request->price;
        $file->instructor = $request->instructor;
        if ($request->hasfile('thumnainImage')) {
            $row = $request->file('thumnainImage');
            $extention = $row->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $row->move('storage', $filename);
            $file->thumnainImage = $filename;
        }
        $file->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        Course::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $data = Course::find($id);
        return view('backend::edit.editcourse', compact('data'));
    }
    public function update(Request $request, $id)
    {

        $file = Course::find($id);
        if ($request->hasfile('material')) {
            foreach ($request->file('material') as $row) {
                $name = $row->getClientOriginalName();
                $row->move(public_path() . '/event', $name);
                $data[] = $name;
            }
        } else {
            $data = json_decode($file->material);
        }
        $file->material = json_encode($data);
        $file->course_name = $request->course_name;
        $file->course_details = $request->course_details;
        $file->price = $request->price;
        $file->instructor = $request->instructor;
        $file->update();
        return redirect()->route('admin.course');
    }
}
