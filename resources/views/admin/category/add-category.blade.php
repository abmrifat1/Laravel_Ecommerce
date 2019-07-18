


@extends('admin.master')

@section('content')




<div class="container">


    <div class="well">

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="login-panel panel panel-default">


                <div class="row">
                    <div class="col-lg-12">
                        {{Session::get('message')}}
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="panel-heading">
                    <h3 class="panel-title text-center text-success">Add Category</h3>
                </div>
                <div class="panel-body">


                        <form role="form" action="{{url('/new-category')}}" method="POST" class="form-horizontal">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Category Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="category_name" class="form-control" id="inputEmail3" placeholder="Category Name">
                                    <span style="color: red">{{ $errors->has('category_name') ?  $errors->first('category_name') : ' '}}</span>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Category Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="category_description" rows="10"></textarea>
                                    <span style="color: red">{{ $errors->has('category_description') ?  $errors->first('category_description') : ' '}}</span>

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
                                    <button type="submit" name="btn" class="btn btn-success btn-block">Save Category Info</button>
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

