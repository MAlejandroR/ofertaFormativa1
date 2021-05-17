<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? config('app.name') }}</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <style>
        .modal {
            transition: opacity 0.25s ease;
        }
        body.modal-active {
            overflow-x: hidden;
            overflow-y: visible !important;
        }
    </style>
</head>
<body>


<div class="bg-smoke-light flex flex-col flex-1 justify-center h-screen mx-10 p-2.5 bg-yellow-50">

    <x-up-header class="h-5v"></x-up-header>
    <x-header  class="h-10v">

    </x-header>
    <x-nav class="h-75v">


    </x-nav>

    @yield("contenido")

    <x-footer  class="h-10v">

    </x-footer>
</div>
</body>
</html>
