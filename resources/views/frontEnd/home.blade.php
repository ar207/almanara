@extends('frontEnd.layouts.master')

@section('content')
    <style>
        .owl-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .owl-nav .owl-prev {
            position: absolute;
            left: -25px; /* Adjust this value as needed */
        }

        .owl-nav .owl-next {
            position: absolute;
            right: -25px; /* Adjust this value as needed */
        }

        .owl-nav .owl-prev, .owl-nav .owl-next {
            background-color: #fff;
            border-radius: 50%;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .owl-nav .owl-prev:hover, .owl-nav .owl-next:hover {
            background-color: #007bff;
            color: #fff;
        }

        .owl-nav .owl-prev i, .owl-nav .owl-next i {
            font-size: 18px;
        }

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

        .product-slider iframe {
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
            width: -webkit-fill-available;
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
            text-align: center;
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
            height: 200px;
            background-color: #ffffff;
            border-radius: 10px;
            border: 1px solid #bcbac4;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, background-image 0.3s ease;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 10px !important;
            cursor: pointer;
        }

        .service-card:hover .background-hover {
            opacity: 1;
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

        .service-card img {
            border-radius: 50%;
            height: 100px;
            -o-object-fit: cover;
            object-fit: cover;
            width: 100px;
        }

        .service-card:hover img {
            background-color: #a3bffa; /* Light blue shade on hover */
        }

        .service-card .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .service-card .service-icon {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }

        .service-card h5 {
            color: #333;
            margin-bottom: 10px;
        }

        .service-card p {
            color: #6c757d;
            margin-bottom: 20px;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .section-background {
            background-color: #f2f2f2;
            padding: 40px;
            border-radius: 10px;
        }

        .service-title {
            background: #949fff;
            opacity: 1.1;
            color: white !important;
            padding: 5px;
            border-radius: 30px;
        }

        .service-link {
            color: #000000 !important;
            box-shadow: 0 0 1px rgba(255, 255, 255, 0.5) !important;
        }

        .service-link:hover {
            color: #000000 !important;
            box-shadow: 0 0 1px rgba(255, 255, 255, 0.5) !important;
        }
    </style>
    <div class="home-page">
        <?php
        $title_var = "title_" . @Helper::currentLanguage()->code;
        $title_var2 = "title_" . config('smartend.default_language');
        $details_var = "details_" . @Helper::currentLanguage()->code;
        $details_var2 = "details_" . config('smartend.default_language');
        $file_var = "file_" . @Helper::currentLanguage()->code;
        ?>

        @include('frontEnd.layouts.slider')
        @include('frontEnd.homepage.row1')
        @if(!empty($categoryWithSpeciality))
            <section id="specialties" class="specialties">
                <div class="container">
                    <div class="section-title">
                        <h2>{{ __('frontend.productCategories') }}</h2>
                    </div>
                    <div class="specializations-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">
                            @foreach($categoryWithSpeciality as $key => $speciality)
                                <?php
                                if ($speciality->$title_var != "") {
                                    $title = $speciality->$title_var;
                                } else {
                                    $title = $speciality->$title_var2;
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
                                <div class="swiper-slide">
                                    <div class="service-card p-3 text-center">
                                        <div class="background-hover"
                                             style="background-image: url('{{ $categoryThumbnail }}');"></div>

                                        <div class="content d-flex flex-column justify-content-between h-100">
                                            <div class="service-icon">
                                                <img src="{{ $categoryThumbnail }}" alt="{{ $title }}">
                                            </div>
                                            <div class="mt-auto">
                                                <a href="{{ $category_link_url }}" class="service-link"
                                                   style="font-weight: bold; font-size: 18px;">{{ $title }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>
        @endif

        @include('frontEnd.homepage.row4')
        @include('frontEnd.homepage.row2')
        @include('frontEnd.homepage.row3')
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
