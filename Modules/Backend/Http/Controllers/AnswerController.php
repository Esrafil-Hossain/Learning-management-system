<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Frontend\Entities\Answer;

class AnswerController extends Controller
{
    public function answer()
    {
        $data = Answer::all();
        return view('backend::answer', compact('data'));
    }
    public function download($answer) {
        $file_path = public_path('storage/'.$answer);
        return response()->download($file_path);
      }

}
