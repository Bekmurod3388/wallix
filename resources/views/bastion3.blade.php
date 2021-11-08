
<x-layout>
<x-header>

</x-header>
<section
    class="preview"
    style="background: url('{{asset(assets/img/background/priview-bg.png')}}'') no-repeat"
>
    <img src="{{asset('assets/img/background/preview-2.png')}}" alt="" />
    <div class="container">
        <div class="preview__body">
            <h1 class="preview__title">Wallix Bastion
                Пробная версия</h1>
            <div class="preview__desc">
                Опробуйте отмеченное наградами решение Wallix для управления привилегированным доступом совершенно бесплатно
            </div>
            <button class="preview__btn btn">Подробно</button>
        </div>
    </div>
</section>
<section class="pack pack--white">
    <div class="container">
        <div class="pack__title pack__title--p title">Попробуйте WALLIX Bastion
            бесплатно в течение месяца</div>
        <div class="pack__desc">
            Wallix Bastion это универсальная сертифицированная
            платформа управления привилегированным доступом
        </div>
        <div class="pack__row row">
            <img src="{{asset('assets/img/pack-4.jpg')}}" />
            <div class="pack__item">
                <div class="pack__text text">
                    <ul>
                        <li>Аудит и соответствие</li>
                        <li>Кибератаки и внутренние угрозы</li>
                        <li>Сторонний мониторинг и дистанционное управление</li>
                        <li>Сертифицированное решение «все в одном»</li>
                        <li>Полная видимость</li>
                        <li>Гарантированное принятие пользователем</li>
                        <li>Ненавязчивое и быстрое развертывание</li>
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
