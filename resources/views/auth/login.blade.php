@extends('layout.auth')

@section('content')
    <div class="animate form login_form">
        <section class="login_content">
            <form role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <h1>Faça login</h1>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" placeholder="Digite seu email" class="form-control" name="email"
                           value="{{ old('email') }}"
                           required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" placeholder="Digite a senha" class="form-control"
                           name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            Lembre de mim
                        </label>
                    </div>
                </div>

                <div>
                    <button class="btn btn-default btn-block submit" type="submit">Log in</button>
                    <a href="{{ route('password.request') }}">Esqueceu a senha?</a>
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                    <p class="change_link">É novo no BlimBoo?
                        <a href="/register" class="to_register"> Crie uma conta </a>
                    </p>

                    <div class="clearfix"></div>
                    <br/>

                    <div>
                        <h1><i class="fa fa-paw"></i> BlimBoo!</h1>
                        <p>©2017 All Rights Reserved.</p>
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection





