@extends('layout.auth')

@section('content')
    <div id="register" class="animate form">
        <section class="login_content">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form role="form" method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}
                <h1>Criar nova senha</h1>

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" placeholder="Digite o email" name="email" value="{{ $email or old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" placeholder="Digite sua nova senha" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input id="password-confirm" type="password" placeholder="Repita a senha" class="form-control" name="password_confirmation" required>

                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                    @endif
                </div>

                <div>
                    <button class="btn btn-default btn-block submit" type="submit">Salvar nova senha</button>
                    <a href="{{ url('/login') }}" class="btn btn-primary btn-block submit">Cancelar</a>
                </div>

                <div class="clearfix"></div>

            </form>
        </section>
    </div>
@endsection

