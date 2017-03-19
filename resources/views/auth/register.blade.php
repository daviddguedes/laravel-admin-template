@extends('layout.auth')

@section('content')
    <div id="register" class="animate form">
        <section class="login_content">
            <form role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <h1>Cadastrar Usuário</h1>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="name" type="text" class="form-control" name="name"
                           value="{{ old('name') }}" placeholder="Qual é seu nome?" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email"
                           value="{{ old('email') }}" placeholder="Digite o email" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" placeholder="Digite sua senha" class="form-control"
                           name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input id="password_confirmation" type="password" placeholder="Digite novamente sua senha" class="form-control"
                           name="password_confirmation" required>

                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                    @endif
                </div>

                <div>
                    <button class="btn btn-default btn-block submit" type="submit">Criar</button>
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                    <p class="change_link">Já é cadastrado(a) ?
                        <a href="/login" class="to_register"> Log in </a>
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
