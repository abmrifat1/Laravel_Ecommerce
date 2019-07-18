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
                <h2 class="title1 text-center text-danger">Welcome {{Session::get('customerName')}}.You have to give us prouct shipping Information to complete your valuable order.If your billing info & shipping info are same, then just press on Save Info Button</h2>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="panel-body">
                            <h1 class="text-center text-success">Shipping Info</h1>
                            <hr/>
                            <form class="form-horizontal" action="{{url('/new-shipping')}}" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Full Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{$customer->first_name.' '.$customer->last_name}}" name="full_name" class="form-control">
                                        {{$errors->has('full_name') ? $errors->first('full_name'):' '}}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3">Email Address</label>
                                    <div class="col-sm-9">
                                        <input type="email" value="{{$customer->email}}" name="email" class="form-control">
                                        {{$errors->has('email') ? $errors->first('email'):' '}}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3">Phone Number</label>
                                    <div class="col-sm-9">
                                        <input type="number" value="{{$customer->phone_number}}" name="phone_number" class="form-control">
                                        {{$errors->has('phone_number') ? $errors->first('phone_number'):' '}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Address</label>
                                    <div class="col-sm-9">
                                        <textarea name="address" class="form-control" style="resize: vertical">{{$customer->address}}</textarea>
                                        {{$errors->has('address') ? $errors->first('address'):' '}}
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-sm-9 col-sm-offset-3">
                                        <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Shipping info">

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--new-arrivals-->
    </div>
@endsection

