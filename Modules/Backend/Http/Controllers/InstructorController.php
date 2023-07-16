<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;


class InstructorController extends Controller
{
    public function instructor()
    {
        $data = User::where('role_id', '4')->orderBy('id', 'desc')->get();
        return view('backend::instructor', compact('data'));
    }
    public function create(Request $request)
    {
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->password = $request->password;
        $data->role_id = $request->role_id;

        if ($request->hasfile('avatar')); {
            $file = $request->file('avatar');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('storage', $filename);
            $data->avatar = $filename;
        }
        $data->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $data = User::find($id);
        return view('backend::edit.editinstructor', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->password = $request->password;

        if ($request->File('avatar')) {
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('storage', $filename);
            $data->avatar = $filename;
        } else {
            $data->avatar = $data->avatar;
        }
        $data->update();
        return redirect()->route('admin.instructor');
    }
}
