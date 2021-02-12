@extends('admin.layouts.index')

@section('content')
    <h2>Products</h2>
@endsection

@section('js')
    <script>
		$(document).ready(function(){
			$('#dataTable').DataTable();
		});
    </script>
@endsection