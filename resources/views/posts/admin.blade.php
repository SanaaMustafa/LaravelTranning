@extends('layouts.app')

@section('content')
<style>
.panel-default>.panel-heading {
    color: green;
    background-color: #00BCD4;
    border-color: #2196F3;
    
}
h2{
    color: red;
}
h3{
    color: green;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">  <center><h1>Editing Section </h1></center></div>
                <div class="panel-body">
                	<h2>Add New Post</h2>
                	<form action="posts" method="POST">
                		{!!csrf_field()!!}
                		<h3>Title of the Post:</h3>
                		<input type="text" name="title"><br>
                		<h3>Write your Post here </h3>
                		<textarea name="body" row="50" class="form-control"></textarea><br>
                		<button class="btn btn-success" type="submit">Post</button>

                	</form>

                </div>
                @if($posts !=null)
                <table class="table">
                	<tr>
                		<th><h3>Title</h3></th>
                		<th><h3>Update</h3></th>
                		<th><h3>Delete</h3></th>
                	</tr>
                	@foreach($posts as $post)
                	<tr>
                		
                			
                			
                			<td>{{$post->title}}</td>
                			<td><a href="{{ route('posts.update', $post->id) }}"><button class="btn btn-success" type="submit">Update</button></a></td>

                		
                		<td>
                			<form action="posts/{{$post->id}}/" method="POST">
                			{!!csrf_field()!!}
                			<input type="hidden" name="_method" value="DELETE" />
                			<button class="btn btn-danger">Delete</button>

                			</form>

                		</td>
                	</tr>
                	@endforeach

                </table>
                @endif




                	</div>
        </div>
    </div>
</div>
@endsection