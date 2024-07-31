<?php
$home_page_id = Helper::GeneralWebmasterSettings("home_content4_section_id");
?>
@if($home_page_id >0)
    <?php
    $HomePage = Helper::Topic(Helper::GeneralWebmasterSettings("home_content4_section_id"));
    $page_form = @$HomePage->form;
    ?>
    @if(!empty($HomePage))
        @if(@$HomePage->$details_var !="")
            <section class="content-row-no-bg home-welcome">
                <div class="container">
                    {!! @$HomePage->$details_var !!}
                    @if(!empty($page_form))
                        <?php
                        $form_url = Helper::sectionURL($page_form->id);
                        ?>
                        <div class="text-center mt-3">
                            <a href="{{ $form_url }}" class="btn btn-lg btn-primary">
                                <i class="fa-solid fa-send-o"></i> {{ __('backend.submit') }} {!!  $page_form->{"title_".@Helper::currentLanguage()->code} !!}
                            </a>
                        </div>
                    @endif
                </div>
            </section>
        @endif
    @endif
@endif
<?php
$TextBanners = Helper::BannersList(Helper::GeneralWebmasterSettings("home_text_banners_section_id"));
?>
@if(count($TextBanners)>0)
    @foreach($TextBanners->slice(0,1) as $TextBanner)
        <?php
        try {
            $TextBanner_type = $TextBanner->webmasterBanner->type;
        } catch (Exception $e) {
            $TextBanner_type = 0;
        }
        ?>
    @endforeach
    <?php
    $title_var = "title_" . @Helper::currentLanguage()->code;
    $title_var2 = "title_" . config('smartend.default_language');
    $details_var = "details_" . @Helper::currentLanguage()->code;
    $details_var2 = "details_" . config('smartend.default_language');
    $file_var = "file_" . @Helper::currentLanguage()->code;
    $file_var2 = "file_" . config('smartend.default_language');

    $col_width = 12;
    if (count($TextBanners) == 2) {
        $col_width = 6;
    }
    if (count($TextBanners) == 3) {
        $col_width = 4;
    }
    if (count($TextBanners) > 3) {
        $col_width = 3;
    }
    ?>
    <section id="services" class="services">
        <div class="container">
            <div class="row">
                @foreach($TextBanners as $TextBanner)
                    <?php
                    if ($TextBanner->$title_var != "") {
                        $BTitle = $TextBanner->$title_var;
                    } else {
                        $BTitle = $TextBanner->$title_var2;
                    }
                    if ($TextBanner->$details_var != "") {
                        $BDetails = $TextBanner->$details_var;
                    } else {
                        $BDetails = $TextBanner->$details_var2;
                    }
                    if ($TextBanner->$file_var != "") {
                        $BFile = $TextBanner->$file_var;
                    } else {
                        $BFile = $TextBanner->$file_var2;
                    }
                    ?>
                    <div class="col-lg-{{$col_width}} col-md-6 d-flex align-items-stretch mb-3">
                        <div class="icon-box">
                            @if($TextBanner->code !="")
                                {!! $TextBanner->code !!}
                            @else

                                @if($TextBanner->link_url !="")
                                    <a href="{!! $TextBanner->link_url !!}">
                                        @endif
                                        @if($TextBanner->icon !="")
                                            <div class="icon">
                                                <i class="fa {{$TextBanner->icon}} fa-3x"></i>
                                            </div>
                                        @elseif($BFile !="")
                                            <img src="{{ URL::to('uploads/banners/'.$BFile) }}" loading="lazy"
                                                 alt="{{ $BTitle }}"/>
                                        @endif
                                        <h1>{!! $BTitle !!}</h1>
                                        @if($BDetails !="")
                                            <p>{!! nl2br($BDetails) !!}</p>
                                        @endif
                                        @if($TextBanner->link_url !="")
                                    </a>
                                @endif

                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endif



{{--// New Home page--}}
{{--<section class="content-row-no-bg">--}}
    {{--<div class="row" style="max-width: 100%; width: 100% !important;">--}}
        {{--<div class="col-lg-6 col-md-12 col-12">--}}
            {{--<?php--}}
            {{--$title_var = "title_" . @Helper::currentLanguage()->code;--}}
            {{--$title_var2 = "title_" . config('smartend.default_language');--}}
            {{--$details_var = "details_" . @Helper::currentLanguage()->code;--}}
            {{--$details_var2 = "details_" . config('smartend.default_language');--}}
            {{--?>--}}
            {{--@if(!empty($videos))--}}
                {{--<div id="videoSlider" class="carousel slide carousel-fade p-4" data-bs-ride="carousel"--}}
                     {{--data-bs-interval="5000">--}}
                    {{--<ol class="carousel-indicators" id="video-carousel-indicators">--}}
                        {{--@foreach($videos as $index => $video)--}}
                            {{--<li data-bs-target="#videoSlider" data-bs-slide-to="{{ $index }}"--}}
                                {{--class="{{ $index == 0 ? 'active' : '' }}"></li>--}}
                        {{--@endforeach--}}
                    {{--</ol>--}}

                    {{--<div class="carousel-inner">--}}
                        {{--<div class="text-center">--}}
                            {{--<h4>{{ __('backend.videos') }}</h4>--}}
                        {{--</div>--}}
                        {{--@foreach($videos as $index => $video)--}}
                            {{--<?php--}}
                            {{--$BTitle = $video->$title_var ?: $video->$title_var2;--}}
                            {{--$BDetails = $video->$details_var ?: $video->$details_var2;--}}
                            {{--$BFile = $video->photo_file;--}}
                            {{--?>--}}
                            {{--<div class="carousel-item {{ $index == 0 ? 'active' : '' }}"--}}
                                 {{--style="height: 300px !important; background-image: url('{{ URL::to('uploads/topics/'.$video->photo_file) }}'); border: 2px solid; background-size: cover; background-repeat: no-repeat">--}}
                                {{--<div class="carousel-container"--}}
                                     {{--style="height: 100%; display: flex; align-items: center; justify-content: center;">--}}
                                    {{--<div class="carousel-content container" style="text-align: left;">--}}
                                        {{--<div class="slider-content"--}}
                                        {{--style="display: inline-block; background: rgba(0, 0, 0, 0.8); padding: 20px; border-radius: 5px;">--}}
                                        {{--@if($BTitle)--}}
                                        {{--<h2 class="animate__animated animate__fadeInDown slider-title text-white">{!! $BTitle !!}</h2>--}}
                                        {{--@endif--}}
                                        {{--@if($BDetails)--}}
                                        {{--<p class="animate__animated animate__fadeInUp slider-details text-white">{!! nl2br($BDetails) !!}</p>--}}
                                        {{--@endif--}}
                                        {{--<a href="{!! Helper::topicURL($video->id) !!}"--}}
                                        {{--class="btn-theme animate__animated animate__fadeInUp slider-link">{{ __('frontend.moreDetails') }}</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}

                    {{--@if(count($videos) > 1)--}}
                        {{--<a class="carousel-control-prev" href="#videoSlider" role="button" data-bs-slide="prev">--}}
                            {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
                            {{--<span class="visually-hidden">Previous</span>--}}
                        {{--</a>--}}
                        {{--<a class="carousel-control-next" href="#videoSlider" role="button" data-bs-slide="next">--}}
                            {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
                            {{--<span class="visually-hidden">Next</span>--}}
                        {{--</a>--}}
                    {{--@endif--}}
                {{--</div>--}}
            {{--@endif--}}
        {{--</div>--}}

        {{--<div class="col-lg-6 col-md-12 col-12">--}}
            {{--<?php--}}
            {{--$title_var = "title_" . @Helper::currentLanguage()->code;--}}
            {{--$title_var2 = "title_" . config('smartend.default_language');--}}
            {{--$details_var = "details_" . @Helper::currentLanguage()->code;--}}
            {{--$details_var2 = "details_" . config('smartend.default_language');--}}
            {{--$file_var = "file_" . @Helper::currentLanguage()->code;--}}
            {{--$file_var2 = "file_" . config('smartend.default_language');--}}
            {{--?>--}}
            {{--@if(!empty($products))--}}
                {{--<div id="productSlider" class="carousel slide carousel-fade p-4" data-bs-ride="carousel"--}}
                     {{--data-bs-interval="5000">--}}
                    {{--<ol class="carousel-indicators" id="product-carousel-indicators">--}}
                        {{--@foreach($products as $index => $product)--}}
                            {{--<li data-bs-target="#productSlider" data-bs-slide-to="{{ $index }}"--}}
                                {{--class="{{ $index == 0 ? 'active' : '' }}"></li>--}}
                        {{--@endforeach--}}
                    {{--</ol>--}}

                    {{--<div class="carousel-inner">--}}
                        {{--<div class="text-center">--}}
                            {{--<h4>{{ __('backend.products') }}</h4>--}}
                        {{--</div>--}}
                        {{--@foreach($products as $index => $product)--}}
                            {{--<?php--}}
                            {{--$BTitle = $product->$title_var ?: $product->$title_var2;--}}
                            {{--$BDetails = $product->$details_var ?: $product->$details_var2;--}}
                            {{--?>--}}
                            {{--<div class="carousel-item {{ $index == 0 ? 'active' : '' }}"--}}
                                 {{--style="height: 300px !important; background-image: url('{{ !empty($product->cover_photo) ? URL::to('uploads/topics/'.$product->cover_photo) : URL::to('uploads/topics/'.$product->photo_file) }}'); border: 2px solid; background-size: cover; background-repeat: no-repeat">--}}
                                {{--<div class="carousel-container"--}}
                                     {{--style="height: 100%; display: flex; align-items: center; justify-content: center;">--}}
                                    {{--<div class="carousel-content container" style="text-align: left;">--}}
                                        {{--<div class="slider-content"--}}
                                        {{--style="display: inline-block; background: rgba(0, 0, 0, 0.8); padding: 20px; border-radius: 5px;">--}}
                                        {{--@if($BTitle)--}}
                                        {{--<h2 class="animate__animated animate__fadeInDown slider-title text-white">{!! $BTitle !!}</h2>--}}
                                        {{--@endif]--}}
                                        {{--<a href="{!! Helper::topicURL($product->id) !!}"--}}
                                        {{--class="btn-theme animate__animated animate__fadeInUp slider-link">{{ __('frontend.moreDetails') }}</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}

                    {{--@if(count($products) > 1)--}}
                        {{--<a class="carousel-control-prev" href="#productSlider" role="button" data-bs-slide="prev">--}}
                            {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
                            {{--<span class="visually-hidden">Previous</span>--}}
                        {{--</a>--}}
                        {{--<a class="carousel-control-next" href="#productSlider" role="button" data-bs-slide="next">--}}
                            {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
                            {{--<span class="visually-hidden">Next</span>--}}
                        {{--</a>--}}
                    {{--@endif--}}
                {{--</div>--}}
            {{--@endif--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
