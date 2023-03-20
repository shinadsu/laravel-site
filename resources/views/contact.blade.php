@extends('layouts.base')
@section('content')
<body>
    <section class="section-one">
    <div class="contain">
        <div class="wrapper">
          <div class="form">
            <h4>GET IN TOUCH</h4>
            <h2 class="form-headline">Send us a message</h2>
            <form id="submit-form" action="">
              <p>
                <input id="name" class="form-input" type="text" placeholder="Your Name*">
                <small class="name-error"></small>
              </p>
              <p>
                <input id="email" class="form-input" type="email" placeholder="Your Email*">
                <small class="name-error"></small>
              </p>
              <p class="full-width">
                <input id="company-name" class="form-input" type="text" placeholder="Company Name*" required>
                <small></small>
              </p>
              <p class="full-width">
                <textarea  minlength="20" id="message" cols="30" rows="7" placeholder="Your Message*" required></textarea>
                <small></small>
              </p>
              <p class="full-width">
                <input type="checkbox" id="checkbox" name="checkbox" checked> Yes, I would like to receive communications by call / email about Company's services.
              </p>
              <p class="full-width">
                <input type="submit" class="submit-btn" value="Submit" onclick="checkValidations()">
                <button class="reset-btn" onclick="reset()">Reset</button>
              </p>
            </form>
          </div>
      
          <div class="contacts contact-wrapper">
      
            <ul>
              <li>We've driven online revenues of over <span class="highlight-text-grey">$2
                  billion</span> for our clients. Ready to know
                how we can help you?</li>
              <span class="hightlight-contact-info">
                <li class="email-info"><i class="fa fa-envelope" aria-hidden="true"></i>sadboy085211@gmail.com</li>
                <li><i class="fa fa-phone" aria-hidden="true"></i> <span class="highlight-text">+7 999 837 6133</span></li>
              </span>
            </ul>
          </div>
        </div>
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
</body>
</html>

@endsection