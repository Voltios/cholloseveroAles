<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('estilos.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo.svg') }}" type="image/x-icon">
    <title>Chollosevero</title>
</head>

<body>
    <header>
        <div class="main-container">

            <nav class="main-nav">

                <ul class="logo-list">
                    <li><a href="{{ route('main') }}"><img src="{{ asset('img/logo.svg') }}" alt="logo" height="50"
                                width="100"></a></li>
                </ul>
                <ul class="action-list">
                    <li>
                        <input type="search" name="" placeholder="Buscar...">

                    </li>
                    <li>
                        <a href="{{route("login")}}" class="btn secondary-btn">
                            <i class="fas fa-user"></i> Regístrate / Inicia sesión</a>
                    </li>
                    <li>
                        <a href="{{ route('crear') }}" class="btn primary-btn">
                            <i class="fas fa-plus"></i> Subir producto
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="tagbar-container">

            <nav class="tagbar-nav">
                <ul>
                    <a href="cbd">
                        <li><i class="fas fa-cannabis"> </i> Cannabis</li>
                    </a> {{-- a completar con route --}}
                    <a href="lsd">
                        <li><i class="fas fa-pills"> </i> LSD</li>
                    </a>
                    <a href="oxd">
                        <li><i class="fas fa-capsules"> </i> Oxicodona</li>
                    </a>
                    <a href="mda">
                        <li><i class="fas fa-tablets"> </i> MDA</li>
                    </a>
                    <a href="ben">
                        <li><i class="fas fa-radiation"> </i> Benzoilmetilecgonina
                        </li>
                    </a>
                    <a href="mrf">
                        <li><i class="fas fa-syringe"> </i> Diacetilmorfina
                        </li>
                    </a>
                    <a href="psc">
                        <li><i class="fas fa-utensils"></i> Psilocibios
                        </li>
                    </a>
                </ul>
                <ul>
                    <a href="{{route("destacados")}}">
                        <li> <i class="fas fa-fire"></i> Destacados</li>
                    </a>
                    <a href="{{route("nuevos")}}">
                        <li><i class="fas fa-star"></i> Los más nuevos</li>
                    </a>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            @yield('formulario')
            @yield('chollos')
            @yield('informacion')
            @yield('editar')
        </div>
    </main>

    <footer>

        <p class="p p1">Proyecto realizado para práctica de Laravel, Eloquent y PHP. <br>
            <span>Todo el contenido de la aplicación es meramente recreativo, sin ningún fin de ofender a nadie.</span>
        </p>
        <p class="p p3 author">
            <b>Autor: </b>
            <a href="https://instagram.com/alesvolta_" target="_blank">
                Ales Volta
            </a>
        </p>
        <p class="p p3 copy">©CholloSevero {{ date('Y') }}</p>

    </footer>
</body>

</html>
