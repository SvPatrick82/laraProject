@extends('layouts.main')

@section('content')
    <div class="container">


        <h1>{{$title}} {!! $subtitle !!}</h1>

        <div class="row ">
            @foreach($products as $product )
                <div class="border-dark card mb-7 shadow-sm m-2 text-center" style="width: 21rem;  ">
                    <div class="card-header">
                        <h3 class="card-title"><a href="/product/{{$product->slug}}">{{$product->name}}</a></h3>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <img src="{{$product->img}}" class="card-img-top" alt="{{$product->name}}">

                        <h4>Category: <a href="/category/{{$product->category->slug}}">{{$product->category->name}}</a></h4>
                        <details>
                            <summary style="color:red"><strong>Description</strong></summary>
                            <p class="card-text" >{{$product->description}}</p>
                        </details>
{{--                        <p class="card-text" >{{$product->description}}</p>--}}
                        <p class="pricing-card-title ">Cost :<span>{{$product->price}}  $</span></p>
                        <a href="#" class="btn btn-outline-primary">Buy</a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection



@section('title', $title)


