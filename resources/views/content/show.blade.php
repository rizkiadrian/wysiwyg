@extends('layout.default')
@section('content')
<div class = "row summernote">
{{article->content}}
</div>
<script>
$('#summernote').summernote({
  height: 300,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  focus: true                  // set focus to editable area after initializing summernote
});
</script>
@stop

