@extends('main')
@section('formulario')

    @if (session('mensaje'))
        <div class="mensaje-chollo">
            {{ session('mensaje') }}
        </div>
    @endif
    <form action="{{ route('crearChollo') }}" method="POST">
        @csrf
        <label for="fnom">Nombre del chollo</label>
        <input type="text" name="ftit" placeholder="" class="form-input-text" autofocus>
        <label for="fdesc">Descripción del chollo</label>
        <textarea name="fdesc" cols="30" rows="10" placeholder="Describe tu chollo" class="form-input-textarea"></textarea>
        <label for="furl">Enlace a la página del chollo</label>
        <input type="url" name="furl" placeholder="www.ejemplo.com">
        <select name="fcat">
            <option value="ELE">Electrónica</option>
            <option value="GAM">Gaming</option>
            <option value="ALI">Alimentación</option>
            <option value="MOD">Moda</option>
            <option value="SAL">Salud y belleza</option>
            <option value="VIA">Viajes</option>
        </select>
        <label for="fprecio">Precio original del chollo</label>
        <input type="text" name="fprecio">

        <label for="fnuevoPrecio">Precio con descuento</label>
        <input type="text" name="fnuevoPrecio">
        <input type="submit" value="Enviar!">
    </form>

@endsection
