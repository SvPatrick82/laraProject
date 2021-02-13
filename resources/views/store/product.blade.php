@extends('layouts.main')

@section('content')

    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif



    <div class="row">
        <div class="box2 border-dark">
            <h1>{{$product->name}}</h1>
            <p>{{$product->category->name}}</p>

            <h3>Reviews</h3>

            <form action="/product/{{$product->slug}}"  method="POST">
                @csrf

                <textarea name="prodReview" class="form-control border-dark @error('prodReview') is-invalid @enderror" value="{{old('userName')}}" rows="3"></textarea>
                @error('prodReview')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
                <button class="btn btn-outline-primary mt-3">Add review</button>
                <input type="hidden" name="product_id" value="{{$product->id}}">
            </form>
        </div>

    </div>



@endsection