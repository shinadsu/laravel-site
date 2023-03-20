@extends('layouts.base')
@section('content')

<section class="section-one">
</section>
<div>{{ $post->id }}. {{$post->title}}</div>
<div>
    <a href="{{route('post.index')}}">back</a>
    <a href="{{route('post.edit', $post->id)}}">edit</a>
</div>
@endsection