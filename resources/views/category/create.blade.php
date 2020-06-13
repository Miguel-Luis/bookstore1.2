@extends('layouts.app')

@section('title', 'Create')

@section('content')
    <div class="container">
        <form action="/category" method="POST">
            @csrf
            <div class="row">
                <h2 class="header center-align">Agregar Categoria</h2>
                <div class="col s12 m12 l12">
                    <div class="card">
                        <div class="card-content">
                            {{-- Name --}}
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="name" type="text" class="validate {{ $errors->has('name') ? 'invalid ' : '' }}" name="name" value="{{ old('name') }}">
                                    <label for="name">Nombre</label>
                                </div>
                                {!! $errors->first('name', '<span class="help-block red-text">:message</span>') !!}
                            </div><br>

                            {{-- Description --}}
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea data-length="255" id="description" class="materialize-textarea {{ $errors->has('description') ? 'invalid ' : '' }}" name="description">{{ old('description') }}</textarea>
                                    <label for="description">Descripción</label>
                                </div>
                                {!! $errors->first('description', '<span class="help-block red-text">:message</span>') !!}
                            </div><br>

                            {{-- Priority --}}
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="priority" type="number" min="1" max="4" class="validate {{ $errors->has('priority') ? 'invalid ' : '' }}" name="priority" value="{{ old('priority') }}">
                                    <label for="priority">Prioridad</label>
                                </div>
                                {!! $errors->first('priority', '<span class="help-block red-text">:message</span>') !!}
                            </div><br>
                        </div>
                        <div class="card-action">
                            {{-- Guardar --}}
                            <a href="#guardar" title="Guardar"
                            class="waves-effect waves-light btn modal-trigger btn-floating btn-large blue lighten-1 left">
                                <i class="material-icons">save</i>
                            </a>

                            {{-- Cancelar --}}
                            <a href="/category" title="Cancelar"
                            class="waves-effect waves-light btn modal-trigger btn-floating btn-large deep-orange darken-4 right">
                                <i class="material-icons">cancel</i>
                            </a>
                        </div>

                        {{-- Modal --}}
                        @include('custom.categorymodals.createcategory')
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="{{asset('js/forms.js')}}"></script>
@endsection
