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
                                    <textarea id="description" class="materialize-textarea {{ $errors->has('description') ? 'invalid ' : '' }}" name="description">{{ old('description') }}</textarea>
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

                        <!-- Modal Structure -->
                        <div id="guardar" class="modal" style="width: 30%; height: 45%; border-radius: 15px;">
                            <div class="modal-content center-align">
                                <i class="material-icons large" style="color: #42a5f5">save</i>
                                <h4 style="color: gray">¿Guardar?</h4>
                                <p style="color: gray">Guardaras esta categoria...</p>
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
    </div>
@endsection
