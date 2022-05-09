@extends('website.layout')
@section('content')
    <!-- Service Area -->
    <div class="inner-service-banner">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-7 col-xl-8 col-lg-10 col-md-10">
            <div class="section-heading-14 text-center">
              <h2>Services We Provide</h2>
              <p>We offer an effective combination of broad customer service expertise and deep product knowledge to ensure customer experience</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Case-study Studies Area -->
    <div class="case-study-area-l3 inner-service-01">
      <div class="container">
        <div class="row case-study-items-l3 justify-content-center">
          <div class="col-lg-5 col-md-6">
            <div class="image-content-box " data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
              <div class="case-study-area-image image-hover-style-01 overflow-hidden">
                <img class="w-100" src="{{ asset('public/image/landing-3/service-1.png')}}" alt="image">
              </div>
              <div class="content">
                <h4>IT consulting</h4>
                <p> Our “customer first” philosophy ensures that we provide our clients with “the best IT services and solutions”.</p>
              </div>
            </div>
            <div class="image-content-box" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
              <div class="case-study-area-image image-hover-style-01 overflow-hidden">
                <img class="w-100" src="{{ asset('public/image/landing-3/service-3.png')}}" alt="image">
              </div>
              <div class="content">
                <h4>Business analysis</h4>
                <p>We continually invest in the development of our team members and provide a supportive environment in which they can work closely with clients.</p>
              </div>
            </div>
          </div>
          <div class="offset-lg-1 col-lg-6 col-md-6">
            <div class="image-content-box" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
              <div class="case-study-area-image image-hover-style-01 overflow-hidden">
                <img class="w-100" src="{{ asset('public/image/landing-3/service-2.png')}}" alt="image">
              </div>
              <div class="content">
                <h4>HR solutions</h4>
                <p>We are adamant to bring success with our HR Recruitment, Payroll and other services in order to give a complete solution to your business.</p>
              </div>
            </div>
            <div class="image-content-box" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
              <div class="case-study-area-image image-hover-style-01 overflow-hidden">
                <img class="w-100" src="{{ asset('public/image/landing-3/service-4.png')}}" alt="image">
              </div>
              <div class="content">
                <h4>Company development</h4>
                <p>Our Secretarial Service, which is backed by our legal service wing, helps acquire all types of Licenses & Permits for your business to run seamlessly.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Newsletter Area -->
    <div class="newsletter-area-l5 inner-service-newsletter-01">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-9" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
            <div class="newsletter-content-l5 text-center">
              <h2>Subscribe to our newsletter to get updated</h2>
              <p>Get our latest update on your inbox. With lots of unique blocks, you can easily build a page without coding. Build your next consultancy website within few minutes.</p>
              <div class="newsletter-form-l5">
                <form action="#">
                  <div class="d-sm-flex">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter email address">
                    <button class="btn">Subscribe</button>
                  </div>
                </form>
              </div>
              <div class="news-ltr-l5-bottom d-flex justify-content-center">
                <div class="icon">
                  <img src="{{ asset('public/image/landing-5/lock.svg')}}" alt="icon">
                </div>
                <div class="content">
                  <span>We don’t spam at all, our promise!</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>   @endsection