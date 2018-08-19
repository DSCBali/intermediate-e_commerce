@extends('layouts.backend.app')
@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Edit Product</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Edit Product</li>
            </ol>
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
    <div class="col-6">
        <div class="card">
            @include('layouts.errors')
            <div class="card-body">
                <form action="{{route('admin.product.update', ['product' => $product->id])}}" class="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <div class="row">
                                <label for="example-text-input" class="col-2 col-form-label">Name</label>
                                <div class="col-12">
                                    <input class="form-control" type="text" value="{{$product->name}}" name="name">
                                </div>
                        </div>                    
                    </div>
                    <div class="form-group">
                        <div class="row">
                                <label for="example-text-input" class="col-2 col-form-label">Category</label>
                                <div class="col-12">
                                    <select name="category_id" class="form-control">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" 
                                                @if($category->id == $product->category_id)
                                                    selected
                                                @endif
                                                >{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>                    
                    </div>
                    <div class="form-group">
                        <div class="row">
                                <label for="example-text-input" class="col-2 col-form-label">Weight</label>
                                <div class="col-12">
                                    <input class="form-control" type="number" value="{{$product->weight}}" name="weight">
                                </div>
                        </div>                    
                    </div>
                    <div class="form-group">
                        <div class="row">
                                <label for="example-text-input" class="col-2 col-form-label">Stock</label>
                                <div class="col-12">
                                    <input class="form-control" type="number" value="{{$product->stock}}" name="stock">
                                </div>
                        </div>                    
                    </div>
                    <div class="form-group">
                        <div class="row">
                                <label for="example-text-input" class="col-2 col-form-label">Price</label>
                                <div class="col-12">
                                    <input class="form-control" type="number" value="{{$product->price}}" name="price">
                                </div>
                        </div>                    
                    </div>
                    <div class="form-group">
                        <div class="row">
                                <label for="example-text-input" class="col-2 col-form-label">Description</label>
                                <div class="col-12">
                                    <textarea name="description" id="" cols="70" rows="10">{{$product->description}}</textarea>
                                </div>
                        </div>                    
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="{{route('admin.product.index')}}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
@endsection