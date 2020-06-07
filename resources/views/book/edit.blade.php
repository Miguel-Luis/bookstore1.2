@extends('layouts.app')

@section('title', 'Edit')

@section('content')
    <form action="/book/edit/{{$book->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row">
            <h2 class="header center-align">Editar Libro</h2>
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            {{-- Name --}}
                            <div class="input-field col s6">
                                <input id="name" type="text" class="validate {{ $errors->has('name') ? 'invalid ' : '' }}" name="name" value="{{ old('name', $book->book_name) }}">
                                <label for="name">Nombre</label>
                            </div>
                            {!! $errors->first('name', '<span class="help-block red-text">:message</span>') !!}

                            {{-- Author --}}
                            <div class="input-field col s6">
                                <input id="author" type="text" class="validate {{ $errors->has('author') ? 'invalid ' : '' }}" name="author" value="{{ old('author', $book->book_author) }}">
                                <label for="author">Autor</label>
                            </div>
                            {!! $errors->first('author', '<span class="help-block red-text">:message</span>') !!}
                        </div><br>

                        {{-- Description --}}
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea data-length="2500" id="description" class="materialize-textarea {{ $errors->has('description') ? 'invalid ' : '' }}" name="description">{{ old('description', $book->book_description) }}</textarea>
                                <label for="description">Descripción</label>
                            </div>
                            {!! $errors->first('description', '<span class="help-block red-text">:message</span>') !!}
                        </div><br>

                        <div class="row">
                            {{-- Category --}}
                            <div class="input-field col s6">
                                <select id="category" name="category">
                                    <option value="" disabled selected>Elige una categoria</option>
                                    @foreach ($categories as $option)
                                        <option value="{{$option->id}}" @if ($book->category_id === $option->id) selected='selected' @endif>{{$option->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {!! $errors->first('priority', '<span class="help-block red-text">:message</span>') !!}

                            {{-- Imagen --}}
                            <div class="col s6">
                                <div class = "file-field input-field">
                                    <div class = "btn blue lighten-1 left">
                                        <span>Cargar</span>
                                        <input type = "file" id="image" name="image" accept="image/png, image/jpeg" />
                                    </div>

                                    <div class = "file-path-wrapper">
                                        <input class = "file-path validate" type = "text"
                                            placeholder = "{{$book->book_image}}" />
                                    </div>
                                </div>
                            </div>
                        </div><br>
                    </div>
                    <div class="card-action">
                        {{-- Guardar --}}
                        <a href="#editar" title="Guardar"
                        class="waves-effect waves-light btn modal-trigger btn-floating btn-large blue lighten-1 left">
                            <i class="material-icons">save</i>
                        </a>

                        {{-- Cancelar --}}
                        <a href="/category" title="Cancelar"
                        class="waves-effect waves-light btn modal-trigger btn-floating btn-large deep-orange darken-4 right">
                            <i class="material-icons">cancel</i>
                        </a>
                    </div>

                    <!-- Modal Structure -->
                    <div id="editar" class="modal" style="width: 30%; height: 45%; border-radius: 15px;">
                        <div class="modal-content center-align">
                            <i class="material-icons large" style="color: #ffc400">mode_edit</i>
                            <h4 style="color: gray">¿Editar?</h4>
                            <p style="color: gray">Editaras este libro...</p>
                        </div>
                        <div class="modal-footer">
                            <div class="center-align">
                                <button type="submit" class="waves-effect waves-light btn-flat blue lighten-1 white-text" style="border-radius: 15px;">
                                    Aceptar
                                </button>
                                <a class="modal-close waves-effect waves-light btn-flat deep-orange accent-4 white-text" style="border-radius: 15px;">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="{{asset('js/forms.js')}}"></script>
@endsection
