@extends('header')
    @section('header')
@stop
@extends('navbar')
@section('nav')
    <div class="container-fluid" style="padding-top: 20px">
        <div class="col-lg-12">
            <h1>Criar um link extra</h1>
            <form action="/extralinks" method="POST" role="form" class="php-email-form">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="col-md-12 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Extra Link Name"/>
                    </div>

                    <div class="col-md-12 form-group">
                        <input type="text" name="link" class="form-control" id="name" placeholder="Extra Link"/>
                    </div>

                    <div class="col-md-12 form-group">
                        <div class="input-group">
                            <select class="custom-select" id="inputGroupSelect04" name="postId">
                                <option selected>Qual post?</option>
                                    @foreach($posts as $post)
                                        <option value="{{ $post->id }}"> {{ $post->postName }}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>

                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <a type="button" href="/extralinks" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@stop

@extends('footer')
@section('footer')
@stop
