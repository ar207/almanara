@extends('frontEnd.layouts.master')

@section('content')
    <div>
        <?php
        $title_var = "title_" . @Helper::currentLanguage()->code;
        $title_var2 = "title_" . config('smartend.default_language');
        $webmaster_section_title = "";
        $category_title = $categoryDescription = "";
        $page_title = "";
        $category_image = "";
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
        ?>
        @if($category_image !="")
            @include("frontEnd.topic.cover")
        @endif
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{  (@$search_word !="")?(__('backend.resultsFoundFor')." [ ".@$search_word." ]"):$page_title }}</h2>
                    <ol>
                        <li><a href="{{ Helper::homeURL() }}">{{ __("backend.home") }}</a></li>
                        @if(@$search_word !="")
                            <li class="active">{!! __("backend.search") !!}</li>
                        @elseif($webmaster_section_title !="")
                            <li class="active">
                                <a href="{{ Helper::sectionURL(@$WebmasterSection->id) }}">{!! $webmaster_section_title !!}</a>
                            </li>
                        @elseif(@$currentSpeciality!="")
                            <li class="active">{{ @$search_word }}</li>
                        @else
                            <li class="active">{{ $User->name }}</li>
                        @endif
                        @if(!empty($currentSpeciality))
                            <li class="active">{{ $currentSpeciality }}</li>
                        @endif
                    </ol>
                </div>

            </div>
        </section>
        <section id="content">
            <div class="container">
                <div class="row">
                    <div
                        class="col-lg-{{ !empty($specialities) ? "9" : "12" }} col-md-{{ !empty($specialities) ? "7" : "12" }} col-sm-12 col-xs-12">
                        @if(empty($currentSpeciality))
                            @if(empty($specialities))
                                <div class="p-5 card text-center no-data">
                                    <i class="fa fa-desktop fa-5x opacity-50"></i>
                                    <h5 class="mt-3 text-muted">{{ __('frontend.noData') }}</h5>
                                </div>
                            @else
                                <div class="row">
                                    @if($specialities)
                                        @foreach($specialities as $key => $value)
                                            @php
                                                $url = url('specialities') . '?speciality_id=' . $key + 1;
                                            @endphp
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="card">
                                                    <a href="{{ $url }}" class="text-center">
                                                        <h4>{{ $value }}</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            @endif
                        @else
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

                                            $topic_link_url = Helper::topicURL($Topic->id);
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
                                    <div class="col-lg-4 text-end">
                                        <h5 style="padding-top: 18px"><span
                                                class="badge bg-primary">{{ $Topics->firstItem() }}</span>
                                            - <span class="badge bg-primary">{{ $Topics->lastItem() }}</span>
                                        <!--{{ __('backend.of') }}-->
                                        <!--( {{ $Topics->total()  }} ) {{ __('backend.records') }}-->
                                        </h5>
                                    </div>
                                </div>
                            @endif
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
