@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card my-3" style="max-width: 850px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ $post->post_image }}" alt="{{ $post->post_title }}"
                            class="img-fluid rounded-start" />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="mb-2"><strong>{{ $post->title }}</strong></h3>
                            <p><strong>Author:</strong> {{ $post->author }}</p>
                            <p>{{ $post->post_content }}</p>
                            <p><strong>Post Date:</strong> {{ $post->post_date }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
