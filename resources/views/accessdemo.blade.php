
<x-layout>

<x-header></x-header>
<section
    class="preview"
    style="background: url('./img/background/priview-bg.png') no-repeat"
>
    <img src="./img/background/preview-9.png" alt="" />
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
            <img src="./img/zero-13.jpg" />
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
<section class="form">
    <div class="container">
        <div class="form__body">
            <div class="form__title title">Форма обратной связи</div>
            <div class="form__desc">
                Хотите испытать наши решения? Свяжитесь с нами. Мы не шлем спам,
                и не передаём никому ваши данные.
            </div>
            <div class="form__subtitle">Меня интересует</div>
            <div class="form__subdesc">
                Пожалуйста, выберите хотя бы один вариант
            </div>
            <form action="#">
                <div class="form__check">
                    <div class="form__checkbox">
                        <input id="cb1" type="checkbox" checked />
                        <label for="cb1">Wallix Bastion</label>
                    </div>
                    <div class="form__checkbox">
                        <input id="cb2" type="checkbox" />
                        <label for="cb2">Wallix Trustelem</label>
                    </div>
                    <div class="form__checkbox">
                        <input id="cb3" type="checkbox" />
                        <label for="cb3">Wallix BestSafe</label>
                    </div>
                </div>
                <div class="form__row">
                    <div class="form__left">
                        <input type="text" placeholder="Имя" />
                        <input type="text" placeholder="Фамилия" />
                        <input type="email" placeholder="Электронная почта" />
                        <input type="text" placeholder="Телефон" />
                        <input type="text" placeholder="Название компании" />
                        <select class="form__select">
                            <option>Страна</option>
                        </select>
                        <select class="form__select">
                            <option>Промышленность</option>
                        </select>
                    </div>
                    <div class="form__right">
                        <textarea placeholder="Сообщение"></textarea>
                        <div class="form__agree">
                            Ознакомьтесь с <span>Политикой конфиденциальности</span>
                        </div>
                        <div class="form__btn btn">Отправить</div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<x-footer>

</x-footer>
<script src="js/script.min.js"></script>
</x-layout>
