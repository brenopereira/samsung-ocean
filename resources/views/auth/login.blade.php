@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
@endsection

@section('content')
    <div class="login-page">
        <div class="background-page"></div>
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-6 offset-md-3">
                    <div class="logo-container">
                        <img src="/logo.png" alt="Logo" />
                    </div>
                    <form>
                        <div class="login-container">
                            <div class="login-form-container">
                                <div class="form-group">
                                    <label class="label-control">E-mail</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label class="label-control">Senha</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label class="label-checkbox">
                                        <input type="checkbox" />
                                        Continuar conectado
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button>
                            Entrar
                        </button>
                    </form>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 text-left text-mobile">
                                <span class="link">
                                    <a href="/">Esqueceu a sua senha?</a>
                                </span>
                            </div>
                            <div class="col-sm-6 text-right text-mobile">
                                <span class="link">
                                    Não tem conta?  <a href="/">Cadastre-se</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
