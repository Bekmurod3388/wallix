@extends('layout')
@section('content')
    <section class="preview">
        <div class="preview__wrapper">
            <div class="preview--left">
                <img src="{{asset('assets/img/background/priview-bg.png')}}" alt="">
            </div>
            <div class="preview--center">
                <div class="container">
                    <div class="preview__body">
                        <h1 class="preview__title">
                            Кибербезопасность
                            с нулевым доверием
                        </h1>
                        <div class="preview__desc">
                            Что, как и почему в подходе к безопасности с нулевым доверием
                        </div>
                        <button class="preview__btn btn">
                            Подробно
                        </button>
                    </div>
                </div>
            </div>
            <div class="preview--right">
                <img src="{{asset('assets/img/background/preview-8.png')}}" alt="">
            </div>
        </div>
    </section>
<section class="zero">
    <div class="container">
        <div class="zero__row row">
            <img src="{{asset('assets/img/zero-12.jpg')}}" />
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
    <x-message>
    </x-message>
@endsection
