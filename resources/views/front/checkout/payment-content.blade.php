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
                <h2 class="title1 text-center text-danger">You have to give us payment Information to complete your valuable order.</h2>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="panel-body">
                           <form action="{{url('/new-order')}}" method="POST">
                             {{csrf_field()}}
                               <table class="table table-bordered">
                                   <tr>
                                       <th>Cash on Delivery</th>
                                       <td><input type="radio" name="payment_type" value="Cash on delivery"></td>
                                   </tr>
                                   <tr>
                                       <th>BKash</th>
                                       <td><input type="radio" name="payment_type" value="BKash"></td>
                                   </tr>
                                   <tr>
                                       <th>PayPaL</th>
                                       <td><input type="radio" name="payment_type" value="Paypal"></td>
                                   </tr>
                                   <tr>
                                       <th></th>
                                       <td><input type="submit" class="btn btn-info" name="btn" value="Confirm Order"></td>
                                   </tr>
                               </table>
                           </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--new-arrivals-->
    </div>
@endsection

