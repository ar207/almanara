@extends('frontEnd.layouts.master')

@section('content')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
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

        .news-list img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .news-list-item {
            margin-bottom: 15px;
        }

        .product-slider {
            margin: 0 auto;
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

        .service-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .service-card img {
            width: 50px;
            height: 50px;
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
        }
        video {
            object-fit: cover;
            height: 400px!important;
            width: 100%;
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

            <section class="our-services py-5">
                <div class="container">
                    <div class="text-center mb-4">
                        <h2 class="text-uppercase">Specialties</h2>
                        <p class="text-muted">Technical Service</p>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="service-card p-3 text-center">
                                <img src="{{asset('assets/home-page/services_card_1.svg')}}" alt="Internal Medicine" class="mb-3">
                                <h5> Dental Care</h5>
                                <p class="text-muted">30+ Doctors</p>
                                <button class="btn btn-primary">Read More</button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="service-card p-3 text-center">
                                <img src="{{asset('assets/home-page/service_card_2.svg')}}" alt="Dental Care" class="mb-3">
                                <h5>Internal Medicine</h5>
                                <p class="text-muted">20+ Doctors</p>
                                <button class="btn btn-primary">Read More</button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="service-card p-3 text-center">
                                <img src="{{asset('assets/home-page/service_card_3.svg')}}" alt="Urology Care" class="mb-3">
                                <h5>Urology Care</h5>
                                <p class="text-muted">20+ Doctors</p>
                                <button class="btn btn-primary">Read More</button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="service-card p-3 text-center">
                                <img src="{{asset('assets/home-page/service_card_4.svg')}}" alt="Neurology Care" class="mb-3">
                                <h5>Neurology Care</h5>
                                <p class="text-muted">10+ Doctors</p>
                                <button class="btn btn-primary">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container my-5">
                <div id="productCarousel" class="carousel slide product-slider" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('assets/home-page/pikaso_texttoimage_a-busy-medical-lab-during-the-day-showcasing-a-His.jpeg')}}"
                                 class="d-block" alt="Product 1">
                            <div class="product-details">
                                <h5>Product 1</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/home-page/pikaso_texttoimage_35mm-film-photography-a-clean-medical-lab-in-the-a.jpeg')}}"
                                 class="d-block " alt="Product 2">
                            <div class="product-details">
                                <h5>Product 2</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/home-page/pikaso_texttoimage_35mm-film-photography-a-hightech-medical-lab-fille.jpeg')}}"
                                 class="d-block " alt="Product 3">
                            <div class="product-details">
                                <h5>Product 3</h5>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="container my-5">
                <div id="videoCarousel" class="carousel slide product-slider" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <video class="d-block w-100" height="400px" autoplay loop muted>
                                <source src="{{asset('assets/home-page/videoplayback (1).webm')}}" type="video/mp4">
                                {{--Your browser does not support the video tag.--}}
                            </video>
                        </div>
                        <div class="carousel-item">
                            <video class="d-block w-100" height="400px" autoplay loop muted>
                                <source src="{{asset('assets/home-page/videoplayback (1).webm')}}" type="video/mp4">
                                {{--Your browser does not support the video tag.--}}
                            </video>
                        </div>
                        <div class="carousel-item">
                            <video class="d-block w-100" height="400px" autoplay loop muted>
                                <source src="{{asset('assets/home-page/videoplayback (1).webm')}}" type="video/mp4">
                                {{--Your browser does not support the video tag.--}}
                            </video>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#videoCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#videoCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="container my-5">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="news-card">
                                <div class="position-relative">
                                    <img src="{{asset('assets/home-page/pikaso_texttoimage_35mm-fille.jpeg')}}"
                                         style="height:325px;width:  750px " alt="News Image" class="img-fluid news-image">
                                    <span class="badge-category">Sports</span>
                                </div>
                                <div class="news-content">
                                    <h4>Lorem Ipsum is simply dummy text of the...</h4>
                                    <p class="text-muted">Dec 9, 2024</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="news-list">
                                <div class="news-list-item d-flex mb-4">
                                    <img src="{{asset('assets/home-page/busy-medical-lab-during-th-1.jpeg')}}"
                                         style="height: 90px;width: 120px" alt="News Thumbnail" class="mr-3">
                                    <div>
                                        <h6>Get the best speak market, news.</h6>
                                        <p class="text-muted mb-0">Dec 9, 2024</p>
                                    </div>
                                </div>
                                <div class="news-list-item d-flex mb-4">
                                    <img src="{{asset('assets/home-page/sterile-medical-lab-at-nig-2.jpeg')}}"
                                         style="height: 90px;width: 120px" alt="News Thumbnail" class="mr-3">
                                    <div>
                                        <h6>Get the best speak market, news.</h6>
                                        <p class="text-muted mb-0">Dec 9, 2024</p>
                                    </div>
                                </div>
                                <div class="news-list-item d-flex mb-4">
                                    <img src="{{asset('assets/home-page/afternoon-with-a-Black-3.jpeg')}}"
                                         style="height: 90px;width: 120px" alt="News Thumbnail" class="mr-3">
                                    <div>
                                        <h6>Get the best speak market, news.</h6>
                                        <p class="text-muted mb-0">Dec 9, 2024</p>
                                    </div>
                                </div>
                                <div class="news-list-item d-flex mb-4">
                                    <img src="{{asset('assets/home-page/medical-lab-in-the-4.jpeg')}}"
                                         style="height: 90px;width: 120px" alt="News Thumbnail" class="mr-3">
                                    <div>
                                        <h6>Get the best speak market, news.</h6>
                                        <p class="text-muted mb-0">Dec 9, 2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        </div>

        {{--@include('frontEnd.homepage.row2')--}}
        {{--@include('frontEnd.homepage.row3')--}}
        @include('frontEnd.homepage.row4')
        @include('frontEnd.homepage.row5')
        @include('frontEnd.homepage.row6')
        @include('frontEnd.homepage.row7')

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            manageBannersOnScreenChange();
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
