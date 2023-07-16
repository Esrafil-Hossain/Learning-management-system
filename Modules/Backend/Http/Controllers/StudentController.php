<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;


class StudentController extends Controller
{
    public function student()
    {
        $data = User::orderBy('id', 'desc')->where('role_id','3')->get();
        return view('backend::student', compact('data'));
    }
    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->back();
    }
}
