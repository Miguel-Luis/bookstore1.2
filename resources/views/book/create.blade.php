@extends('layouts.app')

@section('title', 'Create')

@section('content')
    <form action="/book/create" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <h2 class="header center-align">Agregar Libro</h2>
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            {{-- Name --}}
                            <div class="input-field col s12 m12 l6">
                                <input data-length="255" id="name" type="text" class="validate {{ $errors->has('name') ? 'invalid ' : '' }}" name="name" value="{{ old('name') }}">
                                <label for="name">Nombre</label>
                                {!! $errors->first('name', '<span class="help-block red-text">:message</span>') !!}

                            </div>

                            {{-- Author --}}
                            <div class="input-field col s12 m12 l6">
                                <input data-length="255" id="author" type="text" class="validate {{ $errors->has('author') ? 'invalid ' : '' }}" name="author" value="{{ old('author') }}">
                                <label for="author">Autor</label>
                            </div>
                            {!! $errors->first('author', '<span class="help-block red-text">:message</span>') !!}
                        </div><br>

                        {{-- Description --}}
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea data-length="1000" id="description" class="materialize-textarea validate {{ $errors->has('description') ? 'invalid ' : '' }}" name="description">{{ old('description') }}</textarea>
                                <label for="description">Descripción</label>
                            </div>
                            {!! $errors->first('description', '<span class="help-block red-text">:message</span>') !!}
                        </div><br>

                        <div class="row">
                            {{-- Category --}}
                            <div class="input-field col s12 m12 l6">
                                <select id="category" name="category">
                                    <option value="" disabled selected>Elige una categoria</option>
                                    @foreach ($categories as $option)
                                        <option value="{{$option->id}}" @if ($category === $option->id) selected='selected' @endif>{{$option->name}}</option>
                                    @endforeach
                                </select>
                                {!! $errors->first('category', '<span class="help-block red-text">:message</span>') !!}
                            </div>

                            {{-- Imagen --}}
                            <div class="col s12 m12 l6">
                                <div class = "file-field input-field">
                                    <div class = "btn blue lighten-1 left">
                                        <span>Cargar</span>
                                        <input type = "file" id="image" name="image" accept="image/png, image/jpeg" />
                                    </div>

                                    <div class = "file-path-wrapper">
                                        <input class = "file-path validate" type = "text"
                                            placeholder = "Solo imagenes" />
                                    </div>
                                </div>
                            </div>
                        </div><br>
                    </div>
                    <div class="card-action">
                        {{-- Guardar --}}
                        <a href="#guardar" title="Guardar"
                        class="waves-effect waves-light btn modal-trigger btn-floating btn-large blue lighten-1 left">
                            <i class="material-icons">save</i>
                        </a>

                        {{-- Cancelar --}}
                        <a href="@if ($category === 0) / @else /category/show/tables/{{$category}} @endif" title="Cancelar"
                        class="waves-effect waves-light btn modal-trigger btn-floating btn-large deep-orange darken-4 right">
                            <i class="material-icons">cancel</i>
                        </a>
                    </div>

                    {{-- Modal --}}
                    @include('custom.bookmodals.createbook')
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
