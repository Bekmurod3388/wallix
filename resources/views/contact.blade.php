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
                            Свяжитесь
                            с Wallix & Abris
                        </h1>
                        <div class="preview__desc">
                            Свяжитесь с нами, чтобы узнать больше о нашем
                            глобальном наборе решений для кибербезопасности
                        </div>
                    </div>
                </div>
            </div>
            <div class="preview--right"
                    style="background-image: url('{{'/img/background/preview-16.png'}}')">
                <img src="{{asset('img/background/preview-16.png')}}" alt="">
            </div>
        </div>
    </section>
    <section class="ofice just-align">
        <div class="ofice__bg"></div>
        <div class="container">
            <div class="ofice__row">
                <div class="ofice__desc">
                    <div class="ofice__label">
                        Офисы Abris
                    </div>
                    <div class="ofice__text ofice__text--white">
                        Представительства нашего
                        партнера по СНГ
                    </div>
                </div>
                <div class="ofice__address">
                    @foreach($office as $offices)
                        <div class="ofice__item">
                            <div class="ofice__title">
                                {{$offices->country}}
                            </div>
                            <div class="ofice__text ofice__text--black">
                                <div class="ofice__street">
                                    {{$offices->adress}}
                                </div>
                                <div class="ofice__phone">{{$offices->phone}}</div>
                                <div class="ofice__mail">{{$offices->email}}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="map just-align">
        <div class="container">
            <div class="map__title title">
                Wallix & Abris в мире
            </div>
            <div class="text-center map__btn">
                <a href="https://www.wallix.com/" class="btn">
                    Перейти на официальный сайт WALLIX
                </a>
            </div>
            <div class="map__body">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d146261.87734742736!2d69.26927065813517!3d41.30040027364536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b0cc379e9c3%3A0xa5a9323b4aa5cb98!2z0KLQsNGI0LrQtdC90YIsINCj0LfQsdC10LrQuNGB0YLQsNC9!5e0!3m2!1sru!2s!4v1638203872908!5m2!1sru!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
    <x-message></x-message>
@endsection
