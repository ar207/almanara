<?php
// Get banners list array by settings ID (You can get settings ID from Webmaster >> Banners settings)
$videos = Helper::BannersList(5, 0, 1);
$products = Helper::BannersList(6, 1, 0);
$colClass = 'col-sm-6 col-12';
if (!empty(count($videos)) && empty(count($products))) {
    $colClass = 'col-12';
}
if (!empty(count($products)) && empty(count($videos))) {
    $colClass = 'col-12';
}
?>
@if(count($products) > 0 || count($videos) > 0)
    <div class="container my-5 section-background">
        <div class="row">
            @if(!empty(count($products)))
                <div class="{{ $colClass }}">
                    <div class="products-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">
                            @foreach($products as $key => $product)
                                <?php
                                if ($product->$title_var != "") {
                                    $title = $product->$title_var;
                                } else {
                                    $title = $product->$title_var2;
                                }
                                ?>
                                <div class="swiper-slide">
                                    <div class="product-slider" style="margin-left: 41px!important;">
                                        <img
                                            @if(!empty($product->photo_file))
                                            src="{{ URL::to('uploads/topics/'.$product->photo_file) }}"
                                            @elseif(!empty($product->$file_var))
                                            src="{{ URL::to('uploads/banners/'.$product->$file_var) }}"
                                            @endif
                                            loading="lazy"
                                            class="d-block" alt="{{ $title }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            @endif
            @if(!empty(count($videos)))
                <div class="{{ $colClass }}">
                    <div class="videos-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">
                            @foreach($videos as $key => $video)
                                <?php
                                if ($video->$title_var != "") {
                                    $title = $video->$title_var;
                                } else {
                                    $title = $video->$title_var2;
                                }
                                ?>
                                <div class="swiper-slide">
                                    <div class="product-slider" style="margin-left: 45px!important;">
                                        @if($video->video_type ==1)
                                            <?php
                                            $Youtube_id = Helper::Get_youtube_video_id(!empty($video->video_file) ? $video->video_file : $video->youtube_link);
                                            ?>
                                            @if($Youtube_id !="")
                                                {{-- Youtube Video --}}
                                                <iframe allowfullscreen
                                                        src="https://www.youtube.com/embed/{{ $Youtube_id }}?mute=1"
                                                        allow="autoplay">
                                                </iframe>
                                            @endif
                                        @elseif($video->video_type ==2)
                                            <?php
                                            $Vimeo_id = Helper::Get_vimeo_video_id(!empty($video->video_file) ? $video->video_file : $video->youtube_link);
                                            ?>
                                            @if($Vimeo_id !="")
                                                {{-- Vimeo Video --}}
                                                <iframe allowfullscreen
                                                        src="https://player.vimeo.com/video/{{ $Vimeo_id }}?title=0&amp;byline=0"
                                                        allow="autoplay">
                                                </iframe>
                                            @endif

                                        @elseif($video->video_type ==3)
                                            {{-- Embed Video --}}
                                            {!! $video->video_file !!}
                                        @else
                                            <video class="video-js" controls preload="auto" width="100%"
                                                   style="border-radius: 10px"
                                                   height="500"
                                                   @if(!empty($video->photo_file)) poster="{{ URL::to('uploads/topics/'.$video->photo_file) }}"
                                                   @endif
                                                   data-setup="{}">
                                                <source
                                                    @if(!empty($video->video_file))
                                                    src="{{ URL::to('uploads/topics/'.$video->video_file) }}"
                                                    @elseif(!empty($video->$file_var))
                                                    src="{{ URL::to('uploads/banners/'.$video->$file_var) }}"
                                                    @endif
                                                    type="video/mp4"/>
                                                <p class="vjs-no-js">
                                                    To view this video please enable JavaScript, and consider
                                                    upgrading
                                                    to a
                                                    web browser that
                                                    <a href="https://videojs.com/html5-video-support/"
                                                       target="_blank">supports
                                                        HTML5 video</a>
                                                </p>
                                            </video>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endif
