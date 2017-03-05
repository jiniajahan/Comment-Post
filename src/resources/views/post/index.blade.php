<style>
    .menu{

        background-color: rgba(0,0,0,0.5);
    }
    .collapse .nav li a{
        color: #ffffff;
        font-size: 14px;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
    .collapse .nav li a:hover{
        color: #000;
    }
    .card-block{
        border: 1px solid rgba(0,0,0,0.1);
        padding: 20px;
    }
    .card-block input.form-control{
        height: 50px;!important;
    }
</style>
@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <div class="menu">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-7"> <ul class="nav navbar-nav"> <li class="active"><a href="#">Home</a></li> <li><a href="#">Blog</a></li> <li><a href="#">details</a></li> </ul> </div>
                </div>
        </div>
    </div>
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-2">
            <a href="/posts/{{$post->id}}"><h3>{{$post->title}}</h3></a>
        </div>
        <div class="col-md-10">
            <div class="blog-content">
                    <div class="blogs-list">
                        <h2>{{$post->title}}</h2>
                        <p>{{$post->description}}</p>
                    </div>
                <hr>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

