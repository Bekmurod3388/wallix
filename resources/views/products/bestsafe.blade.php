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
                            Wallix BestSafe
                        </h1>
                        <div class="preview__desc">
                            Управление привилегиями конечных точек для мощной безопасности с наименьшими привилегиями
                        </div>
                        <a href="#message" class="preview__btn btn">Попробовать бесплатно</a>
                    </div>
                </div>
            </div>
            <div class="preview--right">
                <img src="{{asset('assets/img/background/preview-4.png')}}" alt="">
            </div>
        </div>
    </section>
    <section class="desc">
        <div class="container">
            <div class="desc__row">
                <div class="desc__title">
                    Инновационная безопасность конечных точек с наименьшими привилегиями
                </div>
                <div class="desc__text">
                    Устраните необходимость в учетных записях пользователей с повышенными разрешениями благодаря инновационному управлению правами конечных точек.<br><br>
                    Достигните беспрецедентной безопасности во всех конечных точках с разрешениями, управляемыми на уровне приложения и процесса – без влияния на производительность пользователя.
                </div>
            </div>
        </div>
    </section>
    <section class="security">
        <div class="security__orange orange"></div>
        <div class="container">
            <div class="management__title">
                Особенности BestSafe
            </div>
            <div class="security__body row">
                <img src="{{asset("/img/products/$img")}}" />
                <div class="security__desc">
                    <div class="security__subtitle subtitle"{{$title}}</div>
                    <div class="security__text text">
                        {!! $text !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="news">
        <div class="container">
            <div class="news__row news__row--four">
                <div class="news__item">
                    <div class="news__subtitle">
                        Членство в
                        локальной группе
                    </div>
                    <div class="news__text">
                        Используйте проактивный подход к endpoint security...
                    </div>
                    <div class="news__xz">
                        <img src="{{asset('img/products/pro-1.png')}}">
                        <a href="{{route('bestsafe', ['type' => 1])}}" class="news__link">
                            Читать
                        </a>
                    </div>
                </div>
                <div class="news__item">
                    <div class="news__subtitle w">
                        Ротация
                        пароля
                    </div>
                    <div class="news__text">
                        Положите конец общим паролям, используемым на бесчисленных...
                    </div>
                    <div class="news__xz">
                        <img src="{{asset('img/products/pro-2.png')}}">
                        <a href="{{route('bestsafe', ['type' => 2])}}" class="news__link">
                            Читать
                        </a>
                    </div>
                </div>
                <div class="news__item">
                    <div class="news__subtitle w">
                        Управление
                        вымогателями
                    </div>
                    <div class="news__text">
                        Обнаружение попыток шифрования в режиме...
                    </div>
                    <div class="news__xz">
                        <img src="{{asset('img/products/pro-3.png')}}">
                        <a href="{{route('bestsafe', ['type' => 3])}}" class="news__link">
                            Читать
                        </a>
                    </div>
                </div>
                <div class="news__item">
                    <div class="news__subtitle w">
                        Управление приложениями
                    </div>
                    <div class="news__text">
                        Управляйте и контролируйте все ключевые бизнес-приложения...
                    </div>
                    <div class="news__xz">
                        <img src="{{asset('img/products/pro-4.png')}}">
                        <a href="{{route('bestsafe', ['type' => 4])}}" class="news__link">
                            Читать
                        </a>
                    </div>
                </div>
            </div>
            <div class="news__line line"></div>
        </div>
    </section>
    <section class="zero">
        <div class="container">
            <div class="zero__row row">
                <img src="{{asset('assets/img/zero-18.jpg')}}" />
                <div class="zero__desc">
                    <div class="zero__subtitle subtitle">
                        Применение наименьших привилегий
                    </div>
                    <div class="zero__text text">
                        Уменьшите риски, связанные с предоставлением прав администратора, не перегружая свою ИТ-команду чрезмерной нагрузкой. Управление привилегиями конечных точек применяет принцип наименьших привилегий с плавным и детализированным контролем разрешений на уровне приложений, одновременно предоставляя пользователям возможность эффективно работать.
                    </div>
                </div>
            </div>
            <div class="zero__row--resevre row">
                <div class="zero__desc">
                    <div class="zero__subtitle subtitle">
                        Защита уязвимых конечных точек
                    </div>
                    <div class="zero__text text">
                        Блокировать вымогателей, вредоносных программ и криптовирусов от входа в вашу сеть, даже если пользователи имеют повышенные привилегии. Управление привилегиями на уровне приложений и процессов и остановка операций шифрования с помощью инновационной технологии endpoint protection
                    </div>
                </div>
                <img src="{{asset('assets/img/zero-19.jpg')}}" />
            </div>
            <div class="zero__line line">
            </div>
        </div>
    </section>
    <section class="list">
        <div class="container">
            <div class="list__label title">Ультрасовременное управление конечными точками</div>
            <div class="list__body">
                <div class="list__item">
                    <div class="list__icon">
                        <div class="list__border">
                            <img src="{{asset('/img/icon/list-5.svg')}}">
                        </div>
                    </div>
                    <div class="list__desc">
                        <div class="list__title">
                            Безопасность
                        </div>
                        <div class="list__text">
                            Устраните самую большую угрозу для конечных точек с удалением привилегий локального администратора для проактивной, беспрецедентной защиты конечных точек
                        </div>
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__icon">
                        <div class="list__border">
                            <img src="{{asset('/img/icon/list-3.svg')}}">
                        </div>
                    </div>
                    <div class="list__desc">
                        <div class="list__title">
                            Средства для эффективной работы
                        </div>
                        <div class="list__text">
                            Эффективно применять наименьшую защиту привилегий, не влияя на производительность пользователей и сводя к минимуму необходимость ИТ-вмешательства
                        </div>
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__icon">
                        <div class="list__border">
                            <img src="{{asset('/img/icon/list-2.svg')}}">
                        </div>
                    </div>
                    <div class="list__desc">
                        <div class="list__title">
                            Соответствие
                        </div>
                        <div class="list__text">
                            Добивайтесь соблюдения правил безопасности. BestSafe позволяет управлять привилегиями на уровне приложения, устраняя администраторов на конечных точках
                        </div>
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__icon">
                        <div class="list__border">
                            <img src="{{asset('/img/icon/list-5.svg')}}">
                        </div>
                    </div>
                    <div class="list__desc">
                        <div class="list__title">
                            ROI
                        </div>
                        <div class="list__text">
                            Автоматизируйте и централизовайте управление конечными точками, а также повысьте эффективность работы пользователей и рентабельность инвестиций.
                        </div>
                    </div>
                </div>
            </div>
            <div class="list__line line">
            </div>
        </div>
    </section>
    <x-message></x-message>
@endsection
