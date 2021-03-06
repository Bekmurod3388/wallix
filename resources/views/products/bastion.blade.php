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
                            Wallix Bastion
                        </h1>
                        <div class="preview__desc">
                            Упрощенное управление привилегированным доступом для обеспечения
                            безопасности и мониторинга доступа из любого места
                        </div>
                        <a href="#message" class="preview__btn btn">Попробовать бесплатно</a>
                    </div>
                </div>
            </div>
            <div class="preview--right"
                    style="background-image: url('{{'/img/background/preview-2.png'}}')">
{{--                <img src="{{asset('img/background/preview-2.png')}}" alt="">--}}
            </div>
        </div>
    </section>
    <section class="desc">
        <div class="container">
            <div class="desc__title">
                    Европейский лидер в области управления привилегированным доступом
            </div>
            <div class="line2"></div>
            <div class="desc__row">
                <div class="desc__title">
                    
                </div>
                <div class="desc__text">
                    Простое в использовании и развертывании решение WALLIX Bastion PAM
                    обеспечивает надежную защиту и контроль за привилегированным
                    доступом к критически важной ИТ-инфраструктуре.
                    <br />Уменьшите поверхность атаки и выполните нормативные требования
                    соответствия с упрощенным управлением привилегированным доступом.
                </div>
            </div>
            <div class="line2"></div>
        </div>
    </section>
    <!-- <section class="security just-align">
        <div class="security__orange orange"></div>
        <div class="container">
            <div class="management__title">
                Комплексные функции безопасности доступа
            </div>
            <div class="security__body row">
                <img src="{{asset('img/products/bastion-1.jpg')}}" alt="img">
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
    </section> -->
    <div class="new-zero row">
        <div class="new-zero--left"></div>
        <div class="new-zero--center">
            <div class="border__title">
                <div class="border__pifagor"></div>
                <div class="new-zero__title title">
                Комплексные функции безопасности доступа
                </div>
            </div>
            <div class="new-zero__subtitle subtitle">
            Масштабируемая PAM
            </div>
            <div class="new-zero__text text">
                Испытайте масштабируемое развёртывание с наилучшей общей стоимостью владения (TCO), как локально, так и в облаке.
                <br>
                <br>
                <div class="new-zero--grey">Развёртывание решения PAM.</div>
                WALLIX Bastion — это не разовый проект, а модульное решение, позволяющее организациям развёртывать решение в соответствии с потребностями макроуровня, запуская функции по одной за раз, чтобы облегчить долгосрочный и устойчивый подход к обеспечению безопасности доступа к привилегиям. Покажите результаты и быстро запустите WALLIX Bastion, а также добавьте дополнительные компоненты в градуированный процесс для удобства управления изменениями.
                <br>
                <br>
                <div class="new-zero--grey">Значительная экономия.</div>
                Испытайте масштабируемое развёртывание с наилучшей общей стоимостью владения (TCO), как локально, так и в облаке.
            </div>
            <div class="new-zero__btns">
                <div class="new-zero__btns--top">
                    <div class="new-zero__btn btn">Менеджер сеансов</div>
                    <div class="new-zero__btn btn">Безопасный удаленный доступ</div>
                </div>
                <div class="new-zero__btns--top">
                    <div class="new-zero__btn btn">Постоянные привилегии</div>
                    <div class="new-zero__btn btn">RPA</div>
                </div>
            </div>
        </div>
        <img class='not-border' src="{{asset('assets/img/new-zero-1.jpg')}}" alt="title">
    </div>
    <!-- <section class="zero just-align">
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
    </section> -->

   
    <section class="management just-align">
        <div class="management__orange orange"></div>
        <div class="container">
            <div class="management__title">Wallix Bastion</div>
            <div class="management__list">
                <div class="management__item">
                    <img src="{{asset('img/products/bast-1.png')}}" alt="management" />
                    <div class="management__subtitle">Гибкое лицензирование</div>
                    <div class="management__desc">
                        <ul class='management__ul'>
                            <li>Годовая подписка с подпиской на обслуживание от 12 до 36 месяцев;</li>
                            <li> Бессрочная лицензия с обслуживанием от 12 до 36 месяцев;</li>
                            <li> По
                            требованию на основе ежемесячной подписки плюс ежемесячное
                            использование накладных расходов для минимального 12-месячного
                            контракта, обслуживание от 12 до 36 месяцев</li>
                        </ul>
                    </div>
                <a href="{{route('contact')}}" class="management__link"> Свзаться </a>
                </div>
                <div class="management__item">
                    <img src="{{asset('img/products/bast-2.png')}}" alt="management" />
                    <div class="management__subtitle">Управляемые службы</div>
                    <div class="management__desc">
                        
                        Экономьте время и ресурсы благодаря привилегированному доступу,
                        управляемому как услуга командой WALLIX & Abris. WALLIX Bastion
                        как Управляемые службы может быть размещен либо WALLIX & Abris,
                        либо клиентом, как на локальной, так и на облачных платформах.
                        Требуется минимальная подписка на 36 месяцев. Техническое
                        обслуживание на золотом уровне входит в стоимость проживания.
                    </div>
                <a href="https://www.wallix.com/privileged-access-management/bastion-managed-services/" class="management__link"> Узнать больше </a>
                </div>
                <div class="management__item">
                    <img src="{{asset('img/products/bast-3.png')}}" alt="management" />
                    <div class="management__subtitle">Облачный рынок</div>
                    <div class="management__desc">
                        WALLIX Bastion доступен на нескольких облачных маркетплейсах для
                        различных технических сред, включая:<br />
                        AWS
                        <ul class='management__ul'>
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
    <section class="desc">
        <div class="container">
            <div class="desc__title">
            Пакеты Wallix Bastion
            </div>
            <div class="line2"></div>
            <div class="desc__row">
                <div class="paket-block">
                    <img class="paket-block__icon" src="{{asset('assets/paket-block-svg-2.svg')}}"/>
                    <div class="paket-block__title subtitle">Стандартный пакет</div>
                    <div class="paket-block__text text">Предлагает функции PAM, необходимые для обеспечения оптимального контроля привилегированного доступа.</div>
                </div>
                <div class="paket-block">
                <img class="paket-block__icon" src="{{asset('assets/paket-block-svg-1.svg')}}"/>
                    <div class="paket-block__title subtitle">Премиум пакет</div>
                    <div class="paket-block__text text">Содержит функциональность стандартного пакета, а также функциональность для расширенной защиты PAM.</div>
                </div>
            </div>
            <div class="line2"></div>
        </div>
    </section>
    <div class="new-zero row mtz">
        <div class="new-zero--left"></div>
        <div class="new-zero--center">
            <div class="border__title">
                <div class="border__pifagor"></div>
                <div class="new-zero__title title">
                    Функциональные возможности РАМ
                </div>
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
            <div class="new-zero__imgs">
                <img class='new-zero__logo' src="{{asset('assets/img/pack-2.png')}}" alt="img">
                <img class='new-zero__logo' src="{{ asset('assets/img/pack-3.png')}}" alt="img">
            </div>
        </div>
        <img class='not-border' src="{{asset('assets/img/new-zero-2.jpg')}}" alt="title">
    </div>
    <x-message></x-message>
@endsection
