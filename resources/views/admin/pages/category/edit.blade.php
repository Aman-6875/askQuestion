@extends('admin.layout')
@section('content')
    <div class="page-title">
        <h3>Category</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="/admin-dashboard">Home</a></li>
                <li class="active">Category Edit</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="col-md-12">
            <div class="panel panel-white">
                <div class="panel-heading clearfix">
                    <h4 class="panel-title">Edit Category</h4>
                </div>
                <div class="panel-body">
                    <form action="{{ route('category.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputName">Category Name</label>
                            <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name"
                                name="name" value="{{ $category->name }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
