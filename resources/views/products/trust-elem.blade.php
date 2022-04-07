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
                            Wallix Trustelem
                        </h1>
                        <div class="preview__desc">
                            Безопасное управление доступом для плавного подключения к бизнес приложениям
                        </div>
                        <a href="#message" class="preview__btn btn">Попробовать бесплатно</a>
                    </div>
                </div>
            </div>
            <div class="preview--right"
                    style="background-image: url('{{'/img/background/preview-5.png'}}')">
                <img src="{{asset('img/background/preview-5.png')}}" alt="img">
            </div>
        </div>
    </section>
    <!-- <section class="desc just-align">
        <div class="container">
            <div class="desc__row">
                <div class="desc__title">
                    Унификация, безопасность и упрощение доступа пользователей
                </div>
                <div class="desc__text">
                    Защита стратегических активов, повышение эффективности и производительности, а также улучшение пользовательского опыта как для пользователей приложений, так и для администраторов.<br><br>
                    Упрощение и безопасность доступа к ключевым бизнес-приложениям с централизованной платформы.
                </div>
            </div>
        </div>
    </section> -->

    <section class="desc">
        <div class="container">
            <div class="desc__title">
            Унификация, безопасность и упрощение доступа пользователей
            </div>
            <div class="line2"></div>
            <div class="desc__row">
                <div class="desc__title">
                    
                </div>
                <div class="desc__text">
                Защита стратегических активов, повышение эффективности и производительности и улучшение пользовательского опыта для пользователей приложений и администраторов.
                <br>
                <br>
                Упрощение и безопасность доступа к ключевым бизнес-приложениям с централизованной платформы.
                </div>
            </div>
            <div class="line2"></div>
        </div>
    </section>
    <div class="new-zero row ">
        <div class="new-zero--left"></div>
        <div class="new-zero--center not-between">
            <div class="border__title">
                <div class="border__pifagor"></div>
                <div class="new-zero__title title">
                Функции управления идентификацией
                </div>
            </div>
            <div class="new-zero__subtitle subtitle">
            Центральный каталог
            </div>
            <div class="new-zero__text text">
            Соберите свои источники идентичности в единую ссылку на идентичность, чтобы легко управлять правами доступа в одном централизованном месте.
            </div>
            <div class="pack__text text">
            



                <ul>
                    <li>Поддержка каталогов Active Directory, Azure AD, LDAP и Google G Suite directory</li>
                    <li>Импортируйте столько каталогов сколько необходимо в вашу платформу WALLIX Trustelem</li>
                    <li>Полный или частичный импорт каталога на основе членства в группе и фильтрации атрибутов</li>
                    <li>
                    Импорт членства в группах и атрибутов пользователей для определения надлежащих политик управления доступом
                    </li>
                </ul>
            </div>
            <div class="new-zero__btns">
                <div class="new-zero__btns--top">
                    <div class="new-zero__btn btn">SSO</div>
                    <div class="new-zero__btn btn">Мид</div>
                    <div class="new-zero__btn btn">Самообслуживание</div>

                </div>
            </div>
        </div>
        <img class='not-border' src="{{asset('assets/img/new-zero-6.jpg')}}" alt="title">
    </div>

    <div class="new-pack row">
        <img class='not-border' src="{{asset('assets/img/new-zero-7.jpg')}}" alt="title">
        <div class="new-pack--center">
            <div class="border__title">
                <div class="border__pifagor"></div>
                <div class="new-pack__title title">
                Простая интеграция приложений
                </div>
            </div>
            <div class="new-pack__text">
            WALLIX Trustelem предварительно интегрировала широкий выбор бизнес-приложений, включая Office 365, G Suite, Salesforce, Box, Dropbox, ownCloud и NextCloud, Wordpress и многие другие, чтобы упростить реализацию Trustelem. Получите доступ к подробной документации для каждого приложения, чтобы упростить настройку.
            </div>
        </div>
    </div>
    <div class="new-zero row mtz alignz">
        <div class="new-zero--left"></div>
        <div class="new-pack--center">
            <div class="border__title">
                <div class="border__pifagor"></div>
                <div class="new-pack__title title">
                Быстро и легко
                </div>
            </div>
            <div class="new-pack__text">
            WALLIX Trustelem разработан для того, чтобы сделать администрирование простым и интуитивно понятным. Веб-консоль администрирования позволяет ИТ-персоналу легко настраивать синхронизацию каталогов, управлять жизненными циклами внешних учетных записей пользователей и приложений, создавать и адаптировать правила доступа, контролировать активность и проверять безопасность доступа.
            </div>
        </div>
        <img class='not-border' src="{{asset('assets/img/new-zero-8.jpg')}}" alt="title">
    </div>
    <div class="new-pack row">
        <img class='not-border' src="{{asset('assets/img/new-zero-9.jpg')}}" alt="title">
        <div class="new-pack--center">
            <div class="border__title">
                <div class="border__pifagor"></div>
                <div class="new-pack__title title">
                Безопасность – ваша главная забота
                </div>
            </div>
            <div class="new-pack__text">
            Сохраняйте контроль над своими личностями и данными! Платформа WALLIX Trustelem размещается и управляется надёжным европейским облачным провайдером. Суверенитет и безопасность ваших данных необходимы для обеспечения качества обслуживания и защиты активов вашей компании.
            </div>
        </div>
    </div>

    <section class="desc">
        <div class="container">
            <div class="desc__title">
            Ультрасовременное управление конечными точками
            </div>
            <div class="line2"></div>
            <div class="desc__row">
                <div class="paket-block">
                    <img class="paket-block__icon" src="{{asset('assets/paket-block-svg-7.svg')}}"/>
                    <div class="paket-block__title subtitle">Простой</div>
                    <div class="paket-block__text text">Trustelem предназначен для простоты пользовательского опыта и администрирования как на этапе сборки, так и на этапе запуска</div>
                </div>
                <div class="paket-block">
                    <img class="paket-block__icon" src="{{asset('assets/paket-block-svg-8.svg')}}"/>
                    <div class="paket-block__title subtitle">Безопасный</div>
                    <div class="paket-block__text text">Безопасность лежит в основе инфраструктуры, программного обеспечения и операций Trustelem</div>
                </div>
                <div class="paket-block">
                    <img class="paket-block__icon" src="{{asset('assets/paket-block-svg-9.svg')}}"/>
                    <div class="paket-block__title subtitle">Европейский</div>
                    <div class="paket-block__text text">WALLIX Trustelem принадлежит, разрабатывается, размещается и эксплуатируется в Европе, чтобы обеспечить нашу приверженность безопасности</div>
                </div>
                <div class="paket-block">
                    <img class="paket-block__icon" src="{{asset('assets/paket-block-svg-10.svg')}}"/>
                    <div class="paket-block__title subtitle">Экономически эффективный</div>
                    <div class="paket-block__text text">Повышайте рентабельность инвестиций и экономию затрат благодаря привлекательной ценовой политике WALLIX Trustelem и надёжному предоставлению услуг</div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section id="orange" class="security just-align">
        <div class="security__orange orange bast-{{request()->get('type')}}"></div>
        <div class="container">
            <div class="management__title">
                Функции управления идентификацией
            </div>
            <div class="security__body row">
                <img src="{{"/img/products/$img"}}" alt="img">
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
            <div class="news__row news__row--three">
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
                            <a href="{{route('trustelem', ['type' => $key, '#orange'])}}" class="news__link">
                                Читать
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="news__line line"></div>
        </div>
    </section>
    <section class="zero just-align">
        <div class="container">
            <div class="zero__row row">
                <img src="{{asset('assets/img/zero-20.jpg')}}" alt="img">
                <div class="zero__desc">
                    <div class="zero__subtitle subtitle">
                        Простая интеграция приложений
                    </div>
                    <div class="zero__text text">
                        WALLIX Trustelem предварительно интегрировала широкий выбор бизнес-приложений, включая Office 365, G Suite, Salesforce, Box, Dropbox, ownCloud и NextCloud, Wordpress и многие другие, чтобы упростить реализацию Trustelem. Получите доступ к подробной документации для каждого приложения, чтобы упростить настройку.
                    </div>
                </div>
            </div>
            <div class="zero__row--resevre row">
                <div class="zero__desc">
                    <div class="zero__subtitle subtitle">
                        Стройте быстро, бегайте легко
                    </div>
                    <div class="zero__text text">
                        WALLIX Trustelem разработан для того, чтобы сделать администрирование простым и интуитивно понятным. Веб-консоль администрирования позволяет ИТ-персоналу легко настраивать синхронизацию каталогов, управлять жизненными циклами внешних учетных записей пользователей и приложений, создавать и адаптировать правила доступа, контролировать активность и проверять безопасность доступа.
                    </div>
                </div>
                <img src="{{asset('assets/img/zero-21.jpg')}}" alt="">
            </div>
            <div class="zero__row row">
                <img src="{{asset('assets/img/zero-22.jpg')}}" alt="">
                <div class="zero__desc">
                    <div class="zero__subtitle subtitle">
                        Безопасность - ваша главная забота
                    </div>
                    <div class="zero__text text">
                        Сохраняйте контроль над своими личностями и данными! Платформа WALLIX Trustelem размещается и управляется надежным европейским облачным провайдером. Суверенитет и безопасность ваших данных необходимы для обеспечения качества обслуживания и защиты активов вашей компании.
                    </div>
                </div>
            </div>
            <div class="zero__line line">
            </div>
        </div>
    </section>
    <section class="list just-align">
        <div class="container">
            <div class="list__label title">Wallix Trustelem</div>
            <div class="list__body">
                <div class="list__item">
                    <div class="list__icon">
                        <div class="list__border">
                            <img src="{{'/img/icon/list-6.svg'}}" alt="Icon">
                        </div>
                    </div>
                    <div class="list__desc">
                        <div class="list__title">
                            Обтекаемый
                        </div>
                        <div class="list__text">
                            Trustelem предназначен для простоты пользовательского опыта и администрирования как на этапе сборки, так и на этапе запуска
                        </div>
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__icon">
                        <div class="list__border">
                            <img src="{{'/img/icon/list-7.svg'}}" alt="Icon">
                        </div>
                    </div>
                    <div class="list__desc">
                        <div class="list__title">
                            Безопасный
                        </div>
                        <div class="list__text">
                            Безопасность лежит в основе инфраструктуры, программного обеспечения и операций Trustelem
                        </div>
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__icon">
                        <div class="list__border">
                            <img src="{{'/img/icon/list-8.svg'}}" alt="Icon">
                        </div>
                    </div>
                    <div class="list__desc">
                        <div class="list__title">
                            Европейский
                        </div>
                        <div class="list__text">
                            WALLIX Trustelem принадлежит, разрабатывается, размещается и эксплуатируется в Европе, чтобы обеспечить нашу приверженность безопасности
                        </div>
                    </div>
                </div>
                <div class="list__item">
                    <div class="list__icon">
                        <div class="list__border">
                            <img src="{{'/img/icon/list-9.svg'}}" alt="Icon">
                        </div>
                    </div>
                    <div class="list__desc">
                        <div class="list__title">
                            Экономически эффективный
                        </div>
                        <div class="list__text">
                            Повышайте рентабельность инвестиций и экономию затрат благодаря привлекательной ценовой политике WALLIX Trustelem и надёжному предоставлению услуг
                        </div>
                    </div>
                </div>
            </div>
            <div class="list__line line">
            </div>
        </div>
    </section>
    <section class="video">
        <div class="video__bg" style="background: url('{{asset('img/background/video-bg.jpg')}}');">
        </div>
        <div class="container">
            <div class="video__title title">

            </div>
            <div class="video__desc">

            </div>
            <div class="video__block">
                <video controls  style="width: 970px; height:430px">
                    <source src="{{asset('storage/trustelem/Trustelem-Slideshow_EN_FINAL.mp4')}}" type="video/mp4">
                </video>
            </div>
        </div>
    </section> -->
    <x-message></x-message>
@endsection
