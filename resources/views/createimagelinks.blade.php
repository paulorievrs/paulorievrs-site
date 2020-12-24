@extends('header')
    @section('header')
@stop
@extends('navbar')
@section('nav')
    <div class="container-fluid" style="padding-top: 20px">
        <div class="col-lg-12">
            <h1>Criar um link de imagem</h1>
            <form action="/imagelinks" method="post" role="form" class="php-email-form">
            {{ csrf_field() }}
                <div class="form-row">
                    <div class="col-md-12 form-group">
                        <input type="text" name="imagelink" class="form-control" id="name" placeholder="Image Link"/>
                    </div>

                    <div class="col-md-12 form-group">
                        <input type="text" name="imageIndex" class="form-control" id="name" placeholder="Image Index"/>
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
                    <a type="button" href="/imagelinks" class="btn btn-danger">Cancelar</a>
                </div>

            </form>
        </div>
    </div>
@stop

@extends('footer')
@section('footer')
@stop
