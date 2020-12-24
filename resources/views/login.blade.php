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

    <div class="container pt-5">
        <form action="/logar" method="POST">
            @method('post')
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <a class="underline" href="/cadastro" style="cursor: pointer">Não tenho cadastro</a>
        </form>
    </div>
@extends('footer')
@section('footer')
@stop
