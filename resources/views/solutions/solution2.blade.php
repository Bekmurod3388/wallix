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
                            Аудит и cоответствие
                        </h1>
                        <div class="preview__desc">
                            Упрощение аудита и соблюдение требований безопасности с помощью сквозного управления доступом
                        </div>
                    </div>
                </div>
            </div>
            <div class="preview--right">
                <img src="{{asset('img/background/preview-11.jpg')}}" alt="img">
            </div>
        </div>
    </section>
    <section class="desc just-align">
        <div class="container">
            <div class="desc__row">
                <div class="desc__title">
                    Аудит кибербезопасности и соответствие
                </div>
                <div class="desc__text">
                    Решайте проблемы соответствия требованиям безопасности доступа напрямую с помощью надёжных, проверенных аудитом технологий для защиты ваших наиболее чувствительных ИТ-систем и обеспечения безопасности данных. <br><br>
                    Нормативные акты и стандарты на государственном, местном и отраслевом уровнях: от GDPR до ISO 27001 и PCI DSS-требуют от организаций принятия мер по соблюдению требований ИТ-безопасности в отношении доступа к критической инфраструктуре и данным.
                </div>
            </div>
            <div class="desc__line line"></div>
        </div>
    </section>
    <section class="zero just-align">
        <div class="container">
            <div class="zero__row row">
                <img src="{{asset('assets/img/zero-27.jpg')}}" alt="img">
                <div class="zero__desc">
                    <div class="zero__subtitle subtitle">
                        Многие нормативные акты,
                        комплексные решения
                    </div>
                    <div class="zero__text text">
                        Достижение соответствия требованиям ИТ - безопасности с помощью унифицированного решения, отвечающего требованиям безопасности доступа GDPR, PCI DSS, NIST, ISO 27001 и другим глобальным стандартам безопасности.
                    </div>
                </div>
            </div>
            <div class="zero__row--resevre row">
                <div class="zero__desc">
                    <div class="zero__subtitle subtitle">
                        Аудит, мониторинг и обзор
                    </div>
                    <div class="zero__text text">
                        Докажите соответствие неизменяемому журналу аудита всех привилегированных сеансов и установите систему нулевого доверия для контроля и мониторинга того, кто что, когда и как делал с вашими наиболее важными активами.            </div>
                </div>
                <img src="{{asset('assets/img/zero-28.jpg')}}" alt="img">
            </div>
            <div class="zero__line line">
            </div>
        </div>
    </section>
    <section class="security bg-orange">
{{--        <div class="security__orange orange"></div>--}}
        <div class="container">
            <div class="management__title">
                Упрощенный аудит и соответствие
            </div>
            <div class="security__body row content-div">
                <div class="d-flex">
                    <img src="{{asset("/img/solutions/$img")}}" alt="img" class="audit-img">
                </div>
                <div class="security__desc">
                    <div class="security__subtitle subtitle">{{$title}}</div>
                    <div class="security__text text">
                        {!! $text !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="news just-align">
        <div class="container">
            <div class="news__row news__row--four">
                <div class="news__item">
                    <div class="news__subtitle">
                        ISO 27001
                    </div>
                    <div class="news__text">
                        Достижение международно признанных уровней...
                    </div>
                    <div class="news__xz">
                        <img src="{{'/img/solutions/sol-1.png'}}" alt="img">
                        <a href="{{route('solution2', ['type' => 1])}}" class="news__link">
                            Читать
                        </a>
                    </div>
                </div>
                <div class="news__item">
                    <div class="news__subtitle w">
                        Директива НИС
                    </div>
                    <div class="news__text">
                        Операторы основных услуг (OESs) и поставщики цифровых услуг...
                    </div>
                    <div class="news__xz">
                        <img src="{{'/img/solutions/sol-2.png'}}" alt="img">
                        <a href="{{route('solution2', ['type' => 2])}}" class="news__link">
                            Читать
                        </a>
                    </div>
                </div>
                <div class="news__item">
                    <div class="news__subtitle w">
                        PCI DSS
                    </div>
                    <div class="news__text">
                        Контролируйте весь доступ к конфиденциальным данным...
                    </div>
                    <div class="news__xz">
                        <img src="{{'/img/solutions/sol-3.png'}}" alt="img">
                        <a href="{{route('solution2', ['type' => 3])}}" class="news__link">
                            Читать
                        </a>
                    </div>
                </div>
                <div class="news__item">
                    <div class="news__subtitle w">
                        HIPAA
                    </div>
                    <div class="news__text">
                        Главный приоритет медицинской организации-безопасность...
                    </div>
                    <div class="news__xz">
                        <img src="{{'/img/solutions/sol-4.png'}}" alt="img">
                        <a href="{{route('solution2', ['type' => 4])}}" class="news__link">
                            Читать
                        </a>
                    </div>
                </div>
            </div>
            <div class="news__line line"></div>
        </div>
    </section>

    <x-list></x-list>
@endsection
