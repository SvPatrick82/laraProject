@extends('admin.layouts.index')

@section('content')
    <div class="container">

        <h1>Edit Product</h1>

        {!! Form::model($product,['url' => '/admin/product/'.$product->id,'files' => true , 'method' => 'put']) !!}

        @include('admin.product._form')

        {!! Form::close() !!}
    </div>
@endsection

@section('js')
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

    <script>
		let options = {
			filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
			filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
			filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
			filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
		};

		CKEDITOR.replace('description', options);

		$('#lfm').filemanager('image');
    </script>
@endsection
