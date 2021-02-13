<div class="input-group mb-3">
    {{Form::label('name', 'Category Name:', ['class' => 'input-group-text','style' => 'width:200px'])}}
    {{Form::text('name', null , ['class' => 'form-control'] )}}
</div>

<div class="input-group mb-3">
    {{Form::label('slug', 'Category Slug:', ['class' => 'input-group-text','style' => 'width:200px'])}}
    {{Form::text('slug', null , ['class' => 'form-control' . ($errors->has('slug') ? ' is-invalid' : '')] )}}
</div>


<div class="input-group mb-3">
    {{Form::label('description', 'Category Description:', ['class' => 'input-group-text','style' => 'width:200px'])}}
    {{Form::textarea('description', null , ['class' => 'form-control'] )}}
</div>


{{--<div class="input-group mb-3">--}}
{{--    {{Form::label('imgUpload', 'Category Image:', ['class' => 'input-group-text','style' => 'width:200px'])}}--}}
{{--    {{Form::file('imgUpload',  ['class' => 'form-control'] )}}--}}
{{--</div>--}}

<div class="input-group mb-3">
   <span class="input-group-btn">
     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> Choose
     </a>
   </span>
    <input id="thumbnail" class="form-control" type="text" name="img" value="@isset($category){{ $category->img}} @endisset">
</div>
<div id="holder" style="margin-top:15px;max-height:100px;">
    @isset($categoty)
        <img src="{{$category->img}}" alt="" style="max-width: 125px">
    @endisset
</div>

<button class="btn btn-primary mt-2">Save</button>