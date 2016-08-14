@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                

                <div class="panel-body">
                    <h1>get started with laravel</h1>
                    <h3>By:<a href="authers/show.blade.php">Laracast</a></h3>
                    <p>in this topic we will learn how to get started with laravel</p>
                    <ul>
                        <li>install</li>
                        <li>routering</li>
                        <li>controller</li></ul>
                        <p>
                       <h2># Installation</h2><br>


Server Requirements<br>

The Laravel framework has a few system requirements. Of course, all of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.

However, if you are not using Homestead, you will need to make sure your server meets the following requirements:<br>
<ol>
<li>PHP >= 5.5.9</li>
<li>OpenSSL PHP Extension</li>
<li>PDO PHP Extension</li>
<li>Mbstring PHP Extension</li>
<li>Tokenizer PHP Extension</li> </ol></p>
                </div>
                <div class="panel-body">
                    <h4>leave a comment</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>


                </div>
                <div class="panel-body">
                    <div class="media">
                        <h4 class="Media-heading">Username</h4>
                        <small>8.aug,2016</small><br>
                        thank you for this post
                    </div>
                    <div class="media">
                        <h4 class="Media-heading">Username</h4>
                        <small>8.aug,2016</small><br>
                        thank you for this post
                    </div>
                    <div class="media">
                        <h4 class="Media-heading">Username</h4>
                        <small>8.aug,2016</small><br>
                        thank you for this post
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
