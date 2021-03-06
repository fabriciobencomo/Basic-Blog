@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($posts as $post)
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">{{Str::words(strip_tags($post->description), 140)}}</p>
                        <p class="text-muted mb-0">
                            <em>
                                &ndash; {{$post->user->name}}
                            </em>
                            {{$post->created_at->format('d M Y')}}
                        </p>
                        <a href="{{route('post', $post)}}" class="btn btn-success mt-3">Read More</a>
                    </div>
                </div>
            @endforeach
            {{ $posts->links("pagination::bootstrap-4") }}
        </div>
    </div>
</div>
@endsection
