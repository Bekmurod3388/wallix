@foreach($categories as $category)
    <div class="news__item">
        <div class="news__subtitle w">
            {{$category->title}}
        </div>
        <div class="news__text">
            {!! strLimit($category->text) !!}
        </div>
        <div class="news__xz">
            <img src="{{"/storage/categories/$category->img"}}" alt="img">
            <a href="{{route('solution2', ['category' => $category->id])}}" class="news__link">
                Читать
            </a>
        </div>
    </div>
@endforeach
