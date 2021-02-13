@extends('layouts.main')

@section('content')
    <div class="container">


        <h1>{{$title}} {!! $subtitle !!}</h1>

        <div class="row ">


            @foreach($products as $product )
                @include('store.parts._product')
            @endforeach
        </div>

    </div>
@endsection



@section('title', $title)


