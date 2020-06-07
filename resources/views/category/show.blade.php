@extends('layouts.app')

@section('title', $category->name)

@section('content')
    <div class="row">
        @if (substr($category->name, -1) != 's')
            <h3 class="header center-align">Libros {{$category->name}}s</h3>
        @else
            <h3 class="header center-align">Libros {{$category->name}}</h3>
        @endif

        <a href="/"><i class="small material-icons left">arrow_back</i></a>
        <p class="center-align">{{$category->description}}</p>
    </div>
    <div class="row">
        @foreach ($category->books as $book)
            <div class="card large col s12 m6 l4 xl3">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="/images/{{$book->book_image}}">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">{{$book->book_name}}<i class="material-icons right">arrow_upward</i></span>
                    <p>{{$category->name}}</p>
                <p><a href="/book/{{$book->id}}">Ver más...</a></p>
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
