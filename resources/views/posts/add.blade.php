@extends('layouts.app')

@section('content')
<style>
.panel-default>.panel-heading {
    color: green;
    background-color: #00BCD4;
    border-color: #2196F3;
    
}
.panel-body p{
    font-weight: bold;
    font-size: 1.5rem;
    color: blue;
}
h2{
    color: red;
}
.comment-content p{
    color: green;
    font-size: 2rem;
    padding-left: 5px;
}
h4{
    font-weight: bold;
    color: red;


}
.comment-blok{
    padding: 6px;
}
.comment{
    background-color: grey;
}
.author-time {
    
font-size: 1rem;
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
                    
                   <center> <p> {{$post->body}} </p></center>



                </div>
                @foreach($post->comments as $comment)

                <div class="comment">
                    <div class="comment-blok">
                        


                        <div class="author-name">
                            <h4>{{ $comment->user->name }}</h4>
                            <p class="author-time">{{ date('F nS, Y - g:iA' ,strtotime($comment->created_at)) }}</p>
                        </div>

                        
                        
                    </div>
                    <div class="comment-content">
                        
                        <p>>>> : {{ $comment->content }}</p>
                    
                    </div>

                    
                    
                </div>
            @endforeach
            <div class="row">
        <div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px;">

          <form action="comments/{{$post->id}}" method="POST">

                {!!csrf_field()!!}

                        
                        
                        <h3>Write your Comment here </h3>
                        <textarea name="content" row="50" class="form-control"></textarea><br>
                        <button class="btn btn-success" type="submit">add</button>
            

            </form>
        </div>
    </div>



                </div>
        </div>
    </div>
</div>
@endsection