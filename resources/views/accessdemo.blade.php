
<x-layout>

<x-header></x-header>
<section
    class="preview"
    style="background: url('./img/background/priview-bg.png') no-repeat"
>
    <img src="{{asset('assets/img/background/preview-9.png')}}" alt="" />
    <div class="container">
        <div class="preview__body">
            <h1 class="preview__title">Руководство по
                безопасности доступа</h1>
            <div class="preview__desc">
                Понимание основ надежной безопасности доступа</div>
            <button class="preview__btn btn">Подробно</button>
        </div>
    </div>
</section>
<section class="zero">
    <div class="container">
        <div class="zero__row row">
            <img src="{{asset('assets/img/zero-13.jpg')}}" />
            <div class="zero__desc">
                <div class="zero__subtitle subtitle">
                    Понимание основ строгой
                    безопасности доступа
                </div>
                <div class="zero__text text">
                    Современный бизнес нуждается в защите от угроз, которые существуют как внутри, так и вне его стен. Безопасность доступа даёт компаниям инструменты, необходимые для того, чтобы точно видеть, кто получает доступ к их ресурсам, а затем контролировать уровни привилегий этих пользователей. Три процесса являются ключевыми для этого: идентификация, аутентификация и авторизация.<br><br>
                    Компании могут использовать надёжные решения во всей своей ИТ-инфраструктуре для решения следующих ключевых задач: Управление идентификацией (IDaaS & MFA), Управление Привилегированным Доступом (ПЭМ), а также Управление привилегиями конечных точек (ЭПМ).<br><br>
                    Безопасность доступа-это система политик и технологий, обеспечивающих доступ нужных людей к нужным ресурсам ИТ-инфраструктуры и защищающих вашу организацию от опасных кибератак. Загрузите технический документ, чтобы узнать больше о начале работы с надёжной защитой доступа от конца до конца.
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
