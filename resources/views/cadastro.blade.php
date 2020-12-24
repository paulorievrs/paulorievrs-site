@extends('header')
@section('header')
@stop
@if(session()->has('response'))
    <div class="container pt-5">
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>{{ session('response') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif


<div class="container pt-8">
        <form method="POST" action="/user">
        {{ csrf_field() }}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nome Completo</label>
                    <input type="text" class="form-control" id="inputEmail4" name="name" placeholder="Nome Completo">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">E-mail</label>
                    <input type="email" class="form-control" id="inputPassword4" name="email" placeholder="E-mail">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Senha</label>
                    <input type="password" class="form-control" id="inputEmail4" name="password" placeholder="Senha">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Confirmar Senha</label>
                    <input type="password" class="form-control" id="inputPassword4"  name="confirmPassword" placeholder="Confirmar Senha">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputEmail4">Código de administrador</label>
                    <input type="text" class="form-control" id="inputEmail4"  name="adminCode" {{ session()->has('data') and $data->adminCode or "" }} placeholder="Código de administrador">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

@extends('footer')
@section('footer')
@stop
