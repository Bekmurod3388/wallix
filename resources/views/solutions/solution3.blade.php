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
                            Управление рисками
                            и безопасность
                        </h1>
                        <div class="preview__desc">
                            Упрощение аудита и соблюдение требований безопасности с помощью сквозного управления доступом
                        </div>
                    </div>
                </div>
            </div>
            <div class="preview--right"
                     style="background-image: url('{{'/img/background/preview-8.png'}}')">
                <img src="{{asset('img/background/preview-8.png')}}" alt="">
            </div>
        </div>
    </section>
    <section class="desc just-align">
        <div class="container">
            <div class="desc__row">
                <div class="desc__title">
                    Управление рисками кибербезопасности
                </div>
                <div class="desc__text">
                    Ваш бизнес полагается на ИТ-системы, чтобы оставаться в рабочем состоянии. Убедитесь, что ваши наиболее уязвимые системы защищены от пользователей – как внутренних, так и внешних – для обеспечения непрерывности бизнеса и производительности. <br> <br>
                    Управление доступом обеспечивает безопасность и спокойствие, снижает риск привилегированного доступа и дает возможность командам работать безопасно и эффективно, где бы они ни находились.
                </div>
            </div>
            <div class="desc__line line"></div>
        </div>
    </section>
    <section class="zero just-align">
        <div class="container">
            <div class="zero__row row">
                <img src="{{asset('assets/img/zero-29.jpg')}}" />
                <div class="zero__desc">
                    <div class="zero__subtitle subtitle">
                        Кибербезопасность
                        с нулевым доверием
                    </div>
                    <div class="zero__text text">
                        Используйте подход к безопасности с нулевым доверием и нулевыми привилегиями-убедитесь, что вы точно знаете, какие пользователи могут получить доступ к вашим ресурсам и что они делают с этим доступом благодаря комплексному управлению доступом.
                    </div>
                </div>
            </div>
            <div class="zero__row--resevre row">
                <div class="zero__desc">
                    <div class="zero__subtitle subtitle">
                        Инсайдерская угроза
                    </div>
                    <div class="zero__text text">
                        Поскольку 74% всех нарушений связаны с инсайдерской угрозой, даже самые надежные сотрудники подвергаются риску. Ответственность пользователей и контроль привилегий и сеансов внутренних и внешних пользователей.
                    </div>
                </div>
                <img src="{{asset('assets/img/zero-30.jpg')}}" />
            </div>
            <div class="zero__row row">
                <img src="{{asset('assets/img/zero-31.jpg')}}" />
                <div class="zero__desc">
                    <div class="zero__subtitle subtitle">
                        Как раз вовремя
                    </div>
                    <div class="zero__text text">
                        Just-In-Time PAM резко ограничивает количество времени, в течение которого учетная запись обладает повышенными привилегиями и правами доступа, чтобы резко уменьшить риск и поверхность атаки. Привилегированные учетные записи используются только в течение времени, необходимого для выполнения задачи или действия. <br> <br>
                        Решение WALLIX Bastion Privileged Access Management сочетает в себе Управление привилегированными сеансами с повышением привилегий и управлением делегированием (PEDM), чтобы обеспечить сквозной подход с нулевыми постоянными привилегиями благодаря таким функциям, как JIT-доступ с использованием членства в группе, доступ, предоставляемый на ограниченное время сводчатым учетным записям, и JIT-доступ через повышение привилегий.
                    </div>
                </div>
            </div>
            <div class="zero__line line">
            </div>
        </div>
    </section>
    <x-list></x-list>
@endsection
