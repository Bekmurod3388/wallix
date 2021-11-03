
<x-layout>

<x-header></x-header>
<section class="auth" style="background: url('./img/background/auth-bg.jpg') center center/cover no-repeat;">
    <div class="auth__bg">
    </div>
    <div class="auth__orange"></div>
    <div class="container">
        <div class="auth__label">Wallix аутентификатор
            Бесплатная пробная версия</div>
        <div class="auth__text">Опробуйте Аутентификатор Wallix бесплатно в течение 30 дней</div>
    </div>
</section>
<section class="pack pack--white">
    <div class="container">
        <div class="pack__title pack__title--p title">Строгая аутентификация для
            бескомпромиссной безопасности</div>
        <div class="pack__desc">
            Откройте для себя надежную многофакторную аутентификацию
            для защиты доступа к ИТ, приложениям и данным
            с помощью высокозащищенного соединения, где бы
            ни находились ваши пользователи
        </div>
        <div class="zero__row row mt">
            <img src="./img/pack-4.jpg" />
            <div class="zero__desc">
                <div class="zero__text zero__text--arrow text m0">
                    <ul>
                        <li>Сквозная сертифицированная безопасность</li>
                        <li>Поддержка нормативного соответствия</li>
                        <li>Простота использования и пользовательский опыт</li>
                        <li>Питание от технологии InWebo MFA</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="form form--border">
    <div class="container">
        <div class="form__body">
            <div class="form__title title">Запросите бесплатную пробную версию</div>
            <form action="#">
                <div class="form__row">
                    <input type="text" placeholder="Имя" />
                    <input type="text" placeholder="Фамилия" />
                    <input type="email" placeholder="Ваш e-mail" />
                    <input type="text" placeholder="Телефон" />
                    <input type="text" placeholder="Название компании" />
                    <select class="form__select">
                        <option>Промышленность</option>
                    </select>
                    <select class="form__select">
                        <option>Страна</option>
                    </select>
                    <select class="form__select">
                        <option>Роль</option>
                    </select>
                    <div>
                        <select class="form__select">
                            <option>В какой среде вы хотите развернуть Bastion?</option>
                        </select>
                        <p>Пожалуйста, выберите опцию из выпадающего меню</p>
                    </div>
                </div>
                <div class="form__subtitle">Меня интересует</div>
                <div class="form__subdesc">
                    Пожалуйста, выберите хотя бы один вариант
                </div>
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
                    <div class="form__checkbox">
                        <input id="cb4" type="checkbox" />
                        <label for="cb4">Аутентификатор Wallix</label>
                    </div>
                </div>
                <p class="form__text">Для получения дополнительной информации о том, как будут храниться ваши данные, посетите нашу Политику конфиденциальности</p>
                <button type="submit" class="form__btn--center btn">Отправить</button>
            </form>
        </div>
    </div>
</section>
<x-footer>

</x-footer>
<script src="js/script.min.js"></script>
</x-layout>
