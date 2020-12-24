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
                        <h1>Extra Links</h1>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Extra Link Name</th>
                            <th scope="col">Extra Link</th>
                            <th scope="col">Post Name</th>
                            <th>Editar</th>
                            <th>Deletar</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($extralinks as $extralink)
                    <tr>
                        <td scope="row">{{ $extralink->extralinkId }}</td>
                        <td>{{ $extralink->name }}</td>
                        <td><a href="{{ $extralink->link }}" target="_blank">{{ $extralink->link }}</a></td>
                        <td>{{ $extralink->postName }}</td>
                        <td><a href="/editextralinks/{{ $extralink->extralinkId }}"><i class="fa fa-edit fa-xs" style="color: orange; cursor: pointer"></i></a></td>
                        <td>
                            <form action="/extralinks/{{ $extralink->extralinkId}}" method="POST">
                                @csrf
                                @method('delete')
                                <button style="background: none"><i class="fa fa-trash" style="color: red; cursor: pointer"></i></button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $extralinks->links() }}
            </div>
        </div>
    </div>
@stop

@extends('footer')
@section('footer')
@stop
