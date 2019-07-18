<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\OrderDetail;
use App\Payment;
use App\Shipping;

use Cart;
use Illuminate\Http\Request;
use Mail;
use Session;

class CheckoutController extends Controller
{
    public function index(){
        return view('front.checkout.checkout-content');
    }
    public function saveCustomerInfo(Request $request){
        $this->validate($request, [
            'first_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'last_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'email'=>'required|email|unique:customers,email',
            'password'=>'required|max:10|min:6',
            'phone_number'=>'required|size:11|regex:/(01)[0-9]{9}/',
            'address'=>'required',
        ]);

        $customer=new Customer();
        $customer->first_name=$request->first_name;
        $customer->last_name=$request->last_name;
        $customer->email=$request->email;
        $customer->password=bcrypt($request->password);
        $customer->phone_number=$request->phone_number;
        $customer->address=$request->address;
        $customer->save();

        $customerId=$customer->id;
        Session::put('customerId',$customerId);
        Session::put('customerName',$request->first_name.' '.$request->last_name);

//        $data=$customer->toArray();
//        Mail::send('mail.congratulation-mail',$data,function ($message) use ($data){
//            $message->to($data['email']);
//            $message->subject('Congratulation Mail');
//        });

        return redirect('/shipping-info');
    }

    public  function showShippingInfo(){
        $customerId=Session::get('customerId');
        $customer=Customer::find($customerId);
        return view('front.checkout.shipping-info',['customer'=>$customer]);
    }

    public function customerLogin(Request $request)
    {
         $customer = Customer::where('email', $request->email)->first();

        if ($customer) {
            if (password_verify($request->password, $customer->password)) {
                Session::put('customerId', $customer->id);
                Session::put('customerName', $customer->first_name.' '.$customer->last_name);

                return redirect('/shipping-info');
            } else {
                return redirect('/checkout')->with('message', 'Invalid Password');
            }
        }
        else{
            return redirect('/checkout')->with('message', 'Invalid email ');

        }
    }
    public function customerLoginFirst(){
        return redirect('/checkout');
    }

    public function customerLogout(){
        Session::forget('customerId');
        Session::forget('customerName');
        Session::forget('shippingId');

        return redirect('/');
    }

    public function saveShippingInfo(Request $request){
           $shipping=new Shipping();
           $shipping->full_name=$request->full_name;
           $shipping->email=$request->email;
           $shipping->phone_number=$request->phone_number;
           $shipping->address=$request->address;
           $shipping->save();

           $shippingId=$shipping->id;
           Session::put('shippingId',$shippingId);
           return redirect('/payment-info');

    }
    public function showPaymentInfo(){
        return view('front.checkout.payment-content');
    }

    public function saveOrderInfo(Request $request){
          $paymentType=$request->payment_type;

          if($paymentType=='Cash on delivery'){
              $order=new Order();
              $order->customer_id=Session::get('customerId');
              $order->shipping_id=Session::get('shippingId');
              $order->order_total=Session::get('grand_total');
              $order->save();
              $orderId=$order->id;

              $payment=new Payment();
              $payment->order_id=$orderId;
              $payment->payment_type=$paymentType;
              $payment->save();

              $cartProducts=Cart::content();
              foreach($cartProducts as $cartProduct){
                  $orderDetail=new OrderDetail();
                  $orderDetail->order_id=$orderId;
                  $orderDetail->product_id=$cartProduct->id;
                  $orderDetail->product_name=$cartProduct->name;
                  $orderDetail->product_price=$cartProduct->price;
                  $orderDetail->product_quantity=$cartProduct->qty;
                  $orderDetail->save();

     }
     Cart::destroy();
     return redirect('/');

      }else if($paymentType=='BKash'){
              $order=new Order();
              $order->customer_id=Session::get('customerId');
              $order->shipping_id=Session::get('shippingId');
              $order->order_total=Session::get('grand_total');
              $order->save();
              $orderId=$order->id;

              $payment=new Payment();
              $payment->order_id=$orderId;
              $payment->payment_type=$paymentType;
              $payment->save();

              $cartProducts=Cart::content();
              foreach($cartProducts as $cartProduct){
                  $orderDetail=new OrderDetail();
                  $orderDetail->order_id=$orderId;
                  $orderDetail->product_id=$cartProduct->id;
                  $orderDetail->product_name=$cartProduct->name;
                  $orderDetail->product_price=$cartProduct->price;
                  $orderDetail->product_quantity=$cartProduct->qty;
                  $orderDetail->save();

              }
              Cart::destroy();
              return redirect('/');
          }else if($paymentType=='Paypal'){
              $order=new Order();
              $order->customer_id=Session::get('customerId');
              $order->shipping_id=Session::get('shippingId');
              $order->order_total=Session::get('grand_total');
              $order->save();
              $orderId=$order->id;

              $payment=new Payment();
              $payment->order_id=$orderId;
              $payment->payment_type=$paymentType;
              $payment->save();

              $cartProducts=Cart::content();
              foreach($cartProducts as $cartProduct){
                  $orderDetail=new OrderDetail();
                  $orderDetail->order_id=$orderId;
                  $orderDetail->product_id=$cartProduct->id;
                  $orderDetail->product_name=$cartProduct->name;
                  $orderDetail->product_price=$cartProduct->price;
                  $orderDetail->product_quantity=$cartProduct->qty;
                  $orderDetail->save();

              }
              Cart::destroy();
              return redirect('/');
          }
    }
}















