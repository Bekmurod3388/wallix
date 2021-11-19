@extends('layout')
@section('content')
    <section class="preview">
        <div class="preview__wrapper">
            <div class="preview--left">
                <img src="{{asset('assets/img/background/preview-bg.png')}}" alt="">
            </div>
            <div class="preview--center">
                <div class="container">
                    <div class="preview__body">
                        <h1 class="preview__title">
                            Обеспечьте свое цифровое будущее
                        </h1>
                        <div class="preview__desc">
                            Wallix защищает идентификационные данные и доступ для ускорения цифровой трансформации
                        </div>
                        <button class="preview__btn btn">
                            Смотреть видео
                        </button>
                    </div>
                </div>
            </div>
            <div class="preview--right">
                <img src="{{asset('assets/img/background/preview-1.png')}}" alt="">
            </div>
        </div>
    </section>
    <section class="desc">
        <div class="container">
            <div class="desc__row">
                <div class="desc__title">
                    Защитите своё цифровое будущее с лидером в области безопасности упрощённого доступа
                </div>
                <div class="desc__text">
                    Wallix & Abris защищает удостоверения и доступ к ИТ-инфраструктуре, приложениям и данным. Специализируясь на управлении привилегированным доступом, решения   обеспечивают соответствие последним стандартам ИТ-безопасности и защищают от кибератак, краж и утечек данных, связанных с украденными учетными данными и повышенными привилегиями на конфиденциальные активы компании.
                </div>
            </div>
        </div>
    </section>
    <section class="list">
        <div class="container">
            <div class="list__body">
                <div class="list__item">
                    <div class="list__icon">
                        <div class="list__border">
                            <img src="{{asset('assets/img/icon/list.svg')}}" alt="img">
                        </div>
                    </div>
                    <div class="list__desc">
                        <div class="list__title">
                            Упрощенная кибербезопасность
                        </div>
                        <div class="list__text">
                            Комплексные решения с бесшовным пользовательским интерфейсом. Простота развёртывания, работа и обслуживание
                        </div>
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__icon">
                        <div class="list__border">
                            <img src="{{asset('assets/img/icon/list.svg')}}" alt="img">
                        </div>
                    </div>
                    <div class="list__desc">
                        <div class="list__title">
                            Сертифицированный в отрасли поставщик решений
                        </div>
                        <div class="list__text">
                            Комплексные сертифицированные решения для соответствия национальным, государственным или деловым нормам
                        </div>
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__icon">
                        <div class="list__border">
                            <img src="{{asset('assets/img/icon/list.svg')}}" alt="img">
                        </div>
                    </div>
                    <div class="list__desc">
                        <div class="list__title">
                            Лидер по управлению привилегированным доступом
                        </div>
                        <div class="list__text">
                            Защитите свои стратегические активы
                            путем контроля и аудита привилегий
                            и секретов пользователей с лидером в PAM
                        </div>
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__icon">
                        <div class="list__border">
                            <img src="{{asset('assets/img/icon/list.svg')}}" alt="img">
                        </div>
                    </div>
                    <div class="list__desc">
                        <div class="list__title">
                            Конфиденциальность данных по замыслу
                        </div>
                        <div class="list__text">
                            Как европейский лидер, WALLIX заботится о конфиденциальности данных. Держите под контролем свои данные; не позволяйте другим использовать их ценность.
                        </div>
                    </div>
                </div>
            </div>
            <div class="list__line line">
            </div>
        </div>
    </section>
    <section class="management">
        <div class="management__orange orange">
        </div>
        <div class="container">
            <div class="management__title">
                Передовые продукты для безопасного цифрового будущего
            </div>
            <div class="management__list">
                <div class="management__item">
                    <img src="{{asset('assets/img/management-1.jpg')}}" alt="management">
                    <div class="management__subtitle">
                        Управление привилегированным
                        доступом
                    </div>
                    <div class="management__desc">
                        Защита от угрозы со стороны привилегированных пользователей
                    </div>
                    <a href="{{route('bastion')}}" class="management__link">
                        Wallix Bastion
                    </a>
                </div>
                <div class="management__item">
                    <img src="{{asset('assets/img/management-2.jpg')}}" alt="management">
                    <div class="management__subtitle">
                        Управление привилегиями
                        конечных точек
                    </div>
                    <div class="management__desc">
                        Установите права локального администратора и остановите вымогателей
                    </div>
                    <a href="{{route('bestsafe')}}" class="management__link">
                        Wallix BestSafe
                    </a>
                </div>
                <div class="management__item">
                    <img src="{{asset('assets/img/management-3.jpg')}}" alt="management">
                    <div class="management__subtitle">
                        Управление идентификационным
                        доступом
                    </div>
                    <div class="management__desc">Упрощение доступа пользователей к
                        корпоративным приложениям (iDaaS)
                    </div>
                    <a href="{{route('trustelem')}}" class="management__link">
                        Wallix Trustelem
                    </a>
                </div>
            </div>
            <div class="management__line line"></div>
        </div>
    </section>
    <section class="solution">
        <div class="container">
            <div class="solution__title title">
                Наши решения
            </div>
            <div class="solution__list">
                <div class="solution__item" style="background: url('/assets/img/solution-1.jpg') center center/cover no-repeat ;">
                    <div class="solution__text">
                        <div class="solution__subtitle">
                            Digital transformation
                        </div>
                        <div class="solution__desc">
                            Упрощение аудита и соблюдение требований безопасности с помощью сквозного управления доступом
                        </div>
                    </div>
                </div>
                <div class="solution__item" style="background: url('/assets/img/solution-2.jpg') center center/cover no-repeat ;">
                    <div class="solution__text">
                        <div class="solution__subtitle">
                            Audit&Compliance
                        </div>
                        <div class="solution__desc">
                            Упрощение аудита и соблюдение требований безопасности с помощью сквозного управления доступом
                        </div>
                    </div>
                </div>
                <div class="solution__item" style="background: url('/assets/img/solution-2.jpg') center center/cover no-repeat ;">
                    <div class="solution__text">
                        <div class="solution__subtitle">
                            Risk Management &Security
                        </div>
                        <div class="solution__desc">
                            Упрощение аудита и соблюдение требований безопасности с помощью сквозного управления доступом
                        </div>
                    </div>
                </div>
            </div>
            <div class="solution__btn btn">Все решения</div>
        </div>
    </section>
    <section class="video">
        <div class="video__bg" style="background: url('/assets/img/background/video-bg.jpg');">
        </div>
        <div class="container">
            <div class="video__title title">
                Видео о нашей работе
            </div>
            <div class="video__desc">
                Видео о нашей работе
            </div>
            <div class="video__block">
                <iframe width="970" height="430" src="https://www.youtube.com/embed/NMiL_aCg9Mc" title="Wallix" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video__line line">
            </div>
        </div>
    </section>
   <x-news>

   </x-news>
    <x-message>

    </x-message>
@endsection
