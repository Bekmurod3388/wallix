<header class="header">
    <div class="container">
        <div class="header__body">
            <div class="header__logos">
                <a href="/" class="header__logo">
                    <img src="{{asset('img/logo/logo.png')}}" alt="logo">
                </a>
                <a href="/" class="header__logo">
                    <img src="{{asset('img/logo/abris-logo.png')}}" alt="Abris logo">
                </a>
            </div>
            <div class="header__gamburger">
                <span></span>
            </div>
            <nav class="header__nav">
                <ul class="header__list">
                    <li class="header__item">
                        <a href="{{route('index')}}" class="header__link">Главная</a>
                    </li>
                    <li class="header__item">
                        <a href="#" class="header__link">Продукты</a>
                        <ul class="header__drapdown">
                            <li class="header__drapdown-item">
                                <a href="{{route('bastion')}}" class="header__drapdown-link">Wallix Bastion</a>
                            </li>
                            <li class="header__drapdown-item">
                                <a href="{{route('bestsafe')}}" class="header__drapdown-link">Wallix Bestsafe</a>
                            </li>
                            <li class="header__drapdown-item">
                                <a href="{{route('trustelem')}}" class="header__drapdown-link">Wallix Trustelem</a>
                            </li>
                        @foreach($products as $product)
                            <li class="header__drapdown-item">
                                <a href="{{route('product', ['product' => $product])}}" class="header__drapdown-link">{{$product->title}}</a>
                            </li>
                        @endforeach
                        </ul>
                    </li>
                    <li class="header__item">
                        <a href="#" class="header__link">Решения</a>
                        <ul class="header__drapdown">
                            <li class="header__drapdown-item">
                                <a href="{{route('solution1')}}" class="header__drapdown-link">Обеспеченный цифровой трансформации</a>
                            </li>
                            <li class="header__drapdown-item">
                                <a href="{{route('solution2')}}" class="header__drapdown-link">Аудит и соответствие</a>
                            </li>
                            <li class="header__drapdown-item">
                                <a href="{{route('solution3')}}" class="header__drapdown-link">Управление рисками и безопасностью</a>
                            </li>
                            <li class="header__drapdown-item">
                                <a href="{{route('solution4')}}" class="header__drapdown-link">Wallix inside</a>
                            </li>
                            <li class="header__drapdown-item">
                                <a href="{{route('solution5')}}" class="header__drapdown-link">Решения по отраслям</a>
                            </li>
                        @foreach($solutions as $solution)
                            <li class="header__drapdown-item">
                                <a href="{{route('solution', $solution)}}" class="header__drapdown-link">{{$solution->title}}</a>
                            </li>
                        @endforeach
                        </ul>
                    </li>
                    <li class="header__item">
                        <a href="#" class="header__link">О нас</a>
                        <ul class="header__drapdown">
                            <li class="header__drapdown-item">
                                <a href="{{route('about')}}" class="header__drapdown-link">О компании Wallix</a>
                            </li>
                            <li class="header__drapdown-item">
                                <a href="{{route('news')}}" class="header__drapdown-link">Новости</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header__item">
                        <a href="{{route('contact')}}" class="header__link">Контакты</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
