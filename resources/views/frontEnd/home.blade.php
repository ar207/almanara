@extends('frontEnd.layouts.master')

@section('content')
    <link href="{{asset('assets/owlcarousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/owlcarousel/owl.theme.green.css')}}" rel="stylesheet">
    <style>
        #hero, #hero .carousel-item {
            height: calc(100vh - 100px);
            width: 100%;
            overflow: hidden;
        }

        #hero .carousel-item::before {
            background: transparent !important;
        }

        .home-welcome {
            background-color: #D8DDE1 !important;
        }

        /* Custom CSS */
        .news-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .news-image {
            height: 250px;
            object-fit: cover;
        }

        .news-content {
            padding: 15px;
        }

        .badge-category {
            position: absolute;
            top: 15px;
            left: 15px;
            background-color: #007bff;
            color: #fff;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 14px;
        }

        .video-container iframe {
            width: 100%; /* Adjust the width as needed */
            height: 400px; /* Adjust the height as needed */
            border: none; /* Remove border if present */
            border-radius: 10px; /* Add rounded corners if desired */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow for visual effect */
        }

        .news-list {
            max-height: 500px;
            overflow-y: hidden; /* Ensure only vertical overflow is hidden */
            transition: all 0.3s ease; /* Smooth transition for both height and overflow */
        }

        .news-list:hover {
            overflow-y: auto; /* Show vertical scrollbar on hover */
            padding-right: 5px; /* Adjust padding for scrollbar */
        }

        /* Style for scrollbar */
        .news-list::-webkit-scrollbar {
            width: 5px; /* Width of the scrollbar */
        }

        .news-list::-webkit-scrollbar-thumb {
            background-color: #cccccc;
            border-radius: 10px;
        }

        .news-list img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .news-list-item {
           border-bottom: 1px solid #d9d8d8;
            margin-bottom: 15px;
        }

        .product-slider {
            margin: 0 auto;
            height: 450px !important;
            position: relative;
        }

        .product-slider img {
            width: 100%;
            height: 400px;
            border-radius: 10px;
        }

        .product-slider .carousel-item {
            text-align: center;
        }

        .product-details {
            margin-top: 15px;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
        }

        .our-services h2 {
            font-weight: bold;
            color: #333;
        }

        .our-services .text-muted {
            color: #6c757d;
        }

        /* Custom CSS */
        .service-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, background-image 0.3s ease;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            overflow: hidden;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .service-card:hover .background-hover {
            opacity: 1;
        }

        .service-card img {
            width: 50px;
            height: 50px;
            background-color: #ffffff;
            border-radius: 50%;
            padding: 10px;
            transition: background-color 0.3s ease;
            z-index: 2;
            position: relative;
        }

        .service-card:hover img {
            background-color: #a3bffa; /* Light blue shade on hover */
        }

        .service-card .content {
            z-index: 2;
            position: relative;
        }

        .service-card .background-hover {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 1;
        }

        video {
            object-fit: cover;
            height: 400px !important;
            width: 100%;
        }

        .our-services h2 {
            font-weight: bold;
            color: #333;
        }

        .our-services .text-muted {
            color: #6c757d;
        }

        .service-card {
            background-color: #ffffff;
            border-radius: 10px;
            border: 1px solid #bcbac4;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, background-image 0.3s ease;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .service-card .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .service-card .service-icon {
            background-color: #e6e9ee;
            padding: 5px;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px; /* Add some space between the icon and the title */
        }

        .service-card h5 {
            color: #333;
            margin-bottom: 10px;
        }

        .service-card p {
            color: #6c757d;
            margin-bottom: 20px;
        }

        .service-card .btn-primary {
            background-color: #5a67d8;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
        }

        .service-card:hover {
            transform: translateY(-10px);
            /* Dynamic background image */
        }

        .section-background {
            background-color: #f2f2f2;
            padding: 40px;
            border-radius: 10px;
        }
    </style>
    <div class="home-page">
        <?php
        $title_var = "title_" . @Helper::currentLanguage()->code;
        $title_var2 = "title_" . config('smartend.default_language');
        $details_var = "details_" . @Helper::currentLanguage()->code;
        $details_var2 = "details_" . config('smartend.default_language');

        ?>

        @include('frontEnd.layouts.slider')
        @include('frontEnd.homepage.row1')
        @if(!empty($categoryWithSpeciality))
            <section class="our-services py-5">
                <div class="container">
                    <div class="text-center mb-4">
                        <h2 class="text-uppercase">Specialties</h2>
                    </div>
                    <div id="servicesCarousel" class="carousel slide owl-carousel">
                        @foreach($categoryWithSpeciality as $key => $speciality)
                            <?php
                            if ($speciality->$title_var != "") {
                                $title = $speciality->$title_var;
                            } else {
                                $title = $speciality->$title_var2;
                            }
                            if ($speciality->$details_var != "") {
                                $details = $details_var;
                            } else {
                                $details = $details_var2;
                            }
                            $categoryThumbnail = !empty($speciality->thumbnail) ? URL::to('uploads/sections/' . $speciality->thumbnail) : '';
                            if (empty($categoryThumbnail)) {
                                $categoryThumbnail = !empty($speciality->photo) ? URL::to('uploads/sections/' . $speciality->photo) : '';
                            }
                            $checkLocale = app()->getLocale() == 'en' ? '' : app()->getLocale() . '/';
                            $category_link_url = url($checkLocale . 'specialities') . '?speciality_id=' . $speciality->id;

                            if ($speciality['is_speciality'] != 1) {
                                $category_link_url = Helper::categoryURL($speciality->id);
                            }
                            ?>
                            <div class="col-md-3 item" style="width: 250px !important;">
                                <div class="service-card p-3 text-center" style="height: 250px !important;">
                                    <!-- Background Image for Hover -->
                                    <div class="background-hover"
                                         style="background-image: url('{{ $categoryThumbnail }}');"></div>

                                    <!-- Content -->
                                    <div class="content d-flex flex-column justify-content-between h-100">
                                        <div class="service-icon">
                                            <i class="fa {!! $speciality->icon !!} "></i>&nbsp;
                                        </div>
                                        <div class="mt-auto">
                                            <h5 style="color: #000;">{{ $title }}</h5>
                                            <a href="{{ $category_link_url }}" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        <div class="container my-5 section-background">
            <div class="row">
                @if(!empty(count($products)))
                    <div class="col-sm-6">
                        <div id="productCarousel" class="owl-carousel carousel slide product-slider">
                            @foreach($products as $key => $product)
                                <?php
                                if ($product->$title_var != "") {
                                    $title = $product->$title_var;
                                } else {
                                    $title = $product->$title_var2;
                                }

                                $video_link_url = Helper::topicURL($product->id);
                                ?>
                                <div class="item">
                                    <img src="{{ URL::to('uploads/topics/'.$product->photo_file) }}" loading="lazy"
                                         class="d-block" alt="{{ $title }}">
                                    <div class="product-details">
                                        <h5>{{ $title }}</h5>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
                @if(!empty(count($videos)))
                    <div class="col-sm-6">
                        <div id="videoCarousel" class="owl-carousel carousel slide product-slider">
                            @foreach($videos as $key => $video)
                                @if(!empty($video->video_file))
                                    <?php
                                    if ($video->$title_var != "") {
                                        $title = $video->$title_var;
                                    } else {
                                        $title = $video->$title_var2;
                                    }

                                    $video_link_url = Helper::topicURL($video->id);
                                    ?>
                                    <div class="item">
                                        @if($video->video_type ==1)
                                            <?php
                                            $Youtube_id = Helper::Get_youtube_video_id($video->video_file);
                                            ?>
                                            @if($Youtube_id !="")
                                                {{-- Youtube Video --}}
                                                <div class="video-container">
                                                    <iframe allowfullscreen
                                                            src="https://www.youtube.com/embed/{{ $Youtube_id }}?autoplay=1&mute=1"
                                                            allow="autoplay">
                                                    </iframe>
                                                </div>
                                            @endif
                                        @elseif($video->video_type ==2)
                                            <?php
                                            $Vimeo_id = Helper::Get_vimeo_video_id($video->video_file);
                                            ?>
                                            @if($Vimeo_id !="")
                                                {{-- Vimeo Video --}}
                                                <div class="video-container">
                                                    <iframe allowfullscreen
                                                            src="https://player.vimeo.com/video/{{ $Vimeo_id }}?title=0&amp;byline=0"
                                                            allow="autoplay">
                                                    </iframe>
                                                </div>
                                            @endif

                                        @elseif($video->video_type ==3)
                                            <div class="video-container">
                                                {{-- Embed Video --}}
                                                {!! $video->video_file !!}
                                            </div>

                                        @else
                                            <video class="video-js" controls autoplay preload="auto" width="100%"
                                                   height="500"
                                                   poster="{{ URL::to('uploads/topics/'.$video->photo_file) }}"
                                                   data-setup="{}">
                                                <source src="{{ URL::to('uploads/topics/'.$video->video_file) }}"
                                                        type="video/mp4"/>
                                                <p class="vjs-no-js">
                                                    To view this video please enable JavaScript, and consider upgrading
                                                    to a
                                                    web browser that
                                                    <a href="https://videojs.com/html5-video-support/" target="_blank">supports
                                                        HTML5 video</a>
                                                </p>
                                            </video>
                                        @endif
                                        <div class="product-details">
                                            <h5>{{ $title }}</h5>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <div class="container my-5">
            <div class="container my-5">
                @foreach($news as $index => $new)
                    @if($index == 0)
                        <?php
                        if ($new->$title_var != "") {
                            $title = $new->$title_var;
                        } else {
                            $title = $new->$title_var2;
                        }
                        $newsImage = !empty($new->photo_file) ? URL::to('uploads/topics/' . $new->photo_file) : URL::to('uploads/topics/default.png');
                        $newsDate = Helper::formatDate($new->date);
                        ?>
                    @endif
                @endforeach
                <div class="row">
                    <div class="col-lg-8">
                        <div class="news-card">
                            <div class="position-relative">
                                <img src="{{ $newsImage }}"
                                     style="height:400px; width:100%" alt="{{ $title }}"
                                     class="img-fluid news-image">
                            </div>
                            <div class="news-content">
                                <h4>{{ $title }}</h4>
                                <p class="text-muted">{{ $newsDate }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="news-list">
                            @if(count($news) > 0)
                                @foreach($news as $index => $new)
                                    @if($index > 0)
                                        <?php
                                        if ($new->$title_var != "") {
                                            $title = $new->$title_var;
                                        } else {
                                            $title = $new->$title_var2;
                                        }
                                        $newsImage = !empty($new->photo_file) ? URL::to('uploads/topics/' . $new->photo_file) : URL::to('uploads/topics/default.png');

                                        $topic_link_url = Helper::topicURL($new->id);
                                        ?>
                                        <div class="news-list-item d-flex mb-4">
                                            {{--<img src="{{ $newsImage }}"--}}
                                                 {{--style="height: 120px !important; width: 120px !important;"--}}
                                                 {{--alt="{{ $title }}" class="mr-3">--}}
                                            <div style="margin-left: 5px;">
                                                <h6>{{ $title }}</h6>
                                                <p class="text-muted mb-0">{{ Helper::formatDate($new->date) }}</p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--@include('frontEnd.homepage.row2')--}}
        {{--@include('frontEnd.homepage.row3')--}}
        {{--        @include('frontEnd.homepage.row4')--}}
        {{--        @include('frontEnd.homepage.row5')--}}
        {{--@include('frontEnd.homepage.row6')--}}
        {{--@include('frontEnd.homepage.row7')--}}

    </div>
@endsection
@push('after-styles')
    @if(Helper::GeneralSiteSettings("style_header") && Helper::GeneralSiteSettings("style_bg_type"))
        <style>
            .fixed-top-margin {
                margin-top: 0 !important;
            }

            .header-bg, .header-bg a {
                color: #444444;
            }

            @media (min-width: 968px) {

                .header-no-bg, .header-no-bg a, .topbar-no-bg, .topbar-no-bg a {
                    color: #fff;
                }

                .header-no-bg .navbar a, .topbar-no-bg .header-dropdown .btn {
                    color: #fff;
                }

                .dropdown-item {
                    color: #212529 !important;
                }

                .header-scrolled .navbar a, .header-scrolled .header-dropdown .btn {
                    color: #444444;
                }
            }

            .topbar-no-bg {
                box-shadow: 0 0 1px rgba(255, 255, 255, 0.5) !important;
            }
        </style>
    @endif
@endpush
@push('after-scripts')
    <script src="{{asset('assets/owlcarousel/owl.carousel.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            manageBannersOnScreenChange();
        });
        $('#servicesCarousel').owlCarousel({
            items: 4, // Number of items shown
            loop: true, // Enables infinite looping
            margin: 10, // Margin between items
            nav: true, // Show next/prev buttons
            dots: true, // Show pagination dots
            autoplay: true, // Auto start the carousel
            autoplayTimeout: 5000, // Duration for each slide
            autoplayHoverPause: true, // Pause on hover
            smartSpeed: 1000, // Speed of transition
            fluidSpeed: true, // Adjust speed to match distance
            responsive: {
                0: {
                    items: 1 // Items for small screens
                },
                600: {
                    items: 2 // Items for medium screens
                },
                960: {
                    items: 3 // Items for large screens
                },
                1200: {
                    items: 4 // Items for extra-large screens
                }
            },
            slideBy: 1, // Number of items to slide
            rewind: true, // Rewind to the first slide
            autoplaySpeed: 1000, // Speed for autoplay
            dragEndSpeed: 500, // Speed for drag end
            lazyLoad: true, // Lazy load images
            center: true, // Center items
            URLhashListener: true, // Enable URL Hash navigation
            startPosition: 'URLHash', // Start position based on URL hash
            video: true, // Enable video support
            animateOut: 'fadeOut', // Animation out
            animateIn: 'fadeIn', // Animation in
            mouseDrag: true, // Enable mouse drag
            touchDrag: true, // Enable touch drag
            pullDrag: true, // Enable pull drag
            freeDrag: true, // Free drag mode
            rtl: false, // Right-to-left support
            autoWidth: false, // Auto width for items
            autoHeight: false, // Auto height for items
            responsiveClass: true, // Add 'owl-responsive-X' class to items
            stagePadding: 0, // Padding on stage (can create space around items)
            navSpeed: 800, // Speed of navigation buttons
            dotsSpeed: 800, // Speed of pagination dots
        });

        $('#productCarousel').owlCarousel({
            loop: true,
            // nav:true,
            margin: 0,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                960: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            },
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true
        });
        $('#videoCarousel').owlCarousel({
            loop: true,
            // nav:true,
            margin: 0,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                960: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            },
            autoplay: true,
            autoplayTimeout: 3600000,
            autoplayHoverPause: true
        });
        $(window).resize(function () {
            manageBannersOnScreenChange();
        });

        function addIndicators(carouselId, indicatorsId) {
            let carouselItems = document.querySelectorAll(`${carouselId} .carousel-item`);
            let indicators = document.querySelector(indicatorsId);

            if (!indicators) {
                console.error(`Indicators element not found for ${indicatorsId}`);
                return;
            }

            indicators.innerHTML = '';

            carouselItems.forEach((item, index) => {
                let indicator = document.createElement('li');
                indicator.setAttribute('data-bs-target', carouselId);
                indicator.setAttribute('data-bs-slide-to', index);
                if (index === 0) {
                    indicator.classList.add('active');
                }
                indicators.appendChild(indicator);
            });
        }

        function manageBannersOnScreenChange() {
            const deviceType = getDeviceType();
            if (deviceType === 'mobile') {
                $('#heroMobileCarousel').show();
                $('#heroWebCarousel, #heroTabletCarousel').hide();
                addIndicators('#heroMobileCarousel', '#hero-mobile-carousel-indicators');
            }
            if (deviceType === 'tablet') {
                $('#heroTabletCarousel').show();
                $('#heroWebCarousel, #heroMobileCarousel').hide();
                addIndicators('#heroTabletCarousel', '#hero-tablet-carousel-indicators');
            }
            if (deviceType === 'web') {
                $('#heroWebCarousel').show();
                $('#heroMobileCarousel, #heroTabletCarousel').hide();
                addIndicators('#heroWebCarousel', '#hero-web-carousel-indicators');
            }
        }

        function getDeviceType() {
            const windowWidth = $(window).width();
            if (windowWidth < 768) {
                return 'mobile';
            } else if (windowWidth >= 768 && windowWidth < 992) {
                return 'tablet';
            } else {
                return 'web';
            }
        }
    </script>
@endpush
