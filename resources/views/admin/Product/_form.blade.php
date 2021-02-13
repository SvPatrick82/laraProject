<div class="input-group mb-3">
    {{Form::label('name', 'Product Name:', ['class' => 'input-group-text','style' => 'width:200px'])}}
    {{Form::text('name', null , ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : '') ])}}
    @error('name')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>

<hr style="border: 1px solid black;">
<div class="input-group mb-3">
    {{Form::label('price', 'Product Price:', ['class' => "input-group-text",'style' => 'width:200px'])}}
    {{Form::text('price', null , ['class' => 'form-control'  . ($errors->has('price') ? ' is-invalid' : '')])}}
</div>

<hr style="border: 1px solid black;">
<div class="input-group mb-3">
    {{Form::label('action_price', 'Product Action price:', ['class' => "input-group-text",'style' => 'width:200px'])}}
    {{Form::text('action_price', null , ['class' => 'form-control'  . ($errors->has('action_price') ? ' is-invalid' : '')])}}
</div>

<hr style="border: 1px solid black;">
<div class="input-group mb-3">
    {{Form::label('slug', 'Product Slug:', ['class' => 'input-group-text', 'style' => 'width:200px'])}}
    {{Form::text('slug', null , ['class' => 'form-control'  . ($errors->has('slug') ? ' is-invalid' : '')] )}}
    @error('slug')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>


{{--<hr style="border: 1px solid black;">--}}
{{--<div class="input-group mb-3">--}}
{{--    {{Form::label('imgUpload', 'Product Image:', ['class' => "input-group-text",'style' => 'width:200px'])}}--}}
{{--    {{Form::file('imgUpload', ['class' => "form-control"  . ($errors->has('imgUpload') ? ' is-invalid' : '')])}}--}}
{{--</div>--}}

<hr style="border: 1px solid black;">
<div class="input-group mb-3">
    {{Form::label('categories', 'Product Category:', ['class' => "input-group-text",'style' => 'width:200px'])}}
    {!!Form::select('category_id',$categories , ['class' => 'form-select' ])  !!}
</div>

<hr style="border: 1px solid black;">
<div class="input-group mb-3">
    {{Form::label('description', 'Category Description:', ['class' => "input-group-text",'style' => 'width:200px'])}}
    {{Form::textarea('description', null , ['class' => 'form-control'  . ($errors->has('description') ? ' is-invalid' : '')] )}}
</div>

<hr style="border: 1px solid black;">
<div class="form-check mb-3">
    {{Form::label('recommended', 'Product Recommended:', ['class' => "form-label",'style' => 'width:220px',])}}
    {!!Form::radio('recommended',1, 'checked', ['class' => 'form-input' ,]) !!}
    <br>
    {{Form::label('recommended', 'Product Not Recommended:', ['class' => "form-label",'style' => 'width:220px'])}}
    {!!Form::radio('recommended',0, '',['class' => 'form-input' ] ) !!}
</div>


<div class="input-group">
   <span class="input-group-btn">
     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> Choose
     </a>
   </span>
    <input id="thumbnail" class="form-control" type="text" name="img" value="@isset($product) {{$product->img}} @endisset">
</div>
<div id="holder" style="margin-top:15px;max-height:100px;">
    @isset($product)
        <img src="{{$product->img}}" alt="" style="width: 125px"   >
    @endisset
</div>


<button class="btn btn-primary mt-2">Save</button>