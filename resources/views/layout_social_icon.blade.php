<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? config('app.name') }}</title>
    <link rel="stylesheet" href="{{asset("/css/app.css")}}">
    <link rel="icon" href="{{ URL::asset('/images/favicon.ico') }}" type="image/x-icon"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    {{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>--}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<div class="ppal" id="app">
    <!-- Parte de cabecera, fijo en lugar de componente-->
{{--    <div class="md:hidden bg-white h-15v flex flex-row justify-center max.w.full ml-10 p-2">--}}
{{--        <img   src="{{asset('images/logos/enlaces_feria_movil.png')}} " alt="Logo Enlaces"/>--}}
{{--    </div>--}}


    <div class='block h-15v w-full
                bg-white bg-cabecera
                flex flex-row justify-between  p-2
                border border-red-400 rounded items-center'>
        <img class='p-2 max-h-full w-20v'
             src="{{asset('images/logos/enlaces_feria.png')}}" alt='Logo Enlaces'/>
        <h1 class="text-5xl font-mono text-enlaces items-center text-center
      max-h-full w-80v overflow-hidden place-self-right ">
            Conoce Nuestro Centro
        </h1>

    </div>
    <!-- Parte de cabecera, fijo en lugar de componente-->
@yield("contenido")
<!--Pie en lugra de componente, inserto el html -->
    <div class="flex flex-col">
    <div class="h-10v flex flex-row bg-enlaces justify-between">
        <div class="font-mono text-1xl flex flex-col justify-start p-2">
            <div class="flex flex-row justify-arround text-xs">
                <span class="font-extrabold "> CPI FP Los Enlaces  </span>
                <span class="hidden md:block italic ">    C/Jarque de Moncayo nº 10 - 50012 - ZARAGOZA - Tlfn: 976 300 804 - Fax: 976 314 403</span>
                <div class=" md:hidden flex flex col justify-start">
                <span class="  text-xs italic font-extrabold ml-2 ">© CPI Los Enlaces</span>
                    <img class="ml-2 h-3v w-3v"src="{{asset('images/icon/phone.svg')}}">
                    <span class="text-base font-bold">976 300 804</span>
            </div>
            <div class=" font-mono justify-self-center">
                <div class=" text-bold  text-green-800 text-xs ">
                    <span class="font-extrabold "> © Copyright  </span>
                    Desarrollo Realizado por las <strong>familias profesionales</strong> de nuestro centro
                </div>

            </div>

        </div>
            <div class=" text-mxs ">
                El modelo y el rig utilizados en este vídeo pertenecen a la Blender Foundation y están disponibles
                de forma gratuita en la Blender Cloud
            </div>
        </div>
        {{--        <slot></slot>--}}
    </div>

</div>
</body>
@yield("script")
<script src="{{ mix('js/app.js') }}"></script>
</html>
