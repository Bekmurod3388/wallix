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
                <a href="{{route('solution-item',$solutions->id)}}">
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
                </a>


            @else
                <a href="{{route('solution-item',$solutions->id)}}">
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
