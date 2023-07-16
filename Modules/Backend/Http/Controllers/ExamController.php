<?php

namespace Modules\Backend\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Backend\Entities\Exam;

class ExamController extends Controller
{
    public function exam()
    {
        $data = Exam::all();
        $users = User::where('role_id','3')->get();
        $courses = DB::table('orders')->join('courses', 'courses.id', 'orders.course_id')->join('users', 'users.id', 'orders.user_id')->select('courses.course_name', 'users.name', 'orders.id')->get();
        return view('backend::exam', compact('data','users', 'courses'));
    }
    public function create(Request $request)
    {
        $data = new Exam();
        $data->order_id = $request->order_id;
        $data->duration = $request->duration;
        $data->status = '0';

        if ($request->hasFile('question')) {
            $file = $request->file('question');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('storage', $filename);
            $data->question = $filename;
        }
        $data->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        Exam::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $data = Exam::find($id);
        return view('backend::edit.certificate',compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Exam::find($id);
        $data->status = $request->status;
        if ($request->File('certificate')) {
            $file = $request->file('certificate');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('storage', $filename);
            $data->certificate = $filename;
        } 
        $data->update();
        return redirect()->route('admin.exam');

    }
    public function answerdownload($answer)
    {
        $file_path = public_path('storage/' . $answer);
        return response()->download($file_path);
    }
}
