@extends('layouts.main')

@section('content')
    <h2>{{$namePage}}</h2>

    <div class="row">

        @foreach ($newss as $item)
            <div class="card ml-2 col-md-5">
                <h4 class="m-1">{{$item->title}}</h4>
                <img src="{{$item->img}}" class="card-img-top float-start" alt="{{$item->title}}">
                <hr>
                <details>
                    <summary class="text-right">{{$item->short_content}}</summary>
                    <br>
                    <span class="text-center">
                        {{$item->content}}
                    </span>
                </details>
                <br>
                @foreach ($users as $user)
                    @if ($user->id === $item->user_id)
                        <p>{{$user->name}}</p>
                    @endif
                @endforeach
            </div>

        @endforeach

    </div>

    {{$newss->links()}}
@endsection

@section('title', 'news')