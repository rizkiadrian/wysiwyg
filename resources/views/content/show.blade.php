@extends('layout.default')
@section('content')
<div class = "container">
<div class = "row">
{!!$article->content!!}
</div>
</div>
<a href="{{ route('article.index') }}" class="btn btn-warning">Back To Index</a> <br/><br/> 
@stop

