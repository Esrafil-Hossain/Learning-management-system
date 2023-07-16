<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContactusController extends Controller
{
    public function contactus()
    {
        return view('website.page.contactus');
    }
}
