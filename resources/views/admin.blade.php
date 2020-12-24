@extends('header')
    @section('header')
@stop

@extends('navbar')
@section('nav')
<div class="container pt-5">
    <div class="row row-cols-2">
        <div class="col pb-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Posts</h5>
                    <p class="card-text">Os posts do instagram podem ser visualizados ou criados aqui.</p>
                    <a href="/posts" class="btn btn-primary">Visualizar</a>
                    <a href="/createposts" class="btn btn-outline-success">Criar</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Image Links</h5>
                    <p class="card-text">Os links de imagem podem ser visualizados ou criados aqui.</p>
                    <a href="/imagelinks" class="btn btn-primary">Visualizar</a>
                    <a href="/createimagelink" class="btn btn-outline-success">Criar</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Extra Links</h5>
                    <p class="card-text">Os links extras podem ser visualizados ou criados aqui.</p>
                    <a href="/extralinks" class="btn btn-primary">Visualizar</a>
                    <a href="/createextralink" class="btn btn-outline-success">Criar</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Sorteios</h5>
                    <p class="card-text">Os sorteios podem ser visualizados ou criados aqui.</p>
                    <a href="/giveaways" class="btn btn-primary">Visualizar</a>
                    <a href="/creategiveaways" class="btn btn-outline-success">Criar</a>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@extends('footer')
@section('footer')
@stop

