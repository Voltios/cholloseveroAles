@extends('main')

@section('editar')
    <div class="edit-page">

        <h2 class="title">Editando el producto {{ $chollo->id }}</h2>

        @if (session('mensaje'))
            <div class="mensaje">
                <p>{{ session('mensaje') }}</p>
            </div>

        @endif
        <form action="{{ route('actualizar', $chollo->id) }}" method="POST">
            @method("PUT")
            @csrf

            @error('nombre')
                <div class="error">
                    El nombre es obligatorio
                </div>
            @enderror

            @error('descripcion')
                La descripción es obligatoria

            @enderror

            <label for="fnombre">Nombre del chollo

                <input type="text" name="fnombre" class="" value="{{ $chollo->titulo }}"
                    placeholder="Nombre del producto..." autofocus>
            </label>
            <label for="fdesc">Descripción del chollo
                <textarea name="fdesc" cols="30" rows="10">{{ $chollo->descripcion }}</textarea>
            </label>
            <label for="fprecio">Precio en rebajas

                <input type="text" name="fprecio" value="{{ $chollo->precioDescuento }}"
                    placeholder="Precio descuento (sin €)">
            </label>
            <label for="fdisp">Disponible

                @if ($chollo->disponible)
                    <input class="flipswitch" type="checkbox" name="fdisponible" checked>
                @else
                    <input class="flipswitch" type="checkbox" name="fdisponible">
                @endif

            </label>
            <label for="enviar">

                <button class="btn editar " type="submit"> <i class="fas fa-check"></i> Enviar</button>
            </label>

            <a href="{{ route('main') }}" class="btn volver"><i class="fas fa-home"></i> Volver al inicio</a>
        </form>



    </div>
@endsection
