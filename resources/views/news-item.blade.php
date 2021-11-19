@extends('layout')
@section('content')
    <section class="desc pt-3">
        <div class="container">
            <div class="desc__row">

                <div class="desc__title">
                    {{$post->header_ru}}
                </div>
                <div class="desc__text">
                    {{$post->description_ru}}
                </div>

                <div class="desc__line line"></div>
            </div>
        </div>

            <section class="zero">
                <div class="container">
                    <div class="zero__line line">
                    </div>
                </div>
            </section>
        <x-news></x-news>
@endsection
