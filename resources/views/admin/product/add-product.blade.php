


@extends('admin.master')

@section('content')




    <div class="container">


        <div class="well">

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="login-panel panel panel-default">


                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="text-success text-center">{{Session::get('message')}}</h1>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <div class="panel-heading">
                            <h3 class="panel-title text-center text-success">Add Product</h3>
                        </div>
                        <div class="panel-body">


                            <form role="form" action="{{url('/new-product')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-3 control-label">Category Name</label>
                                    <div class="col-sm-9">
                                        <select name="category_id" class="form-control">
                                            <option>--Select Category Nmae--</option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-3 control-label">Brand Nmae</label>
                                    <div class="col-sm-9">
                                        <select name="brand_id" class="form-control">
                                            <option>--Select Brand Nmae--</option>
                                            @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Product Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="product_name" class="form-control" id="inputEmail3" placeholder="Brand Name">
                                        <span style="color: red">{{ $errors->has('product_name') ?  $errors->first('product_name') : ' '}}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Product Code</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="product_code" class="form-control" id="inputEmail3" placeholder="Brand Name">
                                        <span style="color: red">{{ $errors->has('product_code') ?  $errors->first('product_code') : ' '}}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Product Price</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="product_price" class="form-control" id="inputEmail3" placeholder="Brand Name">
                                        <span style="color: red">{{ $errors->has('product_price') ?  $errors->first('product_price') : ' '}}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Product Quantity</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="product_quantity" class="form-control" id="inputEmail3" placeholder="Brand Name">
                                        <span style="color: red">{{ $errors->has('product_quantity') ?  $errors->first('product_quantity') : ' '}}</span>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-3 control-label">Product Short Description</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="short_description" rows="5"></textarea>
                                        <span style="color: red">{{ $errors->has('short_description') ?  $errors->first('short_description') : ' '}}</span>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-3 control-label">Product Long Description</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control textarea" name="long_description" rows="10"></textarea>
                                        <span style="color: red">{{ $errors->has('long_description') ?  $errors->first('long_description') : ' '}}</span>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-3 control-label">Product Image</label>
                                    <div class="col-sm-9">
                                       <input type="file" name="product_image" accept="image/*"/>
                                        <span style="color: red">{{ $errors->has('product_image') ?  $errors->first('product_image') : ' '}}</span>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-3 control-label">Publication Status</label>
                                    <div class="col-sm-9">
                                        <select name="publication_status" class="form-control">
                                            <option value="1">Published</option>
                                            <option value="0">Unpublished</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" name="btn" class="btn btn-success btn-block">Save Product Info</button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

