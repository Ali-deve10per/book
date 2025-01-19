<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Book Exchange')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    /* Ваши стили */
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
    }

    .header {
        background-color: #333;
        color: #fff;
        padding: 10px 0;
    }

    .navbar-brand {
        font-weight: bold;
        font-size: 24px;
    }

    .nav-link {
        color: #fff !important;
        text-decoration: none;
    }

    .nav-link:hover {
        text-decoration: underline;
    }

    .footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 20px 0;
        margin-top: 20px;
    }

    .footer p {
        margin: 0;
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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

    <main>
        @yield('content')
    </main>

    <footer class="text-center py-4 bg-light">
        <p>&copy; 2025 BOOK2BOOK</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
