<?php

namespace App\Http\Controllers;

use PDF;
use DB;
use App\Order;
use App\Payment;
use App\Shipping;
use App\OrderDetail;
use App\Customer;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function manageOrder(){
      $orders= DB::table('orders')
          ->join('customers','orders.customerId','=','customers.id')
          ->join('payments','orders.id','=','payments.orderId')
          ->select('orders.*','customers.firstName','customers.lastName','payments.paymentType','payments.paymentStatus')
          ->get();
      return view('admin.order.manage-order')->with('orders',$orders);
    }
//id here is order id
    public function viewOrderDetail($id){
       $order =Order::find($id);
       $customer=Customer::find($order->customerId);
       $shipping=Shipping::find($order->shippingId);
       $payment=Payment::where('orderId', $order->id)->first();
       $detail=OrderDetail::where('orderId',$order->id)->get();
        return view('admin.order.view-order-detail')->with('order',$order)
                                                    ->with('customer',$customer)
                                                    ->with('shipping', $shipping)
                                                    ->with('payment', $payment)
                                                    ->with('detail', $detail);
  }


    public function viewOrderInvoice($id){
       $order =Order::find($id);
       $customer=Customer::find($order->customerId);
       $shipping=Shipping::find($order->shippingId);
       $payment=Payment::where('orderId', $order->id)->first();
       $detail=OrderDetail::where('orderId',$order->id)->get();
        return view('admin.order.order-invoice')->with('order',$order)
                                                    ->with('customer',$customer)
                                                    ->with('shipping', $shipping)
                                                    ->with('payment', $payment)
                                                    ->with('detail', $detail);
      }

      public function downloadOrderInvoice($id){
        $order =Order::find($id);
        $customer=Customer::find($order->customerId);
        $shipping=Shipping::find($order->shippingId);
        $payment=Payment::where('orderId', $order->id)->first();
        $detail=OrderDetail::where('orderId',$order->id)->get();

        $pdf=PDF::loadView('admin.order.download-invoice', [
          'customer'=>$customer,
          'shipping'=> $shipping,
          'payment'=> $payment,
          'detail'=> $detail,
          'order'=>$order
        ]);
        return $pdf->stream('dowloadInvoice.pdf');
        //return $pdf->download('invoice.pdf');
        //return view('admin.order.download-invoice');
      }


}
