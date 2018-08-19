@extends('layouts.backend.app')
@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Product</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Product</li>
            </ol>
            <a href="{{route('admin.product.create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                    <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Weight</th>
                                        <th>Stock</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>
                                            @foreach($categories as $category)
                                                @if($category->id == $product->category_id)
                                                    {{$category->name}}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>{{$product->weight}}</td>
                                        <td>{{$product->stock}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>
                                            <a href="{{route('admin.product.edit', ['product' => $product->id])}}">
                                                <button type="button" class="btn waves-effect waves-light btn-sm btn-warning">Edit</button>
                                            </a> 
                                            <form action="{{route('admin.product.destroy', ['product' => $product->id])}}" method="post" style="display: inline;">
                                                <!-- <input type="hidden" value="{{$product->id}}" name="id"> -->
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn waves-effect waves-light btn-sm btn-danger">Delete</button>
                                            </form>
                                            </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
    </div>
</div>
@endsection