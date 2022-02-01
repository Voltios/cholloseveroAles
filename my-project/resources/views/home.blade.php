@extends('main')

@section('perfil')
    <div class="main-perfil">
        <h1 class="h1 title">Panel de usuario</h1>
        <div class="chollo-container">
            <div class="chollo-unico">

                <p class=""><b>Nombre: </b>{{ Auth::user()->name }}</p>
                <p class=""><b>Dirección de correo electrónico: </b>{{ Auth::user()->email }}</p>


                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                    Cerrar sesión
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection
