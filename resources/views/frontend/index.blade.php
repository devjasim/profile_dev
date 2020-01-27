<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keyword" content="{{ $setting->keyword }}">
    <meta name="description" content="{{ $setting->description }}">
    <meta name="subject" content="{{ $setting->subject }}">
    <meta name="copyright" content="{{ $setting->copyright }}">
    <meta name="author" content="{{ $setting->author }}">
    <meta name="owner" content="{{ $setting->owner }}">
    <meta name="reply-to" content="{{ $setting->reply_to }}">
    <meta name="url" content="{{ $setting->url }}">

    <link rel="shortcut icon" type="image/ico" href="assets/images/{{ $setting->favicon }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sass/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <title>{{ $setting->title }}</title>
    <style>
        li.active span i{
            color: #FF4F4F;
            transition: all 0.5s;
        }
        .toast, .toast-header{
            background-color: rgb(20, 36, 60);
            color: blanchedalmond;
            max-width: none;
        }
        .section-contact{
            margin-bottom: 100px;
        }
    </style>
</head>

<body>
    <!--=====================START PRE LOADER======================-->
    <div id="load-over">
        <span class="loader">
            <span class="loader-inner"></span>
        </span>
      </div>
    <!--=====================START PRE LOADER======================-->

    <div class="wrapper">
        <!--=====================START SIDE HEADER======================-->
        <header class="section-side-header">
            <div class="side-nav-full">
                <div class="nav-wrapper">
                    <div class="wrapper-concept">
                        <div class="profile-img clearfix">
                            <img src="assets/images/{{ $gen_info->image }}" alt="">
                        </div>
                        <div class="profile-info">
                            <h2 class="name">{{ strtok($gen_info->name, " ") }}<span class="dot"></span></h2>
                            <span>{{ $gen_info->designation }}</span>
                        </div>
                        <div class="main-menu">
                            <div class="menu-wrapper">
                                <ul class="nav-menu">
                                    <li>
                                        <a href="#home" class="nav-link">
                                            <span><i class="fas fa-house-damage"></i>Home</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#about" class="nav-link">
                                            <span><i class="fas fa-user-circle"></i>About</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#skills" class="nav-link">
                                            <span><i class="fas fa-lightbulb"></i> Skills</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#experience" class="nav-link">
                                            <span><i class="fas fa-star"></i>Experience</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#education" class="nav-link">
                                            <span><i class="fas fa-graduation-cap"></i>Education</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#portfolio" class="nav-link">
                                            <span><i class="fas fa-th-large"></i>Portfolio</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#blog" class="nav-link">
                                            <span><i class="fas fa-pencil-alt"></i>Blog</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#contact" class="nav-link">
                                            <span><i class="fas fa-phone-alt"></i>Contact</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="social-menu-top">
                            <div class="menu-wrapper">
                                <ul class="nav">
                                    @foreach ($socials as $social)
                                    <li class="nav-item">
                                        <a href="{{ $social->link }}" class="nav-link">
                                            <span><i class="{{ $social->icon }}"></i></span>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="build-by">
                            <p>&copy; 2019 {{ strtok($gen_info->name, " ") }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--=====================END SIDE HEADER======================-->

        <!--=====================START MAIN SECTION=====================-->
        <div class="main-wrapper">
            <!--=====================START MOBILE HEADER======================-->
            <div class="mobile-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header-nav-mobile d-flex">
                                <div class="menu-button">
                                    <span><i class="fas fa-align-justify"></i></span>
                                </div>
                                <div class="mobile-nav-image">
                                    <img src="assets/images/{{ $gen_info->image }}" alt="">
                                </div>
                                <div class="mobile-nav-name">
                                    <h4>{{ $gen_info->name }} <span class="dot"></span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=====================END MOBILE HEADER======================-->

            <!--====================START HOME SECTION=====================-->
            <section class="section-home jump" id="home" >
                <div class="container-fluid">
                    <div class="row">
                        <div class="home">
                            <div class="title-main">
                                <h1>{{ $gen_info->name }}<span class="dot"></span></h1>
                            </div>
                            <div class="short-des">
                                <p>
                                    {{ $gen_info->short_desc }}
                                </p>
                            </div>
                            <div class="btn-profile-hire">
                                <div class="profile-btn">
                                    <a class="btn" href="#portfolio"><i class="fas fa-border-all"></i><span> Portfolio</span></a>
                                </div>
                                <div class="btn-hire">
                                    <a class="btn" href="#contact"><i class="far fa-envelope"></i></span>Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--====================END HOME SECTION=====================-->

            <!--====================ABOUT SECTION=====================-->
            <section class="section section-about section-dark-blue jump" id="about" >
                <div class="container-fluid">
                    <div class="row  section-seperator">
                        <div class="col-md-12">
                            <div class="section-heading mb-5">
                                <h3>About Me</h3>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="about-me-img  mt-5 pl-3">
                                <img src="assets/images/{{ $gen_info->image }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="about-details mt-5 pr-5">
                                <div class="pre-title">
                                    <h3>Hello</h3>
                                </div>
                                <div class="about-description mt-4">
                                    <p>
                                        {{ $gen_info->desc }}
                                    </p>
                                </div>
                                <div class="personal-details mt-4">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="mb-2">Name: <span>{{ $gen_info->name }}</span></p>
                                            <p>Birthday: <span>{{ $gen_info->birthday }}</span></p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="mb-2">Location: <span>{{ $gen_info->location }}</span></p>
                                            <p>Email: <span>{{ $gen_info->email }}</span></p>
                                        </div>
                                    </div>
                                    <div class="about-section-button">
                                        <div class="download-btn">
                                            <a class="btn" href="assets/images/{{ $gen_info->cv }}" download><i class="fas fa-cloud-download-alt"></i><span> Download CV</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--====================END ABOUT SECTION=====================-->

            <!--====================START SKILL SECTION=====================-->
            <section class="section section-skill section-dark-blue jump" id="skills">
                <div class="container-fluid">
                    <div class="row section-seperator">
                        <div class="col-md-12">
                            <div class="section-heading mb-5">
                                <h3>My Skills</h3>
                            </div>
                            <div class="skill-description mt-3">
                                <p>
                                    {{ $gen_info->skill_desc }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="skillbar-section mt-4">
                                <div class="row">
                                    @foreach ($skills as $skill)
                                        <div class="col-md-6">
                                            <div class="progress-bar-custom" data-percentage="{{ $skill->percantage }}%">
                                                <h4 class="progress-title-holder">
                                                    <span class="progress-title">{{ $skill->skill }}</span>
                                                    <span class="progress-number-wrapper">
                                                        <span class="progress-number-mark">
                                                            <span class="percent"></span>
                                                            <span class="down-arrow"></span>
                                                        </span>
                                                    </span>
                                                </h4>
                                                <div class="progress-content-outter">
                                                    <div class="progress-content"></div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--====================END SKILL SECTION=====================-->

            <!--===================START ACHIVEMENT SECTION====================-->
            <section class="section section-achivement">
                <div class="container-fluid">
                    <div class="row section-seperator">
                        <div class="col-md-12">
                            <div class="my-achivement">
                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="achivement-cart">
                                            <div class="achivement-icon">
                                                <span><i class="far fa-thumbs-up"></i></span>
                                            </div>
                                            <div class="achivement-counter">
                                                <h1><span class="counter">15</span>+</h1>
                                                <h6>Project Completed</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-3">
                                        <div class="achivement-cart">
                                            <div class="achivement-icon">
                                                <span><i class="fas fa-mug-hot"></i></span>
                                            </div>
                                            <div class="achivement-counter">
                                                <h1><span class="counter">35</span>+</h1>
                                                <h6>Cup of copee</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="achivement-cart">
                                            <div class="achivement-icon">
                                                <span><i class="far fa-smile"></i></span>
                                            </div>
                                            <div class="achivement-counter">
                                                <h1><span class="counter">12</span>+</h1>
                                                <h6>Happy Customers</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="achivement-cart">
                                            <div class="achivement-icon">
                                                <span><i class="fas fa-trophy"></i></span>
                                            </div>
                                            <div class="achivement-counter">
                                                <h1><span class="counter">23</span>+</h1>
                                                <h6>Award Won</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--===================END ACHIVEMENT SECTION====================-->

            <!--===================START SERVICE SECTION====================-->
            <section class="section section-services section-dark-blue" id="services" >
                <div class="container-fluid">
                    <div class="row section-seperator">
                        <div class="col-md-12">
                            <div class="section-heading">
                                <h3>Services</h3>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="services-cart-full">
                                <div class="row">
                                    @foreach ($services as $service)
                                        <div class="col-md-4">
                                            <div class="single-cart">
                                                <div class="services-cart-icon">
                                                    <span><i class="{{ $service->icon }}"></i></span>
                                                </div>
                                                <div class="srvc-cnt">
                                                    <h6>{{ $service->title }}</h6>
                                                    <p>{{ $service->desc }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--===================END SERVICE SECTION====================-->

            <!--====================START EXPERIENCE SECTION=====================-->
            <section class="section section-experience timeline-style section-dark-blue jump" id="experience" >
                <div class="container-fluid">
                    <div class="row section-seperator">
                        <div class="col-md-12">
                            <div class="section-heading">
                                <h3>Experience</h3>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="timeline">
                                <div class="timeline-body mt-5">
                                    <div class="time-inner">
                                        @foreach ($experiences as $experience)
                                            <div class="timeline-item">
                                                <p class="time">{{ $experience->start_date }} - {{ $experience->end_date }}</p>
                                                <div class="content">
                                                    <h6 class="title">{{ $experience->title }} <small>at <span>{{ $experience->company }}</span></small></h6>
                                                    <p>
                                                        {{ $experience->desc }}
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--===================END EXPERIENCE SECTION======================-->

            <!--====================START EDUCATION SECTION=====================-->
            <section class="section section-education timeline-style section-dark-blue jump" id="education">
                <div class="container-fluid">
                    <div class="row section-seperator">
                        <div class="col-md-12">
                            <div class="section-heading">
                                <h3>Education</h3>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="timeline">
                                <div class="timeline-body mt-5">
                                    <div class="time-inner">
                                        @foreach ($educations as $education)
                                            <div class="timeline-item">
                                                <p class="time">{{ $education->start_date }} - {{ $education->end_date }}</p>
                                                <div class="content">
                                                    <h6 class="title">{{ $education->title }}</h6>
                                                    <p>
                                                        {{ $education->desc }}
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--===================END EDUCATION SECTION======================-->

            <!--===================START PROJECT SECTION====================-->
            <section class="section section-portfolio section-dark-blue jump" id="portfolio" >
                <div class="container-fluid">
                    <div class="row section-seperator">
                        <div class="col-md-12">
                            <div class="section-heading">
                                <h3>Portfolio</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="portfolio-all">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="button-group filter-button anivew" data-av-animation="fadeInUp">
                                                <button class="btn" data-filter="*">ALl Project</button>
                                                @foreach ($pCat as $key => $group)
                                                    <button class="btn" data-filter=".group-{{ Illuminate\Support\Str::Slug($group->category) }}">{{ $group->category }}</button>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row grid-group">
                                        @foreach($portfolios as $key=>$portfolio)
                                            <div class="col-md-4 grid group-{{ Illuminate\Support\Str::Slug($portfolio->category) }}">
                                                <div class="grid-item">
                                                    <a href="{{ $portfolio->link }}" target="_blank">
                                                        <div class="image-overlay"></div>
                                                        <img src="assets/images/{{ $portfolio->image }}" alt="img"/>
                                                        <div class="img_cnt">
                                                            <span><i class="fas fa-link"></i></span>
                                                            <h4>{{ $portfolio->title }}</h4>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--===================END PROJECT SECTION====================-->

            <!--======================START PRICING SECTION=====================-->
            <section class="section section-pricing section-dark-blue">
                <div class="container-fluid">
                    <div class="row section-seperator">
                        <div class="col-md-12">
                            <div class="section-heading mb-5">
                                <h3>Pricing Table <small><sub>Demo Purpose</small></sub></h3>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="pricing-table mt-5">
                                <div class="row no-gutters">
                                    <div class="col-md-4 p-2">
                                        <div class="table-single">
                                            <div class="table-card text-center">
                                                <div class="table-icon">
                                                    <i class="fas fa-bolt"></i>
                                                </div>
                                                <div class="plan">
                                                    <span>Lite</span>
                                                </div>
                                                <div class="price">
                                                    <h2><span class="sign">$</span>150 <span class="duration">/mo</span></h2>
                                                </div>
                                                <ul>
                                                    <li>Only Design</li>
                                                    <li>Limited Revision</li>
                                                    <li>Limited Time Support</li>
                                                    <li></li>
                                                </ul>
                                                <a href="" class="btn">Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 p-2">
                                        <div class="table-single">
                                            <div class="table-card text-center">
                                                <div class="table-icon">
                                                    <i class="fas fa-fire-alt"></i>
                                                </div>
                                                <div class="plan">
                                                    <span>Pro</span>
                                                </div>
                                                <div class="price">
                                                    <h2><span class="sign">$</span>300 <span class="duration">/mo</span></h2>
                                                </div>
                                                <ul>
                                                    <li>Only Development</li>
                                                    <li>Unlimited Revision</li>
                                                    <li>6 Month of Support</li>
                                                    <li></li>
                                                </ul>
                                                <a href="" class="btn">Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 p-2">
                                        <div class="table-single mb-0">
                                            <div class="table-card text-center">
                                                <div class="table-icon">
                                                    <i class="fas fa-rocket"></i>
                                                </div>
                                                <div class="plan">
                                                    <span>Enterprise</span>
                                                </div>
                                                <div class="price">
                                                    <h2><span class="sign">$</span>500 <span class="duration">/mo</span></h2>
                                                </div>
                                                <ul>
                                                    <li>Design and Development</li>
                                                    <li>Unlimited Revision</li>
                                                    <li>Unlimited Support</li>
                                                    <li></li>
                                                </ul>
                                                <a href="" class="btn">Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--====================END PRICING SECTION=======================-->

            <!--====================START TESTIMONIAL SECTION=====================-->
            <section class="section section-testimonials section-dark-blue">
                <div class="container-fluid">
                    <div class="row section-seperator">
                        <div class="col-md-12">
                            <div class="section-heading">
                                <h3>Testiminials</h3>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="testimonial-carousel ">
                                <div class="owl-carousel carousel-testimonial owl-theme">
                                    @foreach ($testimonials as $testimonial)
                                        <div class="item">
                                            <div class="client-item">
                                                <span class="quote">
                                                    <i class="fas fa-quote-left"></i>
                                                </span>
                                                <p>
                                                    {{ $testimonial->desc }}
                                                </p>
                                                <div class="testimonial-details">
                                                    <div class="testimonial-img">
                                                        <img src="assets/images/{{ $testimonial->image }}" alt="">
                                                    </div>
                                                    <div class="client-details">
                                                        <h6>{{ $testimonial->name }}</h6>
                                                        <p>{{ $testimonial->designation }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--===================END TESTIMONIAL SECTION======================-->

            <!--======================START CLIENT SECTION=====================-->
            <section class="section section-client">
                <div class="container-fluid">
                    <div class="row section-seperator">
                        <div class="col-md-12">
                            <div class="clientcarousel">
                                <div class="owl-carousel owl-theme carousel-client">
                                    <div class="item">
                                        <div class="client-logo">
                                            <img src="assets/images/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="client-logo">
                                            <img src="assets/images/2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="client-logo">
                                            <img src="assets/images/3.png" alt="">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="client-logo">
                                            <img src="assets/images/4.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--======================END CLIENT SECTION=====================-->

            <!--======================START FEATURE POST SECTION=====================-->
            <section class="section section-recentpost section-dark-blue jump" id="blog" >
                <div class="container-fluid">
                    <div class="row section-seperator">
                        <div class="col-md-12">
                            <div class="section-heading">
                                <h3>Recent Posts</h3>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="post-details">
                                <div class="row">
                                    @foreach ($blogs as $blog)
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="blog-img">
                                                    <img class="card-img-top" src="assets/images/{{ $blog->image }}" alt="Card image cap">
                                                    <span class="img-text">{{ $blog->tag }}</span>
                                                </div>
                                                <div class="blog-desc">
                                                    <div class="card-body">
                                                        <h4 class="card-title"><a href="{{ $blog->link }}">{{ $blog->title }}</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--====================END FEATURE POST SECTION=======================-->

            <!--======================START CONTACT SECTION=====================-->
            <section class="section section-contact section-dark-blue jump" id="contact" >
                <div class="container-fluid">

                    <div class="row section-seperator">
                        <div class="com-md-12">
                            <div class="section-heading">
                                <h3>Get In Touch</h3>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="toast-container d-none justify-content-center align-items-center">
                                <div class="toast mt-3 w-100" data-delay="8000" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                        <strong class="mr-auto">Success Message</strong>
                                        <small>Just Now</small>
                                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="toast-body">
                                        Your Message Sent Successfully. I am replying soon in your given email. Stay Happy!!!
                                    </div>
                                </div>
                            </div>
                            <div class="contact-form">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="contact-details">
                                            <div class="single-contact">
                                                <div class="contact-icon">
                                                    <i class="fas fa-phone-alt"></i>
                                                </div>
                                                <div class="cotact-info">
                                                    <h6>Phone</h6>
                                                    <p>{{ $gen_info->phone }}</p>
                                                </div>
                                            </div>
                                            <div class="single-contact">
                                                <div class="contact-icon">
                                                    <i class="far fa-envelope"></i>
                                                </div>
                                                <div class="cotact-info">
                                                    <h6>Email Address</h6>
                                                    <p>{{ $gen_info->email }}</p>
                                                </div>
                                            </div>
                                            <div class="single-contact">
                                                <div class="contact-icon">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </div>
                                                <div class="cotact-info">
                                                    <h6>Address</h6>
                                                    <p>{{ $gen_info->location }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-full">
                                            <form id="contact-form">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <input name="name" type="name" class="form-control" id="fullName" placeholder="Full Name" autocomplete="off" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <input name="email" type="email" class="form-control" id="email" placeholder="Email" autocomplete="off" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" autocomplete="off" required>
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="message" placeholder="Message" id="message" class="form-control" id="textarea" rows="3" required></textarea>
                                                </div>
                                                <button class="btn" type="submit">Send Message</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--====================END CONTACT SECTION=======================-->
        </div>
        <!--====================END MAIN SECTION======================-->
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js"></script>
    <script src="/assets/plugin/jquery.ripples-min.js"></script>
    <script src="/assets/plugin/jquery.smooth-scroll.js"></script>
    <script src="/assets/plugin/owl.carousel.min.js"></script>
    <script src="/assets/plugin/bootstrap.min.js"></script>
    <script src="/assets/plugin/isotope.pkgd.min.js"></script>
    <script src="/assets/plugin/jquery.aniview.js"></script>
    <script src="/assets/js/main.js"></script>
    <script>
        $('#contact-form').on('submit', function(e){
            e.preventDefault();
            var name = $('#fullName').val();
            var email = $('#email').val();
            var subject = $('#subject').val();
            var message = $('#message').val();
            $.ajax({
                method: 'POST',
                url: "{{ route('contact') }}",
                data: { _token: '{{ csrf_token() }}', name:name, subject:subject, email:email, message:message },
                success: function(data){
                    console.log(data);
                    if(data.type == 'success'){
                        $('input').val('');
                        $('textarea').val('');
                        $('.toast-container').removeClass('d-none').addClass('d-flex');
                        $('.toast').toast('show');
                    }else {
                        alert('Something Went Wrong!! Please Try Again');
                    }
                }
            });
        });
    </script>
</body>

</html>
