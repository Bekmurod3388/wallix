<x-layout>

<x-header></x-header>
    <section class="preview">
        <div class="preview__wrapper">
            <div class="preview--left">
                <img src="{{asset('assets/img/background/priview-bg.png')}}" alt="">
            </div>
            <div class="preview--center">
                <div class="container">
                    <div class="preview__body">
                        <h1 class="preview__title">
                            Wallix BestSafe
                            Пробная версия
                        </h1>
                        <div class="preview__desc">
                            Опробуйте отмеченное наградами решение Wallix для управления привилегированным доступом совершенно бесплатно
                        </div>
                        <button class="preview__btn btn">
                            Подробно
                        </button>
                    </div>
                </div>
            </div>
            <div class="preview--right">
                <img src="{{asset('assets/img/background/preview-4.png')}}" alt="">
            </div>
        </div>
    </section>
<section class="pack pack--white">
    <div class="container">
        <div class="pack__title pack__title--p title">Попробуйте WALLIX BestSafe
            бесплатно в течение месяца</div>
        <div class="pack__desc">
            WALLIX BestSafe предлагает мощное управление
            правами конечных точек
        </div>
        <div class="pack__row row">
            <img src="{{asset('assets/img/pack-4.jpg')}}" />
            <div class="pack__item">
                <div class="pack__text text">
                    <ul>
                        <li>Модель безопасности с наименьшими привилегиями</li>
                        <li>Защита и предотвращение программ-вымогателей</li>
                        <li>Контроль разрешений конечных точек</li>
                        <li>Белый/серый/черный список приложений и процессов</li>
                        <li>Блокировать привилегии уровня приложения/процесса</li>
                        <li>Удобный пользовательский интерфейс для пользователей и администраторов</li>
                        <li>Простая в использовании платформа управления приложениями</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
    <x-message>

    </x-message>
<x-footer></x-footer>
<script src="js/script.min.js"></script>
</x-layout>
