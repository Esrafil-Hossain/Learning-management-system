<?php

namespace Modules\Frontend\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class InstructorController extends Controller
{
    public function instructor()
    {
        $teachers = User::where('role_id', '4')->orderBy('id', 'desc')->take(6)->get();
        return view('website.page.instructor', compact('teachers'));
    }
}
