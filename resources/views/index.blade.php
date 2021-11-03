<x-layout>
    @section('header')
        <x-header></x-header>
    @endsection


        <section class="preview" style="background: url('assets/img/background/priview-bg.png') no-repeat">
            <img src="{{asset('assets/img/background/preview-1.png')}}" alt="">
            <div class="container">
                <div class="preview__body">
                    <h1 class="preview__title">
                        Обеспечьте свое цифровое будущее
                    </h1>
                    <div class="preview__desc">
                        Wallix защищает идентификационные данные и доступ для ускорения цифровой трансформации
                    </div>
                    <button class="preview__btn btn">
                        Смотреть видео
                    </button>
                </div>
            </div>
        </section>
        <section class="desc">
            <div class="container">
                <div class="desc__row">
                    <div class="desc__title">
                        Защитите своё цифровое будущее с лидером в области безопасности упрощённого доступа
                    </div>
                    <div class="desc__text">
                        Wallix & Abris защищает удостоверения и доступ к ИТ-инфраструктуре, приложениям и данным. Специализируясь на управлении привилегированным доступом, решения   обеспечивают соответствие последним стандартам ИТ-безопасности и защищают от кибератак, краж и утечек данных, связанных с украденными учетными данными и повышенными привилегиями на конфиденциальные активы компании.
                    </div>
                </div>
            </div>
        </section>
        <section class="list">
            <div class="container">
                <div class="list__body">
                    <div class="list__item">
                        <div class="list__icon">
                            <div class="list__border">
                                <img src="{{asset('assets/img/icon/list.svg')}}">
                            </div>
                        </div>
                        <div class="list__desc">
                            <div class="list__title">
                                Упрощенная кибербезопасность
                            </div>
                            <div class="list__text">
                                Комплексные решения с бесшовным пользовательским интерфейсом. Простота развёртывания, работа и обслуживание
                            </div>
                        </div>
                    </div>
                    <div class="list__item">
                        <div class="list__icon">
                            <div class="list__border">
                                <img src="{{asset('assets/img/icon/list.svg')}}">
                            </div>
                        </div>
                        <div class="list__desc">
                            <div class="list__title">
                                Сертифицированный в отрасли поставщик решений
                            </div>
                            <div class="list__text">
                                Комплексные сертифицированные решения для соответствия национальным, государственным или деловым нормам
                            </div>
                        </div>
                    </div>
                    <div class="list__item">
                        <div class="list__icon">
                            <div class="list__border">
                                <img src="{{asset('assets/img/icon/list.svg')}}">
                            </div>
                        </div>
                        <div class="list__desc">
                            <div class="list__title">
                                Лидер по управлению привилегированным доступом
                            </div>
                            <div class="list__text">
                                Защитите свои стратегические активы
                                путем контроля и аудита привилегий
                                и секретов пользователей с лидером в PAM
                            </div>
                        </div>
                    </div>
                    <div class="list__item">
                        <div class="list__icon">
                            <div class="list__border">
                                <img src="{{asset('assets/img/icon/list.svg')}}">
                            </div>
                        </div>
                        <div class="list__desc">
                            <div class="list__title">
                                Конфиденциальность данных по замыслу
                            </div>
                            <div class="list__text">
                                Как европейский лидер, WALLIX заботится о конфиденциальности данных. Держите под контролем свои данные; не позволяйте другим использовать их ценность.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list__line line">
                </div>
            </div>
        </section>
        <section class="management">
            <div class="management__orange orange">
            </div>
            <div class="container">
                <div class="management__title">
                    Передовые продукты для безопасного цифрового будущего
                </div>
                <div class="management__list">
                    <div class="management__item">
                        <img src="{{asset('assets/img/management-1.jpg')}}" alt="management">
                        <div class="management__subtitle">
                            Управление привилегированным
                            доступом
                        </div>
                        <div class="management__desc">
                            Защита от угрозы со стороны привилегированных пользователей
                        </div>
                        <a href="#" class="management__link">
                            Wallix Bastion
                        </a>
                    </div>
                    <div class="management__item">
                        <img src="{{asset('assets/img/management-2.jpg')}}" alt="management">
                        <div class="management__subtitle">
                            Управление привилегиями
                            конечных точек
                        </div>
                        <div class="management__desc">
                            Установите права локального администратора и остановите вымогателей
                        </div>
                        <a href="#" class="management__link">
                            Wallix Bastion
                        </a>
                    </div>
                    <div class="management__item">
                        <img src="{{asset('assets/img/management-3.jpg')}}" alt="management">
                        <div class="management__subtitle">
                            Управление идентификационным
                            доступом
                        </div>
                        <div class="management__desc">Упрощение доступа пользователей к
                            корпоративным приложениям (iDaaS)
                        </div>
                        <a href="#" class="management__link">
                            Wallix Bastion
                        </a>
                    </div>
                </div>
                <div class="management__line line"></div>
            </div>
        </section>
        <section class="solution">
            <div class="container">
                <div class="solution__title title">
                    Наши решения
                </div>
                <div class="solution__list">
                    <div class="solution__item" style="background: url('assets/img/solution-1.jpg') center center/cover no-repeat ;">
                        <div class="solution__text">
                            <div class="solution__subtitle">
                                Digital transformation
                            </div>
                            <div class="solution__desc">
                                Упрощение аудита и соблюдение требований безопасности с помощью сквозного управления доступом
                            </div>
                        </div>
                    </div>
                    <div class="solution__item" style="background: url('assets/img/solution-2.jpg') center center/cover no-repeat ;">
                        <div class="solution__text">
                            <div class="solution__subtitle">
                                Audit&Compliance
                            </div>
                            <div class="solution__desc">
                                Упрощение аудита и соблюдение требований безопасности с помощью сквозного управления доступом
                            </div>
                        </div>
                    </div>
                    <div class="solution__item" style="background: url('assets/img/solution-2.jpg') center center/cover no-repeat ;">
                        <div class="solution__text">
                            <div class="solution__subtitle">
                                Risk Management &Security
                            </div>
                            <div class="solution__desc">
                                Упрощение аудита и соблюдение требований безопасности с помощью сквозного управления доступом
                            </div>
                        </div>
                    </div>
                </div>
                <div class="solution__btn btn">Все решения</div>
            </div>
        </section>
        <section class="video">
            <div class="video__bg" style="background: url('assets/img/background/video-bg.jpg');">
            </div>
            <div class="container">
                <div class="video__title title">
                    Видео о нашей работе
                </div>
                <div class="video__desc">
                    Видео о нашей работе
                </div>
                <div class="video__block">
                    <video src="{{asset('assets/img/2.mp4')}}"></video>
                </div>
                <div class="video__line line">

                </div>
            </div>
        </section>
        <section class="news">
            <div class="container">
                <div class="news__header">
                    <div class="news__title">Новости</div>
                    <div class="news__btn btn">Все новости</div>
                </div>
                <div class="news__row">
                    <div class="news__seminar">
                        <img src="{{asset('assets/img/news-1.jpg')}}">
                        <div class="news__desc">
                            <div class="news__date">
                                27.01.2021
                            </div>
                            <div class="news__subtitle">
                                Семинар Milos
                            </div>
                            <div class="news__text">
                                А ещё элементы политического процесса призывают нас к новым свершениям, которые, в свою очередь, должны быть указаны как претенденты на роль ключевых факторов
                            </div>
                            <a href='#' class="news__link">
                                Читать полностью
                            </a>
                        </div>
                    </div>
                    <div class="news__list">
                        <div class="news__item">
                            <div class="news__subtitle">
                                Выставка Cyber eye Russia 2021
                            </div>
                            <div class="news__text">
                                30 контрактов, тысячи восторженных посетителей...
                            </div>
                            <div class="news__xz">
                                <img src="{{asset('assets/img/news-2.jpg')}}">
                                <div class="news__subdate">
                                    27.02.2021
                                </div>
                            </div>
                        </div>
                        <div class="news__item">
                            <div class="news__subtitle w">
                                Семинар Robe
                            </div>
                            <div class="news__text">
                                30 января 2021 года наши сотрудники побывали...
                            </div>
                            <div class="news__xz">
                                <img src="{{asset('assets/img/news-3.jpg')}}">
                                <div class="news__subdate">
                                    27.03.2021
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="form">
            <div class="container">
                <div class="form__body">
                    <div class="form__title title">
                        Форма обратной связи
                    </div>
                    <div class="form__desc">
                        Хотите испытать наши решения? Свяжитесь с нами. Мы не шлем спам, и не передаём никому ваши данные.
                    </div>
                    <div class="form__subtitle">
                        Меня интересует
                    </div>
                    <div class="form__subdesc">
                        Пожалуйста, выберите хотя бы один вариант
                    </div>
                    <form method="POST"  id="contactForm">
                        @csrf
                        <div class="form__check">
                            <div class="form__checkbox">
                                <input id="cb1" type="checkbox" value="1" name="Bastion" checked>
                                <label for="cb1">Wallix Bastion</label>
                            </div>
                            <div class="form__checkbox">
                                <input id="cb2" type="checkbox" value="1" name="Trustelem" >
                                <label for="cb2">Wallix Trustelem</label>
                            </div>
                            <div class="form__checkbox">
                                <input id="cb3" type="checkbox" value="1" name="Bestsafe">
                                <label for="cb3">Wallix BestSafe</label>
                            </div>
                        </div>
                        <div class="form__row">
                            <div class="form__left">
                                <input type="text" required id="name" name="name" placeholder="Имя">
                                <input type="text" required id="surname" name="surname" placeholder="Фамилия">
                                <input type="email" required id="email" name="email" placeholder="Электронная почта">
                                <input type="text" required id="phone" name="phone" placeholder="Телефон">
                                <input type="text" required id="company" name="company" placeholder="Название компании">
                                <select class="form__select" id="country" name="Country" >
                                    <option>Страна</option>
                                    <?php
                                    $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

                                    foreach($countries as $val){
                                        echo "<option value='$val'>$val</option>";
                                    }
                                    ?>
                                </select>
                                <select class="form__select" id="industry" name="Industry">
                                    <option>Промышленность</option>
                                </select>
                            </div>
                            <div class="form__right">
                                <textarea placeholder="Сообщение" id="text" name="text"></textarea>
                                <div class="form__agree">
                                    Ознакомьтесь с <span>Политикой конфиденциальности</span>
                                </div>
                                <input type="submit" value="Отправить" class="form__submit form__btn btn">

                            </div>
                        </div>
                    </form>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
                    <script type="text/javascript">
                        $('#contactForm').on('submit',function(e){
                            e.preventDefault();
                            let name = $('#name').val();
                            let phone = $('#phone').val();
                            let email = $('#email').val();
                            let text = $('#text').val();
                            let surname = $('#surname').val();
                            let company = $('#company').val();
                            let country = $('#country').val();
                            let industry =$('#industry').val();
                            let bastion = $('#cb1').val();
                            let trustelem = $('#cb2').val();
                            let bestsafe = $('#cb3').val();
                            $.ajax({
                                url: "{{route('messages.store')}}",
                                type:"POST",
                                data:{
                                    "_token": "{{ csrf_token() }}",
                                    name:name,
                                    surname:surname,
                                    phone:phone,
                                    email:email,
                                    company:company,
                                    country:country,
                                    industry:industry,
                                    text:text,
                                    bestsafe:bestsafe,
                                    trustelem:trustelem,
                                    bastion:bastion,
                                },
                                success:function(response){
                                    Swal.fire({
                                        icon: 'success',
                                        title: '{{__("about.success")}}',
                                    })
                                },
                            });
                        });
                    </script>

                </div>
            </div>
        </section>

    @section('footer')
        <x-footer></x-footer>
    @endsection
</x-layout>
