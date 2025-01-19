<!DOCTYPE html>
<html lang="en">
<head>
   @include('includes.head')
   @include('includes.globalCss')
   <head>
<body>
    <header>
        @include('includes.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('includes.footer')
        @include('includes.globalJs')
    </footer>
</body>
</html>
