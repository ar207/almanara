<meta charset="utf-8">
<title>{{(@$PageTitle !="")? @$PageTitle:Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code)}}</title>
<meta name="description" content="{{(@$PageDescription !="")? @$PageDescription:Helper::GeneralSiteSettings("site_desc_" . @Helper::currentLanguage()->code)}}"/>
<meta name="keywords" content="{{(@$PageKeywords !="")? @$PageKeywords:Helper::GeneralSiteSettings("site_keywords_" . @Helper::currentLanguage()->code)}}"/>
<meta name="author" content="{{ URL::to('') }}"/>

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link href="{{ URL::asset('assets/frontend/vendor/fontawesome/css/all.min.css') }}?v={{ date('YmdHis') }}"  rel="stylesheet" media/>
<link href="{{ URL::asset('assets/frontend/vendor/fontawesome/css/font-awesome.min.css') }}?v={{ date('YmdHis') }}" rel="stylesheet" media/>
<link href="{{ URL::asset('assets/frontend/vendor/animate.css/animate.min.css') }}?v={{ date('YmdHis') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}?v={{ date('YmdHis') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}?v={{ date('YmdHis') }}" media rel="stylesheet"/>

<link rel="stylesheet" href="{{ URL::asset('assets/frontend/vendor/glightbox/css/glightbox.min.css') }}?v={{ date('YmdHis') }}">
<link rel="stylesheet" href="{{ URL::asset('assets/frontend/vendor/swiper/swiper-bundle.min.css') }}?v={{ date('YmdHis') }}">

<link rel="stylesheet" href="{{ URL::asset('assets/frontend/vendor/owl-carousel/assets/owl.carousel.min.css') }}?v={{ date('YmdHis') }}">
<link rel="stylesheet" href="{{ URL::asset('assets/frontend/vendor/owl-carousel/assets/owl.theme.default.min.css') }}?v={{ date('YmdHis') }}">

<link href="{{ URL::asset('assets/frontend/css/style.css') }}?v={{ date('YmdHis') }}" rel="stylesheet"/>


@if( @Helper::currentLanguage()->direction=="rtl")
 <style>
     @import url(https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400&display=swap);

     .me-auto, .me-md-auto {
         margin-left: auto !important
     }

     .me-3, .me-auto, .me-md-auto {
         margin-right: 0 !important
     }

     @font-face {
         font-family: smart4dsTitles;
         src: url('../fonts/ar-fonts/smart4ds2.eot');
         src: url('../fonts/ar-fonts/smart4ds2.eot?#iefix') format('embedded-opentype'), url('../fonts/ar-fonts/smart4ds2.woff') format('woff'), url('../fonts/ar-fonts/smart4ds2.ttf') format('truetype');
         font-weight: 400;
         font-style: normal
     }

     #hero h2, * {
         font-family: Tajawal, sans-serif
     }

     .categories-list .nav-link span, .navbar .nav-link, h1, h2, h3, h4, h5, h6 {
         font-family: smart4dsTitles, sans-serif
     }

     .header-dropdown .btn {
         margin-left: 0;
         margin-right: 15px
     }

     #hero .carousel-content, .accordion-item:last-of-type .accordion-button, .dropdown-menu {
         text-align: right
     }

     .navbar .dropdown ul, .staff .member span::after {
         right: 0;
         left: auto
     }

     .navbar .dropdown .dropdown ul, .navbar .dropdown .dropdown:hover > ul {
         right: 100%;
         left: auto
     }

     .navbar > ul > li {
         padding: 8px 25px 23px 0
     }

     .navbar-mobile > ul > li {
         padding: 0
     }

     .navbar a .drop-arrow {
         margin-left: 0;
         margin-right: 5px
     }

     .navbar .dropdown ul a .drop-arrow {
         right: auto;
         left: 15px
     }

     .navbar .dropdown ul a {
         padding: 10px 20px 10px 40px
     }

     .navbar-mobile .mobile-nav-toggle {
         right: auto;
         left: 35px
     }

     .navbar .dropdown ul a .fa {
         margin-right: 0;
         margin-left: 5px
     }

     @media (max-width: 992px) {
         #hero .carousel-content {
             text-align: center
         }
     }

     #footer .footer-newsletter form button, .alert-dismissible .btn-close {
         right: auto;
         left: 0
     }

     .alert-dismissible {
         padding-right: 1rem;
         padding-left: 3rem
     }

     .text-md-start {
         text-align: right !important
     }

     .breadcrumbs ol li + li {
         padding-left: 0;
         padding-right: 10px
     }

     .breadcrumbs ol li + li::before {
         padding-right: 0;
         padding-left: 10px
     }

     .text-end {
         text-align: left !important
     }

     .pagination {
         padding-right: 0
     }

     .input-group:not(.has-validation) > :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating), .page-item:first-child .page-link {
         border-radius: 0 .375rem .375rem 0
     }

     .input-group > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback), .page-item:last-child .page-link {
         border-radius: .375rem 0 0 .375rem
     }

     .sidebar-list .list-group .list-group .list-group-item {
         border: none;
         padding-left: 0;
         padding-right: .5rem
     }

     .list-group {
         padding: .5rem
     }

     .sidebar-list .list-group .badge {
         float: left
     }

     .extra-images-count {
         right: auto;
         left: 18px
     }

     .me-3 {
         margin-left: 1rem !important
     }

     .contact .info i {
         float: right
     }

     .contact .info h4, .contact .info p {
         padding: 0 60px 0 0;
         font-size: 16px
     }

     .back-to-top {
         right: 15px;
         left: auto
     }

     .whatsapp_float {
         left: 15px;
         right: auto
     }

     .form-switch {
         padding-right: 2.5em;
         padding-left: 0
     }

     .form-check .form-check-input {
         float: right;
         margin-right: -2.5em;
         margin-left: 0
     }

     .accordion-button::after {
         margin-right: auto;
         margin-left: 0
     }

     .header-form-search .btn {
         left: 0;
         right: auto;
         padding: 4px 8px
     }

     .header-form-search .form-control {
         padding: 5px 8px 1px
     }

     .staff .member .member-info {
         padding-left: 0;
         padding-right: 30px
     }

     .testimonials .testimonial-item .quote-icon-left {
         right: -5px;
         left: auto
     }

     .testimonials .testimonial-item .quote-icon-right {
         left: -5px;
         right: auto
     }

     .testimonials .testimonial-item p {
         font-style: normal
     }

     .testimonials .testimonial-item {
         padding: 30px 60px 30px 30px
     }

     .swiper-backface-hidden .swiper-slide {
         /*margin-right: 20px !important;*/
         margin-left: 0 !important
     }

     .testimonials .testimonial-item .testimonial-img {
         right: -35px;
         left: auto
     }

     .cookies-accept {
         left: 0;
         right: auto
     }

     @media screen and (max-width: 767px) {
         .whatsapp-icon {
             margin-top: 10px
         }

         .whatsapp_float {
             bottom: 20px;
             left: 10px;
             right: auto
         }

         .staff .member .member-info {
             padding: 0 !important
         }
     }
 </style>
@endif

<!-- Favicon and Touch Icons -->
@if(Helper::GeneralSiteSettings("style_fav") !="")
    <link href="{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_fav")) }}" rel="shortcut icon"
          type="image/png">
@else
    <link href="{{ URL::asset('uploads/settings/nofav.png') }}" rel="shortcut icon" type="image/png">
@endif
@if(Helper::GeneralSiteSettings("style_apple") !="")
    <link href="{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}" rel="apple-touch-icon">
    <link href="{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}" rel="apple-touch-icon"
          sizes="72x72">
    <link href="{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}" rel="apple-touch-icon"
          sizes="114x114">
    <link href="{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}" rel="apple-touch-icon"
          sizes="144x144">
@else
    <link href="{{ URL::asset('uploads/settings/nofav.png') }}" rel="apple-touch-icon">
    <link href="{{ URL::asset('uploads/settings/nofav.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ URL::asset('uploads/settings/nofav.png') }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ URL::asset('uploads/settings/nofav.png') }}" rel="apple-touch-icon" sizes="144x144">
@endif

<meta property='og:title'
      content='{{@$PageTitle}} {{(@$PageTitle =="")? Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code):""}}'/>
@if(@$Topic->photo_file !="")
    <meta property='og:image' content='{{ URL::asset('uploads/topics/'.@$Topic->photo_file) }}'/>
@elseif(Helper::GeneralSiteSettings("style_apple") !="")
    <meta property='og:image'
          content='{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}'/>
@else
    <meta property='og:image'
          content='{{ URL::asset('uploads/settings/nofav.png') }}'/>
@endif
<meta property="og:site_name" content="{{ Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code) }}">
<meta property="og:description" content="{{@$PageDescription}}"/>
<meta property="og:url" content="{{ url()->full()  }}"/>
<meta property="og:type" content="website"/>

<link rel="canonical" href="{{ url()->current() }}">

@if(Helper::GeneralSiteSettings("css")!="")
    <style type="text/css">
        {!! Helper::GeneralSiteSettings("css") !!}
    </style>
@endif
{{-- Google Tags and google analytics --}}
@if(@$WebmasterSettings->google_tags_status && @$WebmasterSettings->google_tags_id !="")
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','{!! @$WebmasterSettings->google_tags_id !!}');</script>
    <!-- End Google Tag Manager -->
@endif
