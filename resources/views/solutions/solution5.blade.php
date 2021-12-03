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
                            Решения
                            по отраслям
                        </h1>
                        <div class="preview__desc">
                            Мы защищаем ваши данные и обеспечиваем
                            непрерывность ведения бизнеса
                        </div>
                    </div>
                </div>
            </div>
            <div class="preview--right"
                    style="background-image: url('{{'/img/background/preview-13.png'}}')">
                <img src="{{asset('img/background/preview-13.png')}}" alt="">
            </div>
        </div>
    </section>
    <section class="zero just-align">
        <div class="container">
            <div class="zero__row row">
                <img src="{{asset('assets/img/zero-34.jpg')}}" />
                <div class="zero__desc">
                    <div class="zero__subtitle subtitle">
                        Вы защищаете наше здоровье, мы
                        защищаем ваши данные о пациентах
                    </div>
                    <div class="zero__text text">
                        Сектор здравоохранения является наиболее целевой отраслью для хакеров. С уязвимым оборудованием и очень ценной электронной личной медицинской информацией (ePHI) ИТ-безопасность имеет решающее значение для больниц и медицинских организаций на всех уровнях.
                    </div>
                </div>
            </div>
            <div class="zero__row--resevre row">
                <div class="zero__desc">
                    <div class="zero__subtitle subtitle">
                        Защита конвергенции IT-OT
                        в промышленных сетях IoT
                    </div>
                    <div class="zero__text text">
                        Предвидеть и решать новые проблемы кибербезопасности в промышленности. Безопасный доступ и облегчение эффективных и экономичных подключений даже к самым разнородным средам.
                    </div>
                </div>
                <img src="{{asset('assets/img/zero-35.jpg')}}" />
            </div>
            <div class="zero__line line">
            </div>
        </div>
    </section>
    <x-list></x-list>
@endsection
