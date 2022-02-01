@extends('main')

@section('login')
    <div class="main-login">
        <h1 class="title h1">Iniciar sesión</h1>
        <div class="chollo-unico">
            <div>
                <div>


                    <div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf


                            <div>
                                <label for="email">Correo electrónico</label>

                                <div>
                                    <input id="email" type="email" name="email" value="{{ old('email') }}" required
                                        autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password">Contraseña </label>

                                <div class="col-md-6">
                                    <input id="password" type="password" name="password" required
                                        autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div>
                                    <div>
                                        <input type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label for="remember">
                                            Recuérdame
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div>
                                    <button type="submit" class="btn">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>

                        <p>¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
