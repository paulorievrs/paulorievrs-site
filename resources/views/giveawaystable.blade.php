@extends('header')
@section('header')
@stop

@extends('navbar')
@section('nav')



<div class="container container-fluid" style="padding-top: 20px">
    <div class="row">
        <div class="table-responsive">

            <table class="table">
                <thead>
                    <h1>Sorteios</h1>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Curso</th>
                        <th scope="col">Link do curso</th>
                        <th scope="col">Data</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Modo</th>

                    </tr>
                </thead>
                <tbody>
                @foreach($giveaways as $giveaway)
                <tr>
                    <td scope="row">{{ $giveaway->id }}</td>
                    <td>{{ $giveaway->username }}</td>
                    <td>{{ $giveaway->curso }}</td>
                    <td><a href="{{ $giveaway->link_curso }}" target="_blank">{{ $giveaway->link_curso }}</a></td>
                    <td>{{ date('d/m/Y', strtotime($giveaway->data)) }}</td>
                    <td>{{ "R$ " . $giveaway->valor . ",00" }}</td>
                    <td>{{ $giveaway->modo }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {{ $giveaways->links() }}
        </div>
    </div>
</div>
@stop
@extends('footer')
@section('footer')
@stop
