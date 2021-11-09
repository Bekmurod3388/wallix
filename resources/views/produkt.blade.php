<x-layout>
    <x-header></x-header>
    <section class="preview" style="background: url('{{asset('assets/img/background/priview-bg.png')}}') no-repeat">
        <img src="{{asset('assets/img/background/preview-2.png')}}" alt="" />
        <div class="container">
            <div class="preview__body">
                <h1 class="preview__title">Wallix Bastion</h1>
                <div class="preview__desc">
                    Упрощенное управление привилегированным доступом для обеспечения
                    безопасности и мониторинга доступа из любого места
                </div>
                <button class="preview__btn btn">Подробно</button>
            </div>
        </div>
    </section>
    <section class="zero">
        <div class="container">

            @foreach($product as $products)

                @if(($products->id)%2==1)
                    <a href="{{route('solution-item',$products->id)}}">
                        <div class="zero__row row">
                            <img src="{{asset('storage/produkt/'.$products->img)}}" style="width: 80%" />
                            <div class="zero__desc">
                                <div class="zero__subtitle subtitle">
                                    {{$products->title}}
                                </div>
                                <div class="zero__text text">
                                    {{ \Illuminate\Support\Str::limit($products->text, 150, '...') }}
                                </div>
                            </div>

                        </div>
                    </a>


                @else
                    <a href="{{route('solution-item',$products->id)}}">
                        <div class="zero__row--resevre row">

                            <div class="zero__desc">
                                <div class="zero__subtitle subtitle">
                                    {{$products->title}}
                                </div>
                                <div class="zero__text text">
                                    {{ \Illuminate\Support\Str::limit($products->text, 150, '...') }}
                                </div>
                            </div>

                            <img src="{{asset('storage/produkt/'.$products->img)}}" style="width: 80%" />

                        </div>
                    </a>
                @endif
            @endforeach
            <div class="zero__line line">
            </div>
        </div>
    </section>
    <x-message>

    </x-message>
    <x-footer>

    </x-footer>
    <script src="js/script.min.js"></script>
</x-layout>
