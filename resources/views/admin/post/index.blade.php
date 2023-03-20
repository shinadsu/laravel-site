@extends('admin.dashboard')
@section('content')
<div>
    <div>
        <a href="{{route('admin.create')}}" class="btn btn-primary mb-3">Add Post</a>
    </div>
    @foreach ($posts as $post)
        <div><a href="{{route('post.show', $post->id)}}">{{$post->id}}. {{$post->title}}</a></div>
    @endforeach
    <div class="mt-3">
        {{$posts->links()}}
    </div>
</div>
@endsection