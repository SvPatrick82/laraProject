<div class="form_group">
    {{Form::label('name', 'Category Name:', ['class' => 'form-control'])}}
    {{Form::text('name', null , ['class' => 'form-control'] )}}
</div>

<div class="form_group">
    {{Form::label('slug', 'Category Slug:', ['class' => 'form-control'])}}
    {{Form::text('slug', null , ['class' => 'form-control'] )}}
</div>


<div class="form_group">
    {{Form::label('description', 'Category Description:', ['class' => 'form-control'])}}
    {{Form::textarea('description', null , ['class' => 'form-control'] )}}
</div>


<div class="form_group">
    {{Form::label('imgUpload', 'Category Image:', ['class' => 'form-control'])}}
    {{Form::file('imgUpload',  ['class' => 'form-control'] )}}
</div>

<div class="input-group">
   <span class="input-group-btn">
     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> Choose
     </a>
   </span>
    <input id="thumbnail" class="form-control" type="text" name="img">
</div>
<div id="holder" style="margin-top:15px;max-height:100px;"></div>

<button class="btn btn-primary mt-2">Save</button>