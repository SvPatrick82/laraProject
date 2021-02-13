@extends('admin.layouts.index')

@section('content')
    <h1>Categories</h1>
    <a href="/admin/category/create" class="btn btn-primary">Add Category</a>
{{--    <a href="{{asset('admin/category/create')}}" class="btn btn-primary">Add Category</a>--}}
{{--    <a href="{{route('category.create')}}" class="btn btn-primary">Add Category</a>--}}

    <table class="table" id="dataTable">
        <thead>
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>Name</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($categories as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td><img src="{{asset($item->img)}}" alt="" style="width: 75px"></td>
                <td>{{$item->name}}</td>
                <td class="d-flex justify-content-around"><a href="/admin/category/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                    {!! Form::open(['url' => '/admin/category/'.$item->id , 'method' => 'DELETE' ]) !!}
                    <button class="btn btn-danger">Delete</button>
                    {!! Form::close() !!}
                </td>

            </tr>
        @endforeach

        </tbody>
    </table>


@endsection

@section('js')
    <script>
        $(document).ready(function(){
        	$('#dataTable').DataTable();
        });
    </script>
@endsection