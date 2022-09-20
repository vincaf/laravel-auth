@extends('layouts.app')

@section('content')
    <div class="container-lg">
        <div class="row justify-content-center">
            <div class="col-10">
                <form action="{{ route('posts.update', $post->slug) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @include('posts.includes.form')
                </form>
            </div>
        </div>
    </div>
@endsection
