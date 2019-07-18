@extends('front.master')

@section('content')
    <div class="banner1">
        <div class="container">
            <h3><a href="index.html">Home</a> / <span>Cart</span></h3>
        </div>
    </div>
    <!--banner-->

    <!--content-->
    <div class="content">
        <div class="new-arrivals-w3agile">
            <div class="container">
                @if($message=Session::get('message'))
                    <div>
                       <h2>{{$message}}</h2>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="content">
        <!--single-->
        <div class="single-wl3 text-center">
            <div class="container">
              <h2 class="title1 text-center">Cart Details</h2>
                <table class="table table-bordered text-center">
                    <tr>
                        <th>SL NO</th>
                        <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                        <th>Action</th>
                    </tr>
                    @php($i=1)
                    @php($sum=0)
                    @foreach($cardProducts as $cardProduct)
                        <tr>
                           <td>{{ $i++ }}</td>
                           <td>{{$cardProduct->id}}</td>
                           <td>{{$cardProduct->name}}</td>
                           <td><img src="{{asset($cardProduct->options->image)}}" alt="" height="50" width="50"/></td>
                           <td>TK. {{$cardProduct->price}}</td>
                           <td>
                               <form action="{{url('/update-cart-product')}}" method="POST">
                                   {{csrf_field()}}
                                   <input type="number" name="qty" value="{{$cardProduct->qty}}">
                                   <input type="submit" name="btn" value="Update" class=" btn-primary">
                                   <input type="hidden" name="rowId" value="{{$cardProduct->rowId}}">
                               </form>
                           </td>
                           <td>TK. {{$total=$cardProduct->qty*$cardProduct->price}}</td>
                           <td>
                               <a href="{{url('/delete-cart-product/'.$cardProduct->rowId)}}" class="btn btn-danger btn-xs"
                                  onclick="return confirm('are you sure to remove this??')">
                                   <span class="glyphicon glyphicon-trash"></span>
                               </a>
                           </td>
                        </tr>
                        @php($sum=$sum+$total)
                    @endforeach
                </table>
                <table class="table table-bordered">
                    <tr>
                        <th>Sub Total</th>
                        <td>BDT. {{$sum}}</td>
                    </tr>
                    <tr>
                        <th>Discount</th>
                        <td>BDT. {{$discount=0}}</td>
                    </tr>
                    <tr>
                        <th>Tax</th>
                        <td>BDT. {{$tax=0}}</td>
                    </tr>
                    <tr>
                        <th>Grand Total</th>
                        <td>BDT. {{$grandTotal=$sum+$tax-$discount}}</td>
                        {{Session::put('grand_total',$grandTotal)}}
                    </tr>
                </table>
                <a href="{{url('/')}}" class="btn btn-success">Continue Shoping</a>
                @if(Session::get('customerId') && Session::get('shippingId'))
                    <a href="{{url('/payment-info')}}" class="btn btn-danger">Checkout</a>
                @elseif(Session::get('customerId'))
                    <a href="{{url('/shipping-info')}}" class="btn btn-danger">Checkout</a>
                @else
                    <a href="{{url('/checkout')}}" class="btn btn-danger">Checkout</a>
                @endif

            </div>
        </div>
        <!--new-arrivals-->
    </div>
    @endsection

