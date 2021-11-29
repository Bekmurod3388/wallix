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
                                О компании
                                Wallix & Abris
                            </h1>
                            <div class="preview__desc">
                                Европейские глобальные решения в области кибербезопасности для цифровой трансформации и конкурентоспособности в бизнесе
                            </div>
                        </div>
                    </div>
                </div>
                <div class="preview--right">
                    <img src="{{asset('img/background/preview-14.png')}}" alt="">
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
    <section class="banner" style="background: url('{{asset('img/background/banner-bg.jpg')}}') center center/cover no-repeat;">
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
                <img src="{{asset('assets/img/zero-36.jpg')}}" alt="img">
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
@endsection
