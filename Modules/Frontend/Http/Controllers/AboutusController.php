<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AboutusController extends Controller
{
   public function aboutus()
   {
        return view('website.page.aboutus');
   }
}
