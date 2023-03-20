
<!DOCTYPE
<html>
    <head>
        <meta charset="utf-8">
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{route('main.index')}}">Main</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="{{route('info.index')}}">Information</a>
                  <a class="nav-link" href="{{route('contact.index')}}">Contacts</a>
                  <a class="nav-link" href="{{route('post.index')}}">Posts</a>
                </div>
              </div>
            </div>
          </nav>
      @yield('content')
    </body>
    <footer>
      <div class="footer-container">
          <div class="footer-content">
              <svg viewBox="0 0 512 512" width="100" title="university">
                  <path
                      d="M496 128v16a8 8 0 0 1-8 8h-24v12c0 6.627-5.373 12-12 12H60c-6.627 0-12-5.373-12-12v-12H24a8 8 0 0 1-8-8v-16a8 8 0 0 1 4.941-7.392l232-88a7.996 7.996 0 0 1 6.118 0l232 88A8 8 0 0 1 496 128zm-24 304H40c-13.255 0-24 10.745-24 24v16a8 8 0 0 0 8 8h464a8 8 0 0 0 8-8v-16c0-13.255-10.745-24-24-24zM96 192v192H60c-6.627 0-12 5.373-12 12v20h416v-20c0-6.627-5.373-12-12-12h-36V192h-64v192h-64V192h-64v192h-64V192H96z" />
              </svg>
          </div>
          <div class="footer-content">
              <h6>Social</h6>
              <ul>
                  <li><a href="https://web.telegram.org/k/#-1552313902">Telegram</a>
                  <li>
                  <li><a href="">Instagram</a>
                  <li>
                  <li><a href="">Twitter</a>
                  <li>
              </ul>
          </div>

          <div class="footer-content">
              <h6>Service</h6>
              <ul>
                  <li><a href="">Compare</a>
                  <li>
                  <li><a href="">Download</a>
                  <li>
                  <li><a href="{{route('contact.index')}}">Feedback</a>
                  <li>
                  <li><a href="">Bug Report</a>
                  <li>
              </ul>
          </div>

          <div class="footer-content">
              <h6>Activity</h6>
              <ul>
                  <li><a href="">Influencers</a>
                  <li>
                  <li><a href="">Affiliate</a>
                  <li>
                  <li><a href="">Co-Branding</a>
                  <li>
                  <li><a href="">Honor</a>
                  <li>
                  <li><a href="">Give Away</a>
                  <li>
              </ul>
          </div>

      </div>
  </footer>
</html>

