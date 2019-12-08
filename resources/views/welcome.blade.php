{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SIWES Supervision</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('bootstrap_assets/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap_assets/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('bootstrap_assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap_assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap_assets/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('bootstrap_assets/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('bootstrap_assets/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('bootstrap_assets/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap_assets/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('bootstrap_assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap_assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap_assets/css/style.css')}}">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" data-aos="fade-down" data-aos-delay="500">
      <div class="container">
        <a class="navbar-brand" href="#">SIWESupervision</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
            {{-- <li class="nav-item"><a href="services.html" class="nav-link">What we do</a></li> --}}
            {{-- <li class="nav-item"><a href="project.html" class="nav-link">Projects</a></li> --}}
            {{-- <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li> --}}
            {{-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> --}}
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('{{asset('bootstrap_assets/images/bg_1.jpg')}}');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <p>We're <strong><a href="#">SIWES</a></strong>, Interfacing Students with Industry</p>
              <h1 class="mb-3">Encouraging online SIWES Supervision</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('{{asset('bootstrap_assets/images/bg_2.jpg')}}');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
                <p>We're <strong><a href="#">SIWES</a></strong>, Interfacing Students with Industry</p>
                <h1 class="mb-3">Encouraging online SIWES Supervision</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    <section class="ftco-counter" id="section-counter">
      <div class="container bg-light">
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="1000">0</strong>
                <span>Years on the market</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="12000">0</strong>
                <span>Operational Brigades</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="10000">0</strong>
                <span>Units of Engineering</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="12921">5143</strong>
                <span>Employees of the company</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Main Features &amp; Benefits</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-3 py-4 d-block text-center">
              <div class="icon mb-3"><span class="flaticon-maintenance"></span></div>
              <div class="media-body">
                <h3 class="heading">Online SIWES Supervision</h3>
                <p>Providing ease of monitoring and supervising IT students across the Nation.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-3 py-4 d-block text-center">
              <div class="icon mb-3"><span class="flaticon-construction"></span></div>
              <div class="media-body">
                <h3 class="heading">Supervisor Allocation</h3>
                <p>Allocating Supervisors seamlessly.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-3 py-4 d-block text-center">
              <div class="icon mb-3"><span class="flaticon-conveyor"></span></div>
              <div class="media-body">
                <h3 class="heading">Interfacing with Industries</h3>
                <p>SIWES makes it easier for students to interface with industries.</p>
              </div>
            </div>    
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-3 py-4 d-block text-center">
              <div class="icon mb-3"><span class="flaticon-engineer"></span></div>
              <div class="media-body">
                <h3 class="heading">General Industrial Exposure</h3>
                <p>Through this exercise, students get exposed to the current developments in the Industries.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    {{-- <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5 ftco-animate">
          <div class="col-md-7 text-center heading-section">
            <h2>We love to share our accomplishments</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 ftco-animate">
            <a href="{{asset('bootstrap_assets/images/image_1.jpg')}}" class="project project-img d-flex justify-content-center image-popup" style="background-image: url(images/image_1.jpg);">
              <div class="align-self-center icon">
                <span class="ion-ios-search"></span>
              </div>
            </a>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-sm-12 ftco-animate">
                <a href="{{asset('bootstrap_assets/images/image_2.jpg')}}" class="project project-img project-img-2 d-flex justify-content-center image-popup" style="background-image: url(images/image_2.jpg);">
                  <div class="align-self-center icon">
                    <span class="ion-ios-search"></span>
                  </div>
                </a>
              </div>
              <div class="col-sm-12 ftco-animate">
                <a href="{{asset('bootstrap_assets/images/image_3.jpg')}}" class="project project-img project-img-2 d-flex justify-content-center image-popup" style="background-image: url(images/image_3.jpg);">
                  <div class="align-self-center icon">
                    <span class="ion-ios-search"></span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    

    {{-- <section class="ftco-section cover_1" style="background-image: url({{asset('bootstrap_assets/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row text-center justify-content-center">
          <div class="col-md-8 ftco-animate">
            <h2 class="heading">Experience Our Advance Equipments</h2>
            <p class="sub-heading mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            <p><a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalRequest">Request a Quote</a></p>
          </div>
        </div>
      </div>
    </section> --}}

    {{-- <section class="ftco-section testimony-section">
      <div class="container-fluid">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Love using vertex</h2>
          </div>
        </div>
        <div class="row no-gutters ftco-animate">
          <div class="carousel owl-carousel ftco-owl">
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url({{asset('bootstrap_assets/images/person_1.jpg')}})" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Dennis Green</p>
                  <span class="position">Civil Engineer</span>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url({{asset('bootstrap_assets/images/person_2.jpg')}})" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Dennis Green</p>
                  <span class="position">Civil Engineer</span>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url({{asset('bootstrap_assets/images/person_3.jpg')}})" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Dennis Green</p>
                  <span class="position">Civil Engineer</span>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url({{asset('bootstrap_assets/images/person_1.jpg')}})" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Dennis Green</p>
                  <span class="position">Civil Engineer</span>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url({{asset('bootstrap_assets/images/person_1.jpg')}})" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Dennis Green</p>
                  <span class="position">Civil Engineer</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

  {{-- <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <h2>Pricing</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-3 text-center ftco-animate">
          <div class="pricing p-4 py-5">
            <div class="icon mb-2"><span class="flaticon-skyline"></span></div>
            <h3 class="mb-3">Basic Plan</h3>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p class="price mb-4 py-3"><span class="mr-2 currency">$29</span> <span class="per">per month</span></p>
            <p><a href="#" class="btn btn-primary">Get started</a></p>
            <a href="#">Open Source</a>
          </div>
        </div>
        <div class="col-md-4 mb-3 text-center ftco-animate">
          <div class="pricing p-4 py-5">
            <div class="icon mb-2"><span class="flaticon-skyline"></span></div>
            <h3 class="mb-3">Standard Plan</h3>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p class="price mb-4 py-3"><span class="mr-2 currency">$29</span> <span class="per">per month</span></p>
            <p><a href="#" class="btn btn-primary">Get started</a></p>
            <a href="#">Free 30 Day Trial</a>
          </div>
        </div>
        <div class="col-md-4 mb-3 text-center ftco-animate">
          <div class="pricing p-4 py-5">
            <div class="icon mb-2"><span class="flaticon-skyline"></span></div>
            <h3 class="mb-3">Premium Plan</h3>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p class="price mb-4 py-3"><span class="mr-2 currency">$29</span> <span class="per">per month</span></p>
            <p><a href="#" class="btn btn-primary">Get started</a></p>
            <a href="#" data-toggle="modal" data-target="#modalRequest">Request a Quote</a>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  {{-- <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <h2>Our Blog</h2>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="carousel1 owl-carousel ftco-owl">
          <div class="item">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('bootstrap_assets/images/image_5.jpg')}}');">
              </a>
              <div class="text p-4">
                <div class="meta">
                  <div><a href="#">June 29, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <p class="clearfix">
                  <a href="#" class="float-left">Read more</a>
                  <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="blog-entry" data-aos-delay="100">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('bootstrap_assets/images/image_6.jpg')}}');">
              </a>
              <div class="text p-4">
                <div class="meta">
                  <div><a href="#">June 29, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <p class="clearfix">
                  <a href="#" class="float-left">Read more</a>
                  <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="blog-entry" data-aos-delay="200">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('bootstrap_assets/images/image_7.jpg')}}');">
              </a>
              <div class="text p-4">
                <div class="meta">
                  <div><a href="#">June 29, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <p class="clearfix">
                  <a href="#" class="float-left">Read more</a>
                  <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="blog-entry" data-aos-delay="200">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('bootstrap_assets/images/image_8.jpg')}}');">
              </a>
              <div class="text p-4">
                <div class="meta">
                  <div><a href="#">June 29, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <p class="clearfix">
                  <a href="#" class="float-left">Read more</a>
                  <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="blog-entry" data-aos-delay="200">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('bootstrap_assets/images/image_9.jpg')}}');">
              </a>
              <div class="text p-4">
                <div class="meta">
                  <div><a href="#">June 29, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <p class="clearfix">
                  <a href="#" class="float-left">Read more</a>
                  <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  
  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">SIWESupervision</h2>
            <p>Providing online supervision platform for both students and Supervisors.</p>
          </div>
        </div>
        <div class="col-md">
           <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Quick Links</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">About</a></li>
              <li><a href="#" class="py-2 d-block">Project</a></li>
              <li><a href="#" class="py-2 d-block">Services</a></li>
              <li><a href="#" class="py-2 d-block">Blog</a></li>
              <li><a href="#" class="py-2 d-block">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
           <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Contact Information</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">198 West 21th Street, Suite 721 New York NY 10016</a></li>
              <li><a href="#" class="py-2 d-block">+ 1235 2355 98</a></li>
              <li><a href="#" class="py-2 d-block">info@yoursite.com</a></li>
              <li><a href="#" class="py-2 d-block">email@email.com</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <ul class="ftco-footer-social list-unstyled float-md-right float-lft">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              {{-- <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li> --}}
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> siwessupervision. All rights reserved 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Modal -->
    <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalAppointmentLabel">Request a Quote</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="#">
              <div class="form-group">
                <label for="appointment_name" class="text-black">Full Name</label>
                <input type="text" class="form-control" id="appointment_name">
              </div>
              <div class="form-group">
                <label for="appointment_email" class="text-black">Email</label>
                <input type="text" class="form-control" id="appointment_email">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_date" class="text-black">Date</label>
                    <input type="text" class="form-control" id="appointment_date">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_time" class="text-black">Time</label>
                    <input type="text" class="form-control" id="appointment_time">
                  </div>
                </div>
              </div>
              

              <div class="form-group">
                <label for="appointment_message" class="text-black">Message</label>
                <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary">
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('bootstrap_assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('bootstrap_assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('bootstrap_assets/js/popper.min.js')}}"></script>
  <script src="{{asset('bootstrap_assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('bootstrap_assets/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('bootstrap_assets/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('bootstrap_assets/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('bootstrap_assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('bootstrap_assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('bootstrap_assets/js/aos.js')}}"></script>
  <script src="{{asset('bootstrap_assets/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('bootstrap_assets/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('bootstrap_assets/js/jquery.timepicker.min.js')}}"></script>
  {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> --}}
  <script src="{{asset('bootstrap_assets/js/google-map.js')}}"></script>
  <script src="{{asset('bootstrap_assets/js/main.js')}}"></script>
    
  </body>
</html>
