<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Chollosevero</title>
</head>

<body>
    <header>
        <div class="main-container">

            <nav class="main-nav">

                <ul class="logo-list">
                    <li><a href="{{ route('main') }}"><img src="" alt="logo" height="50" width="120"></a></li>
                </ul>
                <ul class="action-list">
                    <li>
                        <input type="search" name="" placeholder="Buscar...">
                    </li>
                    <li>
                        <a href="" class="btn secondary-btn">Regístrate / Inicia sesión</a>
                    </li>
                    <li>
                        <a href="{{ route('crear') }}" class="btn primary-btn">
                            <i class="fas fa-plus"> Subir chollo</i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="tagbar-container">

            <nav class="tagbar-nav">
                <ul>
                    <li><a href=""><i class="fas fa-microchip"> </i> Electrónica</a></li> {{-- a completar con route --}}
                    <li><a href=""><i class="fas fa-gamepad"> </i> Gaming</a></li>
                    <li><a href=""><i class="fas fa-drumstick-bite"> </i> Alimentación</a></li>
                    <li><a href=""><i class="fas fa-tshirt"> </i> Moda</a></li>
                    <li><a href=""><i class="fas fa-heart"> </i> Salud y belleza</a></li>
                    <li><a href=""><i class="fas fa-plane"> </i> Viajes</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            @yield('formulario')
            @yield('chollos')
        </div>
    </main>

    <footer>
        <div class="footer-container">

            <p class="p p1">Proyecto realizado para práctica de Laravel, Eloquent y PHP</p>
            <p class="p p3 author"><b>Autor: </b><a href="https://instagram.com/alesvolta_" target="_blank">Ales Volta</a></p>
            <span class="p p3 copy">©CholloSevero 2022</span>
        </div>
    </footer>
</body>

</html>
