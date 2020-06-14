@extends('layouts.app')

@section('title', $category->name)

@section('content')
    @if(Route::has('login'))
        @auth
            <a href="/category/{{$category->id}}/books/create" title="Agregar Libro" class="waves-effect waves-light btn-floating btn-large blue lighten-1 right">
                <i class="material-icons">add</i>
            </a>
        @endauth
    @endif
    <div class="row">
        <h3 class="header center-align">{{$category->name}}</h3>
        <a href="/"><i class="small material-icons left">arrow_back</i></a>
        <p class="center-align">{{$category->description}}</p>
    </div>
    <div class="row">
        @foreach ($category->books as $book)
            <div class="card large col s12 m6 l4 xl3">
                <div class="card-image waves-effect waves-block waves-light">
                    @if ($book->book_image == 'pordefecto')
                        <img class="activator" src="/images/{{$pordefecto}}.jpg">
                    @else
                        <img class="activator" src="/images/{{$book->book_image}}">
                    @endif
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">{{$book->book_name}}<i class="material-icons right">eject</i></span>
                    <p>{{$category->name}}</p>
                    <div class="card-action">
                        <div class="row">
                            @if (Route::has('login'))
                                @auth
                                    {{-- Mostrar --}}
                                    <div id="talbe" class="col s4">
                                        <a href="/book/{{$book->id}}" title="Mostrar"
                                        class="waves-effect waves-light btn-floating btn-small green darken-3">
                                            <i class="material-icons">remove_red_eye</i>
                                        </a>
                                    </div>
                                    {{-- Editar --}}
                                    <div class="col s4">
                                        <a href="/book/{{$book->id}}/edit" title="Editar"
                                        class="waves-effect waves-light btn-floating btn-small amber accent-3">
                                            <i class="material-icons">edit</i>
                                        </a>
                                    </div>
                                    {{-- Eliminar --}}
                                    <div class="col s4">
                                        <strong id="{{$book->id}}">
                                            <button data-target="eliminar" class="waves-effect waves-light btn modal-trigger btn-floating btn-small deep-orange darken-4 modal-trigger">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </strong>
                                    </div>
                                @else
                                    <p><a href="/book/{{$book->id}}">Ver más...</a></p>
                                @endauth
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">{{$book->book_name}}<i class="material-icons right">close</i></span>
                    <span>{{$book->book_author}}</span>
                    <p>{{substr($book->book_description, 0, 400)."..."}}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
