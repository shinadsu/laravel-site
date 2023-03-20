@extends('layouts.base')
@section('content')
<section class="section-one">
    <div class="container">
        <h1>Landing Page</h1>
        <p>Specialized on backend (PHP, Python) and frontend with web development knowledge using HTML,
            CSS. Used to Git management and teamwork.... </p>
        <a href="{{ route('info.index') }}" class="home-button">Read More</a>
    </div>
</section>

<section class="section-two">
    <div class="container-two">
        <div class="container-two-content content">
            <h1>Title</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat.</p>
        </div>
        <div class="container-two-content content-image">
            <img
                src="https://images.unsplash.com/photo-1659269661337-7ee76a7645b5?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NjE4ODcwODY&ixlib=rb-1.2.1&q=80">
        </div>
    </div>
</section>
@endsection
