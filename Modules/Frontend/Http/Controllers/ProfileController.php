<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Backend\Entities\Certificate;
use Modules\Backend\Entities\Exam;
use Modules\Frontend\Entities\Answer;
use Modules\Frontend\Entities\Order;

class ProfileController extends Controller
{
    public function userprofile()
    {
        $exams = Exam::all();
        $certificates = Certificate::all();
        $orders = Order::all();
        $courses = DB::table('orders')->join('courses', 'courses.id', 'orders.course_id')->join('exams', 'exams.order_id', 'orders.id')->where('orders.user_id', auth()->user()->id)->whereNull('exams.answer')->select('orders.*', 'exams.id as exam_id', 'courses.course_name')->get();
        return view('website.page.profile', compact('exams', 'certificates', 'courses', 'orders'));
    }

    public function download($report)
    {
        $file_path = public_path('storage/' . $report);
        return response()->download($file_path);
    }

    public function answersubmit(Request $request)
    {
        $data = Exam::find($request->exam_id);
        $currentDateTime = strtotime(date('Y-m-d H:i:s'));
        $submissionTime = strtotime($data->duration);
    
        if ($currentDateTime <= $submissionTime) {
            if ($request->hasFile('answer')) {
                $file = $request->file('answer');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('storage', $filename);
                $data->answer = $filename;
            }
            $data->save();
            return redirect()->back();
        } else {
            return redirect()->route('exam.error');
        }
    }
    

    
    // public function answersubmit(Request $request)
    // {
    //     $data = Exam::find($request->exam_id);
    //     $currentDay = date("Y-m-d");
    //     $examDate = $data->duration;
    //     $examDate = date("Y-m-d", strtotime($examDate));
    //     if ($currentDay <= $examDate) {
    //         if ($request->hasFile('answer')) {
    //             $file = $request->file('answer');
    //             $extension = $file->getClientOriginalExtension();
    //             $filename = time() . '.' . $extension;
    //             $file->move('storage', $filename);
    //             $data->answer = $filename;
    //         }
    //         $data->save();
    //         return redirect()->back();
    //     }
    //     else {
    //         return redirect()->route('home');
    //     }
    // }

    public function cirtificatedownload($certificate)
    {
        $file_path = public_path('storage/' . $certificate);
        return response()->download($file_path);
    }

    public function materialdownload($material)
    {
        $materialarray = json_decode($material);
        foreach ($materialarray as $multiplematerial) {
            $file_path = public_path('event/' . $multiplematerial);
            return response()->download($file_path);
        }
    }
}
