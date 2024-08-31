<div class="container my-5">
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
                $newsDate = Helper::formatDate($new->date);
                $newsUrl = Helper::topicURL($new->id);
                ?>
            @endif
        @endforeach
        <div class="row">
            <div class="col-lg-8">
                <div class="news-card">
                    <div class="position-relative">
                        <img src="{{ $newsImage }}"
                             style="height:400px; width:100%" alt="{{ $title }}"
                             class="img-fluid news-image">
                    </div>
                    <div class="news-content">
                        <a href="{{ $newsUrl }}" class="h4">{{ $title }}</a>
                        <p class="text-muted">{{ $newsDate }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="news-list">
                    @if(count($news) > 0)
                        @foreach($news as $index => $new)
                            @if($index > 0)
                                <?php
                                if ($new->$title_var != "") {
                                    $title = $new->$title_var;
                                } else {
                                    $title = $new->$title_var2;
                                }
                                $newsImage = !empty($new->photo_file) ? URL::to('uploads/topics/' . $new->photo_file) : URL::to('uploads/topics/default.png');

                                $newsUrl = Helper::topicURL($new->id);
                                ?>
                                <div class="news-list-item d-flex mb-4">
                                    {{--<img src="{{ $newsImage }}"--}}
                                    {{--style="height: 120px !important; width: 120px !important;"--}}
                                    {{--alt="{{ $title }}" class="mr-3">--}}
                                    <div style="margin-left: 5px;">
                                        <a class="h6" href="{{ $newsUrl }}">{{ $title }}</a>
                                        <p class="text-muted mb-0">{{ Helper::formatDate($new->date) }}</p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
