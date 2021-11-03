
<x-layout>


<x-header></x-header>
<section
    class="preview"
    style="background: url('./img/background/priview-bg.png') no-repeat"
>
    <img src="./img/background/preview-8.png" alt="" />
    <div class="container">
        <div class="preview__body">
            <h1 class="preview__title">Кибербезопасность
                с нулевым доверием</h1>
            <div class="preview__desc">
                Что, как и почему в подходе к безопасности с нулевым доверием</div>
            <button class="preview__btn btn">Подробно</button>
        </div>
    </div>
</section>
<section class="zero">
    <div class="container">
        <div class="zero__row row">
            <img src="./img/zero-12.jpg" />
            <div class="zero__desc">
                <div class="zero__subtitle subtitle">
                    Проверка равных возможностей
                    учетных данных, удостоверений
                    личности и разрешений
                </div>
                <div class="zero__text text">
                    В области кибербезопасности организации не должны доверять никому, будь то инсайдер или аутсайдер, с непроверенным доступом к чувствительным ИТ-активам. Это, конечно, не означает, что ни одному актору не должен быть предоставлен привилегированный доступ к сетевым ресурсам, что, очевидно, было бы неосуществимо. Скорее, это требует схемы безопасности, которая просит пользователей не только доказать, что у них есть учетныеданные для входа, но и доказать, что они являются теми, за кого себя выдают, и имеют разрешение на доступ к указанному ресурсу до того, как будет предоставлен вход.
                    <br><br> Любая организация, любого размера и формы, находится под постоянной угрозой нападения, последствия которого могут быть разрушительными. Нулевое доверие гарантирует, что критические активы могут быть доступны только тем, кто предлагает положительные доказательства того, что у них есть учётные данные, личность и необходимость доступа к ним.
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
<x-footer></x-footer>
<script src="js/script.min.js"></script>
</x-layout>
