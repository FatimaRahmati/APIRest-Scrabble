@extends('layouts.app',
['title' => 'Reinicio contraseña', 'css_files' => ['test_scr_login'],
'js_files' => ['test_scr_reset']])

@section('content')

<div class="container-fluid register-page my-5">
    <h2 class="d-flex justify-content-center mb-4">
        Recupera tu contraseña
    </h2>
    <div class="container d-flex justify-content-center align-self-center">
        <form action="{{ route('password.email') }}" method="POST">

            <input type="email" id="useremail" name="useremail" placeholder="Email" value="{{old('useremail')}}"
                autocomplete="on" required /><br>

            <input class="boton botonlink" type="submit" value="Enviar">

        </form>
    </div>

    <div class="d-flex justify-content-center mt-4">¿Estás aquí por error? <a class="px-1"
            href="{{ route('register') }}">
            Regístrate</a> o <a class="pl-1" href="{{ route('login') }}">
            Accede</a></div>
</div>



<!--     <div></div>
    <div class="form">
        <div class="card-body">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf <!-- por razones educativas está desactivado 

                <label for="email">Correo electrónico</label>
                <input id="email" type="email" name="email" required>
                <br>
                <button type="submit">
                    Envia enlace para el reinicio de contraseña
                </button>
             </form>
        </div>    
    </div>
    @if ($errors->isNotEmpty())
        <div class="error">
            <div>
                <h4>Error modo 1</h4>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h4>Error modo 2</h4>
                @if ($errors->has('email'))
                    <p><strong>email:</strong>{{ $errors->first('email') }}</p>
                @endif
            </div>
        </div>
    @endif
    @if (session('status'))
        <div class="informacion">
            {{ session('status') }}       
        </div>
    @endif -->
@endsection