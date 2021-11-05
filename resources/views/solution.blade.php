<x-layout>
<x-header></x-header>
<section
    class="preview"
    style="background: url('./img/background/priview-bg.png') no-repeat"
>
    <img src="./img/background/preview-13.png" alt="" />
    <div class="container">
        <div class="preview__body">
            <h1 class="preview__title">Решения
                по отраслям</h1>
            <div class="preview__desc">
                Мы защищаем ваши данные и обеспечиваем
                непрерывность ведения бизнеса
            </div>
        </div>
    </div>
</section>
<section class="zero">
    <div class="container">

        @foreach($solution as $solutions)

            @if(($solutions->id)%2==1)
        <div class="zero__row row">
            <img src="{{asset('storage/solutions/'.$solutions->img)}}" style="width: 80%" />
            <div class="zero__desc">
                <div class="zero__subtitle subtitle">
                   {{$solutions->title}}
                </div>
                <div class="zero__text text">
                    {{$solutions->text}}
                </div>
            </div>
        </div>


            @else
        <div class="zero__row--resevre row">
            <div class="zero__desc">
                <div class="zero__subtitle subtitle">
                    {{$solutions->title}}
                </div>
                <div class="zero__text text">
                    {{$solutions->text}}
                </div>
            </div>

            <img src="{{asset('storage/solutions/'.$solutions->img)}}" style="width: 80%" />
        </div>
            @endif
        @endforeach
        <div class="zero__line line">
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
