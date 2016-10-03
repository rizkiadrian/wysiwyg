@extends('layout.default')
@section('content')
<div class ="container">

<h2>Article Table</h2>
  
  <table class="table table-hover">
		<tr>
			<th>id</th>
			<th>title</th>
			<th>content</th>
			<th>Action</th>	
		</tr>
	</thead>
	<tbody>
	@foreach($articles as $article)
		<tr>
			<td>{{$article->id}}</td>
			<td>{{$article->title}}</td>
			<td><p>{!!$article->content!!}</p></td>
			<td>
				<form method="POST" action="" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
					<a href="" class="btn btn-warning">SHOW</a> <br/><br/> 
	              	 <a href="" class="btn btn-warning">EDIT</a> <br/><br/> 
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" value="Hapus" class="btn btn-danger"/>
	            </form>
			</td>	
		</tr>
	@endforeach
	</tbody>
</table>
  <a href="" class="btn btn-success">Add data</a> <br/><br/>
  </div>
@stop