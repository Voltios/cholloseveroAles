@extends('main')
@section('chollos')
    <h1 class="h1 title">Listado de productos</h1>
    <div class="main">

        @foreach ($chollos as $chollo)
            <div class="chollo">
                <div class="col-3 left">
                    <h3 class="nombre-chollo"><a href="{{ route('infoChollo', $chollo->id) }}">
                            {{ $chollo->titulo }}</a>
                    </h3>

                    <div class="pic-container">
                        <img src="{{ asset('img/' . $chollo->id . '-chollo-severo.jpg') }}"
                            alt="{{ $chollo->id . '-chollo-severo' }}" height="200" width="250">
                    </div>

                </div>
                <div class="col-3 mid">
                    <div class="info-container">
                        <p class="info-chollo">
                            <span class="precio-rebajado">{{ $chollo->precioDescuento }}€</span>
                            <span class="precio-original">{{ $chollo->precio }}€</span> //
                            <span class="categoria-chollo">
                                @switch($chollo->categoria)
                                    @case('CAN')
                                        {{ $chollo->categoria = 'Cannabis' }}
                                    @break
                                    @case('LSD')
                                        {{ $chollo->categoria = 'LSD' }}
                                    @break
                                    @case('OXI')
                                        {{ $chollo->categoria = 'Oxicodona' }}
                                    @break
                                    @case('MDA')
                                        {{ $chollo->categoria = 'MDA' }}
                                    @break
                                    @case('COC')
                                        {{ $chollo->categoria = 'Benzoilmetilecgonina' }}
                                    @break
                                    @case('DIA')
                                        {{ $chollo->categoria = 'Diacetilmorfina' }}
                                    @break
                                    @case('SET')
                                        {{ $chollo->categoria = 'psilocibios' }}

                                    @break
                                @endswitch

                            </span> {{-- a editar para ponerle route("categoria") --}}
                        </p>
                        <p class="puntuación-chollo"> <i class="fas fa-thumbs-up puntuación-chollo"></i> {{ $chollo->puntuacion }}</p>
                        <p class="descripcion-chollo"><b>Descripción: </b><br>{{ $chollo->descripcion }}</p>
                        
                    </div>
                </div>
                <div class="col-3 right">
                    <div class="contenedor-btn">

                        <a class="btn primary-btn linkChollo" href="{{ route('infoChollo', $chollo->id) }}">
                            {{-- pasamos la id como parámetro --}}
                            <i class="fas fa-external-link"></i> Ir al chollo
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="flechas">
            <p>
                {{ $chollos->links() }}
            </p>
        </div>
    </div>
@endsection
