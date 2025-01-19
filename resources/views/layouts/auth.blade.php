<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
        @include('includes.globalCss')
    <head>
    <body>
        <main>
            @yield('content')
        </main>
        @include('includes.globalJs')
    </body>
</html>
