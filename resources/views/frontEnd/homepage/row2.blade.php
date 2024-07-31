<style>
    .whats-new-title {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .whats-new-subtitle {
        font-size: 1.2rem;
        margin-bottom: 20px;
    }

    .large-image {
        width: 100%;
        height: auto;
        margin-bottom: 20px;
    }

    .scrollable-section {
        max-height: 400px;
        overflow-y: auto;
    }

    @media(max-width: 600px) {
        .scrollable-section {
            margin-top: 5px;
        }
    }

    .news-item {
        padding: 5px;
        margin-bottom: 20px;
    }

    .border-2px {
        border: 2px solid;
    }

    .news-item img {
        width: 100%;
        height: auto;
        margin-bottom: 10px;
    }
</style>

<?php
$title_var = "title_" . @Helper::currentLanguage()->code;
$title_var2 = "title_" . config('smartend.default_language');
$details_var = "details_" . @Helper::currentLanguage()->code;
$details_var2 = "details_" . config('smartend.default_language');
$slug_var = "seo_url_slug_" . @Helper::currentLanguage()->code;
$slug_var2 = "seo_url_slug_" . config('smartend.default_language');
$title = '';
$image = '';
?>

<div class="container my-5">
    @foreach($news as $index => $new)
        @if($index == 0)
            <?php
            if ($new->$title_var != "") {
                $title = $new->$title_var;
            } else {
                $title = $new->$title_var2;
            }
            $newsImage = !empty($new->photo_file) ? URL::to('uploads/topics/' . $new->photo_file) : URL::to('uploads/topics/default.png');
            ?>
        @endif
    @endforeach
    <div class="row">
        <div class="col-md-8">
            <div class="border-2px">
                <img
                    src="{{ $newsImage }}"
                    class="large-image" alt="{{ $title }}">
                <div class="whats-new-title">{{ $title }}</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="scrollable-section">
                @if(count($news) > 0)
                    @foreach($news as $index => $new)
                        @if($index > 0)
                            <?php
                            if ($new->$title_var != "") {
                                $title = $new->$title_var;
                            } else {
                                $title = $new->$title_var2;
                            }
                            if ($new->$details_var != "") {
                                $details = $details_var;
                            } else {
                                $details = $details_var2;
                            }

                            $topic_link_url = Helper::topicURL($new->id);
                            ?>
                            <div class="news-item border-2px">
                                <a href="{{ $topic_link_url }}">
                                    <p><strong>{{ $title }}</strong></p>
                                    <p class="text-danger">{{ __('backend.customFieldsType4') }}
                                        : {!! Helper::formatDate($new->date)  !!}</p>
                                </a>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
