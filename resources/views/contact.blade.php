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
            <div class="preview--right">
                <img src="{{asset('img/background/preview-16.png')}}" alt="">
            </div>
        </div>
    </section>
    <section class="ofice">
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
    <section class="map">
        <div class="container">
            <div class="map__title title">
                Wallix & Abris в мире
            </div>
            <a href="https://www.wallix.com/" class="map__btn btn">
                Перейти на официальный сайт WALLIX
            </a>
            <div class="map__body">
                <img src="{{asset('assets/img/map.jpg')}}" alt="map">
            </div>
        </div>
    </section>
    <x-message></x-message>
@endsection
