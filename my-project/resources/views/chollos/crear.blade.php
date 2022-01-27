@extends('main')
@section('formulario')
    <div class="edit-page">
        <h2 class="title">Añadir un nuevo producto</h2>
        @if (session('mensaje'))
            <div class="mensaje-chollo">
                {{ session('mensaje') }}
            </div>
        @endif
        <form action="{{ route('crearChollo') }}" method="POST">
            @csrf
            <label for="fnom">Nombre del producto

                <input type="text" name="ftit" placeholder="" class="form-input-text" autofocus>
            </label>
            <label for="fdesc">Descripción del producto

                <textarea name="fdesc" cols="30" rows="10" placeholder="Describe tu chollo"
                    class="form-input-textarea"></textarea>
            </label>

            <label for="furl">Enlace a la página del producto
                <input type="url" name="furl" placeholder="www.ejemplo.com">
            </label>
            <label for="fcat"> Categoría

                <select name="fcat">
                    <option value="CAN">Cannabis</option>
                    <option value="LSD">LSD</option>
                    <option value="OXI">Oxicodona</option>
                    <option value="MDA">MDA</option>
                    <option value="COC">Benzoilmetilecgonina</option>
                    <option value="DIA">Diacetilmorfina</option>
                    <option value="SET">Psilocibios</option>
                </select>
            </label>
            <label for="fprecio">Precio original del producto
                <input type="text" name="fprecio">
            </label>

            <label for="fnuevoPrecio">Precio con descuento
                <input type="text" name="fnuevoPrecio">
            </label>
            <input class="btn editar" type="submit" value="Enviar!">
        </form>

    </div>
@endsection
