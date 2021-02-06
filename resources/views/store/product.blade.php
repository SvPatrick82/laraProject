@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="box2 border-dark">
            <h1>{{$product->name}}</h1>
            <p>{{$product->category->name}}</p>
            @include('store.parts._productFullOption')
        </div>

    </div>
    @include("store.parts.product._prodReviews")


@endsection