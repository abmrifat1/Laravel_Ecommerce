<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\OrderDetail;
use App\Payment;
use App\Shipping;
use App\User;
use PDF;
use Illuminate\Http\Request;
use DB;

class OrderController extends Controller
{
   public function showOrderInfo(){

       $orders=DB::table('orders')
           ->join('customers','orders.customer_id','=','customers.id')
           ->join('payments','orders.id','=','payments.order_id')
           ->select('orders.*','customers.first_name','customers.last_name','payments.payment_type','payments.payment_status')
           ->orderBy('id','desc')
           ->get();


       return view('admin.order.show-order',['orders'=>$orders]);
   }

   public function viewOrderDetails($id){
       $order=Order::find($id);
       $customer=Customer::find($order->customer_id);
       $shipping=Shipping::find($order->shipping_id);
       $payment=Payment::find($order->id);

       $products=OrderDetail::where('order_id',$id)->get();

       return view('admin.order.view-order',[
           'order'=>$order,
           'customer'=>$customer,
           'shipping'=>$shipping,
           'products'=>$products,
           'payment'=>$payment
       ]);
   }

   public function viewOrderInvoice($id){
       $order=Order::find($id);
       $customer=Customer::find($order->customer_id);
       $shipping=Shipping::find($order->shipping_id);
       $payment=Payment::find($order->id);
       $products=OrderDetail::where('order_id',$id)->get();


       return view('admin.order.show-invoice',[
           'order'=>$order,
           'customer'=>$customer,
           'shipping'=>$shipping,
           'products'=>$products,
           'payment'=>$payment
           ]);
   }

   public function myPdf(){

//       $users=User::all();
//       return $users;
       $pdf=PDF::loadView('pdf');
      return $pdf->download('demo.pdf');
   }
   public function downloadOderInvoice($id){
       $order=Order::find($id);
       $customer=Customer::find($order->customer_id);
       $shipping=Shipping::find($order->shipping_id);
       $payment=Payment::find($order->id);
       $products=OrderDetail::where('order_id',$id)->get();

      $pdf=PDF::loadView('admin.order.download-invoice',[
          'order'=>$order,
          'customer'=>$customer,
          'shipping'=>$shipping,
          'products'=>$products,
          'payment'=>$payment
      ]);
      return $pdf->stream('0000'.$order->id.'pdf');
   }

}
