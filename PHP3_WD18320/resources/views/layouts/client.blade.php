<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @yield('css')
    {{-- Nơi để các đường dẫn file css và thư viện css dùng chung cho cả trang layout  --}}
    <title>@yield('title')</title>
</head>
<body>
    <header>
        @include('clients.blocks.header')
    </header>
    <main>
        <aside>
            @include('clients.blocks.sidebar')
        </aside>
            <div class="content">
                {{-- yield: chỉ định section có tên trong yield mới được hiển thị    --}}
                @yield('content')
            </div>
        
    </main>
    <footer>
        @include('clients.blocks.footer')
    </footer>


    {{-- Nơi để các đường dẫn file JS và thư viện JS dùng chung cho cả trang layout --}}
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    @yield('JS')
</body>
</html>