@extends('layout')
@section('content')
    <section class="preview">
        <div class="preview__wrapper">
            <div class="preview--left">
                <img src="{{asset('assets/img/background/priview-bg.png')}}" alt="">
            </div>
            <div class="preview--center">
                <div class="container">
                    <div class="preview__body">
                        <h1 class="preview__title">
                            Безопасный
                            DevOps
                        </h1>
                        <div class="preview__desc">
                            Обеспечьте полностью защищенную экосистему для вашего DevOps, сохраняя при этом гибкость бизнеса
                        </div>
                        <button class="preview__btn btn">
                            Подробно
                        </button>
                    </div>
                </div>
            </div>
            <div class="preview--right">
                <img src="{{asset('assets/img/background/preview-6.png')}}" alt="">
            </div>
        </div>
    </section>
<section class="pack pack--white">
    <div class="container">
        <div class="pack__title pack__title--p title">Поддерживайте гибкость
            бизнеса с помощью DevOps</div>
        <div class="pack__desc">
            Безопасность часто является запоздалой мыслью или даже жертвой скорости и инструментов среды DevOps. Хотя DevOps может добиться сокращения циклов разработки за счет автоматизации и повышения масштабируемости облака, он также может “автоматизировать незащищенность”, создавая критические пробелы в безопасности.
        </div>
        <div class="zero__row row mt">
            <img src="{{asset('assets/img/zero-9.jpg')}}" />
            <div class="zero__desc">
                <div class="zero__text text m0">
                    Привилегированные учетные записи, используемые для процессов DevOps, снабжены неоправданно высоким уровнем постоянных привилегий, нарушая Принцип наименьших привилегий и открывая значительную уязвимость. Это особенно верно в мире DevOps из-за:
                    <br>
                    <br>
                    <ul>
                        <li>Обмен секретами, небезопасным кодом, жестко закодированными паролями и другими привилегиями</li>
                        <li>Скрипты или уязвимости в цепочке CI/CD, которые могут автоматически саботировать код или развертывать вредоносное ПО</li>
                        <li>Неправильная конфигурация, уязвимости и другие слабые места контейнеров</li>
                        <li>Чрезмерное предоставление привилегий в ландшафте DevOps</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="zero__row--resevre row">
            <div class="zero__desc">
                <div class="zero__subtitle subtitle">
                    DevOps и управление
                    привилегированным
                    доступом
                </div>
                <div class="zero__text text">
                    Решение Wallix Bastion PAM позволяет ИТ-отделам защищать привилегированный доступ, управляя работой привилегированных учётных записей. Будь то пользователь или приложение, вместо того чтобы напрямую подключаться к машине, подлежащей настройке, администратор должен пройти через Bastion, который берет на себя ответственность за проверку прав привилегированных учётных записей перед авторизацией и записью подключения к машине.
                    <br><br>
                    Таким образом, Bastion обеспечивает доступ к критически важным машинам организации (центральным серверам, маршрутизаторам, брандмауэрам и т. Д.) для всех корпоративных ресурсов, включая бизнес-приложения, цепочки управления промышленным оборудованием и базы данных, содержащие конфиденциальную информацию (личные данные, производственные секреты и т.д.)
                    <br><br><br>
                    <ul>
                        <li>Менеджер паролей защищает пароли и ключи SSH в сертифицированном хранилище и управляет сменой паролей администратора в инфраструктуре.</li>
                        <li>Управление паролями между приложениями (AAPM) шифрует учетные данные для эффективного управления и защиты подключений инструментов DevOps к ресурсам. AAPM обеспечивает работу DevOps, не влияя на производительность.</li>
                    </ul>
                </div>
            </div>
            <img src="{{asset('assets/img/zero-10.jpg')}}" />
        </div>
        <div class="pack__title pack__title--p title">Преимущества PAM
            для DevOps</div>
        <div class="pack__desc">
            Контролируйте и отслеживайте привилегированный доступ, чтобы гарантировать, что только правильный человек или правильный процесс может получить доступ к системе для выполнения авторизованного действия, без ущерба для скорости и гибкости в DevSecOps.
        </div>
        <div class="zero__row row mt">
            <img src="{{asset('assets/img/zero-11.jpg')}}" />
            <div class="zero__desc">
                <div class="zero__text text m0">
                    <ul>
                        <li>Искорените жестко закодированные пароли из вашего окружения</li>
                        <li>Предоставление учетных данных для сценариев и приложений для аутентификации или выполнения служб с повышенными привилегиями</li>
                        <li>Используйте расширенные API интерфейсы в своих административных рабочих процессах для безопасного извлечения учетных записей и учетных данных</li>
                        <li>Автоматизируйте ротацию учетных данных, чтобы даже если они будут перехвачены, их нельзя было использовать повторно</li>
                        <li>Запуск сеансовых сценариев для автоматизации администрирования целевых систем</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
    <x-message>
    </x-message>
@endsection
