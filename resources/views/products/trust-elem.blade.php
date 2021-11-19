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
                            Wallix Trustelem
                        </h1>
                        <div class="preview__desc">
                            Безопасное управление доступом для плавного подключения к бизнес приложениям
                        </div>
                        <button class="preview__btn btn">
                            Подробно
                        </button>
                    </div>
                </div>
            </div>
            <div class="preview--right">
                <img src="{{asset('assets/img/background/preview-5.png')}}" alt="img">
            </div>
        </div>
    </section>
    <section class="desc">
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
    </section>
    <section class="security">
        <div class="security__orange orange"></div>
        <div class="container">
            <div class="management__title">
                Функции управления идентификацией
            </div>
            <div class="security__body row">
                <img src="{{'/upload/news/news-1.jpg'}}" alt="img">
                <div class="security__desc">
                    <div class="security__subtitle subtitle">Центральный каталог</div>
                    <div class="security__text text">
                        Соберите свои источники идентичности в единую ссылку на идентичность, чтобы легко управлять правами доступа в одном централизованном месте.
                        <ul>
                            <li>Поддержка каталогов Active Directory, Azure AD, LDAP и Google G Suite directory</li>
                            <li>Импортируйте столько каталогов сколько необходимо в вашу платформу WALLIX Trustelem</li>
                            <li>Полный или частичный импорт каталога на основе членства в группе и фильтрации атрибутов</li>
                            <li>Импорт членства в группах и атрибутов пользователей для определения надлежащих политик управления доступом</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="news">
        <div class="container">
            <div class="news__row news__row--three">
                <div class="news__item">
                    <div class="news__subtitle">
                        SSO
                    </div>
                    <div class="news__text">
                        Предоставьте пользователям возможность единого входа...
                    </div>
                    <div class="news__xz">
                        <img src="{{'/upload/news/news-2.jpg'}}" alt="img">
                        <a href="#" class="news__link">
                            Читать
                        </a>
                    </div>
                </div>
                <div class="news__item">
                    <div class="news__subtitle w">
                        Мид
                    </div>
                    <div class="news__text">
                        Выберите один из множества механизмов многофакторной...
                    </div>
                    <div class="news__xz">
                        <img src="{{'/upload/news/news-3.jpg'}}" alt="img">
                        <a href="#" class="news__link">
                            Читать
                        </a>
                    </div>
                </div>
                <div class="news__item">
                    <div class="news__subtitle w">
                        Самообслуживание
                    </div>
                    <div class="news__text">
                        Предложите пользователям решение самообслуживания...
                    </div>
                    <div class="news__xz">
                        <img src="{{'/upload/news/news-3.jpg'}}" alt="img">
                        <a href="#" class="news__link">
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
    <section class="list">
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
        <div class="video__bg" style="background: url('{{asset('assets/img/background/video-bg.jpg')}}');">
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
    </section>
    <x-message></x-message>
@endsection
