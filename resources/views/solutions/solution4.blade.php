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
                            Wallix Inside
                        </h1>
                        <div class="preview__desc">
                            Встроенные технологии. Кибербезопасность по дизайну для ваших решений
                        </div>
                    </div>
                </div>
            </div>
            <div class="preview--right">
                <img src="{{asset('assets/img/background/preview-12.png')}}" alt="">
            </div>
        </div>
    </section>
    <section class="desc">
        <div class="container">
            <div class="desc__row">
                <div class="desc__title">
                    Укрепите безопасность ваших решений с помощью интегрированных технологий идентификации и управления доступом WALLIX & Abris
                </div>
                <div class="desc__text">
                    WALLIX привносит свой опыт в области кибербезопасности для всех участников, заинтересованных в безопасной цифровой трансформации и защите данных. Бренд WALLIX Inside позволяет конкретным секторам деятельности или профессиям разрабатывать восходящие решения, изначально внедряющие услуги кибербезопасности. Таким образом, кибербезопасность и внутренний бренд WALLIX являются отличительными элементами, которые должны быть продемонстрированы для того, чтобы повысить ценность её бизнеса и обеспечить доверие её клиентов, которые теперь рассматривают кибербезопасность как стандарт продуктов или услуг, на которые они подписываются.
                </div>
            </div>
            <div class="desc__line line"></div>
        </div>
    </section>
    <section class="zero">
        <div class="container">
            <div class="zero__row row">
                <img src="{{asset('assets/img/zero-32.jpg')}}" />
                <div class="zero__desc">
                    <div class="zero__subtitle subtitle">
                        Fives укрепляет безопасность индустрии
                        4.0 с помощью WALLIX Inside
                    </div>
                    <div class="zero__text text">
                        IoT-решение Fives CortX соединяет производственную среду завода с серией бизнес-приложений для сбора и анализа генерируемых данных для оптимизации производительности промышленных систем и оптимизации их технического обслуживания. WALLIX Inside защищает данные в шлюзе Fives CortX Gateway благодаря расширенной безопасности паролей соединений.
                    </div>
                </div>
            </div>
            <div class="zero__row--resevre row">
                <div class="zero__desc">
                    <div class="zero__subtitle subtitle">
                        Кибербезопасность и защита
                        данных По Замыслу
                    </div>
                    <div class="zero__text text">
                        Для инженеров по автоматизации, энергетиков, поставщиков услуг – Внедряйте инновации и взаимодействуйте с WALLIX Inside. Внедрите кибербезопасность и защиту данных в свои решения, чтобы обеспечить полный контроль доступа и безопасность, защиту паролем, защиту приложений и многое другое. <br> <br>
                        Вы остаетесь сосредоточенными на своем бизнесе, а WALLIX Inside привносит опыт в области кибербезопасности.
                    </div>
                </div>
                <img src="{{asset('assets/img/zero-33.jpg')}}" />
            </div>
            <div class="zero__line line">
            </div>
        </div>
    </section>

    <x-list></x-list>
    <x-message></x-message>
@endsection