<x-layout>

    <x-header></x-header>
    <section class="preview" style="background: url('{{asset('assets/img/background/priview-bg.png')}}') no-repeat">
        <img src="{{asset('assets/img/background/preview-6.png')}}" alt="" />
        <div class="container">
            <div class="preview__body">
                <h1 class="preview__title">
                    @foreach($category as $item)
                        {{$item->name}}
                    @endforeach
                </h1>
                <div class="preview__desc">
                    Обеспечьте безопасность вашей трансформации
                    независимо от того, где она подключена
                </div>
            </div>
        </div>
    </section>
    <section class="desc">
        <div class="container">
            <div class="desc__row">

                <div class="desc__title">
                    {{$product->title}}
                </div>
                <div class="desc__text">
                    {{$product->text}}
                </div>

                <div class="desc__line line"></div>
            </div>



            <section class="zero">
                <div class="container">
                    @foreach($cat as $cats)
                        @if($cats->id != $product->id)
                            @for($i=1; $i<=$count; $i++)
                                @if($i%2==1)
                                    <a href="{{route('product-item',$cats->id)}}">
                                        <div class="zero__row row">
                                            <img src="{{asset('storage/produkt/'.$cats->img)}}" style="width: 80%" />
                                            <div class="zero__desc">
                                                <div class="zero__subtitle subtitle">
                                                    {{$cats->title}}
                                                </div>
                                                <div class="zero__text text">
                                                    {{$cats->text}}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @else
                                    <a href="{{route('product-item',$cats->id)}}">
                                        <div class="zero__row--resevre row">
                                            <div class="zero__desc">
                                                <div class="zero__subtitle subtitle">
                                                    {{$cats->title}}
                                                </div>
                                                <div class="zero__text text">
                                                    {{$cats->text}}
                                                </div>
                                            </div>
                                            <img src="{{asset('storage/produkt/'.$cats->img)}}" style="width: 80%" />
                                        </div>
                                    </a>
                                @endif
                            @endfor
                        @endif
                    @endforeach





                    <div class="zero__line line">
                    </div>
                </div>
            </section>
            <section class="list">
                <div class="container">
                    <div class="list__label title">Решения для обеспечения безопасности
                        цифровой трансформации</div>
                    <div class="list__body">
                        <div class="list__item">
                            <div class="list__icon">
                                <div class="list__border">
                                    <img src="{{asset('assets/img/icon/list-10.svg')}}">
                                </div>
                            </div>
                            <div class="list__desc">
                                <div class="list__title">
                                    PAM
                                </div>
                                <div class="list__text">
                                    Создайте среду нулевого доверия и снизьте риск с помощью управления привилегированным доступом и PEDM.
                                </div>
                                <a href="#" class="list__link">
                                    Wallix Bastion
                                </a>
                            </div>
                        </div>
                        <div class="list__item">
                            <div class="list__icon">
                                <div class="list__border">
                                    <img src="{{asset('assets/img/icon/list-11.svg')}}">
                                </div>
                            </div>
                            <div class="list__desc">
                                <div class="list__title">
                                    IDAAS
                                </div>
                                <div class="list__text">
                                    Упрощение и безопасность доступа пользователей к бизнес-приложениям с помощью управления доступом к достоверениям.
                                </div>
                                <a href="#" class="list__link">
                                    Wallix Trustelem
                                </a>
                            </div>
                        </div>
                        <div class="list__item">
                            <div class="list__icon">
                                <div class="list__border">
                                    <img src="{{asset('assets/img/icon/list-12.svg')}}">
                                </div>
                            </div>
                            <div class="list__desc">
                                <div class="list__title">
                                    EPM
                                </div>
                                <div class="list__text">
                                    Получите точный контроль над конечными точками даже за пределами сети с помощью управления привилегиями конечных точек.
                                </div>
                                <a href="#" class="list__link">
                                    Wallix BestSafe
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <x-footer>

            </x-footer>
            <script src="js/script.min.js"></script>
</x-layout>
