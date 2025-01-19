<nav class="navbar navbar-expand-lg navbar-light bg-light grid-max-width">
    <div class="container-fluid">
        <!-- Кнопка для мобильных устройств -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Логотип и навигация -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Логотип слева -->
            <a class="navbar-brand me-auto" href="#">BOOK EXCHANGE</a>

            <!-- Центрированные ссылки -->
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('catalog') ? 'active' : '' }}" href="/catalog">Каталог</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('exchange') ? 'active' : '' }}" href="/exchange">Обмен</a>
                </li>
            </ul>

            <!-- Ссылки справа -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="/login">Вход</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('register') ? 'active' : '' }}" href="/register">Регистрация</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
