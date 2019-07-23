<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Cart;
use Session;
use App\Order;
use App\OrderDetail;
use App\Payment;
use App\Customer;
use App\Shipping;

class CheckoutController extends Controller
{

    public function index(){
      return view('front-end.checkout.checkout-content');
    }
    public function customerSignUp(Request $request){
      $this->validate($request,['email'=>'email|unique:customers,email']);
      $customer=new Customer();
      $customer->firstName=$request->firstName;
      $customer->lastName=$request->lastName;
      $customer->email=$request->email;
      $customer->password=bcrypt($request->password);
      $customer->phone=$request->phone;
      $customer->address=$request->address;
      $customer->save();

      $customerId=$customer->id;
      Session::put('customerId',$customerId);
      Session::put('customerName',$customer->firstName.' '.$customer->lastName);

      /*$data=$customer->toArray();
      Mail::send('front-end.mails.confirmation-mail',$data,function($message) use ($data){
        $message->to($data['email']);
        $message->subject('Confirmation mail');
      });*/

      return redirect('/checkout/shipping');
    }

    public function shippingForm(){
      $customer=Customer::find(Session::get('customerId'));
      return view('front-end.checkout.shipping', ['customer'=>$customer]);
    }


    public function customerLoginCheck(Request $request){
      $customer= Customer::where('email',$request->email)->first();

      if(password_verify($request->password,$customer->password)){
        Session::put('customerId', $customer->id);
        Session::put('customerName',$customer->firstName.' '. $customer->lastName);
        return redirect('/checkout/shipping');
      }else{
        return redirect('/checkout')->with('message','Please give valid Password');
      }
    }

    public function customerLogout(){
      Session::forget('customerId');
      Session::forget('customerName');
      Cart::destroy();
      return redirect('/');
    }


//enables when user clicks login anywhere but checkout page and thereafter
    public function newCustomerLoginCheck(){
      return view('front-end.customer.customer-login');
    }

//ends



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
        $cartProducts= Cart::content();
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
      return redirect ('/');
    }
}
