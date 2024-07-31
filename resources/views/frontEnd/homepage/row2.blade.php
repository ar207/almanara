<?php
$HomeTopicsLimit = 12; // 0 = all
$HomeTopics = Helper::Topics(Helper::GeneralWebmasterSettings("home_content1_section_id"), 0, $HomeTopicsLimit);
$require_mp3_player = 0;
?>
@if(count($HomeTopics)>0)
    <section class="section-bg">

        <div class="container">

            <div class="section-title">
                <h2>{{ __('frontend.homeContents1Title') }}</h2>
                <p>{{ __('frontend.homeContents1desc') }}</p>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="owl-slider" class="owl-carousel owl-theme listing">
                        <?php
                        $section_url = "";
                        ?>
                        @foreach($HomeTopics as $Topic)
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
                            if ($section_url == "") {
                                $section_url = Helper::sectionURL($Topic->webmaster_id);
                            }
                            $topic_link_url = Helper::topicURL($Topic->id);
                            $HomeSectionType = @$Topic->webmasterSection->type;
                            if (!@$require_mp3_player && $HomeSectionType == 3) {
                                $require_mp3_player = 1;
                            }
                            ?>
                            <div class="item">
                                @include("frontEnd.topic.card",["Topic"=>$Topic])
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="more-btn">
                        <a href="{{ url($section_url) }}" class="btn btn-theme"><i
                                class="fa fa-angle-left"></i>&nbsp; {{ __('frontend.viewMore') }}
                            &nbsp;<i
                                class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    @if ($require_mp3_player)
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
@endif



{{--<style>--}}
    {{--.whats-new-title {--}}
        {{--font-size: 2rem;--}}
        {{--font-weight: bold;--}}
        {{--margin-bottom: 20px;--}}
    {{--}--}}

    {{--.whats-new-subtitle {--}}
        {{--font-size: 1.2rem;--}}
        {{--margin-bottom: 20px;--}}
    {{--}--}}

    {{--.large-image {--}}
        {{--width: 100%;--}}
        {{--height: auto;--}}
        {{--margin-bottom: 20px;--}}
    {{--}--}}

    {{--.scrollable-section {--}}
        {{--max-height: 400px;--}}
        {{--overflow-y: auto;--}}
    {{--}--}}

    {{--@media(max-width: 600px) {--}}
        {{--.scrollable-section {--}}
            {{--margin-top: 5px;--}}
        {{--}--}}
    {{--}--}}

    {{--.news-item {--}}
        {{--padding: 5px;--}}
        {{--margin-bottom: 20px;--}}
    {{--}--}}

    {{--.border-2px {--}}
        {{--border: 2px solid;--}}
    {{--}--}}

    {{--.news-item img {--}}
        {{--width: 100%;--}}
        {{--height: auto;--}}
        {{--margin-bottom: 10px;--}}
    {{--}--}}
{{--</style>--}}

{{--<?php--}}
{{--$title_var = "title_" . @Helper::currentLanguage()->code;--}}
{{--$title_var2 = "title_" . config('smartend.default_language');--}}
{{--$details_var = "details_" . @Helper::currentLanguage()->code;--}}
{{--$details_var2 = "details_" . config('smartend.default_language');--}}
{{--$slug_var = "seo_url_slug_" . @Helper::currentLanguage()->code;--}}
{{--$slug_var2 = "seo_url_slug_" . config('smartend.default_language');--}}
{{--$title = '';--}}
{{--$image = '';--}}
{{--?>--}}

{{--<div class="container my-5">--}}
    {{--@foreach($news as $index => $new)--}}
        {{--@if($index == 0)--}}
            {{--<?php--}}
            {{--if ($new->$title_var != "") {--}}
                {{--$title = $new->$title_var;--}}
            {{--} else {--}}
                {{--$title = $new->$title_var2;--}}
            {{--}--}}
            {{--$newsImage = !empty($new->photo_file) ? URL::to('uploads/topics/' . $new->photo_file) : URL::to('uploads/topics/default.png');--}}
            {{--?>--}}
        {{--@endif--}}
    {{--@endforeach--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="border-2px">--}}
                {{--<img--}}
                    {{--src="{{ $newsImage }}"--}}
                    {{--class="large-image" alt="{{ $title }}">--}}
                {{--<div class="whats-new-title">{{ $title }}</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-4">--}}
            {{--<div class="scrollable-section">--}}
                {{--@if(count($news) > 0)--}}
                    {{--@foreach($news as $index => $new)--}}
                        {{--@if($index > 0)--}}
                            {{--<?php--}}
                            {{--if ($new->$title_var != "") {--}}
                                {{--$title = $new->$title_var;--}}
                            {{--} else {--}}
                                {{--$title = $new->$title_var2;--}}
                            {{--}--}}
                            {{--if ($new->$details_var != "") {--}}
                                {{--$details = $details_var;--}}
                            {{--} else {--}}
                                {{--$details = $details_var2;--}}
                            {{--}--}}

                            {{--$topic_link_url = Helper::topicURL($new->id);--}}
                            {{--?>--}}
                            {{--<div class="news-item border-2px">--}}
                                {{--<a href="{{ $topic_link_url }}">--}}
                                    {{--<p><strong>{{ $title }}</strong></p>--}}
                                    {{--<p class="text-danger">{{ __('backend.customFieldsType4') }}--}}
                                        {{--: {!! Helper::formatDate($new->date)  !!}</p>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--@endif--}}
                    {{--@endforeach--}}
                {{--@endif--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
