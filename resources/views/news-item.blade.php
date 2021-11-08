<x-layout>

    <x-header></x-header>

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



            <section class="zero">
                <div class="container">

                    <div class="zero__line line">
                    </div>
                </div>
            </section>

            <x-footer>

            </x-footer>
            <script src="js/script.min.js"></script>
</x-layout>
