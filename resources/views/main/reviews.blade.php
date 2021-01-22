@extends('layouts.main')

@section('content')
    <h2>Reviews</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>

    @endif

    <form action="/reviews" method="POST">
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

@endsection

@section('title', 'reviews')