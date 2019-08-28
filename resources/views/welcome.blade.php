<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Laravel</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    


  <meta content="width=device-width, initial-scale=1.0" name="viewport">



<meta name="description" content="hire a web developer from cameroon ">

<meta name="keywords" content="web developers ">

<meta name="author" content=" F oliver CEO of link">

<!-- Favicons -->

<link href="img/logo.jpeg" rel="icon">

<link href="img/apple-touch-icon.png" rel="apple-touch-icon">



<!-- Bootstrap CSS File -->

<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">



<!-- Libraries CSS Files -->

<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<link href="lib/animate/animate.min.css" rel="stylesheet">

<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">



<!-- Main Stylesheet File -->

<link href="css/style.css" rel="stylesheet">



<!-- =======================================================



======================================================= -->
    
  </head>
  <body id="page-top">

    
    



  <!--/ Nav Star /-->

  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">

    <div class="container">

      <a class="navbar-brand js-scroll" href="#page-top">LINK</a>

      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">

        <span></span>

        <span></span>

        <span></span>

      </button>

      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">

        <ul class="navbar-nav">

          <li class="nav-item">

            <a class="nav-link js-scroll active" href="#home">Home</a>

          </li>

          <li class="nav-item">

            <a class="nav-link js-scroll" href="#about">About</a>

          </li>

          <li class="nav-item">

            <a class="nav-link js-scroll" href="#service">Services</a>

          </li>

          <li class="nav-item">

            <a class="nav-link js-scroll" href="#work">Work</a>

          </li>

          <li class="nav-item">

            <a class="nav-link js-scroll" href="#blog">Blog</a>

          </li>

          <li class="nav-item">

            <a class="nav-link js-scroll" href="#contact">Contact</a>

          </li>

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

            </div>

        </ul>

      </div>

    </div>

  </nav>

  <!--/ Nav End /-->



  <!--/ Intro Skew Star /-->

  <div id="home" class=" intro route bg-image" style="background-image: url(img/intro-bg.jpg)">

    <div class="overlay-itro"></div>
g
    <div class="intro-content display-table">

      <div class="table-cell">

        <div class="container">

          <!--<p class="display-6 color-d">Hello, world!</p>-->

          <h1 class="intro-title mb-4"> <i>AM A WEB DEVELOPER (laravel)</i> </h1>

          <p class="intro-subtitle"><span class="text-slider-items">CEO of link,Web Developer,Web Designer,Frontend Developer,backend Developer</span><strong class="text-slider"></strong></p>

          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->

        </div>

      </div>

    </div>

  </div>

  <!--/ Intro Skew End /-->



  <section id="about" class="about-mf sect-pt4 route">

    <div class="container">

      <div class="row">

        <div class="col-sm-12">

          <div class="box-shadow-full">

            <div class="row">

              <div class="col-md-6">

                <div class="row">

                  <div class="col-sm-6 col-md-5">

                    <div class="about-img">

                      <img src="img/testimonial-2.jpeg" class="img-fluid rounded b-shadow-a" alt="">

                    </div>

                  </div>

                  <div class="col-sm-6 col-md-7">

                    <div class="about-info">

                      <p><span class="title-s">Name: </span> <span> .......</span></p>

                      <p><span class="title-s">Profile: </span> <span>full web developer</span></p>

                      <p><span class="title-s">Email: </span> <span>dopplereffect1992@gmail.com</span></p>

                      <p><span class="title-s">Phone: </span> <span> (+237) 665-541-345</span></p>

                    </div>

                  </div>

                </div>

                <div class="skill-mf">

                  <p class="title-s">Skills</p>

                  <span>HTML</span> <span class="pull-right">85%</span>

                  <div class="progress">

                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>

                  </div>

                  <span>CSS3</span> <span class="pull-right">75%</span>

                  <div class="progress">

                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>

                  </div>

                  <span>PHP</span> <span class="pull-right">60%</span>

                  <div class="progress">

                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>

                  </div>

                  <span>JAVASCRIPT</span> <span class="pull-right">60%</span>

                  <div class="progress">

                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>

                  </div>



                  <span>mysql</span> <span class="pull-right">90%</span>

                  <div class="progress">

                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>

                  </div>

                  <span>java</span> <span class="pull-right">50%</span>

                  <div class="progress">

                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>

                  </div>

                  <span> C </span> <span class="pull-right">75%</span>

                  <div class="progress">

                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>

                  </div>

                  <span> bootstrap</span> <span class="pull-right">80%</span>

                  <div class="progress">

                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>

                  </div>

                  <span> python</span> <span class="pull-right">30%</span>

                  <div class="progress">

                    <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>

                  </div>

                  <span> laravel</span> <span class="pull-right">80%</span>

                  <div class="progress">

                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>

                  </div>

                </div>

              </div>

              <div class="col-md-6">

                <div class="about-me pt-4 pt-md-0">

                  <div class="title-box-2">

                    <h5 class="title-left">

                      About me

                    </h5>

                  </div>

                  <p class="lead">

                    <u> <strong class="logo">Nationality/> </strong> </u> <br>

                    I am a cameroonian by birth, live southwest of my country in the vesinity of Buea (city),

                    15 minutes from the university

                    of buea(<a href="www.ubuea.cm">ubuea.cm </a>)

                  </p>

                  <p class="lead">

                    <u><strong class="logo">Language/></strong> </u> <br>

                    I can express myself in English (native), French, pigin(for natives).

                    i can interprete documennts written in french and English

                    but not pidgen.

                  </p>



                  <p class="lead">

                    <u> <strong class="logo"> Movement/> </strong> </u> <br>

                    Flexible ,but in the event of out station would need accomodation eqaully ejoy working with others.





                  </p>



                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>



  <!--/ Section Services Star /-->

  <section id="service" class="services-mf route">

    <div class="container">

      <div class="row">

        <div class="col-sm-12">

          <div class="title-box text-center">

            <h3 class="title-a">

              SERVICES

            </h3>

            <p class="subtitle-a">

              WELCOME TO OUR SERVICES OVERVIEW.

            </p>

            <div class="line-mf"></div>

          </div>

        </div>

      </div>

      <div class="row">

        <div class="col-md-4">

          <div class="service-box">

            <div class="service-ico">

              <span class="ico-circle"><i class="ion-monitor"></i></span>

            </div>

            <div class="service-content">

              <h2 class="s-title">WEB DESIGN</h2>

              <p class="s-description text-center">

                We Design resposive web page , according to the need and at afordable prizes.

              </p>

            </div>

          </div>

        </div>

        <div class="col-md-4">

          <div class="service-box">

            <div class="service-ico">

              <span class="ico-circle"><i class="ion-code-working"></i></span>

            </div>

            <div class="service-content">

              <h2 class="s-title">WEB DEVELOPMENT</h2>

              <p class="s-description text-center">

                Our goal is to design user freiendly websites, make them as easy as possible to navigate and appreaciated

                by both litrates and none.

                 Willing  at any time to recruit new talents as need be.

              </p>

            </div>

          </div>

        </div>

        <div class="col-md-4">

          <div class="service-box">

            <div class="service-ico">

              <span class="ico-circle"><i class="ion-camera"></i></span>

            </div>

            <div class="service-content">

              <h2 class="s-title">PHOTOGRAPHY</h2>

              <p class="s-description text-center">

                We don't do Photography for the while ,but could employ the service as need be.

              </p>

            </div>

          </div>

        </div>

        <div class="col-md-4">

          <div class="service-box">

            <div class="service-ico">

              <span class="ico-circle"><i class="ion-android-phone-portrait"></i></span>

            </div>

            <div class="service-content">

              <h2 class="s-title">RESPONSIVE DESIGNS</h2>

              <p class="s-description text-center">

                We embaged on creating responsive websites that will suit your needs,we

                intend to make websites that will fit on any divice width and  at affordable prizes.

              </p>

            </div>

          </div>

        </div>

        <div class="col-md-4">

          <div class="service-box">

            <div class="service-ico">

              <span class="ico-circle"><i class="ion-paintbrush"></i></span>

            </div>

            <div class="service-content">

              <h2 class="s-title">GRAPHIC DESIGNS</h2>

              <p class="s-description text-center">

                we don't do photo editing for the while ,but could employ the service as need be

              </p>

            </div>

          </div>

        </div>

        <div class="col-md-4">

          <div class="service-box">

            <div class="service-ico">

              <span class="ico-circle"><i class="ion-stats-bars"></i></span>

            </div>

            <div class="service-content">

              <h2 class="s-title">MARKETTING SERVICES</h2>

              <p class="s-description text-center">

                we assit in promoting and advertising local businesses ,

                we equally aim at promoting custumer EXPERIENCE with the use of the internet.

              </p>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

  <!--/ Section Services End /-->



  <div class="section-counter paralax-mf bg-image" style="background-image: url(img/counters-bg.jpg)">

    <div class="overlay-mf"></div>

    <div class="container">

      <div class="row">

        <div class="col-sm-3 col-lg-3">

          <div class="counter-box">

            <div class="counter-ico">

              <span class="ico-circle"><i class="ion-checkmark-round"></i></span>

            </div>

            <div class="counter-num">

              <p class="counter">19</p>

              <span class="counter-text">WORKS COMPLETED</span>

            </div>

          </div>

        </div>

        <div class="col-sm-3 col-lg-3">

          <div class="counter-box pt-4 pt-md-0">

            <div class="counter-ico">

              <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>

            </div>

            <div class="counter-num">

              <p class="counter">3</p>

              <span class="counter-text">YEARS OF EXPERIENCE</span>

            </div>

          </div>

        </div>

        <div class="col-sm-3 col-lg-3">

          <div class="counter-box pt-4 pt-md-0">

            <div class="counter-ico">

              <span class="ico-circle"><i class="ion-ios-people"></i></span>

            </div>

            <div class="counter-num">

              <p class="counter">13</p>

              <span class="counter-text">TOTAL CLIENTS</span>

            </div>

          </div>

        </div>

        <div class="col-sm-3 col-lg-3">

          <div class="counter-box pt-4 pt-md-0">

            <div class="counter-ico">

              <span class="ico-circle"><i class="ion-ribbon-a"></i></span>

            </div>

            <div class="counter-num">

              <p class="counter">0.2</p>

              <span class="counter-text">AWARD WON</span>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>



  <!--/ Section Portfolio Star /-->

  <section id="work" class="portfolio-mf sect-pt4 route">

    <div class="container">

      <div class="row">

        <div class="col-sm-12">

          <div class="title-box text-center">

            <h3 class="title-a">

              Portfolio

            </h3>

            <p class="subtitle-a">

              Beautiful backgrounds that i have used on my projects.

              download by clicking on any of them.

            </p>

            <div class="line-mf"></div>

          </div>

        </div>

      </div>

      <div class="row">

        <div class="col-md-4">

          <div class="work-box">

            <a href="img/work-1.jpg" data-lightbox="gallery-mf">

              <div class="work-img">

                <img src="img/work-1.jpg" alt="" class="img-fluid">

              </div>

              <div class="work-content">

                <div class="row">

                  <div class="col-sm-8">

                    <h2 class="w-title"> good for login webpages</h2>

                    <div class="w-more">

                      <span class="w-ctegory">Web Design</span> / <span class="w-date">02 Jan. 2019</span>

                    </div>

                  </div>

                  <div class="col-sm-4">

                    <div class="w-like">

                      <span class="ion-ios-plus-outline"></span>

                    </div>

                  </div>

                </div>

              </div>

            </a>

          </div>

        </div>

        <div class="col-md-4">

          <div class="work-box">

            <a href="img/work-2.jpg" data-lightbox="gallery-mf">

              <div class="work-img">

                <img src="img/work-2.jpg" alt="" class="img-fluid">

              </div>

              <div class="work-content">

                <div class="row">

                  <div class="col-sm-8">

                    <h2 class="w-title">good for login</h2>

                    <div class="w-more">

                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>

                    </div>

                  </div>

                  <div class="col-sm-4">

                    <div class="w-like">

                      <span class="ion-ios-plus-outline"></span>

                    </div>

                  </div>

                </div>

              </div>

            </a>

          </div>

        </div>

        <div class="col-md-4">

          <div class="work-box">

            <a href="img/work-3.jpg" data-lightbox="gallery-mf">

              <div class="work-img">

                <img src="img/work-3.jpg" alt="" class="img-fluid">

              </div>

              <div class="work-content">

                <div class="row">

                  <div class="col-sm-8">

                    <h2 class="w-title"> index page</h2>

                    <div class="w-more">

                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 aug. 2017</span>

                    </div>

                  </div>

                  <div class="col-sm-4">

                    <div class="w-like">

                      <span class="ion-ios-plus-outline"></span>

                    </div>

                  </div>

                </div>

              </div>

            </a>

          </div>

        </div>

        <div class="col-md-4">

          <div class="work-box">

            <a href="img/work-4.jpg" data-lightbox="gallery-mf">

              <div class="work-img">

                <img src="img/work-4.jpg" alt="" class="img-fluid">

              </div>

              <div class="work-content">

                <div class="row">

                  <div class="col-sm-8">

                    <h2 class="w-title">good for login</h2>

                    <div class="w-more">

                      <span class="w-ctegory">Web Design</span> / <span class="w-date">1 feb. 2019</span>

                    </div>

                  </div>

                  <div class="col-sm-4">

                    <div class="w-like">

                      <span class="ion-ios-plus-outline"></span>

                    </div>

                  </div>

                </div>

              </div>

            </a>

          </div>

        </div>

        <div class="col-md-4">

          <div class="work-box">

            <a href="img/work-5.jpg" data-lightbox="gallery-mf">

              <div class="work-img">

                <img src="img/work-5.jpg" alt="" class="img-fluid">

              </div>

              <div class="work-content">

                <div class="row">

                  <div class="col-sm-8">

                    <h2 class="w-title"> index page </h2>

                    <div class="w-more">

                      <span class="w-ctegory">Web Design</span> / <span class="w-date">3 feb. 2019</span>

                    </div>

                  </div>

                  <div class="col-sm-4">

                    <div class="w-like">

                      <span class="ion-ios-plus-outline"></span>

                    </div>

                  </div>

                </div>

              </div>

            </a>

          </div>

        </div>

        <div class="col-md-4">

          <div class="work-box">

            <a href="img/work-6.jpg" data-lightbox="gallery-mf">

              <div class="work-img">

                <img src="img/work-6.jpg" alt="" class="img-fluid">

              </div>

              <div class="work-content">

                <div class="row">

                  <div class="col-sm-8">

                    <h2 class="w-title">good for login</h2>

                    <div class="w-more">

                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2017</span>

                    </div>

                  </div>

                  <div class="col-sm-4">

                    <div class="w-like">

                      <span class="ion-ios-plus-outline"></span>

                    </div>

                  </div>

                </div>

              </div>

            </a>

          </div>

        </div>



      </div>

    </div>

  </section>

  <!--/ Section Portfolio End /-->



  <!--/ Section Testimonials Star /-->

  <div class="testimonials paralax-mf bg-image" style="background-image: url(img/overlay-bg.jpg)">

    <div class="overlay-mf"></div>

    <div class="container">

      <div class="row">

        <div class="col-md-12">

          <div id="testimonial-mf" class="owl-carousel owl-theme">

            <div class="testimonial-box">

              <div class="author-test">

                <img src="img/testimonial-2.jpeg" alt="" height="150" width="150" class="rounded-circle b-shadow-a">

                <span class="author">F. Oliver</span>

              </div>

              <div class="content-test">

                <p class="description lead">

                  loves the world of Development, and group work.

                </p>

                <span class="comit"><i class="fa fa-quote-right"></i></span>

              </div>

            </div>

            <div class="testimonial-box">

              <div class="author-test">

                <img src="img/testimonial-4.jpg" alt="" height="150" width="150" class="rounded-circle b-shadow-a">

                <span class="author">...Glen</span>

              </div>

              <div class="content-test">

                <p class="description lead">

                  Associate of link, author of (glove), specialty (IT, and hardware).

                </p>

                <span class="comit"><i class="fa fa-quote-right"></i></span>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>



  <!--/ Section Blog Star /-->

  <section id="blog" class="blog-mf sect-pt4 route">

    <div class="container">

      <div class="row">

        <div class="col-sm-12">

          <div class="title-box text-center">

            <h3 class="title-a">

              Blog

            </h3>

            <p class="subtitle-a">

              Wlcome to my blog page...

            </p>

            <div class="line-mf"></div>

          </div>

        </div>

      </div>

      <div class="row">

        <div class="col-md-4">

          <div class="card card-blog">

            <div class="card-img">

              <a href="blog-single.html"><img src="img/post-1.jpg" alt="" class="img-fluid"></a>

            </div>

            <div class="card-body">

              <div class="card-category-box">

                <div class="card-category">

                  <h6 class="category">Travel</h6>

                </div>

              </div>

              <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>

              <p class="card-description">

                The more you Travel the more you know about your environment,creativity when you act on new information.

                spend to know

              </p>

            </div>

            <div class="card-footer">

              <div class="post-author">

                <a href="#">

                  <img src="img/testimonial-2.jpg" alt="" class="avatar rounded-circle">

                  <span class="author">F.oliver</span>

                </a>

              </div>

              <div class="post-date">

                <span class="ion-ios-clock-outline"></span> 10 min

              </div>

            </div>

          </div>

        </div>

        <div class="col-md-4">

          <div class="card card-blog">

            <div class="card-img">

              <a href="blog-single.html"><img src="img/post-2.jpg" alt="" class="img-fluid"></a>

            </div>

            <div class="card-body">

              <div class="card-category-box">

                <div class="card-category">

                  <h6 class="category">Web Design</h6>

                </div>

              </div>

              <h3 class="card-title"><a href="blog-single.html">See more ideas about webdev</a></h3>

              <p class="card-description">

                what do you think about the future on web Development?. when you see countries like Japan investingin robotics , companies like google investing

                millions of USD in AI.maybe in the nearest future the internet could be a giant AI.and all you need is say it and its done.

              </p>

            </div>

            <div class="card-footer">

              <div class="post-author">

                <a href="#">

                  <img src="img/testimonial-2.jpg" alt="" class="avatar rounded-circle">

                  <span class="author">F.liver</span>

                </a>

              </div>

              <div class="post-date">

                <span class="ion-ios-clock-outline"></span> 10 min

              </div>

            </div>

          </div>

        </div>

        <div class="col-md-4">

          <div class="card card-blog">

            <div class="card-img">

              <a href="blog-single.html"><img src="img/post-3.jpg" alt="" class="img-fluid"></a>

            </div>

            <div class="card-body">

              <div class="card-category-box">

                <div class="card-category">

                  <h6 class="category">Youtube channels</h6>

                </div>

              </div>

              <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>

              <p class="card-description">

                The best youtube channel for you if you use andriod ,ios and the web is computerphile ,there you get to know issues concerning

                security of divices ,end to end encription,sql injection,ssh protocol, just to name a few , all these and more explained in plain

                terms by lecturers of university of Nothinghem Uk. other useful channels are laravel, bootstrap studio.......

              </p>



            </div>

            <div class="card-footer">

              <div class="post-author">

                <a href="#">

                  <img src="img/testimonial-2.jpg" alt="" class="avatar rounded-circle">

                  <span class="author">F.oliver</span>

                </a>

              </div>

              <div class="post-date">

                <span class="ion-ios-clock-outline"></span> 10 min

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

  <!--/ Section Blog End /-->



  <!--/ Section Contact-Footer Star /-->

  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">

    <div class="overlay-mf"></div>

    <div class="container">

      <div class="row">

          <div class="contact-mf">

            <div id="contact" class="box-shadow-full">

              <div class="row">

                <div class="col-md-6">

                  <div class="title-box-2">

                    <h5 class="title-left">

                      Send Us Message

                    </h5>

                  </div>

                  <div>

                    <form action="/admin" method="post" role="form" class="contactForm">
                    @csrf

                      <div id="sendmessage">Your message has been sent. Thank you!</div>

                      <div id="errormessage"></div>

                      <div class="row">

                        <div class="col-md-12 mb-3">

                          <div class="form-group">

                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                             data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="{{ old('name') }}"
                             required autocomplete="name" autofocus"/>

                            <div class="validation"></div>
                            
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                          </div>

                        </div>

                        <div class="col-sm-12">

                        <div class="col-md-12 mb-3">

                          <div class="form-group">

                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" 
                            data-rule="email" data-msg="Please enter a valid email" value="{{ old('email') }}"
                            required autocomplete="email" autofocus/>

                            <div class="validation"></div>
                            
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                          </div>

                        </div>

                        <div class="col-md-12 mb-3">

                          <div class="form-group">

                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" 
                            data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" 
                            value="{{ old('subject') }}"  required autocomplete="subject" autofocus/>

                            <div class="validation"></div>

                            @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                          </div>

                        </div>

                        <div class="col-md-12 mb-3">

                          <div class="form-group">

                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please
                            write something for us" placeholder="Message"  ></textarea>

                            <div class="validation"></div>
                            
                            @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                          </div>

                        </div>

                        <div class="col-md-12">

                          <button type="submit" class="button button-a button-big button-rouded">Send Message</button>

                        </div>

                      </div>

                    </form>

                  </div>

                </div>

                <div class="col-md-6">

                  <div class="title-box-2 pt-4 pt-md-0">

                    <h5 class="title-left">

                      Get in Touch

                    </h5>

                  </div>

                  <div class="more-info">

                    <p class="lead">

                      below is our contact portal and information,use this only if you need our services.

                    </p>

                    <ul class="list-ico">

                      <li><span class="ion-ios-location"></span> Cameroon ,S.W, Buea</li>

                      <li><span class="ion-ios-telephone"></span> (+237) 665-541-345</li>

                      <li><span class="ion-email"></span> dopplereffect1992@gmail.com</li>

                    </ul>

                  </div>

                  <div class="socials">

                    <ul>

                      <li><a href="https://web.facebook.com/fozoh.nchinda"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>

                      <li><a href="https://www.instagram.com/fozohnchinda/"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>

                      <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>

                      <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>

                    </ul>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

    <footer>

      <div class="container">

        <div class="row">

          <div class="col-sm-12">

            <div class="copyright-box">

              <p class="copyright">&copy; Copyright <strong>link</strong>. All Rights Reserved </p>

              <div class="credits">

               

                Designed by F.oliver

              </div>

            </div>

          </div>

        </div>

      </div>

    </footer>

  </section>

  <!--/ Section Contact-footer End /-->



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <div id="preloader"></div>



  <!-- JavaScript Libraries -->

  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/jquery/jquery-migrate.min.js"></script>

  <script src="lib/popper/popper.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>

  <script src="lib/easing/easing.min.js"></script>

  <script src="lib/counterup/jquery.waypoints.min.js"></script>

  <script src="lib/counterup/jquery.counterup.js"></script>

  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <script src="lib/lightbox/js/lightbox.min.js"></script>

  <script src="lib/typed/typed.min.js"></script>

  <!-- Contact Form JavaScript File -->

  <script src="contactform/contactform.js"></script>



  <!-- Template Main Javascript File -->

  <script src="js/main.js"></script>



</body>



</html>


     


 
</body>



</html>


    </body>
</html>
