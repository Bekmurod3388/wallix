
<x-layout>

<x-header></x-header>
    <section class="preview" style="background: url('{{asset('assets/img/background/priview-bg.png')}}') no-repeat">
    <img src="{{asset('assets/img/background/preview-2.png')}}" alt="" />
    <div class="container">
        <div class="preview__body">
            <h1 class="preview__title">Wallix Bastion
                Менеджер доступа</h1>
            <div class="preview__desc">
                Безопасный удаленный доступ к важным ресурсам для ИТ-администраторов и внешних поставщиков
            </div>
            <button class="preview__btn btn">Подробно</button>
        </div>
    </div>
</section>
<section class="desc">
    <div class="container">
        <div class="desc__row">
            <div class="desc__title">
                Укрепите свой периметр безопасности
            </div>
            <div class="desc__text">
                Защита и управление внешним доступом к критически важным ИТ-активам является приоритетной задачей в нынешних условиях удалённого доступа и безудержных киберугроз.
                <br>
                Предоставьте вашим ИТ-администраторам и внешним поставщикам возможность безопасно подключаться из любого места с помощью возможностей secure-by-design; дайте возможность вашей ИТ-команде гарантировать, что только нужный человек может получить доступ к нужному ресурсу для нужной цели.
                <br>
                Никаких неотслеживаемых VPN. Никаких толстых клиентов. Никаких плагинов. Просто необслуживаемый и упрощённый безопасный доступ к ИТ-ресурсам со встроенным мониторингом для полной гарантии.
            </div>
        </div>
    </div>
</section>
<section class="management">
    <div class="management__orange orange"></div>
    <div class="container">
        <div class="management__title">Безопасный удалённый и внешний доступ к ИТ-ресурсам</div>
        <div class="management__list">
            <div class="management__item">
                <img src="{{asset('assets/img/management-4.jpg')}}" alt="management" />
                <div class="management__subtitle">Централизованное управление
                    внешним доступом</div>
                <div class="management__desc">
                    • Единая консоль для мониторинга и аудита внешнего доступа ко всем вашим бастионам<br>
                    • Глобальный поиск для выявления подозрительного поведения в записях сеансов на основе ключевых слов и метаданных<br>
                    • Упрощенный контроль над привилегиями и надзор за привилегированной деятельностью
                </div>
            </div>
            <div class="management__item">
                <img src="{{asset('assets/img/management-4.jpg')}}" alt="management" />
                <div class="management__subtitle">Простая и легкая альтернатива
                    сложным решениям</div>
                <div class="management__desc">
                    • Неизменный пользовательский опыт: Администраторы продолжают работать с критическими системами через веб-браузер без дополнительных плагинов<br>
                    • Снижение TCO благодаря SSH/RDP-доступу через HTML5 без дорогостоящих fat-клиентов на конечных точках<br>
                    • Ограниченная поверхность атаки с одной защищенной точкой входа HTTPS для внешнего доступа
                </div>
            </div>
            <div class="management__item">
                <img src="{{asset('assets/img/management-4.jpg')}}" alt="management" />
                <div class="management__subtitle">Повышенная безопасность
                    с помощью решений для
                    идентификации пользователей</div>
                <div class="management__desc">
                    • Интегрируется с другими решениями безопасности, включая WALLIX Trustelem for SSO и identity federation, а также WALLIX Authenticator MFA<br>
                    • Поддерживает стандартные протоколы для подключения к сторонним решениям MFA<br>
                    • Отслеживает и регистрирует привилегированный доступ пользователей, в отличие от традиционных решений VPN-доступа
                </div>
            </div>
        </div>
        <div class="management__line line"></div>
    </div>
</section>
<section class="pack pack--white">
    <div class="container">
        <div class="pack__title pack__title--p title">WALLIX Bastion Access Manager</div>
        <div class="pack__desc">
            Безопасный внешний и удаленный доступ к конфиденциальным
            ИТ-ресурсам с помощью оптимизированной централизованной
            платформы управления
        </div>
        <div class="pack__row row">
            <img src="{{asset('assets/img/pack-1.jpg')}}" />
            <div class="pack__item">
                <div class="pack__subtitle subtitle">
                    WALLIX Bastion Access Manager предлагает
                    следующие функциональные возможности:
                </div>
                <div class="pack__text text">
                    <ul>
                        <li>Включите безопасный доступ для внешних пользователей через веб-шлюз, чтобы значительно уменьшить поверхность атаки</li>
                        <li>Проверьте свой Bastion (Бастион) и обнаружьте подозрительное поведение пользователя с централизованной консоли</li>
                        <li>Доступ к обширным метаданным привилегированной активности сеанса для быстрого анализа длинных сеансов.</li>
                        <li>Быстро определите сеанс благодаря глобальному поиску, охватывающему записи сеансов из нескольких Bastion (Бастион).</li>
                        <li>Поиск и воспроизведение определенных действий сеанса для расширенного обнаружения угроз</li>
                        <li>Оптимизируйте пользовательский интерфейс системных администраторов благодаря веб-порталу, встраивающему RDP и SSH клиенты</li>
                        <li>Уменьшите общую стоимость владения (TCO) с уникальным шлюзом, без VPN-клиентов и бесшовной интеграцией в ваших ИТ-системах</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
    <x-message>

    </x-message>
<x-footer>
</x-footer>
<script src="js/script.min.js"></script>
</x-layout>
