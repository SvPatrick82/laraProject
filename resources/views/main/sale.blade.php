@extends('layouts.main')

@section('content')

    <h1>{{$store}}</h1>
    <div class="row">
        @foreach($products as $product )
           @include('store.parts._product')
        @endforeach
    </div>
    {{$products->links()}}

@endsection


@section('title', 'sale')