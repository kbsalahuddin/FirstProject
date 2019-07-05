<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use App\Customer;
use App\Shipping;

class CheckoutController extends Controller
{

    public function index(){
      return view('front-end.checkout.checkout-content');
    }
    public function customerSignUp(Request $request){
      $customer=new Customer();
      $customer->firstName=$request->firstName;
      $customer->lastName=$request->lastName;
      $customer->email=$request->email;
      $customer->password=$request->password;
      $customer->phone=$request->phone;
      $customer->address=$request->address;
      $customer->save();

      $customerId=$customer->id;
      Session::put('customerId',$customerId);
      Session::put('customerName',$customer->firstName.' '.$customer->lastName);

      $data=$customer->toArray();
      Mail::send('front-end.mails.confirmation-mail',$data,function($message) use ($data){
        $message->to($data['email']);
        $message->subject('Confirmation mail');
      });
      //return('success');
      return redirect('/checkout/shipping');
    }

    public function shippingForm(){
      $customer=Customer::find(Session::get('customerId'));
      return view('front-end.checkout.shipping', ['customer'=>$customer]);
    }

    public function saveShippingInfo(Request $request){
      $shipping= new Shipping();
      $shipping->fullName=$request->fullName;
      $shipping->emailAddress=$request->emailAddress;
      $shipping->phoneNumber=$request->phoneNumber;
      $shipping->shipAddress=$request->shipAddress;
      $shipping->save();

      Session::put('shippingId', $shipping->id);
      return redirect('/checkout/payment');
    }

    public function paymentForm(){
      return view('front-end.checkout.payment');
    }
    public function newOrder(Request $request){
      $paymentType = $request->paymentType;
      if($paymentType=='Cash'){
        $order= new Order();
        $order->customerId=Session::get('customerId');
        $order->shippingId=Session::get('shippingId');
        $order->orderTotal=Session::get('orderTotal');//from show-cart page
        $order->save();
        $payment= new Payment();
        $payment->orderId=$order->id;
        $payment->paymentType=$paymentType;
        $payment->save();
        $cartProducts= Cart::contents();
        foreach($cartProducts as $cartProduct){
          $orderDetail= new OrderDetail();
          $orderDetail->orderId=$order->id;
          $orderDetail->productId=$cartProduct->id;
          $orderDetail->productName=$cartProduct->name;
          $orderDetail->productPrice=$cartProduct->price;
          $orderDetail->productQuantity=$cartProduct->qty;
          $orderDetail->save();
        }
        Cart::destroy();
        return redirect('/complete/order');
      }else if($paymentType=='Paypal'){

      }else if($paymentType=='BKash'){

      }
    }
    public function completeOrder(){
      return('success');
    }
}
