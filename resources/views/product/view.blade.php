@extends('layouts.backend.app')
@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">View Product</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">View Product</li>
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
            <div class="card-body">
                {{-- <form action="{{route('admin.seller.update',['id' => $data->id])}}" class="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <div class="row">
                            <label for="example-text-input" class="col-2 col-form-label">Name</label>
                            <div class="col-12">
                                <input class="form-control" type="text" value="{{ $data->name }}" name="name">
                            </div>
                        </div>
                        <div class="row">
                            <label for="example-text-input" class="col-2 col-form-label">Email</label>
                            <div class="col-12">
                                <input class="form-control" type="text" value="{{ $data->email }}" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="{{route('admin.seller.index')}}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form> --}}
                <div class="jumbotron">
                    <p>Name Product : {{ $data->name }}</p>
                    <p>Weigth : {{$data->weight}}</p>
                    <p>Stock : {{$data->stock}}</p>
                    <p>Price : Rp. {{$data->price}}</p>
                    <p>Discount : {{$data->discount}} %</p>
                    <p>Description : {{$data->description}}</p>
                    <p>Size : {{$data->size}}</p>
                    <p>Color : {{$data->color}}</p>
                    <p>Image:</p>
                    <img style="max-width:300px" src="{{asset($data->image)}}" alt="">   
                </div>
                <a href="{{route('admin.product.edit', ['id' => $data->id])}}" class="btn btn-success">Edit</a>
                <form class="fix-form" action="{{ route('admin.product.destroy', ['id' => $data->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn waves-effect waves-light btn-sm btn-danger">Delete</button>
                </form>
                <a href="{{route('admin.product.index')}}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')

@endpush
