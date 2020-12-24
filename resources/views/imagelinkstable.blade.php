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
                            <h1>Image Links</h1>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image Link</th>
                                <th scope="col">Image Index</th>
                                <th scope="col">Post Name</th>
                                <th>Editar</th>
                                <th>Deletar</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($imagelinks as $imagelink)
                        <tr>
                            <td scope="row">{{ $imagelink->imageId }}</td>
                            <td><a href="{{ $imagelink->imageLink }}" target="_blank">{{ $imagelink->imageLink }}</a></td>
                            <td>{{ $imagelink->imageIndex }}</td>
                            <td>{{ $imagelink->postName }}</td>
                            <td><a href="/editimagelink/{{ $imagelink->imageId }}"><i class="fa fa-edit fa-xs" style="color: orange; cursor: pointer"></i></a></td>
                            <td>
                                <form action="/imagelinks/{{ $imagelink->imageId }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button style="background: none"><i class="fa fa-trash" style="color: red; cursor: pointer"></i></button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">

                        {{ $imagelinks->links() }}
                    </div>
                </div>
            </div>
        </div>
@stop
@extends('footer')
@section('footer')
@stop
