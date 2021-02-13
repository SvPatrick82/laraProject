@extends('admin.layouts.index')

@section('content')
    <h1>Products</h1>
    <a href="/admin/product/create" class="btn btn-primary">Add product</a>

    <table class="table" id="dataTable">
        <thead>
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th class=" text-center">Action price</th>
            <th>Slug</th>
            <th class=" text-center">Recommended</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td><img src="{{asset($item->img)}}" alt="" style="width: 75px"></td>
                <td>{{$item->name}}</td>
                <td>{{$item->category->name}}</td>
                <td>{{$item->price}}</td>
                <td class=" text-center">{{$item->action_price}}</td>
                <td>{{$item->slug}}</td>
                <td class=" text-center"><i class="fas fa-check-circle" style="color: {{$item->recommended === 1 ? 'red' : 'grey'}}"></i></td>
                <td class="d-flex justify-content-around"><a href="/admin/product/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                    {!! Form::model($item,['url' => '/admin/product/'.$item->id, 'method' => 'DELETE']) !!}
                        <button class="btn btn-danger">Delete</button>
                    {!! Form::close() !!}

                </td>
            </tr>
        @endforeach

        </tbody>
    </table>



@endsection