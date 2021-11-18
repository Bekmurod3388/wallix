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
                            Обеспечьте цифровую
                            трансформацию
                        </h1>
                        <div class="preview__desc">
                            Обеспечьте безопасность вашей трансформации
                            независимо от того, где она подключена
                        </div>
                    </div>
                </div>
            </div>
            <div class="preview--right">
                <img src="{{asset('assets/img/background/preview-6.png')}}" alt="">
            </div>
        </div>
    </section>
    <section class="zero">
        <div class="container">
            @foreach($product as $products)
                @if(($products->id)%2==1)
                    <a href="{{route('product-item',$products->id)}}">
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
@endsection
