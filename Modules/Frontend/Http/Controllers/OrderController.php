<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Frontend\Entities\Order;


class OrderController extends Controller
{
    public function checkout($courseId)
    {
        return view('website.page.checkout', compact('courseId'));
    }
    public function order(Request $request)
    {
        $collection = collect(['name' => $request->name, 'user_id' => auth()->user()->id , 'course_id' => $request->course_id, 'email' => $request->email, 
        'payment_method' => $request->payment_method, 'account_no' => $request->account_no, 'transaction' => $request->transaction,
        'status' => $request->status,]);
        Order::create($collection->all());
        return redirect()->route('user.profile');
    }
}
