@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                

                <div class="panel-body">
                    <h2>U are updating at {{$post->title}}</h2>

                    <form action="{{ route('posts.update', $post->id) }}" method="POST">
                            {!!csrf_field()!!}
                            <input type="hidden" name="_method" value="PATCH" />

                            <input type="text" name="title" value="{{$post->title}}" class="form-control"><br>
                            <input type="text" name="body" value="{{$post->body}}" class="form-control"><br>
                            <button class="btn btn-success" type="submit">Update</button>

                        </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
