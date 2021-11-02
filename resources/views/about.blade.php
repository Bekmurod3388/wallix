<x-layout>
    @section('header')
        <x-header></x-header>
    @endsection
    <section
        class="preview"
        style="background: url('./assets/img/background/priview-bg.png') no-repeat"
    >
        <img src="{{asset('assets/img/background/preview-14.png')}}" alt=""/>
        <div class="container">
            <div class="preview__body">
                <h1 class="preview__title">О компании
                    Wallix & Abris</h1>
                <div class="preview__desc">
                    Европейские глобальные решения в области кибербезопасности для цифровой трансформации
                    и конкурентоспособности в бизнесе
                </div>
            </div>
        </div>
    </section>
    <section class="desc">
        <div class="container">
            <div class="desc__row">
                <div class="desc__title">
                    Передовые решения для безопасного цифрового будущего
                </div>
                <div class="desc__text">
                    Wallix & Abris защищает удостоверения и доступ к ИТ-инфраструктуре, приложениям и данным.
                    Специализируясь на управлении привилегированным доступом, решения обеспечивают соответствие
                    последним стандартам ИТ-безопасности и защищают от кибератак, краж и утечек данных, связанных с
                    украденными учетными данными и повышенными привилегиями на конфиденциальные активы компании.
                </div>
            </div>
        </div>
    </section>
    <section class="banner" style="background: url('./assets/img/background/banner-bg.jpg') center center/cover no-repeat;">
        <div class="container">
            <div class="banner__body">
                <div class="banner__text">
                    Новые цифровые применения создают уязвимости и увеличивают поверхности атаки. Не ждите кибератаки -
                    примите упреждающий подход, чтобы обеспечить свое цифровое будущее!
                </div>
            </div>
        </div>
    </section>
    <section class="zero">
        <div class="container">
            <div class="zero__row row">
                <img src="{{asset('assets/img/zero-36.jpg')}}"/>
                <div class="zero__desc">
                    <div class="zero__subtitle subtitle">
                        Европейский лидер в области управления
                        привилегированным доступом
                    </div>
                    <div class="zero__text text">
                        Основанная в 2003 году, WALLIX является первым европейским поставщиком программного обеспечения
                        для кибербезопасности, который будет публично торговаться, с 2015 года он включен в список
                        EuroNext (код: ALLIX). Являясь лидером на рынке управления привилегированным доступом и со
                        стратегией, основанной на инновациях и гибкости, WALLIX предлагает набор открытых решений,
                        которые являются устойчивыми, простыми в использовании и быстро развертываются.
                    </div>
                </div>
            </div>
            <div class="zero__line line">
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
                <img src="{{asset('assets/img/map.jpg')}}" alt="map">
            </div>
        </div>
    </section>
    @section('footer')
        <x-footer></x-footer>
    @endsection
</x-layout>
