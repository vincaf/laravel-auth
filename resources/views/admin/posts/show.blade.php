@extends('layouts.app')

@section('content')
    <div class="container-lg">
        <h2 class="my-3">{{$post->title}}</h2>
        <div class="row">
            <div class="col-4">
                <img class="img-fluid" src="https://iltorinese.it/wp-content/themes/fox/images/placeholder.jpg" alt="{{$post->title}}">
            </div>
            <div class="col-8">
                <p>{{$post->post_content}}</p>
                <p><strong>Author:</strong> {{$post->author}}</p>
                <p><strong>Post Date:</strong> {{$post->post_date}}</p>
            </div>
        </div>
    </div>
@endsection