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
        $category_title = $categoryDescription = "";
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
                    <h2>{{ !empty($category_title) ? $category_title : $page_title }}</h2>
                    <ol>
                        <li><a href="{{ Helper::homeURL() }}">{{ __("backend.home") }}</a></li>
                        @if(@$search_word !="")
                            <li class="active">{!! __("backend.search") !!}</li>
                        @elseif($webmaster_section_title !="")
                            <li class="active"><a
                                    href="{{ Helper::sectionURL(@$WebmasterSection->id) }}">{!! $webmaster_section_title !!}</a>
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
                        @if(!empty($subCategory))
                            <li class="active">
                                @php
                                    $mainTitle = "title_" . @Helper::currentLanguage()->code;
                                @endphp
                                <a href="{{ Helper::categoryURL(@$subCategory->id) }}">{{ $subCategory->$mainTitle }}</a>
                            </li>
                        @endif
                        @if($category_title !="")
                            <li class="active"><a
                                    href="{{ Helper::categoryURL(@$CurrentCategory->id) }}">{{ $category_title }}</a>
                            </li>
                        @endif
                    </ol>
                </div>

            </div>
        </section>
        <section id="content">
            <div class="container">
                <div class="row">
                    @if(@count($Categories)>1)
                        @include('frontEnd.layouts.side')
                    @endif
                    <div
                        class="col-lg-{{(@count($Categories)>1)? "9":"12"}} col-md-{{(@count($Categories)>1)? "7":"12"}} col-sm-12 col-xs-12">
                        @php
                            $description = "description_" . @Helper::currentLanguage()->code;
                        @endphp
                        @if(!empty($categoryDescription))
                            <h5 class="mt-3 text-muted text-size-mb">{!! $categoryDescription !!}</h5>
                        @endif
                        @if($Topics->total() == 0)
                            <div class="p-5 card text-center no-data">
                                <i class="fa fa-desktop fa-5x opacity-50"></i>
                                <h5 class="mt-3 text-muted">{{ __('frontend.noData') }}</h5>
                            </div>
                        @else
                            <div class="row">
                                @if($Topics->total() > 0)

                                    <?php
                                    $title_var = "title_" . @Helper::currentLanguage()->code;
                                    $title_var2 = "title_" . config('smartend.default_language');
                                    $details_var = "details_" . @Helper::currentLanguage()->code;
                                    $details_var2 = "details_" . config('smartend.default_language');
                                    $slug_var = "seo_url_slug_" . @Helper::currentLanguage()->code;
                                    $slug_var2 = "seo_url_slug_" . config('smartend.default_language');
                                    $i = 0;
                                    $cols_lg = 4;
                                    $cols_md = 6;
                                    if (count($Categories) > 0) {
                                        $cols_lg = 6;
                                        $cols_md = 12;
                                    }
                                    ?>
                                    @foreach($Topics as $Topic)
                                        <?php
                                        if ($Topic->$title_var != "") {
                                            $title = $Topic->$title_var;
                                        } else {
                                            $title = $Topic->$title_var2;
                                        }
                                        if ($Topic->$details_var != "") {
                                            $details = $details_var;
                                        } else {
                                            $details = $details_var2;
                                        }
                                        $mainCategoryId = !empty($mainCategory) ? $mainCategory->id : '';
                                        $subCategoryId = !empty($subCategory) ? $subCategory->id : '';
                                        $CurrentCategoryId = !empty($CurrentCategory) ? $CurrentCategory->id : '';

                                        $topic_link_url = Helper::topicURL($Topic->id, "", $CurrentCategoryId, $mainCategoryId, $subCategoryId);
                                        ?>
                                        <div
                                            class="col-lg-4 col-md-6 col-12">
                                            @include("frontEnd.topic.card",["Topic"=>$Topic])
                                        </div>
                                        <?php
                                        $i++;
                                        ?>
                                    @endforeach
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    {!! $Topics->appends($_GET)->links() !!}
                                </div>
                                {{--<div class="col-lg-4 text-end">--}}
                                {{--<h5 style="padding-top: 18px"><span--}}
                                {{--class="badge bg-primary">{{ $Topics->firstItem() }}</span>--}}
                                {{--- <span class="badge bg-primary">{{ $Topics->lastItem() }}</span>--}}
                                {{--<!--{{ __('backend.of') }}-->--}}
                                {{--<!--( {{ $Topics->total()  }} ) {{ __('backend.records') }}-->--}}
                                {{--</h5>--}}
                                {{--</div>--}}
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
