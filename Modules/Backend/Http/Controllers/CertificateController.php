<?php

namespace Modules\Backend\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Backend\Entities\Certificate;

class CertificateController extends Controller
{
    public function certificate()
    {
        $data = Certificate::all();
        $users = User::where('role_id','3')->get();
        return view('backend::certificate', compact('data', 'users'));
    }
    public function create(Request $request)
    {
        $data = new Certificate();
        $data->course_name = $request->course_name;
        $data->user_id = $request->user_id;
        $data->date = $request->date;

        if ($request->hasFile('certificate')) {
            $file = $request->file('certificate');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('storage', $filename);
            $data->certificate = $filename;
        }
        $data->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        Certificate::find($id)->delete();
        return redirect()->back();
    }
}
