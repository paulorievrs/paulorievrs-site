@extends('header')
    @section('header')
@stop

@extends('navbar')
@section('nav')

    <div class="container" style="padding-top: 20px">
        <div class="row">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <h1>Posts</h1>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Legenda</th>
                        <th scope="col">Data</th>
                        <th scope="col">Extra Data</th>
                        <th>Editar</th>
                        <th>Deletar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td scope="row">{{ $post->id }}</td>
                        <td>{{ $post->postName }}</td>
                        <td>{{ Str::limit($post->postCaption, 20, $end = '...') }}</td>
                        <td>{{ date('d/m/Y', strtotime($post->postDate)) }}</td>
                        <td>{{ Str::limit($post->extraData, 20, $end = '...') }}</td>
                        <td><a href="/editpost/{{ $post->id }}"><i class="fa fa-edit fa-xs" style="color: orange; cursor: pointer"></i></a></td>
                        <td>
                            <form action="/posts/{{ $post->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <button style="background: none"><i class="fa fa-trash" style="color: red; cursor: pointer"></i></button>
                            </form>
                        </td>
                    @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-center">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@stop

@extends('footer')
@section('footer')
@stop

