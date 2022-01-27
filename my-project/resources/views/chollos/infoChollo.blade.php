@extends('main')
@section('informacion')

    <div class="chollo-container">
        <h1 class="h1 title">Información del producto</h1>
        <div class="chollo-unico">
            <h2 class="">{{ $chollo->titulo }}</h2>
            <img src="{{ asset('img/' . $chollo->id . '-chollo-severo.jpg') }}"
                alt="{{ $chollo->id }}-chollo-severo.jpg" width="350" height="350">

            <p class="precios">

                <span class="precio-rebajado">{{ $chollo->precioDescuento }}€</span>
                <span class="precio-original">{{ $chollo->precio }}€</span>
            </p>

            @if (!$chollo->disponible)
                <p class="no-disponible">Lo sentimos, el producto ya no está disponible :(</p>

            @endif
            <p class="descripcion"><b>Descripción: </b>{{ $chollo->descripcion }}</p>

            <form action="{{ route('eliminar', $chollo->id) }}" method="POST">
                @method("DELETE")
                @csrf
                <button type="submit" class="btn borrar"><i class="fas fa-trash    "></i> | Borrar producto</button>
            </form>
            <form action="{{ route('editar', $chollo->id) }}">
                <button type="submit" class="btn editar"><i class="fas fa-pencil    "></i> | Editar el producto</button>
            </form>
            {{-- <a href="{{ route('editar', $chollo->id) }}" class="editar">Editar el producto</a> --}}
        </div>
    </div>
@endsection
