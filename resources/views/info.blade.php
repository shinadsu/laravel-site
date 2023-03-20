@extends('layouts.base')
@section('content')

    <head>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css"
            integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head><!-- Bootstrap Icons **Remembrer to use it properly in head tag -->
    <!-- Card -->
    <section class="section-one">
        <article id="AboutArticle" class="Article">
            <!-- About generl info -->
            <div id="About">
                <div id="AboutInfo">
                    <div id="AboutInfoText">
                        <span>
                            <h1>Daniil&nbsp;</h1>
                            <h1>Manyan</h1>
                        </span>
                        <span>
                            <h3 style="color: var(--Secondary);">Developer</h3>
                        </span>
                        <br>
                        <span>
                            <h3>Age:&nbsp;</h3>
                            <p>20</p>
                        </span>
                        <span>
                            <h3>Mail:&nbsp;</h3><a
                                href="mailto:your_mail@gmail.com?Subject=Job offer">sadboy085211@gmail.com</a>
                        </span>
                        <span>
                            <h3>Phone:&nbsp;</h3>
                            <p>+7 (999) 837 61 33</p>
                        </span>
                        <span>
                            <h3>City:&nbsp;</h3>
                            <p>Moscow</p>
                        </span>
                        <span id="InfoIcons">
                            <h3></h3>Social media: </h3><br>
                            <a href="https://github.com/shinadsu" class="LinkIcons"><i class="bi bi-github"></i></a>
                        </span>
                    </div>
                </div>
                <!-- About image -->
                <img src="https://picsum.photos/200/300?grayscale">
                <!-- About description -->
                <div id="AboutMe">
                    <div>
                        <h1>Hello!</h1>
                        <p>
                            Specialized on backend (PHP, Python) and frontend with web development knowledge using HTML,
                            CSS. Used to Git management and teamwork
                            flows. Enthusiastic and fast learner. Feel free to use this asset for building your website. I
                            would
                            love if you can see my github.</p>
                    </div>
                </div>
            </div>
        </article>
    </section>

    <section class="section-two">
        <div class="container-two">
            <div class="container-two-content content">
                <h1>About Me</h1>
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
