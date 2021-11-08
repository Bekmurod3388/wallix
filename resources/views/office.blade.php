<x-layout>
    @section('header')
        <x-header></x-header>
@endsection
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
        @section('footer')
            <x-footer></x-footer>
        @endsection
</x-layout>
