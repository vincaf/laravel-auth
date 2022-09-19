@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Author</th>
                            <th scope="col">Title</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <th scope="row">
                                    <a href="{{ route('admin.posts.show', $post->slug) }}">
                                        {{ $post->id }}
                                    </a>
                                </th>
                                <td>{{ $post->author }}</td>
                                <td>
                                    <a href="{{ route('admin.posts.show', $post->slug) }}">
                                        {{ $post->title }}
                                    </a>
                                </td>
                                <td>
                                    <a href="" class="btn btn-sm btn-success">
                                        Edit
                                    </a>
                                    <a href="" class="btn btn-sm btn-danger">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
