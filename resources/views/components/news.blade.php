<section class="news">
    <div class="container">
        <div class="news__header">
            <div class="news__title">Новости</div>
            <a href="{{route('news')}}" class="news__btn btn">Все новости</a>
        </div>
        <div class="news__row">
        @foreach($news as $post)
            <div class="news__seminar">
                <img src="{{'/upload/news/' . $post->img}}" alt="Image">
                <div class="news__desc">
                    <div class="news__date">
                        {{$post->created_at}}
                    </div>
                    <div class="news__subtitle">
                        {{$post->header_ru}}
                    </div>
                    <div class="news__text">
                        {{$post->description_ru}}
                    </div>
                    <a href="{{route('news-item', ['post' => $post])}}" class="news__link">
                        Читать полностью
                    </a>
                </div>
            </div>
            @break
        @endforeach

            <div class="news__list">
            @foreach($news as $post)
                @if($loop->index)
                    <div class="news__item">
                        <div class="news__subtitle w">
                            Семинар Robe
                        </div>
                        <div class="news__text">
                            30 января 2021 года наши сотрудники побывали...
                        </div>
                        <div class="news__xz">
                            <img src="{{"/upload/news/" . $post->img}}">
                            <div class="news__subdate">
                                27.03.2021
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            </div>
        </div>
    </div>
</section>
