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
                            Wallix Bastion
                        </h1>
                        <div class="preview__desc">
                            Упрощенное управление привилегированным доступом для обеспечения
                            безопасности и мониторинга доступа из любого места
                        </div>
                        <button class="preview__btn btn">
                            Подробно
                        </button>
                    </div>
                </div>
            </div>
            <div class="preview--right">
                <img src="{{asset('assets/img/background/preview-2.png')}}" alt="">
            </div>
        </div>
    </section>
<section class="desc">
    <div class="container">
        <div class="desc__row">
            <div class="desc__title">
                Европейский лидер в области управления привилегированным доступом
            </div>
            <div class="desc__text">
                Простое в использовании и развертывании решение WALLIX Bastion PAM
                обеспечивает надежную защиту и контроль за привилегированным
                доступом к критически важной ИТ-инфраструктуре.
                <br />Уменьшите поверхность атаки и выполните нормативные требования
                соответствия с упрощенным управлением привилегированным доступом.
            </div>
        </div>
    </div>
</section>
<section class="security">
    <div class="security__orange orange"></div>
    <div class="container">
        <div class="management__title">
            Комплексные функции безопасности доступа
        </div>
        <div class="security__body row">
            <img src="{{asset('assets/img/bastion-1.jpg')}}" alt="img">
            <div class="security__desc">
                <div class="security__subtitle subtitle">Менеджер сеансов</div>
                <div class="security__text text">
                    Защитите свои критически важные активы от кибератак с помощью
                    мощных и простых в использовании возможностей управления
                    привилегированными сеансами. Достигайте соответствия требованиям
                    кибербезопасности и контролируйте активность привилегированных
                    сеансов, одновременно повышая производительность
                    ИТ-администраторов и обеспечивая легкий контроль над
                    привилегированным доступом. WALLIX Session Manager предлагает
                    ИТ-лидерам мощное решение для управления, контроля и аудита
                    доступа к сетевым активам с надежной системой безопасности,
                    гарантирующей, что только нужный человек имеет доступ к нужным
                    ИТ-ресурсам.
                </div>
            </div>
        </div>
        <div class="management__line line"></div>
    </div>
</section>
<section class="zero">
    <div class="container">
        <div class="zero__row row">
            <img src="{{asset('assets/img/zero-1.jpg')}}" alt="title">
            <div class="zero__desc">
                <div class="zero__subtitle subtitle">
                    Безопасный удаленный доступ
                </div>
                <div class="zero__text text">
                    Удаленная работа растет в организациях по всему миру, создавая
                    потребность в облегчении безопасного доступа для все большего
                    числа удаленных пользователей и делая традиционные VPN-решения все
                    менее и менее актуальными из-за их стоимости и сложности.
                    <br />Обеспечьте безопасный удаленный доступ к ИТ-администраторам
                    и внешним поставщикам услуг с помощью решения secure connectivity
                    на базе HTML5, доступного из любого браузера. Устраните
                    необходимость в RDP, SSH или telnet-соединениях, сделав доступ к
                    бастиону WALLIX простым и многофункциональным. Удаленные сеансы
                    имеют тот же уровень контроля, утверждения, отслеживания и
                    мониторинга, что и внутренние сеансы, что позволяет
                    ИТ-руководителям контролировать, проверять и анализировать весь
                    привилегированный доступ из любого места.
                </div>
            </div>
        </div>
        <div class="zero__row--resevre row">
            <div class="zero__desc">
                <div class="zero__subtitle subtitle">
                    Just-In-Time & Zero Постоянные Привилегии
                </div>
                <div class="zero__text text">
                    Политики JIT и нулевых постоянных привилегий являются основным
                    способом защиты ИТ-активов и обеспечения того, чтобы правильный
                    пользователь имел доступ к правильным ресурсам, для правильной
                    цели и для правильного периода времени. Предоставляйте привилегии
                    только тогда, когда это необходимо для уменьшения поверхности
                    атаки, минимизации внутренней угрозы и внедрения надёжной политики
                    безопасности для защиты конфиденциальных ИТ-ресурсов.
                    Предоставлять привилегированный доступ к системам только по мере
                    необходимости на основе Принципа наименьших привилегий, не больше
                    и не меньше.
                </div>
            </div>
            <img src="{{asset('assets/img/zero-2.jpg')}}" alt="img">
        </div>
        <div class="zero__row row">
            <img src="{{asset('assets/img/zero-3.jpg')}}" alt="img">
            <div class="zero__desc">
                <div class="zero__subtitle subtitle">Масштабируемая PAM легко</div>
                <div class="zero__text text">
                    Испытайте масштабируемое развёртывание с наилучшей общей
                    стоимостью владения (TCO), как локально, так и в облаке.
                    <br />Развёртывание решения PAM — это не разовый проект. WALLIX
                    Bastion — это модульное решение, позволяющее организациям
                    развёртывать решение в соответствии с потребностями макроуровня,
                    запуская функции по одной за раз, чтобы облегчить долгосрочный
                    и устойчивый подход к обеспечению безопасности доступа
                    к привилегиям. Покажите результаты и быстро запустите WALLIX
                    Bastion, а также добавьте дополнительные компоненты
                    в градуированный процесс для удобства управления изменениями.
                    <br />Извлеките выгоду из значительной экономии в краткосрочной
                    и долгосрочной перспективе. Гибкость WALLIX Bastion и небольшое
                    количество серверов, необходимых для запуска решения, позволяют
                    ИТ-командам получить значительную экономию административных
                    затрат, затрат на техническое обслуживание и на инфраструктуру,
                    что делает решение WALLIX Bastion PAM экономически эффективным
                </div>
            </div>
        </div>
        <div class="zero__row--resevre row">
            <div class="zero__desc">
                <div class="zero__subtitle subtitle">
                    Роботизированная автоматизация технологических процессов (RPA)
                </div>
                <div class="zero__text text">
                    Роботизированная автоматизация процессов (РПА) все больше
                    приобретает значение в ИТ-и ОТ-организациях. Все больше и больше
                    детализации требуется для управления средствами управления
                    привилегированным доступом и автоматизации их задач. С помощью
                    REST API WALLIX Bastion пользователи могут получить доступ к любой
                    функции Bastion так же, как если бы они получали доступ
                    к ней из обычного пользовательского интерфейса. Любая функция,
                    доступная в традиционном графическом интерфейсе, становится
                    доступной через API, который даёт роботу доступ к WALLIX Bastion
                    на том же уровне функциональности, что и любому человеку,
                    работающему над ним, включая доступ к секретам и учётным данным
                    или доступ к нескольким системам.
                </div>
            </div>
            <img src="{{asset('assets/img/zero-4.jpg')}}" alt="img">
        </div>
    </div>
</section>
<section class="management">
    <div class="management__orange orange"></div>
    <div class="container">
        <div class="management__title">Wallix Bastion</div>
        <div class="management__list">
            <div class="management__item">
                <img src="{{asset('assets/img/management-4.jpg')}}" alt="management" />
                <div class="management__subtitle">Гибкое лицензирование</div>
                <div class="management__desc">
                    Годовая подписка с подпиской на обслуживание от 12 до 36 месяцев;
                    Бессрочная лицензия с обслуживанием от 12 до 36 месяцев; По
                    требованию на основе ежемесячной подписки плюс ежемесячное
                    использование накладных расходов для минимального 12-месячного
                    контракта, обслуживание от 12 до 36 месяцев
                </div>
                <a href="#" class="management__link"> Свзаться </a>
            </div>
            <div class="management__item">
                <img src="{{asset('assets/img/management-4.jpg')}}" alt="management" />
                <div class="management__subtitle">Управляемые службы</div>
                <div class="management__desc">
                    Экономьте время и ресурсы благодаря привилегированному доступу,
                    управляемому как услуга командой WALLIX & Abris. WALLIX Bastion
                    как Управляемые службы может быть размещен либо WALLIX & Abris,
                    либо клиентом, как на локальной, так и на облачных платформах.
                    Требуется минимальная подписка на 36 месяцев. Техническое
                    обслуживание на золотом уровне входит в стоимость проживания.
                </div>
                <a href="#" class="management__link"> Узнать больше </a>
            </div>
            <div class="management__item">
                <img src="{{asset('assets/img/management-4.jpg')}}" alt="management" />
                <div class="management__subtitle">Облачный рынок</div>
                <div class="management__desc">
                    WALLIX Bastion доступен на нескольких облачных маркетплейсах для
                    различных технических сред, включая:<br />
                    AWS
                    <ul>
                        <li>Lasure</li>
                        <li>GCP</li>
                        <li>KVM/OpenStack</li>
                        <li>Hyper-V</li>
                        <li>VMware</li>
                    </ul>
                </div>
                <a href="#" class="management__link"> Wallix Bastion </a>
            </div>
        </div>
        <div class="management__line line"></div>
    </div>
</section>
<section class="pack">
    <div class="container">
        <div class="pack__title title">Пакеты Wallix Bastion</div>
        <div class="pack__desc">
            Пакеты WALLIX Bastion удовлетворяют все потребности организаций, от
            малых и средних предприятий до крупных счетов
        </div>
        <div class="pack__row row">
            <img src="{{asset('assets/img/pack-1.jpg')}}" alt="img">
            <div class="pack__item">
                <div class="pack__subtitle subtitle">
                    Платформа Bastion (Бастион) предлагает следующие функциональные
                    возможности PAM:
                </div>
                <div class="pack__text text">
                    <ul>
                        <li>Контроль доступа</li>
                        <li>Хранилище паролей</li>
                        <li>Управление привилегированными сеансами</li>
                        <li>Управление паролями и SSH-ключами</li>
                    </ul>
                </div>
                <div class="pack__subtitle subtitle">Варианты Bastion:</div>
                <div class="pack__text text">
                    <ul>
                        <li>Менеджер доступа (AM)</li>
                        <li>Управление паролями приложений (AAPM)</li>
                        <li>Универсальное туннелирование (UT)</li>
                        <li>
                            Повышение привилегий и управление делегированием полномочий
                            (PEDM, BestSafe)
                        </li>
                        <li>
                            Кластеризация HA 3+ (HA с 3 или более узлами на кластер)
                        </li>
                        <li>Академия Wallix & Abris</li>
                        <li>Профессиональные услуги Wallix & Abris</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="pack__subtext">Функциональные пакеты Bastion</div>
        <div class="list__body pack__body">
            <div class="list__item">
                <div class="list__icon">
                    <div class="list__border">
                        <img src="{{asset('assets/img/icon/list.svg')}}" alt="img">
                    </div>
                </div>
                <div class="list__desc">
                    <div class="list__title">Стандартный пакет</div>
                    <div class="list__text">
                        Предлагает функции PAM, необходимые для обеспечения оптимального
                        контроля привилегированного доступа.
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
                    <div class="list__title">Премиум пакет</div>
                    <div class="list__text">
                        Содержит функциональность стандартного пакета, а также
                        функциональность для расширенной защиты PAM.
                    </div>
                </div>
            </div>
        </div>
        <div class="pack__line line"></div>
        <div class="pack__images">
            <img src="{{asset('assets/img/pack-2.png')}}" alt="img">
            <img src="{{ asset('assets/img/pack-3.png')}}" alt="img">
        </div>
    </div>
</section>
@endsection
{{--<script src="js/script.min.js"></script>--}}
{{--    <section class="preview">--}}
{{--        <div class="preview__wrapper">--}}
{{--            <div class="preview--left">--}}
{{--                <img src="./img/background/priview-bg.png" alt="">--}}
{{--            </div>--}}
{{--            <div class="preview--center">--}}
{{--                <div class="container">--}}
{{--                    <div class="preview__body">--}}
{{--                        <h1 class="preview__title">--}}
{{--                            Обеспечьте цифровую--}}
{{--                            трансформацию--}}
{{--                        </h1>--}}
{{--                        <div class="preview__desc">--}}
{{--                            Обеспечьте безопасность вашей трансформации--}}
{{--                            независимо от того, где она подключена--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="preview--right">--}}
{{--                <img src="./img/background/preview-6.png" alt="">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <section class="desc">--}}
{{--        <div class="container">--}}
{{--            <div class="desc__row">--}}
{{--                <div class="desc__title">--}}
{{--                    Безопасное цифровое будущее--}}
{{--                </div>--}}
{{--                <div class="desc__text">--}}
{{--                    Бизнес движется быстро, а технологии-ещё быстрее. Возьмите под контроль своё цифровое будущее с помощью безопасных удалённых подключений для пользователей, подключающихся из любого места и в любое место, даже в облако.--}}
{{--                    <br><br>Ничто так быстро не развивается, как разработка. Автоматизируйте безопасность для быстрых, эффективных DevSecOps и роботизированной автоматизации процессов (RPA)--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="desc__line line"></div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <section class="zero">--}}
{{--        <div class="container">--}}
{{--            <div class="zero__row row">--}}
{{--                <img src="./img/zero-23.jpg" />--}}
{{--                <div class="zero__desc">--}}
{{--                    <div class="zero__subtitle subtitle">--}}
{{--                        Удаленный доступ--}}
{{--                    </div>--}}
{{--                    <div class="zero__text text">--}}
{{--                        Безопасный доступ к ИТ-активам из любого места, не влияя на эффективность ваших команд. Контролируйте, кто имеет доступ к чему и когда, и включите удаленный доступ с полной уверенностью.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="zero__row--resevre row">--}}
{{--                <div class="zero__desc">--}}
{{--                    <div class="zero__subtitle subtitle">--}}
{{--                        Облачная безопасность--}}
{{--                    </div>--}}
{{--                    <div class="zero__text text">--}}
{{--                        Облачные вычисления произвели революцию в том, как компании хранят критически важные данные, сколько их можно хранить и как к ним можно получить доступ с помощью нового виртуального хостинга данных в частных, публичных и гибридных облачных средах. Организации должны защищать и управлять миграцией своих систем в облако, а также обеспечивать беспрепятственный и безопасный доступ к данным и критически важным приложениям. WALLIX проводит организации через сложности достижения облачной безопасности для безопасного цифрового будущего.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <img src="./img/zero-24.jpg" />--}}
{{--            </div>--}}
{{--            <div class="zero__row row">--}}
{{--                <img src="./img/zero-25.jpg" />--}}
{{--                <div class="zero__desc">--}}
{{--                    <div class="zero__subtitle subtitle">--}}
{{--                        DevOps--}}
{{--                    </div>--}}
{{--                    <div class="zero__text text">--}}
{{--                        Безопасность не может отойти на задний план в высокоскоростном мире DevOps. Устраните постоянные привилегии и обеспечьте безопасность процесса, не нарушая гибких рабочих процессов с помощью автоматизированного управления привилегированным доступом.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="zero__row--resevre row">--}}
{{--                <div class="zero__desc">--}}
{{--                    <div class="zero__subtitle subtitle">--}}
{{--                        Роботизированная Автоматизация--}}
{{--                        технологических процессов (RPA)--}}
{{--                    </div>--}}
{{--                    <div class="zero__text text">--}}
{{--                        RPA оптимизирует производительность, обеспечивает соответствие требованиям и стандартам, а также повышает производительность. Обеспечьте свое цифровое будущее с помощью решений для защиты поверхности атаки, блокирования утечек данных и оптимизации системы безопасности.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <img src="./img/zero-26.jpg" />--}}
{{--            </div>--}}
{{--            <div class="zero__line line">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <section class="list">--}}
{{--        <div class="container">--}}
{{--            <div class="list__label title">Решения для обеспечения безопасности--}}
{{--                цифровой трансформации</div>--}}
{{--            <div class="list__body">--}}
{{--                <div class="list__item">--}}
{{--                    <div class="list__icon">--}}
{{--                        <div class="list__border">--}}
{{--                            <img src="./img/icon/list-10.svg">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="list__desc">--}}
{{--                        <div class="list__title">--}}
{{--                            PAM--}}
{{--                        </div>--}}
{{--                        <div class="list__text">--}}
{{--                            Создайте среду нулевого доверия и снизьте риск с помощью управления привилегированным доступом и PEDM.--}}
{{--                        </div>--}}
{{--                        <a href="#" class="list__link">--}}
{{--                            Wallix Bastion--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="list__item">--}}
{{--                    <div class="list__icon">--}}
{{--                        <div class="list__border">--}}
{{--                            <img src="./img/icon/list-11.svg">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="list__desc">--}}
{{--                        <div class="list__title">--}}
{{--                            IDAAS--}}
{{--                        </div>--}}
{{--                        <div class="list__text">--}}
{{--                            Упрощение и безопасность доступа пользователей к бизнес-приложениям с помощью управления доступом к достоверениям.--}}
{{--                        </div>--}}
{{--                        <a href="#" class="list__link">--}}
{{--                            Wallix Trustelem--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="list__item">--}}
{{--                    <div class="list__icon">--}}
{{--                        <div class="list__border">--}}
{{--                            <img src="./img/icon/list-12.svg">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="list__desc">--}}
{{--                        <div class="list__title">--}}
{{--                            EPM--}}
{{--                        </div>--}}
{{--                        <div class="list__text">--}}
{{--                            Получите точный контроль над конечными точками даже за пределами сети с помощью управления привилегиями конечных точек.--}}
{{--                        </div>--}}
{{--                        <a href="#" class="list__link">--}}
{{--                            Wallix BestSafe--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}
