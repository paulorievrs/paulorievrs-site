@extends('header')
    @section('header')
@stop
@extends('navbar')
@section('nav')
<div class="container-fluid" style="padding-top: 20px">
    <div class="col-lg-12">
        <h1>Editar um post</h1>
        <form action="/posts/{{ $post->id }}" method="POST" role="form" class="php-email-form">
            @method('PUT')
            {{ csrf_field() }}
            <div class="form-row">
                <div class="col-md-6 form-group">
                    <input type="text" name="postName" value="{{ $post->postName }}" class="form-control" placeholder="Nome"/>
                </div>
                <div class="col-md-6 form-group">
                    <input type="date" class="form-control" value="{{ $post->postDate }}" name="postDate" />
                </div>
            </div>

            <div class="form-group">
                <textarea class="form-control" name="postCaption"  rows="5" data-rule="required" placeholder="Legenda">{{ $post->postCaption }}</textarea>
            </div>

            <div class="form-group">
                <textarea class="form-control" name="extraData" rows="3" placeholder="Extra Data">{{ $post->extraData }}</textarea>
            </div>

            <div class="form-row">
                <div class="col-md-12 form-group">
                    <input type="text" placeholder="Youtube Embed LINK" value="{{ $post->youtube }}" class="form-control" name="youtube"  />
                </div>
            </div>

            <div class="text-center" style="margin-top: 10px;">
                <button type="submit" class="btn btn-success">Editar</button>
                <a type="button" href="/posts" class="btn btn-danger">Cancelar</a>
            </div>

        </form>
    </div>
</div>

@stop
@extends('footer')
@section('footer')
@stop
