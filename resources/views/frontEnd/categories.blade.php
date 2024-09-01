@extends('frontEnd.layouts.master')

@section('content')
    <style>
        @media (max-width: 768px) {
            .text-size-mb {
                font-size: 14px !important;
            }
        }
    </style>
    <div>
        <?php
        $title_var = "title_" . @Helper::currentLanguage()->code;
        $title_var2 = "title_" . config('smartend.default_language');
        $description_var = "description_" . @Helper::currentLanguage()->code;
        $description_var2 = "description_" . config('smartend.default_language');
        $webmaster_section_title = "";
        $category_title = "";
        $page_title = "";
        $category_image = $mobile_category_image = "";
        if (@$WebmasterSection != "none") {
            if (@$WebmasterSection->$title_var != "") {
                $webmaster_section_title = @$WebmasterSection->$title_var;
            } else {
                $webmaster_section_title = @$WebmasterSection->$title_var2;
            }
            $page_title = $webmaster_section_title;
            if (@$WebmasterSection->photo != "") {
                $category_image = URL::to('uploads/topics/' . @$WebmasterSection->photo);
            }
        }
        if ($CurrentCategory != "none") {
            if (!empty($CurrentCategory)) {
                if (@$CurrentCategory->$title_var != "") {
                    $category_title = @$CurrentCategory->$title_var;
                } else {
                    $category_title = @$CurrentCategory->$title_var2;
                }
                if (@$CurrentCategory->$description_var != "") {
                    $categoryDescription = @$CurrentCategory->$description_var;
                } else {
                    $categoryDescription = @$CurrentCategory->$description_var2;
                }
                $page_title = $category_title;
                if (@$CurrentCategory->photo != "") {
                    $category_image = URL::to('uploads/sections/' . @$CurrentCategory->photo);
                }
                if (@$CurrentCategory->mobile_photo != "") {
                    $mobile_category_image = URL::to('uploads/sections/' . @$CurrentCategory->mobile_photo);
                }
            }
        }
        ?>
        @if($category_image !="")
            @include("frontEnd.topic.cover")
        @endif
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{ $page_title }}</h2>
                    <ol>
                        <li><a href="{{ Helper::homeURL() }}">{{ __("backend.home") }}</a></li>
                        @if(@$search_word !="")
                            <li class="active">{!! __("backend.search") !!}</li>
                        @elseif($webmaster_section_title !="")
                            <li class="active">
                                <a href="{{ Helper::sectionURL(@$WebmasterSection->id) }}">{{ $webmaster_section_title }}</a>
                            </li>
                        @elseif(@$search_word!="")
                            <li class="active">{{ @$search_word }}</li>
                        @else
                            <li class="active">{{ $User->name }}</li>
                        @endif
                        @if(!empty($mainCategory))
                            <li class="active">
                                @php
                                    $mainTitle = "title_" . @Helper::currentLanguage()->code;
                                @endphp
                                <a href="{{ Helper::categoryURL(@$mainCategory->id) }}">{{ $mainCategory->$mainTitle }}</a>
                            </li>
                        @endif
                        @if($category_title !="")
                            <li class="active">
                                @php
                                    $mainTitle = "title_" . @Helper::currentLanguage()->code;
                                @endphp
                                <a href="{{ Helper::categoryURL(@$CurrentCategory->id) }}">{{ $CurrentCategory->$mainTitle }}</a>
                            </li>
                        @endif
                    </ol>
                </div>

            </div>
        </section>
        <section id="content">
            <div class="container">
                <div class="row">
                    <div
                        class="col-lg-{{(@count($Categories)>1)? "12":"12"}} col-md-{{(@count($Categories)>1)? "12":"12"}} col-sm-12 col-xs-12">
                        @if(!empty($categoryDescription))
                            <h5 class="mt-3 text-muted text-size-mb">{!! $categoryDescription !!}</h5>
                        @endif
                        @if(@count($Categories) == 0)
                            <div class="p-5 card text-center no-data">
                                <i class="fa fa-desktop fa-5x opacity-50"></i>
                                <h5 class="mt-3 text-muted">{{ __('frontend.noData') }}</h5>
                            </div>
                        @else
                            <div class="row">
                                @if(@count($Categories) > 0)

                                    <?php
                                    $title_var = "title_" . @Helper::currentLanguage()->code;
                                    $title_var2 = "title_" . config('smartend.default_language');
                                    $details_var = "description_" . @Helper::currentLanguage()->code;
                                    $details_var2 = "description_" . config('smartend.default_language');
                                    $slug_var = "seo_url_slug_" . @Helper::currentLanguage()->code;
                                    $slug_var2 = "seo_url_slug_" . config('smartend.default_language');
                                    $i = 0;
                                    ?>
                                    @foreach($Categories as $category)
                                        <?php
                                        if ($category->$title_var != "") {
                                            $title = $category->$title_var;
                                        } else {
                                            $title = $category->$title_var2;
                                        }
                                        if ($category->$details_var != "") {
                                            $details = $details_var;
                                        } else {
                                            $details = $details_var2;
                                        }
                                        $categoryThumbnail = !empty($category->thumbnail) ? URL::to('uploads/sections/' . $category->thumbnail) : '';
                                        if (empty($categoryThumbnail)) {
                                            $categoryThumbnail = !empty($category->photo) ? URL::to('uploads/sections/' . $category->photo) : '';
                                        }

                                        $category_link_url = Helper::categoryURL($category->id);
                                        ?>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <article>
                                                <div class="card post-card pa-0 mb-4">
                                                    {{--video--}}
                                                    <a href="{{ $category_link_url }}">
                                                        <div class="image-container position-relative"
                                                             style="height: 200px; width: inherit;">
                                                            <img class="card-img-top" loading="lazy" width="100%"
                                                                 height="100%"
                                                                 src="{{ !empty($categoryThumbnail) ? $categoryThumbnail : URL::to('uploads/sections/default.png') }}"
                                                                 alt="{{ $title }}"/>
                                                        </div>
                                                    </a>
                                                    <div class="mt-3">
                                                        <a href="{{ $category_link_url }}">
                                                            <h3 class="card-title">
                                                                @if($category->icon !="")
                                                                    <i class="fa {!! $category->icon !!} "></i>&nbsp;
                                                                @endif
                                                                {{ $title }}
                                                            </h3>
                                                        </a>

                                                    <!--@if(strip_tags($category->$details) !="")-->
                                                        <!--    <p class="card-text mb-0 mt-2">-->
                                                    <!--        {!! mb_substr(strip_tags($category->$details),0, 180)."..." !!}-->
                                                        <!--        <a-->
                                                    <!--            href="{{ $category_link_url }}"-->
                                                    <!--            class="read-more-link">{{ __("frontend.moreDetails") }}</a>-->
                                                        <!--    </p>-->
                                                        <!--@endif-->
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@if (@in_array(@$WebmasterSection->type, [3]))
    @push('before-styles')
        <link rel="stylesheet"
              href="{{ URL::asset('assets/frontend/vendor/green-audio-player/css/green-audio-player.min.css') }}?v={{ Helper::system_version() }}"/>
    @endpush
    @push('after-scripts')
        <script
            src="{{ URL::asset('assets/frontend/vendor/green-audio-player/js/green-audio-player.min.js') }}?v={{ Helper::system_version() }}"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                GreenAudioPlayer.init({
                    selector: '.audio-player',
                    stopOthersOnPlay: true,
                    showTooltips: true,
                });
            });
        </script>
    @endpush
@endif
