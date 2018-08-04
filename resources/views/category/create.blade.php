@extends('layouts.backend.app')
@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Create Category</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Create Category</li>
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
                <form action="{{route('admin.category.store')}}" class="" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                                <label for="example-text-input" class="col-2 col-form-label">Name</label>
                                <div class="col-12">
                                    <input class="form-control" type="text" value="" name="name">
                                </div>
                        </div>                    
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="{{route('admin.category.index')}}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
@endsection