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
                <div class="zero__row row">
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



                <div class="zero__row--resevre row">
                    <div class="zero__desc">
                        <div class="zero__date">
                            5.11.2021
                        </div>
                        <div class="zero__subtitle subtitle">
                            Wallix & Abris укрепляет корпоративную
                            кибербезопасность
                        </div>
                        <div class="zero__text text">
                            Париж, 11 мая, 2021 – WALLIX, (котируется на бирже Euronext ALLIX) Европейский издатель кибербезопасности, программного обеспечения и эксперт в области удостоверениями и доступом решений безопасности, объявляет о технологическом партнерстве и интегрирует адррес cybernova работы Центра решений...
                        </div>
                        <a href="#" class="zero__link">
                            Читать полностью
                        </a>
                    </div>
                    <img src="{{asset('assets/img/zero-38.jpg')}}" />
                </div>
                @endforeach
                <div class="zero__row row">
                    <img src="{{asset('assets/img/zero-35.jpg')}}" />
                    <div class="zero__desc">
                        <div class="zero__date">
                            4.29.2021
                        </div>
                        <div class="zero__subtitle subtitle">
                            Wallix & Abris укрепляет свои позиции
                            в промышленном секторе
                        </div>
                        <div class="zero__text text">
                            Париж, 29 апреля 2021 г. – WALLIX(Euronext ALLIX), европейский издатель программного обеспечения для кибербезопасности и эксперт в области решений для обеспечения безопасности идентификации и доступа, нанимает Йоанна Деломье в качестве разработчика OT Business Developer , который присоединяется к команде...
                        </div>
                        <a href="#" class="zero__link">
                            Читать полностью
                        </a>
                    </div>
                </div>
                <div class="zero__row--resevre row">
                    <div class="zero__desc">
                        <div class="zero__date">
                            3.02.2021
                        </div>
                        <div class="zero__subtitle subtitle">
                            Аэропорт Бордо доверяет Wallix & Abris
                            защиту своих данных
                        </div>
                        <div class="zero__text text">
                            Париж, 2 марта 2020 г. – С июля 2019 года компанияWALLIX (Euronext ALLIX), европейский издатель программного обеспечения для кибербезопасности и эксперт в области решений для обеспечения безопасности идентификации и доступа, работает с аэропортом Бордо над решением проблем защиты данных в секторе воздушного транспорта.
                        </div>
                        <a href="#" class="zero__link">
                            Читать полностью
                        </a>
                    </div>
                    <img src="{{asset('assets/img/zero-39.jpg')}}" />
                </div>
                <button class="zero__btn btn">
                    Загрузить еще
                </button>
            </div>
        </section>



    @section('footer')
        <x-footer></x-footer>
    @endsection
</x-layout>
