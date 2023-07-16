<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Frontend\Entities\Order;


class OrderController extends Controller
{
    public function order()
    {
        $data = Order::all();
        return view('backend::order', compact('data'));
    }
    public function delete($id)
    {
        Order::find($id)->delete();
        return redirect()->back();
    }

    public function changestatus($id)
    {
        $getstatus = Order::select('status')->where('id', $id)->first();
        if ($getstatus->status == 0) {
            $status = 1;
        } else {
            $status = 0;
        }
        Order::where('id', $id)->update(['status' => $status]);
        return redirect()->back();
    }
}
