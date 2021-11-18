@extends('layout')
@section('content')
    <section class="preview">
        <div class="preview__wrapper">
            <div class="preview--left">
                <img src="{{asset('assets/img/background/preview-bg.png')}}" alt="">
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
            @foreach($products as $product)
                @if(($product->id) % 2 == 1)
                    <a href="{{route('product-item', $product->id)}}">
                        <div class="zero__row row">
                            <img src="{{asset('storage/product/' . $product->img)}}" style="width: 80%" alt="img">
                            <div class="zero__desc">
                                <div class="zero__subtitle subtitle">
                                    {{$product->title}}
                                </div>
                                <div class="zero__text text">
                                    {{ \Illuminate\Support\Str::limit($product->text, 150, '...') }}
                                </div>
                            </div>
                        </div>
                    </a>
                @else
                    <a href="{{route('solution-item', $product->id)}}">
                        <div class="zero__row--resevre row">
                            <div class="zero__desc">
                                <div class="zero__subtitle subtitle">
                                    {{$product->title}}
                                </div>
                                <div class="zero__text text">
                                    {{ \Illuminate\Support\Str::limit($product->text, 150, '...') }}
                                </div>
                            </div>
                            <img src="{{asset('storage/product/' . $product->img)}}" style="width: 80%" alt="img">
                        </div>
                    </a>
                @endif
            @endforeach
            <div class="zero__line line"></div>
        </div>
    </section>
@endsection
