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
                            Обеспечьте цифровую
                            трансформацию
                        </h1>
                        <div class="preview__desc">
                            Обеспечьте безопасность вашей трансформации
                            независимо от того, где она подключена
                        </div>
                    </div>
                </div>
            </div>
            <div class="preview--right">
                <img src="{{asset('assets/img/background/preview-6.png')}}" alt="img">
            </div>
        </div>
    </section>
    <section class="zero">
        <div class="container">
            <div class="zero__row row">
                <img src="{{'/img/solutions/zero-23.jpg'}}" alt="img">
                <div class="zero__desc">
                    <div class="zero__subtitle subtitle">
                        Удаленный доступ
                    </div>
                    <div class="zero__text text">
                        Безопасный доступ к ИТ-активам из любого места, не влияя на эффективность ваших команд. Контролируйте, кто имеет доступ к чему и когда, и включите удаленный доступ с полной уверенностью.
                    </div>
                </div>
            </div>
            <div class="zero__row--resevre row">
                <div class="zero__desc">
                    <div class="zero__subtitle subtitle">
                        Облачная безопасность
                    </div>
                    <div class="zero__text text">
                        Облачные вычисления произвели революцию в том, как компании хранят критически важные данные, сколько их можно хранить и как к ним можно получить доступ с помощью нового виртуального хостинга данных в частных, публичных и гибридных облачных средах. Организации должны защищать и управлять миграцией своих систем в облако, а также обеспечивать беспрепятственный и безопасный доступ к данным и критически важным приложениям. WALLIX проводит организации через сложности достижения облачной безопасности для безопасного цифрового будущего.
                    </div>
                </div>
                <img src="{{'/img/solutions/zero-24.jpg'}}" alt="img">
            </div>
            <div class="zero__row row">
                <img src="{{'/img/solutions/zero-25.jpg'}}" alt="img">
                <div class="zero__desc">
                    <div class="zero__subtitle subtitle">
                        DevOps
                    </div>
                    <div class="zero__text text">
                        Безопасность не может отойти на задний план в высокоскоростном мире DevOps. Устраните постоянные привилегии и обеспечьте безопасность процесса, не нарушая гибких рабочих процессов с помощью автоматизированного управления привилегированным доступом.
                    </div>
                </div>
            </div>
            <div class="zero__row--resevre row">
                <div class="zero__desc">
                    <div class="zero__subtitle subtitle">
                        Роботизированная Автоматизация
                        технологических процессов (RPA)
                    </div>
                    <div class="zero__text text">
                        RPA оптимизирует производительность, обеспечивает соответствие требованиям и стандартам, а также повышает производительность. Обеспечьте свое цифровое будущее с помощью решений для защиты поверхности атаки, блокирования утечек данных и оптимизации системы безопасности.
                    </div>
                </div>
                <img src="{{'/img/solutions/zero-26.jpg'}}" alt="img">
            </div>
            <div class="zero__line line">
            </div>
        </div>
    </section>
    <x-list></x-list>
@endsection
