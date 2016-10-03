@extends('layout.default')
@section('content')
<div class = "row">
<div class ="container">
</br></br>
{{Form::open(['route' => 'article.store'])}}
 <div class="box-body">
 <div class="form-group">
 {{Form::label('title', 'Title')}}
 {{Form::text('title',null,array('class' => 'form-control', 'placeholder'=>'Title'))}}
 </div>
 <div class="form-group">
 {{Form::label('body', 'Content')}}
 {{Form::textarea('message',null,array('class' => 'form-control summernote', 'placeholder'=>'article'))}}
 </div>
 <div class="form-group">
     {{Form::submit('Publish Post',array('class' => 'btn btn-primary btn-sm'))}} </div>
{{Form::close()}} 
</div>
</div>

@stop