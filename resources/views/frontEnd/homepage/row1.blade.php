<section class="content-row-no-bg">
    <div class="row" style="max-width: 100%; width: 100% !important;">
        <div class="col-lg-6 col-md-12 col-12">
            <?php
            $title_var = "title_" . @Helper::currentLanguage()->code;
            $title_var2 = "title_" . config('smartend.default_language');
            $details_var = "details_" . @Helper::currentLanguage()->code;
            $details_var2 = "details_" . config('smartend.default_language');
            ?>
            @if(!empty($videos))
                <div id="videoSlider" class="carousel slide carousel-fade p-4" data-bs-ride="carousel"
                     data-bs-interval="5000">
                    <ol class="carousel-indicators" id="video-carousel-indicators">
                        @foreach($videos as $index => $video)
                            <li data-bs-target="#videoSlider" data-bs-slide-to="{{ $index }}"
                                class="{{ $index == 0 ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>

                    <div class="carousel-inner">
                        <div class="text-center">
                            <h4>{{ __('backend.videos') }}</h4>
                        </div>
                        @foreach($videos as $index => $video)
                            <?php
                            $BTitle = $video->$title_var ?: $video->$title_var2;
                            $BDetails = $video->$details_var ?: $video->$details_var2;
                            $BFile = $video->photo_file;
                            ?>
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}"
                                 style="height: 300px !important; background-image: url('{{ URL::to('uploads/topics/'.$video->photo_file) }}'); border: 2px solid; background-size: cover; background-repeat: no-repeat">
                                <div class="carousel-container"
                                     style="height: 100%; display: flex; align-items: center; justify-content: center;">
                                    <div class="carousel-content container" style="text-align: left;">
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
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    @if(count($videos) > 1)
                        <a class="carousel-control-prev" href="#videoSlider" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#videoSlider" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    @endif
                </div>
            @endif
        </div>

        <div class="col-lg-6 col-md-12 col-12">
            <?php
            $title_var = "title_" . @Helper::currentLanguage()->code;
            $title_var2 = "title_" . config('smartend.default_language');
            $details_var = "details_" . @Helper::currentLanguage()->code;
            $details_var2 = "details_" . config('smartend.default_language');
            $file_var = "file_" . @Helper::currentLanguage()->code;
            $file_var2 = "file_" . config('smartend.default_language');
            ?>
            @if(!empty($products))
                <div id="productSlider" class="carousel slide carousel-fade p-4" data-bs-ride="carousel"
                     data-bs-interval="5000">
                    <ol class="carousel-indicators" id="product-carousel-indicators">
                        @foreach($products as $index => $product)
                            <li data-bs-target="#productSlider" data-bs-slide-to="{{ $index }}"
                                class="{{ $index == 0 ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>

                    <div class="carousel-inner">
                        <div class="text-center">
                            <h4>{{ __('backend.products') }}</h4>
                        </div>
                        @foreach($products as $index => $product)
                            <?php
                            $BTitle = $product->$title_var ?: $product->$title_var2;
                            $BDetails = $product->$details_var ?: $product->$details_var2;
                            ?>
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}"
                                 style="height: 300px !important; background-image: url('{{ !empty($product->cover_photo) ? URL::to('uploads/topics/'.$product->cover_photo) : URL::to('uploads/topics/'.$product->photo_file) }}'); border: 2px solid; background-size: cover; background-repeat: no-repeat">
                                <div class="carousel-container"
                                     style="height: 100%; display: flex; align-items: center; justify-content: center;">
                                    <div class="carousel-content container" style="text-align: left;">
                                        {{--<div class="slider-content"--}}
                                             {{--style="display: inline-block; background: rgba(0, 0, 0, 0.8); padding: 20px; border-radius: 5px;">--}}
                                            {{--@if($BTitle)--}}
                                                {{--<h2 class="animate__animated animate__fadeInDown slider-title text-white">{!! $BTitle !!}</h2>--}}
                                            {{--@endif]--}}
                                            {{--<a href="{!! Helper::topicURL($product->id) !!}"--}}
                                               {{--class="btn-theme animate__animated animate__fadeInUp slider-link">{{ __('frontend.moreDetails') }}</a>--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    @if(count($products) > 1)
                        <a class="carousel-control-prev" href="#productSlider" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#productSlider" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    @endif
                </div>
            @endif
        </div>
    </div>
</section>
