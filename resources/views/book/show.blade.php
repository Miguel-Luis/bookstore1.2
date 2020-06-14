@extends('layouts.app')

@section('title', $book[0]->book_name)

@section('content')
    <div class="col s12 m12 l12 xl12">
        <a href="/"><i title="Regresar" class="small material-icons left">arrow_back</i></a>
        <h2 class="header center-align">{{$book[0]->book_name}}</h2>
        <div class="card horizontal">
            <div class="card-image" >
                @if ($book[0]->book_image == 'pordefecto')
                    <img class="activador materialboxed" width="650" src="../images/{{$pordefecto}}.jpg">
                @else
                    <img class="activador materialboxed" width="650" src="../images/{{$book[0]->book_image}}">
                @endif
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    @if(Route::has('login'))
                        @auth
                            <form action="{{route('book.sendEmail', $id)}}" method="POST">
                                @csrf
                                {{-- Enviar --}}
                                <a href="#enviar" title="Enviar email"
                                class="waves-effect waves-light btn modal-trigger btn-floating btn-medium amber darken-2">
                                    <i class="material-icons">send</i>
                                </a>

                                <ul>
                                    {{-- Modal --}}
                                    @include('custom.bookmodals.sendbook')
                                </ul>
                            </form>
                        @endauth
                    @endif

                    <p class="center-align"><b>Sinopsis:</b></p>
                    <p>{{$book[0]->book_description}}</p>
                    <p class="center-align"><b>Autor</b> {{$book[0]->book_author}}</p>
                    <p class="center-align"><b>Categoría:</b> {{$book[0]->name}}</p>
                </div>
                <div class="card-action">
                    <a href="/">Regresar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
