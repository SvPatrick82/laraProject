@extends('layouts.main')

@section('content')

    <h1>{{$store}}</h1>
    <div class="row">
        @foreach($products as $item )
            <div class="card text-center ms-2" style="width: 18rem; ">
                <img src="{{$item->img}}" class="card-img-top" alt="{{$item->name}}">
                <div class="card-body">
                    <h5 class="card-title">{{$item->name}}</h5>
                    <p class="card-text">{{$item->description}}</p>
                    <p>Cost :<span>{{$item->price}}  $</span></p>
                    <a href="#" class="btn btn-primary">Buy</a>
                </div>
            </div>
        @endforeach
    </div>
    {{$products->links()}}

@endsection


@section('title', 'sale')