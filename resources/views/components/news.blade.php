<section class="zero just-align">
    <div class="container">
        <div class="title" style="margin-bottom: 25px">
            Новости и пресс-релизы
        </div>
@foreach($news as $post)
    @if(($post->id) % 2 == 0)
        <div class="zero__row row">
            <img src="{{asset('upload/news/' . $post->img)}}" alt="img">
            <div class="zero__desc">
                <div class="zero__date">
                    {{$post->created_at->format('d.m.Y')}}
                </div>
                <div class="zero__subtitle subtitle">
                    {{$post->header_ru}}
                </div>
                <div class="zero__text text">
                    {{ \Illuminate\Support\Str::limit($post->description_ru, 310, '...') }}
                </div>
                <a href="{{route('news-item', $post->id)}}" class="zero__link">
                    Читать полностью
                </a>
            </div>
        </div>
    @else
        <div class="zero__row--resevre row">
            <div class="zero__desc">
                <div class="zero__date">
                    {{$post->created_at->format('d.m.Y')}}
                </div>
                <div class="zero__subtitle subtitle">
                    {{$post->header_ru}}
                </div>
                <div class="zero__text text">
                    {{ \Illuminate\Support\Str::limit($post->description_ru, 310, '...') }}
                </div>
                <a href="{{route('news-item', $post->id)}}" class="zero__link">
                    Читать полностью
                </a>
            </div>
            <img src="{{asset('upload/news/' . $post->img)}}" alt="img">
        </div>
    @endif
@endforeach
        <div class="text-center map__btn">
            <a href="{{route('news')}}" class="btn">
                Все новости
            </a>
        </div>
    </div>
</section>
