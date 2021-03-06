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
                            Wallix BestSafe
                        </h1>
                        <div class="preview__desc">
                            Управление привилегиями конечных точек для мощной безопасности с наименьшими привилегиями
                        </div>
                        <a href="#message" class="preview__btn btn">Попробовать бесплатно</a>
                    </div>
                </div>
            </div>
            <div class="preview--right"
                    style="background-image: url('{{'/img/background/preview-4.png'}}')">
                <img src="{{asset('img/background/preview-4.png')}}" alt="">
            </div>
        </div>
    </section>
    <!-- <section class="desc just-align">
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
    </section> -->
    <section class="desc">
        <div class="container">
            <div class="desc__title">
                Инновационная безопасность конечных точек с наименьшими привилегиями
            </div>
            <div class="line2"></div>
            <div class="desc__row">
                <div class="desc__title">
                    
                </div>
                <div class="desc__text">
                Устраните необходимость в учетных записях пользователей с повышенными разрешениями благодаря инновационному управлению правами конечных точек.<br><br>
                    Достигните беспрецедентной безопасности во всех конечных точках с разрешениями, управляемыми на уровне приложения и процесса – без влияния на производительность пользователя.
                </div>
            </div>
            <div class="line2"></div>
        </div>
    </section>
    <div class="new-zero row">
        <div class="new-zero--left"></div>
        <div class="new-zero--center">
            <div class="border__title">
                <div class="border__pifagor"></div>
                <div class="new-zero__title title">
                Особенности BestSafe
                </div>
            </div>
            <div class="new-zero__subtitle subtitle">
            Белый / серый / чёрный список
            </div>
            <div class="new-zero__text text">
            Белый список для корпоративных приложений, серый список для опасных приложений, чёрный список для вредоносных программ
            </div>
            <div class="pack__text text">
                <ul>
                    <li>Исключите привилегированные учётные записи и права локального администратора</li>
                    <li>Привилегии на уровне приложений и процессов для разрешённых административных задач (Белый список)</li>
                    <li>Уменьшите привилегии потенциально опасных приложений (почтовых клиентов, браузеров и т.д. с доступом в Интернет), запретите доступ к конфиденциальным ресурсам, независимо от повышенных привилегий пользователя (Серый список)</li>
                    <li>
                    Остановите выполнение или шифрование файлов вредоносными программами, программами-вымогателями и криптовирусами
                    </li>
                </ul>
            </div>
            <div class="new-zero__btns">
                <div class="new-zero__btns--top">
                    <div class="new-zero__btn btn">Членство в локальной группе</div>
                    <div class="new-zero__btn btn">Смена паролей</div>
                </div>
                <div class="new-zero__btns--top">
                    <div class="new-zero__btn btn">Контроль вымогателей</div>
                    <div class="new-zero__btn btn">Управление приложениями</div>
                </div>
            </div>
        </div>
        <img class='not-border' src="{{asset('assets/img/new-zero-3.jpg')}}" alt="title">
    </div>
    
    <!-- <section id="orange" class="security bg-orange just-align">
        <div class="security__orange orange"></div>
        <div class="container">
            <div class="management__title">
                Особенности BestSafe
            </div>
            <div class="security__body row">
                <div class="d-flex">
                    <img src="{{asset("/img/products/$img")}}" alt="img"
                        class="content-img @if(request()->get('type') == 2){{'parol'}}@endif">
                </div>
                <div class="security__desc">
                    <div class="security__subtitle subtitle">
                        {{$title}}
                    </div>
                    <div class="security__text text">
                        {!! $text !!}
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section class="news just-align">
        <div class="container">
            <div class="news__row news__row--four">
                @foreach($categories as $key => $category)
                    <div class="news__item">
                        <div class="news__subtitle">
                            {{$category['title']}}
                        </div>
                        <div class="news__text">
                            {{ strLimit($category['text']) }}
                        </div>
                        <div class="news__xz">
                            <img src="{{asset("img/products/${category['img']}")}}">
                            <a href="{{route('bestsafe', ['type' => $key, '#orange'])}}" class="news__link">
                                Читать
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="news__line line"></div>
        </div>
    </section> -->
    <div class="new-pack row">
        <img class='not-border' src="{{asset('assets/img/new-zero-4.jpg')}}" alt="title">
        <div class="new-pack--center">
            <div class="border__title">
                <div class="border__pifagor"></div>
                <div class="new-pack__title title">
                Применение наименьших привилегий
                </div>
            </div>
            <div class="new-pack__text">
            Уменьшите риски, связанные с предоставлением прав администратора, не перегружая свою ИТ-команду чрезмерной нагрузкой. Управление привилегиями конечных точек применяет принцип наименьших привилегий с плавным и детализированным контролем разрешений на уровне приложений, одновременно предоставляя пользователям возможность эффективно работать.
            </div>
        </div>
    </div>
    <div class="new-zero row mtz alignz">
        <div class="new-zero--left"></div>
        <div class="new-pack--center">
            <div class="border__title">
                <div class="border__pifagor"></div>
                <div class="new-pack__title title">
                Защита уязвимых конечных точек
                </div>
            </div>
            <div class="new-pack__text">
            Блокировать вымогателей, вредоносные программы и криптовирусы от входа в вашу сеть, даже если пользователи имеют повышенные привилегии. Управление привилегиями на уровне приложений и процессов и остановка операций шифрования с помощью инновационной технологии endpoint protection
            </div>
        </div>
        <img class='not-border' src="{{asset('assets/img/new-zero-5.jpg')}}" alt="title">
    </div>
    <!-- <section class="zero just-align">
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
    </section> -->
    <!-- <section class="list just-align">
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
                            <img src="{{asset('/img/icon/list-4.svg')}}">
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
    </section> -->

    <section class="desc">
        <div class="container">
            <div class="desc__title">
            Ультрасовременное управление конечными точками
            </div>
            <div class="line2"></div>
            <div class="desc__row">
                <div class="paket-block">
                    <img class="paket-block__icon" src="{{asset('assets/paket-block-svg-3.svg')}}"/>
                    <div class="paket-block__title subtitle">Безопасность</div>
                    <div class="paket-block__text text">Устраните самую большую угрозу для конечных точек с удалением привилегий локального администратора для проактивной, беспрецедентной защиты конечных точек</div>
                </div>
                <div class="paket-block">
                    <img class="paket-block__icon" src="{{asset('assets/paket-block-svg-4.svg')}}"/>
                    <div class="paket-block__title subtitle">Средства для эффективной работы</div>
                    <div class="paket-block__text text">Эффективно применять наименьшую защиту привилегий, не влияя на производительность пользователей и сводя к минимуму необходимость ИТ-вмешательства</div>
                </div>
                <div class="paket-block">
                    <img class="paket-block__icon" src="{{asset('assets/paket-block-svg-5.svg')}}"/>
                    <div class="paket-block__title subtitle">Соответствие</div>
                    <div class="paket-block__text text">Добивайтесь соблюдения правил безопасности. BestSafe позволяет управлять привилегиями на уровне приложения, устраняя администраторов на конечных точках</div>
                </div>
                <div class="paket-block">
                    <img class="paket-block__icon" src="{{asset('assets/paket-block-svg-6.svg')}}"/>
                    <div class="paket-block__title subtitle">ROI</div>
                    <div class="paket-block__text text">Автоматизируйте и централизовайте управление конечными точками, а также повысьте эффективность работы пользователей и рентабельность инвестиций</div>
                </div>
            </div>
        </div>
    </section>
    <x-message></x-message>
@endsection
