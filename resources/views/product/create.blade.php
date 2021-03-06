@extends('layouts.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark ">{{__('Create Products')}}
        </h6>
    </div>
    <div class="card-body">
        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('product.form')
        </form>
    </div>
</div>
@endsection


