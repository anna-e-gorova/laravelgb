<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@section('title') - GeekBrains News @show</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" >

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>
<body style="display: flex; flex-direction: column; height: 100%;">

<x-header></x-header>

<x-sidebar></x-sidebar>

<main style="flex: 1 0 auto;">
    <div class="album py-5 bg-light">
        <div class="container">
            @yield('content')
        </div>
    </div>
</main>

<x-footer></x-footer>


<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/sidebars.js') }}"></script>
</body>
</html>
