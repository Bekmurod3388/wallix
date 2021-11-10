<header class="header">
    <div class="container">
        <div class="header__body">
            <div class="header__logos">
                <a href="#" class="header__logo">
                    <img src="{{asset('assets/img/logo/logo.png')}}" alt="logo">
                </a>
                <a href="#" class="header__logo">
                    <img src="{{asset('assets/img/logo/abris-logo.png')}}" alt="Abris logo">
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
                        <a href="{{route('product')}}" class="header__link">Продукты</a>
                    </li>
                    <li class="header__item">
                        <a href="{{ route('solution') }}" class="header__link">Решения</a>
                    </li>
                    <li class="header__item">
                        <a href="{{route('about')}}" class="header__link">О нас</a>
                    </li>
                    <li class="header__item">
                        <a href="{{route('office')}}" class="header__link">Контакты</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
