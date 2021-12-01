@extends('layout')
@section('content')
    <section class="preview">
        <div class="preview__wrapper">
            <div class="preview--left">
                <img src="{{asset('img/background/preview-bg.png')}}" alt="">
            </div>
            <div class="preview--center">
                <div class="container">
                    <div class="preview__body">
                        <h1 class="preview__title">
                            Новости
                            и пресс-релизы
                        </h1>
                        <div class="preview__desc">
                            Будьте в курсе всех новостей в мире кибербезопасности, узнайте, чем живет компания
                        </div>
                    </div>
                </div>
            </div>
            <div class="preview--right">
                <img src="{{asset('img/background/preview-15.png')}}" alt="">
            </div>
        </div>
    </section>
    <section class="zero just-align">
        <div class="container">
        @foreach($posts as $post)
        @if(($post->id) % 2==0)
            <div class="zero__row row">
                <img src="{{asset('upload/news/' . $post->img)}}" alt="img">
                <div class="zero__desc">
                    <div class="zero__date">
                        {{$post->created_at}}
                    </div>
                    <div class="zero__subtitle subtitle">
                       {{$post->header_ru}}
                    </div>
                    <div class="zero__text text">
                        {{ \Illuminate\Support\Str::limit($post->description_ru, 150, '...') }}
                                                    </div>
                    <a href="{{route('news-item',$post->id)}}" class="zero__link">
                        Читать полностью
                    </a>
                </div>
            </div>
        @else
            <div class="zero__row--resevre row">
                <div class="zero__desc">
                    <div class="zero__date">
                        {{$post->created_at}}
                    </div>
                    <div class="zero__subtitle subtitle">
                        {{$post->header_ru}}
                    </div>
                    <div class="zero__text text">
                        {{ \Illuminate\Support\Str::limit($post->description_ru, 150, '...') }}

                    </div>
                    <a href="{{route('news-item',$post->id)}}" class="zero__link">
                        Читать полностью
                    </a>
                </div>
                <img src="{{asset('upload/news/'.$post->img)}}" alt="img">
            </div>
        @endif
        @endforeach
            <button class="zero__btn btn">Загрузить еще</button>
        </div>
    </section>
@endsection
