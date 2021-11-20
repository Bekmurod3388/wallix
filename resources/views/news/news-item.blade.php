@extends('layout')
@section('content')
    <section class="auth" style="background: url('{{'/upload/news/' . $post->img}}') center center/cover no-repeat">
        <div class="container">
            <div class="auth__content">
                <div class="auth__body">
                    <div class="auth__title">
                        {{$post->header_ru}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="info">
        <div class="container">
            <div class="info__title title">
                {{$post->header_ru}}
            </div>
            <div class="info__desc">
                {{$post->description_ru}}
            </div>
            <div class="info__line line">
            </div>
        </div>
    </section>
{{--    <section class="desc pt-3">--}}
{{--        <div class="container">--}}
{{--            <div class="desc__title">--}}
{{--                {{$post->header_ru}}--}}
{{--            </div>--}}
{{--            <div class="desc__title">--}}
{{--                <img src="{{'/upload/news/' . $post->img}}" alt="img">--}}
{{--            </div>--}}
{{--            <div class="desc__row">--}}

{{--                <div class="desc__text">--}}
{{--                    {{$post->description_ru}}--}}
{{--                </div>--}}

{{--                <div class="desc__line line"></div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <section class="zero">--}}
{{--            <div class="container">--}}
{{--                <div class="zero__line line">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

        <x-news></x-news>
@endsection
