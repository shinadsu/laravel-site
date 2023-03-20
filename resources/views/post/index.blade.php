@extends('layouts.base')
@section('content')
    <section class="section-one">
        @foreach ($posts as $item)
            <section id="posts-container">
                <article class="post">
                    <img class="post__avatar" src="https://avatars.githubusercontent.com/u/69975772?v=4" alt="" />

                    <div class="post__content">
                        <header class="post__header">
                            <p class="post__user">shinadsu</p>



                            <div class="post__meta">
                                <p class="post__reblogs">{{ $item->likes }}</p>


                                <button class="post__header-btn">
                                    <img src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/reblog-tumblr.svg"
                                        alt="" />
                                </button>
                                <button class="post__header-btn">
                                    <img src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/heart-tumblr.svg"
                                        alt="" />
                                </button>
                            </div>
                        </header>

                        <div class="post__body">
                            <img class="post__img" src="https://raw.githubusercontent.com/Javieer57/create-post-component/design/2010/img/liz-lee.jpg" alt="" />
                            <a href="https://laravel.com/" class="post__text">Laravel</a>
                            <p class="post__user">{{ $item->title }}</p>
                        </div>

                        <div class="post__footer">
                            <span>#test-project</span>
                            
                            <span>#laravel</span>
                            <span>#posts</span>
                        </div>
                    </div>
                </article>
                </div>
                </article>
            </section>
    </section>
    @endforeach


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
    <div>{{ $posts->links() }}</div>
@endsection
