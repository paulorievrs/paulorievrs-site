@extends('header')
    @section('header')
@stop
@extends('navbar')
@section('nav')
    <div class="container-fluid" style="padding-top: 20px">
        <div class="col-lg-12">
            <h1>Editar um link de imagem</h1>
            <form action="/imagelinks/{{ $imagelink->imageId }}" method="post" role="form" class="php-email-form">
            {{ csrf_field() }}
                @method('PUT')
                <div class="form-row">
                    <div class="col-md-12 form-group">
                        <input type="text" name="imagelink" class="form-control" id="name" value="{{ $imagelink->imageLink }}" placeholder="Image Link"/>
                    </div>

                    <div class="col-md-12 form-group">
                        <input type="text" name="imageIndex" class="form-control" id="name" value="{{ $imagelink->imageIndex }}" placeholder="Image Index"/>
                    </div>

                    <div class="col-md-12 form-group">
                        <div class="input-group">
                            <select class="custom-select" id="inputGroupSelect04" name="postId">
                                <option select value="{{ $imagelink->postId }}">{{ $imagelink->postName }}</option>
                                @foreach($posts as $post)
                                    <option value="{{ $post->id }}"> {{ $post->postName }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Alterar</button>
                    <a type="button" href="/imagelinks" class="btn btn-danger">Cancelar</a>
                </div>

            </form>
        </div>
    </div>
@stop

@extends('footer')
@section('footer')
@stop
