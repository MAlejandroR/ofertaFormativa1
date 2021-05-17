@extends('layout')
@section('contenido')
        <div class="h-75v overflow-y-auto flex flex-row ">
            <formacion route_jornadas="{{route('puertas_abiertas')}}"
                       src_video="{{asset('videos/formacion.mp4')}}">
            </formacion>
        </div>

@endsection
