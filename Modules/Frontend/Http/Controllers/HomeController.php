<?php

namespace Modules\Frontend\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Backend\Entities\Course;

class HomeController extends Controller
{
   public function index()
   {
      $teachers = User::where('role_id', '4')->orderBy('id', 'desc')->take(6)->get();
      $courses = Course::orderBy('id', 'desc')->take(6)->get();
      return view('website.index' , compact('teachers', 'courses'));
   }
}
