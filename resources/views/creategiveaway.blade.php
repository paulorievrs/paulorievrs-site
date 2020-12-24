@extends('header')
    @section('header')
@stop
@extends('navbar')
@section('nav')
<div class="container-fluid" style="padding-top: 20px">
    <div class="col-lg-12">
        <h1>Cadastrar um ganho de curso</h1>
        <form action="/giveaways" method="POST" role="form" class="php-email-form">
            {{ csrf_field() }}
            <div class="form-row">
                <div class="col-md-6 form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username"/>
                </div>
                <div class="col-md-6 form-group">
                    <input type="date" class="form-control" name="data" />
                </div>
            </div>

            <div class="form-group">
                <input type="text" name="curso" class="form-control" placeholder="Curso"/>
            </div>

            <div class="form-group">
                <input type="text" name="link_curso" class="form-control" placeholder="Link do Curso"/>
            </div>
            <div class="form-group">
                <input type="number" name="valor" class="form-control" placeholder="Valor"/>
            </div>

            <select class="custom-select" id="inputGroupSelect04" name="modo">
                <option selected>Modo</option>
                <option value="Sorteio">Sorteio</option>
                <option value="Rievrs Points">Rievrs Points</option>
            </select>

            <div class="text-center" style="margin-top: 10px;">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a type="button" href="/giveaways" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
</div>

@stop
@extends('footer')
@section('footer')
@stop

