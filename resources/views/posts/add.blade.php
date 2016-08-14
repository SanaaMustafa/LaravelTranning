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
                <div class="panel-heading">  <center><h1>{{ $post->title }} </h1></center></div>
                <div class="panel-body">
                    
                    <p>{!! $post->body !!}</p>



                </div>
                @foreach($post->comments as $comment)
                <div class="comment">
                    <div class="author-info">

                        <div class="author-name">
                            <h4>{{ $comment->user->name }}</h4>
                            <p class="author-time">{{ date('F nS, Y - g:iA' ,strtotime($comment->created_at)) }}</p>
                        </div>
                        
                    </div>

                    <div class="comment-content">
                        <textarea>
                        {{ $comment->content }}
                    </textarea>
                    </div>
                    
                </div>
            @endforeach
            <div class="row">
        <div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px;">
            {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}
                
                <div class="row">
                    

                    

                    <div class="col-md-12">
                        {{ Form::label('content', "Comment:") }}
                        {{ Form::textarea('content', null, ['class' => 'form-control', 'rows' => '5']) }}

                        {{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
                    </div>
                </div>

            {{ Form::close() }}
        </div>
    </div>



                </div>
        </div>
    </div>
</div>
@endsection