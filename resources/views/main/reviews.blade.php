@extends('layouts.main')

@section('content')
    <h2>Reviews</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>

    @endif
    @auth


    <form action="/reviews" method="POST" class="col-md-5 ">
        @csrf

        <div class="form-group">
            <label for="userName">Name</label>
            <input type="text" class="form-control @error('userName') is-invalid @enderror" name="userName" id="userName" value="{{old('userName')}}">
            @error('userName')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="review">Review</label>
            <textarea  class="form-control @error('review') is-invalid @enderror" name="review" id="review">{{old('review')}}</textarea>
            @error('review')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <button class="btn btn-primary mt-2">Send</button>
    </form>
    @else
        <a href="/">Login or reg</a>
    @endauth
    <br>
    <div class="container ">

        @forelse($reviews as $item)

            <div class="card m-3">

                    <h5 class="card-header">{{$item->name}}</h5>
                    <div class="card-body">
                        <p class="card-text">{{$item->review}}</p>
                        <span class="float-md-right">Published : {{$item->created_at = date('d.m.Y')}}</span>
                    </div>

            </div>
        @empty
            <p class="text-center">No reviews</p>
        @endforelse
        {{$reviews->links()}}
    </div>
@endsection

@section('title', 'reviews')