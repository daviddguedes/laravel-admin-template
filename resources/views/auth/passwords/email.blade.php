@extends('layout.auth')

@section('content')
    <div class="animate form login_form">
        <section class="login_content">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form role="form" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}
                <h1>Criar Nova Senha</h1>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" placeholder="Digite aqui seu email" name="email"
                           value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>

                <div>
                    <button class="btn btn-warning btn-block submit" type="submit">Criar nova senha</button>
                    <a href="{{ url('/login') }}" class="btn btn-primary btn-block submit">Cancelar</a>
                </div>

                <div class="clearfix"></div>
            </form>
        </section>
    </div>
@endsection






