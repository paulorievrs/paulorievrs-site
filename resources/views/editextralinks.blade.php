@extends('header')
    @section('header')
@stop
@extends('navbar')
@section('nav')
    <div class="container-fluid" style="padding-top: 20px">
        <div class="col-lg-12">
            <h1>Alterar um link extra</h1>
            <form action="/extralinks/{{ $extralink->extralinkId }}" method="POST" role="form" class="php-email-form">
                {{ csrf_field() }}
                @method('PUT')
                <div class="form-row">
                    <div class="col-md-12 form-group">
                        <input type="text" name="name" class="form-control" id="name" value="{{ $extralink->name }}" placeholder="Extra Link Name"/>
                    </div>

                    <div class="col-md-12 form-group">
                        <input type="text" name="link" class="form-control" id="name" value="{{ $extralink->link }}" placeholder="Extra Link"/>
                    </div>

                    <div class="col-md-12 form-group">
                        <div class="input-group">
                            <select class="custom-select" id="inputGroupSelect04" name="postId">
                                <option value="{{ $extralink->postId }}">{{ $extralink->postName }}</option>
                                    @foreach($posts as $post)
                                        <option value="{{ $post->id }}"> {{ $post->postName }}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>

                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Alterar</button>
                    <a type="button" href="/extralinks" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@stop

@extends('footer')
@section('footer')
@stop
