


@extends('admin.master')

@section('content')





    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                @if($message=Session::get('message'))
                    <h1 class="page-header">{{$message}}</h1>
                @else
                    <h1 class="page-header">Tables</h1>
                @endif
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        DataTables Advanced Tables
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <h1>Customer Info</h1>
                        <hr/>
                        <table width="100%" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                              <th>Customer Name</th>
                                <td>{{$customer->first_name.' '.$customer->last_name}}</td>
                            </tr>
                            <tr>
                                <th>Customer Email</th>
                                <td>{{$customer->email}}</td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>{{$customer->phone_number}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{$customer->address}}</td>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        <!-- /.table-responsive -->

                        <h1>Shipping Info</h1>
                        <hr/>
                        <table width="100%" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Shipping Name</th>
                                <td>{{$shipping->full_name}}</td>
                            </tr>
                            <tr>
                                <th>Shipping Email</th>
                                <td>{{$shipping->email}}</td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>{{$shipping->phone_number}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{$shipping->address}}</td>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>

                        <h1>Product Info</h1>
                        <hr/>
                        <table width="100%" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Total Price</th>

                            </tr>
                            @php($i=1)
                            @foreach($products as $product)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$product->product_id}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>TK.{{$product->product_price}}</td>
                                <td>{{$product->product_quantity}}</td>
                                <td>TK.{{$product->product_quantity*$product->product_price}}</td>
                            </tr>
                                @endforeach

                            </thead>
                            <tbody>

                            </tbody>
                        </table>


                        <h1>Payment Info</h1>
                        <hr/>
                        <table width="100%" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Payment Type</th>
                                <td>{{$payment->payment_type}}</td>
                            </tr>
                            <tr>
                                <th>Payment Status</th>
                                <td>{{$payment->payment_status}}</td>
                            </tr>

                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>

@endsection

