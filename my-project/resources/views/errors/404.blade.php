<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('estilos.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo.svg') }}" type="image/x-icon">
    <title>404 - Not found</title>
</head>

<body>
    <section class="page_404">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="col-sm-10 col-sm-offset-1  text-center">
                        <div class="four_zero_four_bg">
                            <h1 class="text-center ">OOPS!</h1>

                        </div>

                        <div class="contant_box_404">
                            <h3 class="h2">
                                No deberías haber hecho eso...
                            </h3>

                            <p>Ahora te abducen los alienígenas</p>

                            <a href="{{ route('main') }}" class=" btn link_404">Volver a inicio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
