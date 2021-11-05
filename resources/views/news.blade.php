<x-layout>
    @section('header')
        <x-header></x-header>
    @endsection
        <section
            class="preview"
            style="background: url('./assets/img/background/priview-bg.png') no-repeat">

            <img src="{{asset('assets/img/background/preview-15.png')}}" alt="" />
            <div class="container">
                <div class="preview__body">
                    <h1 class="preview__title">Новости
                        и пресс-релизы</h1>
                    <div class="preview__desc">
                        Будьте в курсе всех новостей в мире кибербезопасности, узнайте, чем живет компания
                    </div>
                </div>
            </div>
        </section>
        <section class="zero">
            <div class="container">
                @foreach($posts as $post)
                    @if(($post->id)%2==0)
                    <div class="zero__row pb-3 row">
                        <img src="{{asset('assets/img/zero-37.jpg')}}" />
                        <div class="zero__desc">
                            <div class="zero__date">
                                {{$post->created_at}}
                            </div>
                            <div class="zero__subtitle subtitle">
                               {{$post->header_ru}}
                            </div>
                            <div class="zero__text text">
                               {{$post->description_ru}}
                            </div>
                            <a href="#" class="zero__link">
                                Читать полностью
                            </a>

                        </div>
                    </div>
                    @else

                    <div class="zero__row--reserve pb-3 row">
                        <div class="zero__desc">
                            <div class="zero__date">
                                {{$post->created_at}}
                            </div>
                            <div class="zero__subtitle subtitle">
                                {{$post->header_ru}}
                            </div>
                            <div class="zero__text text">
                                {{$post->description_ru}}
                            </div>
                            <a href="#" class="zero__link">
                                Читать полностью
                            </a>
                        </div>
                        <img src="{{asset('assets/img/zero-38.jpg')}}" />
                    </div>
                    @endif
                @endforeach

                <button class="zero__btn btn">
                    Загрузить еще
                </button>
            </div>
        </section>



    @section('footer')
        <x-footer></x-footer>
    @endsection
</x-layout>
