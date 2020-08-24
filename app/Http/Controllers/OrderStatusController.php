<?php

namespace App\Http\Controllers;

use App\Mail\OrderStatusUpdate;
use App\Order;
use App\OrderStatus;
use App\VehicleCheckout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderStatusController extends Controller
{


    public function UpdateOrderStatus(Request $request)
    {
        $this->validate($request,[
            'order_id'=>'required',
            'status'=>'required',
            'note'=>'required',
        ]);

        $order = VehicleCheckout::find($request->order_id);

        $status = new OrderStatus();
        $status->order_id=$request->order_id;
        $status->status=$request->status;
        $status->note=$request->note;
        $status->save();

        $order->status=$request->status;
        $order->save();

        //Mail::to($order->email)->send(new OrderStatusUpdate($order,$status));
        return back()->withSuccess('Order status updated!');
    }
}
