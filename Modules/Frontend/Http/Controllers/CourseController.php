<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Backend\Entities\Course;

class CourseController extends Controller
{
    public function course()
    {
        $courses = Course::all();
        return view('website.page.course', compact('courses'));
    }
}
