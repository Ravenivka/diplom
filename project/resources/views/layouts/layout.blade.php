<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head', ['title' => $title])
</head>
<body>
    <div class="container">
    <header class="row">
        @include('layouts.header')
    </header>
    <main id="main" class="main">
        @yield('content')
    </main>
    <footer class="footer">
        @include('layouts.footer')
    </footer>
    </div>
</body>
</html>