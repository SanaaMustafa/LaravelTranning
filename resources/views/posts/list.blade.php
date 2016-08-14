@extends('layouts.app')

@section('content')
<style>
h1{
    color: green;
}
.fa{
    color: green;
}
a{
    color:red;

}
a:hover{
    color: green;
    font-size: 1.5rem;
    text-decoration: none;
}
.panel-default {
    border-color: #2196F3;
}
.panel-default>.panel-heading {
    color: green;
    background-color: #00BCD4;
    border-color: #2196F3;
    margin: 2px;
}

</style>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="{{url('/admin')}}">Editing section (update , Add , Delete)</a></div>
                <div class="panel-heading"><center><h3>Posts</h3></center></div>

                @foreach($posts as $post)
                <div class="panel-body">
                    <h1><i class="fa fa-pencil" aria-hidden="true"></i>{{$post->title}}</h1>
                    <p>Created at : {{$post->created_at}}</p>
                    <br>
                    
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
