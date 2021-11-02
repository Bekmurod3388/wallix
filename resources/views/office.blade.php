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
                        <div class="ofice__item">
                            <div class="ofice__title">
                                Азербайджан
                            </div>
                            <div class="ofice__text ofice__text--black">
                                <div class="ofice__street">
                                    Баку, ул. С.Вургуна, 34
                                </div>
                                <div class="ofice__phone">+994 (12) 597 30 80</div>
                                <div class="ofice__mail">sales@abrisdc.az</div>
                            </div>
                        </div>
                        <div class="ofice__item">
                            <div class="ofice__title">
                                Армения
                            </div>
                            <div class="ofice__text ofice__text--black">
                                <div class="ofice__street">
                                    Ереван, ул. Теряна, 92/1-11
                                </div>
                                <div class="ofice__phone">+374 (98) 12 14 77</div>
                                <div class="ofice__mail">sales@abrisdc.ar</div>
                            </div>
                        </div>
                        <div class="ofice__item">
                            <div class="ofice__title">
                                Беларусь
                            </div>
                            <div class="ofice__text ofice__text--black">
                                <div class="ofice__street">
                                    Беларусь, Минск, ул. Карастояновой, 32-5
                                </div>
                                <div class="ofice__phone">+375 (17) 317 03 83</div>
                                <div class="ofice__mail">sales@abrisdc.by</div>
                            </div>
                        </div>
                        <div class="ofice__item">
                            <div class="ofice__title">
                                Грузия
                            </div>
                            <div class="ofice__text ofice__text--black">
                                <div class="ofice__street">
                                    Грузия, Тбилиси, ул. Карастояновой, 32-5
                                </div>
                                <div class="ofice__phone">+375 (17) 317 03 83</div>
                                <div class="ofice__mail">sales@abrisdc.ge</div>
                            </div>
                        </div>
                        <div class="ofice__item">
                            <div class="ofice__title">
                                Казахстан
                            </div>
                            <div class="ofice__text ofice__text--black">
                                <div class="ofice__street">
                                    Алматы, пр. Достык, 248Б-202А
                                </div>
                                <div class="ofice__phone">+7 (727) 339 51 55</div>
                                <div class="ofice__mail">sales@abrisdc.kz</div>
                            </div>
                        </div>
                        <div class="ofice__item">
                            <div class="ofice__title">
                                Кыргызстан
                            </div>
                            <div class="ofice__text ofice__text--black">
                                <div class="ofice__street">
                                    Бишкек, пр. Достык, 248Б-202А
                                </div>
                                <div class="ofice__phone">+7 (727) 339 51 55</div>
                                <div class="ofice__mail">sales@abrisdc.kg</div>
                            </div>
                        </div>
                        <div class="ofice__item">
                            <div class="ofice__title">
                                Молдова
                            </div>
                            <div class="ofice__text ofice__text--black">
                                <div class="ofice__street">
                                    Кишинёв, ул. Болгарская, 31А
                                </div>
                                <div class="ofice__phone">+7 (727) 339 51 55</div>
                                <div class="ofice__mail">sales@abrisdc.md</div>
                            </div>
                        </div>
                        <div class="ofice__item">
                            <div class="ofice__title">
                                Монголия
                            </div>
                            <div class="ofice__text ofice__text--black">
                                <div class="ofice__street">
                                    Улан-Батор, пр. Достык, 248Б-202А
                                </div>
                                <div class="ofice__phone">+7 (727) 339 51 55</div>
                                <div class="ofice__mail">sales@abrisdc.mn</div>
                            </div>
                        </div>
                        <div class="ofice__item">
                            <div class="ofice__title">
                                Таджикистан
                            </div>
                            <div class="ofice__text ofice__text--black">
                                <div class="ofice__street">
                                    Душанбе, ул. Болгарская, 31А
                                </div>
                                <div class="ofice__phone">+7 (727) 339 51 55</div>
                                <div class="ofice__mail">sales@abrisdc.tj</div>
                            </div>
                        </div>
                        <div class="ofice__item">
                            <div class="ofice__title">
                                Туркменистан
                            </div>
                            <div class="ofice__text ofice__text--black">
                                <div class="ofice__street">
                                    Ашхабад, ул. Кулиева, 45
                                </div>
                                <div class="ofice__phone">+993 (12) 75 45 12</div>
                                <div class="ofice__mail">sales@abrisdc.tr</div>
                            </div>
                        </div>
                        <div class="ofice__item">
                            <div class="ofice__title">
                                Узбекистан
                            </div>
                            <div class="ofice__text ofice__text--black">
                                <div class="ofice__street">
                                    Ташкент, ул. Фаргона, 15



                                </div>
                                <div class="ofice__phone">+998 (78) 148 53 00</div>
                                <div class="ofice__mail">sales@abrisdc.uz</div>
                            </div>
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
                <button class="map__btn btn">
                    Перейти на официальный сайт WALLIX
                </button>
                <div class="map__body">
                    <img src="{{asset('/assets/img/map.jpg')}}" alt="map">
                </div>
            </div>
        </section>
        @section('footer')
            <x-footer></x-footer>
        @endsection
</x-layout>
