@extends('main')
@section('chollos')
    <h1 class="h1 title">Listado de chollos</h1>
    @foreach ($chollos as $chollo)
        <div class="chollo">
            <h3 class="nombre-chollo"> {{ $chollo->titulo }}</h3>
            <div class="info-container">
                <div class="pic-container">
                    <img src="{{ URL::to("/assets/img/$chollo->id" . '-chollo-severo.jpg') }}"
                        alt="{{ $chollo->id . '-chollo-severo' }}" height="200" width="200">
                </div>
                <p class="info-chollo">
                    <span class="precio-rebajado">{{ $chollo->precio }}€</span>
                    <span class="precio-original">{{ $chollo->precioDescuento }}€</span> |
                    <span class="categoria-chollo">{{ $chollo->categoria }}</span> {{-- a editar para ponerle route("categoria") --}}
                </p>
                <p class="descripcion-chollo">{{ $chollo->descripcion }}</p>
            </div>
            <a class="btn primary-btn linkChollo" href="">
                <i class="fas fa-external-link"></i> Ir al chollo
            </a>
        </div>
    @endforeach
@endsection
