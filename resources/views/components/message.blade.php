<section id="message" class="form">
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
            <div data-form-alert="" hidden="">Спасибо за заполнение формы!</div>
            <div class="form__subdesc">
                Пожалуйста, выберите хотя бы один вариант
            </div>
            <form method="POST" id="contactForm">
                @csrf
                <div class="form__check">
                    <div class="form__checkbox">
                        <input id="cb1" type="checkbox" value="0" onchange="swapcheck(this)" name="Bastion">
                        <label for="cb1">Wallix Bastion</label>
                    </div>
                    <div class="form__checkbox">
                        <input id="cb2" type="checkbox" value="0" onchange="swapcheck(this)" name="trustelem" >
                        <label for="cb2">Wallix Trustelem</label>
                    </div>
                    <div class="form__checkbox">
                        <input id="cb3" type="checkbox" value="0" onchange="swapcheck(this)" name="bestsafe">
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
{{--                        <select class="form__select" id="industry" name="Industry">--}}
{{--                            <option>Промышленность</option>--}}
{{--                        </select>--}}
                    </div>
                    <div class="form__right">
                        <textarea name="text" id="text" placeholder="Сообщение" style="resize: none"></textarea>
                        <div class="form__agree">
                            Ознакомьтесь с <a href="https://www.wallix.com/en/privacy-policy/" class="text-orange">Политикой конфиденциальности</a>
                        </div>
                        <button type="submit" class="form__submit form__btn btn">Отправить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<script src="{{'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js'}}"></script>
<script type="text/javascript">
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();
        let name = $('#name').val();
        let phone = $('#phone').val();
        let email = $('#email').val();
        let text = $('#text').val();
        let surname = $('#surname').val();
        let company = $('#company').val();
        let country = $('#country').val();
        let industry = $('#industry').val();
        let bastion = $('#cb1').val();
        let trustelem = $('#cb2').val();
        let bestsafe = $('#cb3').val();
        $.ajax({
            url: "{{route('messages.store')}}",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                name: name,
                surname: surname,
                phone: phone,
                email: email,
                company: company,
                country: country,
                industry: industry,
                text: text,
                bestsafe: bestsafe,
                trustelem: trustelem,
                bastion: bastion,
            },
            success: function (response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Успешно отпарвлено!',
                })
            }
        });
        function swapcheck(input) {
            if (input.checked) {
                input.value = 1
            } else {
                input.value = 0
            }
        }
    });
</script>
