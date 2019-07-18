


@extends('admin.master')

@section('content')




<div class="container">


    <div class="well">

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center text-success"> Edit Category Info</h3>
                    </div>
                    <div class="panel-body">


                        <form role="form" name="editCategoryForm" action="{{url('/update-category')}}" method="POST" class="form-horizontal">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Category Name</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$categoryById->category_name}}" name="category_name" class="form-control" id="inputEmail3" placeholder="Category Name">
                                    <input type="hidden" value="{{$categoryById->id}}" name="category_id" class="form-control" id="inputEmail3" placeholder="Category Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Category Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="category_description" rows="10">{{$categoryById->category_description}}</textarea>
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
                                    <button type="submit" name="btn" class="btn btn-success btn-block">Upadte Category Info</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.forms['editCategoryForm'].elements['publication_status'].value='{{$categoryById->publication_status}}'
</script>

@endsection

