@extends('layouts.app')

@section('title', $category->name)

@section('content')
    <a href="/category/"><i title="Regresar" class="small material-icons left">arrow_back</i></a>

    <a href="/category/{{$category->id}}/books/create" title="Agregar Libro" class="waves-effect waves-light btn-floating btn-large blue lighten-1 right">
        <i class="material-icons">add</i>
    </a>

    <h2 class="header center-align">{{$category->name}}</h2>
    <table class="striped amber lighten-4 responsive-table centered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Autor</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Imagen</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            <tbody>
                @foreach ($category->books as $book)
                    <tr>
                        <td>{{$book->id}}</td>
                        <td>{{$book->book_name}}</td>
                        <td>{{$book->book_author}}</td>
                        <td>{{$book->book_description}}</td>
                        <td>{{$category->name}}</td>
                        <td>
                            @if ($book->book_image == 'pordefecto')
                                <img src="/images/{{$pordefecto}}.jpg" width="70" height="100">
                            @else
                                <img src="/images/{{$book->book_image}}" width="70" height="100">
                            @endif
                        </td>
                        <td>
                            <a href="/book/{{$book->id}}" title="Mostrar"
                            class="waves-effect waves-light btn-floating btn-large green darken-3">
                                <i class="material-icons">remove_red_eye</i>
                            </a>
                        </td>
                        <td>
                            <a href="/book/{{$book->id}}/edit" title="Editar"
                            class="waves-effect waves-light btn-floating btn-large amber accent-3">
                                <i class="material-icons">edit</i>
                            </a>
                        </td>
                        <td>
                            <strong id="{{$book->id}}">
                                <button data-target="eliminar" class="waves-effect waves-light btn modal-trigger btn-floating btn-large deep-orange darken-4 modal-trigger">
                                    <i class="material-icons">delete</i>
                                </button>
                            </strong>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </thead>
    </table>

    {{-- Modal --}}
    @include('custom.bookmodals.deletebook')
@endsection

@section('scripts')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="{{asset('js/index.js')}}"></script>
@endsection
